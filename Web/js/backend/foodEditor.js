let gallery = null;
let OPTION1 = "Entrées"
let OPTION2 = "Dinners"
let OPTION3 = "Souper"
let OPTION4 = "Dessert"
let GROUP1 = "entrees"
let GROUP2 = "dinner"
let GROUP3 = "souper"
let GROUP4 = "dessert"

window.addEventListener("load", ()=> {

	gallery = document.querySelector('#gallery .container')
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
	topText.textContent = "Création d'un nouveau repas dans le menu";

	let formulaire = document.createElement('form');
	formulaire.setAttribute("action", "gallery.php");
	formulaire.setAttribute("method", "post");
	formulaire.setAttribute("enctype", "multipart/form-data");

	//Balises contenu dans le form
	let nameDiv = document.createElement('div');
	nameDiv.setAttribute("class", "mt-20 mb-20 inputDiv");

	let inputName = document.createElement('input');
	inputName.setAttribute("type", "text");
	inputName.setAttribute("name", "nom");
	inputName.setAttribute("placeholder", "Entrez le nom du dessert");
	inputName.setAttribute("onfocus", "this.placeholder = ''");
	inputName.setAttribute("onblur", "this.placeholder = 'Entrez le nom du repas'");
	inputName.setAttribute("class", "form-input h4 pt-3 pb-3 mt-20 mb-20 col-lg-6 col-md-5 col-sm-4");

	let groupDiv = document.createElement('div');
	groupDiv.setAttribute("class", "mt-20 mb-20 inputDiv row justify-content-center");

	let optionInputDef = document.createElement('option');
	optionInputDef.textContent = "Choisissez parmi les options suivantes";
	optionInputDef.setAttribute("selected", "selected");
	optionInputDef.setAttribute("disabled", "disabled");
	optionInputDef.setAttribute("hidden", "hidden");
	let optionInput1 = document.createElement('option');
	optionInput1.setAttribute("value", GROUP1);
	optionInput1.textContent = OPTION1;
	let optionInput2 = document.createElement('option');
	optionInput2.setAttribute("value", GROUP2);
	optionInput2.textContent = OPTION2;
	let optionInput3 = document.createElement('option');
	optionInput3.setAttribute("value", GROUP3);
	optionInput3.textContent = OPTION3;
	let optionInput4 = document.createElement('option');
	optionInput4.setAttribute("value", GROUP4);
	optionInput4.textContent = OPTION4;

	let inputGroup = document.createElement('select');
	inputGroup.setAttribute("type", "text");
	inputGroup.setAttribute("name", "group");
	inputGroup.setAttribute("id", "group");
	inputGroup.setAttribute("class", "form-input h6 pt-3 pb-3 mt-20 mb-20 col-lg-6 col-md-5 col-sm-4");

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
	inputSubmit.setAttribute("value", "Ajouter le repas");
	inputSubmit.setAttribute("class", "form-input btn-info btn-lg col-lg-4 mx-lg-5 mx-md-5 text-center");
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

	inputGroup.appendChild(optionInputDef);
	inputGroup.appendChild(optionInput1);
	inputGroup.appendChild(optionInput2);
	inputGroup.appendChild(optionInput3);
	inputGroup.appendChild(optionInput4);

	bottomDiv.appendChild(inputSubmit);
	bottomDiv.appendChild(inputAnnulation);

	nameDiv.appendChild(inputName);
	groupDiv.appendChild(inputGroup);
	descDiv.appendChild(inputDesc);
	picDiv.appendChild(inputPicture);

	formulaire.appendChild(nameDiv);
	formulaire.appendChild(groupDiv);
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
	btnSuppression.setAttribute("class", "btn-info btn-lg col-lg-8 pt-40 pb-40 mt-80 text-uppercase text-center");
	btnSuppression.textContent = "Ajouter un nouveau repas";

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
	nodeMealName = nodeParent.querySelector(".itemContent .mealName");
	nodeMealDesc = nodeParent.querySelector(".itemContent .mealDesc");

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
	formModify.setAttribute("action", "gallery.php");
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

	let textName = document.createElement('textarea');
	textName.setAttribute("name", "newMealName");
	textName.setAttribute("class", "h4 mt-2 toModify mealName nameModifier");
	textName.setAttribute("cols", "20");
	textName.setAttribute("rows", "1");
	textName.textContent = nodeMealName.textContent;

	let textDesc = document.createElement('textarea');
	textDesc.setAttribute("name", "newMealDesc");
	textDesc.setAttribute("class", "h6 text-justify mb-2 toModify descModifier");
	textDesc.setAttribute("cols", "30");
	textDesc.setAttribute("rows", "10");
	textDesc.textContent = nodeMealDesc.textContent;

	let inputSave = document.createElement('input');
	inputSave.setAttribute("type", "submit");
	inputSave.setAttribute("class", "btn-info btn-lg h5 text-white col-lg-12 text-uppercase text-center mt-lg-2 mt-md-2 mb-lg-2 mb-md-2 modify");
	inputSave.setAttribute("name", "saveMeal");
	inputSave.setAttribute("value", "sauvegarder");

	formModify.appendChild(nodeIdItem);
	formModify.appendChild(inputPicture);
	formModify.appendChild(textName);
	formModify.appendChild(textDesc);
	formModify.appendChild(inputSave);

	nodeContent.appendChild(formModify);

	nodeContent.removeChild(nodeMealName);
	nodeContent.removeChild(nodeMealDesc);

	let config = {
		height:'400px',
		toolbar: [  'Heading', 'bold', 	'|', 'italic', '|', 'Link'],
	}

	nodeParent.style.backgroundColor = '#0000E6';
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

const reactiveModifyAction = (node) =>{
	console.log("réactivation");

	node.textContent = "Modifier";
	node.onclick = () =>{
		modifyText(node);
	};

}

const annulationItemModification = (node) =>{
	console.log("reconstruction");

	node.removeChild(node.querySelector(".cancelation"));
	node.style.backgroundColor = 'white';

	textName = node.querySelector("form .nameModifier").textContent;
	textDesc = node.querySelector("form .descModifier").textContent;

	let nodeName =  document.createElement('div');
	nodeName.setAttribute("class", "h4 mt-2 mealName");
	nodeName.textContent = textName;

	let nodeDesc =  document.createElement('div');
	nodeDesc.setAttribute("class", "h6 text-justify mb-2 mealDesc");
	nodeDesc.textContent = textDesc;

	node.appendChild(nodeName);
	node.appendChild(nodeName);

	node.removeChild(node.querySelector(".itemContent form.attributeModifier"));
}