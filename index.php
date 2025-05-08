<?php require_once 'header.php'; ?>

<!-- Loading Indicator -->
<div id="loader" class="fixed inset-0 z-50 flex items-center justify-center bg-white transition-opacity duration-500">
    <div class="relative">
        <div class="w-16 h-16 border-4 border-red-600 border-t-transparent rounded-full animate-spin"></div>
        <div class="mt-4 text-red-600 font-semibold">Loading...</div>
    </div>
</div>

<!-- Hero Section with Slider -->
<div class="swiper hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="relative h-full">
                <img src="https://static.wixstatic.com/media/2abaa6_3acb455f713d4df384ffccbe18980824~mv2.webp" 
                     alt="New Home Banner" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <!-- Removed text overlay from hero slider -->
                <!-- Text overlay removed as per request -->
            </div>
        </div>
        <div class="swiper-slide">
            <div class="relative h-full">
                <img src="https://static.wixstatic.com/media/2abaa6_dd2b92d0494448a789be1ac721b3cb88~mv2.webp" 
                     alt="Home Banner" 
                     class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-white z-10 w-full px-4">
                    <h2 class="text-6xl md:text-7xl font-bold mb-6 text-shadow">GOLDEN BERYL</h2>
                    <p class="text-4xl md:text-5xl mb-4 text-shadow">Luxury Living in</p>
                    <p class="text-4xl md:text-5xl mb-8 text-shadow">South Delhi</p>
                    <p class="text-2xl mb-12 text-shadow">EXPERIENCE ELEGANCE IN EVERY DETAIL</p>
                    <a href="#" class="inline-block bg-red-600 text-white px-10 py-4 rounded-md hover:bg-red-700 transition-all duration-300 hover:scale-105 hover:shadow-lg text-lg font-semibold">
                        Book Visit Today
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<!-- Process Section -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Process with Progress</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-red-600 text-xl font-semibold mb-4">Step 01</div>
                <h3 class="text-xl font-bold mb-4">Inquiry & Contact</h3>
                <p class="text-gray-600">How customers can contact the team (phone, email, WhatsApp, chatbot)</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-red-600 text-xl font-semibold mb-4">Step 02</div>
                <h3 class="text-xl font-bold mb-4">Site Visit Scheduling</h3>
                <p class="text-gray-600">Booking process, available slots, and locations</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-red-600 text-xl font-semibold mb-4">Step 03</div>
                <h3 class="text-xl font-bold mb-4">Property Tour</h3>
                <p class="text-gray-600">What happens during a visit, key highlights of projects</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="text-red-600 text-xl font-semibold mb-4">Step 04</div>
                <h3 class="text-xl font-bold mb-4">Meeting & Closure</h3>
                <p class="text-gray-600">Discussion with the final sales team for documentation and deals</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest Projects -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-4xl font-bold text-center mb-4">LATEST PROJECTS</h2>
        <p class="text-center text-gray-700 mb-12 max-w-3xl mx-auto">
            Discover Premium Flats in Chattarpur, South Delhi -
            Explore a wide range of modern 2BHK, 3BHK, and 4BHK flats tailored to suit your lifestyle and budget. Located near Chattarpur Metro Station, our projects combine convenience, affordability, and luxury. As a trusted property builder, we offer new designs to meet your expectations. Find your dream home in a prime location today!
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Project Card 1 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="https://static.wixstatic.com/media/2abaa6_38132b869fbb4c7cb9981d25e32f18fe~mv2.jpg" alt="Geminite Apartment" class="w-full h-[400px] object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Geminite Apartment</h3>
                    <a href="https://www.adinfra.co.in/projects/geminite-apartment" target="_blank" class="inline-block bg-gray-700 px-6 py-2 rounded-md hover:bg-gray-900 transition duration-300">KNOW MORE</a>
                </div>
            </div>
            <!-- Project Card 2 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="https://static.wixstatic.com/media/2abaa6_9d51a5c0516049eabf9197d943a3c05b~mv2.jpg" alt="Golden Beryl Apartment" class="w-full h-[400px] object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Golden Beryl Apartment</h3>
                    <a href="https://www.adinfra.co.in/projects/golden-beryl-apartment" target="_blank" class="inline-block bg-gray-700 px-6 py-2 rounded-md hover:bg-gray-900 transition duration-300">KNOW MORE</a>
                </div>
            </div>
            <!-- Project Card 3 -->
            <div class="group relative overflow-hidden rounded-lg shadow-lg bg-white">
                <img src="https://static.wixstatic.com/media/2abaa6_0085b113001d4f4a9bb6efb85e7522a9~mv2.webp" alt="Blue Beryl Apartment" class="w-full h-[400px] object-cover transition duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <h3 class="text-2xl font-bold mb-2">Blue Beryl Apartment</h3>
                    <a href="https://www.adinfra.co.in/projects/blue-beryl-apartment" target="_blank" class="inline-block bg-gray-700 px-6 py-2 rounded-md hover:bg-gray-900 transition duration-300">KNOW MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Flat Types -->
<section class="bg-gray-50 py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">1 BHK, 2 BHK & 3 BHK Flats for Inquiry</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-8">
            <!-- 1BHK Flat Card -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-6">1BHK Semi-Furnished Flats</h3>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>1 Bedroom</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>1 Bathroom</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>1 Balcony</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>Modular Kitchen</span>
                    </li>
                </ul>
                <a href="#" class="block text-center bg-red-600 text-white py-3 rounded-md hover:bg-red-700 transition duration-300">
                    Inquiry for 1 BHK Flats
                </a>
            </div>
            <!-- 2BHK Flat Card -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-6">2BHK Semi-Furnished Flats</h3>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>2 Bedrooms</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>2 Bathrooms</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>1 Balcony</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>Modular Kitchen with Chimney</span>
                    </li>
                </ul>
                <a href="#" class="block text-center bg-red-600 text-white py-3 rounded-md hover:bg-red-700 transition duration-300">
                    Inquiry for 2 BHK Flats
                </a>
            </div>
            <!-- 3BHK Flat Card -->
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold mb-6">3BHK Semi-Furnished Flats</h3>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>3 Bedrooms</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>3 Bathrooms</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>1 Balcony</span>
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-check text-red-600 mr-3"></i>
                        <span>Modular Kitchen with Chimney</span>
                    </li>
                </ul>
                <a href="#" class="block text-center bg-red-600 text-white py-3 rounded-md hover:bg-red-700 transition duration-300">
                    Inquiry for 3 BHK Flats
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Testimonials</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&h=100" alt="Customer 1" class="w-24 h-24 rounded-full mx-auto mb-4">
                <p class="text-gray-700 italic mb-4">"My experience with AD Infra was exceptional. The team was professional and made the buying process painless."</p>
                <h3 class="text-lg font-semibold text-center">Aachla Devi</h3>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="https://images.pexels.com/photos/2379005/pexels-photo-2379005.jpeg?auto=compress&cs=tinysrgb&h=100" alt="Customer 2" class="w-24 h-24 rounded-full mx-auto mb-4">
                <p class="text-gray-700 italic mb-4">"The property rates are reasonable and the location is perfect. Highly recommend AD Infra."</p>
                <h3 class="text-lg font-semibold text-center">Gaurav Mehrotra</h3>
            </div>
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <img src="https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&h=100" alt="Customer 3" class="w-24 h-24 rounded-full mx-auto mb-4">
                <p class="text-gray-700 italic mb-4">"AD Infra's dedication and quality exceeded my expectations. I am delighted with my new flat!"</p>
                <h3 class="text-lg font-semibold text-center">Mr. Raj Kumar Gupta</h3>
            </div>
        </div>
    </div>
</section>

<!-- Explore Sample Flats Section -->
<section class="py-20 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-16">Explore Sample Flats in Chattarpur, South Delhi</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="rounded-lg shadow-md overflow-hidden">
                <img src="https://static.wixstatic.com/media/2abaa6_c72ee14be75645828fa415b6da8c6fa1~mv2.webp" alt="Sample Flat 1" class="w-full h-[400px] object-cover">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden">
                <img src="https://static.wixstatic.com/media/2abaa6_833622a0bc194b78a6b6e4419a777735~mv2.webp" alt="Sample Flat 2" class="w-full h-[400px] object-cover">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden">
                <img src="https://static.wixstatic.com/media/2abaa6_a783e1331a514f2898dcc4fd40260de2~mv2.webp" alt="Sample Flat 3" class="w-full h-[400px] object-cover">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden">
                <img src="https://static.wixstatic.com/media/2abaa6_18f1096e1c144217a033bdbe008150d5~mv2.webp" alt="Sample Flat 4" class="w-full h-[400px] object-cover">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden">
                <img src="https://static.wixstatic.com/media/2abaa6_dfe9b809c740425caa0054dc28527273~mv2.webp" alt="Sample Flat 5" class="w-full h-[400px] object-cover">
            </div>
            <div class="rounded-lg shadow-md overflow-hidden">
                <img src="https://static.wixstatic.com/media/2abaa6_ac1f04045aa746bb97be8622c84f3226~mv2.webp" alt="Sample Flat 6" class="w-full h-[400px] object-cover">
            </div>
        </div>
    </div>
</section>

<!-- Property Types Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        <h2 class="text-4xl font-bold text-center mb-16">Property Types</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-10 rounded-lg text-center shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <i class="fas fa-building text-red-600 text-6xl mb-6"></i>
                <h3 class="text-3xl font-semibold mb-4">Lowrise Building</h3>
                <p class="text-gray-700 text-lg">Discover our 2BHK flats, offering the perfect blend of luxury and convenience in our elegantly designed low-rise buildings, strategically located in prime areas.</p>
            </div>
            <div class="bg-gray-100 p-10 rounded-lg text-center shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <i class="fas fa-city text-red-600 text-6xl mb-6"></i>
                <h3 class="text-3xl font-semibold mb-4">L-Corner Property</h3>
                <p class="text-gray-700 text-lg">Explore our 3BHK flats in Chattarpur, South Delhi, at L Corner Property – your gateway to distinctive and strategically positioned real estate.</p>
            </div>
            <div class="bg-gray-100 p-10 rounded-lg text-center shadow-lg hover:shadow-2xl transition-shadow duration-300">
                <i class="fas fa-map-marker-alt text-red-600 text-6xl mb-6"></i>
                <h3 class="text-3xl font-semibold mb-4">Prime Location Property</h3>
                <p class="text-gray-700 text-lg">Choose from 2BHK, 3BHK, or 4BHK flats in prime locations, all situated in the heart of the city.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section removed as per request -->

<!-- Contact Form Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-lg">
        <h2 class="text-4xl font-bold text-center mb-12">Contact Us</h2>
        <form action="contact_process.php" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>
            <div class="mb-6">
                <label for="phone" class="block text-gray-700 font-semibold mb-2">Phone</label>
                <input type="tel" id="phone" name="phone" class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea id="message" name="message" rows="5" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600"></textarea>
            </div>
            <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded hover:bg-red-700 transition duration-300 w-full font-semibold">Send Message</button>
        </form>
    </div>
</section>

<?php require_once 'footer.php'; ?>
