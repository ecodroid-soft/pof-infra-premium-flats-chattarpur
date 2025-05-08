<?php require_once 'header.php'; ?>

<!-- Booking Page -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4 max-w-lg">
        <h1 class="text-4xl font-bold text-center mb-12">Book a Site Visit</h1>
        <form action="booking_process.php" method="POST" class="bg-white p-8 rounded-lg shadow-lg">
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
                <label for="visit_date" class="block text-gray-700 font-semibold mb-2">Preferred Visit Date</label>
                <input type="date" id="visit_date" name="visit_date" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
            </div>
            <div class="mb-6">
                <label for="visit_time" class="block text-gray-700 font-semibold mb-2">Preferred Time Slot</label>
                <select id="visit_time" name="visit_time" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
                    <option value="">Select a time slot</option>
                    <option value="10:00 AM - 12:00 PM">10:00 AM - 12:00 PM</option>
                    <option value="12:00 PM - 02:00 PM">12:00 PM - 02:00 PM</option>
                    <option value="02:00 PM - 04:00 PM">02:00 PM - 04:00 PM</option>
                    <option value="04:00 PM - 06:00 PM">04:00 PM - 06:00 PM</option>
                </select>
            </div>
            <button type="submit" class="bg-red-600 text-white px-6 py-3 rounded hover:bg-red-700 transition duration-300 w-full font-semibold">Book Visit</button>
        </form>
    </div>
</section>

<?php require_once 'footer.php'; ?>
