<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VirtuSwift - Professional IT Solutions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="Images/favicon.png" />
    <style>
    :root {
        --primary-color: rgb(45, 54, 227);
        /* Bright Blue */
        --accent-color: rgb(252, 124, 43);
        /* Bright Orange */
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
        color: #a0aec0;
        transition: color 0.2s ease;
    }

    .social-icon:hover {
        color: white;
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
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
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
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--accent-color) 100%);
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
        background-color: #e6f0ff;
        border-radius: 15px 15px 15px 2px;
        padding: 10px 15px;
        float: left;
        clear: both;
    }

    .chat-message-user {
        background-color: var(--primary-color);
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
        background-color: var(--accent-color);
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
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-section {
        position: relative;
        width: 100%;
        height: 90vh;
        min-height: 700px;
        overflow: hidden;
        color: white;
        background: linear-gradient(135deg, rgba(0, 123, 255, 0.1), rgba(255, 98, 0, 0.1));
    }

    .hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        filter: brightness(0.8);
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0, 123, 255, 0.5), rgba(255, 98, 0, 0.5));
    }

    .hero-content {
        position: relative;
        z-index: 10;
        max-width: 800px;
        padding: 0 20px;
    }

    .section-title {
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        margin-bottom: 20px;
        color: var(--accent-color);
    }

    .animated-border {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        margin: 30px 0;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            transform: scaleX(1);
        }

        50% {
            transform: scaleX(1.2);
        }

        100% {
            transform: scaleX(1);
        }
    }

    .service-card {
        border: 1px solid #e5e5e5;
        transition: all 0.3s ease;
        overflow: hidden;
        background: white;
        border-radius: 12px;
    }

    .service-card:hover {
        box-shadow: 0 20px 40px rgba(0, 123, 255, 0.2);
        transform: translateY(-10px);
        border-color: var(--accent-color);
    }

    .service-image {
        overflow: hidden;
        position: relative;
    }

    .service-image img {
        transition: transform 0.5s ease;
    }

    .service-card:hover .service-image img {
        transform: scale(1.15);
    }

    .testimonials-bg {
        background: linear-gradient(135deg, #f0f8ff, #fff5eb);
        position: relative;
    }

    .testimonials-bg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://images.unsplash.com/photo-1516321497487-e288fb19713f');
        background-size: cover;
        background-position: center;
        opacity: 0.03;
    }

    .testimonial-card {
        background: white;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 123, 255, 0.1);
        padding: 40px;
        margin: 20px 0;
        position: relative;
        border-left: 4px solid var(--accent-color);
    }

    .testimonial-card::before {
        content: '"';
        font-size: 120px;
        color: var(--primary-color);
        opacity: 0.1;
        position: absolute;
        top: 20px;
        left: 20px;
        line-height: 60px;
    }

    .cta-section {
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d');
        background-size: cover;
        background-position: center;
        opacity: 0.1;
    }

    .cta-content {
        position: relative;
        z-index: 2;
    }

    .btn-primary {
        background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
        color: white;
        padding: 14px 32px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
    }

    .btn-primary:hover {
        background: linear-gradient(90deg, var(--accent-color), var(--primary-color));
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(255, 98, 0, 0.3);
    }

    .btn-secondary {
        background-color: transparent;
        color: white;
        padding: 12px 28px;
        border: 2px solid white;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
        margin-left: 15px;
    }

    .btn-secondary:hover {
        background-color: var(--accent-color);
        color: white;
        border-color: var(--accent-color);
        transform: translateY(-5px);
    }

    .counter-box {
        text-align: center;
        padding: 40px 20px;
        position: relative;
        background: white;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0, 123, 255, 0.1);
        transition: transform 0.3s ease;
    }

    .counter-box:hover {
        transform: translateY(-5px);
    }

    .counter-value {
        font-size: 52px;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 10px;
        text-shadow: 0 2px 4px rgba(0, 123, 255, 0.2);
    }

    .counter-text {
        font-size: 16px;
        color: #444;
        font-weight: 500;
    }

    .process-step {
        display: flex;
        align-items: flex-start;
        margin-bottom: 50px;
        padding: 20px;
        border-radius: 8px;
        transition: background 0.3s ease;
    }

    .process-step:hover {
        background: rgba(0, 123, 255, 0.05);
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 24px;
        flex-shrink: 0;
        margin-right: 20px;
        box-shadow: 0 4px 10px rgba(0, 123, 255, 0.3);
    }

    .step-content {
        flex-grow: 1;
    }

    .fade-in {
        opacity: 0;
        transition: opacity 1s ease, transform 1s ease;
        transform: translateY(20px);
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .client-logo {
        filter: grayscale(100%);
        transition: filter 0.3s ease, transform 0.3s ease;
        max-height: 50px;
    }

    .client-logo:hover {
        filter: grayscale(0%);
        transform: scale(1.1);
    }

    .team-section {
        background: linear-gradient(135deg, #f0f8ff, #fff5eb);
    }

    .team-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
        background: white;
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 123, 255, 0.2);
    }

    html {
        scroll-behavior: smooth;
    }
    </style>
</head>

<body class="bg-white">
    <!-- Navigation (Unchanged) -->
    <?php
    require("partials/nav.php");
    ?>

    <!-- Hero Section -->
    <section class="hero-section flex items-center">
        <div class="hero-bg"
            style="background-image: url('https://images.unsplash.com/photo-1516321497487-e288fb19713f');">
        </div>
        <div class="hero-overlay"></div>
        <div class="container mx-auto px-4">
            <div class="hero-content">
                <div class="section-title">SAP SERVICES</div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Transform Your Business with SAP
                    Excellence</h1>
                <div class="animated-border"></div>
                <p class="text-xl mb-10">VirtuSwift delivers innovative SAP solutions with expertise and collaboration
                    to fuel your digital transformation.</p>
                <div class="flex space-x-4">
                    <a href="#services" class="btn-primary">Explore Services</a>
                    <a href="contact.php" class="btn-secondary">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-24 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <div class="section-title">OUR APPROACH</div>
                <h2 class="text-4xl font-bold mb-6">Driving Success with SAP Expertise</h2>
                <div class="animated-border mx-auto"></div>
                <p class="text-lg text-gray-600">At VirtuSwift, we tailor SAP solutions with transparency and
                    collaboration to empower your business transformation.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-20">
                <div class="text-center fade-in">
                    <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-sync-alt text-4xl text-[var(--primary-color)]"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Transparent Process</h3>
                    <p class="text-gray-600">Stay informed with our clear and open SAP implementation process.</p>
                </div>
                <div class="text-center fade-in">
                    <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-4xl text-[var(--primary-color)]"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Collaborative Approach</h3>
                    <p class="text-gray-600">We partner with your team to create solutions that align with your goals.
                    </p>
                </div>
                <div class="text-center fade-in">
                    <div class="w-24 h-24 bg-blue-50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-cogs text-4xl text-[var(--primary-color)]"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Technical Expertise</h3>
                    <p class="text-gray-600">Our certified consultants tackle complex challenges with industry-leading
                        skills.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <div class="section-title">OUR SAP SERVICES</div>
                <h2 class="text-4xl font-bold mb-6">Tailored SAP Solutions</h2>
                <div class="animated-border mx-auto"></div>
                <p class="text-lg text-gray-600">Discover our comprehensive SAP services designed to meet your unique
                    business needs.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="service-card fade-in">
                    <div class="service-image h-56">
                        <img src="https://images.unsplash.com/photo-1551288049-b1b4a64d9765" alt="SAP Implementation"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold mb-4">SAP Implementation</h3>
                        <p class="text-gray-600 mb-6">Deliver on-time, on-budget SAP implementations with our proven
                            methodology.</p>
                        <a href="#"
                            class="text-[var(--primary-color)] font-semibold hover:text-[var(--accent-color)]">Learn
                            More →</a>
                    </div>
                </div>

                <div class="service-card fade-in">
                    <div class="service-image h-56">
                        <img src="https://images.unsplash.com/photo-1516321497487-e288fb19713f"
                            alt="SAP Cloud Migration" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold mb-4">Cloud Migration</h3>
                        <p class="text-gray-600 mb-6">Migrate SAP workloads to Azure seamlessly with full visibility via
                            ClientSync Portal.</p>
                        <a href="#"
                            class="text-[var(--primary-color)] font-semibold hover:text-[var(--accent-color)]">Learn
                            More →</a>
                    </div>
                </div>

                <div class="service-card fade-in">
                    <div class="service-image h-56">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40"
                            alt="SAP Managed Services" class="w-full h-full object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="text-xl font-bold mb-4">Managed Services</h3>
                        <p class="text-gray-600 mb-6">Ensure peak performance with 24/7 proactive monitoring and
                            support.</p>
                        <a href="#"
                            class="text-[var(--primary-color)] font-semibold hover:text-[var(--accent-color)]">Learn
                            More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <div class="section-title">OUR PROCESS</div>
                <h2 class="text-4xl font-bold mb-6">Delivering SAP Excellence</h2>
                <div class="animated-border mx-auto"></div>
                <p class="text-lg text-gray-600">Our structured methodology ensures high-quality, consistent results for
                    your SAP projects.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mt-16">
                <div class="fade-in">
                    <div class="process-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3 class="text-xl font-bold mb-3">Discovery & Analysis</h3>
                            <p class="text-gray-600">We analyze your business goals and processes to craft a strategic
                                roadmap.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3 class="text-xl font-bold mb-3">Solution Design</h3>
                            <p class="text-gray-600">Tailored SAP solutions designed to optimize your operations.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3 class="text-xl font-bold mb-3">Implementation</h3>
                            <p class="text-gray-600">Agile implementation with minimal disruption to your business.</p>
                        </div>
                    </div>
                </div>

                <div class="fade-in">
                    <div class="process-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3 class="text-xl font-bold mb-3">Testing & Quality Assurance</h3>
                            <p class="text-gray-600">Rigorous testing to ensure optimal performance and reliability.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3 class="text-xl font-bold mb-3">Training & Change Management</h3>
                            <p class="text-gray-600">Comprehensive training to maximize your SAP investment.</p>
                        </div>
                    </div>

                    <div class="process-step">
                        <div class="step-number">6</div>
                        <div class="step-content">
                            <h3 class="text-xl font-bold mb-3">Ongoing Support & Optimization</h3>
                            <p class="text-gray-600">Continuous support and optimization for sustained success.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="counter-box fade-in">
                    <div class="counter-value">95%</div>
                    <div class="counter-text">Client Satisfaction Rate</div>
                </div>

                <div class="counter-box fade-in">
                    <div class="counter-value">200+</div>
                    <div class="counter-text">SAP Projects Completed</div>
                </div>

                <div class="counter-box fade-in">
                    <div class="counter-value">15+</div>
                    <div class="counter-text">Years of SAP Experience</div>
                </div>

                <div class="counter-box fade-in">
                    <div class="counter-value">50+</div>
                    <div class="counter-text">Certified SAP Consultants</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-bg py-24">
        <div class="container mx-auto px-4 relative">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <div class="section-title">CLIENT TESTIMONIALS</div>
                <h2 class="text-4xl font-bold mb-6">What Our Clients Say</h2>
                <div class="animated-border mx-auto"></div>
                <p class="text-lg text-gray-600">Discover how VirtuSwift has transformed businesses with our SAP
                    solutions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-16">
                <div class="testimonial-card fade-in">
                    <p class="text-gray-600 mb-6">"VirtuSwift's expertise reduced our processing time by 30%. Their
                        transparency was exceptional."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">John Matthews</h4>
                            <p class="text-sm text-gray-500">CEO, TechCorp</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card fade-in">
                    <p class="text-gray-600 mb-6">"The cloud migration was seamless with VirtuSwift’s ClientSync Portal,
                        enhancing our agility."</p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client"
                            class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-gray-800">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">CIO, Global Enterprises</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Client Logos -->
            <div class="mt-16">
                <div class="max-w-4xl mx-auto text-center mb-8">
                    <h3 class="text-2xl font-bold">Trusted by Leading Brands</h3>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <img src="https://pnghunter.com/get-logo.php?id=3839" alt="Client 1" class="client-logo mx-auto">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQPAzN0thISPaG1ULIXHj8PMes96xADCsJSw&s"
                        alt="Client 2" class="client-logo mx-auto">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKZthX2JdflmjlL9ieewvgNMuYu4faDtkb8g&s"
                        alt="Client 3" class="client-logo mx-auto">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRu-DDQzkINpBMQIXcglfOdn9iPl67jV2SGA&s"
                        alt="Client 4" class="client-logo mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section py-24">
        <div class="container mx-auto px-4">
            <div class="cta-content text-center text-white">
                <div class="section-title">READY TO TRANSFORM?</div>
                <h2 class="text-4xl font-bold mb-6">Launch Your SAP Journey Today</h2>
                <div class="animated-border mx-auto"></div>
                <p class="text-lg mb-10 max-w-2xl mx-auto">Partner with VirtuSwift to unlock your business’s potential
                    with tailored SAP solutions.</p>
                <a href="contact.php" class="btn-primary">Start Now</a>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section py-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <div class="section-title">OUR TEAM</div>
                <h2 class="text-4xl font-bold mb-6">Meet Our SAP Experts</h2>
                <div class="animated-border mx-auto"></div>
                <p class="text-lg text-gray-600">Our certified consultants drive your success with unparalleled
                    expertise.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="team-card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Team Member"
                        class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">Michael Chen</h3>
                        <p class="text-gray-600 mb-4">SAP Solution Architect</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card fade-in">
                    <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Team Member"
                        class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">Emily Rodriguez</h3>
                        <p class="text-gray-600 mb-4">SAP Project Manager</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="team-card fade-in">
                    <img src="https://randomuser.me/api/portraits/men/78.jpg" alt="Team Member"
                        class="w-full h-64 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold mb-2">David Patel</h3>
                        <p class="text-gray-600 mb-4">SAP Cloud Specialist</p>
                        <div class="flex justify-center space-x-4">
                            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer (Unchanged) -->
    <footer class="footer">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">VirtuSwift</h3>
                    <p class="text-gray-400 mb-4">Empowering businesses with cutting-edge SAP solutions for digital
                        transformation.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Quick Links</h3>
                    <ul class="footer-links space-y-2">
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Contact Us</h3>
                    <p class="text-gray-400 mb-2"><i class="fas fa-map-marker-alt mr-2"></i> 123 Innovation Drive, Tech
                        City</p>
                    <p class="text-gray-400 mb-2"><i class="fas fa-phone-alt mr-2"></i> +1 (800) 123-4567</p>
                    <p class="text-gray-400 mb-2"><i class="fas fa-envelope mr-2"></i> info@virtuswift.com</p>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-4">Stay updated with our latest insights and offers.</p>
                    <form>
                        <input type="email" placeholder="Your email"
                            class="w-full p-2 rounded-md bg-gray-800 text-white border border-gray-600 mb-4 focus:outline-none">
                        <button type="submit" class="btn-primary w-full">Subscribe</button>
                    </form>
                </div>
            </div>

            <div class="mt-12 text-center text-gray-400 border-t border-gray-800 pt-6">
                <p>© 2025 VirtuSwift. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Chat Widget -->
    <div class="chat-widget-container">
        <div class="chat-widget-button">
            <i class="fas fa-comment-alt text-2xl text-white"></i>
        </div>
        <div class="chat-widget-popup">
            <div class="chat-widget-header">
                <span class="chat-widget-title">VirtuSwift Support</span>
                <span class="chat-widget-close">×</span>
            </div>
            <div class="chat-widget-messages">
                <div class="chat-message chat-message-bot">Welcome to VirtuSwift! How can we assist you today?</div>
            </div>
            <div class="chat-widget-input">
                <input type="text" class="chat-input-field" placeholder="Type your message...">
                <button class="chat-send-button"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function($) {
        // Smooth scrolling for anchor links
        $('a[href*="#"]').not('[href="#"]').click(function(event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                event.preventDefault();
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 1000);
                    return false;
                }
            }
        });

        // Fade-in animation on scroll
        function checkFadeIn() {
            $('.fade-in').each(function() {
                var elementTop = $(this).offset().top;
                var windowBottom = $(window).scrollTop() + $(window).height();
                if (elementTop < windowBottom - 100) {
                    $(this).addClass('visible');
                }
            });
        }

        $(window).on('scroll', checkFadeIn);
        checkFadeIn();

        // Mobile menu toggle
        $('.mobile-menu-toggle').on('click', function() {
            $('.nav-list').toggleClass('active');
        });

        // Chat widget functionality
        $('.chat-widget-button').on('click', function() {
            $('.chat-widget-popup').toggleClass('active');
        });

        $('.chat-widget-close').on('click', function() {
            $('.chat-widget-popup').removeClass('active');
        });

        $('.chat-send-button').on('click', function() {
            var message = $('.chat-input-field').val().trim();
            if (message) {
                $('.chat-widget-messages').append(
                    '<div class="chat-message chat-message-user">' + message + '</div>'
                );
                $('.chat-input-field').val('');
                $('.chat-widget-messages').scrollTop($('.chat-widget-messages')[0].scrollHeight);

                // Simulate bot response
                setTimeout(function() {
                    $('.chat-widget-messages').append(
                        '<div class="chat-message chat-message-bot">Thank you for your message! How can we assist you further?</div>'
                    );
                    $('.chat-widget-messages').scrollTop($('.chat-widget-messages')[0]
                        .scrollHeight);
                }, 1000);
            }
        });

        $('.chat-input-field').on('keypress', function(e) {
            if (e.which == 13) {
                $('.chat-send-button').click();
            }
        });
    });
    </script>
</body>

</html>