<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtuSwift - About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="Images/favicon.png" />
    <style>
    :root {
        --primary-color: #0076CE;
        --accent-color: #FF6600;
        --text-primary: #1a1a1a;
        --text-secondary: #666;
        --bg-secondary: #f5faff;
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
        color: var(--text-secondary);
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .social-icon:hover {
        color: var(--accent-color);
        transform: scale(1.2);
    }

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

    .industry-card {
        background-color: var(--bg-secondary);
        border-radius: 10px;
        padding: 1.5rem;
        text-align: center;
        border: 2px solid transparent;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background-color 0.3s ease;
    }

    .industry-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        border-color: var(--accent-color);
        background-color: #ffffff;
    }

    .industry-icon {
        color: var(--primary-color);
        margin-bottom: 1rem;
        transition: color 0.3s ease;
    }

    .industry-card:hover .industry-icon {
        color: var(--accent-color);
    }

    .vision-mission-card {
        background-color: var(--bg-secondary);
        border-radius: 10px;
        padding: 2rem;
        border: 2px solid transparent;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background-color 0.3s ease;
    }

    .vision-mission-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        border-color: var(--accent-color);
        background-color: #ffffff;
    }

    .vision-mission-icon {
        color: var(--primary-color);
        margin-bottom: 1rem;
        transition: color 0.3s ease;
    }

    .vision-mission-card:hover .vision-mission-icon {
        color: var(--accent-color);
    }

    .cta-section {
        background-color: var(--primary-color);
        color: white;
        padding: 3rem 0;
        text-align: center;
    }

    .cta-button {
        background-color: white;
        color: var(--primary-color);
        padding: 0.75rem 2rem;
        border-radius: 5px;
        border: 2px solid transparent;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
    }

    .cta-button:hover {
        background-color: var(--accent-color);
        color: white;
        border-color: white;
        transform: scale(1.05);
    }

    .cta-button-secondary {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        padding: 0.75rem 2rem;
        border-radius: 5px;
        transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease, transform 0.3s ease;
    }

    .cta-button-secondary:hover {
        background-color: white;
        color: var(--primary-color);
        border-color: var(--accent-color);
        transform: scale(1.05);
    }

    .impressive-heading {
        text-align: center;
        margin-bottom: 3rem;
    }

    .impressive-heading h1 {
        font-size: 3rem;
        font-weight: 800;
        color: var(--primary-color);
        position: relative;
        display: inline-block;
    }

    .impressive-heading h1::after {
        content: '';
        position: absolute;
        bottom: -0.5rem;
        left: 50%;
        transform: translateX(-50%);
        width: 50%;
        height: 4px;
        background-color: var(--accent-color);
    }

    .section-heading {
        font-size: 2rem;
        font-weight: 700;
        color: var(--text-primary);
        margin-bottom: 1rem;
    }

    .content-container p {
        color: var(--text-secondary);
        line-height: 1.6;
    }

    .team-member {
        background-color: var(--bg-secondary);
        border-radius: 10px;
        padding: 1.5rem;
        text-align: center;
        border: 2px solid transparent;
        transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease, background-color 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        border-color: var(--accent-color);
        background-color: #ffffff;
    }

    .team-member h4 {
        color: var(--text-primary);
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 1rem;
    }

    .team-member p {
        color: var(--text-secondary);
        font-size: 0.875rem;
    }

    .animate-on-scroll {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .animate-on-scroll.visible {
        opacity: 1;
        transform: translateY(0);
    }
    </style>
</head>

<body class="bg-gray-100">
    <?php
    require("partials/nav.php");
    ?>

    <!-- About Page Content -->
    <div class="container mx-auto py-12 px-4">
        <!-- About Section -->
        <section class="about-section mb-16">
            <!-- Impressive Heading -->
            <div class="impressive-heading">
                <h1>About Us</h1>
            </div>

            <!-- Content Overlay -->
            <div class="content-container px-3">
                <!-- Our Story -->
                <div class="mb-12 animate-on-scroll">
                    <h2 class="section-heading">Our Story</h2>
                    <p class="mt-4">
                        Founded in 2015, VirtuSwift began as a small startup with a big vision: to revolutionize the way
                        businesses leverage technology. Over the past decade, we've grown into a global leader in IT
                        solutions and staffing, helping companies across industries achieve their digital transformation
                        goals. Our journey is built on a foundation of innovation, integrity, and a relentless
                        commitment to our clients' success.
                    </p>
                </div>



                <!-- Industries We Serve Section -->
                <section class="mb-16">
                    <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Industries We Serve</h2>
                    <p class="text-center text-gray-600 mb-8">Specialized solutions tailored for the unique requirements
                        of
                        various industries</p>
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-6 gap-6">
                        <div class="industry-card">
                            <i class="fas fa-hospital fa-3x industry-icon"></i>
                            <h3 class="text-lg font-semibold text-gray-800">Healthcare</h3>
                        </div>
                        <div class="industry-card">
                            <i class="fas fa-university fa-3x industry-icon"></i>
                            <h3 class="text-lg font-semibold text-gray-800">Finance</h3>
                        </div>
                        <div class="industry-card">
                            <i class="fas fa-shopping-bag fa-3x industry-icon"></i>
                            <h3 class="text-lg font-semibold text-gray-800">Retail</h3>
                        </div>
                        <div class="industry-card">
                            <i class="fas fa-industry fa-3x industry-icon"></i>
                            <h3 class="text-lg font-semibold text-gray-800">Manufacturing</h3>
                        </div>
                        <div class="industry-card">
                            <i class="fas fa-graduation-cap fa-3x industry-icon"></i>
                            <h3 class="text-lg font-semibold text-gray-800">Education</h3>
                        </div>
                        <div class="industry-card">
                            <i class="fas fa-truck fa-3x industry-icon"></i>
                            <h3 class="text-lg font-semibold text-gray-800">Logistics</h3>
                        </div>
                    </div>
                </section>

                <!-- Vision, Mission, Philosophy Section -->
                <section class="mb-16">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="vision-mission-card">
                            <i class="fas fa-bullseye fa-3x vision-mission-icon"></i>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Our Vision</h3>
                            <p class="text-gray-600">To be the global leader in IT solutions and staffing services,
                                empowering
                                businesses to achieve unparalleled success through virtuous innovation and swift
                                execution.</p>
                        </div>
                        <div class="vision-mission-card">
                            <i class="fas fa-rocket fa-3x vision-mission-icon"></i>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Our Mission</h3>
                            <p class="text-gray-600">Deliver cutting-edge technology solutions that drive business
                                transformation. Provide expertly screened talent across all tech stacks. Foster
                                long-term
                                partnerships through ethical practices and rapid service.</p>
                        </div>
                        <div class="vision-mission-card">
                            <i class="fas fa-handshake fa-3x vision-mission-icon"></i>
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Our Philosophy</h3>
                            <p class="text-gray-600">VirtuSwift operates on the principles of virtue and speed,
                                combining moral
                                excellence with swift execution. We believe in upholding integrity, accelerating
                                success, and
                                innovating responsibly.</p>
                        </div>
                    </div>
                </section>

                <!-- Call to Action Section -->
                <section class="cta-section">
                    <h2 class="text-3xl font-bold mb-4">Ready to transform your business?</h2>
                    <p class="text-lg mb-6">Schedule a free consultation with our experts to discuss your project
                        requirements.
                    </p>
                    <div class="flex justify-center gap-4">
                        <a href="contact.php" class="cta-button">Request a Consultation</a>
                        <a href="contact.php" class="cta-button-secondary">Learn More</a>
                    </div>
                </section>
            </div>

            <?php
    require("partials/footer.php");
    ?>

            <!-- JavaScript for Mobile Navigation, Chat Widget, and Scroll Animations -->
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
                    document.querySelectorAll('.dropdown-item').forEach(item => item.classList.remove(
                        'active'));
                }
            });

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

            // Scroll Animation for Elements
            const animateOnScrollElements = document.querySelectorAll('.animate-on-scroll');

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.2
            });

            animateOnScrollElements.forEach(element => {
                observer.observe(element);
            });
            </script>
</body>

</html>