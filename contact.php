<?php require_once 'header.php'; ?>

<!-- Contact Page -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-lg">
        <h1 class="text-4xl font-bold text-center mb-12">Contact Us</h1>
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
