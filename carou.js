let slidePosition=0;
const slides=document.querySelectorAll(".car_item");
const totalSlides=slides.length;

window.setInterval(function(){
    nextSlide();
},5000) 

document.querySelector("#next").addEventListener("click",function(){
    nextSlide();
});
document.querySelector("#prev").addEventListener("click",function(){
    prevSlide();
});

function updateSlide(){
    for(let slide of slides){
        slide.classList.remove("car_item-visible");
        slide.classList.add("car_item-hidden");
    }
    slides[slidePosition].classList.add("car_item-visible");
}
function nextSlide(){
    if (slidePosition === totalSlides-1){
        slidePosition=0;
    }
    else{
        slidePosition++;
    }
    updateSlide();
}

function prevSlide(){
    if (slidePosition === 0){
        slidePosition=totalSlides-1;
    }
    else{
        slidePosition--;
    }
    updateSlide();
}

