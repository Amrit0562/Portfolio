<nav class="m-5 mt-3">
    <header style="font-family: Arial, sans-serif;">
        <div style="display: flex; justify-content: center; align-items: center; padding: 8px;">
            <div id="button-container"
                style="border: solid; border-color: #cac7c7; height: 50px; display: flex; border-radius: 50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center; justify-content: space-evenly;">
                <div class="test"
                    style="display: inline-block; border: 2px solid transparent; border-radius: 50px; padding: 5px 20px; margin: 5px; font-size: 1rem; cursor: pointer; transition: border-color 0.3s;"
                    onclick="navigateToSection('all', this)">All</div>
                <div class="test"
                    style="display: inline-block; border: 2px solid transparent; border-radius: 50px; padding: 5px 20px; margin: 5px; font-size: 1rem; cursor: pointer; transition: border-color 0.3s;"
                    onclick="navigateToSection('about', this)">About</div>
                <div class="test"
                    style="display: inline-block; border: 2px solid transparent; border-radius: 50px; padding: 5px 20px; margin: 5px; font-size: 1rem; cursor: pointer; transition: border-color 0.3s;"
                    onclick="navigateToSection('work', this)">Work</div>
            </div>
        </div>
    </header>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const container = document.getElementById("button-container");
        const buttons = container.getElementsByClassName("test");
        const firstButton = buttons[0];

        // Apply initial border to the first button
        setDefaultButtonBorder();

        // Highlight the selected button
        window.highlightButton = function(button) {
            const isDarkMode = document.body.classList.contains("dark-mode");

            // Reset borders for all buttons
            for (let i = 0; i < buttons.length; i++) {
                buttons[i].style.border = "2px solid transparent";
                buttons[i].classList.remove("selected");
            }

            // Set border for the selected button
            button.style.border = isDarkMode ?
                "2px solid #525252" // Dark mode border
                :
                "2px solid #e9e9e9"; // Light mode border
            button.classList.add("selected");
        };

        // Reset borders when clicking outside the container
        document.addEventListener("click", function(event) {
            if (!container.contains(event.target)) {
                for (let i = 0; i < buttons.length; i++) {
                    buttons[i].style.border = "2px solid transparent";
                    buttons[i].classList.remove("selected");
                }
                setDefaultButtonBorder(); // Reapply default border to the first button
            }
        });

        // Toggle between light and dark modes
        window.toggleMode = function(mode) {
            const body = document.body;
            const isDarkMode = mode === "dark";

            body.classList.toggle("dark-mode", isDarkMode);
            localStorage.setItem("colorMode", mode);

            // Update button borders dynamically
            setDefaultButtonBorder();
        };

        // Load the saved color mode from localStorage
        function loadColorMode() {
            const savedMode = localStorage.getItem("colorMode") || "light";
            toggleMode(savedMode);
        }

        // Set the default border for the first button
        function setDefaultButtonBorder() {
            const isDarkMode = document.body.classList.contains("dark-mode");
            firstButton.style.border = isDarkMode ?
                "2px solid #525252" // Dark mode default border
                :
                "2px solid #e9e9e9"; // Light mode default border
        }

        // Navigate to a specific section
        window.navigateToSection = function(sectionId, element) {
            // Scroll to the section with smooth behavior
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth'
                });
            }

            // Highlight the clicked button
            const buttons = document.querySelectorAll('#button-container .test');
            buttons.forEach(button => {
                button.style.borderColor = 'transparent'; // Reset border color
            });
            element.style.borderColor = document.body.classList.contains("dark-mode") ?
                '#525252' // Dark mode highlight
                :
                '#e9e9e9'; // Light mode highlight
        };

        // Initialize by loading the saved color mode
        loadColorMode();
    });
</script>

<style>

</style>
