

let cards = [
    {
        name: "Airtel",
        des: "*Become an #airtelThanks Silver, Gold, or Platinum member *Enjoy exclusive rewards, offers, and privileges",
        image: "D:/PPbpa/telecom/HOME/images/airtel1.png"
    },
    {
        name: "Airtel",
        des: "Super Special Packs starting at just Rs.249 *Get life insurance cover worth Rs. 4 lakh *Enjoy Amazon prime at no extra cost",
        image: "D:/PPbpa/telecom/HOME/images/airtel2.png"
    },
    {
        name: "Jio",
        des: "There’s more to Jio than just unlimited data and free voice calls,Get rewarded for recharges, earn discount vouchers every day, stream movies and music for free, and much more.",
        image: "D:/PPbpa/telecom/HOME/images/hero-banner-image.png"
    },
    {
        name: "Jio",
        des: "Easily manage your mobile and JioFiber services:Now manage your mobile and JioFiber services with ease. Do more with the new JioFiber mini-app! Recharge, get real-time usage details, manage multiple accounts, set up JioAutoPay, and do much more.",
        image: "D:/PPbpa/telecom/HOME/images/newjio.png"
    }
];
var tableData = [
    {
        label: 'Data with Rollover',
        value: '40 GB'
    },
    {
        label: 'SMS Per Day',
        value: '100'
    },
    {
        label: 'STO& Local/STD & Roaming Calls',
        value: 'Unlimited'
    },
    {
        label: 'Amazon Prime',
        value: 'N/A'
    }
];


const carousel = document.querySelector('.carousel');
let sliders = [];
let sliderIndex = 0;

const createSlide = () => {
    if (sliderIndex >= cards.length) {
        sliderIndex = 0;
    }
    let slide = document.createElement('div');
    let imgElement = document.createElement('img');
    let content = document.createElement('div');
    let h1 = document.createElement('h1');
    let p = document.createElement('p');
    
    // Attaching all elements
    imgElement.appendChild(document.createTextNode(''));
    h1.appendChild(document.createTextNode(cards[sliderIndex].name));
    p.appendChild(document.createTextNode(cards[sliderIndex].des));
    content.appendChild(h1);
    content.appendChild(p);
    slide.appendChild(content);
    slide.appendChild(imgElement);
    carousel.appendChild(slide);
    

    // Setting the image source
    imgElement.src = cards[sliderIndex].image;
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

// New function to show popup for a specific card
function showPopup(tableData) {
    var overlay = document.getElementById('overlay');
    var popup = document.getElementById('popup-card');
    var closeButton = document.getElementById('close-button');
    var body = document.body;
   
    //var popupTable = document.createElement('popup-table');
    //var popupTable = document.getElementById('popup-table');
    // Clear any previous content in the popup card
    //popup.innerHTML = '';
    

    // Apply inline styles to isolate the card content
    popup.style.backgroundColor = '#fff'; // Set your desired background color
    popup.style.padding = '20px'; // Set your desired padding
    popup.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.5)'; // Set your desired box shadow

    // Create an image element for the image
    var imageElement = document.createElement('img');
    imageElement.src = 'C:/Users/CHAITRA R/OneDrive/Desktop/postpaid/images/Airtel-Logo.png'; // Set the image source to your desired image URL
    imageElement.style.maxWidth = '200px'; /* Adjust the maximum width as needed */
    imageElement.style.maxHeight = '200px'; /* Adjust the maximum height as needed */
    


    // Create a paragraph for the description
    //var descriptionParagraph = document.createElement('p');
    //descriptionParagraph.textContent = card.description; // Set the description text
    // Create a table element for displaying data
    var popupTable = document.createElement('table');
    popupTable.className = 'popup-table'; // You can add a class for styling if needed
    for (var i = 0; i < tableData.length; i++) {
        var row = popupTable.insertRow(i);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        cell1.innerHTML = tableData[i].label;
        cell2.innerHTML = tableData[i].value;
    }


    // Set the position and dimensions of the popup card
    popup.style.position = 'fixed';
    popup.style.top = '50%';
    popup.style.left = '50%';
    popup.style.transform = 'translate(-50%, -50%)';
    popup.style.maxWidth = '80%'; // Set the maximum width for the popup card
    popup.style.maxHeight = '80%'; // Set the maximum height for the popup card
    popup.style.overflowY = 'auto'; // Enable vertical scrollbar if content exceeds max-height


    // Create a container for the close button
    var popupHeader = document.createElement('div');
    popupHeader.className = 'popup-header';
    var closeButton = document.createElement('button');
    closeButton.className = 'close-button';
    closeButton.id = 'close-button';
    closeButton.textContent = 'close';

    // Append the image and description to the popup
    popup.appendChild(imageElement);
    //popup.appendChild(descriptionParagraph);
     // Append the table to the popup card
     popup.appendChild(popupTable);
     popupHeader.appendChild(closeButton);
    overlay.style.display = 'block';
    popup.style.display = 'block';

    // Add a class to the body to apply a background overlay
    body.classList.add('popup-open');


    // Close the pop-up when the close button is clicked
    closeButton.addEventListener('click', function () {
        overlay.style.display = 'none';
        popup.style.display = 'none';
        var overlay = document.getElementById('overlay');
        var popup = document.getElementById('popup');
        
        if (overlay && popup) {
            overlay.style.display = 'none';
            popup.style.display = 'none';
        } else {
            console.error('Overlay or popup element not found.');
        }
        
        // Remove the class from the body to remove the background overlay
        body.classList.remove('popup-open');
    });
}
// Attach the click event listener to a higher-level container
document.body.addEventListener('click', function (event) {
    if (event.target.id === 'close-button') {
        // Get references to the overlay and popup elements
        var overlay = document.getElementById('overlay');
        var popup = document.getElementById('popup-card');

        // Close the popup when the close button is clicked
        overlay.style.display = 'none';
        popup.style.display = 'none';

        // Remove the class from the body to remove the background overlay
        document.body.classList.remove('popup-open');
    }
});




// Attach click event handlers to the "View More" buttons for each card
var viewMoreButtons = document.querySelectorAll('.card button');
viewMoreButtons.forEach(function (button, index) {
    button.addEventListener('click', function () {
        var card = cards[index]; // Get the corresponding card data using the index
        if (card) {
            showPopup(tableData);
        }
    });
});
// index.js or a separate JavaScript file
function toggleDescription(button) {
    // Your code to toggle the description goes here
    // For example, you can show or hide the description when this function is called.
    console.log("Toggle description clicked!");

}

 






