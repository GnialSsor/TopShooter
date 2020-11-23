<!DOCTYPE html>

<html>

<head>
	<title>Top Shooter</title>
		<!-- Website Meta Tags -->
		<!-- Ref: https://www.w3schools.com/tags/tag_meta.asp -->
		<meta charset="UTF-8">
		<meta name="description" content="Mass Multiplayer Shooting Game">
		<meta name="keywords" content="Shooter, Game, Pixel, Baylle Royale ">
		<meta name="author" content="Top Shooter">
		
		<!-- External Stylesheet -->
		<link rel="stylesheet" href="css.css">

	<!-- Ref: https://www.includehelp.com/code-snippets/move-object-with-arrow-keys-using-javascript-function.aspx -->
	<!-- To make the sprite move -->
	<script type="text/javascript">
			//init object globally
			var objImage= null;
			function init(){
				objImage=document.getElementById("yellowSprite");				
				objImage.style.position='relative';
				objImage.style.left='0px';
				objImage.style.top='0px';
			}
			function getKeyAndMove(e){				
				var key_code=e.which||e.keyCode;
				switch(key_code){
					case 37: //left arrow key
						moveLeft();
						break;
					case 38: //Up arrow key
						moveUp();
						break;
					case 39: //right arrow key
						moveRight();
						break;
					case 40: //down arrow key
						moveDown();
						break;						
				}
			}
			function moveLeft(){
				objImage.style.left=parseInt(objImage.style.left)-5 +'px';
			}
			function moveUp(){
				objImage.style.top=parseInt(objImage.style.top)-5 +'px';
			}
			function moveRight(){
				objImage.style.left=parseInt(objImage.style.left)+5 +'px';
			}
			function moveDown(){
				objImage.style.top=parseInt(objImage.style.top)+5 +'px';
			}
			window.onload=init;
		</script>
</head>




<body onkeydown='getKeyAndMove(event)'>
<img id="yellowSprite"></img>
</body>


<script>
<!-- Timer for HUD -->
<!-- Reference: https://stackoverflow.com/questions/46220382/javascript-count-up-timer -->
var countDownDate = localStorage.getItem('startDate');
if (countDownDate) {
    countDownDate = new Date(countDownDate);
} else {
    countDownDate = new Date();
    localStorage.setItem('startDate', countDownDate);
}
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = now - countDownDate.getTime();

    // Time calculations for days, hours, minutes and seconds
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("timer").innerHTML = "Time: " + minutes + ":" + seconds;
}, 1000);

</script>

<footer>
<!-- Displays information of game and holds buttons to change options and exit game -->
<table>
<thead>
<tr>
<th><p id="timer"></p></th>
<th><p>Score:</p></th>
<th><button type="button" onclick="">Options</button>
<button type="button" onclick="alert('Are you sure?')">Exit Game</button></th>
</tr>
</thead>
</table>
</footer>



</html>
