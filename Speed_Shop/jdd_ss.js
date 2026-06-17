/* 
Author:         David Dunham
Course:         ITSE 2302 - 21001
Assignment:     LAB 5 (Final Project)
Date Created:   04/14/2025
Date Updated:   05/10/2025
File Name:      speed_shop.js
Description:    Individual Web Page for Childers Speed Shop.
*/

/* 	=====================================================================
							Countdown Clock
	=====================================================================
*/

    // Count down to the beginning of the Summer I Session
    var countDownDate = new Date("June 2, 2025 12:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {
        
        // Get today's date and time
        var now = new Date().getTime(); // gets todays date and time
        
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Output clock
        document.getElementById("clock").innerHTML = days + " days " + hours + " hours "
        + minutes + " minutes " + seconds + " seconds &nbsp; until Summer I Session Begins";
        
        // If the count down is over, write some text 
        if (distance < 0) {
        clearInterval(x);
        document.getElementById("clock").innerHTML = "EXPIRED";
        }
    }, 1000);


/* 	=====================================================================
							Form Validation
	=====================================================================
*/

function validateForm(){
    let f = document.getElementById("first").value; /* first name */
        try {
            if (f === "") throw "Please provide your first name";
        } catch(err) {
    window.alert("You must enter your first name"); 
    }
    let l = document.getElementById("last").value; /* last name */
        try {
            if (l === "") throw "Please provide your last name";
        } catch(err) {
    window.alert("You must enter your last name"); 
    }
    let a = document.getElementById("address").value; /* address */
        try {
            if (a === "") throw "Please provide your street name";
        } catch(err) {
    window.alert("You must enter your street name"); 
    }
    let c = document.getElementById("city").value; /* city */
        try {
            if (c === "") throw "Please provide your city";
        } catch(err) {
    window.alert("You must enter your city"); 
    }
    let s = document.getElementById("state").value; /* state */
        try {
            if (s === "") throw "Please provide your state";
        } catch(err) {
    window.alert("You must enter your state");
    }
    let z = document.getElementById("zip").value; /* zip code */
        try {
            if (z === "") throw "Please provide your zip code";
        } catch(err) {
    window.alert("You must enter your zip code"); 
    }
    let p = document.getElementById("phone").value; /* phone */
        try {
            if (p === "") throw "Please provide your phone number";
        } catch(err) {
    window.alert("You must enter your phone number"); 
    }
    let m = document.getElementById("email").value; /* email */
        try {
            if (m === "") throw "Please provide your email address";
        } catch(err) {
    window.alert("You must enter your email address"); 
    }
}


/* 	=====================================================================
							My SlideShow Photo Gallery
	=====================================================================
*/

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
 
  slides[slideIndex-1].style.display = "block";
  captionText.innerHTML = dots[slideIndex-1].alt;
}