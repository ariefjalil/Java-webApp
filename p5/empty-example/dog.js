var symbol;
var symbolSize = 40;
var alphabet = "tradeshift";


function setup(){

	createCanvas(
			window.innerWidth,
			window.innerHeight
		);
	background(0);
	symbol = new Symbol(
		width / 2,
		//height / 2,
		0,
		random(1, 10)

		);
symbol.setToRandomSymbol();
textSize(symbolSize);

}

function draw(){
		background(0);
		symbol.render();
		//console.log("java");
		

}

function Symbol(x,y, speed){
	this.x = x;
	this.y = y;
	this.value;
	this.speed = speed;
	this.switchInterval = round(random(0,20));

	this.setToRandomSymbol = function() {
		if(frameCount % this.switchInterval ==0){
		this.value = String.fromCharCode(
			0x30A0 + round(random(0,96))

			);
			}
		}

		this.render = function(){
			fill(0,255,70);
			text(this.value, this.x, this.y);
			this.rain();
			this.setToRandomSymbol();


		}
			this.rain = function(){
				if (this.y >= height){
					this.y = 0;

				} else { 
				this.y += this.speed;
				}
			}

	}




function stream(){
//to view stream of chars

}