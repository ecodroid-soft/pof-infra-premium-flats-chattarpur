<?php require_once 'header.php'; ?>

<!-- Blog Listing Page -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center mb-16">Latest Blog Posts</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Post Card -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.pexels.com/photos/3184299/pexels-photo-3184299.jpeg?auto=compress&cs=tinysrgb&h=400" alt="Blog Post 1" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-2">Explore 2BHK, 3BHK & 4BHK Flats for Sale in Chhatarpur</h3>
                    <p class="text-gray-700 mb-4">Discover the best flats for sale in Chhatarpur with modern amenities and prime locations.</p>
                    <a href="#" class="text-red-600 hover:underline">Read More</a>
                </div>
            </div>
            <!-- Add more blog post cards similarly -->
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>
