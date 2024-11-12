const reviewContainer = document.querySelector('.review-container');

// Mouse hover पर स्क्रॉल रोकना और हटने पर फिर से चालू करना
reviewContainer.addEventListener('mouseover', () => {
    reviewContainer.style.animationPlayState = 'paused';
});

reviewContainer.addEventListener('mouseout', () => {
    reviewContainer.style.animationPlayState = 'running';
});
