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
            background-color: rgba(0,0,0,0.4);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #fefefe;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
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
    <section class="hero-bg text-white py-20 md:py-32 rounded-b-3xl overflow-hidden shadow-lg">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 animate-fade-in-up">
                Expert Mobile Repair Services
            </h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fade-in">
                Fast, reliable, and affordable repairs for all your devices.
            </p>
            <a href="#device-selection-section" class="bg-indigo-600 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-indigo-700 transition-all transform hover:scale-105">
                Get a Free Quote
            </a>
        </div>
    </section>

    <main id="main-content">
        <!-- Device Selection Section (Default View) -->
        <section id="device-selection-section" class="py-16 md:py-24 bg-white rounded-3xl -mt-16 z-10 relative shadow-inner">
            <div class="max-w-7xl mx-auto text-center px-4">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-12">Select Your Device</h2>
                <div id="device-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    <!-- Device 1: iPhone -->
                    <div data-device="Apple iPhone" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=iPhone" alt="iPhone" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">iPhone</p>
                    </div>
                    <!-- Device 2: iPad -->
                    <div data-device="iPad" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=iPad" alt="iPad" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">iPad</p>
                    </div>
                    <!-- Device 3: Apple Watch -->
                    <div data-device="Apple Watch" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Watch" alt="Apple Watch" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Apple Watch</p>
                    </div>
                    <!-- Device 4: OnePlus -->
                    <div data-device="OnePlus" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=OnePlus" alt="OnePlus" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">OnePlus</p>
                    </div>
                    <!-- Device 5: Google Pixel -->
                    <div data-device="Google Pixel" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Pixel" alt="Google Pixel" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Google Pixel</p>
                    </div>
                    <!-- Device 6: Samsung -->
                    <div data-device="Samsung" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Samsung" alt="Samsung" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Samsung</p>
                    </div>
                    <!-- Device 7: Oppo -->
                    <div data-device="Oppo" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Oppo" alt="Oppo" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Oppo</p>
                    </div>
                    <!-- Device 8: Vivo -->
                    <div data-device="Vivo" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Vivo" alt="Vivo" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Vivo</p>
                    </div>
                    <!-- Device 9: Realme -->
                    <div data-device="Realme" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Realme" alt="Realme" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Realme</p>
                    </div>
                    <!-- Device 10: Mi (Redmi) -->
                    <div data-device="Mi (Redmi)" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Mi+Redmi" alt="Mi (Redmi)" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Mi (Redmi)</p>
                    </div>
                    <!-- Device 11: iQOO -->
                    <div data-device="iQOO" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=iQOO" alt="iQOO" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">iQOO</p>
                    </div>
                    <!-- Device 12: Asus ROG -->
                    <div data-device="Asus ROG" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Asus+ROG" alt="Asus ROG" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Asus ROG</p>
                    </div>
                    <!-- Device 13: Nokia -->
                    <div data-device="Nokia" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Nokia" alt="Nokia" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Nokia</p>
                    </div>
                    <!-- Device 14: Motorola -->
                    <div data-device="Motorola" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Motorola" alt="Motorola" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Motorola</p>
                    </div>
                    <!-- Device 15: Honor -->
                    <div data-device="Honor" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Honor" alt="Honor" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Honor</p>
                    </div>
                    <!-- Device 16: Lenovo -->
                    <div data-device="Lenovo" class="device-card bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer">
                        <img src="https://placehold.co/150x150/E5E7EB/4B5563?text=Lenovo" alt="Lenovo" class="w-full h-auto rounded-xl mb-4">
                        <p class="text-lg font-medium text-gray-800">Lenovo</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Model Selection Section (Hidden by default) -->
        <section id="model-selection-section" class="py-16 md:py-24 bg-white hidden">
            <div class="max-w-7xl mx-auto text-center px-4">
                <h2 id="model-selection-heading" class="text-3xl sm:text-4xl font-bold text-gray-900 mb-12"></h2>
                <div id="model-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
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
                                <path d="M11 2a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h6zM5 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H5z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Screen</p>
                    </div>
                    <!-- Back Panel -->
                    <div data-service="Back Panel" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.553 1.278L13.882 0l1.248 1.248-1.329 1.33zm1.144 1.143L15.395 3.7l-1.414 1.414-1.298-1.3zM16 4.905l-4.015-4.015-2.008 2.008 4.015 4.015zm-14.568 9.92A1.5 1.5 0 0 0 1.95 16h4.156a.5.5 0 0 0 .354-.854L5.158 13.5l1.01-1.01L10.5 15.5H.5a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5h2a.5.5 0 0 0 0-1H.5A1.5 1.5 0 0 0-1 4v11a1.5 1.5 0 0 0 1.5 1h10a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2.5a.5.5 0 0 1-.5.5z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Back Panel</p>
                    </div>
                    <!-- Battery -->
                    <div data-service="Battery" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5.5 4v-.5a.5.5 0 0 1 1-1h4a.5.5 0 0 1 1 1V4h.5a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h.5zM6 4h4v-.5H6V4z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Battery</p>
                    </div>
                    <!-- Front & Rear Camera -->
                    <div data-service="Front & Rear Camera" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M15.578 3.585A1.5 1.5 0 0 1 14.25 4H12a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h2.25a.5.5 0 0 1 .5.5v2.25a.5.5 0 0 1 .5.5V11a.5.5 0 0 0 .5.5H16V10a.5.5 0 0 0-.5-.5H14a.5.5 0 0 0-.5-.5V8a.5.5 0 0 0 .5-.5V5h2.25a.5.5 0 0 1 .5.5v2.25a.5.5 0 0 1 .5.5V8a.5.5 0 0 0 .5.5H16a.5.5 0 0 0-.5-.5V5zM2 12a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-2zM3 12v2h10v-2H3z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Front & Rear Camera</p>
                    </div>
                    <!-- Charging Port -->
                    <div data-service="Charging Port" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M1.5 4h13A1.5 1.5 0 0 1 16 5.5v5a1.5 1.5 0 0 1-1.5 1.5H1.5A1.5 1.5 0 0 1 0 10.5v-5A1.5 1.5 0 0 1 1.5 4zM2 5a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H2zm7 3.5V7a.5.5 0 0 0-1 0v1.5H7.5a.5.5 0 0 0 0 1h.5V11a.5.5 0 0 0 1 0V9.5h.5a.5.5 0 0 0 0-1h-.5z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Charging Port</p>
                    </div>
                    <!-- Mic -->
                    <div data-service="Mic" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3zm4 0a1 1 0 0 0-2 0v5a1 1 0 1 0 2 0V3zM4 10a4 4 0 0 0 8 0v-1a.5.5 0 0 0-1 0v1a3 3 0 0 1-6 0v-1a.5.5 0 0 0-1 0v1z"/>
                                <path d="M12.5 9.5a.5.5 0 0 0-1 0v1a3 3 0 0 1-6 0v-1a.5.5 0 0 0-1 0v1a4 4 0 0 0 8 0V9.5z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Mic</p>
                    </div>
                    <!-- Ear Speaker -->
                    <div data-service="Ear Speaker" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11 5a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5zm-5 0a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5z"/>
                                <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm1-5.5a1 1 0 0 0-2 0 1 1 0 0 0 2 0z"/>
                                <path d="M14 6.5a.5.5 0 0 1 .5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5zm-1.5 0a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Ear Speaker</p>
                    </div>
                    <!-- Aux Jack -->
                    <div data-service="Aux Jack" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 11.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                <path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zm0 13A6 6 0 1 1 8 2a6 6 0 0 1 0 12z"/>
                                <path d="M8 5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Aux Jack</p>
                    </div>
                    <!-- Volume Button -->
                    <div data-service="Volume Button" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11.5 5.5a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5zm-2 0a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5zm-2 0a.5.5 0 0 0-1 0v5a.5.5 0 0 0 1 0v-5z"/>
                                <path d="M13.5 4h-11A1.5 1.5 0 0 0 1 5.5v5A1.5 1.5 0 0 0 2.5 12h11a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 13.5 4zM2 5a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5H2z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Volume Button</p>
                    </div>
                    <!-- Home Button -->
                    <div data-service="Home Button" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.347 1.488L.716 8.524l-.004.004-.15.148c-.022.022-.05.038-.083.05-.05.018-.088.028-.11.028-.157.001-.225-.01-.252-.022a.5.5 0 0 1-.226-.226l-.004-.004-.02-.02c-.01-.01-.015-.02-.016-.027-.003-.005-.005-.01-.005-.015a.5.5 0 0 1 .147-.353L8 1.137zm-2.035 12.39L8.347 1.488l-1.34-1.34L.716 8.524l.004-.004.15-.148a.5.5 0 0 1 .226-.226l.004-.004c.01-.01.015-.02.016-.027l.003-.005c.003-.005.004-.01.005-.015a.5.5 0 0 1 .353-.147l.004.004 7.632 7.036-1.34 1.34L8 2.524z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Home Button</p>
                    </div>
                    <!-- Power Button -->
                    <div data-service="Power Button" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.981 1.708a6.5 6.5 0 0 0-9.458 0A.5.5 0 0 1 3.992.936a7.5 7.5 0 0 1 10.816 0 .5.5 0 0 1-.827.772zM8 4a.5.5 0 0 1-.5.5v5a.5.5 0 0 1 1 0v-5A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Power Button</p>
                    </div>
                    <!-- Diagnoses -->
                    <div data-service="Diagnoses" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.5 15a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 .5.5zm-6-2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 .5.5zm3 0a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-1 0v1a.5.5 0 0 0 .5.5z"/>
                                <path d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm1-5.5a1 1 0 0 0-2 0 1 1 0 0 0 2 0z"/>
                                <path d="M14 6.5a.5.5 0 0 1 .5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5zM12 6.5a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 1 0v1a.5.5 0 0 1-.5.5z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Diagnoses</p>
                    </div>
                    <!-- Water Damaged -->
                    <div data-service="Water Damaged" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 11a4.5 4.5 0 0 0 4.5-4.5c0-.663-.263-1.31-.732-1.778A.5.5 0 0 1 12 4.293V1.5A1.5 1.5 0 0 0 10.5 0H5.5A1.5 1.5 0 0 0 4 1.5v2.793a.5.5 0 0 1-.268.429C3.263 5.19 3 5.837 3 6.5A4.5 4.5 0 0 0 8 11zM8 2a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 2zM5.5 1a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V1.5A.5.5 0 0 1 5.5 1z"/>
                                <path d="M8 12a4 4 0 0 1 4-4H4a4 4 0 0 1 4 4z"/>
                            </svg>
                        </div>
                        <p class="text-base font-medium text-gray-800">Water Damaged</p>
                    </div>
                    <!-- Body -->
                    <div data-service="Body" class="service-card p-4 flex flex-col items-center cursor-pointer">
                        <div class="text-blue-700 w-12 h-12 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M12.553 1.278L13.882 0l1.248 1.248-1.329 1.33zm1.144 1.143L15.395 3.7l-1.414 1.414-1.298-1.3zM16 4.905l-4.015-4.015-2.008 2.008 4.015 4.015zm-14.568 9.92A1.5 1.5 0 0 0 1.95 16h4.156a.5.5 0 0 0 .354-.854L5.158 13.5l1.01-1.01L10.5 15.5H.5a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5h2a.5.5 0 0 0 0-1H.5A1.5 1.5 0 0 0-1 4v11a1.5 1.5 0 0 0 1.5 1h10a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2.5a.5.5 0 0 1-.5.5z"/>
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
        <section id="about" class="py-16 md:py-24">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">About Us</h2>
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <img src="https://placehold.co/600x400/e2e8f0/4f46e5?text=Our+Team" alt="Our team" class="rounded-lg shadow-lg w-full">
                    </div>
                    <div class="md:w-1/2 text-gray-700">
                        <p class="mb-4 text-lg leading-relaxed">
                            At **Arya Mobile Repairing Services**, we are passionate about bringing your devices back to life. With years of experience and a team of certified technicians, we provide top-notch repair services for all major mobile brands, including Apple, Samsung, Google, and more.
                        </p>
                        <p class="mb-4 text-lg leading-relaxed">
                            We believe in transparency, quality, and speed. Our goal is to make the repair process as smooth and stress-free as possible, offering competitive pricing and a satisfaction guarantee on all our work.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <!-- Floating Call Button -->
    <div class="fixed bottom-4 right-4 z-50">
        <a href="tel:+919876543210" class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300 focus:outline-none focus:ring-4 focus:ring-green-300">
            call us
        </a>
    </div>
        <!-- Contact Section -->
        <section id="contact" class="py-16 md:py-24 bg-gray-50 rounded-t-3xl shadow-inner">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">Contact Us</h2>
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
                                <span class="text-gray-700">123 Main Street, Cityville, State 12345</span>
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
                        <form class="bg-white p-8 rounded-lg shadow-md">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 font-semibold mb-2">Full Name</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="your@email.com">
                            </div>
                            <div class="mb-4">
                                <label for="device" class="block text-gray-700 font-semibold mb-2">Device & Issue</label>
                                <textarea id="device" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="e.g., iPhone 13 Pro - cracked screen"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition-colors">
                                Submit Request
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
                'Apple iPhone': ['iPhone 15 Pro Max', 'iPhone 15 Pro', 'iPhone 15', 'iPhone 14 Pro Max', 'iPhone 14 Pro', 'iPhone 14', 'iPhone 13 Pro Max', 'iPhone 13 Pro', 'iPhone 13', 'iPhone SE'],
                'iPad': ['iPad Pro (M4)', 'iPad Air (M2)', 'iPad (10th gen)', 'iPad mini (6th gen)'],
                'Apple Watch': ['Apple Watch Ultra 2', 'Apple Watch Series 9', 'Apple Watch SE'],
                'OnePlus': ['OnePlus 12', 'OnePlus 11', 'OnePlus Nord 3', 'OnePlus Nord CE 3'],
                'Google Pixel': ['Pixel 8 Pro', 'Pixel 8', 'Pixel 7a', 'Pixel Fold'],
                'Samsung': ['Galaxy S24 Ultra', 'Galaxy S24+', 'Galaxy S24', 'Galaxy Z Fold5', 'Galaxy Z Flip5', 'Galaxy Tab S9'],
                'Oppo': ['Oppo Reno 10 Pro+', 'Oppo Find N3 Flip'],
                'Vivo': ['Vivo X100 Pro', 'Vivo V29 Pro', 'Vivo Y200e'],
                'Realme': ['Realme 12 Pro+', 'Realme GT 5 Pro'],
                'Mi (Redmi)': ['Xiaomi 14 Ultra', 'Redmi Note 13 Pro+'],
                'iQOO': ['iQOO 12', 'iQOO Z7 Pro'],
                'Asus ROG': ['ROG Phone 8 Pro', 'ROG Phone 8'],
                'Nokia': ['Nokia G42 5G', 'Nokia C22'],
                'Motorola': ['Moto Edge 40', 'Moto Razr 40 Ultra'],
                'Honor': ['Honor 90', 'Honor X9b'],
                'Lenovo': ['Lenovo Tab P12 Pro', 'Lenovo Tab M10']
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
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            });

            // Populate models grid
            function populateModels(deviceName) {
                modelGrid.innerHTML = '';
                const models = deviceData[deviceName] || [];
                if (models.length > 0) {
                    models.forEach(model => {
                        const modelCard = document.createElement('div');
                        modelCard.className = 'bg-white border border-gray-200 rounded-2xl p-4 flex flex-col items-center transition-all duration-300 transform hover:scale-105 hover:shadow-xl cursor-pointer';
                        
                        // Create a placeholder image for each model
                        const imageUrl = `https://placehold.co/150x150/E5E7EB/4B5563?text=${encodeURIComponent(model)}`;
                        
                        modelCard.innerHTML = `
                            <img src="${imageUrl}" alt="${model}" class="w-full h-auto rounded-xl mb-4">
                            <p class="text-lg font-medium text-gray-800 text-center">${model}</p>
                        `;

                        // Add click listener to show the services section
                        modelCard.addEventListener('click', () => {
                            selectedModel = model;
                            modelSelectionSection.classList.add('hidden');
                            servicesSection.classList.remove('hidden');
                            window.scrollTo({ top: 0, behavior: 'smooth' });
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

            // Show the repair form
            function showForm() {
                deviceNameInput.value = selectedDevice;
                modelNameInput.value = selectedModel;
                serviceNameInput.value = selectedService;

                servicesSection.classList.add('hidden');
                repairFormSection.classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }

            // Handle back button clicks
            backButtonModel.addEventListener('click', () => {
                modelSelectionSection.classList.add('hidden');
                deviceSelectionSection.classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            backButtonServices.addEventListener('click', () => {
                servicesSection.classList.add('hidden');
                modelSelectionSection.classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            backButtonForm.addEventListener('click', () => {
                repairFormSection.classList.add('hidden');
                servicesSection.classList.remove('hidden');
                window.scrollTo({ top: 0, behavior: 'smooth' });
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
                window.scrollTo({ top: 0, behavior: 'smooth' });
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
</body>
</html>
