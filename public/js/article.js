// GLOBAL SETTINGS ************************************************************
let current = 1;
let timer;
const mainImage = document.getElementById('mainImage');
const nbImgRow  = document.getElementsByClassName('imgRow')[0]['childElementCount'];
const nbColors  = document.getElementsByClassName('colors')[0]['childElementCount'];
let btnColor = document.getElementsByClassName('color');
let thumbnails = document.getElementsByClassName('thumbnail');
// Activation de la premiere couleur
// let color = btnColor[0].getAttribute('name');
btnColor[0].classList.add('activeColor');


// Au click sur une miniature *************************************************

// Je génére tous les evenements onclick pour mes miniatures
for (let i = 1; i <= nbImgRow; i++) {
	let miniature = document.getElementsByClassName(i)[0];

	miniature.onclick = () => {
		// Change l'image		
		mainImage.src = `/images/articles/article_id_001/${color}/${miniature['name']}.jpg`;

		// On mets à jour l'id de l'image courante
		current = i;
	};
}

// Au click sur une couleur *************************************************

// RESET activeColor
function reset() {
	for (let i = 0; i < btnColor.length; i++) {
		btnColor[i].classList.remove('activeColor');
	}
}


// Je génére tous les evenements onclick pour mes couleurs
for (let i = 0; i < nbColors; i++) {

	btnColor[i].onclick = function() {
		// Reset
		reset();
		// Change
		color = this.getAttribute('data');
		this.classList.add('activeColor');

		let src = mainImage.src;
		if (color == 'black') {
			mainImage.src = src.replace('grey', 'black');
		} 
		else if (color == 'grey') {
			mainImage.src = src.replace('black', 'grey');
		}	
				
		for (let i = 0; i < thumbnails.length; i++) {
			let thumbnail = thumbnails[i];
			let src = thumbnail.src;
			if (color == 'black') {
				thumbnail.src = src.replace('grey', 'black');
			} 
			else if (color == 'grey') {
				thumbnail.src = src.replace('black', 'grey');
			}		
		}

	};
}