let time = 4000,
currentImageIndex = 0,
images = document
            .querySelectorAll("div#slideShow img")
max = images.length;

function nextImage() {

images[currentImageIndex]
    .classList.remove("slide1")

currentImageIndex++

if(currentImageIndex >= max)
    currentImageIndex = 0

images[currentImageIndex]
    .classList.add("slide1")
}

function start() {
setInterval(() => {
    // troca de image
    nextImage()
}, time)
}

window.addEventListener("load", start)