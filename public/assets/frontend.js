// document.addEventListener("DOMContentLoaded", function () {
//     const container = document.getElementById("button-container");
//     const buttons = container.getElementsByClassName("test");
//     const firstButton = buttons[0];

//     // Apply initial border to the first button
//     setDefaultButtonBorder();

//     // Highlight the selected button
//     window.highlightButton = function (button) {
//         const isDarkMode = document.body.classList.contains("dark-mode");

//         // Reset borders for all buttons
//         for (let i = 0; i < buttons.length; i++) {
//             buttons[i].style.border = "2px solid transparent";
//             buttons[i].classList.remove("selected");
//         }

//         // Set border for the selected button
//         button.style.border = isDarkMode
//             ? "2px solid #525252" // Dark mode border
//             : "2px solid #e9e9e9"; // Light mode border
//         button.classList.add("selected");
//     };

//     // Reset borders when clicking outside the container
//     document.addEventListener("click", function (event) {
//         if (!container.contains(event.target)) {
//             for (let i = 0; i < buttons.length; i++) {
//                 buttons[i].style.border = "2px solid transparent";
//                 buttons[i].classList.remove("selected");
//             }
//             setDefaultButtonBorder(); // Reapply default border to the first button
//         }
//     });

//     // Toggle between light and dark modes
//     window.toggleMode = function (mode) {
//         const body = document.body;
//         const isDarkMode = mode === "dark";

//         body.classList.toggle("dark-mode", isDarkMode);
//         localStorage.setItem("colorMode", mode);

//         // Update button borders dynamically
//         setDefaultButtonBorder();
//     };

//     // Load the saved color mode from localStorage
//     function loadColorMode() {
//         const savedMode = localStorage.getItem("colorMode") || "light";
//         toggleMode(savedMode);
//     }

//     // Set the default border for the first button
//     function setDefaultButtonBorder() {
//         const isDarkMode = document.body.classList.contains("dark-mode");
//         firstButton.style.border = isDarkMode
//             ? "2px solid #525252" // Dark mode default border
//             : "2px solid #e9e9e9"; // Light mode default border
//     }

//     // Initialize by loading the saved color mode
//     loadColorMode();
// });

const images = document.querySelectorAll(".dynamic-image"); // Select all images with the class dynamic-image
const prefersDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

function updateImagesColor(e) {
    images.forEach((image) => {
        if (e.matches) {
            image.style.filter = "invert(100%)"; // White for dark mode
        } else {
            image.style.filter = "invert(0%)"; // Normal color for light mode
        }
    });
}

// Initial check
updateImagesColor(prefersDarkMode);

// Listen for theme changes
prefersDarkMode.addEventListener("change", updateImagesColor);
//switch dark mode and light mode end
