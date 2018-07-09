var symbolSize = 30;
var alphabet = ("T","r","a","d","e","s","h","i","f","t")
var stream;


function setup(){

	createCanvas(
			window.innerWidth,
			window.innerHeight
		);
	background(0);
	stream = new Stream();
	stream.generateSymbols();
	textSize(symbolSize);

}

function draw(){
		background(0);
		stream.render();
		//console.log("java");
		//add console
		

}

function Symbol(x,y, speed){
	this.x = x;
	this.y = y;
	this.value;
	this.speed = speed;
	this.switchInterval = round(random(2,30)); 

	this.setToRandomSymbol = function() {
		if(frameCount % this.switchInterval ==0){
		this.value = String.fromCharCode(
			0x30A0 + round(random(0,96))
			
			);
			}
		}
//random init
			this.rain = function(){
				if (this.y >= height){
					this.y = 0;

				} else { 
				this.y += this.speed;
				}
			}

	}

//---------


function Stream(){
//to view stream of chars
	this.symbols = [];
	this.totalSymbols = round(random(5,30));
	this.speed = random(1,7);

	this.generateSymbols = function() {
		var y = 0;
		var x = width / 2;

		for (var i =0; i<= this.totalSymbols; i++) {
			symbol = new Symbol(x, y, this.speed);
			symbol.setToRandomSymbol();
			this.symbols.push(symbol);
			y -= symbolSize;


		}

	}

	this.render = function() {

		this.symbols.forEach(function(symbol)  {
			fill (0,255,70);
			text(symbol.value, symbol.x, symbol.y);
			symbol.rain();
			symbol.setToRandomSymbol();


		});
	}


//gg

}