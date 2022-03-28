function showForm() {
  var x = document.getElementById("registerForm");
  if (x.style.display === "none") {
    x.style.display = "block";
  } 
}

function hideForm() {
  var x = document.getElementById("registerForm");
  if (x.style.display === "block") {
    x.style.display = "none";
  } 
}

function showLoginForm(){
    showForm();
    document.getElementById("headingRegForm").innerHTML = "Formulár pre prihlásenie";
    document.getElementById("name").style.display = "none";
    document.getElementById("surname").style.display = "none";
    document.getElementById("town").style.display = "none";
    document.getElementById("yearOfBirth").style.display = "none";
    document.getElementById("choose").style.display = "none";
    document.getElementById("phone").style.display = "none";

    document.getElementById("nameLabel").style.display="none";
    document.getElementById("surnameLabel").style.display = "none";
    document.getElementById("townLabel").style.display = "none";
    document.getElementById("yearOfBirthLabel").style.display = "none";
    document.getElementById("chooseLabel").style.display = "none";
    document.getElementById("phoneLabel").style.display = "none";
}

function showRegisterForm(){
    showForm();
    document.getElementById("headingRegForm").innerHTML = "Registračný formulár";
    document.getElementById("nameLabel").style.display="block";
    document.getElementById("name").style.display = "block";
}

/*
const slides = document.getElementsByClassName("carousel-item");
const nextButton = document.getElementById("carousel-button-next");
const prevButton = document.getElementById("carousel-button-prev");
const dots = document.getElementsByClassName("dot");
let position = 0;
const numberOfSlides = slides.length;

function hideAllSlides() {
    // remove all slides not currently being viewed
    for (const slide of slides) {
        slide.classList.remove("carousel-item-visible");
        slide.classList.add("carousel-item-hidden");
    }
}


const handleMoveToNextSlide = function(e) {
    hideAllSlides();
  
    // check if last slide has been reached
    if (position === numberOfSlides - 1) {
        position = 0; // go back to first slide
    } else {
        // move to next slide
        position++;
    }
    // make current slide visible
    slides[position].classList.add("carousel-item-visible");
  
    // update dot to represent current slide
    dots[position].classList.add("selected-dot");
    dots[position].checked = true;
}

const handleMoveToPrevSlide = function(e) {
    hideAllSlides();
    
    // check if we're on the first slide
    if (position === 0) {
        position = numberOfSlides - 1; // move to the last slide
    } else {
        // move back one
        position--;
    }
    // make current slide visible
    slides[position].classList.add("carousel-item-visible");
  
    // update dot to represent current slide
    dots[position].classList.add("selected-dot");
    dots[position].checked = true;
}

// listen for slide change events
nextButton.addEventListener("click", handleMoveToNextSlide);
prevButton.addEventListener("click", handleMoveToPrevSlide);

*/