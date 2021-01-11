<div class="display-container-banner">
	<img class="mySlides" src="./public/image/banner/img_mountains_wide.jpg" style="width:100%">
	<img class="mySlides" src="./public/image/banner/img_nature_wide.jpg" style="width:100%">
	<img class="mySlides" src="./public/image/banner/img_mountains_wide.jpg" style="width:100%">
	<img class="mySlides" src="./public/image/banner/img_snow_wide.jpg" style="width:100%">

	<button class="btn-change display-left" onclick="plusDivs(-1)">&#10094;</button>
	<button class="btn-change display-right" onclick="plusDivs(1)">&#10095;</button>
	<!-- <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
		<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
		<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
		<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span> -->
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}

// var slideIndex = myIndex;
// showDivs(slideIndex);

function plusDivs(n) {
  if(n==1){
    showDivs(myIndex += (n));
  }
  else {
    showDivs(myIndex += (n-1));
  }
    //2 3 4 5
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {myIndex = 1}
  if (n < 1) {myIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  x[myIndex-1].style.display = "block";
}
</script>