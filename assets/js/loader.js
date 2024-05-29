// scripts.js

document.addEventListener("DOMContentLoaded", function() {
    // Ensure the preloader is visible initially
    const preloader = document.getElementById('preloader');
    const content = document.getElementById('content');

    // Listen for the window load event to hide the preloader
    window.addEventListener('load', function() {
        preloader.style.display = 'none';
        content.style.display = 'block';
    });
});
