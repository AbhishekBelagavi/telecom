let movies = [{
    name: "JIO",
    des: "Jio (Reliance Jio Infocomm): Jio is a private telecommunications company in India known for its disruptive entry into the market, offering affordable 4G data, voice services, and digital content.",
    image: "./images/jio.avif"
},
{
    name: "BSNL",
    des: "BSNL (Bharat Sanchar Nigam Limited): BSNL is a state-owned telecommunications company in India, providing a wide range of communication services, including landline, mobile, and broadband.",
    image: "./images/bsnl.jpg"
},
{
    name: "VI",
    des: "Vi (Vodafone Idea Limited): Vi is a merged entity of Vodafone India and Idea Cellular, offering mobile and broadband services. It is one of the major telecom operators in India.",
    image: "./images/vilogo.webp"
},
{
    name: "AIRTEL",
    des: "Airtel (Bharti Airtel): Airtel is a leading private telecommunications company in India, providing services like mobile, broadband, and digital TV. It is one of the largest and oldest telecom operators in the country.",
    image:"./images/airtel1.jpg"
},

];

const caraousel = document.querySelector(".caraousel");
let sliders = [];

let slideIndex = 0; //track the current slideIndex

const createSlide = () => {
if (slideIndex >= movies.length) {
    slideIndex = 0;
}

//create DOM Elements
let slide = document.createElement("div");
var imgElement = document.createElement("img");
let content = document.createElement("div");
let h1 = document.createElement("h1");
let p = document.createElement("p");

// attaching all elements
imgElement.appendChild(document.createTextNode(""));
h1.appendChild(document.createTextNode(movies[slideIndex].name));
p.appendChild(document.createTextNode(movies[slideIndex].des));
content.appendChild(h1);
content.appendChild(p);
slide.appendChild(content);
slide.appendChild(imgElement);
caraousel.appendChild(slide);

//setting up images
imgElement.src = movies[slideIndex].image;
slideIndex++;

//setting elements classnames
slide.className = "slider";
content.className = "slide-content";
h1.className = "movie-title";
p.className = "movie-des";

sliders.push(slide);

if (sliders.length) {
    sliders[0].style.marginLeft = `calc(-${100 * (sliders.length - 2)}% - ${30 * (sliders.length - 2)}px)`;
}
};

for (let i = 0; i < 3; i++) {
createSlide();
}

setInterval(() => {
createSlide();
}, 3000);

//Video Cards

const videoCards = [...document.querySelectorAll(".video-card")];

videoCards.forEach((item) => {
item.addEventListener("mouseover", () => {
    let video = item.children[1];
    video.play();
});
item.addEventListener("mouseleave", () => {
    let video = item.children[1];
    video.pause();
});
});

// card sliders

let cardContainers = [...document.querySelectorAll(".card-container")];
let preBtns = [...document.querySelectorAll(".pre-btn")];
let nxtBtns = [...document.querySelectorAll(".nxt-btn")];

cardContainers.forEach((item, i) => {
let containerDimensions = item.getBoundingClientRect();
let containerWidth = containerDimensions.width;

nxtBtns[i].addEventListener("click", () => {
    item.scrollLeft += containerWidth - 200;
});

preBtns[i].addEventListener("click", () => {
    item.scrollLeft -= containerWidth + 200;
});
});

