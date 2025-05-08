<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POF INFRAA - Premium Flats in Chattarpur</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    
    <!-- Meta Tags -->
    <meta name="description" content="Discover premium 2BHK, 3BHK, and 4BHK flats in Chattarpur, South Delhi. Luxury living with modern amenities near Chattarpur Metro Station.">
    <meta name="keywords" content="POF INFRAA, Chattarpur flats, South Delhi property, luxury apartments, 2BHK, 3BHK, 4BHK">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/zoom.css">

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#dc2626',
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="font-sans">
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-white shadow-md">
        <nav class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="index.php" class="flex items-center">
                    <span class="text-2xl font-bold text-red-600">POF INFRAA</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-800 hover:text-primary transition-colors">Home</a>
                    <a href="#projects" class="text-gray-800 hover:text-primary transition-colors">Projects</a>
                    <a href="#latest" class="text-gray-800 hover:text-primary transition-colors">Latest Update</a>
                    <a href="#blog" class="text-gray-800 hover:text-primary transition-colors">Blog</a>
                    <a href="#contact" class="text-gray-800 hover:text-primary transition-colors">Contact</a>
                    <a href="#login" class="bg-primary text-white px-6 py-2 rounded hover:bg-red-700 transition-colors">
                        Log in / Sign Up
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-gray-500 hover:text-gray-700 focus:outline-none" id="mobile-menu-button">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden hidden transition-all duration-300 ease-in-out" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="index.php" class="block px-3 py-2 text-gray-800 hover:bg-gray-100 rounded">Home</a>
                    <a href="#projects" class="block px-3 py-2 text-gray-800 hover:bg-gray-100 rounded">Projects</a>
                    <a href="#latest" class="block px-3 py-2 text-gray-800 hover:bg-gray-100 rounded">Latest Update</a>
                    <a href="#blog" class="block px-3 py-2 text-gray-800 hover:bg-gray-100 rounded">Blog</a>
                    <a href="#contact" class="block px-3 py-2 text-gray-800 hover:bg-gray-100 rounded">Contact</a>
                    <a href="#login" class="block px-3 py-2 bg-primary text-white rounded">Log in / Sign Up</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Header Spacer -->
    <div class="h-20"></div>
