<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arya Mobile Repairing Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Add in <head> -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7fafc;
        }

        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://placehold.co/1920x1080/4f46e5/ffffff?text=Mobile+Repair+Background') no-repeat center center/cover;
            /* You can replace the placeholder URL with your own background image */
        }

        /* Custom Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #fefefe;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 90%;
            width: 400px;
            text-align: center;
            transform: translateY(-20px);
            opacity: 0;
            transition: transform 0.3s ease-out, opacity 0.3s ease-out;
        }

        .modal.show .modal-content {
            transform: translateY(0);
            opacity: 1;
        }

        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-button:hover,
        .close-button:focus {
            color: #000;
        }

        .right-4 {
            right: 3rem !important;
        }

        .bottom-4 {
            bottom: 5rem !important;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <!-- Header & Navigation -->
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-gray-900">
                Arya <span class="text-indigo-600">Mobile</span> Repair
            </a>
            <div class="hidden md:flex space-x-6">
                <a href="#device-selection-section" class="text-gray-600 hover:text-indigo-600 transition-colors">Services</a>
                <a href="#about" class="text-gray-600 hover:text-indigo-600 transition-colors">About Us</a>
                <a href="#contact" class="text-gray-600 hover:text-indigo-600 transition-colors">Contact</a>
            </div>
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-gray-900 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </nav>
        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg pb-4">
            <nav class="flex flex-col items-center space-y-4 pt-2">
                <a href="#device-selection-section" class="text-gray-600 hover:text-gray-900 transition-colors w-full text-center">Services</a>
                <a href="#about" class="text-gray-600 hover:text-gray-900 transition-colors w-full text-center">About Us</a>
                <a href="#contact" class="text-gray-600 hover:text-gray-900 transition-colors w-full text-center">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center text-center text-white">
        <!-- Parallax Background -->
        <div
            class="absolute inset-0 bg-fixed bg-center bg-cover"
            style="background-image: url('public/uploads/images/mobile_servicing_img.jpg');">
        </div>

        <!-- Overlay (optional, to darken the background) -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Content -->
        <div class="relative z-10 px-4">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 animate-fade-in-up">
                Expert Mobile Repair Services
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fade-in">
                Fast, reliable, and affordable repairs for all your devices.
            </p>
            <a href="#device-selection-section"
                class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-indigo-700 transition-all transform hover:scale-105">
                View Services
            </a>
        </div>
    </section>


    <main id="main-content">
        <!-- Device Selection Section (Default View) -->
        <section id="device-selection-section" class="py-20 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-extrabold text-center mb-12 drop-shadow-lg" data-aos="fade-up">
                    Choose Your Device
                </h2>

                <!-- Accordion Container -->
                <div class="space-y-6">

                    <!-- Mobiles Accordion -->
                    <div class="accordion bg-white rounded-2xl shadow-xl overflow-hidden">
                        <button class="accordion-header w-full flex justify-between items-center p-6 text-lg font-bold text-indigo-700 hover:bg-indigo-100 transition">
                            <span><i class="fas fa-mobile-alt mr-3"></i> Mobiles</span>
                            <svg class="accordion-icon w-6 h-6 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="accordion-content grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6 hidden opacity-0 transition-all duration-200 ease-out">
                            <!-- Apple -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Apple iPhone">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-16 h-16 mx-auto mb-4" alt="Apple">
                                <h3 class="text-lg font-bold text-gray-800">Apple</h3>
                            </div>
                            <!-- Samsung -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Samsung">
                                <img src="public\uploads\images\samsung_logo.png" class="w-20 h-10 mx-auto mb-4" alt="Samsung">
                                <h3 class="text-lg font-bold text-gray-800">Samsung</h3>
                            </div>
                            <!-- OnePlus -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="OnePlus">
                                <img src="public\uploads\images\oneplusr_logo.jpg" class="w-20 h-10 mx-auto mb-4" alt="OnePlus">
                                <h3 class="text-lg font-bold text-gray-800">OnePlus</h3>
                            </div>
                            <!-- Xiaomi -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Xiaomi">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Xiaomi_logo.svg" class="w-16 h-16 mx-auto mb-4" alt="Xiaomi">
                                <h3 class="text-lg font-bold text-gray-800">Xiaomi</h3>
                            </div>
                            <!-- Oppo -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Oppo">
                                <img src="public\uploads\images\oppo_logo.jpg" class="w-24 h-10 mx-auto mb-4" alt="Oppo">
                                <h3 class="text-lg font-bold text-gray-800">Oppo</h3>
                            </div>
                            <!-- Vivo -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Vivo">
                                <img src="public\uploads\images\vivo_logo.jpg" class="w-20 h-10 mx-auto mb-4" alt="Vivo">
                                <h3 class="text-lg font-bold text-gray-800">Vivo</h3>
                            </div>
                            <!-- Realme -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Realme">
                                <img src="public\uploads\images\realme_logo.jpg" class="w-24 h-10 mx-auto mb-4" alt="Realme">
                                <h3 class="text-lg font-bold text-gray-800">Realme</h3>
                            </div>
                            <!-- Google Pixel -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Google Pixel">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" class="w-20 h-10 mx-auto mb-4" alt="Google">
                                <h3 class="text-lg font-bold text-gray-800">Google Pixel</h3>
                            </div>
                        </div>

                    </div>

                    <!-- iPads Accordion -->
                    <div class="accordion bg-white rounded-2xl shadow-xl overflow-hidden">
                        <button class="accordion-header w-full flex justify-between items-center p-6 text-lg font-bold text-purple-700 hover:bg-purple-100 transition">
                            <span><i class="fas fa-tablet-alt mr-3"></i> iPads</span>
                            <svg class="accordion-icon w-6 h-6 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="accordion-content grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6 hidden opacity-0 transition-all duration-200 ease-out">
                            <!-- iPad Pro -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="iPad Pro">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-16 h-16 mx-auto mb-4" alt="iPad Pro">
                                <h3 class="text-lg font-bold text-gray-800">iPad Pro</h3>
                            </div>
                            <!-- iPad Air -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="iPad Air">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-16 h-16 mx-auto mb-4" alt="iPad Air">
                                <h3 class="text-lg font-bold text-gray-800">iPad Air</h3>
                            </div>
                            <!-- iPad Mini -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="iPad Mini">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-16 h-16 mx-auto mb-4" alt="iPad Mini">
                                <h3 class="text-lg font-bold text-gray-800">iPad Mini</h3>
                            </div>
                            <!-- iPad 9th Gen -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="iPad 9th Gen">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-16 h-16 mx-auto mb-4" alt="iPad 9th Gen">
                                <h3 class="text-lg font-bold text-gray-800">iPad 9th Gen</h3>
                            </div>
                        </div>

                    </div>

                    <!-- Smartwatches Accordion -->
                    <div class="accordion bg-white rounded-2xl shadow-xl overflow-hidden">
                        <button class="accordion-header w-full flex justify-between items-center p-6 text-lg font-bold text-pink-700 hover:bg-pink-100 transition">
                            <span><i class="fas fa-watch mr-3"></i> Smartwatches</span>
                            <svg class="accordion-icon w-6 h-6 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="accordion-content grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6 hidden opacity-0 transition-all duration-200 ease-out">
                            <!-- Apple Watch -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Apple Watch">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-16 h-16 mx-auto mb-4" alt="Apple Watch">
                                <h3 class="text-lg font-bold text-gray-800">Apple Watch</h3>
                            </div>
                            <!-- Samsung Watch -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Samsung Galaxy Watch">
                                <img src="public\uploads\images\galaxy_watchlogo.jpg" class="w-20 h-10 mx-auto mb-4" alt="Samsung Watch">
                                <h3 class="text-lg font-bold text-gray-800">Samsung Galaxy Watch</h3>
                            </div>
                            <!-- Fitbit -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Fitbit">
                                <img src="public\uploads\images\fitbit_logo.jpg" class="w-24 h-10 mx-auto mb-4" alt="Fitbit">
                                <h3 class="text-lg font-bold text-gray-800">Fitbit</h3>
                            </div>
                            <!-- Garmin -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Garmin">
                                <img src="public\uploads\images\amazfit_logo.jpg" class="w-24 h-10 mx-auto mb-4" alt="Garmin">
                                <h3 class="text-lg font-bold text-gray-800">Amazfit</h3>
                            </div>
                            <!-- Huawei Watch -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Huawei Watch">
                                <img src="public\uploads\images\Huawei_logo.jpg" class="w-20 h-10 mx-auto mb-4" alt="Huawei Watch">
                                <h3 class="text-lg font-bold text-gray-800">Huawei Watch</h3>
                            </div>
                            <!-- Noise -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Noise">
                                <img src="public\uploads\images\noise_logo.jpg" class="w-20 h-10 mx-auto mb-4" alt="Noise">
                                <h3 class="text-lg font-bold text-gray-800">Noise</h3>
                            </div>
                            <!-- Boat -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Boat">
                                <img src="public\uploads\images\boat_logo.png" class="w-24 h-10 mx-auto mb-4" alt="Boat">
                                <h3 class="text-lg font-bold text-gray-800">Boat</h3>
                            </div>
                            <!-- Other -->
                            <div class="device-card bg-white rounded-xl shadow-lg hover:shadow-2xl transform hover:-translate-y-2 transition-all cursor-pointer p-6 text-center" data-device="Boat">
                                <img src="public\uploads\images\other_smartwatch.jpg" class="w-24 h-10 mx-auto mb-4" alt="Boat">
                                <h3 class="text-lg font-bold text-gray-800">Other</h3>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>



        <!-- Model Selection Section (Hidden by default) -->
        <section id="model-selection-section" class="py-16 md:py-24 bg-white hidden">
            <div class="max-w-7xl mx-auto text-center px-4">
                <h2 id="model-selection-heading" class="text-3xl sm:text-4xl font-bold text-gray-900 mb-12"></h2>
                <div id="model-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 justify-center text-center">
                    <!-- Models will be populated here by JavaScript -->
                </div>
                <div class="mt-8">
                    <button id="back-button-model" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-full font-medium transition-all duration-300 hover:bg-gray-300">
                        Back to all devices
                    </button>
                </div>
            </div>
        </section>

        <!-- Services Section (Hidden by default) -->
        <section id="services-section" class="py-16 md:py-24 bg-white hidden">
            <div class="max-w-7xl mx-auto text-center">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Services</h2>
                <p class="text-lg text-gray-600 mb-12">Choose Problem in your Mobile Phones</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <!-- Screen -->
                    <div data-service="Screen" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h6zM5 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Screen</p>
                    </div>
                    <!-- Back Panel -->
                    <div data-service="Back Panel" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.553 1.278L13.882 0l1.248 1.248-1.329 1.33zm1.144 1.143L15.395 3.7l-1.414 1.414-1.298-1.3zM16 4.905l-4.015-4.015-2.008 2.008 4.015 4.015zm-14.568 9.92A1.5 1.5 0 0 0 1.95 16h4.156a.5.5 0 0 0 .354-.854L5.158 13.5l1.01-1.01L10.5 15.5H.5a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5h2a.5.5 0 0 0 0-1H.5A1.5 1.5 0 0 0-1 4v11a1.5 1.5 0 0 0 1.5 1h10a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2.5a.5.5 0 0 1-.5.5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Back Panel</p>
                    </div>
                    <!-- Battery -->
                    <div data-service="Battery" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5.5 4v-.5a.5.5 0 0 1 1-1h4a.5.5 0 0 1 1 1V4h.5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h.5zM6 4h4v-.5H6V4z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Battery</p>
                    </div>
                    <!-- Front & Rear Camera -->
                    <div data-service="Front & Rear Camera" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M15.578 3.585A1.5 1.5 0 0 1 14.25 4H12a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h2.25a.5.5 0 0 1 .5.5v2.25a.5.5 0 0 1 .5.5V11a.5.5 0 0 0 .5.5H16V10a.5.5 0 0 0-.5-.5H14a.5.5 0 0 0-.5-.5V8a.5.5 0 0 0 .5-.5V5h2.25a.5.5 0 0 1 .5.5v2.25a.5.5 0 0 1 .5.5V8a.5.5 0 0 0 .5.5H16a.5.5 0 0 0-.5-.5V5zM2 12a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-2zM3 12v2h10v-2H3z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Front & Rear Camera</p>
                    </div>
                    <!-- Charging Port -->
                    <div data-service="Charging Port" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M1.5 4h13A1.5 1.5 0 0 1 16 5.5v5a1.5 1.5 0 0 1-1.5 1.5H1.5A1.5 1.5 0 0 1 0 10.5v-5A1.5 1.5 0 0 1 1.5 4zM2 5a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H2zm7 3.5V7a.5.5 0 0 0-1 0v1.5H7.5a.5.5 0 0 0 0 1h.5V11a.5.5 0 0 0 1 0V9.5h.5a.5.5 0 0 0 0-1h-.5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Charging Port</p>
                    </div>
                    <!-- Mic -->
                    <div data-service="Mic" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3zm4 0a1 1 0 0 0-2 0v5a1 1 0 1 0 2 0V3zM4 10a4 4 0 0 0 8 0v-1a.5.5 0 0 0-1 0v1a3 3 0 0 1-6 0v-1a.5.5 0 0 0-1 0v1z" />
                                <path d="M12.5 9.5a.5.5 0 0 0-1 0v1a3 3 0 0 1-6 0v-1a.5.5 0 0 0-1 0v1a4 4 0 0 0 8 0V9.5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Mic</p>
                    </div>
                    <!-- Ear Speaker -->
                    <div data-service="Ear Speaker" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11 5a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5zm-5 0a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5z" />
                                <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm1-5.5a1 1 0 0 0-2 0 1 1 0 0 0 2 0z" />
                                <path d="M14 6.5a.5.5 0 0 1 .5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5zm-1.5 0a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Ear Speaker</p>
                    </div>
                    <!-- Aux Jack -->
                    <div data-service="Aux Jack" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 11.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm0 13A6 6 0 1 1 8 2a6 6 0 0 1 0 12z" />
                                <path d="M8 5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Aux Jack</p>
                    </div>
                    <!-- Volume Button -->
                    <div data-service="Volume Button" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11.5 5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5zm-2 0a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5zm-2 0a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5z" />
                                <path d="M13.5 4h-11A1.5 1.5 0 0 0 1 5.5v5A1.5 1.5 0 0 0 2.5 12h11a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 13.5 4zM2 5a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H2z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Volume Button</p>
                    </div>
                    <!-- Home Button -->
                    <div data-service="Home Button" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.347 1.488L.716 8.524l-.004.004-.15.148c-.022.022-.05.038-.083.05-.05.018-.088.028-.11.028-.157.001-.225-.01-.252-.022a.5.5 0 0 1-.226-.226l-.004-.004-.02-.02c-.01-.01-.015-.02-.016-.027-.003-.005-.005-.01-.005-.015a.5.5 0 0 1 .147-.353L8 1.137zm-2.035 12.39L8.347 1.488l-1.34-1.34L.716 8.524l.004-.004.15-.148a.5.5 0 0 1 .226-.226l.004-.004c.01-.01.015-.02.016-.027l.003-.005c.003-.005.004-.01.005-.015a.5.5 0 0 1 .353-.147l.004.004 7.632 7.036-1.34 1.34L8 2.524z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Home Button</p>
                    </div>
                    <!-- Power Button -->
                    <div data-service="Power Button" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.981 1.708a6.5 6.5 0 0 0-9.458 0A.5.5 0 0 1 3.992.936a7.5 7.5 0 0 1 10.816 0 .5.5 0 0 1-.827.772zM8 4a.5.5 0 0 1-.5.5v5a.5.5 0 0 1 1 0v-5A.5.5 0 0 1 8 4z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Power Button</p>
                    </div>
                    <!-- Diagnoses -->
                    <div data-service="Diagnoses" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.5 15a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 .5.5zm-6-2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 .5.5zm3 0a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 .5.5z" />
                                <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm1-5.5a1 1 0 0 0-2 0 1 1 0 0 0 2 0z" />
                                <path d="M14 6.5a.5.5 0 0 1 .5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5zM12 6.5a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Diagnoses</p>
                    </div>
                    <!-- Water Damaged -->
                    <div data-service="Water Damaged" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 11a4.5 4.5 0 0 0 4.5-4.5c0-.663-.263-1.31-.732-1.778A.5.5 0 0 1 12 4.293V1.5A1.5 1.5 0 0 0 10.5 0H5.5A1.5 1.5 0 0 0 4 1.5v2.793a.5.5 0 0 1-.268.429C3.263 5.19 3 5.837 3 6.5A4.5 4.5 0 0 0 8 11zM8 2a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 2zM5.5 1a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V1.5A.5.5 0 0 1 5.5 1z" />
                                <path d="M8 12a4 4 0 0 1 4-4H4a4 4 0 0 1 4 4z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Water Damaged</p>
                    </div>
                    <!-- Body -->
                    <div data-service="Body" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.553 1.278L13.882 0l1.248 1.248-1.329 1.33zm1.144 1.143L15.395 3.7l-1.414 1.414-1.298-1.3zM16 4.905l-4.015-4.015-2.008 2.008 4.015 4.015zm-14.568 9.92A1.5 1.5 0 0 0 1.95 16h4.156a.5.5 0 0 0 .354-.854L5.158 13.5l1.01-1.01L10.5 15.5H.5a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5h2a.5.5 0 0 0 0-1H.5A1.5 1.5 0 0 0-1 4v11a1.5 1.5 0 0 0 1.5 1h10a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2.5a.5.5 0 0 1-.5.5z" />
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Body</p>
                    </div>
                </div>
                <div class="mt-8">
                    <button id="back-button-services" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-full font-medium transition-all duration-300 hover:bg-gray-300">
                        Back to models
                    </button>
                </div>
            </div>
        </section>

        <!-- Repair Form Section (Hidden by default) -->
        <section id="repair-form-section" class="py-16 md:py-24 bg-white hidden">
            <div class="max-w-xl mx-auto px-4">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center">Submit Your Repair Request</h2>
                <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                    <form id="repair-form" class="space-y-6">
                        <input type="hidden" id="device-name-input" name="device-name">
                        <input type="hidden" id="model-name-input" name="model-name">
                        <input type="hidden" id="service-name-input" name="service-name">
                        <div class="mb-4">
                            <label for="mobile-company" class="block text-gray-700 text-sm font-bold mb-2">Mobile Company</label>
                            <input
                                type="text"
                                id="mobile-company"
                                name="mobile_company"
                                class="w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                readonly
                                placeholder="Mobile company will appear here automatically">
                        </div>

                        <div class="mb-4">
                            <label for="mobile-model" class="block text-gray-700 text-sm font-bold mb-2">Mobile Model</label>
                            <input
                                type="text"
                                id="mobile-model"
                                name="mobile_model"
                                class="w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                readonly
                                placeholder="Selected model will appear here automatically">
                        </div>

                        <div class="mb-4">
                            <label for="service-name" class="block text-gray-700 text-sm font-bold mb-2">Service</label>
                            <input
                                type="text"
                                id="service-name"
                                name="services"
                                class="w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                readonly
                                placeholder="Selected service will appear here automatically">
                        </div>
                        <div>
                            <label for="full-name" class="block text-gray-700 font-semibold mb-2">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" id="full-name" name="full-name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Name">
                        </div>
                        <div>
                            <label for="mobile-number" class="block text-gray-700 font-semibold mb-2">Mobile Number <span class="text-red-500">*</span></label>
                            <input type="tel" id="mobile-number" name="mobile-number" required pattern="[0-9]{10}" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="e.g., 9876543210">
                            <p class="mt-1 text-sm text-gray-500">Please enter a 10-digit number.</p>
                        </div>
                        <div>
                            <label for="email-address" class="block text-gray-700 font-semibold mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" id="email-address" name="email-address" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="your@email.com">
                        </div>
                        <div>
                            <label for="issue-description" class="block text-gray-700 font-semibold mb-2">Describe Your Issue</label>
                            <textarea id="issue-description" name="issue-description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="e.g., The screen is cracked and the battery drains very quickly."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition-colors">
                            Submit Request
                        </button>
                    </form>
                    <div class="mt-8 text-center">
                        <button id="back-button-form" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-full font-medium transition-all duration-300 hover:bg-gray-300">
                            Back to service selection
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="aboutussec py-16 md:py-24">
            <div class="responsive-container-block bigContainer">
                <p class="text-blk headingText" data-aos="fade-up">About Us</p>
                <div class="responsive-container-block Container bottomContainer">
                    <div class="ultimateImg" data-aos="zoom-in">
                        <img class="mainImg" src="public/uploads/images/aboutusrepairingmob.jpg">
                        <div class="purpleBox">
                            <p class="purpleText">
                                Trusted by hundreds of happy customers for quick and reliable mobile repairs!
                            </p>
                            <img class="stars" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp5.svg">
                        </div>
                    </div>
                    <div class="allText bottomText" data-aos="fade-left">

                        <p class="text-blk subHeadingText">
                            Aarya Mobiles Repairing Services
                        </p>
                        <p class="text-blk description">
                            At **Arya Mobile Repairing Services**, we are passionate about bringing your devices back to life. With years of experience and a team of certified technicians, we provide top-notch repair services for all major mobile brands, including Apple, Samsung, Google, and more.
                            <br><br>believe in transparency, quality, and speed. Our goal is to make the repair process as smooth and stress-free as possible, offering competitive pricing and a satisfaction guarantee on all our work.
                        </p>
                        <a class="explore" href="#device-selection-section">
                            View Services
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .aboutussec {
                background: linear-gradient(135deg, #ffffff 0%, #e0f7fa 50%, #b2ebf2 100%);

                color: #fff;
            }

            .responsive-container-block {
                min-height: 75px;
                height: fit-content;
                width: 100%;
                padding-top: 10px;
                padding-right: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                display: flex;
                flex-wrap: wrap;
                margin-top: 0px;
                margin-right: auto;
                margin-bottom: 0px;
                margin-left: auto;
                justify-content: flex-start;
            }

            .aboutussec a {
                text-decoration-line: none;
                text-decoration-thickness: initial;
                text-decoration-style: initial;
                text-decoration-color: initial;
            }

            .text-blk {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 0px;
                padding-top: 10px;
                padding-right: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                line-height: 25px;
            }

            .responsive-container-block.bigContainer {
                padding-top: 10px;
                padding-right: 30px;
                padding-bottom: 10px;
                padding-left: 30px;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 10px 50px 10px 50px;
            }

            .mainImg {
                color: black;
                width: 100%;
                height: auto;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
            }

            .text-blk.headingText {
                font-size: 40px;
                font-weight: 700;
                line-height: 30px;
                color: rgb(176, 98, 255);
                padding-top: 0px;
                padding-right: 10px;
                padding-bottom: 0px;
                padding-left: 0px;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 5px;
                margin-left: 0px;
            }

            .allText {
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
                width: 40%;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 0px;
            }

            .text-blk.subHeadingText {
                color: rgb(102, 102, 102);
                font-size: 26px;
                line-height: 32px;
                font-weight: 700;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 15px;
                margin-left: 0px;
                padding-top: 0px;
                padding-right: 10px;
                padding-bottom: 0px;
                padding-left: 0px;
            }

            .text-blk.description {
                font-size: 18px;
                line-height: 26px;
                color: rgb(102, 102, 102);
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 50px;
                margin-left: 0px;
                font-weight: 400;
                padding-top: 0px;
                padding-right: 10px;
                padding-bottom: 0px;
                padding-left: 0px;
            }

            .explore {
                font-size: 16px;
                line-height: 28px;
                color: rgb(102, 102, 102);
                border-top-width: 2px;
                border-right-width: 2px;
                border-bottom-width: 2px;
                border-left-width: 2px;
                border-top-style: solid;
                border-right-style: solid;
                border-bottom-style: solid;
                border-left-style: solid;
                border-top-color: rgb(102, 102, 102);
                border-right-color: rgb(102, 102, 102);
                border-bottom-color: rgb(102, 102, 102);
                border-left-color: rgb(102, 102, 102);
                border-image-source: initial;
                border-image-slice: initial;
                border-image-width: initial;
                border-image-outset: initial;
                border-image-repeat: initial;
                cursor: pointer;
                background-color: white;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 0px;
                padding-top: 8px;
                padding-right: 40px;
                padding-bottom: 8px;
                padding-left: 40px;
            }

            .explore:hover {
                background-image: initial;
                background-position-x: initial;
                background-position-y: initial;
                background-size: initial;
                background-repeat-x: initial;
                background-repeat-y: initial;
                background-attachment: initial;
                background-origin: initial;
                background-clip: initial;
                background-color: rgb(176, 98, 255);
                color: white;
                border-top-width: initial;
                border-right-width: initial;
                border-bottom-width: initial;
                border-left-width: initial;
                border-top-style: none;
                border-right-style: none;
                border-bottom-style: none;
                border-left-style: none;
                border-top-color: initial;
                border-right-color: initial;
                border-bottom-color: initial;
                border-left-color: initial;
                border-image-source: initial;
                border-image-slice: initial;
                border-image-width: initial;
                border-image-outset: initial;
                border-image-repeat: initial;
            }

            .responsive-container-block.Container {
                margin-top: 80px;
                margin-right: auto;
                margin-bottom: 50px;
                margin-left: auto;
                justify-content: center;
                align-items: center;
                max-width: 1320px;
                padding-top: 10px;
                padding-right: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
            }

            .responsive-container-block.Container.bottomContainer {
                flex-direction: row-reverse;
                margin-top: 80px;
                margin-right: auto;
                margin-bottom: 50px;
                margin-left: auto;
                position: static;
            }

            .allText.aboveText {
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 40px;
            }

            .allText.bottomText {
                margin-top: 0px;
                margin-right: 40px;
                margin-bottom: 0px;
                margin-left: 0px;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                padding-top: 0px;
                padding-right: 15px;
                padding-bottom: 0px;
                padding-left: 0px;
            }

            .purpleBox {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                max-width: 430px;
                background-color: rgb(176, 98, 255);
                padding-top: 20px;
                padding-right: 20px;
                padding-bottom: 20px;
                padding-left: 20px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                position: absolute;
                bottom: -35px;
                left: -8%;
            }

            .purpleText {
                font-size: 18px;
                line-height: 26px;
                color: white;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 10px;
                margin-left: 0px;
            }

            .ultimateImg {
                width: 50%;
                position: relative;
            }

            @media (max-width: 1024px) {
                .responsive-container-block.Container {
                    max-width: 850px;
                }

                .mainImg {
                    width: 55%;
                    height: auto;
                }

                .allText {
                    width: 40%;
                    margin-top: 0px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 20px;
                }

                .responsive-container-block.bigContainer {
                    padding-top: 10px;
                    padding-right: 10px;
                    padding-bottom: 10px;
                    padding-left: 10px;
                }

                .responsive-container-block.Container.bottomContainer {
                    margin-top: 80px;
                    margin-right: auto;
                    margin-bottom: 50px;
                    margin-left: auto;
                }

                .responsive-container-block.Container {
                    max-width: 830px;
                }

                .allText.aboveText {
                    margin-top: 30px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 40px;
                }

                .allText.bottomText {
                    margin-top: 30px;
                    margin-right: 40px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                    text-align: left;
                }

                .text-blk.headingText {
                    text-align: center;
                }

                .allText.aboveText {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    margin-top: 30px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }

                .text-blk.subHeadingText {
                    text-align: left;
                    font-size: 26px;
                    line-height: 32px;
                }

                .text-blk.description {
                    text-align: left;
                    line-height: 24px;
                }

                .explore {
                    margin-top: 0px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }

                .responsive-container-block.bigContainer {
                    padding-top: 10px;
                    padding-right: 30px;
                    padding-bottom: 10px;
                    padding-left: 30px;
                }

                .responsive-container-block.Container {
                    justify-content: space-evenly;
                }

                .purpleBox {
                    bottom: 10%;
                }

                .responsive-container-block.Container.bottomContainer {
                    padding-top: 10px;
                    padding-right: 0px;
                    padding-bottom: 10px;
                    padding-left: 0px;
                    max-width: 930px;
                }

                .allText.bottomText {
                    width: 40%;
                }

                .purpleBox {
                    bottom: auto;
                    left: -10%;
                    top: 70%;
                }

                .mainImg {
                    width: 100%;
                }

                .text-blk.headingText {
                    text-align: left;
                }
            }

            @media (max-width: 768px) {
                .allText {
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    padding-top: 0px;
                    padding-right: 0px;
                    padding-bottom: 0px;
                    padding-left: 0px;
                }

                .responsive-container-block.Container {
                    flex-direction: column;
                    height: auto;
                }

                .text-blk.headingText {
                    text-align: center;
                }

                .text-blk.subHeadingText {
                    text-align: center;
                    font-size: 24px;
                }

                .text-blk.description {
                    text-align: center;
                    font-size: 18px;
                }

                .allText {
                    margin-top: 40px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }

                .allText.aboveText {
                    margin-top: 40px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }

                .responsive-container-block.Container {
                    margin-top: 80px;
                    margin-right: auto;
                    margin-bottom: 50px;
                    margin-left: auto;
                }

                .responsive-container-block.Container.bottomContainer {
                    margin-top: 50px;
                    margin-right: auto;
                    margin-bottom: 50px;
                    margin-left: auto;
                }

                .allText.bottomText {
                    margin-top: 40px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }

                .mainImg {
                    width: 100%;
                    margin-top: 0px;
                    margin-right: 0px;
                    margin-bottom: -70px;
                    margin-left: 0px;
                }

                .responsive-container-block.Container.bottomContainer {
                    flex-direction: column;
                }

                .ultimateImg {
                    width: 100%;
                }

                .purpleBox {
                    position: static;
                }

                .allText.bottomText {
                    width: 100%;
                    align-items: flex-start;
                }

                .text-blk.headingText {
                    text-align: left;
                }

                .text-blk.subHeadingText {
                    text-align: left;
                }

                .text-blk.description {
                    text-align: left;
                }

                .ultimateImg {
                    position: static;
                }

                .mainImg {
                    margin-top: 0px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }

                .ultimateImg {
                    position: relative;
                }

                .purpleBox {
                    margin-top: 0px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                    position: absolute;
                    left: 0px;
                    top: 80%;
                }

                .allText.bottomText {
                    margin-top: 100px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }
            }

            @media (max-width: 500px) {
                .responsive-container-block.Container {
                    padding-top: 10px;
                    padding-right: 0px;
                    padding-bottom: 10px;
                    padding-left: 0px;
                    width: 100%;
                    max-width: 100%;
                }

                .mainImg {
                    width: 100%;
                }

                .responsive-container-block.bigContainer {
                    padding-top: 10px;
                    padding-right: 25px;
                    padding-bottom: 10px;
                    padding-left: 25px;
                }

                .text-blk.subHeadingText {
                    font-size: 24px;
                    padding-top: 0px;
                    padding-right: 0px;
                    padding-bottom: 0px;
                    padding-left: 0px;
                    line-height: 28px;
                }

                .text-blk.description {
                    font-size: 16px;
                    padding-top: 0px;
                    padding-right: 0px;
                    padding-bottom: 0px;
                    padding-left: 0px;
                    line-height: 22px;
                }

                .allText {
                    padding-top: 0px;
                    padding-right: 0px;
                    padding-bottom: 0px;
                    padding-left: 0px;
                    width: 100%;
                }

                .allText.bottomText {
                    margin-top: 50px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                    padding: 0 0 0 0;
                    margin: 30px 0 0 0;
                }

                .ultimateImg {
                    position: static;
                }

                .purpleBox {
                    position: static;
                }

                .stars {
                    width: 55%;
                }

                .allText.bottomText {
                    margin-top: 75px;
                    margin-right: 0px;
                    margin-bottom: 0px;
                    margin-left: 0px;
                }

                .responsive-container-block.bigContainer {
                    padding-top: 10px;
                    padding-right: 20px;
                    padding-bottom: 10px;
                    padding-left: 20px;
                }

                .purpleText {
                    font-size: 16px;
                    line-height: 22px;
                }

                .explore {
                    padding: 6px 35px 6px 35px;
                    font-size: 15px;
                }
            }




            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap');

            *,
            *:before,
            *:after {
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }

            .wk-desk-1 {
                width: 8.333333%;
            }

            .wk-desk-2 {
                width: 16.666667%;
            }

            .wk-desk-3 {
                width: 25%;
            }

            .wk-desk-4 {
                width: 33.333333%;
            }

            .wk-desk-5 {
                width: 41.666667%;
            }

            .wk-desk-6 {
                width: 50%;
            }

            .wk-desk-7 {
                width: 58.333333%;
            }

            .wk-desk-8 {
                width: 66.666667%;
            }

            .wk-desk-9 {
                width: 75%;
            }

            .wk-desk-10 {
                width: 83.333333%;
            }

            .wk-desk-11 {
                width: 91.666667%;
            }

            .wk-desk-12 {
                width: 100%;
            }

            @media (max-width: 1024px) {
                .wk-ipadp-1 {
                    width: 8.333333%;
                }

                .wk-ipadp-2 {
                    width: 16.666667%;
                }

                .wk-ipadp-3 {
                    width: 25%;
                }

                .wk-ipadp-4 {
                    width: 33.333333%;
                }

                .wk-ipadp-5 {
                    width: 41.666667%;
                }

                .wk-ipadp-6 {
                    width: 50%;
                }

                .wk-ipadp-7 {
                    width: 58.333333%;
                }

                .wk-ipadp-8 {
                    width: 66.666667%;
                }

                .wk-ipadp-9 {
                    width: 75%;
                }

                .wk-ipadp-10 {
                    width: 83.333333%;
                }

                .wk-ipadp-11 {
                    width: 91.666667%;
                }

                .wk-ipadp-12 {
                    width: 100%;
                }
            }

            @media (max-width: 768px) {
                .wk-tab-1 {
                    width: 8.333333%;
                }

                .wk-tab-2 {
                    width: 16.666667%;
                }

                .wk-tab-3 {
                    width: 25%;
                }

                .wk-tab-4 {
                    width: 33.333333%;
                }

                .wk-tab-5 {
                    width: 41.666667%;
                }

                .wk-tab-6 {
                    width: 50%;
                }

                .wk-tab-7 {
                    width: 58.333333%;
                }

                .wk-tab-8 {
                    width: 66.666667%;
                }

                .wk-tab-9 {
                    width: 75%;
                }

                .wk-tab-10 {
                    width: 83.333333%;
                }

                .wk-tab-11 {
                    width: 91.666667%;
                }

                .wk-tab-12 {
                    width: 100%;
                }
            }

            @media (max-width: 500px) {
                .wk-mobile-1 {
                    width: 8.333333%;
                }

                .wk-mobile-2 {
                    width: 16.666667%;
                }

                .wk-mobile-3 {
                    width: 25%;
                }

                .wk-mobile-4 {
                    width: 33.333333%;
                }

                .wk-mobile-5 {
                    width: 41.666667%;
                }

                .wk-mobile-6 {
                    width: 50%;
                }

                .wk-mobile-7 {
                    width: 58.333333%;
                }

                .wk-mobile-8 {
                    width: 66.666667%;
                }

                .wk-mobile-9 {
                    width: 75%;
                }

                .wk-mobile-10 {
                    width: 83.333333%;
                }

                .wk-mobile-11 {
                    width: 91.666667%;
                }

                .wk-mobile-12 {
                    width: 100%;
                }
            }
        </style>


        <!-- Floating Call Button -->
        <div class="fixed bottom-4 right-4 z-50">
            <a href="tel:+919876543210" class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300 focus:outline-none focus:ring-4 focus:ring-green-300">
                call us
            </a>
        </div>
        <!-- Contact Section -->
        <section id="contact" class="py-16 md:py-24 bg-gray-50 rounded-t-3xl shadow-inner">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900" data-aos="fade-up">Contact Us</h2>
                <div class="contactusbox" data-aos="zoom-in">
                    <div class="flex flex-col lg:flex-row gap-12">
                        <div class="lg:w-1/2">
                            <p class="text-lg text-gray-700 mb-6">
                                Ready to get your device repaired? Fill out the form below or contact us directly. We'll get back to you as soon as possible with a free quote.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="text-gray-700">Shivtirth Nagar, Kothrud - 411 011</span>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.956.71l1.19 3.96a1 1 0 00.51.51l3.96 1.19a1 1 0 00.71.956H17a1 1 0 011 1v2.153a1 1 0 01-.71.956l-3.96 1.19a1 1 0 00-.51.51l-1.19 3.96a1 1 0 01-.956.71H3a1 1 0 01-1-1v-2.153a1 1 0 01.71-.956l3.96-1.19a1 1 0 00.51-.51l1.19-3.96a1 1 0 00.956-.71H17a1 1 0 011 1v2.153a1 1 0 01-.71.956L14.72 13.91a1 1 0 00-.51.51l-1.19 3.96a1 1 0 01-.956.71H3a1 1 0 01-1-1V5.153a1 1 0 01.71-.956z"></path>
                                    </svg>
                                    <a href="tel:5551234567" class="text-gray-700 hover:text-indigo-600 transition-colors">(555) 123-4567</a>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.003 5.884L10 11.239l7.997-5.355A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4.717-8-4.717V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <a href="mailto:contact@aryarepair.com" class="text-gray-700 hover:text-indigo-600 transition-colors">contact@aryarepair.com</a>
                                </div>

                            </div>
                        </div>
                        <div class="lg:w-1/2">
                            <div class="flex items-center space-x-4">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2061489554126!2d73.85284587496292!3d18.519584082573754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1e2226b7b11%3A0xa4bb8106175ca68b!2sShaniwar%20Wada!5e0!3m2!1sen!2sin!4v1761747897293!5m2!1sen!2sin" width="100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <form action="<?= base_url('contact_form') ?>" method="post" class="bg-white p-8 rounded-lg shadow-md" style="background: #f9fafb; display: none;">
                                <div class="mb-4">
                                    <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Name" required>
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="exa@gmail.com" required>
                                </div>

                                <div class="mb-4">
                                    <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                                    <input type="text" id="phone" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Mobile No.">
                                </div>

                                <div class="mb-4">
                                    <label for="subject" class="block text-gray-700 font-semibold mb-2">Subject</label>
                                    <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Subject" required>
                                </div>

                                <div class="mb-4">
                                    <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                                    <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Please enter your message." required></textarea>
                                </div>

                                <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition-colors">
                                    Submit Request
                                </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <style>
            .contactusbox {
                width: 85%;
                background: white;
                margin: 0 auto;
                padding: 20px;
                box-shadow: 0px 0px 6px gray;
            }

            .contactusbox iframe {
                height: 300px;
                padding: 5px;
                box-shadow: 0px 0px 5px #d0d0d0;
            }
        </style>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 rounded-t-lg">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Arya Mobile Repairing Services. All Rights Reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
            </div>
        </div>
    </footer>

    <!-- Custom Modal -->
    <div id="success-modal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="resetAndGoToMain();">&times;</span>
            <div class="text-center">
                <svg class="mx-auto h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="mt-4 text-2xl leading-6 font-medium text-gray-900">Success!</h3>
                <p class="mt-2 text-base text-gray-500">Your repair request has been submitted. We'll contact you shortly!</p>
                <button onclick="resetAndGoToMain();" class="mt-4 bg-indigo-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-700 transition-colors">OK</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const deviceSelectionSection = document.getElementById('device-selection-section');
            const modelSelectionSection = document.getElementById('model-selection-section');
            const servicesSection = document.getElementById('services-section');
            const repairFormSection = document.getElementById('repair-form-section');
            const modelSelectionHeading = document.getElementById('model-selection-heading');
            const modelGrid = document.getElementById('model-grid');
            const backButtonModel = document.getElementById('back-button-model');
            const backButtonServices = document.getElementById('back-button-services');
            const backButtonForm = document.getElementById('back-button-form');
            const repairForm = document.getElementById('repair-form');
            const deviceNameInput = document.getElementById('device-name-input');
            const modelNameInput = document.getElementById('model-name-input');
            const serviceNameInput = document.getElementById('service-name-input');
            const successModal = document.getElementById('success-modal');

            let selectedDevice = '';
            let selectedModel = '';
            let selectedService = '';

            // Data for device models
            const deviceData = {
                'Apple iPhone': [
                    'iPhone 15 Pro Max', 'iPhone 15 Pro', 'iPhone 15',
                    'iPhone 14 Pro Max', 'iPhone 14 Pro', 'iPhone 14',
                    'iPhone 13 Pro Max', 'iPhone 13 Pro', 'iPhone 13',
                    'iPhone 12 Pro Max', 'iPhone 12', 'iPhone 11',
                    'iPhone SE (2022)', 'iPhone XR', 'other'
                ],
                'iPad': [
                    'iPad Pro (M4)', 'iPad Pro (M2)', 'iPad Air (M2)',
                    'iPad Air (5th Gen)', 'iPad (10th Gen)',
                    'iPad (9th Gen)', 'iPad mini (6th Gen)', 'iPad mini (5th Gen)', 'other'
                ],
                'Apple Watch': [
                    'Apple Watch Ultra 2', 'Apple Watch Ultra',
                    'Apple Watch Series 9', 'Apple Watch Series 8',
                    'Apple Watch SE (2nd Gen)', 'Apple Watch SE', 'other'
                ],
                'Samsung': [
                    'Galaxy S24 Ultra', 'Galaxy S24+', 'Galaxy S24',
                    'Galaxy S23 Ultra', 'Galaxy S23', 'Galaxy Z Fold5',
                    'Galaxy Z Flip5', 'Galaxy Z Fold4', 'Galaxy Z Flip4',
                    'Galaxy A55', 'Galaxy A35', 'Galaxy Tab S9 Ultra',
                    'Galaxy Tab S9+', 'Galaxy Tab S9', 'Galaxy Tab A9+', 'other'
                ],
                'OnePlus': [
                    'OnePlus 12', 'OnePlus 12R', 'OnePlus 11',
                    'OnePlus 10 Pro', 'OnePlus 10T',
                    'OnePlus Nord 3', 'OnePlus Nord CE 3',
                    'OnePlus Nord CE 3 Lite', 'other'
                ],
                'Google Pixel': [
                    'Pixel 8 Pro', 'Pixel 8', 'Pixel 7a',
                    'Pixel 7 Pro', 'Pixel 7', 'Pixel 6a',
                    'Pixel Fold', 'Pixel Tablet', 'other'
                ],
                'Oppo': [
                    'Oppo Reno 11 Pro', 'Oppo Reno 10 Pro+',
                    'Oppo Find X7 Ultra', 'Oppo Find X6 Pro',
                    'Oppo Find N3 Flip', 'Oppo Find N2 Flip', 'other'
                ],
                'Vivo': [
                    'Vivo X100 Pro', 'Vivo X100',
                    'Vivo V30 Pro', 'Vivo V29 Pro', 'Vivo V29',
                    'Vivo Y200e', 'Vivo Y100', 'Vivo T3x', 'other'
                ],
                'Realme': [
                    'Realme 12 Pro+', 'Realme 12 Pro',
                    'Realme GT 5 Pro', 'Realme GT 3',
                    'Realme 11 Pro+', 'Realme 11x',
                    'Realme Narzo 70 Pro', 'Realme C67', 'other'
                ],
                'Mi (Redmi)': [
                    'Xiaomi 14 Ultra', 'Xiaomi 14',
                    'Redmi Note 13 Pro+', 'Redmi Note 13 Pro',
                    'Redmi Note 13 5G', 'Redmi Note 12 Pro+',
                    'Redmi 13C', 'POCO F6 Pro', 'POCO X6 Pro', 'other'
                ],
                'iQOO': [
                    'iQOO 12', 'iQOO 12 Pro', 'iQOO Neo 9 Pro',
                    'iQOO Z9', 'iQOO Z7 Pro', 'iQOO 11', 'other'
                ],
                'Asus ROG': [
                    'ROG Phone 8 Pro', 'ROG Phone 8',
                    'ROG Phone 7 Ultimate', 'ROG Phone 7', 'other'
                ],
                'Nokia': [
                    'Nokia G42 5G', 'Nokia X30 5G',
                    'Nokia G60 5G', 'Nokia C32', 'Nokia C22', 'other'
                ],
                'Motorola': [
                    'Moto Edge 50 Ultra', 'Moto Edge 50 Pro',
                    'Moto Edge 40', 'Moto Edge 40 Neo',
                    'Moto Razr 40 Ultra', 'Moto Razr 40',
                    'Moto G73', 'Moto G54', 'other'
                ],
                'Honor': [
                    'Honor 200 Pro', 'Honor 90', 'Honor 100',
                    'Honor X9b', 'Honor Magic V2', 'Honor Magic 6 Pro', 'other'
                ],
                'Lenovo': [
                    'Lenovo Tab P12 Pro', 'Lenovo Tab P11 (2nd Gen)',
                    'Lenovo Tab M10', 'Lenovo Tab M11',
                    'Lenovo Legion Y700 (2023)', 'other'
                ],
                'Nothing': [
                    'Nothing Phone (2a)', 'Nothing Phone (2)', 'Nothing Phone (1)', 'other'
                ],
                'Sony': [
                    'Sony Xperia 1 VI', 'Sony Xperia 5 V',
                    'Sony Xperia 10 VI', 'Sony Xperia PRO-I', 'other'
                ]
            };


            // Mobile menu toggle
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Handle device card clicks
            document.querySelectorAll('.device-card').forEach(card => {
                card.addEventListener('click', () => {
                    selectedDevice = card.dataset.device;
                    modelSelectionHeading.textContent = `Select Your ${selectedDevice} Model`;
                    populateModels(selectedDevice);

                    // Show model section, hide device section
                    deviceSelectionSection.classList.add('hidden');
                    modelSelectionSection.classList.remove('hidden');
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            });

            // Populate models grid
            function populateModels(deviceName) {
                modelGrid.innerHTML = '';
                const models = deviceData[deviceName] || [];
                if (models.length > 0) {
                    models.forEach(model => {
                        const modelCard = document.createElement('button');
                        modelCard.className = `
                w-full sm:w-auto text-lg font-semibold text-indigo-700 
                border-2 border-indigo-500 bg-white rounded-xl 
                px-6 py-4 m-2 shadow-md transition-all duration-300 
                hover:bg-indigo-600 hover:text-white hover:shadow-lg 
                focus:outline-none focus:ring-4 focus:ring-indigo-300
            `;
                        modelCard.textContent = model;

                        modelCard.addEventListener('click', () => {
                            selectedModel = model;
                            modelSelectionSection.classList.add('hidden');
                            servicesSection.classList.remove('hidden');
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });
                        });

                        modelGrid.appendChild(modelCard);
                    });
                } else {
                    modelGrid.innerHTML = '<p class="text-center text-gray-600">No models found for this device.</p>';
                }
            }


            // Handle service card clicks
            document.querySelectorAll('.service-card').forEach(card => {
                card.addEventListener('click', () => {
                    selectedService = card.dataset.service;
                    showForm();
                });
            });

            function showForm() {
                companyField.value = selectedDevice; // Autofill company
                modelField.value = selectedModel; // Autofill model
                serviceField.value = selectedService; // Autofill service

                servicesSection.classList.add('hidden');
                repairFormSection.classList.remove('hidden');

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }


            // Handle back button clicks
            backButtonModel.addEventListener('click', () => {
                modelSelectionSection.classList.add('hidden');
                deviceSelectionSection.classList.remove('hidden');
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            backButtonServices.addEventListener('click', () => {
                servicesSection.classList.add('hidden');
                modelSelectionSection.classList.remove('hidden');
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            backButtonForm.addEventListener('click', () => {
                repairFormSection.classList.add('hidden');
                servicesSection.classList.remove('hidden');
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Function to reset the app to the main page
            window.resetAndGoToMain = function() {
                successModal.classList.remove('show');
                successModal.style.display = 'none';
                repairFormSection.classList.add('hidden');
                modelSelectionSection.classList.add('hidden');
                servicesSection.classList.add('hidden');
                deviceSelectionSection.classList.remove('hidden');
                repairForm.reset();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            };

            // Handle form submission
            repairForm.addEventListener('submit', (e) => {
                e.preventDefault();

                const formData = new FormData(e.target);
                const data = Object.fromEntries(formData.entries());

                // Simple validation check
                const name = data['full-name'];
                const mobile = data['mobile-number'];
                const email = data['email-address'];

                if (name && mobile && email) {
                    console.log('Form Submitted:', data);
                    // In a real application, you would send this data to a server.

                    // Show success modal
                    successModal.classList.add('show');
                    successModal.style.display = 'flex';
                }
            });

            // Close modal on outside click
            window.addEventListener('click', (e) => {
                if (e.target == successModal) {
                    resetAndGoToMain();
                }
            });
        });
    </script>

    <script>
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                const icon = header.querySelector('.accordion-icon');

                if (content.classList.contains('hidden')) {
                    document.querySelectorAll('.accordion-content').forEach(c => {
                        c.classList.add('hidden', 'opacity-0');
                        c.previousElementSibling.querySelector('.accordion-icon').classList.remove('rotate-180');
                    });
                    content.classList.remove('hidden');
                    setTimeout(() => content.classList.remove('opacity-0'), 10);
                    icon.classList.add('rotate-180');
                } else {
                    content.classList.add('opacity-0');
                    setTimeout(() => content.classList.add('hidden'), 300);
                    icon.classList.remove('rotate-180');
                }
            });
        });
    </script>
    <script>
        const companyField = document.getElementById('mobile-company');
        const modelField = document.getElementById('mobile-model');
        const serviceField = document.getElementById('service-name');
    </script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 120,
        });
    </script>
</body>

</html>