let gallery = null;
let OPTION1 = "Cuisinier"
let OPTION2 = "Salle à manger"
let OPTION3 = "Administration"
let OPTION4 = "Autre"
let GROUP1 = "cuisine"
let GROUP2 = "salle"
let GROUP3 = "administration"
let GROUP4 = "autre"

window.addEventListener("load", ()=> {

	gallery = document.querySelector('#menu .container')
	createAddItemBtn();
	createModifyBtn();

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
	topText.textContent = "Création d'une nouvelle offre d'emploi";

	let formulaire = document.createElement('form');
	formulaire.setAttribute("action", "carriere.php");
	formulaire.setAttribute("method", "post");
	formulaire.setAttribute("enctype", "multipart/form-data");

	//Balises contenu dans le form
	let nameDiv = document.createElement('div');
	nameDiv.setAttribute("class", "mt-20 mb-20 inputDiv");

	let inputName = document.createElement('input');
	inputName.setAttribute("type", "text");
	inputName.setAttribute("name", "nom");
	inputName.setAttribute("placeholder", "Entrez le nom du poste");
	inputName.setAttribute("onfocus", "this.placeholder = ''");
	inputName.setAttribute("onblur", "this.placeholder = 'Entrez le nom du poste'");
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

	let salaryDiv = document.createElement('div');
	salaryDiv.setAttribute("class", "mt-20 mb-20 inputDiv");

	let inputSalary = document.createElement('input');
	inputSalary.setAttribute("type", "text");
	inputSalary.setAttribute("name", "salary");
	inputSalary.setAttribute("placeholder", "Salaire");
	inputSalary.setAttribute("onfocus", "this.placeholder = ''");
	inputSalary.setAttribute("onblur", "this.placeholder = 'Salaire'");
	inputSalary.setAttribute("class", "form-input h4 pt-3 pb-3 mt-20 mb-20 col-lg-6 col-md-5 col-sm-4");

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

	let inputSubmit = document.createElement('input');
	inputSubmit.setAttribute("type", "submit");
	inputSubmit.setAttribute("name", "submit");
	inputSubmit.setAttribute("value", "Ajouter l'offre d'emploi");
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
	salaryDiv.appendChild(inputSalary);
	descDiv.appendChild(inputDesc);

	formulaire.appendChild(nameDiv);
	formulaire.appendChild(groupDiv);
	formulaire.appendChild(salaryDiv);
	formulaire.appendChild(descDiv);
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
	btnSuppression.textContent = "Ajouter une nouvelle offre d'emploi";

	sectionButton.appendChild(btnSuppression);

	gallery.appendChild(sectionButton);
}

const createModifyBtn = () =>{

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
	nodeJobName = nodeParent.querySelector(".itemContent .nameCarriere");
	nodeJobSalary = nodeParent.querySelector(".itemContent .price");
	nodeJobDesc = nodeParent.querySelector(".itemContent .descCarriere");

	console.log(nodeJobDesc.textContent);

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
	formModify.setAttribute("action", "carriere.php");
	formModify.setAttribute("method", "post");
	formModify.setAttribute("class", "attributeModifier text-justify")

	let nodeIdItem = document.createElement('input');
	nodeIdItem.setAttribute("type", "hidden");
	nodeIdItem.setAttribute("name", "idItem");
	nodeIdItem.setAttribute("value", nodeParent.querySelector("form.deleteItem input").value);

	let textName = document.createElement('textarea');
	textName.setAttribute("name", "newName");
	textName.setAttribute("class", "h4 mt-2 toModify mealName nameModifier");
	textName.setAttribute("cols", "35");
	textName.setAttribute("rows", "1");
	textName.textContent = nodeJobName.textContent;

	let textSalary = document.createElement('textarea');
	textSalary.setAttribute("name", "newSalary");
	textSalary.setAttribute("class", "h4 mt-2 toModify mealName salaryModifier");
	textSalary.setAttribute("cols", "35");
	textSalary.setAttribute("rows", "1");
	textSalary.textContent = nodeJobSalary.textContent;

	let textDesc = document.createElement('textarea');
	textDesc.setAttribute("name", "newDesc");
	textDesc.setAttribute("class", "h6 text-justify mb-2 toModify descModifier");
	textDesc.setAttribute("cols", "50");
	textDesc.setAttribute("rows", "5");
	textDesc.textContent = nodeJobDesc.textContent;

	let inputSave = document.createElement('input');
	inputSave.setAttribute("type", "submit");
	inputSave.setAttribute("class", "btn-info btn-lg h5 text-white col-lg-12 text-uppercase text-center mt-lg-2 mt-md-2 mb-lg-2 mb-md-2 modify");
	inputSave.setAttribute("name", "saveCarriere");
	inputSave.setAttribute("value", "sauvegarder");

	formModify.appendChild(nodeIdItem);
	formModify.appendChild(textName);
	formModify.appendChild(textSalary);
	formModify.appendChild(textDesc);
	formModify.appendChild(inputSave);

	nodeContent.appendChild(formModify);

	nodeContent.removeChild(nodeJobName.parentNode);
	nodeContent.removeChild(nodeJobDesc);

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