<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtuSwift - Supply Chain IT Solutions</title>
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
    </style>
</head>

<body class="bg-gray-100">
    <?php
    require("partials/nav.php");
    ?>

    <!-- Supply Chain Solutions Section -->
    <section class="supply-chain-services-section bg-white">
        <!-- Slider Section -->
        <div class="relative w-full h-[400px] bg-gray-100 overflow-hidden">
            <div class="slider flex transition-transform duration-500 ease-in-out">
                <div class="slide min-w-full h-[400px] bg-cover bg-center"
                    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRJNGNbnbGXR0fWvf2sNb5YWVS5SyZia2D1w&s');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-start px-10">
                        <div class="text-white">
                            <h1 class="text-4xl font-bold mb-4">Optimize Your Supply Chain with VirtuSwift IT Solutions
                            </h1>
                            <p class="text-lg">Streamline logistics and enhance efficiency with advanced technology.</p>
                        </div>
                    </div>
                </div>
                <div class="slide min-w-full h-[400px] bg-cover bg-center"
                    style="background-image: url('https://media.licdn.com/dms/image/v2/C4D1BAQEz_gbnP6DzvA/company-background_10000/company-background_10000/0/1598034956204/supply_chain_solutions_cover?e=2147483647&v=beta&t=zIBqwU-0QWclDp14fwVoZHqANbXpGrqWddeP2No6_5Y');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-start px-10">
                        <div class="text-white">
                            <h1 class="text-4xl font-bold mb-4"></h1>
                            <p class="text-lg"></p>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full hover:bg-opacity-75"
                onclick="moveSlide(-1)">❮</button>
            <button
                class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-50 p-2 rounded-full hover:bg-opacity-75"
                onclick="moveSlide(1)">❯</button>
        </div>

        <!-- Tab Navigation -->
        <div class="bg-[#121927] text-white">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-start space-x-8 overflow-x-auto">
                    <button
                        class="tab-link px-4 py-2 text-sm font-medium hover:text-[#00AEEF] border-b-2 border-transparent hover:border-[#00AEEF] transition-colors"
                        onclick="openTab(event, 'Overview')">Overview</button>
                    <button
                        class="tab-link px-4 py-2 text-sm font-medium hover:text-[#00AEEF] border-b-2 border-transparent hover:border-[#00AEEF] transition-colors"
                        onclick="openTab(event, 'Capabilities')">Capabilities</button>
                    <button
                        class="tab-link px-4 py-2 text-sm font-medium hover:text-[#00AEEF] border-b-2 border-transparent hover:border-[#00AEEF] transition-colors"
                        onclick="openTab(event, 'Benefits')">Benefits</button>
                </div>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="container mx-auto px-4 py-8">
            <!-- Overview Tab -->
            <div id="Overview" class="tab-content">
                <div class="flex flex-col md:flex-row gap-8 mb-12">
                    <div class="md:w-1/2">
                        <h2 class="text-3xl font-bold mb-4">Revolutionizing Supply Chains with VirtuSwift IT Expertise
                        </h2>
                        <p class="text-gray-600 mb-6">
                            At VirtuSwift, we provide tailored IT solutions to optimize supply chain operations.
                            Our expertise in logistics, inventory management, and real-time analytics empowers
                            businesses to stay agile and competitive.
                        </p>
                        <a href="contact.php"
                            class="inline-block bg-[#00AEEF] text-white px-6 py-2 rounded-lg hover:bg-[#008BCF] transition-colors">Explore
                            Now</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcmln3ACerE_26HUCfLXTq-50S0_i0Ol1vMg&s"
                            alt="Supply Chain Technology" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Capabilities Tab -->
            <div id="Capabilities" class="tab-content hidden">
                <div class="mb-12">
                    <h3 class="text-xl font-semibold text-[#00AEEF] mb-2">CAPABILITIES</h3>
                    <h2 class="text-3xl font-bold mb-4">Transform Supply Chains with VirtuSwift</h2>
                    <div class="space-y-8">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="md:w-1/3">
                                <h4 class="text-lg font-semibold text-[#00AEEF]">LogiTrack Platform</h4>
                                <p class="text-gray-600">Real-time tracking of shipments and logistics operations for
                                    enhanced visibility.</p>
                            </div>
                            <div class="md:w-1/3">
                                <h4 class="text-lg font-semibold text-[#00AEEF]">InventorySync Dashboard</h4>
                                <p class="text-gray-600">Optimize stock levels with predictive analytics and demand
                                    forecasting.</p>
                            </div>
                            <div class="md:w-1/3">
                                <h4 class="text-lg font-semibold text-[#00AEEF]">Supply Chain Automation</h4>
                                <p class="text-gray-600">Streamline processes with IoT integration and automated
                                    workflows.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits Tab -->
            <div id="Benefits" class="tab-content hidden">
                <h2 class="text-3xl font-bold mb-8">A Future-Ready Supply Chain</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-cogs text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Certified Experts</h4>
                        <p class="text-gray-600">Our team is trained in advanced supply chain technologies.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-sync-alt text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Proven Results</h4>
                        <p class="text-gray-600">We’ve optimized supply chains for global businesses.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-graduation-cap text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Continuous Innovation</h4>
                        <p class="text-gray-600">Our experts stay ahead of supply chain tech trends.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-cloud text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Scalable Solutions</h4>
                        <p class="text-gray-600">Build supply chain systems that grow with your business.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-shield-alt text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Cost Efficiency</h4>
                        <p class="text-gray-600">Reduce operational costs with streamlined processes.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-handshake text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Strategic Partnerships</h4>
                        <p class="text-gray-600">Collaborate with top tech providers for innovative solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Additional Sections -->
            <div class="space-y-12 mt-12">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-semibold mb-4">Proactive Support for Supply Chain Efficiency</h3>
                        <p class="text-gray-600 mb-4">
                            Our robust support system resolves 95% of supply chain IT challenges swiftly, backed by
                            continuous training to address evolving logistics needs.
                        </p>
                        <a href="contact.php"
                            class="inline-block bg-[#00AEEF] text-white px-6 py-2 rounded-lg hover:bg-[#008BCF] transition-colors">Get
                            Support</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRa-P1YjrA3tjR6Iw6-4BkoUXpKvyYgbP0XhQ&s"
                            alt="Supply Chain Support" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-semibold mb-4">Empowered by Industry Partnerships</h3>
                        <p class="text-gray-600 mb-4">
                            Since 2010, VirtuSwift has collaborated with leading tech providers to deliver innovative
                            supply chain solutions, enhancing operational efficiency.
                        </p>
                        <a href="contact.php"
                            class="inline-block bg-[#00AEEF] text-white px-6 py-2 rounded-lg hover:bg-[#008BCF] transition-colors">Collaborate
                            with Us</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMqO0womxv_-aFFcf_9oVmDh4h31sGFaA7ng&s"
                            alt="Industry Partnerships" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Resources -->
        <div class="bg-gray-50 py-12">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8">Related Resources</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJtPxOa018Yf5dNoVOrNxL-84_TIltcBH2mw&s"
                            alt="Resource 1" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-[#00AEEF] mb-2">Supply Chain Insights</h4>
                        <p class="text-gray-600">Learn how VirtuSwift optimizes logistics with innovative IT solutions.
                        </p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <img src="https://hallmarkuae.com/wp-content/smush-webp/2024/09/Service-Supply-Chain-1024x483.jpg.webp"
                            alt="Resource 2" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-[#00AEEF] mb-2">Webinar Replay</h4>
                        <p class="text-gray-600">Discover strategies for enhancing supply chain efficiency.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcrigy6Zz4pEds_h3ZJDkqGd5M5GEUVEMleCmgnNTm7QZ3Q_TFriY77BdQ5BANm5q2k7c&usqp=CAU"
                            alt="Resource 3" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-[#00AEEF] mb-2">Whitepaper</h4>
                        <p class="text-gray-600">Why real-time analytics are critical for modern supply chains.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chat Widget -->
    <div class="chat-widget-container">
        <div id="chat-widget-button" class="chat-widget-button">
            <i class="fas fa-comment-dots fa-2x" style="color: white;"></i>
        </div>
        <div id="chat-widget-popup" class="chat-widget-popup">
            <div class="chat-widget-header">
                <span class="chat-widget-title">VirtuSwift Support</span>
                <span id="chat-widget-close" class="chat-widget-close">×</span>
            </div>
            <div class="chat-widget-messages"></div>
            <div class="chat-widget-input">
                <input type="text" class="chat-input-field" placeholder="Type your message...">
                <button class="chat-send-button"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <?php
    require("partials/footer.php");
    ?>

    <!-- JavaScript for Mobile Navigation and Functionality -->
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
                document.querySelectorAll('.dropdown-item').forEach(other => {
                    if (other !== parent) other.classList.remove('active');
                });
            }
        });
    });

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
            const messagesContainer = document.querySelector('.chat-widget-messages');
            const messageElement = document.createElement('div');
            messageElement.className = 'chat-message';
            messageElement.innerHTML = `<div class="chat-message-user">${message}</div>`;
            messagesContainer.appendChild(messageElement);

            inputField.value = '';
            messagesContainer.scrollTop = messagesContainer.scrollHeight;

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

    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function moveSlide(direction) {
        currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
        document.querySelector('.slider').style.transform = `translateX(-${currentSlide * 100}%)`;
    }

    setInterval(() => moveSlide(1), 5000);

    function openTab(evt, tabName) {
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(content => content.classList.add('hidden'));

        const tabLinks = document.querySelectorAll('.tab-link');
        tabLinks.forEach(link => {
            link.classList.remove('border-[#00AEEF]', 'text-[#00AEEF]');
            link.classList.add('border-transparent', 'text-white');
        });

        document.getElementById(tabName).classList.remove('hidden');
        evt.currentTarget.classList.add('border-[#00AEEF]', 'text-[#00AEEF]');
    }

    document.addEventListener('DOMContentLoaded', () => {
        document.querySelector('.tab-link').click();
    });
    </script>
</body>

</html>