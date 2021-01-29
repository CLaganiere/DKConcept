
class SantaClaus{

	constructor(posX, posY, size) {
		this.x = posX;
		this.posTabY = posY;
		this.y = posY;
		this.countTick=0;

		let columnCount = 10;
		let rowCount= 2;
		let refreshDelay = 100;
		let loopInColumns = true;
		let scale = size;

		this.image = "img/autres/santaClausRunning.png";

		this.tiledImage = new TiledImage(this.image,
											columnCount, rowCount,
											refreshDelay, loopInColumns,
											scale);

		this.tiledImage.changeCol(0);
		this.tiledImage.changeRow(0);
	}


	tick () {
		this.countTick++;
		this.x+=SPEED;

		this.tiledImage.tick(this.x, this.y, ctx);
		if(this.countTick % 5 == 0){
			this.countTick = 0;

			if (this.stade < 10){
				this.tiledImage.changeCol(this.stade);
				this.tiledImage.changeRow(0);
			}
			else{
				this.tiledImage.changeCol(this.stade-10);
				this.tiledImage.changeRow(1);
			}

			if(this.stade < 15){
				this.stade++;
			}
			else{
				this.stade = 0;
			}
		}

		return this.x <= CANVAS_WIDTH + 100;
	}

	getX(){
		return this.x;
	}

	getPosTabY(){
		return this.posY;
	}

}