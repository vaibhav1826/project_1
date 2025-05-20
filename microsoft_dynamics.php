<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtuSwift - Microsoft Dynamics Solutions</title>
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

    <!-- Microsoft Dynamics Services Section -->
    <section class="dynamics-services-section bg-white">
        <!-- Slider Section -->
        <div class="relative w-full h-[400px] bg-gray-100 overflow-hidden">
            <div class="slider flex transition-transform duration-500 ease-in-out">
                <div class="slide min-w-full h-[400px] bg-cover bg-center"
                    style="background-image: url('https://tectura.com/india/wp-content/uploads/2023/12/Microsoft_Dynamics365_blog-1170x617-1.jpg');">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-start px-10">
                        <div class="text-white">
                            <h1 class="text-4xl font-bold mb-4">Elevate Your Business with VirtuSwift Microsoft Dynamics
                                Solutions</h1>
                            <p class="text-lg">Streamline operations and enhance customer engagement with integrated CRM
                                and ERP solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="slide min-w-full h-[400px] bg-cover bg-center"
                    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShsKm1FK4PH2hE9G0pc0e4j2uNmPVJZZUzv3YHTnlVXZ8W6RKQ1Mz9VH0O2MgD--7Lhg&usqp=CAU');">
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
                        <h2 class="text-3xl font-bold mb-4">Mastering Business Efficiency with Microsoft Dynamics</h2>
                        <p class="text-gray-600 mb-6">
                            VirtuSwift delivers tailored Microsoft Dynamics 365 solutions to optimize your business
                            processes. By integrating CRM and ERP capabilities, we enable seamless customer engagement,
                            streamlined operations, and data-driven decisions, ensuring your organization thrives in a
                            competitive
                            landscape.[](https://learn.microsoft.com/en-us/dynamics365/guidance/organizational-strategy/define-organizational-strategy)
                        </p>
                        <a href="contact.php"
                            class="inline-block bg-[#00AEEF] text-white px-6 py-2 rounded-lg hover:bg-[#008BCF] transition-colors">Learn
                            More</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7pAy5hr4Ta8XgYHNJObqzarSBo5xdltzYPY_6JHTeQpb5Jy8uJdcF87DClEBHSPETvOE&usqp=CAU"
                            alt="Microsoft Dynamics Technology" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>
            </div>

            <!-- Capabilities Tab -->
            <div id="Capabilities" class="tab-content hidden">
                <div class="mb-12">
                    <h3 class="text-xl font-semibold text-[#00AEEF] mb-2">CAPABILITIES</h3>
                    <h2 class="text-3xl font-bold mb-4">Transform Operations with Dynamics 365</h2>
                    <div class="space-y-8">
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="md:w-1/3">
                                <h4 class="text-lg font-semibold text-[#00AEEF]">Customer Engagement</h4>
                                <p class="text-gray-600">Enhance customer relationships with Dynamics 365 Customer
                                    Service, offering real-time insights and personalized interactions.</p>
                                [](https://learn.microsoft.com/en-us/dynamics365/customer-service/develop/reference/about-entity-reference)
                            </div>
                            <div class="md:w-1/3">
                                <h4 class="text-lg font-semibold text-[#00AEEF]">Business Central</h4>
                                <p class="text-gray-600">Unify financials, sales, and operations with a cloud-based ERP
                                    solution for small and medium businesses.</p>
                                [](https://x.com/AegisSoftTech/status/1921916867372855528)
                            </div>
                            <div class="md:w-1/3">
                                <h4 class="text-lg font-semibold text-[#00AEEF]">Site Management</h4>
                                <p class="text-gray-600">Organize resources by location and time zone for efficient
                                    scheduling and operations.</p>
                                [](https://learn.microsoft.com/en-us/dynamics365/customerengagement/on-premises/developer/site-entity?view=op-9-1)
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Benefits Tab -->
            <div id="Benefits" class="tab-content hidden">
                <h2 class="text-3xl font-bold mb-8">A Modern Dynamics Journey</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-cogs text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Expert Consultants</h4>
                        <p class="text-gray-600">Our certified Dynamics professionals deliver top-tier expertise for
                            your business needs.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-sync-alt text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Proven Success</h4>
                        <p class="text-gray-600">Successfully implemented Dynamics solutions across various industries.
                        </p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-graduation-cap text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Continuous Learning</h4>
                        <p class="text-gray-600">Our team stays current with Dynamics 365 updates through ongoing
                            training.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-cloud text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Scalable Operations</h4>
                        <p class="text-gray-600">Optimize your business processes for scalability and efficiency.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-shield-alt text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Cost Efficiency</h4>
                        <p class="text-gray-600">Achieve cost savings without compromising performance.</p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <i class="fas fa-handshake text-3xl text-[#00AEEF] mb-4"></i>
                        <h4 class="font-bold text-lg mb-2">Strategic Partnerships</h4>
                        <p class="text-gray-600">Collaborate with Microsoft for innovative Dynamics solutions.</p>
                    </div>
                </div>
            </div>

            <!-- Additional Sections -->
            <div class="space-y-12 mt-12">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-semibold mb-4">Proactive Support for Today and Tomorrow</h3>
                        <p class="text-gray-600 mb-4">
                            Our Dynamics Support Center addresses 95% of potential issues with documented solutions,
                            ensuring rapid resolution. Our team undergoes regular training to tackle emerging Dynamics
                            challenges.
                        </p>
                        <a href="contact.php"
                            class="inline-block bg-[#00AEEF] text-white px-6 py-2 rounded-lg hover:bg-[#008BCF] transition-colors">Explore
                            Support</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f" alt="Proactive Support"
                            class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-1/2">
                        <h3 class="text-xl font-semibold mb-4">Strength Through Strategic Partnerships</h3>
                        <p class="text-gray-600 mb-4">
                            Since 2010, VirtuSwift has excelled in deploying Microsoft Dynamics solutions, partnering
                            with Microsoft to deliver innovative CRM and ERP solutions across industries.
                        </p>
                        <a href="contact.php"
                            class="inline-block bg-[#00AEEF] text-white px-6 py-2 rounded-lg hover:bg-[#008BCF] transition-colors">Partner
                            with Us</a>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://images.pexels.com/photos/3184297/pexels-photo-3184297.jpeg"
                            alt="Strategic Partnerships" class="w-full h-64 object-cover rounded-lg">
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
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvDIFDGVqBqRjhpSXxWap2VnOOvNuFTGz-Ss-sewQMtNLlRiT9hMQS_MRMc9SUxmNs4ek&usqp=CAU"
                            alt="Resource 1" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-[#00AEEF] mb-2">Thought Leadership</h4>
                        <p class="text-gray-600">How VirtuSwift enhances business efficiency with Dynamics 365.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg" alt="Resource 2"
                            class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-[#00AEEF] mb-2">Webinar Replay</h4>
                        <p class="text-gray-600">Learn how Dynamics 365 optimizes customer service operations.</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <img src="https://9253440.fs1.hubspotusercontent-na1.net/hubfs/9253440/woman%20in%20professional%20clothing%20and%20microphone%20presenting%20thought%20leadership%20ideas.jpg"
                            alt="Resource 3" class="w-full h-40 object-cover rounded-lg mb-4">
                        <h4 class="text-lg font-semibold text-[#00AEEF] mb-2">Case Study</h4>
                        <p class="text-gray-600">Streamlining operations with Dynamics 365 Business Central.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

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