function changeBackground(){
  
    const images = [
        "../img/index/hall1.jpg",
        "../img/index/hall2.jpg",
        "../img/index/hall3.jpg"
    ]

    const section = document.querySelector("section");
    const bg = images[Math.floor(Math.random()* images.length)]
    section.style.backgroundImage = bg;
 
}

setInterval(changeBackground,1000);