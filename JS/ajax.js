document.querySelector("#loadoffers").addEventListener("click", getData);

let xhr = new XMLHttpRequest();

function getData(event){

	xhr.onreadystatechange = handlerFunction; 
	xhr.open("GET", "selectoffers.php", true); 
	xhr.send();
}

function handlerFunction (event){     
	console.log("the ready state changed!");
	if(xhr.readyState === XMLHttpRequest.DONE){
		console.log("readystate is DONE");

		if (xhr.status === 200) {
			console.log(xhr.responseText);
			
			let responseJSON = JSON.parse(xhr.responseText);
			console.log(responseJSON);

			let div = document.createElement("div");
			for(let i=0; i<responseJSON.length; i++){
				let p = document.createElement("p");
				let pText = document.createTextNode(`${responseJSON[i].offerId}, 
					${responseJSON[i].start},
					${responseJSON[i].end},
					${responseJSON[i].offer}`)

				p.appendChild(pText);
				div.appendChild(p);
			}

			document.querySelector("offersloading").appendChild(div);
		
		} else {
			//status code error
		}
	}
};