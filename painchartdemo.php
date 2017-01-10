<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#p1").click(function(){
        $("#selectedpainlevel").text("No Pain");
    });
    $("#p2").click(function(){
         $("#selectedpainlevel").text("Mild");
    });
    $("#p3").click(function(){
         $("#selectedpainlevel").text("Moderate");
    });
	$("#p4").click(function(){
         $("#selectedpainlevel").text("Heavy Moderate");
    });
	$("#p5").click(function(){
         $("#selectedpainlevel").text("Severe");
    });
	$("#p6").click(function(){
         $("#selectedpainlevel").text("Most Severe");
    });
});
</script>
<script language = "JavaScript">
function picrollout(imgid){
var element = document.getElementById(imgid);
element.style.opacity = "1.0";
element.style.filter  = 'alpha(opacity=100)'; // IE fallback
}
function picrollover(imgid){
var element = document.getElementById(imgid);
element.style.opacity = "0.7";
element.style.filter  = 'alpha(opacity=70)'; // IE fallback

}


</script>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
<style type="text/css">
.auto-style1 {
	text-decoration: underline;
}
</style>
</head>

<body>
<h2 class="auto-style1">Pain Measurement Scale</h2>
<p>The following demo uses JQuery and JavaScript together to build an online Pain Measurement Scale.&nbsp; 
Hover your mouse over the images to see Rollover effect and click the image to see the Selected Pain level dynamically 
change below.</p>

<div>
<img id="p6" onmouseover="picrollover('p6')" onmouseout="picrollout('p6')"  style="width: 66px; height: 66px;"
 alt="L6"
 src="http://gocloudapp.net/gocloudapps/samplecode/images/pain6.png">
<img id="p5" onmouseover="picrollover('p5')" onmouseout="picrollout('p5')"  style="width: 66px; height: 66px;"
 alt="L5"
 src="http://gocloudapp.net/gocloudapps/samplecode/images/pain5.png">
<img id="p4" onmouseover="picrollover('p4')" onmouseout="picrollout('p4')"  style="width: 66px; height: 66px;"
 alt="L4"
 src="http://gocloudapp.net/gocloudapps/samplecode/images/pain4.png">
<img id="p3" onmouseover="picrollover('p3')" onmouseout="picrollout('p3')"  style="width: 66px; height: 66px;"
 alt="L3"
 src="http://gocloudapp.net/gocloudapps/samplecode/images/pain3.png">
<img id="p2" onmouseover="picrollover('p2')" onmouseout="picrollout('p2')"  style="width: 66px; height: 66px;"
 alt="L2"
 src="http://gocloudapp.net/gocloudapps/samplecode/images/pain2.png">
 <img id="p1" onmouseover="picrollover('p1')" onmouseout="picrollout('p1')"  style="width: 66px; height: 66px;"
 alt="L1"
 src="http://gocloudapp.net/gocloudapps/samplecode/images/pain1.png">
</div>
<div>
<h2>
Selected Pain Level
</h2>
<p id="selectedpainlevel">
Not Set
</p>
</div>
<div>

</body>

</html>
