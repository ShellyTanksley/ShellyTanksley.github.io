<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	
.FlipCard {
background-color: transparent;
width:240px;
height:	240px;
perspective: 1000px;
}

.FlipCardInner {
position: relative;
width: 100%;
height: 100%;
text-align: center;
transition: transform 0.6s;
transform-style: preserve-3d;
}

.FlipCard:hover .FlipCardInner {
transform: rotateY(180deg);
}

.FlipCardFront, .FlipCardBack {
position: absolute;
width: 100%;
height: 100%;
-webkit-backface-visibility: hidden;
backface-visibility: hidden;
}

.FlipCardFront {
font-size: 23px;
color: white;
background-color: black;
box-shadow: 0 4px 8px 0 #07ce69, 0 6px 20px 0 #07ce69;
}

.FlipCardBack {
font-size: 1.9vw;
color: white;	
background-color: black;
transform: rotateY(180deg);
box-shadow: 0 4px 8px 0 #07ce69, 0 6px 20px 0 #07ce69;	
}
.CardCenter{
width: 200px;
height: 200px;	
border-style:solid;
border-width: 20px;
border-color:black;
background-color:black;
}	
.FlipCardBack .CardCenter{
margin-top:-10px;
}	
	
</style>
</head>
<body>

<br><br><br>
<div class="FlipCard">
  <div class="FlipCardInner">
    <div class="FlipCardFront">

<!--Start Card Center-->	
<div class="CardCenter">
<center>
<img src="assets/images/logo-sq.jpg" alt="Logo" width="175" height="175">
<br>
Swopblock
</center> 
</div>	
<!--End Card Center-->			
</div>
	  
<div class="FlipCardBack">
<!--Start Card Center-->	
<div class="CardCenter">
<center>	
Crypto’s First
Autonomous
Trading Network
</center>
	</div>
<!--End Card Center-->	
	
    </div>
  </div>
</div>

</body>
</html>
