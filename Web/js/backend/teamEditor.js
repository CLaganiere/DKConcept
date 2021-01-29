let gallery = null;

window.addEventListener("load", ()=> {

	gallery = document.querySelector('#teamBistro .container')
	createAddItemBtn();
	createActionModifyBtn();

});

const formToElement = () =>{

	let sectionToFill = document.createElement('div');
	sectionToFill.setAttribute("class", "row d-flex justify-content-center mt-80 mb-20");
	sectionToFill.setAttribute("id", "formulaireItem");

	let primaryDiv = document.createElement('div');
	primaryDiv.setAttribute("class", "col-lg-10 col-md-8 col-sm-8 bg-secondary text-center");

	let bottomDiv = document.createElement('div');
	bottomDiv.setAttribute("class", "mt-20 mb-20");

	let topText = document.createElement('h2');
	topText.setAttribute("class", "text-black mt-50 mb-40");
	topText.textContent = "Création d'un nouveau employés";

	let formulaire = document.createElement('form');
	formulaire.setAttribute("action", "restaurant.php");
	formulaire.setAttribute("method", "post");
	formulaire.setAttribute("enctype", "multipart/form-data");

	//Balises contenu dans le form
	let nameDiv = document.createElement('div');
	nameDiv.setAttribute("class", "mt-20 mb-20 inputDiv");

	let inputName = document.createElement('input');
	inputName.setAttribute("type", "text");
	inputName.setAttribute("name", "nom");
	inputName.setAttribute("id", "nom");
	inputName.setAttribute("placeholder", "Entrez le nom de l'employé");
	inputName.setAttribute("onfocus", "this.placeholder = ''");
	inputName.setAttribute("onblur", "this.placeholder = 'Entrez le nom de l employé'");
	inputName.setAttribute("class", "form-input h4 pt-3 pb-3 mt-20 mb-20 col-lg-6 col-md-5 col-sm-4");

	let posteDiv = document.createElement('div');
	posteDiv.setAttribute("class", "mt-20 mb-20 inputDiv");

	let inputPoste = document.createElement('input');
	// inputPoste.setAttribute("type", "text");
	inputPoste.setAttribute("name", "poste");
	inputPoste.setAttribute("id", "poste");
	inputPoste.setAttribute("placeholder", "Entrez le poste de la personne");
	inputPoste.setAttribute("onfocus", "this.placeholder = ''");
	inputPoste.setAttribute("onblur", "this.placeholder = 'Entrez le poste de la personne'");
	inputPoste.setAttribute("class", "form-input h4 pt-3 pb-3 mt-20 mb-20 col-lg-6 col-md-5 col-sm-4");

	let descDiv = document.createElement('div');
	descDiv.setAttribute("class", "mt-20 mb-20 inputDiv");

	let inputDesc = document.createElement('textarea');
	inputDesc.setAttribute("type", "text");
	inputDesc.setAttribute("name", "desc");
	inputDesc.setAttribute("id", "desc");
	inputDesc.setAttribute("placeholder", "Entrez une description");
	inputDesc.setAttribute("onfocus", "this.placeholder = ''");
	inputDesc.setAttribute("onblur", "this.placeholder = 'Entrez une description'");
	inputDesc.setAttribute("rows", "10");
	inputDesc.setAttribute("class", "form-input col-lg-8 col-md-6 col-sm-6 h4 pt-3 pb-3 mt-20 mb-20");

	let picDiv = document.createElement('div');
	picDiv.setAttribute("class", "mt-20 mb-20 inputDiv");

	let inputPicture = document.createElement('input');
	inputPicture.setAttribute("type", "file");
	inputPicture.setAttribute("name", "image");
	inputPicture.setAttribute("id", "image");
	inputPicture.setAttribute("class", "form-input text-center text-black h4 pt-2 pb-2 mt-20 mb-40");

	let inputSubmit = document.createElement('input');
	inputSubmit.setAttribute("type", "submit");
	inputSubmit.setAttribute("name", "submit");
	inputSubmit.setAttribute("value", "Ajouter l'employé");
	inputSubmit.setAttribute("class", "form-input btn-info btn-lg mx-lg-5 mx-md-5 col-lg-4 text-center");
	//Fin des balises dans le form

	let inputAnnulation = document.createElement('input');
	inputAnnulation.setAttribute("type", "button");
	inputAnnulation.setAttribute("class", "btn-warning btn-lg col-lg-4 mx-lg-5 mx-md-5 text-uppercase text-center");
	inputAnnulation.setAttribute("name", "annulation");
	inputAnnulation.setAttribute("value", "Annuler");
	inputAnnulation.onclick = () =>{
		var element = document.getElementById("formulaireItem");
		element.parentNode.removeChild(element);
		createAddItemBtn();
	};

	bottomDiv.appendChild(inputSubmit);
	bottomDiv.appendChild(inputAnnulation);

	nameDiv.appendChild(inputName);
	posteDiv.appendChild(inputPoste);
	descDiv.appendChild(inputDesc);
	picDiv.appendChild(inputPicture);

	formulaire.appendChild(nameDiv);
	formulaire.appendChild(posteDiv);
	formulaire.appendChild(descDiv);
	formulaire.appendChild(picDiv);
	formulaire.appendChild(bottomDiv);

	primaryDiv.appendChild(topText);
	primaryDiv.appendChild(formulaire);

	sectionToFill.appendChild(primaryDiv);
	gallery.appendChild(sectionToFill);
}

const createAddItemBtn = () =>{

	let sectionButton = document.createElement('div');
	sectionButton.setAttribute("class", "row d-flex justify-content-center");
	sectionButton.setAttribute("id", "sectBtnAddItem");

	let btnSuppression = document.createElement('button');
	btnSuppression.onclick = () =>{
		var element = document.getElementById("sectBtnAddItem");
		element.parentNode.removeChild(element);
		formToElement();
	};
	btnSuppression.setAttribute("class", "btn-info btn-lg col-lg-8 pt-40 pb-40 mt-60 text-uppercase text-center");
	btnSuppression.textContent = "Ajouter un nouvel employé";

	sectionButton.appendChild(btnSuppression);

	gallery.appendChild(sectionButton);
}

const createActionModifyBtn = () =>{

	let allModifBtn = document.querySelectorAll('.modify');
	for(let i=0; i < allModifBtn.length; i++){
		allModifBtn[i].onclick = () =>{
			modifyText(allModifBtn[i]);
		}
	}
}

const modifyText = (node) =>{

	nodeParent = node.parentNode;

	nodeContent = nodeParent.querySelector(".itemContent");
	nodePersonFile = nodeParent.querySelector(".itemContent .imgPerson");
	nodePersonName = nodeParent.querySelector(".itemContent .nomPerson");
	nodePersonPoste = nodeParent.querySelector(".itemContent .postePerson");
	nodePersonDesc = nodeParent.querySelector(".itemContent .descPerson");

	nodeParent.removeChild(node);
	nodeDelete = nodeParent.querySelector("form");

	let annulationBtn = document.createElement('input');
	annulationBtn.setAttribute("type", "button");
	annulationBtn.setAttribute("class", "btn-warning btn-lg h5 text-white col-lg-12 text-uppercase text-center mb-lg-2 mb-md-2 text-center cancelation");
	annulationBtn.setAttribute("name", "annulation");
	annulationBtn.setAttribute("value", "Annuler");
	annulationBtn.onclick = () =>{
		location.reload();
	};

	nodeParent.appendChild(annulationBtn);

	let formModify = document.createElement('form');
	formModify.setAttribute("action", "restaurant.php");
	formModify.setAttribute("method", "post");
	formModify.setAttribute("class", "attributeModifier")
	formModify.setAttribute("enctype", "multipart/form-data");

	let nodeIdItem = document.createElement('input');
	nodeIdItem.setAttribute("type", "hidden");
	nodeIdItem.setAttribute("name", "idItem");
	nodeIdItem.setAttribute("value", nodeParent.querySelector("form.deleteItem input").value);

	let inputPicture = document.createElement('input');
	inputPicture.setAttribute("type", "file");
	inputPicture.setAttribute("name", "newImage");
	inputPicture.setAttribute("id", "newImage");
	inputPicture.setAttribute("class", "form-input text-center text-white h5 pt-2 pb-2 mt-20 mb-40");

	let divName = document.createElement('div');
	divName.setAttribute("class", "h4 mt-2 text-justify text-white");
	divName.textContent = "Nom : ";

	let textName = document.createElement('textarea');
	textName.setAttribute("name", "newName");
	textName.setAttribute("class", "h4 toModify mealName nameModifier");
	textName.setAttribute("cols", "20");
	textName.setAttribute("rows", "1");
	textName.textContent = nodePersonName.textContent;

	let divPoste = document.createElement('div');
	divPoste.setAttribute("class", "h4 mt-2 text-justify text-white");
	divPoste.textContent = "Poste : ";

	let textPoste = document.createElement('textarea');
	textPoste.setAttribute("name", "newPoste");
	textPoste.setAttribute("class", "h4 mt-2 toModify mealName posteModifier");
	textPoste.setAttribute("cols", "20");
	textPoste.setAttribute("rows", "1");
	textPoste.textContent = nodePersonPoste.textContent;

	let divDesc = document.createElement('div');
	divDesc.setAttribute("class", "h4 mt-2 text-justify text-white");
	divDesc.textContent = "Description : ";

	let textDesc = document.createElement('textarea');
	textDesc.setAttribute("name", "newDesc");
	textDesc.setAttribute("class", "h6 text-justify mb-2 toModify descModifier");
	textDesc.setAttribute("cols", "30");
	textDesc.setAttribute("rows", "10");
	textDesc.textContent = nodePersonDesc.textContent;

	let inputSave = document.createElement('input');
	inputSave.setAttribute("type", "submit");
	inputSave.setAttribute("class", "btn-info btn-lg h5 text-white col-lg-12 text-uppercase text-center mt-lg-2 mt-md-2 mb-lg-2 mb-md-2 modify");
	inputSave.setAttribute("name", "savePerson");
	inputSave.setAttribute("value", "sauvegarder");

	formModify.appendChild(nodeIdItem);
	formModify.appendChild(inputPicture);
	formModify.appendChild(divName);
	formModify.appendChild(textName);
	formModify.appendChild(divPoste);
	formModify.appendChild(textPoste);
	formModify.appendChild(divDesc);
	formModify.appendChild(textDesc);
	formModify.appendChild(inputSave);

	nodeContent.appendChild(formModify);

	nodeContent.removeChild(nodePersonName);
	nodeContent.removeChild(nodePersonPoste);
	nodeContent.removeChild(nodePersonDesc);

	let config = {
		height:'400px',
		toolbar: [  'Heading',	'|',  'bold', '|', 'italic'],
	}

	nodeParent.parentNode.style.backgroundColor = '#0000E6';
	nodeItemsToModify = nodeContent.querySelectorAll(".toModify");

	for(let i=0; i < nodeItemsToModify.length; i++){

		ClassicEditor
		.create( nodeItemsToModify[i], {
			height: config.height,
			toolbar: config.toolbar,
		})
		.catch( error => {
			console.error( error );
		} );
	}

}

// const reactiveModifyAction = (node) =>{
// 	console.log("réactivation");

// 	node.textContent = "Modifier";
// 	node.onclick = () =>{
// 		modifyText(node);
// 	};

// }