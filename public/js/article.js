// GLOBAL SETTINGS ************************************************************
let current = 1;
let timer;
const mainImage = document.getElementById('mainImage');
const nbImgRow  = document.getElementsByClassName('imgRow')[0]['childElementCount'];
let color = 'black';


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

// Je génére tous les evenements onclick pour mes miniatures
for (let i = 1; i <= nbImgRow; i++) {
	let miniature = document.getElementsByClassName(i)[0];

	miniature.onclick = () => {
        // Change l'image
		color = 'black';
		mainImage.src = `/images/articles/article_id_001/${color}/${miniature['name']}.jpg`;

		// On mets à jour l'id de l'image courante
		current = i;
	};
}