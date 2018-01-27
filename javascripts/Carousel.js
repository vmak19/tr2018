var slides;
var slidesUncollected;
var slideIndex = 1;
var slideBtns;
var session="";

// Initial setup of carousel
function initSlides(session) {
    this.session=session;
    console.log("init");
    slides = document.getElementsByClassName("carouselSlideCollected");
    slidesUncollected = document.getElementsByClassName("carouselSlideUncollected");
    slideBtns = document.getElementsByClassName("slideBtn");
    for (var i=0; i<session.length; i++) {
        if (session[i]=='0') {
            //slideBtns[i].disabled="true"; //TODO: make colour to grey instead
        } else {
            //slideBtns[i].disabled="false";
        }
    }    
    currentSlide(1);
}

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

// Shows current slide and hides the rest
function showSlides(n) {
    var i;
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) { //'slideIndex-1' is the slide we want to show
        if(i != (slideIndex-1)) {
            //hide both data and collection notice
            slides[i].style.display = "none"; 
            slidesUncollected[i].style.display = "none";
        } else {
            //if collected, show data ("block") and hide collection notice ("none") 
            slides[slideIndex-1].style.display = (session[i]=='1') ? "block":"none"; 
            slidesUncollected[slideIndex-1].style.display = (session[i]=='1') ? "none":"block"; 
        }
    }
}