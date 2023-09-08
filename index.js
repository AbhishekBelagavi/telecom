// Your card data
let cards = [
    {
        name: "Airtel",
        description: "*Become an #airtelThanks Silver, Gold, or Platinum member *Enjoy exclusive rewards, offers, and privileges",
        image: "C:/Users/CHAITRA R/OneDrive/Desktop/postpaid/images/airtel1.png"
    },
    {
        name: "Airtel",
        description: "Super Special Packs starting at just Rs.249 *Get life insurance cover worth Rs. 4 lakh *Enjoy Amazon prime at no extra cost",
        image: "C:/Users/CHAITRA R/OneDrive/Desktop/postpaid/images/airtel2.png"
    }
    // Add more card data as needed
];

const caraousel = document.querySelector('.caraousel');
let sliders = [];
let sliderIndex = 0; // Track the current slide

const createSlide = () => {
    if (sliderIndex >= cards.length) {
        sliderIndex = 0;
    }

    // Create DOM Elements
    let slide = document.createElement('div');
    let imgElement = document.createElement('img');
    let content = document.createElement('div');
    let h1 = document.createElement('h1');
    let p = document.createElement('p');

    // Attach all the elements
    imgElement.appendChild(document.createTextNode(''));
    h1.appendChild(document.createTextNode(cards[sliderIndex].name));
    p.appendChild(document.createTextNode(cards[sliderIndex].description));
    content.appendChild(h1);
    content.appendChild(p);
    slide.appendChild(content);
    slide.appendChild(imgElement);
    caraousel.appendChild(slide);

    // Set up the images
    imgElement.src = cards[sliderIndex].image;
    sliderIndex++;

    // Set element class names
    slide.className = "slider";
    content.className = "slide-content";
    h1.className = "title";
    p.className = "description";

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

// New function to show popup for a specific card
function showPopup(card) {
    var overlay = document.getElementById('overlay');
    var popup = document.getElementById('popup-card');
    var closeButton = document.getElementById('close-button');
    var body = document.body;

    // Clear any previous content in the popup card
    popup.innerHTML = '';

    // Apply inline styles to isolate the card content
    popup.style.backgroundColor = '#fff'; // Set your desired background color
    popup.style.padding = '20px'; // Set your desired padding
    popup.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.5)'; // Set your desired box shadow

    // Create an image element for the image
    var imageElement = document.createElement('img');
    imageElement.src = card.image; // Set the image source to your desired image URL
    imageElement.style.maxWidth = '100%'; // Set the maximum width for the image

    // Create a paragraph for the description
    var descriptionParagraph = document.createElement('p');
    descriptionParagraph.textContent = card.description; // Set the description text

    // Set the position and dimensions of the popup card
    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.maxWidth = '80%'; // Set the maximum width for the popup card
    popup.style.maxHeight = '80%'; // Set the maximum height for the popup card
    popup.style.overflowY = 'auto'; // Enable vertical scrollbar if content exceeds max-height

    // Append the image and description to the popup
    popup.appendChild(imageElement);
    popup.appendChild(descriptionParagraph);

    overlay.style.display = 'block';
    popup.style.display = 'block';

    // Add a class to the body to apply a background overlay
    body.classList.add('popup-open');

    // Close the pop-up when the close button is clicked
    closeButton.addEventListener('click', function () {
        overlay.style.display = 'none';
        popup.style.display = 'none';

        // Remove the class from the body to remove the background overlay
        body.classList.remove('popup-open');
    });
}

// Attach click event handlers to the "View More" buttons for each card
var viewMoreButtons = document.querySelectorAll('.card button');
viewMoreButtons.forEach(function (button, index) {
    button.addEventListener('click', function () {
        var card = cards[index]; // Get the corresponding card data using the index
        if (card) {
            showPopup(card);
        }
    });
});
