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
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'primary': '#0076CE', // --accent-primary (blue)
                    'secondary': '#FF6600', // --accent-secondary (orange)
                    'bg-primary': '#FFF3E0', // Light bright orange for section background
                    'bg-secondary': '#F9FAFB', // Light gray for secondary backgrounds
                    'text-primary': '#1A1A1A', // Dark text for headings
                    'text-secondary': '#4A5568', // Gray text for body
                },
            },
        },
    };
    </script>
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

    .chat-widget-container .chat-widget-popup.active {
        display: block !important;
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
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .chat-message {
        max-width: 80%;
        margin-bottom: 15px;
    }

    .chat-message-bot {
        background-color: #f0f0f0;
        border-radius: 15px 15px 15px 2px;
        padding: 10px 15px;
        align-self: flex-start;
    }

    .chat-message-user {
        background-color: #3a3cb1;
        color: white;
        border-radius: 15px 15px 2px 15px;
        padding: 10px 15px;
        align-self: flex-end;
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

    /* Banner styles */
    .banner-container {
        position: relative;
        width: 100%;
        height: 600px;
        overflow: hidden;
    }

    .banner {
        opacity: 0;
        visibility: hidden;
        transition: opacity 1s ease, visibility 1s;
    }

    .banner.active {
        opacity: 1;
        visibility: visible;
    }

    .banner-1 {
        background: linear-gradient(135deg, #3a3dc4 0%, #f05a28 100%);
    }

    .banner-2 {
        background: #232342;
    }

    .content {
        position: relative;
        z-index: 10;
        color: white;
        padding: 60px;
        max-width: 600px;
        animation: slideUp 1.2s ease-out;
    }

    .content h1 {
        font-size: 3.5rem;
        margin-bottom: 1rem;
        font-weight: bold;
        line-height: 1.1;
    }

    .content p {
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 2rem;
        opacity: 0.9;
    }

    .accent-text {
        color: #f05a28;
    }

    .buttons {
        display: flex;
        gap: 20px;
    }

    .btn {
        display: inline-block;
        padding: 14px 28px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
    }

    .banner-1 .btn-primary {
        background-color: white;
        color: #3a3dc4;
        border: 2px solid white;
    }

    .banner-1 .btn-secondary {
        background-color: transparent;
        color: white;
        border: 2px solid white;
    }

    .banner-2 .btn-primary {
        background-color: #f05a28;
        color: white;
        border: none;
    }

    .banner-2 .btn-secondary {
        background-color: transparent;
        color: white;
        border: 2px solid #3a3dc4;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .banner-2 .btn-primary:hover {
        background-color: #e04d1d;
    }

    .banner-2 .btn-secondary:hover {
        background-color: rgba(58, 61, 196, 0.1);
    }

    .animation-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .service-tags {
        position: absolute;
        bottom: 30px;
        right: 60px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-end;
        gap: 15px;
        max-width: 500px;
        z-index: 10;
    }

    .tag {
        padding: 8px 16px;
        background: rgba(58, 61, 196, 0.2);
        border-left: 3px solid #3a3dc4;
        color: white;
        font-size: 14px;
        font-weight: 500;
        border-radius: 3px;
        animation: fadeInTag 0.5s ease-out forwards;
        opacity: 0;
    }

    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
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

    @keyframes fadeInTag {
        from {
            opacity: 0;
            transform: translateX(20px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
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

        .content {
            padding: 40px 20px;
        }

        .content h1 {
            font-size: 2.5rem;
        }

        .buttons {
            flex-direction: column;
            gap: 10px;
        }

        .service-tags {
            right: 20px;
            left: 20px;
            justify-content: center;
        }

        .chat-widget-popup {
            width: 300px;
            right: 0;
        }
    }

    .service-card {
        background-color: white;
        /* Existing background */
        border-radius: 12px;
        /* Slightly increased for better appearance */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        /* Existing shadow */
        transition: all 0.3s ease;
        /* Smooth transition for all changes */
        position: relative;
        /* For outline positioning */
        overflow: hidden;
        /* Ensure outline doesn't overflow */
    }

    /* Hover effect for service cards */
    .service-card:hover {
        transform: scale(1.02);
        /* Existing scale on hover */
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        /* Enhanced shadow on hover */
        outline: 2px solid var(--accent-secondary);
        /* Orange outline on hover */
        outline-offset: 4px;
        /* Space between card and outline */
    }

    /* Icon color change on hover */
    .service-card:hover .text-primary,
    .service-card:hover i {
        color: var(--accent-secondary) !important;
        /* Change blue icon to orange on hover */
    }

    /* Ensure icons in service cards are initially blue */
    .service-card .text-primary,
    .service-card i {
        color: var(--accent-primary);
        /* Default blue color */
        transition: color 0.3s ease;
        /* Smooth color transition */
    }

    body {
        background-color: rgba(255, 243, 224, 0.3);
        /* Very light orange with opacity for reflection effect */
        min-height: 100vh;
        /* Ensure it covers the full height */
    }

    /* About Section */
    #about {
        background-color: var(--bg-primary);
        /* Keep the light orange as defined */
    }

    /* Services Section */
    #services {
        background-color: var(--bg-primary);
        /* Keep the light orange as defined */
    }

    /* Case Studies Section */
    #case-studies {
        background-color: var(--bg-primary);
        /* Keep the light orange as defined */
    }

    /* Contact Section */
    #contact {
        background-color: var(--bg-primary);
        /* Keep the light orange as defined */
    }

    /* Ensure gradient sections (like SAP & Cloud Migration, FAQs, Testimonials) retain their gradient */
    .section-gradient {
        background: linear-gradient(135deg, #f9fafb 0%, #fff3e0 100%);
        /* Reinforce the gradient */
    }

    /* Case Study Cards */
    .case-study-card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .case-study-card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        outline: 2px solid var(--accent-secondary);
        outline-offset: 4px;
    }

    .case-study-card:hover i {
        color: var(--accent-secondary) !important;
    }

    /* Testimonial Cards */
    .testimonial-card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .testimonial-card:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        outline: 2px solid var(--accent-secondary);
        outline-offset: 4px;
    }

    .testimonial-card:hover i {
        color: var(--accent-secondary) !important;
    }

    /* Contact Form and Info Cards */
    #contact .bg-bg-secondary {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    #contact .bg-bg-secondary:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        outline: 2px solid var(--accent-secondary);
        outline-offset: 4px;
    }

    #contact .bg-bg-secondary:hover i {
        color: var(--accent-secondary) !important;
    }

    /* Base styles for cards to support gradient border */
    .service-card,
    .case-study-card,
    .testimonial-card,
    #contact .bg-bg-secondary {
        border: 3px solid transparent;
        /* Transparent border to hold the gradient */
        border-radius: 12px;
        /* Existing border-radius */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        /* Existing shadow */
        transition: all 0.3s ease;
        /* Smooth transition for all changes */
        position: relative;
        overflow: hidden;
        background-clip: padding-box;
        /* Ensures background doesn't bleed into the border */
    }

    /* Hover effect with gradient border */
    .service-card:hover,
    .case-study-card:hover,
    .testimonial-card:hover,
    #contact .bg-bg-secondary:hover {
        transform: scale(1.03);
        /* Slightly increased scale for more impact */
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        /* More pronounced shadow */
        border-image: linear-gradient(45deg, var(--accent-primary), var(--accent-secondary)) 1;
        /* Gradient border */
        background-color: rgba(255, 243, 224, 0.5);
        /* Subtle light orange tint on hover */
    }

    /* Ensure icons change color on hover (already implemented, reinforcing here) */
    .service-card:hover .text-primary,
    .service-card:hover i,
    .case-study-card:hover i,
    .testimonial-card:hover i,
    #contact .bg-bg-secondary:hover i {
        color: var(--accent-secondary) !important;
        /* Blue to orange */
    }

    /* Default icon color */
    .service-card .text-primary,
    .service-card i,
    .case-study-card i,
    .testimonial-card i,
    #contact .bg-bg-secondary i {
        color: var(--accent-primary);
        /* Default blue */
        transition: color 0.3s ease;
    }

    /* Enhanced hover effect with glow */
    .service-card:hover,
    .case-study-card:hover,
    .testimonial-card:hover,
    #contact .bg-bg-secondary:hover {
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2),
            0 0 15px rgba(0, 118, 206, 0.3),
            /* Blue glow */
            0 0 15px rgba(255, 102, 0, 0.3);
        /* Orange glow */
        transition: all 0.3s ease;
    }

    /* Add a subtle overlay effect on hover */
    .service-card,
    .case-study-card,
    .testimonial-card,
    #contact .bg-bg-secondary {
        position: relative;
    }

    .service-card::before,
    .case-study-card::before,
    .testimonial-card::before,
    #contact .bg-bg-secondary::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, rgba(0, 118, 206, 0.1), rgba(255, 102, 0, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
        pointer-events: none;
        /* Prevent interaction with the overlay */
        border-radius: 12px;
    }

    .service-card:hover::before,
    .case-study-card:hover::before,
    .testimonial-card:hover::before,
    #contact .bg-bg-secondary:hover::before {
        opacity: 1;
    }

    body {
        background-color: rgba(255, 243, 224, 0.3);
        /* Light orange reflection effect */
        min-height: 100vh;
    }

    #about,
    #services,
    #case-studies,
    #contact {
        background-color: var(--bg-primary);
    }

    .section-gradient {
        background: linear-gradient(135deg, #f9fafb 0%, #fff3e0 100%);
    }

    /* FAQ Content Transition */
    #faq-content-1,
    #faq-content-2,
    #faq-content-3,
    #faq-content-4 {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }

    #faq-content-1.active,
    #faq-content-2.active,
    #faq-content-3.active,
    #faq-content-4.active {
        max-height: 200px;
        /* Adjust based on content height */
        padding: 1rem 1.5rem;
    }

    /* Chevron Rotation */
    .faq-arrow.active {
        transform: rotate(180deg);
    }

    /* Contact Button Styling */
    .contact-btn {
        background: var(--accent-primary);
        /* Blue background */
        color: white;
        /* White text */
        border: 2px solid transparent;
        /* For gradient border on hover */
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        /* Subtle shadow */
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    /* Hover Effect */
    .contact-btn:hover {
        background: var(--accent-secondary);
        /* Orange background on hover */
        transform: translateY(-3px);
        /* Slight lift */
        box-shadow: 0 8px 20px rgba(255, 102, 0, 0.3);
        /* Orange glow */

        /* Gradient border */
    }

    /* Optional: Add a shine effect on hover */
    .contact-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: 0.5s;
    }

    .contact-btn:hover::before {
        left: 100%;
    }

    .pulse {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(var(--accent-primary-rgb), 0.4);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(var(--accent-primary-rgb), 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(var(--accent-primary-rgb), 0);
        }
    }

    /* Hover effects for continent paths */
    .continent-path {
        transition: fill-opacity 0.3s, stroke-width 0.3s;
    }

    .continent-path:hover {
        fill-opacity: 0.4;
        stroke-width: 2;
    }

    /* Tooltip hover effect */
    .map-point:hover .region-tooltip {
        opacity: 1;
    }

    .map-point:hover {
        transform: scale(1.5) translate(-50%, -50%);
    }

    /* Chat Widget Container */
    .chat-widget-container {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
    }

    /* Chat Button */
    .chat-widget-button {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #0000CD 0%, #FF6600 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
    }

    .chat-widget-button:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.3);
        background: linear-gradient(135deg, #0000A0 0%, #E65C00 100%);
        /* Slightly darker gradient on hover */
    }

    /* Chat Popup */
    .chat-widget-popup {
        width: 320px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        overflow: hidden;
        display: none;
        /* Hidden by default, assuming JavaScript toggles visibility */
        transition: all 0.3s ease;
    }

    /* Chat Header */
    .chat-widget-header {
        background: linear-gradient(135deg, #0000CD 0%, #FF6600 100%);
        padding: 12px 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #ffffff;
    }

    .chat-widget-title {
        font-size: 1.1rem;
        font-weight: 600;
    }

    .chat-widget-close {
        font-size: 1.5rem;
        cursor: pointer;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .chat-widget-close:hover {
        transform: rotate(90deg);
        color: #f0f0f0;
    }

    /* Chat Messages */
    .chat-widget-messages {
        max-height: 300px;
        overflow-y: auto;
        padding: 16px;
        background: #f8fafc;
    }

    .chat-message-bot {
        background: #e2e8f0;
        color: #111827;
        padding: 10px 14px;
        border-radius: 12px 12px 12px 0;
        margin-bottom: 10px;
        max-width: 80%;
    }

    .chat-message-user {
        background: #0000CD;
        /* Blue for user messages to match theme */
        color: #ffffff;
        padding: 10px 14px;
        border-radius: 12px 12px 0 12px;
        margin-bottom: 10px;
        max-width: 80%;
        margin-left: auto;
    }

    /* Chat Input */
    .chat-widget-input {
        display: flex;
        align-items: center;
        padding: 12px;
        background: linear-gradient(135deg, #0000CD 0%, #FF6600 100%);
    }

    .chat-input-field {
        flex: 1;
        padding: 8px 12px;
        border: none;
        border-radius: 8px;
        outline: none;
        font-size: 0.9rem;
        color: #111827;
        background: #ffffff;
    }

    .chat-send-button {
        background: transparent;
        border: none;
        color: #ffffff;
        padding: 8px;
        cursor: pointer;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .chat-send-button:hover {
        transform: scale(1.2);
        color: #f0f0f0;
    }

    .chat-send-button i {
        font-size: 1.2rem;
    }
    </style>
</head>

<body class="bg-gray-100">
    <?php
    require("partials/nav.php");
    ?>

    <!-- Hero Banner Slider Section -->
    <section class="hero-banner-container relative min-h-screen flex items-center pt-24">
        <!-- Banner 1 -->
        <div class="banner banner-1 active absolute inset-0 overflow-hidden">
            <canvas id="animationCanvas1" class="animation-container"></canvas>
            <div class="content">
                <br>
                <h1><br>Excellence Delivered at the <span class="text-white">Speed of Innovation</span></h1>
                <p>Transforming businesses through virtuous innovation and swift execution. VirtuSwift delivers
                    cutting-edge IT solutions and expert staffing services to power your digital journey.</p>
                <div class="buttons">
                    <a href="" class="btn btn-primary">Discover Solutions</a>
                    <a href="contact.php" class="btn btn-secondary">Get in Touch</a>
                </div>
            </div>
        </div>
        <!-- Banner 2 -->
        <div class="banner banner-2 absolute inset-0 overflow-hidden">
            <canvas id="animationCanvas2" class="animation-container"></canvas>
            <div class="content">
                <h1><br><br>Digital Excellence, <span class="accent-text">Swift</span> Innovation</h1>
                <p>Empowering businesses through advanced IT solutions and expert talent. Let VirtuSwift accelerate your
                    technological transformation journey.</p>
                <div class="buttons">
                    <a href="" class="btn btn-primary">Discover Solutions</a>
                    <a href="contact.php" class="btn btn-secondary">Get in Touch</a>
                </div>
            </div>
            <div class="service-tags">
                <div class="tag" style="animation-delay: 0.2s">IT Consulting</div>
                <div class="tag" style="animation-delay: 0.4s">Custom Software Development</div>
                <div class="tag" style="animation-delay: 0.6s">Digital Transformation</div>
                <div class="tag" style="animation-delay: 0.8s">Staffing Solutions</div>
                <div class="tag" style="animation-delay: 1.0s">Cloud Services</div>
            </div>
        </div>
    </section>

    <section class="bg-transparent py-6 sticky top-20 z-40 transition-all duration-300 overflow-hidden">
        <div class="mx-auto px-4">
            <div class="service-icons-bar overflow-hidden">
                <div class="icons-container flex gap-8 whitespace-nowrap animate-scroll">
                    <!-- Service Icons -->
                    <div class="service-icon group" aria-label="Managed Services">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-cogs text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Managed Services</span>
                    </div>
                    <div class="service-icon group" aria-label="Cost Optimization">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-chart-line text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Cost Optimization</span>
                    </div>
                    <div class="service-icon group" aria-label="DevOps Automation">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-code-branch text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">DevOps Automation</span>
                    </div>
                    <div class="service-icon group" aria-label="Data Analytics">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-database text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Data Analytics</span>
                    </div>
                    <div class="service-icon group" aria-label="AI Solutions">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-brain text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">AI Solutions</span>
                    </div>
                    <div class="service-icon group" aria-label="IT Staffing">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-users-cog text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">IT Staffing</span>
                    </div>
                    <div class="service-icon group" aria-label="Cloud Migration">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-cloud-upload-alt text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Cloud Migration</span>
                    </div>
                    <div class="service-icon group" aria-label="Cloud Security">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-shield-alt text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Cloud Security</span>
                    </div>
                    <!-- Duplicate for seamless looping -->
                    <div class="service-icon group" aria-label="Managed Services">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-cogs text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Managed Services</span>
                    </div>
                    <div class="service-icon group" aria-label="Cost Optimization">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-chart-line text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Cost Optimization</span>
                    </div>
                    <div class="service-icon group" aria-label="DevOps Automation">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-code-branch text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">DevOps Automation</span>
                    </div>
                    <div class="service-icon group" aria-label="Data Analytics">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-database text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Data Analytics</span>
                    </div>
                    <div class="service-icon group" aria-label="AI Solutions">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-brain text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">AI Solutions</span>
                    </div>
                    <div class="service-icon group" aria-label="IT Staffing">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-users-cog text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">IT Staffing</span>
                    </div>
                    <div class="service-icon group" aria-label="Cloud Migration">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-cloud-upload-alt text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Cloud Migration</span>
                    </div>
                    <div class="service-icon group" aria-label="Cloud Security">
                        <div
                            class="icon-circle flex items-center justify-center w-12 h-12 rounded-full bg-white/90 shadow-md transition-all duration-300 group-hover:bg-[var(--accent-color)]">
                            <i
                                class="fas fa-shield-alt text-[var(--primary-color)] text-xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700 mt-2 block text-center">Cloud Security</span>
                    </div>
                </div>
            </div>
        </div>
        <style>
        :root {
            --accent-primary: rgb(3, 30, 208);
            --accent-secondary: #FF6600;
            --primary-color: rgb(0, 31, 206);
            --accent-color: #FF6600;
        }

        .service-icons-bar {
            overflow: hidden;
        }

        .icons-container {
            display: flex;
            animation: scroll 20s linear infinite;
        }

        .service-icon {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 100px;
            flex-shrink: 0;
        }

        .icon-circle {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .service-icon span {
            display: block;
            text-align: center;
            font-size: 0.875rem;
            font-weight: 500;
            color: #374151;
            margin-top: 8px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @media (max-width: 768px) {
            .service-icon {
                min-width: 80px;
            }

            .icon-circle {
                width: 40px;
                height: 40px;
            }

            .service-icon span {
                font-size: 0.75rem;
            }

            .icons-container {
                gap: 6px;
            }
        }

        /* Additional styles retained for compatibility */
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

        /* World Map Styles */
        .map-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .region-tooltip {
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            display: none;
        }

        .map-point:hover .region-tooltip {
            display: block;
        }

        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        @keyframes fadeInTag {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        </style>
    </section>

    <section id="about" class="py-24 bg-bg-primary">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-text-primary mb-4">Who We Are</h2>
                <div class="w-24 h-1 bg-secondary mx-auto mb-6"></div>
                <p class="text-lg text-text-secondary max-w-3xl mx-auto">
                    VirtuSwift is a global leader in IT solutions and staffing services, committed to delivering
                    excellence at the speed of innovation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div
                    class="service-card p-8 bg-white rounded-xl shadow-md hover:shadow-xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in">
                    <div class="text-primary text-5xl mb-6 hover:text-secondary transition-colors duration-300">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-text-primary mb-4">Our Vision</h3>
                    <p class="text-text-secondary leading-relaxed">
                        To be the global leader in IT solutions and staffing services, empowering businesses to achieve
                        unparalleled success through virtuous innovation and swift execution.
                    </p>
                </div>

                <div
                    class="service-card p-8 bg-white rounded-xl shadow-md hover:shadow-xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in">
                    <div class="text-primary text-5xl mb-6 hover:text-secondary transition-colors duration-300">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-text-primary mb-4">Our Mission</h3>
                    <p class="text-text-secondary leading-relaxed">
                        Deliver cutting-edge technology solutions that drive business transformation. Provide expertly
                        screened talent across all tech stacks. Foster long-term partnerships through ethical practices
                        and rapid service delivery.
                    </p>
                </div>

                <div
                    class="service-card p-8 bg-white rounded-xl shadow-md hover:shadow-xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in">
                    <div class="text-primary text-5xl mb-6 hover:text-secondary transition-colors duration-300">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-text-primary mb-4">Our Philosophy</h3>
                    <p class="text-text-secondary leading-relaxed">
                        VirtuSwift operates on the principles of virtue and speed, combining moral excellence with swift
                        execution. We believe in upholding integrity, accelerating success, and innovating responsibly.
                    </p>
                </div>
            </div>

            <div class="bg-bg-secondary rounded-lg shadow-lg overflow-hidden animate-slide-in">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-8 md:p-12">
                        <h3 class="text-2xl font-bold text-text-primary mb-6">Global Presence</h3>
                        <p class="text-text-secondary mb-6">
                            With operations across 20+ countries and a team of over 1,000 experts, VirtuSwift delivers
                            localized solutions with global best practices.
                        </p>
                        <div class="grid grid-cols-2 gap-6">
                            <div
                                class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in">
                                <div class="text-3xl font-bold text-primary mb-2 count-up" data-count="500">500+</div>
                                <p class="text-text-secondary text-sm">Clients Worldwide</p>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in">
                                <div class="text-3xl font-bold text-primary mb-2 count-up" data-count="2000">2000+</div>
                                <p class="text-text-secondary text-sm">Projects Completed</p>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in">
                                <div class="text-3xl font-bold text-primary mb-2 count-up" data-count="98">98%</div>
                                <p class="text-text-secondary text-sm">Client Satisfaction</p>
                            </div>
                            <div
                                class="bg-white p-4 rounded-lg shadow-md hover:shadow-xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in">
                                <div class="text-3xl font-bold text-primary mb-2 count-up" data-count="24">24</div>
                                <p class="text-text-secondary text-sm">Support</p>
                            </div>
                        </div>
                    </div>
                    <div class="world-map p-6 animate-slide-in">
                        <div class="map-container relative">
                            <svg width="100%" height="100%" viewBox="0 0 1000 500" preserveAspectRatio="xMidYMid meet">
                                <!-- North America -->
                                <path class="continent-path"
                                    d="M181,114 l-6,22 l-13,0 l-15,6 l-14,12 l6,10 l-10,35 l4,23 l7,17 l8,4 l13,-1 l8,-7 l18,19 l11,0 l13,-8 l5,4 l22,0 l32,11 l39,8 l15,-3 l5,5 l9,-2 l13,4 l7,-11 l13,-4 l13,8 l5,-2 l0,-11 l-5,-8 l-10,-8 l-11,-14 l-10,-24 l-13,-8 l-1,-5 l-9,-17 l-13,-8 l-10,-15 l1,-15 l-10,-16 l-13,-12 l-11,-16 l-4,-14 l-13,5 l-7,7 l-2,-13 l-15,-19 l-12,-4 l-12,-19 l-13,9 l-6,9 l-6,-1 l-6,-9 l-8,3 l-9,-4 l-12,1 l-7,-3 l-7,15 l-11,8 l-3,11 l-12,1 l-5,16 z"
                                    fill="var(--accent-secondary)" fill-opacity="0.2" stroke="var(--accent-primary)"
                                    stroke-width="1" />
                                <!-- South America -->
                                <path class="continent-path"
                                    d="M275,273 l5,7 l-1,9 l4,11 l7,5 l4,14 l-4,12 l-9,12 l-10,4 l-4,8 l-7,31 l7,10 l-1,10 l-5,12 l9,20 l13,8 l2,5 l-2,17 l-9,10 l3,27 l-8,25 l1,14 l-11,7 l-11,-7 l-7,-17 l-9,2 l-4,-9 l-7,6 l-14,-13 l-5,-19 l-8,-13 l3,-19 l-5,-11 l-9,-2 l6,-17 l-8,-4 l-9,-15 l2,-24 l-4,-20 l2,-16 l-8,-22 l5,-16 l-7,-14 l8,-11 l-5,-10 l9,-18 l10,-6 l5,-13 l-4,-11 l8,-3 l-3,-10 l13,0 l2,-13 l9,-1 l17,15 l10,1 l3,6 l9,0 l5,8 l13,3 l13,-8 z"
                                    fill="var(--accent-secondary)" fill-opacity="0.2" stroke="var(--accent-primary)"
                                    stroke-width="1" />
                                <!-- Europe -->
                                <path class="continent-path"
                                    d="M491,148 l7,5 l19,-1 l3,-3 l14,3 l18,0 l10,-3 l12, Vaughan,5 l14,2 l13,-5 l1,9 l-4,7 l6,4 l14,- 13,-2 l3,9 l-9,13 l-3,10 l-12,6 l-14,-4 l-7,-7 l-5,7 l-11,2 l-9,6 l-2,11 l-10,2 l-13,-10 l-10,3 l-7,-3 l-7,8 l-14,-1 l-2,-7 l-10,-6 l3,-10 l-9,-6 l-7,2 l-5,-8 l-2,-9 l8,-6 l1,-9 l-7,-5 l5,-8 l-6,-3 l0,-7 l-7,-4 l0,-8 l9,-6 l1,-6 l-7,-8 l12,-15 l8,-4 l13,8 l13,-6 z"
                                    fill="var(--accent-secondary)" fill-opacity="0.2" stroke="var(--accent-primary)"
                                    stroke-width="1" />
                                <!-- Africa -->
                                <path class="continent-path"
                                    d="M525,262 l-11,-10 l-11,7 l-3,-5 l-11,-2 l-3,-9 l-9,-3 l-19,20 l-6,-6 l-3,-20 l-18,-14 l-1,-14 l6,-19 l-5,-12 l3,-12 l-3,-24 l5,-8 l10,3 l11,-5 l16,10 l4,-4 l15,0 l6,-7 l14,2 l4,7 l11,0 l10,7 l10,20 l17,16 l8,12 l1,21 l-2,22 l5,14 l-4,25 l12,6 l14,-4 l-7,-7 l-5,7 l-11,2 l-9,6 l-2,11 l-10,2 l-13,-10 l-10,3 l-7,-3 l-7,8 l-14,-1 l-2,-7 l-10,-6 l3,-10 l-9,-6 l-7,2 l-5,-8 l-2,-9 l8,-6 l1,-9 l-7,-5 l5,-8 l-6,-3 l0,-7 l-7,-4 l0,-8 l9,-6 l1,-6 l-7,-8 l12,-15 l8,-4 l13,8 l13,-6 z"
                                    fill="var(--accent-secondary)" fill-opacity="0.2" stroke="var(--accent-primary)"
                                    stroke-width="1" />
                                <!-- Asia -->
                                <path class="continent-path"
                                    d="M682,128 l13,14 l14,-7 l10,8 l17,6 l19,-10 l12,13 l18,4 l14,11 l-3,11 l11,9 l17,1 l7,12 l11,0 l0,13 l9,8 l-5,7 l-13,1 l-15,7 l-11,12 l-16,8 l6,12 l-4,21 l-9,0 l1,13 l8,17 l-4,9 l6,14 l14,0 l-2,17 l-14,1 l-6,14 l-11,-13 l-13,8 l-8,-4 l-11,9 l-10,-8 l-30,12 l-12,-10 l-16,0 l-24,-9 l-18,8 l-7,-6 l3,-17 l-13,-17 l-14,-9 l-18,5 l-17,-10 l-12,-24 l8,-19 l-5,-11 l5,-8 l12,8 l8,-9 l10,-1 l10,-17 l0,-16 l-14,-19 l0,-10 l-10,-10 l12,-12 l-5,-6 l1,-16 l12,-17 l12,-2 l9,5 l33,-12 l11,4 l16,-6 l5,-12 l10,-4 z"
                                    fill="var(--accent-secondary)" fill-opacity="0.2" stroke="var(--accent-primary)"
                                    stroke-width="1" />
                                <!-- Australia -->
                                <path class="continent-path"
                                    d="M829,364 l15,-18 l9,7 l10,-1 l10,8 l2,12 l-3,10 l5,7 l-8,15 l-10,4 l-23,-7 l-11,-18 l4,-19 z M789,339 l0,-22 l28,-17 l19,5 l10,7 l-5,10 l-14,5 l-13,15 l-7,19 l-18,-22 z"
                                    fill="var(--accent-secondary)" fill-opacity="0.2" stroke="var(--accent-primary)"
                                    stroke-width="1" />
                            </svg>

                            <!-- Map points with tooltips -->
                            <div class="map-point absolute w-3 h-3 bg-primary rounded-full transform -translate-x-1/2 -translate-y-1/2 hover:bg-secondary transition-colors duration-300 pulse"
                                style="top: 30%; left: 20%;">
                                <div
                                    class="region-tooltip bg-white p-2 rounded-lg shadow-lg text-center opacity-0 transition-opacity duration-300">
                                    <div class="region-name font-semibold text-text-primary text-sm">North America</div>
                                    <div class="client-count text-text-secondary text-xs">185 clients</div>
                                </div>
                            </div>
                            <div class="map-point absolute w-3 h-3 bg-primary rounded-full transform -translate-x-1/2 -translate-y-1/2 hover:bg-secondary transition-colors duration-300 pulse"
                                style="top: 40%; left: 45%;">
                                <div
                                    class="region-tooltip bg-white p-2 rounded-lg shadow-lg text-center opacity-0 transition-opacity duration-300">
                                    <div class="region-name font-semibold text-text-primary text-sm">Europe</div>
                                    <div class="client-count text-text-secondary text-xs">142 clients</div>
                                </div>
                            </div>
                            <div class="map-point absolute w-3 h-3 bg-primary rounded-full transform -translate-x-1/2 -translate-y-1/2 hover:bg-secondary transition-colors duration-300 pulse"
                                style="top: 55%; left: 30%;">
                                <div
                                    class="region-tooltip bg-white p-2 rounded-lg shadow-lg text-center opacity-0 transition-opacity duration-300">
                                    <div class="region-name font-semibold text-text-primary text-sm">South America</div>
                                    <div class="client-count text-text-secondary text-xs">78 clients</div>
                                </div>
                            </div>
                            <div class="map-point absolute w-3 h-3 bg-primary rounded-full transform -translate-x-1/2 -translate-y-1/2 hover:bg-secondary transition-colors duration-300 pulse"
                                style="top: 35%; left: 70%;">
                                <div
                                    class="region-tooltip bg-white p-2 rounded-lg shadow-lg text-center opacity-0 transition-opacity duration-300">
                                    <div class="region-name font-semibold text-text-primary text-sm">Asia</div>
                                    <div class="client-count text-text-secondary text-xs">165 clients</div>
                                </div>
                            </div>
                            <div class="map-point absolute w-3 h-3 bg-primary rounded-full transform -translate-x-1/2 -translate-y-1/2 hover:bg-secondary transition-colors duration-300 pulse"
                                style="top: 65%; left: 75%;">
                                <div
                                    class="region-tooltip bg-white p-2 rounded-lg shadow-lg text-center opacity-0 transition-opacity duration-300">
                                    <div class="region-name font-semibold text-text-primary text-sm">Australia</div>
                                    <div class="client-count text-text-secondary text-xs">45 clients</div>
                                </div>
                            </div>
                            <div class="map-point absolute w-3 h-3 bg-primary rounded-full transform -translate-x-1/2 -translate-y-1/2 hover:bg-secondary transition-colors duration-300 pulse"
                                style="top: 50%; left: 55%;">
                                <div
                                    class="region-tooltip bg-white p-2 rounded-lg shadow-lg text-center opacity-0 transition-opacity duration-300">
                                    <div class="region-name font-semibold text-text-primary text-sm">Africa</div>
                                    <div class="client-count text-text-secondary text-xs">55 clients</div>
                                </div>
                            </div>
                        </div>

                        <!-- Client count summary -->
                        <div class="client-summary text-center">
                            <p class="font-bold text-text-primary">
                                Total of <span class="client-total text-primary font-semibold">670</span> clients
                                worldwide across 6 continents
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SAP & Cloud Migration Section -->
    <section class="py-20 section-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-4">SAP & Cloud Migration Experts</h2>
                <div class="w-24 h-1 bg-[var(--accent-secondary)] mx-auto mb-6"></div>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    We are industry leaders in Cloud Architecture for SAP deployments, providing High Availability,
                    implementing industry regulations, and complete disaster recovery solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="service-card p-6 text-center animate-slide-in">
                    <div
                        class="w-16 h-16 mx-auto bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-exchange-alt text-[var(--accent-primary)] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">SAP Migration</h3>
                    <p class="text-[var(--text-secondary)]">
                        Seamless transfer of your existing SAP systems to a new environment, such as the cloud or an
                        upgraded version for better scalability and performance.
                    </p>
                </div>

                <div class="service-card p-6 text-center animate-slide-in">
                    <div
                        class="w-16 h-16 mx-auto bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-cloud-upload-alt text-[var(--accent-primary)] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">Hybrid Cloud Solutions</h3>
                    <p class="text-[var(--text-secondary)]">
                        Custom-tailored combination of private and public cloud infrastructure to meet your specific
                        business requirements and security needs.
                    </p>
                </div>

                <div class="service-card p-6 text-center animate-slide-in">
                    <div
                        class="w-16 h-16 mx-auto bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-shield-alt text-[var(--accent-primary)] text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">Data Security</h3>
                    <p class="text-[var(--text-secondary)]">
                        Comprehensive security protocols that ensure the protection and integrity of your data during
                        migration and in ongoing operations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-[var(--bg-primary)]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-4">Our Services</h2>
                <div class="w-24 h-1 bg-[var(--accent-secondary)] mx-auto mb-6"></div>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Comprehensive IT solutions tailored to accelerate your digital transformation journey.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card animate-slide-in">
                    <div class="h-2 bg-[var(--button-bg)]"></div>
                    <div class="p-6">
                        <div
                            class="w-16 h-16 bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-cloud text-[var(--button-bg)] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">Cloud Services</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Seamless cloud migration, optimization, and management across AWS, Azure, and Google Cloud
                            platforms.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Multi-cloud strategies</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Cloud security & compliance</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Cost optimization</span>
                            </li>
                        </ul>
                        <a href="contact.php"
                            class="text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium inline-flex items-center">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="service-card animate-slide-in">
                    <div class="h-2 bg-[var(--button-bg)]"></div>
                    <div class="p-6">
                        <div
                            class="w-16 h-16 bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-brain text-[var(--button-bg)] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">AI & Machine Learning</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Custom AI solutions that transform business processes and deliver actionable insights.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Predictive analytics</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Natural language processing</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Computer vision solutions</span>
                            </li>
                        </ul>
                        <a href="contact.php"
                            class="text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium inline-flex items-center">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="service-card animate-slide-in">
                    <div class="h-2 bg-[var(--button-bg)]"></div>
                    <div class="p-6">
                        <div
                            class="w-16 h-16 bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-users-cog text-[var(--button-bg)] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">IT Staffing</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Connect with top tech talent perfectly matched to your project requirements and company
                            culture.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Contract & permanent placement</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Staff augmentation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Executive search</span>
                            </li>
                        </ul>
                        <a href="#"
                            class="text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium inline-flex items-center">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="service-card animate-slide-in">
                    <div class="h-2 bg-[var(--button-bg)]"></div>
                    <div class="p-6">
                        <div
                            class="w-16 h-16 bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-cogs text-[var(--button-bg)] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">Managed IT Services</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Comprehensive IT management that minimizes costs and optimizes your SAP/IT investment
                            through proven solutions.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">24/7 monitoring & support</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Infrastructure management</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Proactive issue resolution</span>
                            </li>
                        </ul>
                        <a href="#"
                            class="text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium inline-flex items-center">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="service-card animate-slide-in">
                    <div class="h-2 bg-[var(--button-bg)]"></div>
                    <div class="p-6">
                        <div
                            class="w-16 h-16 bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-shield-alt text-[var(--button-bg)] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">Cybersecurity</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Comprehensive security solutions to protect your digital assets and ensure regulatory
                            compliance.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Security assessment & planning</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Managed security services</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Incident response</span>
                            </li>
                        </ul>
                        <a href="#"
                            class="text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium inline-flex items-center">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="service-card animate-slide-in">
                    <div class="h-2 bg-[var(--button-bg)]"></div>
                    <div class="p-6">
                        <div
                            class="w-16 h-16 bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-code-branch text-[var(--button-bg)] text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">DevOps Automation</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Streamline your development lifecycle with CI/CD pipelines and container orchestration.
                        </p>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">CI/CD implementation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Container orchestration</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-[var(--accent-primary)] mt-1 mr-2"></i>
                                <span class="text-[var(--text-secondary)]">Infrastructure as code</span>
                            </li>
                        </ul>
                        <a href="#"
                            class="text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium inline-flex items-center">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="service.html"
                    class="inline-block bg-[var(--button-bg)] hover:bg-[var(--button-hover-bg)] text-[var(--button-text)] px-8 py-3 rounded-lg transition duration-300 font-medium">
                    View All Services <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 section-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-4">Frequently Asked Questions</h2>
                <div class="w-24 h-1 bg-[var(--accent-secondary)] mx-auto mb-6"></div>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Can't find the answer you're looking for? Reach out to our customer support team.
                </p>
            </div>

            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- FAQ Pair 1 -->
                    <div class="bg-[var(--bg-primary)] rounded-lg shadow-md overflow-hidden animate-slide-in">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(1)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-[var(--text-primary)]">What is SAP migration, and
                                    why is it important?</h3>
                                <i class="fas fa-chevron-down text-[var(--text-secondary)] transition-transform duration-300"
                                    id="faq-arrow-1"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 py-4 text-[var(--text-secondary)] text-sm" id="faq-content-1">
                            <p>SAP migration involves transferring your SAP systems to a new environment, like the cloud
                                or an upgraded version. It ensures scalability, performance, and cost optimization,
                                keeping your business competitive with modern technologies.</p>
                        </div>
                    </div>

                    <div class="bg-[var(--bg-primary)] rounded-lg shadow-md overflow-hidden animate-slide-in">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(2)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-[var(--text-primary)]">How does cloud migration
                                    benefit my organization?</h3>
                                <i class="fas fa-chevron-down text-[var(--text-secondary)] transition-transform duration-300"
                                    id="faq-arrow-2"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 py-4 text-[var(--text-secondary)] text-sm" id="faq-content-2">
                            <p>Cloud migration reduces costs with pay-as-you-go models, increases scalability, improves
                                accessibility for remote teams, enhances security, and provides automatic updates
                                without downtime.</p>
                        </div>
                    </div>

                    <!-- FAQ Pair 2 -->
                    <div class="bg-[var(--bg-primary)] rounded-lg shadow-md overflow-hidden animate-slide-in">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(3)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-[var(--text-primary)]">What cloud platforms do you
                                    support?</h3>
                                <i class="fas fa-chevron-down text-[var(--text-secondary)] transition-transform duration-300"
                                    id="faq-arrow-3"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 py-4 text-[var(--text-secondary)] text-sm" id="faq-content-3">
                            <p>We support AWS, Microsoft Azure, Google Cloud Platform, and IBM Cloud. Our experts help
                                you choose the best platform based on your business needs and budget.</p>
                        </div>
                    </div>

                    <div class="bg-[var(--bg-primary)] rounded-lg shadow-md overflow-hidden animate-slide-in">
                        <button class="w-full px-6 py-4 text-left focus:outline-none" onclick="toggleFAQ(4)">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-[var(--text-primary)]">How do you ensure data
                                    security during migration?</h3>
                                <i class="fas fa-chevron-down text-[var(--text-secondary)] transition-transform duration-300"
                                    id="faq-arrow-4"></i>
                            </div>
                        </button>
                        <div class="hidden px-6 py-4 text-[var(--text-secondary)] text-sm" id="faq-content-4">
                            <p>We use data encryption, secure VPNs, access controls, continuous monitoring, and comply
                                with regulations like GDPR, HIPAA, or SOC 2 to ensure your data's security.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Case Studies Section -->
    <section id="case-studies" class="py-24 bg-[var(--bg-primary)]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-4">Case Studies</h2>
                <div class="w-24 h-1 bg-[var(--accent-secondary)] mx-auto mb-6"></div>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Real-world success stories of how our solutions transformed businesses.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="case-study-card animate-slide-in">
                    <div class="h-48 bg-[var(--bg-secondary)] flex items-center justify-center">
                        <i class="fas fa-hospital text-6xl text-[var(--text-secondary)]"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-[var(--bg-secondary)] text-[var(--accent-primary)] text-xs font-medium px-3 py-1 rounded-full">Healthcare</span>
                            <span
                                class="bg-[var(--bg-secondary)] text-[var(--text-secondary)] text-xs font-medium px-3 py-1 rounded-full ml-2">AI
                                Implementation</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">MediCorp Healthcare Solutions</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Implemented an AI-driven diagnostic assistance system, reducing misdiagnosis rates by 32%
                            and improving patient outcomes.
                        </p>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-[var(--accent-primary)] font-medium">Results:</span>
                            <span class="text-[var(--accent-primary)] font-bold">+45% Efficiency</span>
                        </div>
                        <a href="#"
                            class="mt-4 inline-block text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium">
                            Read Full Case Study <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="case-study-card animate-slide-in">
                    <div class="h-48 bg-[var(--bg-secondary)] flex items-center justify-center">
                        <i class="fas fa-university text-6xl text-[var(--text-secondary)]"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-[var(--bg-secondary)] text-[var(--accent-primary)] text-xs font-medium px-3 py-1 rounded-full">Finance</span>
                            <span
                                class="bg-[var(--bg-secondary)] text-[var(--text-secondary)] text-xs font-medium px-3 py-1 rounded-full ml-2">Cloud
                                Migration</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">Global Financial Trust</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Executed a zero-downtime migration of legacy systems to a secure cloud environment,
                            improving performance and reducing costs.
                        </p>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-[var(--accent-primary)] font-medium">Results:</span>
                            <span class="text-[var(--accent-primary)] font-bold">-37% Operating Costs</span>
                        </div>
                        <a href="#"
                            class="mt-4 inline-block text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium">
                            Read Full Case Study <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="case-study-card animate-slide-in">
                    <div class="h-48 bg-[var(--bg-secondary)] flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-6xl text-[var(--text-secondary)]"></i>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-4">
                            <span
                                class="bg-[var(--bg-secondary)] text-[var(--accent-primary)] text-xs font-medium px-3 py-1 rounded-full">Retail</span>
                            <span
                                class="bg-[var(--bg-secondary)] text-[var(--text-secondary)] text-xs font-medium px-3 py-1 rounded-full ml-2">Data
                                Analytics</span>
                        </div>
                        <h3 class="text-xl font-bold text-[var(--text-primary)] mb-3">ShopSmart Retail Chain</h3>
                        <p class="text-[var(--text-secondary)] mb-4">
                            Deployed a real-time inventory and customer behavior analytics platform, optimizing stock
                            levels and personalized marketing.
                        </p>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-[var(--accent-primary)] font-medium">Results:</span>
                            <span class="text-[var(--accent-primary)] font-bold">+28% Revenue Growth</span>
                        </div>
                        <a href="#"
                            class="mt-4 inline-block text-[var(--accent-primary)] hover:text-[var(--accent-secondary)] font-medium">
                            Read Full Case Study <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#"
                    class="inline-block bg-[var(--button-bg)] hover:bg-[var(--button-hover-bg)] text-[var(--button-text)] px-8 py-3 rounded-lg transition duration-300 font-medium">
                    View All Case Studies <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 section-gradient">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-4">What Our Clients Say</h2>
                <div class="w-24 h-1 bg-[var(--accent-secondary)] mx-auto mb-6"></div>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    Don't just take our word for it - hear from our satisfied clients.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="testimonial-card p-6 animate-slide-in">
                    <div class="text-[var(--accent-secondary)] mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-[var(--text-secondary)] mb-6 italic">
                        "VirtuSwift delivered our cloud migration project ahead of schedule and under budget. Their
                        expertise and professionalism exceeded our expectations at every stage."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-[var(--bg-primary)] rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-[var(--text-secondary)]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[var(--text-primary)]">Sarah Johnson</h4>
                            <p class="text-[var(--text-secondary)] text-sm">CTO, Global Financial Trust</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card p-6 animate-slide-in">
                    <div class="text-[var(--accent-secondary)] mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-[var(--text-secondary)] mb-6 italic">
                        "The AI solution implemented by VirtuSwift has transformed our business operations. We're now
                        able to make data-driven decisions that have measurably improved our bottom line."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-[var(--bg-primary)] rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-[var(--text-secondary)]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[var(--text-primary)]">Michael Rodriguez</h4>
                            <p class="text-[var(--text-secondary)] text-sm">CEO, MediCorp Healthcare</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card p-6 animate-slide-in">
                    <div class="text-[var(--accent-secondary)] mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <p class="text-[var(--text-secondary)] mb-6 italic">
                        "Working with VirtuSwift's staffing team was a game-changer for our IT department. They found
                        exactly the right talent we needed, and their ongoing support has been invaluable."
                    </p>
                    <div class="flex items-center">
                        <div
                            class="w-12 h-12 bg-[var(--bg-primary)] rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-user text-[var(--text-secondary)]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[var(--text-primary)]">Jennifer Lee</h4>
                            <p class="text-[var(--text-secondary)] text-sm">HR Director, ShopSmart Retail</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 bg-[var(--bg-primary)]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-4">Get in Touch</h2>
                <p class="text-lg text-[var(--text-secondary)] max-w-2xl mx-auto">
                    Have questions or ready to start your digital transformation journey? Contact our team today!
                </p>
                <!-- Contact Button -->
                <div class="mt-8">
                    <a href="#contact-form"
                        class="contact-btn inline-block px-8 py-3 text-lg font-semibold rounded-full transition-all duration-300">
                        Contact Us Now
                    </a>
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
    // Banner Animations and Rotation
    document.addEventListener('DOMContentLoaded', function() {
        // Banner 1: Particle Animation with Logo
        const setupCanvas1 = () => {
            const canvas = document.getElementById('animationCanvas1');
            if (!canvas) return;

            const ctx = canvas.getContext('2d');

            function resizeCanvas() {
                canvas.width = canvas.parentElement.offsetWidth;
                canvas.height = canvas.parentElement.offsetHeight;
            }

            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            const config = {
                particleCount: 60,
                particleSpeed: 0.5,
                particleSizes: [2, 6],
                colors: ['#3a3dc4', '#4d50d7', '#f05a28', '#f26e40'],
                trails: true,
                trailOpacity: 0.05
            };

            const BLUE = '#3a3dc4';
            const ORANGE = '#f05a28';
            let particles = [];

            function createParticles() {
                particles = [];
                for (let i = 0; i < config.particleCount; i++) {
                    const size = config.particleSizes[0] + Math.random() * (config.particleSizes[1] - config
                        .particleSizes[0]);
                    const color = config.colors[Math.floor(Math.random() * config.colors.length)];
                    particles.push({
                        x: Math.random() * canvas.width,
                        y: Math.random() * canvas.height,
                        size: size,
                        color: color,
                        speedX: (Math.random() - 0.5) * config.particleSpeed,
                        speedY: (Math.random() - 0.5) * config.particleSpeed,
                        life: 0.7 + Math.random() * 0.3,
                        maxConnections: 5,
                        connectionDistance: 150
                    });
                }
            }

            function drawLogo(x, y, scale) {
                ctx.save();
                ctx.translate(x, y);
                ctx.scale(scale, scale);
                ctx.beginPath();
                ctx.moveTo(0, 0);
                ctx.lineTo(80, 50);
                ctx.lineTo(20, -30);
                ctx.closePath();
                ctx.fillStyle = ORANGE;
                ctx.fill();
                ctx.beginPath();
                ctx.moveTo(20, -30);
                ctx.lineTo(80, 50);
                ctx.lineTo(120, -50);
                ctx.closePath();
                ctx.fillStyle = BLUE;
                ctx.fill();
                ctx.restore();
            }

            function updateParticles() {
                for (let i = 0; i < particles.length; i++) {
                    const p = particles[i];
                    p.x += p.speedX;
                    p.y += p.speedY;
                    if (p.x < 0 || p.x > canvas.width) p.speedX *= -1;
                    if (p.y < 0 || p.y > canvas.height) p.speedY *= -1;
                    p.speedX += (Math.random() - 0.5) * 0.01;
                    p.speedY += (Math.random() - 0.5) * 0.01;
                    p.speedX = Math.max(-config.particleSpeed, Math.min(config.particleSpeed, p.speedX));
                    p.speedY = Math.max(-config.particleSpeed, Math.min(config.particleSpeed, p.speedY));
                }
            }

            function drawParticles() {
                if (config.trails) {
                    ctx.fillStyle = `rgba(58, 61, 196, ${config.trailOpacity})`;
                    ctx.fillRect(0, 0, canvas.width, canvas.height);
                } else {
                    ctx.clearRect(0, 0, canvas.width, canvas.height);
                }

                for (let i = 0; i < particles.length; i++) {
                    const p = particles[i];
                    ctx.beginPath();
                    ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
                    ctx.fillStyle = p.color;
                    ctx.fill();
                    let connectCount = 0;
                    for (let j = i + 1; j < particles.length; j++) {
                        if (connectCount >= p.maxConnections) break;
                        const p2 = particles[j];
                        const dx = p.x - p2.x;
                        const dy = p.y - p2.y;
                        const distance = Math.sqrt(dx * dx + dy * dy);
                        if (distance < p.connectionDistance) {
                            connectCount++;
                            const opacity = 1 - (distance / p.connectionDistance);
                            ctx.beginPath();
                            ctx.moveTo(p.x, p.y);
                            ctx.lineTo(p2.x, p2.y);
                            ctx.strokeStyle = `rgba(240, 90, 40, ${opacity * 0.2})`;
                            ctx.lineWidth = 1;
                            ctx.stroke();
                        }
                    }
                }

                const logoX = canvas.width * 0.75;
                const logoY = canvas.height * 0.5;
                const time = Date.now() * 0.001;
                const scale = 0.7 + Math.sin(time * 0.5) * 0.05;
                drawLogo(logoX, logoY, scale);
            }

            function animate1() {
                updateParticles();
                drawParticles();
                requestAnimationFrame(animate1);
            }

            createParticles();
            animate1();
        };

        // Banner 2: Node Network with Circuit Paths
        const setupCanvas2 = () => {
            const canvas = document.getElementById('animationCanvas2');
            if (!canvas) return;

            const ctx = canvas.getContext('2d');

            function resizeCanvas() {
                canvas.width = canvas.parentElement.offsetWidth;
                canvas.height = canvas.parentElement.offsetHeight;
            }

            resizeCanvas();
            window.addEventListener('resize', resizeCanvas);

            const BLUE = '#3a3dc4';
            const LIGHT_BLUE = '#5658d0';
            const ORANGE = '#f05a28';
            const LIGHT_ORANGE = '#f47950';

            class Node {
                constructor(x, y) {
                    this.x = x;
                    this.y = y;
                    this.size = 2 + Math.random() * 3;
                    this.speedX = (Math.random() - 0.5) * 0.7;
                    this.speedY = (Math.random() - 0.5) * 0.7;
                    this.lastX = x;
                    this.lastY = y;
                    this.color = Math.random() > 0.5 ? BLUE : ORANGE;
                    this.glowing = Math.random() > 0.7;
                    this.glowIntensity = 0;
                    this.glowDirection = 0.02;
                }

                update() {
                    this.lastX = this.x;
                    this.lastY = this.y;
                    this.x += this.speedX;
                    this.y += this.speedY;
                    const padding = 50;
                    if (this.x < padding || this.x > canvas.width - padding) {
                        this.speedX *= -1;
                        this.x = this.x < padding ? padding : canvas.width - padding;
                    }
                    if (this.y < padding || this.y > canvas.height - padding) {
                        this.speedY *= -1;
                        this.y = this.y < padding ? padding : canvas.height - padding;
                    }
                    this.speedX += (Math.random() - 0.5) * 0.03;
                    this.speedY += (Math.random() - 0.5) * 0.03;
                    const maxSpeed = 0.8;
                    this.speedX = Math.max(-maxSpeed, Math.min(maxSpeed, this.speedX));
                    this.speedY = Math.max(-maxSpeed, Math.min(maxSpeed, this.speedY));
                    if (this.glowing) {
                        this.glowIntensity += this.glowDirection;
                        if (this.glowIntensity > 1 || this.glowIntensity < 0) {
                            this.glowDirection *= -1;
                        }
                    }
                }

                draw() {
                    if (this.glowing) {
                        ctx.beginPath();
                        ctx.arc(this.x, this.y, this.size * 3, 0, Math.PI * 2);
                        const glowColor = this.color === BLUE ? LIGHT_BLUE : LIGHT_ORANGE;
                        ctx.fillStyle = `rgba(${hexToRgb(glowColor)}, ${this.glowIntensity * 0.15})`;
                        ctx.fill();
                    }
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fillStyle = this.color;
                    ctx.fill();
                }
            }

            function hexToRgb(hex) {
                hex = hex.replace('#', '');
                const r = parseInt(hex.substring(0, 2), 16);
                const g = parseInt(hex.substring(2, 4), 16);
                const b = parseInt(hex.substring(4, 6), 16);
                return `${r}, ${g}, ${b}`;
            }

            const nodeCount = 40;
            const nodes = [];
            const connectionDistance = 150;
            for (let i = 0; i < nodeCount; i++) {
                const x = Math.random() * canvas.width;
                const y = Math.random() * canvas.height;
                nodes.push(new Node(x, y));
            }

            class CircuitPath {
                constructor() {
                    this.reset();
                }

                reset() {
                    this.pathPoints = [];
                    this.direction = Math.random() > 0.5 ? 'horizontal' : 'vertical';
                    if (this.direction === 'horizontal') {
                        const y = Math.random() * canvas.height;
                        this.startX = -50;
                        this.startY = y;
                        let currentX = this.startX;
                        while (currentX < canvas.width + 100) {
                            this.pathPoints.push({
                                x: currentX,
                                y: y + (Math.random() - 0.5) * 100
                            });
                            currentX += 30 + Math.random() * 60;
                        }
                    } else {
                        const x = Math.random() * canvas.width;
                        this.startX = x;
                        this.startY = -50;
                        let currentY = this.startY;
                        while (currentY < canvas.height + 100) {
                            this.pathPoints.push({
                                x: x + (Math.random() - 0.5) * 100,
                                y: currentY
                            });
                            currentY += 30 + Math.random() * 60;
                        }
                    }
                    this.progress = 0;
                    this.speed = 0.005 + Math.random() * 0.008;
                    this.color = Math.random() > 0.5 ? ORANGE : BLUE;
                    this.lineWidth = 1 + Math.random() * 1.5;
                    this.active = true;
                }

                update() {
                    this.progress += this.speed;
                    if (this.progress >= 1) {
                        this.active = false;
                    }
                }

                draw() {
                    const visiblePoints = Math.floor(this.pathPoints.length * this.progress);
                    if (visiblePoints <= 1) return;
                    ctx.beginPath();
                    ctx.moveTo(this.pathPoints[0].x, this.pathPoints[0].y);
                    for (let i = 1; i < visiblePoints; i++) {
                        ctx.lineTo(this.pathPoints[i].x, this.pathPoints[i].y);
                    }
                    ctx.strokeStyle = this.color;
                    ctx.lineWidth = this.lineWidth;
                    ctx.stroke();
                    const pulsePoint = Math.floor(visiblePoints * 0.8);
                    if (pulsePoint > 0 && pulsePoint < this.pathPoints.length) {
                        const point = this.pathPoints[pulsePoint];
                        ctx.beginPath();
                        ctx.arc(point.x, point.y, 3 + Math.sin(Date.now() * 0.01) * 2, 0, Math.PI * 2);
                        ctx.fillStyle = this.color === BLUE ? LIGHT_BLUE : LIGHT_ORANGE;
                        ctx.fill();
                    }
                }
            }

            const circuitPaths = [];
            const maxCircuitPaths = 5;

            function addCircuitPath() {
                if (circuitPaths.length < maxCircuitPaths) {
                    circuitPaths.push(new CircuitPath());
                }
            }
            for (let i = 0; i < 3; i++) {
                addCircuitPath();
            }
            setInterval(() => {
                if (Math.random() > 0.6) {
                    addCircuitPath();
                }
            }, 2000);

            function drawLogoShape(x, y, scale, rotation) {
                ctx.save();
                ctx.translate(x, y);
                ctx.rotate(rotation);
                ctx.scale(scale, scale);
                ctx.beginPath();
                ctx.moveTo(-30, -20);
                ctx.lineTo(0, 20);
                ctx.lineTo(30, -20);
                ctx.closePath();
                ctx.fillStyle = ORANGE;
                ctx.fill();
                ctx.beginPath();
                ctx.moveTo(0, -20);
                ctx.lineTo(30, 20);
                ctx.lineTo(60, -20);
                ctx.closePath();
                ctx.fillStyle = BLUE;
                ctx.fill();
                ctx.restore();
            }

            const logoShapes = [];
            const shapesCount = 8;
            for (let i = 0; i < shapesCount; i++) {
                logoShapes.push({
                    x: Math.random() * canvas.width,
                    y: Math.random() * canvas.height,
                    scale: 0.1 + Math.random() * 0.3,
                    speedX: (Math.random() - 0.5) * 0.5,
                    speedY: (Math.random() - 0.5) * 0.5,
                    rotation: Math.random() * Math.PI * 2,
                    rotationSpeed: (Math.random() - 0.5) * 0.01,
                    opacity: 0.1 + Math.random() * 0.2
                });
            }

            function updateLogoShapes() {
                for (let shape of logoShapes) {
                    shape.x += shape.speedX;
                    shape.y += shape.speedY;
                    shape.rotation += shape.rotationSpeed;
                    if (shape.x < -100) shape.x = canvas.width + 100;
                    if (shape.x > canvas.width + 100) shape.x = -100;
                    if (shape.y < -100) shape.y = canvas.height + 100;
                    if (shape.y > canvas.height + 100) shape.y = -100;
                }
            }

            function drawLogoShapes() {
                for (let shape of logoShapes) {
                    ctx.globalAlpha = shape.opacity;
                    drawLogoShape(shape.x, shape.y, shape.scale, shape.rotation);
                }
                ctx.globalAlpha = 1;
            }

            function animate2() {
                const gradient = ctx.createLinearGradient(0, 0, canvas.width, canvas.height);
                gradient.addColorStop(0, '#1c1c38');
                gradient.addColorStop(1, '#232342');
                ctx.fillStyle = gradient;
                ctx.fillRect(0, 0, canvas.width, canvas.height);

                drawLogoShapes();

                for (let i = 0; i < nodes.length; i++) {
                    for (let j = i + 1; j < nodes.length; j++) {
                        const dx = nodes[i].x - nodes[j].x;
                        const dy = nodes[i].y - nodes[j].y;
                        const distance = Math.sqrt(dx * dx + dy * dy);
                        if (distance < connectionDistance) {
                            const opacity = (1 - distance / connectionDistance) * 0.2;
                            ctx.beginPath();
                            ctx.moveTo(nodes[i].x, nodes[i].y);
                            ctx.lineTo(nodes[j].x, nodes[j].y);
                            let connectionColor = nodes[i].color === nodes[j].color ? nodes[i].color :
                                '#a54ad1';
                            ctx.strokeStyle = `rgba(${hexToRgb(connectionColor)}, ${opacity})`;
                            ctx.lineWidth = 1;
                            ctx.stroke();
                        }
                    }
                }

                for (let i = circuitPaths.length - 1; i >= 0; i--) {
                    circuitPaths[i].update();
                    circuitPaths[i].draw();
                    if (!circuitPaths[i].active) {
                        circuitPaths.splice(i, 1);
                    }
                }

                for (let node of nodes) {
                    node.update();
                    node.draw();
                }

                updateLogoShapes();
                requestAnimationFrame(animate2);
            }

            animate2();
        };

        // Initialize animations
        setupCanvas1();
        setupCanvas2();

        // Banner rotation
        const banners = document.querySelectorAll('.banner');
        let currentBannerIndex = 0;

        function rotateBanners() {
            banners.forEach(banner => banner.classList.remove('active'));
            currentBannerIndex = (currentBannerIndex + 1) % banners.length;
            banners[currentBannerIndex].classList.add('active');
        }

        banners[0].classList.add('active');
        setInterval(rotateBanners, 7000);

        // Handle window resize
        window.addEventListener('resize', () => {
            const canvases = document.querySelectorAll('canvas');
            canvases.forEach(canvas => {
                canvas.width = canvas.parentElement.offsetWidth;
                canvas.height = canvas.parentElement.offsetHeight;
            });
            setupCanvas1();
            setupCanvas2();
        });
    });
    // FAQ Toggle Functionality
    function toggleFAQ(id) {
        const content = document.getElementById(`faq-content-${id}`);
        const arrow = document.getElementById(`faq-arrow-${id}`);

        // Toggle the active class for content
        content.classList.toggle('active');

        // Toggle the active class for the arrow to rotate it
        arrow.classList.toggle('active');
    }
    // Smooth scrolling for contact button
    document.querySelector('.contact-btn').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
    document.documentElement.style.setProperty('--accent-primary-rgb', '59, 130, 246');
    // Count-up animation for stats
    document.querySelectorAll('.count-up').forEach(element => {
        const target = parseInt(element.getAttribute('data-count'));
        let count = 0;
        const increment = target / 100;
        const updateCount = () => {
            if (count < target) {
                count += increment;
                element.textContent = Math.ceil(count) + (element.textContent.includes('%') ? '%' : '');
                requestAnimationFrame(updateCount);
            } else {
                element.textContent = target + (element.textContent.includes('%') ? '%' : '');
            }
        };
        updateCount();
    });
    </script>
</body>

</html>