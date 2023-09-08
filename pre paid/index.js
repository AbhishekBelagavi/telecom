let sim = [
    {
        name: "airtel",
        des: "The Airtel Logo is a strong, contemporary and confident symbol for a brand that is always ahead of the rest.",
        image: "images/Airtel-Logo.png"
    },
    {
        name: "jio",
        des: "The Jio Logo is a symbol of innovation and modernity in the telecommunications industry.",
        image: "images/jio.jpg"
    },
    {
        name: "bsnl",
        des: "The BSNL Logo represents a long-standing presence in the Indian telecommunications sector.",
        image: "images/BSNL-2.webp"
    },{
        name: "VI",
        des: "The BSNL Logo represents a long-standing presence in the Indian telecommunications sector.",
        image: "images/th.jpg"
    }
];

const carousel = document.querySelector('.carousel');
let sliders = [];
let sliderIndex = 0;

const createSlide = () => {
    if (sliderIndex >= sim.length) {
        sliderIndex = 0;
    }
    let slide = document.createElement('div');
    let imgElement = document.createElement('img');
    let content = document.createElement('div');
    let h1 = document.createElement('h1');
    let p = document.createElement('p');
    
    // Attaching all elements
    imgElement.appendChild(document.createTextNode(''));
    h1.appendChild(document.createTextNode(sim[sliderIndex].name));
    p.appendChild(document.createTextNode(sim[sliderIndex].des));
    content.appendChild(h1);
    content.appendChild(p);
    slide.appendChild(content);
    slide.appendChild(imgElement);
    carousel.appendChild(slide);
    

    // Setting the image source
    imgElement.src = sim[sliderIndex].image;
    sliderIndex++;

    // Setting the elements' class names
    slide.className = "slider";
    content.className = "slide-content";
    h1.className = "sim-title";
    p.className = "sim-des";
    
    

    sliders.push(slide);
    if (sliders.length) {
        sliders[0].style.marginLeft = `calc(-${100 * (sliders.length - 2)}% - ${30 * (sliders.length - 2)}px)`;
    }
}

for (let i = 0; i < 3; i++) {
    createSlide();
}

setInterval(() => {
    createSlide();
}, 3000);

document.querySelectorAll('.container').forEach((container) => {
    const scrollableContent = container.querySelector('.sim-list');
    const scrollLeftBtn = container.querySelector('.pre-btn');
    const scrollRightBtn = container.querySelector('.nxt-btn');
  
    // Scroll content to the left
    scrollLeftBtn.addEventListener('click', () => {
      scrollableContent.scrollBy({
        left: -200, // Adjust the scrolling distance as needed
        behavior: 'smooth',
      });
    });
  
    // Scroll content to the right
    scrollRightBtn.addEventListener('click', () => {
      scrollableContent.scrollBy({
        left: 200, // Adjust the scrolling distance as needed
        behavior: 'smooth',
      });
    });
  });
  
 







  