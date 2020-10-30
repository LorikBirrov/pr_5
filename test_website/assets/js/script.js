var slideIndex = 0;
var currentSlideIndex = 0;
var slideArray = [];

function Slide(title, subtitle, background, link ) {
   this.title = title;
   this.subtitle = subtitle;
   this.background = background;
   this.link = link;
   this.id = "slide" + slideIndex;
   slideIndex++;
   slideArray.push(this);
}

// ви можете зробити скільки завгодно слайдів

var slide1 = new Slide(
   "Deer",
   "love me",
   "public/images/photo1.jpg",
   "https://i.pinimg.com/236x/2a/46/0a/2a460a6d830bf2607508bb7e7f83a8b9.jpg"
);


var slide2 = new Slide(
   "Deer",
   "love us",
   "public/images/photo2.jpg",
   "https://i.pinimg.com/564x/d1/71/9c/d1719c48340f912299b2c9991f351e92.jpg"
);


var slide3 = new Slide(
   "Deer",
   "Dominante",
   "public/images/photo3.jpg",
   "https://i.pinimg.com/564x/85/50/4e/85504e8baf2c3a265a847d0dc3d93c73.jpg"
);

var slide4 = new Slide(
   "Deer",
   "Love igoist",
   "public/images/photo4.jpg",
   "https://i.pinimg.com/564x/24/21/e6/2421e603133e933b72a498a49c947efa.jpg"
);


function buildSlider(){
   var myHTML;
   for(var i = 0; i < slideArray.length; i++) {
       myHTML += "<div id='" + slideArray[i].id +
           "' class='singleSlide' style='background-image:url(" + slideArray[i].background + ");'>" +
           "<div class='slideOverlay'>" +
           "<h1>" + slideArray[i].title + "</h1>" +
           "<h4>" + slideArray[i].subtitle + "</h4>" +
           "<a class='slider' href='" + slideArray[i].link + "' target='_blank'>Open Link</a>" +
           "</div>" +
           "</div>";
   }

   document.getElementById("mySlider").innerHTML = myHTML;
   document.getElementById("slide" + currentSlideIndex).style.left = 0;
}

buildSlider();

function prevSlide(){
   var nextSlideIndex;
   if (currentSlideIndex === 0 ) {
       nextSlideIndex = slideArray.length - 1;
   } else {
       nextSlideIndex = currentSlideIndex - 1;
   }

   document.getElementById("slide" + nextSlideIndex).style.left = "-100%";
   document.getElementById("slide" + currentSlideIndex).style.left = 0;

   document.getElementById("slide" + nextSlideIndex).setAttribute("class", "singleSlide slideInLeft");
   document.getElementById("slide" + currentSlideIndex).setAttribute("class", "singleSlide slideOutRight");

   currentSlideIndex = nextSlideIndex;
}

function nextSlide(){
   var nextSlideIndex;
   if (currentSlideIndex === (slideArray.length - 1) ) {
       nextSlideIndex = 0;
   } else {
       nextSlideIndex = currentSlideIndex + 1;
   }

   document.getElementById("slide" + nextSlideIndex).style.left = "100%";
   document.getElementById("slide" + currentSlideIndex).style.left = 0;

   document.getElementById("slide" + nextSlideIndex).setAttribute("class", "singleSlide slideInRight");
   document.getElementById("slide" + currentSlideIndex).setAttribute("class", "singleSlide slideOutLeft");

   currentSlideIndex = nextSlideIndex;
}
