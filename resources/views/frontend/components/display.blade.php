<div
    style="display: flex; align-items: center; justify-content: space-between; height: 100px; border-radius: 25px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); border: 2px solid #ccc;">
    <button onclick="toggleMode('light')"
        style="position: relative; border-radius: 24px; height: 90px;width: 45%; border: none; overflow: hidden; transition: background-color 0.3s ease-in-out;"
        class="btn btn-light text-center" id="sunButton">
        <i class="fas fa-sun" style="font-size: 4rem; opacity: 0.5; transition: opacity 0.3s ease-in-out"></i>
    </button>
    <button onclick="toggleMode('dark')"
        style=";position: relative; ;border-radius: 24px; ;height: 90px;;width: 45%; ;border: none; ;overflow: hidden; ;transition: background-color 0.3s ease-in-out;"
        class="btn btn-light text-center" id="moonButton">
        <i class="fas fa-moon" style="font-size: 4rem; opacity: 0.5; transition: opacity 0.3s ease-in-out;"></i>
    </button>
</div>

@push('styles')
    <style>
        /* Additional styles for dark mode */
        body.dark-mode {
            background-color: #1a1a1a;
            color: #e0e0e0;
        }

        /* Style for active button background color */
        .btn-light {
            background-color: #f8f9fa;
            /* Default light background */
            color: #000;
        }

        .btn-dark {
            background-color: rgb(67, 67, 67);
            /* Dark background */
            color: #fff;
        }

        /*star of life icon color change*/
        :root {
            --icon-light: rgb(67, 67, 67);
            /* Light mode color */
            --icon-dark: rgb(255, 255, 255);
            /* Dark mode color */
        }

        .icon {
            color: var(--icon-light);
            transition: color 0.3s ease-in-out;
        }

        .dark-mode .icon {
            color: var(--icon-dark);
        }
    </style>
@endpush
