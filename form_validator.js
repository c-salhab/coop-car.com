// Captcha!

const squares = document.getElementsByClassName("drag");

for (let i = 0; i < squares.length; i++) {
	let square = squares[i];
	square.onmousedown = function(event) {
		let elemBelow = null;
		square.style.position = "absolute";
		square.style.zIndex = 1000;
		
		function moveAt(pageX, pageY) {
			square.style.left = pageX - square.offsetWidth / 2 + 'px';
			square.style.top = pageY - square.offsetWidth / 2 + 'px';
		}

		moveAt(event.pageX, event.pageY);

		function onMouseMove(event) {
			moveAt(event.pageX, event.pageY);
			square.hidden = true;
			elemBelow = document.elementFromPoint(event.pageX, event.pageY);
			square.hidden = false;
      console.log(elemBelow);
		}

		document.addEventListener('mousemove', onMouseMove);

		square.onmouseup = function(event) {
			document.removeEventListener('mousemove', onMouseMove);
			if (elemBelow.className == "drop") {
				square.style.left = elemBelow.style.left;
				square.style.top = elemBelow.style.top;
				elemBelow.setAttribute('data-test', square.getAttribute('data-test'));
			}
			square.onmouseup = null;
		}
	}


	square.ondragstart = function() {return false;};
}

function CheckCaptcha() {
	const grille = document.getElementById("puzzle-canvas");
	for (let i = 0; i < 9; i++) {
		console.log(grille);
		if (grille.children[i].getAttribute('data-test') != i) {
			return false;
		}
	}
	return true;
}