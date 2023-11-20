let shop = document.getElementById('shop')

let shopItemsData = [{
    id: "C",
    image: "images/Screenshot_20231024_220005_WhatsApp.jpg",
    name1: "C'bites",
    desc: "A blend of kinder chocolate and white chocolate",
    price: "$ 20"
},
{
    id: "M",
    image: "images/Screenshot_20231024_220044_WhatsApp.jpg",
    name1: "M'bites",
    desc: "Nutella filled lotus n chocolate mini cupcakes",
    price: "$ 20"
},
{
    id: "W",
    image: "images/Screenshot_20231024_220022_WhatsApp.jpg",
    name1: "W'bites",
    desc: "A mix of white chocolate and coconut",
    price: "$ 20"
},
{
    id: "K",
    image: "images/Screenshot_20231024_215913_WhatsApp.jpg",
    name1: "K'bites",
    desc: "Crunchy kunafa topped with lotus creamy biscuit spread",
    price: "$ 15" 
},
{
    id: "N",
    image: "images/Screenshot_20231024_220101_WhatsApp.jpg",
    name1: "N'bites",
    desc: "Cocoa powder covered Nutella",
    price: "$ 20"  
}]
let generateShop = ()=>{
    return shop.innerHTML= `
    <div class="item">
    <img width="190" height="185" src="images/Screenshot_20231024_220005_WhatsApp.jpg" alt="">
    <div class="details">
            <h2>C'bites</h2>
            <p>A blend of kinder chocolate and white chocolate</p>
            <div class="price-quantity">
                <h3>$ 20</h3>
                <div class="buttons">
                    <i class="bi bi-dash-lg"></i>
                    <div class="quantity">0</div>
                    <i class="bi bi-plus-lg"></i>

                </div>
            </div>
    </div>
</div>
    `
}
generateShop()