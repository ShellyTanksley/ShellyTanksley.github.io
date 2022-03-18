<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Howdy World!</title>
<script src="assets/script/jquery-1.8.2.js"></script>	
<link rel="stylesheet" type="text/css" href="assets/css/MainStyleSheet.css">
<script>
$( document ).ready(function() {
/////////////////////////////////@@@@@@@@@@@@@@@@@@@/////////////////////////////////
////////////////////Start Test Button////////////////
$("#TestButton").click(function() {
alert("Test Alert!");  
});		
	
////////////////////End Test Button////////////////	
	
/****************@@@@@@@@@@@@@@@@@@@@@@@@ Start Custom Option List Functions @@@@@@@@@@@@@@@@@@@@@@@@****************/	
/////////////////Start Click Custom Option Button To Show/Hide List//////////////////////////		
$("#CustomOptionListBtn").click(function() {
if($("#CustomOptionListHider").hasClass("ClosedList")) {
$("#CustomOptionListHiderBox").animate({"height": "160px"}).removeClass("ClosedList");
$("#CustomOptionListHider").animate({"height": "160px"}).removeClass("ClosedList");	
} 
else {
$("#CustomOptionListHiderBox").animate({"height": "40px"}).addClass("ClosedList");
$("#CustomOptionListHider").animate({"height": "40px"}).addClass("ClosedList");	
}
});
/////////////////End Click Custom Option Button To Show/Hide List//////////////////////////

/////////////////Start Click Custom Option Highlight Selected//////////////////////////	
$(".CustomOptionRow").click(function() { 
var self = this;
$(".CustomOptionRow").removeClass("SelectedOption");
$("#OptionIntroText").css("display", "none");		

$("#CustomOptionIntroImg").removeClass();
$("#CustomOptionIntroTitle").html("");		
setTimeout(function(){
var SelfText = $(self).find(".CustomOptionTitle").text();
$("#CustomOptionListBtn").trigger("click");
$("#CustomOptionIntroImg").addClass('OptionImg'+SelfText);	
$("#CustomOptionIntroTitle").html(SelfText);	
$(self).addClass("SelectedOption"); 
}, 40);	
setTimeout(function(){
$("#CustomOptionIntroImg").css("display", "block");
$("#CustomOptionIntroTitle").css("display", "block");	
}, 50);		
});		
/////////////////End Click Custom Option Highlight Selected//////////////////////////			
/****************@@@@@@@@@@@@@@@@@@@@@@@@ End Custom Option List Functions @@@@@@@@@@@@@@@@@@@@@@@@****************/		
	
/////////////////////////////////@@@@@@@@@@@@@@@@@@@/////////////////////////////////	
});	
</script>	
</head>

<body>
<!--#######################@@@@@ Start Main Content @@@@@#######################-->
<div id="MainContent">
<center>
<!--Start Logo Box-->	
<div id="LogoBox">
<!--@@@@@@@@@@@ Start Content @@@@@@@@@@@-->
<?php include("FlipLogo.php"); ?>
<!--@@@@@@@@@@@ End Content @@@@@@@@@@@-->		
</div>
<!--End Logo Box-->		
<br>	
<br>
<!--Start Video-->	
<video id="SampleVideo" controls="" poster="assets/images/AdTwoPoster.jpg">
<source src="assets/videos/AdTwo.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
<!--End Video-->		
<br>
<br>
	
<!--/////////////////** START Custom Option List **/////////////////////-->
<div id="CustomOptionListHiderBox" class="ClosedList">	
<!--//////////////////////////////////////-->	
<div id="CustomOptionListHider" class="ClosedList">
<!--Start CustomOptionListTitleBox-->
<!--<div id="CustomOptionListTitleBox"  title="Select 1 or More to select more (hold down Ctrl) then select options">-->	
<div id="CustomOptionListTitleBox"  title="Select 1 or More">	
<div id="CustomOptionListTitle">
<div class="OptionImgBCH" id="CustomOptionIntroImg"></div>
<div id="CustomOptionIntroTitle">BCH</div>	
<span id="OptionIntroText">Select One</span>
</div>
<input type="button" id="CustomOptionListBtn" value="&#8964;">	
</div>	
<!--End CustomOptionListTitleBox-->	

<!--////////////////Start Custom Options List//////////////////////-->
<div id="CustomOptionsList">
<!---->
<div class="CustomOptionRow SelectedOption">
<div class="CustomOptionImg OptionImgBCH"></div>
<div class="CustomOptionTitle">BCH</div>
</div>
<!---->		
<!---->
<div class="CustomOptionRow">
<div class="CustomOptionImg OptionImgBTC"></div>
<div class="CustomOptionTitle">BTC</div>
</div>
<!---->
<!---->
<div class="CustomOptionRow">
<div class="CustomOptionImg OptionImgETH"></div>	
<div class="CustomOptionTitle">ETH</div>
</div>
<!---->		
<!---->
<div class="CustomOptionRow">
<div class="CustomOptionImg OptionImgATOM"></div>
<div class="CustomOptionTitle">ATOM</div>
</div>
<!---->		
<!---->
<div class="CustomOptionRow">
<div class="CustomOptionImg OptionImgBUSD"></div>
<div class="CustomOptionTitle">BUSD</div>
</div>
<!---->	
<!---->
<div class="CustomOptionRow">
<div class="CustomOptionImg OptionImgCAKE"></div>
<div class="CustomOptionTitle">CAKE</div>
</div>
<!---->		
	

<!---->
<div class="CustomOptionRow">
<div class="CustomOptionImg OptionImgDOGE"></div>
<div class="CustomOptionTitle">DOGE</div>
</div>
<!---->	
<!---->
<div class="CustomOptionRow">
<div class="CustomOptionImg OptionImgSHIB"></div>
<div class="CustomOptionTitle">SHIB</div>
</div>
<!---->	

</div>
<!--////////////////End Custom Options List//////////////////////-->		
</div>
<!--//////////////////////////////////////-->	
</div>	
<!--/////////////////** END Custom Option List **/////////////////////-->		
	
</center> 
</div>
<!--#######################@@@@@ Start Main Content @@@@@#######################-->	
</body>
</html>
