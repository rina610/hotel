let currentIndex = 0;
const cItems = document.querySelectorAll('.carousel-item1');

function go(index) {
    if (index < 0) {
        index = cItems.length - 1;
    } else if (index >= cItems.length) {
        index = 0;
    }
    currentIndex = index;
    
}

function next() {
    go(currentIndex + 1);
}

function prev() {
    go(currentIndex - 1);
}

setInterval(go, 5000);