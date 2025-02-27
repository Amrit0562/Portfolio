<footer class="w-full text-white bg-gray-900 px-4 py-6 md:py-8">
    <div class="max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center">
        <!-- Left Section - Branding -->
        <div class="text-center md:text-left">
            <h2 class="text-2xl font-bold">{{ $userInfo->name }}</h2>
            <p class="text-gray-400 text-sm mt-1">Web Developer | Mobile Developer</p>
        </div>

        <!-- Middle Section - Social Links & Contact Me -->
        <div class="flex flex-col items-center md:items-start space-y-2">
            <div class="flex space-x-4">
                <a href="#" class="text-gray-300 hover:text-blue-400 transition duration-300 text-xl">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://www.facebook.com/amrit.bhandari.3745"
                    class="text-gray-300 hover:text-blue-500 transition duration-300 text-xl">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/_amrit_bhandari/" target="_blank"
                    class="text-gray-300 hover:text-pink-500 transition duration-300 text-xl">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://github.com/Amrit0562" target="_blank"
                    class="text-gray-300 hover:text-white transition duration-300 text-xl">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Contact Me Button -->
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=amrit.bhandari0123@gmail.com" target="_blank"
                class="bg-blue-500 text-white px-4 py-2 rounded-md text-sm mt-2 hover:bg-blue-600 transition">
                Contact Me
            </a>
        </div>

        <!-- Right Section - Copyright -->
        <div class="text-center md:text-right mt-4 md:mt-0">
            <p class="text-gray-400 text-sm">&copy; <span id="year"></span> {{ $userInfo->name }}. All Rights
                Reserved.</p>
        </div>
    </div>
</footer>

<script>
    document.getElementById("year").innerText = new Date().getFullYear();
</script>
