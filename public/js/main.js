var slideIndex = 0;
go();
function go() {
    var i;
    
    var slides = document.getElementsByClassName('carousel-item1');
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
       slideIndex = 1
    } 
   
    slides[slideIndex-1].style.display = "block";
    setTimeout(go, 4500);
}