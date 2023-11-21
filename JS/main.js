let shop = document.getElementById('shop')

let shopItemsData = [{
    id: "C",
    img: "images/Screenshot_20231024_220005_WhatsApp.jpg",
    name1: "C'bites",
    desc: "A blend of kinder chocolate and white chocolate",
    price: "$ 20"
},
{
    id: "M",
    img: "images/Screenshot_20231024_220044_WhatsApp.jpg",
    name1: "M'bites",
    desc: "Nutella filled lotus n chocolate mini cupcakes",
    price: "$ 20"
},
{
    id: "W",
    img: "images/Screenshot_20231024_220022_WhatsApp.jpg",
    name1: "W'bites",
    desc: "A mix of white chocolate and coconut",
    price: "$ 20"
},
{
    id: "K",
    img: "images/Screenshot_20231024_215913_WhatsApp.jpg",
    name1: "K'bites",
    desc: "Crunchy kunafa topped with lotus creamy biscuit spread",
    price: "$ 15" 
},
{
    id: "N",
    img: "images/Screenshot_20231024_220101_WhatsApp.jpg",
    name1: "N'bites",
    desc: "Cocoa powder covered Nutella",
    price: "$ 20"  
},
{
    id: "F",
    img: "images/Screenshot_20231024_215825_WhatsApp.jpg",
    name1: "F'bites",
    desc: "Flakes dipped in caramel and chocolate",
    price: "$ 16" 
},
{
    id: "L",
    img: "images/Screenshot_20231024_215847_WhatsApp.jpg",
    name1: "L'bites",
    desc: "Flakes dipped in caramel and chocolate",
    price: "$ 20" 
},
{
    id: "P",
    img: "images/tempFileForShare_20231024-190744.jpg",
    name1: "P'bites",
    desc: "Peanut butter plunged in choclate",
    price: "$ 20" 
},
{
    id: "B",
    img: "images/Screenshot_20231024_215741_WhatsApp.jpg",
    name1: "B'bites",
    desc: "Grandma's Basbousa. offered with hazelnut or plain",
    price: "$ 33" 
},
{
    id: "O",
    img: "images/Image_1698187246691.jpg",
    name1: "O'bites",
    desc: "Oreo cookies dipped in chocolate",
    price: "$ 20" 
}];

let basket = JSON.parse(localStorage.getItem("data")) || [];


let generateShop = ()=>{
    return (shop.innerHTML = shopItemsData.map((x)=>{
        let {id, img, name1, desc, price} = x;
        return `
        <div id=product-id-${id} class="item">
        <img width="190" height="185" src=${img} alt="">
        <div class="details">
                <h2>${name1}</h2>
                <p>${desc}</p>
                <div class="price-quantity">
                    <h3> ${price}</h3>
                    <div class="buttons">
                        <i onclick="decrement(${id})" class="bi bi-dash-lg"></i>
                        <div id=${id} class="quantity">0</div>
                        <i onclick="increment(${id})" class="bi bi-plus-lg"></i>
    
                    </div>
                </div>
        </div>
    </div>
        `
    }).join(""));
};
generateShop();

let increment = (id)=>{
    let selectedItem = id;
    let search = basket.find((x) => x.id === selectedItem.id);

    if (search === undefined){
        basket.push({
            id: selectedItem.id,
            item: 1,
        });
    } else{
        search.item +=1;
    }
    localStorage.setItem("data", JSON.stringify(basket));
    update(selectedItem.id);
};

let decrement = (id)=>{
    let selectedItem = id;
    let search = basket.find((x) => x.id === selectedItem.id);

    if (search.item === 0){
        return;
    } else{
        search.item -=1;
    }
    localStorage.setItem("data", JSON.stringify(basket));
    update(selectedItem.id);
};


let update = (id)=>{
    let search = basket.find((x)=> x.id === id);
    console.log(search.item);
    document.getElementById(id).innerHTML = search.item;
    calculation();
};

let calculation = ()=>{
        let cartIcon = document.getElementById("cartAmount");
        cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};


