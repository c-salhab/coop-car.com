<!DOCTYPE html>
<html>
<?php $title = 'Vérification Captcha'; include('include/head.php'); ?>
<style>
    
    .button {
      border-radius: 4px;
      background-color: #f4511e;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size:14px;
      padding: 15px;
      width: 100px;
      transition: all 0.5s;
      cursor: pointer;
      float:right;
      margin-right: 10px;
      margin-bottom:20px;
    }
    
    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }
    
    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }
    
    .button:hover span {
      padding-right: 25px;
    }
    
    .button:hover span:after {
      opacity: 1;
      right: 0;
    }
		.conteneur{
			height: 200px;
			margin-bottom: 30px;
			color: white;
			display: flex;
		}
		.conteneur div:nth-child(1){
			background-color: red;
		}

		.conteneur div:nth-child(2){
			background-color: orange;
		}

		.conteneur div:nth-child(3){
			background-color: green;
		}

		.conteneur div:nth-child(4){
			background-color: blue;
		}

		.conteneur div:nth-child(5){
			background-color: indigo;
		}

		.conteneur div:nth-child(6){
			background-color: purple;
		}
     
     #ex1{flex-direction: row;
			flex-wrap: nowrap;
			justify-content: space-around;
			align-items: center;}

</style>

<body>
<div id="puzzle-canvas" style="display: flex;flex-wrap: wrap;width: 300px;padding-top:68px;">

<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 10px;top: 75px;" data-test="10">1</div>
		
<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 110px;top: 75px;" data-test="10">2</div>
	
<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 210px;top: 75px;" data-test="10">3</div>
		
<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 10px;top: 175px;" data-test="10">4</div>
		
<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 110px;top: 175px;" data-test="10">5</div>
		
<div class="drop" style="	background-color: green;width: 100px;height: 100px;left: 210px;top: 175px;" data-test="10">6</div>
		
<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 10px;top: 275px;" data-test="10">7</div>
		
<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 110px;top: 275px;" data-test="10">8</div>

<div class="drop" style="background-color: green;width: 100px;height: 100px;left: 210px;top: 275px;" data-test="10">9</div>
</div>


<div class="conteneur" id="ex1">
<div class="drag" style="width: 100px;height: 100px;" data-test="0">1</div>
    
<div class="drag" style="width: 100px;height: 100px;" data-test="1">2</div>

<div class="drag" style="width: 100px;height: 100px;" data-test="2">3</div>
    
<div class="drag" style="width: 100px;height: 100px;" data-test="3">4</div>
    
<div class="drag" style="width: 100px;height: 100px;" data-test="4">5</div>
    
<div class="drag" style="background-color:black;width: 100px;height: 100px;" data-test="5">6</div>
    
<div class="drag" style="background-color:grey;width: 100px;height: 100px;" data-test="6">7</div>
    
<div class="drag" style="background-color:pink;width: 100px;height: 100px;" data-test="7">8</div>
    
<div class="drag" style="background-color:brown;width: 100px;height: 100px;" data-test="8">9</div>
    
</div>
</div>
<button class="button" onclick="CheckCaptcha()">Connexion</button>
</form>
<script src="captcha.js"></script>
</body>
</html>