document.querySelector('.whatsapp-button').addEventListener('click', function (event) {
    event.preventDefault(); // Prevents default anchor behavior
    const phoneNumber = "9871409300"; // WhatsApp number
    const message = "Hello Customer Support, I need assistance"; // Default message

    // Format the message for URL encoding
    const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

    // Open the WhatsApp link in a new tab or window
    window.open(url, '_blank');
});
