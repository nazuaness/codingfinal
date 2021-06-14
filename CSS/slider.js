var modal1 = document.getElementById("modal1");
var btn1 = document.getElementById("btn1");
var span1 = document.getElementsByClassName("close1")[0];

btn1.onclick = function() {
  modal1.style.display = "block";
}
span1.onclick = function() {
  modal1.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
///////////////////////////////////////////////////////////
var modal2 = document.getElementById("modal2");
var btn2 = document.getElementById("btn2");
var span2 = document.getElementsByClassName("close2")[0];

btn2.onclick = function(event) {
  modal2.style.display = "block";
}
span2.onclick = function() {
  modal2.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
///////////////////////////////////////////////////////////
var modal3 = document.getElementById("modal3");
var btn3 = document.getElementById("btn3");
var span3 = document.getElementsByClassName("close3")[0];

btn3.onclick = function(event) {
  modal3.style.display = "block";
}
span3.onclick = function(event) {
  modal3.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
///////////////////////////////////////////////////////////
var modal4 = document.getElementById("modal4");
var btn4 = document.getElementById("btn4");
var span4 = document.getElementsByClassName("close4")[0];

btn4.onclick = function(event) {
  modal4.style.display = "block";
}
span4.onclick = function(event) {
  modal4.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
///////////////////////////////////////////////////////////
var modal5 = document.getElementById("modal5");
var btn5 = document.getElementById("btn5");
var span5 = document.getElementsByClassName("close5")[0];

btn5.onclick = function() {
  modal5.style.display = "block";
}
span5.onclick = function() {
  modal5.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}
///////////////////////////////////////////////////////////
var modal6 = document.getElementById("modal6");
var btn6 = document.getElementById("btn6");
var span6 = document.getElementsByClassName("close6")[0];

btn6.onclick = function() {
  modal6.style.display = "block";
}
span6.onclick = function() {
  modal6.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}
// DIAS KUSHTY

$(".carousel").owlCarousel({
           margin: 20,
           loop: true,
           autoplay: true,
           autoplayTimeout: 2000,
           autoplayHoverPause: true,
           responsive: {
             0:{
               items:1,
               nav: false
             },
             600:{
               items:2,
               nav: false
             },
             1000:{
               items:3,
               nav: false
             }
           }
         });
