// GLOBAL SETTINGS ************************************************************
let current = 1;
let timer;
const mainImage = document.getElementById('mainImage');
const nbImgRow  = document.getElementsByClassName('imgRow')[0]['childElementCount'];

// Au click sur une miniature *************************************************

// Je génére tous les evenements onclick pour mes miniatures
for (let i = 1; i <= nbImgRow; i++) {
	let miniature = document.getElementsByClassName(i)[0];

	miniature.onclick = () => {
        // Change l'image
        // TODO: récuperer l'image de la vignette, lui retirer le -thumbnail et l'injecter ici
		mainImage.src = `/images/articles/article_id_001/black/dos.jpg`;

		// On mets à jour l'id de l'image courante
		current = i;
	};
}


// Diaporama automatique ******************************************************
function switchImage(numImage) {

	// Je charge la miniature avec le numImage pour récupérer les infos
	let miniature = document.getElementsByClassName(numImage)[0];

	// Change l'image
	mainImage.style.backgroundImage = `url('./img/${miniature['name']}.jpg')`;

	// Affiche le texte
	info.innerText = miniature['attributes']['data']['value'];

}


// Au click sur les bouton Nxt et Prv *****************************************
// fa-step-backward
let preview = document.getElementsByClassName('fa-step-backward')[0];
preview.onclick = () => {
	current--;
	current = current || nbImgRow; // si current est a 0, current = nbImgRow
	console.log(current);
	switchImage(current);
}

// fa-step-forward
let next = document.getElementsByClassName('fa-step-forward')[0];
next.onclick = () => {
	current++;
	current = current > nbImgRow ? 1 : current;
	console.log(current);
	switchImage(current);
}

// fa-play
const controlBtnPlayPause = document.getElementsByClassName('controlBtn')[1].firstChild;
// console.log(controlBtnPlayPause);

console.log('timer depart => ' + timer);
let play = true;
controlBtnPlayPause.onclick = () =>  {
	// Je change l'icone
	if (play) {
		controlBtnPlayPause.className = "fas fa-pause";

		//Lance le diaporama
		function diaporama() {
			current++;
			current = current > nbImgRow ? 1 : current;
			console.log('Image current => ' + current);
			switchImage(current);
		}

		clearInterval(timer);
		// !!! ATTENTION !!!
		// => Dans setInterval on ne mets pas de parenthese à la fonction appelé !!!!!!
		timer = setInterval(diaporama, 1500);
		console.log('timer play => ' + timer);
		play = false;
	}
	else {
		clearInterval(timer);
		controlBtnPlayPause.className = "fas fa-play";
		console.log('timer pause => ' + timer);
		play = true;
	}
}
