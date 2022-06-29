var gameContainer = document.getElementById('game-area');
var playerCar;
var gameScore = 0;

function startGame() {
	gameArea.start();
	leftSide = new staticRectangle(10, 480, 'white', 20, 0);
	rightSide = new staticRectangle(10, 480, 'white', 420, 0);
	centerTxt = new textArea('50px', 'Consolas', 'White', 210, 240, 5)
	gameScoreTxt = new textArea('20px', 'Consolas', 'White', 40, 30)
	playerCar = new car(70, 120, "white", 190, 340);
}

var gameArea = {
	canvas: document.createElement("canvas"),
	start: function () {
		if(this.interval) {
			clearInterval(this.interval);
		}
		this.canvas.width = 450;
		this.canvas.height = 480;
		this.frameNo = 0;
		this.gameSeconds = 0;
		this.context = this.canvas.getContext("2d");
		gameContainer.innerHTML = '';
		gameContainer.appendChild(this.canvas);
		this.interval = setInterval(updateGameArea, 20);

		window.addEventListener('keydown', function (e) {
			gameArea.key = e.code;
		});
		window.addEventListener('keyup', function (e) {
			gameArea.key = false;
		});
	},
	clear: function () {
		this.context.clearRect(30, 0, this.canvas.width - 60, this.canvas.height);
	},
    stop : function() {
        clearInterval(this.interval);
		gameScore = 0;
    }
}

function staticRectangle(width, height, color, x, y) {
	this.width = width;
	this.height = height;
	this.color = color;
	this.x = x;
	this.y = y;
	ctx = gameArea.context;
	ctx.fillStyle = this.color;
	ctx.fillRect(this.x, this.y, this.width, this.height);
}

function textArea(fontSize, fontType, fontColor, x, y, text = '') {
	this.color = fontColor;
	this.x = x;
	this.y = y;
	this.text = text;
	this.update = function () {
		ctx = gameArea.context;
		ctx.font = `${fontSize} ${fontType}`;
		ctx.fillStyle = this.color;
		ctx.fillText(this.text, this.x, this.y);
	}
}

function car(width, height, color, x, y) {
	this.width = width;
	this.height = height;
	this.x = x;
	this.y = y;
	this.update = function () {
		ctx = gameArea.context;
		let img = document.getElementById("car-" + color);
		ctx.drawImage(img, x, y, this.width, this.height);
	}
}

function updateGameArea() {
	gameArea.frameNo += 1;
	gameArea.clear();
	playerCar.update();

	if(centerTxt.text !== ''){
		centerTxt.update();
	}

	if(gameArea.gameSeconds > 4){
		gameScore += 1;
		gameScoreTxt.text = `HighScore: ${gameScore}`; 
		gameScoreTxt.update();
	}

	if(everyinterval(50)){
		gameArea.gameSeconds += 1;
		if(gameArea.gameSeconds <= 4){
			centerTxt.text -= 1;
		} else {
			centerTxt.text = '';
		}
	}

	if(endGame()) {
		centerTxt.text = 'Game Over';
		centerTxt.x = 105;
		centerTxt.update();
		gameArea.stop();
	}
}

function endGame() {
	let endScore = Math.floor(Math.random() * 1000);
	return gameScore > endScore ? true : false;
}

function everyinterval(n) {
    if ((gameArea.frameNo / n) % 1 == 0) {return true;}
    return false;
}
