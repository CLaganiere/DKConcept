
let ctx = null;
let CANVAS_WIDTH=0;
let CANVAS_HEIGHT=0;

let spriteList = [];
let POS_SANTA_INIT_X = 100;
let POS_SANTA_INIT_Y = 100;
let SIZE_SANTA = 2;
let SPEED = 3;
let BTN_LINK = null;
let DIV_PARENT = null;
let ID_CANVAS = "canvasSanta";

let canvasDeleted = false;

window.addEventListener("load", ()=> {

	BTN_LINK = document.querySelector("li button");
	DIV_PARENT = document.querySelector(".footer-bottom-wrap");

	BTN_LINK.onclick = () =>{
		intisaliseEnvironement(DIV_PARENT);
		BTN_LINK.disabled=true;
	}

});

const tick = () =>{
	ctx.clearRect(0, 0, CANVAS_WIDTH, CANVAS_HEIGHT);

	for (let i = 0; i < spriteList.length; i++) {
		const sprite = spriteList[i];
		let alive = sprite.tick();

		if(!alive){
			spriteList.splice(i,1);
			i--;
		}
	}

	if(spriteList.length == 0 && !canvasDeleted){
		DIV_PARENT.removeChild(document.getElementById(ID_CANVAS));
		BTN_LINK.disabled=false;
		canvasDeleted = true;
	}

	window.requestAnimationFrame(tick);
}

const intisaliseEnvironement = (node) =>{

	CANVAS_WIDTH = (document.documentElement.clientWidth || window.innerWidth || document.body.clientWidth)-2;
	CANVAS_HEIGHT = 300;

	let nodeCanvas = document.createElement("canvas");
	nodeCanvas.setAttribute("id", ID_CANVAS);
	nodeCanvas.setAttribute("width", CANVAS_WIDTH);
	nodeCanvas.setAttribute("height", CANVAS_HEIGHT);
	nodeCanvas.style.position = "absolute";
	nodeCanvas.style.border = "1px solid";
	nodeCanvas.textContent = "Not gonna happen...";

	node.appendChild(nodeCanvas);

	ctx = nodeCanvas.getContext("2d");

	spriteList.push(new SantaClaus(POS_SANTA_INIT_X, POS_SANTA_INIT_Y, SIZE_SANTA));

	tick();
}