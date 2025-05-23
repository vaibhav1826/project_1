<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtuSwift - Professional IT Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Favicon for browser tab -->
    <link rel="icon" type="image/png" href="Images/favicon.png" />
    <style>
    :root {
        --primary-color: #0076CE;
        --accent-color: #FF6600;
    }

    .hover\:scale-105:hover {
        transform: scale(1.05);
    }

    .dropdown-menu {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
        transform: translateY(10px);
    }

    .nav-item:hover>.dropdown-menu {
        display: block;
        opacity: 1;
        transform: translateY(0);
    }

    .expanded-menu {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
        transform: translateX(10px);
    }

    .dropdown-item:hover .expanded-menu {
        display: block;
        opacity: 1;
        transform: translateX(0);
    }

    .nav-link {
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 16px;
        right: 16px;
        height: 3px;
        background-color: var(--accent-color);
        transform: scaleX(0);
        transform-origin: bottom right;
        transition: transform 0.3s ease;
    }

    .nav-link:hover::after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    .nav-list {
        display: flex;
        justify-content: center;
        flex: 1;
        gap: 2.5rem;
    }

    .nav-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 100%;
    }

    .logo-container {
        flex: 0 0 auto;
    }

    .actions-container {
        flex: 0 0 auto;
    }

    .dropdown-menu {
        min-width: 200px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 0.5rem 0;
    }

    .dropdown-item a {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.75rem 1rem;
        color: #333;
        font-size: 0.875rem;
        font-weight: 500;
        transition: background-color 0.2s ease, color 0.2s ease;
    }

    .dropdown-item a:hover {
        background-color: #f5f5f5;
        color: var(--primary-color);
    }

    .expanded-menu {
        min-width: 220px;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 1rem;
    }

    .expanded-menu h3 {
        font-size: 1rem;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 0.75rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #e5e5e5;
    }

    .expanded-menu ul li a {
        display: block;
        padding: 0.5rem 0.75rem;
        font-size: 0.85rem;
        color: #333;
        transition: color 0.2s ease, padding-left 0.2s ease;
    }

    .expanded-menu ul li a:hover {
        color: var(--primary-color);
        padding-left: 1rem;
    }

    /* Footer styles */
    .footer {
        background-color: #121927;
        color: white;
        padding: 3rem 0 1rem;
    }

    .footer-links a {
        color: #a0aec0;
        transition: color 0.2s ease;
    }

    .footer-links a:hover {
        color: white;
    }

    .social-icon {
        color: #a0aec0;
        transition: color 0.2s ease;
    }

    .social-icon:hover {
        color: white;
    }

    /* Chat widget styles */
    .chat-widget-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    .chat-widget-button {
        width: 60px;
        height: 60px;
        border-radius: 30px;
        background: linear-gradient(135deg, #8840b5 0%, #f85a5a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .chat-widget-button:hover {
        transform: scale(1.05);
    }

    .chat-widget-popup {
        position: absolute;
        bottom: 80px;
        right: 0;
        width: 320px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        display: none;
    }

    .chat-widget-popup.active {
        display: block;
        animation: slidein 0.3s forwards;
    }

    .chat-widget-header {
        background: linear-gradient(135deg, #8840b5 0%, #f85a5a 100%);
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .chat-widget-title {
        color: white;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .chat-widget-close {
        color: white;
        cursor: pointer;
        font-size: 1.5rem;
    }

    .chat-widget-messages {
        height: 300px;
        padding: 15px;
        overflow-y: auto;
        background-color: #f9f9f9;
    }

    .chat-message {
        margin-bottom: 15px;
        max-width: 80%;
    }

    .chat-message-bot {
        background-color: #f0f0f0;
        border-radius: 15px 15px 15px 2px;
        padding: 10px 15px;
        float: left;
        clear: both;
    }

    .chat-message-user {
        background-color: #3a3cb1;
        color: white;
        border-radius: 15px 15px 2px 15px;
        padding: 10px 15px;
        float: right;
        clear: both;
    }

    .chat-widget-input {
        display: flex;
        padding: 10px;
        border-top: 1px solid #eaeaea;
    }

    .chat-input-field {
        flex: 1;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        padding: 8px 15px;
        outline: none;
    }

    .chat-send-button {
        background-color: #ff6b35;
        color: white;
        border: none;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        margin-left: 10px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @keyframes slidein {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .nav-list {
            display: none;
            flex-direction: column;
            gap: 0.5rem;
            position: absolute;
            top: 4rem;
            left: 0;
            right: 0;
            background-color: white;
            padding: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .nav-list.active {
            display: flex;
        }

        .dropdown-menu {
            display: none;
            position: static;
            width: 100%;
            box-shadow: none;
            border: none;
            padding: 0.5rem 1rem;
            background-color: #f9f9f9;
        }

        .nav-item.active .dropdown-menu {
            display: block;
        }

        .expanded-menu {
            display: none;
            position: static;
            width: 100%;
            box-shadow: none;
            padding: 0.5rem 1rem;
            background-color: #f1f1f1;
        }

        .dropdown-item.active .expanded-menu {
            display: block;
        }

        .nav-link::after {
            display: none;
        }

        .nav-container {
            flex-wrap: wrap;
        }

        .actions-container {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .chat-widget-popup {
            width: 300px;
            right: 0;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Interactive card hover effects */
    .location-card {
        position: relative;
        transition: border 0.3s ease;
    }

    .location-card:hover {
        border: 3px solid;
        border-image: linear-gradient(to right, #FF6200, #004C84) 1;
    }

    /* Global Presence Section Styles */
    .global-presence-section {
        background: linear-gradient(rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.95)), url('/assets/images/world-map-dots.svg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        position: relative;
        overflow: hidden;
    }

    .global-presence-title {
        background: linear-gradient(135deg, #0076CE, #FF6600);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-fill-color: transparent;
    }

    .location-card {
        position: relative;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(0, 118, 206, 0.1);
        overflow: hidden;
    }

    .location-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.05), rgba(255, 102, 0, 0.05));
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .location-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-color: transparent;
    }

    .location-card:hover::before {
        opacity: 1;
    }

    .location-icon {
        position: relative;
        transition: transform 0.4s ease;
    }

    .location-card:hover .location-icon {
        transform: scale(1.1);
    }

    .location-stats {
        display: flex;
        justify-content: space-around;
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 1.5rem;
        font-weight: bold;
        color: #0076CE;
        margin-bottom: 0.25rem;
    }

    .stat-label {
        font-size: 0.875rem;
        color: #64748b;
    }

    .global-presence-bg-shape {
        position: absolute;
        width: 500px;
        height: 500px;
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.1), rgba(255, 102, 0, 0.1));
        border-radius: 50%;
        top: -250px;
        right: -250px;
        z-index: 0;
    }

    @keyframes float {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .floating-animation {
        animation: float 3s ease-in-out infinite;
    }
    </style>
</head>

<body class="bg-gray-100">
    <?php
    require("partials/nav.php");
    ?>

    <!-- Main Content Area Placeholder -->
    <div class="container mx-auto py-8">
        <!-- Contact Hero Section -->
        <section class="bg-gradient-to-r from-[#0076CE] to-[#004C84] py-16 text-white">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Get in Touch</h1>
                <p class="max-w-2xl mx-auto text-lg">Need more information? Or just want to learn how VirtuSwift can
                    help you fulfill your potential? Take a moment to complete and submit the following form. We can't
                    wait to hear from you!</p>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="py-16">
            <div class="container mx-auto px-4">
                <div class="max-w-5xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <!-- Form Column -->
                        <div class="md:w-2/3 p-8">
                            <h2 class="text-2xl font-bold mb-6 text-gray-800">Send us a message</h2>
                            <form>
                                <div class="mb-6">
                                    <label for="contact-type"
                                        class="block text-sm font-medium text-gray-700 mb-2">Contact Me About*</label>
                                    <select id="contact-type"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none">
                                        <option selected disabled>Select a Contact Type</option>
                                        <option>General Inquiry</option>
                                        <option>IT Support</option>
                                        <option>Cloud Services</option>
                                        <option>Cybersecurity</option>
                                        <option>Software Development</option>
                                    </select>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                                    <div>
                                        <label for="first-name"
                                            class="block text-sm font-medium text-gray-700 mb-2">First Name*</label>
                                        <input type="text" id="first-name"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none"
                                            required>
                                    </div>
                                    <div>
                                        <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2">Last
                                            Name*</label>
                                        <input type="text" id="last-name"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none"
                                            required>
                                    </div>
                                </div>

                                <div class="mb-6">
                                    <label for="business-email"
                                        class="block text-sm font-medium text-gray-700 mb-2">Business Email*</label>
                                    <input type="email" id="business-email"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none"
                                        required>
                                </div>

                                <div class="mb-6">
                                    <label for="phone"
                                        class="block adiv text-sm font-medium text-gray-700 mb-2">Phone*</label>
                                    <input type="tel" id="phone"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none"
                                        required>
                                </div>

                                <div class="mb-6">
                                    <label for="job-title" class="block text-sm font-medium text-gray-700 mb-2">Job
                                        Title*</label>
                                    <input type="text" id="job-title"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none"
                                        required>
                                </div>

                                <div class="mb-6">
                                    <label for="company"
                                        class="block text-sm font-medium text-gray-700 mb-2">Company*</label>
                                    <input type="text" id="company"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none"
                                        required>
                                </div>

                                <div class="mb-6">
                                    <label for="industry"
                                        class="block text-sm font-medium text-gray-700 mb-2">Industry*</label>
                                    <select id="industry"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none">
                                        <option selected disabled>Select an Industry</option>
                                        <option>Technology</option>
                                        <option>Healthcare</option>
                                        <option>Financial Services</option>
                                        <option>Manufacturing</option>
                                        <option>Retail</option>
                                        <option>Education</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="mb-6">
                                    <label for="revenue" class="block text-sm font-medium text-gray-700 mb-2">Revenue
                                        ($)*</label>
                                    <select id="revenue"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none">
                                        <option selected disabled>Select a Revenue Range (USD)</option>
                                        <option>Less than $1M</option>
                                        <option>$1M - $10M</option>
                                        <option>$10M - $50M</option>
                                        <option>$50M - $100M</option>
                                        <option>$100M - $500M</option>
                                        <option>$500M - $1B</option>
                                        <option>More than $1B</option>
                                    </select>
                                </div>

                                <div class="mb-6">
                                    <label for="country"
                                        class="block text-sm font-medium text-gray-700 mb-2">Country*</label>
                                    <select id="country"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none">
                                        <option selected disabled>Select a Country</option>
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>United Kingdom</option>
                                        <option>Australia</option>
                                        <option>Germany</option>
                                        <option>France</option>
                                        <option>Japan</option>
                                        <option>India</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="mb-6">
                                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your
                                        Message*</label>
                                    <textarea id="message" rows="5"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-md form-input focus:outline-none resize-none"
                                        required></textarea>
                                </div>

                                <button type="submit"
                                    class="submit-button text-white px-8 py-3 rounded-md font-medium shadow-md hover:shadow-lg">Submit</button>
                            </form>
                        </div>

                        <!-- Info Column -->
                        <div class="md:w-1/3 bg-gray-50 p-8">
                            <h3 class="text-xl font-bold mb-6 text-gray-800">Contact Information</h3>

                            <div class="mb-8">
                                <h4 class="font-semibold text-[#0076CE] mb-2">Headquarters</h4>
                                <p class="text-gray-600">
                                    123 Tech Avenue<br>
                                    Suite 500<br>
                                    San Francisco, CA 94107<br>
                                    United States
                                </p>
                                <p class="mt-3 text-gray-600">
                                    <strong>Phone:</strong> +1 (555) 123-4567<br>
                                    <strong>Email:</strong> info@virtuswift.com
                                </p>
                            </div>

                            <div class="mb-8">
                                <h4 class="font-semibold text-[#0076CE] mb-2">Business Hours</h4>
                                <p class="text-gray-600">
                                    Monday - Friday: 8:00 AM - 6:00 PM PST<br>
                                    Saturday - Sunday: Closed
                                </p>
                            </div>

                            <div class="flex space-x-4">
                                <a href="#" class="text-[#0076CE] hover:text-[#FF6600]">
                                    <i class="fab fa-linkedin fa-lg"></i>
                                </a>
                                <a href="#" class="text-[#0076CE] hover:text-[#FF6600]">
                                    <i class="fab fa-twitter fa-lg"></i>
                                </a>
                                <a href="#" class="text-[#0076CE] hover:text-[#FF6600]">
                                    <i class="fab fa-facebook fa-lg"></i>
                                </a>
                                <a href="#" class="text-[#0076CE] hover:text-[#FF6600]">
                                    <i class="fab fa-instagram fa-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Global Presence Section -->
        <section class="py-16 global-presence-section relative">
            <div class="global-presence-bg-shape"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <h2 class="text-4xl font-bold mb-3 global-presence-title">VirtuSwift's Global Impact</h2>
                <p class="text-gray-600 mb-12 max-w-3xl mx-auto text-lg">
                    Empowering digital transformation across 6 continents, serving Fortune 500 companies with innovative
                    solutions.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="location-card bg-white p-8 rounded-xl shadow-sm">
                        <div class="location-icon mb-6 text-[#0076CE] floating-animation">
                            <i class="fas fa-globe-americas fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3">Americas</h3>
                        <p class="text-gray-600 mb-4">New York • San Francisco • Toronto • São Paulo</p>
                        <div class="location-stats">
                            <div class="stat-item">
                                <div class="stat-number">250+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">4</div>
                                <div class="stat-label">Offices</div>
                            </div>
                        </div>
                    </div>

                    <div class="location-card bg-white p-8 rounded-xl shadow-sm">
                        <div class="location-icon mb-6 text-[#0076CE] floating-animation">
                            <i class="fas fa-globe-europe fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3">Europe</h3>
                        <p class="text-gray-600 mb-4">London • Berlin • Paris • Amsterdam</p>
                        <div class="location-stats">
                            <div class="stat-item">
                                <div class="stat-number">180+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">4</div>
                                <div class="stat-label">Offices</div>
                            </div>
                        </div>
                    </div>

                    <div class="location-card bg-white p-8 rounded-xl shadow-sm">
                        <div class="location-icon mb-6 text-[#0076CE] floating-animation">
                            <i class="fas fa-globe-asia fa-3x"></i>
                        </div>
                        <h3 class="text-2xl font-semibold mb-3">Asia Pacific</h3>
                        <p class="text-gray-600 mb-4">Singapore • Tokyo • Sydney • Mumbai</p>
                        <div class="location-stats">
                            <div class="stat-item">
                                <div class="stat-number">200+</div>
                                <div class="stat-label">Clients</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">4</div>
                                <div class="stat-label">Offices</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <a href="#contact"
                        class="inline-flex items-center px-8 py-3 bg-gradient-to-r from-[#0076CE] to-[#FF6600] text-white font-medium rounded-lg hover:shadow-lg transform hover:-translate-y-1 transition-all duration-300">
                        Connect With Our Global Team
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            </div>
        </section>

    </div>

    <?php
    require("partials/footer.php");
    ?>

    <!-- JavaScript for Mobile Navigation -->
    <script>
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const navList = document.querySelector('.nav-list');

    if (mobileNavToggle) {
        mobileNavToggle.addEventListener('click', () => {
            navList.classList.toggle('active');
        });
    }

    document.querySelectorAll('.nav-item > a').forEach(item => {
        item.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const parent = item.parentElement;
                parent.classList.toggle('active');
                // Close other open menus
                document.querySelectorAll('.nav-item').forEach(other => {
                    if (other !== parent) other.classList.remove('active');
                });
            }
        });
    });

    document.querySelectorAll('.dropdown-item > a').forEach(item => {
        item.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const parent = item.parentElement;
                parent.classList.toggle('active');
                // Close other open submenus
                document.querySelectorAll('.dropdown-item').forEach(other => {
                    if (other !== parent) other.classList.remove('active');
                });
            }
        });
    });

    // Close mobile menu when resizing to desktop
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            navList.classList.remove('active');
            document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('active'));
            document.querySelectorAll('.dropdown-item').forEach(item => item.classList.remove('active'));
        }
    });

    // Chat Widget Functionality
    document.getElementById('chat-widget-button').addEventListener('click', function() {
        document.getElementById('chat-widget-popup').classList.toggle('active');
    });

    document.getElementById('chat-widget-close').addEventListener('click', function() {
        document.getElementById('chat-widget-popup').classList.remove('active');
    });

    // Send message when pressing Enter
    document.querySelector('.chat-input-field').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });

    document.querySelector('.chat-send-button').addEventListener('click', sendMessage);

    function sendMessage() {
        const inputField = document.querySelector('.chat-input-field');
        const message = inputField.value.trim();

        if (message) {
            // Add user message to chat
            const messagesContainer = document.querySelector('.chat-widget-messages');
            const messageElement = document.createElement('div');
            messageElement.className = 'chat-message';
            messageElement.innerHTML = `<div class="chat-message-user">${message}</div>`;
            messagesContainer.appendChild(messageElement);

            // Clear input field
            inputField.value = '';

            // Scroll to bottom of chat
            messagesContainer.scrollTop = messagesContainer.scrollHeight;

            // Here you would normally send the message to your backend
            // For demo purposes, we'll just add a simple response after a delay
            setTimeout(() => {
                const responseElement = document.createElement('div');
                responseElement.className = 'chat-message';
                responseElement.innerHTML =
                    `<div class="chat-message-bot">Thank you for your message. Our team will get back to you shortly.</div>`;
                messagesContainer.appendChild(responseElement);
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }, 1000);
        }
    }
    </script>
</body>

</html>