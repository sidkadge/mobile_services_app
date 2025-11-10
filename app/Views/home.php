<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Arya Mobile Repairing Services</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet"/>
  <link href="public/assets/css/mystyle.css" rel="stylesheet"/>

  <style>
    /* Base font + safe background */
    body { font-family: 'Inter', sans-serif; background-color: #f7fafc; }

    /* ====== SCOPED STYLES (won’t conflict) ====== */
    .ams-modal { display:none; position:fixed; inset:0; z-index:100; background:rgba(0,0,0,0.45); backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px); align-items:center; justify-content:center; }
    .ams-modal--show { display:flex; }
    .ams-modal__panel { background:#fff; width: 92%; max-width: 420px; border-radius: 14px; padding: 24px; box-shadow: 0 6px 30px rgba(0,0,0,.12); transform: translateY(10px); opacity:0; transition: transform .25s ease, opacity .25s ease; }
    .ams-modal--show .ams-modal__panel { transform: translateY(0); opacity: 1; }

    /* Accordion (only icons rotate in this scope) */
    .ams-accordion__icon { transition: transform .25s ease; }
    .ams-accordion__icon--open { transform: rotate(180deg); }

    /* Service card selected state uses Tailwind classes toggled in JS; no CSS needed here */

.loader-overlay {
  position: fixed; inset: 0;
  background: rgba(0,0,0,0.45);
  display: none; align-items: center; justify-content: center;
  z-index: 9999;
}
.loader-spinner {
  border: 5px solid #ddd;
  border-top: 5px solid #4f46e5;
  width: 60px; height: 60px;
  border-radius: 50%;
  animation: spin 0.9s linear infinite;
}
@keyframes spin {
  to { transform: rotate(360deg); }
}
.mylogo{height: 95px;}
.mynav{padding: 5px 20px !important;}
</style>

</head>

<body class="bg-gray-100 text-gray-800">
  <!-- =============== HEADER ================== -->
  <header class="bg-white shadow-md">
    <nav class="container mynav mx-auto px-4 py-4 flex justify-between items-center">
      <a href="#" class="text-2xl font-bold text-gray-900">
        <img src="public/assets/images/logo_081125.png" alt="" class="mylogo">
      </a>
      <div class="hidden md:flex space-x-6">
        <a href="#device-selection-section" class="text-gray-600 hover:text-indigo-600 transition-colors">Services</a>
        <a href="#about" class="text-gray-600 hover:text-indigo-600 transition-colors">About Us</a>
        <a href="#contact" class="text-gray-600 hover:text-indigo-600 transition-colors">Contact</a>
      </div>
      <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-gray-900 transition-colors" aria-label="Toggle menu">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
        </svg>
      </button>
    </nav>
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg pb-4">
      <nav class="flex flex-col items-center space-y-4 pt-2">
        <a href="#device-selection-section" class="text-gray-600 hover:text-gray-900 transition-colors w-full text-center">Services</a>
        <a href="#about" class="text-gray-600 hover:text-gray-900 transition-colors w-full text-center">About Us</a>
        <a href="#contact" class="text-gray-600 hover:text-gray-900 transition-colors w-full text-center">Contact</a>
      </nav>
    </div>
  </header>

  <!-- =============== HERO ================== -->
  <section class="relative h-[70vh] md:h-[78vh] flex items-center justify-center text-center text-white">
    <div class="absolute inset-0 bg-fixed bg-center bg-cover" style="background-image:url('public/uploads/images/mobile_servicing_img.jpg');"></div>
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative z-10 px-4">
      <h1 class="text-4xl md:text-6xl font-extrabold mb-4">Expert Mobile Repair Services</h1>
      <p class="text-lg md:text-2xl mb-8 opacity-90">Fast, reliable, and affordable repairs for all your devices.</p>
      <a href="#device-selection-section" class="inline-block bg-indigo-600 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-indigo-700 transition-all transform hover:scale-[1.03]">
        View Services
      </a>
    </div>
  </section>

  <main id="main-content">
    <!-- =============== DEVICE SELECTION (ACCORDIONS) ================== -->
    <section id="device-selection-section" class="py-16 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 text-white">
      <div class="container mx-auto px-6">
        <h2 class="text-4xl font-extrabold text-center mb-12 drop-shadow-lg" data-aos="fade-up">
          Choose Your Device
        </h2>

        <div class="space-y-6">
          <!-- Mobiles -->
          <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <button class="ams-accordion__trigger w-full flex justify-between items-center p-6 text-lg font-bold text-indigo-700 hover:bg-indigo-50 transition">
              <span>Mobiles</span>
              <svg class="ams-accordion__icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="ams-accordion__content grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6 hidden opacity-0 transition-opacity duration-200 ease-out">
              <!-- Apple -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Apple iPhone" title="Apple iPhone">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-14 h-14 mx-auto mb-4" alt="Apple"/>
                <h3 class="text-lg font-bold text-gray-800">Apple</h3>
              </div>
              <!-- Samsung -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Samsung" title="Samsung">
                <img src="public/uploads/images/samsung_logo.png" class="w-20 h-10 mx-auto mb-4" alt="Samsung"/>
                <h3 class="text-lg font-bold text-gray-800">Samsung</h3>
              </div>
              <!-- OnePlus -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="OnePlus" title="OnePlus">
                <img src="public/uploads/images/oneplusr_logo.jpg" class="w-20 h-10 mx-auto mb-4" alt="OnePlus"/>
                <h3 class="text-lg font-bold text-gray-800">OnePlus</h3>
              </div>
              <!-- Xiaomi / Mi (Redmi) -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Mi (Redmi)" title="Mi / Redmi / Xiaomi">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Xiaomi_logo.svg" class="w-14 h-14 mx-auto mb-4" alt="Xiaomi"/>
                <h3 class="text-lg font-bold text-gray-800">Xiaomi / Redmi</h3>
              </div>
              <!-- Oppo -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Oppo" title="Oppo">
                <img src="public/uploads/images/oppo_logo.jpg" class="w-24 h-10 mx-auto mb-4" alt="Oppo"/>
                <h3 class="text-lg font-bold text-gray-800">Oppo</h3>
              </div>
              <!-- Vivo -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Vivo" title="Vivo">
                <img src="public/uploads/images/vivo_logo.jpg" class="w-20 h-10 mx-auto mb-4" alt="Vivo"/>
                <h3 class="text-lg font-bold text-gray-800">Vivo</h3>
              </div>
              <!-- Realme -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Realme" title="Realme">
                <img src="public/uploads/images/realme_logo.jpg" class="w-24 h-10 mx-auto mb-4" alt="Realme"/>
                <h3 class="text-lg font-bold text-gray-800">Realme</h3>
              </div>
              <!-- Google Pixel -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Google Pixel" title="Google Pixel">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" class="w-20 h-10 mx-auto mb-4" alt="Google"/>
                <h3 class="text-lg font-bold text-gray-800">Google Pixel</h3>
              </div>
              <!-- Others -->
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Motorola" title="Motorola">
                <img src="https://upload.wikimedia.org/wikipedia/commons/0/0e/Motorola_M_symbol_blue_vertical.svg" class="w-10 h-10 mx-auto mb-4" alt="Motorola"/>
                <h3 class="text-lg font-bold text-gray-800">Motorola</h3>
              </div>
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Nothing" title="Nothing">
                <img src="https://upload.wikimedia.org/wikipedia/commons/8/8c/Nothing_Logo.svg" class="w-16 h-8 mx-auto mb-4" alt="Nothing"/>
                <h3 class="text-lg font-bold text-gray-800">Nothing</h3>
              </div>
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Sony" title="Sony">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/22/Sony_logo.svg" class="w-20 h-6 mx-auto mb-4" alt="Sony"/>
                <h3 class="text-lg font-bold text-gray-800">Sony</h3>
              </div>
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="iQOO" title="iQOO">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/IQOO_logo.svg" class="w-20 h-8 mx-auto mb-4" alt="iQOO"/>
                <h3 class="text-lg font-bold text-gray-800">iQOO</h3>
              </div>
            </div>
          </div>

          <!-- iPads -->
          <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <button class="ams-accordion__trigger w-full flex justify-between items-center p-6 text-lg font-bold text-purple-700 hover:bg-purple-50 transition">
              <span>iPads</span>
              <svg class="ams-accordion__icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="ams-accordion__content grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6 hidden opacity-0 transition-opacity duration-200 ease-out">
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="iPad">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-14 h-14 mx-auto mb-4" alt="iPad"/>
                <h3 class="text-lg font-bold text-gray-800">iPad (All)</h3>
              </div>
            </div>
          </div>

          <!-- Smartwatches -->
          <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
            <button class="ams-accordion__trigger w-full flex justify-between items-center p-6 text-lg font-bold text-pink-700 hover:bg-pink-50 transition">
              <span>Smartwatches</span>
              <svg class="ams-accordion__icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
              </svg>
            </button>
            <div class="ams-accordion__content grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 p-6 hidden opacity-0 transition-opacity duration-200 ease-out">
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Apple Watch">
                <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" class="w-14 h-14 mx-auto mb-4" alt="Apple Watch"/>
                <h3 class="text-lg font-bold text-gray-800">Apple Watch</h3>
              </div>
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Samsung">
                <img src="public/uploads/images/galaxy_watchlogo.jpg" class="w-24 h-10 mx-auto mb-4" alt="Galaxy Watch"/>
                <h3 class="text-lg font-bold text-gray-800">Samsung Galaxy Watch</h3>
              </div>
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Noise">
                <img src="public/uploads/images/noise_logo.jpg" class="w-20 h-10 mx-auto mb-4" alt="Noise"/>
                <h3 class="text-lg font-bold text-gray-800">Noise</h3>
              </div>
              <div class="device-card bg-white rounded-xl shadow hover:shadow-2xl transition cursor-pointer p-6 text-center" data-device="Boat">
                <img src="public/uploads/images/boat_logo.png" class="w-24 h-10 mx-auto mb-4" alt="Boat"/>
                <h3 class="text-lg font-bold text-gray-800">boAt</h3>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- =============== MODEL SELECTION ================== -->
    <section id="model-selection-section" class="py-16 md:py-24 bg-white hidden">
      <div class="max-w-7xl mx-auto text-center px-4">
        <h2 id="model-selection-heading" class="text-3xl sm:text-4xl font-bold text-gray-900 mb-12"></h2>
        <div id="model-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-3 sm:gap-4 justify-center text-center"></div>

        <div class="mt-10 flex items-center justify-center gap-4">
          <button id="back-button-model" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-full font-medium transition hover:bg-gray-300">
            Back to all devices
          </button>
          <button id="go-to-services" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-semibold disabled:opacity-40 disabled:cursor-not-allowed">
            Next: Choose Services
          </button>
        </div>
      </div>
    </section>

    <!-- =============== SERVICES (TOGGLE CARDS, MULTI-SELECT) ================== -->
    <section id="services-section" class="py-16 md:py-24 bg-white hidden">
      <div class="max-w-7xl mx-auto text-center px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-2">Services</h2>
        <p class="text-lg text-gray-600 mb-10">Tap to select multiple problems (toggle ON/OFF)</p>

        <div id="service-grid" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 sm:gap-5">
          <!-- Cards will be built from this list -->
        </div>

        <div class="mt-10 flex items-center justify-center gap-4">
          <button id="back-button-services" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-full font-medium transition hover:bg-gray-300">
            Back to models
          </button>
          <button id="go-to-form" class="bg-indigo-600 text-white px-6 py-2 rounded-full font-semibold disabled:opacity-40 disabled:cursor-not-allowed">
            Next: Fill Contact Form
          </button>
        </div>

        <!-- Selection badges -->
        <div id="selected-services-badges" class="max-w-5xl mx-auto mt-8 flex flex-wrap justify-center gap-2"></div>
      </div>
    </section>

    <!-- =============== REPAIR FORM ================== -->
    <section id="repair-form-section" class="py-16 md:py-24 bg-white hidden">
      <div class="max-w-xl mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8 text-center">Submit Your Repair Request</h2>
        <div class="bg-gray-50 p-6 sm:p-8 rounded-lg shadow-md">
          <form id="repair-form" class="space-y-6">
            <!-- Hidden fields for posting -->
            <input type="hidden" id="device-name-input" name="device-name"/>
            <input type="hidden" id="model-name-input" name="model-name"/>
            <input type="hidden" id="service-name-input" name="service-name"/>
            <input type="hidden" id="services-json" name="services_json"/>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2">Mobile Company</label>
              <input id="mobile-company" name="mobile_company" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" readonly placeholder="Mobile company will appear here automatically"/>
            </div>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2">Mobile Model</label>
              <input id="mobile-model" name="mobile_model" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" readonly placeholder="Selected model will appear here automatically"/>
            </div>

            <div>
              <label class="block text-gray-700 text-sm font-bold mb-2">Services Selected</label>
              <input id="service-name" name="services" class="w-full px-4 py-2 border rounded-lg shadow-sm focus:border-blue-500 focus:ring-blue-500" readonly placeholder="Selected services will appear here automatically"/>
              <p class="text-xs text-gray-500 mt-1">We also send a JSON array in <code>services_json</code>.</p>
            </div>

            <div>
              <label for="full-name" class="block text-gray-700 font-semibold mb-2">Full Name <span class="text-red-500">*</span></label>
              <input type="text" id="full-name" name="full-name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Your Name"/>
            </div>

            <div>
              <label for="mobile-number" class="block text-gray-700 font-semibold mb-2">Mobile Number <span class="text-red-500">*</span></label>
              <input type="tel" id="mobile-number" name="mobile-number" pattern="[0-9]{10}" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="e.g., 9876543210"/>
              <p class="mt-1 text-sm text-gray-500">Please enter a 10-digit number.</p>
            </div>

            <div>
              <label for="email-address" class="block text-gray-700 font-semibold mb-2">Email Address <span class="text-red-500">*</span></label>
              <input type="email" id="email-address" name="email-address" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="your@email.com"/>
            </div>

            <div>
              <label for="issue-description" class="block text-gray-700 font-semibold mb-2">Describe Your Issue</label>
              <textarea id="issue-description" name="issue-description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="e.g., Screen cracked and battery drains fast."></textarea>
            </div>

            <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-3 rounded-lg shadow-lg hover:bg-indigo-700 transition-colors">
              Submit Request
            </button>
          </form>

          <div class="mt-8 text-center">
            <button id="back-button-form" class="bg-gray-200 text-gray-800 px-6 py-2 rounded-full font-medium transition hover:bg-gray-300">
              Back to service selection
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- =============== ABOUT (kept intact) ================== -->
<!-- About Section -->
<section id="about" class="aboutussec py-16 md:py-24">
    <div class="responsive-container-block bigContainer">
        <p class="text-blk headingText" data-aos="fade-up">About Us</p>
        <div class="responsive-container-block Container bottomContainer">
            <div class="ultimateImg" data-aos="zoom-in">
                <div class="image-wrapper">
                    <img class="mainImg" src="public/uploads/images/aboutusrepairingmob.jpg" alt="Mobile Repair Service">
                    <div class="floating-card">
                        <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </div>
                        <p class="purpleText">
                            Trusted by hundreds of happy customers for quick and reliable mobile repairs!
                        </p>
                        <div class="rating">
                            <div class="stars">
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                                <span>★</span>
                            </div>
                            <span class="rating-text">5.0 Rating</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="allText bottomText" data-aos="fade-left">
                <p class="text-blk subHeadingText">
                    Aarya Mobiles Repairing Services
                </p>
                <p class="text-blk description">
                    At **Arya Mobile Repairing Services**, we are passionate about bringing your devices back to life. With years of experience and a team of certified technicians, we provide top-notch repair services for all major mobile brands, including Apple, Samsung, Google, and more.
                    <br><br>We believe in transparency, quality, and speed. Our goal is to make the repair process as smooth and stress-free as possible, offering competitive pricing and a satisfaction guarantee on all our work.
                </p>
                <div class="button-group">
                    <a class="explore" href="#device-selection-section">
                        View Services
                    </a>
                    <a class="explore secondary" href="#contact">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- =============== CONTACT ================== -->
    <section id="contact" class="py-16 md:py-24 bg-gray-50 rounded-t-3xl shadow-inner">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900" data-aos="fade-up">Contact Us</h2>
        <div class="contactusbox" data-aos="zoom-in">
          <div class="flex flex-col lg:flex-row gap-12">
            <div class="lg:w-1/2">
                <h4 style="font-size: 28px; font-weight: bold; text-shadow: 1px 1px 3px #8080807d; color: cadetblue;">Aarya Mobile Solutions</h4>
              <p class="text-lg text-gray-700 mb-6" style="font-style: italic;">
                Ready to get your device repaired? Fill out the form above or contact us directly. We'll get back to you as soon as possible with a free quote.
              </p>
              <div class="space-y-4">
                <div class="flex items-center space-x-4">
                  <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-gray-700">Shivtirth Nagar, Kothrud - 411 011</span>
                </div>
                <div class="flex items-center space-x-4">
                  <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.956.71l1.19 3.96a1 1 0 00.51.51l3.96 1.19a1 1 0 00.71.956H17a1 1 0 011 1v2.153a1 1 0 01-.71.956l-3.96 1.19a1 1 0 00-.51.51l-1.19 3.96a1 1 0 01-.956.71H3a1 1 0 01-1-1v-2.153a1 1 0 01.71-.956l3.96-1.19a1 1 0 00.51-.51l1.19-3.96a1 1 0 00.956-.71H17a1 1 0 011 1v2.153a1 1 0 01-.71.956L14.72 13.91a1 1 0 00-.51.51l-1.19 3.96a1 1 0 01-.956.71H3a1 1 0 01-1-1V5.153a1 1 0 01.71-.956z"></path>
                  </svg>
                  <a href="tel:+919876543210" class="text-gray-700 hover:text-indigo-600 transition-colors">+91 98765 43210</a>
                </div>
                <div class="flex items-center space-x-4">
                  <svg class="w-6 h-6 text-indigo-600" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 11.239l7.997-5.355A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                    <path d="M18 8.118l-8 4.717-8-4.717V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                  </svg>
                  <a href="mailto:contact@aryarepair.com" class="text-gray-700 hover:text-indigo-600 transition-colors">contact@aryarepair.com</a>
                </div>
              </div>
            </div>

            <div class="lg:w-1/2">
              <div class="flex items-center space-x-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.2061489554126!2d73.85284587496292!3d18.519584082573754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1e2226b7b11%3A0xa4bb8106175ca68b!2sShaniwar%20Wada!5e0!3m2!1sen!2sin!4v1761747897293!5m2!1sen!2sin"
                        width="100%" height="300" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- Floating Call Button -->
    <div class="fixed bottom-5 right-5 z-50">
      <a href="tel:+919876543210" class="bg-green-500 text-white px-4 py-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300 focus:outline-none focus:ring-4 focus:ring-green-300">
        Call us
      </a>
    </div>
  </main>

  <!-- =============== FOOTER ================== -->
  <footer class="bg-gray-800 text-white py-8 rounded-t-lg">
    <div class="container mx-auto px-4 text-center">
      <p>&copy; 2024 Arya Mobile Repairing Services. All Rights Reserved.</p>
      <div class="flex justify-center space-x-4 mt-4">
        <a href="#" class="text-gray-400 hover:text-white transition-colors">Privacy Policy</a>
        <a href="#" class="text-gray-400 hover:text-white transition-colors">Terms of Service</a>
      </div>
    </div>
  </footer>

  <!-- =============== SUCCESS MODAL ================== -->
  <div id="success-modal" class="ams-modal" aria-hidden="true" role="dialog" aria-label="Success dialog">
    <div class="ams-modal__panel">
      <div class="text-center">
        <svg class="mx-auto h-16 w-16 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
        </svg>
        <h3 class="mt-4 text-2xl leading-6 font-medium text-gray-900">Success!</h3>
        <p class="mt-2 text-base text-gray-600">Your repair request has been submitted. We'll contact you shortly.</p>
        <button id="success-ok" class="mt-5 bg-indigo-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-indigo-700 transition-colors">OK</button>
      </div>
    </div>
  </div>
<div id="loader" class="loader-overlay">
  <div class="loader-spinner"></div>
</div>
  <!-- =============== SCRIPTS ================== -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true, offset: 120 });
  </script>

  <script>
    // ================== STATE ==================
    let selectedDevice = '';
    let selectedModel  = '';
    let selectedServices = []; // array of strings

    // Your exact deviceData
    const deviceData = {
      'Apple iPhone': [
        'iPhone 15 Pro Max','iPhone 15 Pro','iPhone 15',
        'iPhone 14 Pro Max','iPhone 14 Pro','iPhone 14',
        'iPhone 13 Pro Max','iPhone 13 Pro','iPhone 13',
        'iPhone 12 Pro Max','iPhone 12','iPhone 11',
        'iPhone SE (2022)','iPhone XR','other'
      ],
      'iPad': [
        'iPad Pro (M4)','iPad Pro (M2)','iPad Air (M2)',
        'iPad Air (5th Gen)','iPad (10th Gen)',
        'iPad (9th Gen)','iPad mini (6th Gen)','iPad mini (5th Gen)','other'
      ],
      'Apple Watch': [
        'Apple Watch Ultra 2','Apple Watch Ultra',
        'Apple Watch Series 9','Apple Watch Series 8',
        'Apple Watch SE (2nd Gen)','Apple Watch SE','other'
      ],
      'Samsung': [
        'Galaxy S24 Ultra','Galaxy S24+','Galaxy S24',
        'Galaxy S23 Ultra','Galaxy S23','Galaxy Z Fold5',
        'Galaxy Z Flip5','Galaxy Z Fold4','Galaxy Z Flip4',
        'Galaxy A55','Galaxy A35','Galaxy Tab S9 Ultra',
        'Galaxy Tab S9+','Galaxy Tab S9','Galaxy Tab A9+','other'
      ],
      'OnePlus': [
        'OnePlus 12','OnePlus 12R','OnePlus 11',
        'OnePlus 10 Pro','OnePlus 10T',
        'OnePlus Nord 3','OnePlus Nord CE 3',
        'OnePlus Nord CE 3 Lite','other'
      ],
      'Google Pixel': [
        'Pixel 8 Pro','Pixel 8','Pixel 7a',
        'Pixel 7 Pro','Pixel 7','Pixel 6a',
        'Pixel Fold','Pixel Tablet','other'
      ],
      'Oppo': [
        'Oppo Reno 11 Pro','Oppo Reno 10 Pro+',
        'Oppo Find X7 Ultra','Oppo Find X6 Pro',
        'Oppo Find N3 Flip','Oppo Find N2 Flip','other'
      ],
      'Vivo': [
        'Vivo X100 Pro','Vivo X100',
        'Vivo V30 Pro','Vivo V29 Pro','Vivo V29',
        'Vivo Y200e','Vivo Y100','Vivo T3x','other'
      ],
      'Realme': [
        'Realme 12 Pro+','Realme 12 Pro',
        'Realme GT 5 Pro','Realme GT 3',
        'Realme 11 Pro+','Realme 11x',
        'Realme Narzo 70 Pro','Realme C67','other'
      ],
      'Mi (Redmi)': [
        'Xiaomi 14 Ultra','Xiaomi 14',
        'Redmi Note 13 Pro+','Redmi Note 13 Pro',
        'Redmi Note 13 5G','Redmi Note 12 Pro+',
        'Redmi 13C','POCO F6 Pro','POCO X6 Pro','other'
      ],
      'iQOO': [
        'iQOO 12','iQOO 12 Pro','iQOO Neo 9 Pro',
        'iQOO Z9','iQOO Z7 Pro','iQOO 11','other'
      ],
      'Asus ROG': [
        'ROG Phone 8 Pro','ROG Phone 8',
        'ROG Phone 7 Ultimate','ROG Phone 7','other'
      ],
      'Nokia': [
        'Nokia G42 5G','Nokia X30 5G',
        'Nokia G60 5G','Nokia C32','Nokia C22','other'
      ],
      'Motorola': [
        'Moto Edge 50 Ultra','Moto Edge 50 Pro',
        'Moto Edge 40','Moto Edge 40 Neo',
        'Moto Razr 40 Ultra','Moto Razr 40',
        'Moto G73','Moto G54','other'
      ],
      'Honor': [
        'Honor 200 Pro','Honor 90','Honor 100',
        'Honor X9b','Honor Magic V2','Honor Magic 6 Pro','other'
      ],
      'Lenovo': [
        'Lenovo Tab P12 Pro','Lenovo Tab P11 (2nd Gen)',
        'Lenovo Tab M10','Lenovo Tab M11',
        'Lenovo Legion Y700 (2023)','other'
      ],
      'Nothing': ['Nothing Phone (2a)','Nothing Phone (2)','Nothing Phone (1)','other'],
      'Sony': ['Sony Xperia 1 VI','Sony Xperia 5 V','Sony Xperia 10 VI','Sony Xperia PRO-I','other']
    };

    // Service list for cards (multi-select)
    const SERVICE_ITEMS = [
      'Screen','Back Panel','Battery','Front & Rear Camera','Charging Port','Mic',
      'Ear Speaker','Aux Jack','Volume Button','Home Button','Power Button','Diagnoses',
      'Water Damaged','Body'
    ];

    // ================== ELEMENTS ==================
    const mobileMenuButton     = document.getElementById('mobile-menu-button');
    const mobileMenu           = document.getElementById('mobile-menu');

    const deviceSelectionSection = document.getElementById('device-selection-section');
    const modelSelectionSection  = document.getElementById('model-selection-section');
    const servicesSection        = document.getElementById('services-section');
    const repairFormSection      = document.getElementById('repair-form-section');

    const modelSelectionHeading  = document.getElementById('model-selection-heading');
    const modelGrid              = document.getElementById('model-grid');

    const backButtonModel        = document.getElementById('back-button-model');
    const backButtonServices     = document.getElementById('back-button-services');
    const backButtonForm         = document.getElementById('back-button-form');

    const goToServicesBtn        = document.getElementById('go-to-services');
    const goToFormBtn            = document.getElementById('go-to-form');

    const serviceGrid            = document.getElementById('service-grid');
    const selectedBadgesWrap     = document.getElementById('selected-services-badges');

    const companyField           = document.getElementById('mobile-company');
    const modelField             = document.getElementById('mobile-model');
    const serviceField           = document.getElementById('service-name');
    const servicesJsonField      = document.getElementById('services-json');

    const deviceNameInput        = document.getElementById('device-name-input');
    const modelNameInput         = document.getElementById('model-name-input');
    const serviceNameInput       = document.getElementById('service-name-input');

    const repairForm             = document.getElementById('repair-form');

    const successModal           = document.getElementById('success-modal');
    const successOkBtn           = document.getElementById('success-ok');

    // ================== NAV + ACCORDION ==================
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });

    document.querySelectorAll('.ams-accordion__trigger').forEach(trigger => {
      trigger.addEventListener('click', () => {
        const content = trigger.nextElementSibling;
        const icon    = trigger.querySelector('.ams-accordion__icon');

        const isClosed = content.classList.contains('hidden');
        // Close all
        document.querySelectorAll('.ams-accordion__content').forEach(c => {
          c.classList.add('hidden','opacity-0');
          const ic = c.previousElementSibling.querySelector('.ams-accordion__icon');
          ic && ic.classList.remove('ams-accordion__icon--open');
        });
        // Open this
        if (isClosed) {
          content.classList.remove('hidden');
          setTimeout(()=> content.classList.remove('opacity-0'), 10);
          icon.classList.add('ams-accordion__icon--open');
        }
      });
    });

    // ================== DEVICE CARD CLICKS ==================
    document.querySelectorAll('.device-card').forEach(card => {
      card.addEventListener('click', () => {
        selectedDevice = card.dataset.device;

        // Prepare heading + models
        modelSelectionHeading.textContent = `Select Your ${selectedDevice} Model`;
        buildModels(selectedDevice);

        // Save company immediately
        deviceNameInput.value = selectedDevice;
        companyField.value = selectedDevice;

        // UI swap
        deviceSelectionSection.classList.add('hidden');
        modelSelectionSection.classList.remove('hidden');

        goToServicesBtn.disabled = true; // until model picked
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });

    function buildModels(deviceName) {
      modelGrid.innerHTML = '';
      const models = deviceData[deviceName] || [];
      if (!models.length) {
        modelGrid.innerHTML = '<p class="text-center text-gray-600 col-span-full">No models found for this device.</p>';
        return;
      }

      models.forEach(model => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = [
          'w-full text-sm sm:text-base font-semibold text-indigo-700',
          'border-2 border-indigo-500 bg-white rounded-xl',
          'px-4 py-3 sm:px-6 sm:py-4 shadow hover:bg-indigo-600 hover:text-white',
          'transition-all focus:outline-none focus:ring-4 focus:ring-indigo-300'
        ].join(' ');
        btn.textContent = model;
        btn.addEventListener('click', () => {
          // set selected model
          selectedModel = model;
          modelNameInput.value = selectedModel;
          modelField.value = selectedModel;
          // enable next
          goToServicesBtn.disabled = false;
          // small visual cue
          Array.from(modelGrid.children).forEach(c => c.classList.remove('bg-indigo-600','text-white'));
          btn.classList.add('bg-indigo-600','text-white');
        });
        modelGrid.appendChild(btn);
      });
    }

    // Move to services
    goToServicesBtn.addEventListener('click', () => {
      if (!selectedModel) return;
      buildServiceCards();
      modelSelectionSection.classList.add('hidden');
      servicesSection.classList.remove('hidden');
      goToFormBtn.disabled = selectedServices.length === 0;
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ================== SERVICES (TOGGLE CARDS) ==================
    function buildServiceCards() {
      serviceGrid.innerHTML = '';
      selectedBadgesWrap.innerHTML = '';
      selectedServices = []; // reset each time you enter

      SERVICE_ITEMS.forEach(name => {
        const card = document.createElement('button');
        card.type = 'button';
        card.setAttribute('data-service', name);
        card.className = [
          'group p-4 rounded-xl border shadow-sm bg-white',
          'flex flex-col items-center justify-center text-center',
          'cursor-pointer transition',
          'hover:shadow-md'
        ].join(' ');

        // icon (generic)
        const iconWrap = document.createElement('div');
        iconWrap.className = 'w-10 h-10 mb-2 flex items-center justify-center text-indigo-600';
        iconWrap.innerHTML = `
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7">
            <path d="M5 3h14a2 2 0 012 2v12a4 4 0 11-8 0H9a4 4 0 11-8 0V5a2 2 0 012-2z"/>
          </svg>
        `;

        const label = document.createElement('p');
        label.className = 'text-sm sm:text-base font-medium text-gray-800';
        label.textContent = name;

        card.appendChild(iconWrap);
        card.appendChild(label);

        card.addEventListener('click', () => toggleService(card, name));
        serviceGrid.appendChild(card);
      });
      refreshSelectionsUI();
    }

    function toggleService(cardEl, serviceName) {
      const i = selectedServices.indexOf(serviceName);
      if (i >= 0) {
        selectedServices.splice(i, 1); // remove
      } else {
        selectedServices.push(serviceName); // add
      }
      // Visual ON/OFF (premium feel)
      cardEl.classList.toggle('border-indigo-600');
      cardEl.classList.toggle('bg-indigo-50');
      cardEl.classList.toggle('shadow-md');

      refreshSelectionsUI();
      goToFormBtn.disabled = selectedServices.length === 0;
    }

    function refreshSelectionsUI() {
      // badges
      selectedBadgesWrap.innerHTML = '';
      selectedServices.forEach(s => {
        const tag = document.createElement('span');
        tag.className = 'inline-flex items-center gap-2 text-sm bg-indigo-600 text-white px-3 py-1.5 rounded-full';
        tag.innerHTML = `${s}
          <button type="button" aria-label="remove ${s}" class="ml-1 text-white/90 hover:text-white" data-remove="${s}">
            &times;
          </button>`;
        selectedBadgesWrap.appendChild(tag);
      });

      // allow removing from badge as well
      selectedBadgesWrap.querySelectorAll('button[data-remove]').forEach(btn => {
        btn.addEventListener('click', () => {
          const s = btn.getAttribute('data-remove');
          // find the card and toggle it
          const card = serviceGrid.querySelector(`[data-service="${CSS.escape(s)}"]`);
          if (card) toggleService(card, s);
        });
      });
    }

    // Move to form
    goToFormBtn.addEventListener('click', () => {
      if (!selectedServices.length) return;

      // Fill read-only fields + hidden JSON
      companyField.value      = selectedDevice;
      modelField.value        = selectedModel;
      serviceField.value      = selectedServices.join(', ');
      servicesJsonField.value = JSON.stringify(selectedServices);

      serviceNameInput.value  = selectedServices.join(', ');

      servicesSection.classList.add('hidden');
      repairFormSection.classList.remove('hidden');
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // ================== BACK BUTTONS ==================
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

    // ================== FORM SUBMIT (CI4) ==================
    repairForm.addEventListener('submit', async (e) => {
  e.preventDefault();

  document.getElementById("loader").style.display = "flex"; // show loader

  const payload = {
    company: companyField.value || '',
    model: modelField.value || '',
    services_text: serviceField.value || '',
    services: selectedServices.slice(), // array of selected services
    services_json: servicesJsonField.value || JSON.stringify(selectedServices),
    full_name: document.getElementById('full-name').value || '',
    mobile_number: document.getElementById('mobile-number').value || '',
    email: document.getElementById('email-address').value || '',
    issue: document.getElementById('issue-description').value || ''
  };

  try {
    const res = await fetch("<?= base_url('contact_form') ?>", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(payload),
    });

    const result = await res.json();

    document.getElementById("loader").style.display = "none"; // hide loader

    if (result.status) {
      openSuccess();
      repairForm.reset();
    } else {
      alert(result.message || "Something went wrong.");
    }

  } catch (err) {
    document.getElementById("loader").style.display = "none"; // hide loader
    alert("❌ Something went wrong. Please try again.");
  }
});


    // ================== MODAL HELPERS ==================
    function openSuccess() {
      successModal.classList.add('ams-modal--show');
      successModal.setAttribute('aria-hidden','false');
    }
    function closeSuccess() {
      successModal.classList.remove('ams-modal--show');
      successModal.setAttribute('aria-hidden','true');
      // Reset flow to home
      repairFormSection.classList.add('hidden');
      servicesSection.classList.add('hidden');
      modelSelectionSection.classList.add('hidden');
      deviceSelectionSection.classList.remove('hidden');
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    successOkBtn.addEventListener('click', closeSuccess);
    successModal.addEventListener('click', (e) => {
      if (e.target === successModal) closeSuccess();
    });

  </script>

  <!-- =============== CONTACT BOX LITTLE CSS (kept from your code) ================== -->
  <style>
    .contactusbox { width: 85%; background: white; margin: 0 auto; padding: 20px; box-shadow: 0 0 6px gray; }
    .contactusbox iframe { height: 300px; padding: 5px; box-shadow: 0 0 5px #d0d0d0; }
  </style>
</body>
</html>
