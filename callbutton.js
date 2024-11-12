// Add event listeners to all call buttons
const callButtons = document.querySelectorAll('.call-button');

callButtons.forEach(button => {
    button.addEventListener('click', () => {
        const phoneNumber = button.getAttribute('data-number'); // Get the phone number from data attribute
        window.location.href = `tel:${phoneNumber}`; // Open the dialer with the phone number
    });
});
