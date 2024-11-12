// Placeholder texts that will change
const placeholderTexts = [
    "Choose Your Brand",
    "Split AC",
    "Window AC",
    "VRV",
    "Ductable AC",
    "Tower Ac",
    "Chiller AC",
    "CASSATE AC",
    "Installation & Complaint Related",
    "Other",
    "Which Brand?"
];

let currentIndex = 0;

// Function to change placeholder text at regular intervals
setInterval(() => {
    const input = document.getElementById('languageInput');
    input.placeholder = placeholderTexts[currentIndex];
    currentIndex = (currentIndex + 1) % placeholderTexts.length;
}, 2000); // Change every 2 seconds