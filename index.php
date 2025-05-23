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

    /* Add FAQ Section Styles */
    .faq-section {
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        padding: 4rem 0;
    }

    .faq-container {
        max-width: 800px;
        margin: 0 auto;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        overflow: hidden;
    }

    .faq-header {
        text-align: center;
        margin-bottom: 3rem;
    }

    .faq-search {
        max-width: 600px;
        margin: 0 auto 2rem;
        position: relative;
    }

    .faq-search input {
        width: 100%;
        padding: 1rem 1rem 1rem 3rem;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .faq-search input:focus {
        outline: none;
        border-color: #FF6600;
        box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.1);
    }

    .faq-search i {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #9CA3AF;
        font-size: 1.2rem;
    }

    .faq-categories {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .faq-category {
        padding: 0.5rem 1.5rem;
        background: white;
        border: 1px solid #e5e7eb;
        border-radius: 25px;
        font-size: 0.9rem;
        color: #4B5563;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .faq-category:hover,
    .faq-category.active {
        background: #FF6600;
        color: white;
        border-color: #FF6600;
        transform: translateY(-1px);
    }

    .faq-item {
        border-bottom: 1px solid #e5e7eb;
    }

    .faq-question {
        padding: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background: rgba(255, 102, 0, 0.03);
    }

    .faq-question h3 {
        font-size: 1.1rem;
        font-weight: 500;
        color: #1F2937;
        transition: color 0.3s ease;
    }

    .faq-question:hover h3 {
        color: #FF6600;
    }

    .faq-icon {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: #f3f4f6;
        transition: all 0.3s ease;
    }

    .faq-question:hover .faq-icon {
        background: #FF6600;
    }

    .faq-question:hover .faq-icon i {
        color: white;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        padding: 0 1.5rem;
        color: #4B5563;
        background: rgba(249, 250, 251, 0.5);
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 1000px;
        padding: 1.5rem;
    }

    .faq-item.active .faq-icon {
        background: #FF6600;
        transform: rotate(180deg);
    }

    .faq-item.active .faq-icon i {
        color: white;
    }

    .faq-answer p {
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .faq-answer ul,
    .faq-answer ol {
        margin: 1rem 0;
        padding-left: 1.5rem;
    }

    .faq-answer ul {
        list-style-type: disc;
    }

    .faq-answer ol {
        list-style-type: decimal;
    }

    .faq-answer li {
        margin: 0.5rem 0;
    }

    .faq-answer a {
        color: #FF6600;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .faq-answer a:hover {
        text-decoration: underline;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .faq-item.active .faq-answer {
        animation: slideDown 0.3s ease forwards;
    }

    /* Enhanced FAQ Styles */
    .faq-section {
        background: linear-gradient(135deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
    }

    .floating-shape {
        position: absolute;
        width: 300px;
        height: 300px;
        background: linear-gradient(45deg, var(--accent-primary), var(--accent-secondary));
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.1;
        animation: float 20s infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translate(0, 0) rotate(0deg);
        }

        25% {
            transform: translate(50px, 50px) rotate(90deg);
        }

        50% {
            transform: translate(0, 100px) rotate(180deg);
        }

        75% {
            transform: translate(-50px, 50px) rotate(270deg);
        }
    }

    .faq-category {
        padding: 0.75rem 1.5rem;
        background: white;
        border: 2px solid transparent;
        border-radius: 9999px;
        font-weight: 500;
        color: var(--text-secondary);
        transition: all 0.3s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .faq-category:hover,
    .faq-category.active {
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 118, 206, 0.2);
    }

    .faq-item {
        background: white;
        border-radius: 16px;
        margin-bottom: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .faq-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .faq-question {
        padding: 1.5rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        transition: all 0.3s ease;
    }

    .faq-icon {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--bg-primary);
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-icon {
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        color: white;
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-item.active .faq-answer {
        max-height: 1000px;
    }

    .faq-answer-content {
        padding: 0 1.5rem 1.5rem;
        color: var(--text-secondary);
    }

    .service-item {
        padding: 1rem;
        background: var(--bg-primary);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .service-item:hover {
        transform: translateX(5px);
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .steps-container {
        display: grid;
        gap: 1rem;
        margin: 1rem 0;
    }

    .step {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: var(--bg-primary);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .step:hover {
        transform: translateX(5px);
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .step-number {
        width: 32px;
        height: 32px;
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .industry-card {
        padding: 1.5rem;
        text-align: center;
        background: var(--bg-primary);
        border-radius: 12px;
        transition: all 0.3s ease;
    }

    .industry-card:hover {
        transform: translateY(-5px);
        background: white;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .support-features {
        display: grid;
        gap: 1rem;
    }

    .feature {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: var(--bg-primary);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .feature:hover {
        transform: translateX(5px);
        background: white;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .pricing-models {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin: 1rem 0;
    }

    .model {
        padding: 1.5rem;
        background: var(--bg-primary);
        border-radius: 12px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .model:hover {
        transform: translateY(-5px);
        background: white;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .model-header {
        margin-bottom: 0.5rem;
    }

    .model-header i {
        font-size: 2rem;
        color: var(--accent-primary);
        margin-bottom: 0.5rem;
    }

    /* Keyboard shortcut styling */
    .faq-search .text-gray-400 {
        padding: 2px 6px;
        background: rgba(0, 0, 0, 0.05);
        border-radius: 4px;
        font-family: monospace;
    }

    /* Enhanced Mega Section Styles */
    .dropdown-menu {
        min-width: 280px;
        background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.98));
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 1rem;
        transform-origin: top center;
        animation: dropdownFade 0.3s ease forwards;
    }

    .dropdown-item {
        position: relative;
        transition: all 0.3s ease;
    }

    .dropdown-item a {
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        color: var(--text-primary);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .dropdown-item a i {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
        font-size: 1rem;
        color: var(--accent-primary);
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.1), rgba(255, 102, 0, 0.1));
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .dropdown-item:hover a {
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.1), rgba(255, 102, 0, 0.1));
        transform: translateX(5px);
    }

    .dropdown-item:hover i {
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        color: white;
        transform: scale(1.1) rotate(5deg);
    }

    .expanded-menu {
        min-width: 320px;
        background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.98), rgba(255, 255, 255, 0.95));
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 1.5rem;
        z-index: 100;
    }

    .expanded-menu h3 {
        color: var(--text-primary);
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid;
        border-image: linear-gradient(to right, var(--accent-primary), var(--accent-secondary)) 1;
    }

    .expanded-menu ul li {
        margin-bottom: 0.5rem;
    }

    .expanded-menu ul li a {
        display: flex;
        align-items: center;
        padding: 0.5rem 0.75rem;
        color: var(--text-secondary);
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .expanded-menu ul li a i {
        width: 28px;
        height: 28px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 12px;
        font-size: 1rem;
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.1), rgba(255, 102, 0, 0.1));
        border-radius: 8px;
        color: var(--accent-primary);
        transition: all 0.3s ease;
    }

    .expanded-menu ul li a:hover {
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.1), rgba(255, 102, 0, 0.1));
        color: var(--accent-secondary);
        transform: translateX(5px);
    }

    .expanded-menu ul li a:hover i {
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        color: white;
        transform: scale(1.1) rotate(5deg);
    }

    /* Featured Item in Mega Menu */
    .featured-item {
        margin-top: 1rem;
        padding: 1rem;
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.05), rgba(255, 102, 0, 0.05));
        border-radius: 12px;
        border: 1px solid rgba(0, 118, 206, 0.1);
    }

    .featured-item h4 {
        color: var(--accent-primary);
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .featured-item p {
        color: var(--text-secondary);
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    .featured-item a {
        display: inline-flex;
        align-items: center;
        color: var(--accent-secondary);
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .featured-item a:hover {
        transform: translateX(5px);
    }

    /* Mega Menu Animation */
    @keyframes dropdownFade {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Enhanced Icon Styles */
    .mega-icon {
        position: relative;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        background: linear-gradient(135deg, rgba(0, 118, 206, 0.1), rgba(255, 102, 0, 0.1));
        transition: all 0.3s ease;
    }

    .mega-icon::before {
        content: '';
        position: absolute;
        inset: -1px;
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        border-radius: inherit;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .mega-icon i {
        font-size: 1.2rem;
        color: var(--accent-primary);
        transition: all 0.3s ease;
    }

    .dropdown-item:hover .mega-icon::before {
        opacity: 1;
    }

    .dropdown-item:hover .mega-icon i {
        color: white;
        transform: scale(1.1) rotate(5deg);
    }

    /* Add glowing effect on hover */
    .dropdown-item:hover .mega-icon {
        box-shadow: 0 0 15px rgba(0, 118, 206, 0.3),
            0 0 15px rgba(255, 102, 0, 0.3);
    }

    /* Add subtle pulse animation for important items */
    .mega-icon.pulse {
        animation: iconPulse 2s infinite;
    }

    @keyframes iconPulse {
        0% {
            box-shadow: 0 0 0 0 rgba(0, 118, 206, 0.4);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(0, 118, 206, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(0, 118, 206, 0);
        }
    }

    /* Add ripple effect on click */
    .mega-icon.ripple {
        overflow: hidden;
    }

    .mega-icon.ripple::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.8) 10%, transparent 10.01%);
        transform: scale(10);
        opacity: 0;
        transition: transform 0.5s, opacity 0.5s;
    }

    .mega-icon.ripple:active::after {
        transform: scale(0);
        opacity: 0.3;
        transition: 0s;
    }

    /* Add floating animation for special items */
    .mega-icon.float {
        animation: iconFloat 3s ease-in-out infinite;
    }

    @keyframes iconFloat {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    /* Enhanced category indicators */
    .category-indicator {
        position: absolute;
        top: 0;
        right: 0;
        padding: 2px 6px;
        font-size: 0.7rem;
        border-radius: 4px;
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        color: white;
        transform: translate(50%, -50%) scale(0);
        transition: transform 0.3s ease;
    }

    .dropdown-item:hover .category-indicator {
        transform: translate(50%, -50%) scale(1);
    }

    /* Add subtle gradient borders */
    .mega-section {
        position: relative;
        padding: 1rem;
    }

    .mega-section::before {
        content: '';
        position: absolute;
        inset: 0;
        padding: 1px;
        border-radius: 16px;
        background: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        -webkit-mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        mask:
            linear-gradient(#fff 0 0) content-box,
            linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
    }

    /* Advanced Glass Morphism Effects */
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px) saturate(180%);
        -webkit-backdrop-filter: blur(10px) saturate(180%);
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
    }

    .glass-nav {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px) saturate(180%);
        -webkit-backdrop-filter: blur(10px) saturate(180%);
        border-bottom: 1px solid rgba(255, 255, 255, 0.3);
    }

    /* Animated Gradient Backgrounds */
    .gradient-bg {
        background: linear-gradient(-45deg, #0076CE, #FF6600, #3a3dc4, #f05a28);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* Advanced Button Styles */
    .btn-modern {
        position: relative;
        overflow: hidden;
        background: transparent;
        border: 2px solid var(--primary-color);
        transition: all 0.3s ease;
    }

    .btn-modern::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(120deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: all 0.5s ease;
    }

    .btn-modern:hover::before {
        left: 100%;
    }

    /* Enhanced Card Hover Effects */
    .service-card {
        position: relative;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .service-card::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(800px circle at var(--mouse-x) var(--mouse-y),
                rgba(255, 255, 255, 0.1),
                transparent 40%);
        opacity: 0;
        transition: opacity 0.5s;
    }

    .service-card:hover::before {
        opacity: 1;
    }

    /* Floating Elements Animation */
    .float-element {
        animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    /* Text Gradient Effect */
    .gradient-text {
        background: linear-gradient(120deg, var(--primary-color), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }

    /* Advanced Section Transitions */
    .section-transition {
        position: relative;
        overflow: hidden;
    }

    .section-transition::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100px;
        background: linear-gradient(to bottom, transparent, white);
        pointer-events: none;
    }

    /* Enhanced Scroll Progress Bar */
    .scroll-progress {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(to right, var(--primary-color), var(--accent-color));
        transform-origin: 0 50%;
        transform: scaleX(0);
        transition: transform 0.1s;
        z-index: 1000;
    }

    /* Animated Border Effect */
    .animated-border {
        position: relative;
        border-radius: 10px;
        overflow: hidden;
    }

    .animated-border::before {
        content: '';
        position: absolute;
        inset: -2px;
        background: linear-gradient(120deg, var(--primary-color), var(--accent-color), var(--primary-color));
        background-size: 200% 200%;
        animation: border-animation 3s linear infinite;
        z-index: -1;
    }

    @keyframes border-animation {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 200% 50%;
        }
    }

    /* Neon Glow Effect */
    .neon-glow {
        box-shadow: 0 0 5px var(--primary-color),
            0 0 10px var(--primary-color),
            0 0 20px var(--primary-color);
        animation: neon-pulse 2s ease-in-out infinite;
    }

    @keyframes neon-pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.7;
        }
    }

    /* Advanced Image Hover Effect */
    .image-hover {
        position: relative;
        overflow: hidden;
    }

    .image-hover img {
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .image-hover:hover img {
        transform: scale(1.1);
    }

    .image-hover::after {
        content: '';
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.5), transparent);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .image-hover:hover::after {
        opacity: 1;
    }
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // FAQ Toggle functionality with smooth animations
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            question.addEventListener('click', () => {
                const isActive = item.classList.contains('active');

                // Close all other items
                faqItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                        const otherAnswer = otherItem.querySelector('.faq-answer');
                        otherAnswer.style.maxHeight = '0';
                    }
                });

                // Toggle current item
                item.classList.toggle('active');
                if (!isActive) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = '0';
                }
            });
        });

        // Enhanced Search functionality
        const searchInput = document.getElementById('faqSearch');
        const faqContainer = document.querySelector('.faq-container');

        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase();

            faqItems.forEach(item => {
                const question = item.querySelector('h3').textContent.toLowerCase();
                const answer = item.querySelector('.faq-answer').textContent.toLowerCase();

                if (question.includes(searchTerm) || answer.includes(searchTerm)) {
                    item.style.display = 'block';
                    // Highlight matching text
                    if (searchTerm) {
                        highlightText(item, searchTerm);
                    } else {
                        removeHighlights(item);
                    }
                } else {
                    item.style.display = 'none';
                }
            });
        }

        function highlightText(element, searchTerm) {
            const content = element.innerHTML;
            const highlightedContent = content.replace(
                new RegExp(searchTerm, 'gi'),
                match => `<mark class="bg-yellow-200 px-1 rounded">${match}</mark>`
            );
            element.innerHTML = highlightedContent;
        }

        function removeHighlights(element) {
            const content = element.innerHTML;
            element.innerHTML = content.replace(/<mark class="bg-yellow-200 px-1 rounded">(.*?)<\/mark>/g,
                '$1');
        }

        // Search input event listener
        searchInput.addEventListener('input', performSearch);

        // Keyboard shortcut for search
        document.addEventListener('keydown', (e) => {
            if (e.key === '/' && document.activeElement !== searchInput) {
                e.preventDefault();
                searchInput.focus();
            }
        });

        // Category filtering with animations
        const categories = document.querySelectorAll('.faq-category');

        categories.forEach(category => {
            category.addEventListener('click', () => {
                // Remove active class from all categories
                categories.forEach(c => c.classList.remove('active'));

                // Add active class to clicked category
                category.classList.add('active');

                // Filter FAQ items with animation
                const categoryName = category.dataset.category;

                faqItems.forEach(item => {
                    if (categoryName === 'all' || item.dataset.category ===
                        categoryName) {
                        item.style.opacity = '0';
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    });

    // Add scroll progress bar
    const scrollProgress = document.createElement('div');
    scrollProgress.className = 'scroll-progress';
    document.body.appendChild(scrollProgress);

    window.addEventListener('scroll', () => {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.scrollY / windowHeight) * 100;
        scrollProgress.style.transform = `scaleX(${scrolled / 100})`;
    });

    // Track mouse position for card effects
    document.addEventListener('mousemove', (e) => {
        document.querySelectorAll('.service-card').forEach(card => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    // Apply glass morphism to navbar on scroll
    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('glass-nav');
        } else {
            navbar.classList.remove('glass-nav');
        }
    });
    </script>
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

    <section class="bg-transparent py-6 sticky top-24 z-40 transition-all duration-300 overflow-hidden">
        <div class="mx-auto px-4 mt-8">
            <div class="service-icons-bar overflow-hidden">
                <div class="icons-container flex gap-8 whitespace-nowrap animate-scroll">
                    <!-- Service Icons with enhanced styling -->
                    <div class="service-icon group transform hover:scale-105 transition-all duration-300"
                        aria-label="Managed Services">
                        <div
                            class="icon-circle flex items-center justify-center w-14 h-14 rounded-full bg-white/90 shadow-lg transition-all duration-300 group-hover:bg-[var(--accent-color)] border border-gray-100">
                            <i
                                class="fas fa-cogs text-[var(--primary-color)] text-2xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-700 mt-3 block text-center group-hover:text-[var(--accent-color)] transition-colors duration-300">Managed
                            Services</span>
                    </div>
                    <div class="service-icon group transform hover:scale-105 transition-all duration-300"
                        aria-label="Cost Optimization">
                        <div
                            class="icon-circle flex items-center justify-center w-14 h-14 rounded-full bg-white/90 shadow-lg transition-all duration-300 group-hover:bg-[var(--accent-color)] border border-gray-100">
                            <i
                                class="fas fa-chart-line text-[var(--primary-color)] text-2xl transition-all duration-300 group-hover:text-white"></i>
                        </div>
                        <span
                            class="text-sm font-medium text-gray-700 mt-3 block text-center group-hover:text-[var(--accent-color)] transition-colors duration-300">Cost
                            Optimization</span>
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

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16 mt-12">
                <div
                    class="service-card p-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in border border-gray-100">
                    <div
                        class="text-primary text-5xl mb-6 hover:text-secondary transition-colors duration-300 transform hover:scale-110">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3
                        class="text-2xl font-bold text-text-primary mb-4 hover:text-[var(--accent-color)] transition-colors duration-300">
                        Our Vision</h3>
                    <p class="text-text-secondary leading-relaxed">
                        To be the global leader in IT solutions and staffing services, empowering businesses to achieve
                        unparalleled success through virtuous innovation and swift execution.
                    </p>
                </div>

                <div
                    class="service-card p-8 bg-white rounded-xl shadow-lg hover:shadow-2xl hover:bg-gray-50 hover:scale-102 transition-all duration-300 animate-slide-in border border-gray-100">
                    <div
                        class="text-primary text-5xl mb-6 hover:text-secondary transition-colors duration-300 transform hover:scale-110">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3
                        class="text-2xl font-bold text-text-primary mb-4 hover:text-[var(--accent-color)] transition-colors duration-300">
                        Our Mission</h3>
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
    <section class="py-24 bg-gradient-to-b from-white via-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[var(--text-primary)] mb-4 relative inline-block">
                    SAP & Cloud Migration Experts
                    <div
                        class="absolute bottom-0 left-0 w-full h-1 bg-[var(--accent-secondary)] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300">
                    </div>
                </h2>
                <div class="w-24 h-1 bg-[var(--accent-secondary)] mx-auto mb-6"></div>
                <p class="text-lg text-[var(--text-secondary)] max-w-3xl mx-auto">
                    We are industry leaders in Cloud Architecture for SAP deployments, providing High Availability,
                    implementing industry regulations, and complete disaster recovery solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="service-card p-6 text-center animate-slide-in transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-20 h-20 mx-auto bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-6 shadow-lg border border-gray-100">
                        <i class="fas fa-exchange-alt text-[var(--accent-primary)] text-3xl"></i>
                    </div>
                    <h3
                        class="text-xl font-bold text-[var(--text-primary)] mb-3 hover:text-[var(--accent-color)] transition-colors duration-300">
                        SAP Migration</h3>
                    <p class="text-[var(--text-secondary)]">
                        Seamless transfer of your existing SAP systems to a new environment, such as the cloud or an
                        upgraded version for better scalability and performance.
                    </p>
                </div>

                <div
                    class="service-card p-6 text-center animate-slide-in transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-20 h-20 mx-auto bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-6 shadow-lg border border-gray-100">
                        <i class="fas fa-cloud-upload-alt text-[var(--accent-primary)] text-3xl"></i>
                    </div>
                    <h3
                        class="text-xl font-bold text-[var(--text-primary)] mb-3 hover:text-[var(--accent-color)] transition-colors duration-300">
                        Hybrid Cloud Solutions</h3>
                    <p class="text-[var(--text-secondary)]">
                        Custom-tailored combination of private and public cloud infrastructure to meet your specific
                        business requirements and security needs.
                    </p>
                </div>

                <div
                    class="service-card p-6 text-center animate-slide-in transform hover:scale-105 transition-all duration-300">
                    <div
                        class="w-20 h-20 mx-auto bg-[var(--bg-secondary)] rounded-full flex items-center justify-center mb-6 shadow-lg border border-gray-100">
                        <i class="fas fa-shield-alt text-[var(--accent-primary)] text-3xl"></i>
                    </div>
                    <h3
                        class="text-xl font-bold text-[var(--text-primary)] mb-3 hover:text-[var(--accent-color)] transition-colors duration-300">
                        Data Security</h3>
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

    <!-- FAQ Section -->
    <section class="faq-section py-24 relative overflow-hidden">
        <!-- Background Animation Elements -->
        <div class="absolute inset-0 opacity-10">
            <div class="floating-shape" style="left: 5%; top: 10%;"></div>
            <div class="floating-shape" style="right: 10%; top: 20%;"></div>
            <div class="floating-shape" style="left: 15%; bottom: 15%;"></div>
            <div class="floating-shape" style="right: 5%; bottom: 25%;"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="faq-header text-center mb-16">
                <span
                    class="text-[var(--accent-secondary)] text-sm font-semibold tracking-wider uppercase mb-2 block">Got
                    Questions?</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
                <div
                    class="w-24 h-1 bg-gradient-to-r from-[var(--accent-primary)] to-[var(--accent-secondary)] mx-auto mb-6 rounded-full">
                </div>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">Find answers to common questions about our services,
                    solutions, and how we can help transform your business.</p>
            </div>

            <div class="faq-search relative max-w-2xl mx-auto mb-12">
                <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <input type="text" id="faqSearch" placeholder="Search for answers..."
                    class="w-full pl-12 pr-4 py-4 rounded-xl border-2 border-gray-200 focus:border-[var(--accent-secondary)] focus:ring-2 focus:ring-[var(--accent-secondary)] focus:ring-opacity-30 transition-all duration-300 bg-white/80 backdrop-blur-sm">
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-sm text-gray-400">
                    Press '/' to search
                </div>
            </div>

            <div class="faq-categories flex flex-wrap justify-center gap-4 mb-12">
                <button class="faq-category active" data-category="all">
                    <i class="fas fa-globe-americas mr-2"></i>All
                </button>
                <button class="faq-category" data-category="services">
                    <i class="fas fa-cogs mr-2"></i>Services
                </button>
                <button class="faq-category" data-category="solutions">
                    <i class="fas fa-puzzle-piece mr-2"></i>Solutions
                </button>
                <button class="faq-category" data-category="support">
                    <i class="fas fa-headset mr-2"></i>Support
                </button>
                <button class="faq-category" data-category="pricing">
                    <i class="fas fa-tags mr-2"></i>Pricing
                </button>
            </div>

            <div class="faq-container max-w-4xl mx-auto">
                <!-- FAQ Items -->
                <div class="faq-item" data-category="services">
                    <div class="faq-question">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold">What services do you offer?</h3>
                            <p class="text-sm text-gray-500 mt-1">Overview of our core services</p>
                        </div>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down transition-transform duration-300"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p class="mb-4">We offer a comprehensive range of IT services including:</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                <div class="service-item">
                                    <i class="fas fa-laptop-code text-[var(--accent-primary)] mr-2"></i>
                                    Enterprise Solutions
                                    <span class="block text-sm text-gray-500 ml-6">SAP, Oracle, Microsoft
                                        Dynamics</span>
                                </div>
                                <div class="service-item">
                                    <i class="fas fa-cloud text-[var(--accent-primary)] mr-2"></i>
                                    Cloud Services
                                    <span class="block text-sm text-gray-500 ml-6">AWS, Azure, Google Cloud</span>
                                </div>
                                <div class="service-item">
                                    <i class="fas fa-digital-tachograph text-[var(--accent-primary)] mr-2"></i>
                                    Digital Transformation
                                    <span class="block text-sm text-gray-500 ml-6">Modern solutions for business
                                        growth</span>
                                </div>
                                <div class="service-item">
                                    <i class="fas fa-code text-[var(--accent-primary)] mr-2"></i>
                                    Custom Development
                                    <span class="block text-sm text-gray-500 ml-6">Tailored software solutions</span>
                                </div>
                            </div>
                            <a href="#services"
                                class="inline-flex items-center text-[var(--accent-secondary)] hover:text-[var(--accent-primary)] transition-colors duration-300">
                                Learn more about our services
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="solutions">
                    <div class="faq-question">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold">How do I get started with your services?</h3>
                            <p class="text-sm text-gray-500 mt-1">Simple steps to begin your journey</p>
                        </div>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <div class="steps-container">
                                <div class="step">
                                    <div class="step-number">1</div>
                                    <div class="step-content">
                                        <h4>Initial Contact</h4>
                                        <p>Reach out through our contact form or schedule a call</p>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="step-number">2</div>
                                    <div class="step-content">
                                        <h4>Free Consultation</h4>
                                        <p>Discuss your needs with our experts</p>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="step-number">3</div>
                                    <div class="step-content">
                                        <h4>Custom Proposal</h4>
                                        <p>Receive a tailored solution and pricing</p>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="step-number">4</div>
                                    <div class="step-content">
                                        <h4>Begin Transform</h4>
                                        <p>Start your digital transformation journey</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="services">
                    <div class="faq-question">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold">What industries do you serve?</h3>
                            <p class="text-sm text-gray-500 mt-1">Our expertise across sectors</p>
                        </div>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="industry-card">
                                    <i class="fas fa-industry text-3xl text-[var(--accent-primary)]"></i>
                                    <h4 class="font-semibold mt-2">Manufacturing</h4>
                                    <p class="text-sm text-gray-500">Smart manufacturing solutions</p>
                                </div>
                                <div class="industry-card">
                                    <i class="fas fa-hospital-alt text-3xl text-[var(--accent-primary)]"></i>
                                    <h4 class="font-semibold mt-2">Healthcare</h4>
                                    <p class="text-sm text-gray-500">Digital health innovations</p>
                                </div>
                                <div class="industry-card">
                                    <i class="fas fa-university text-3xl text-[var(--accent-primary)]"></i>
                                    <h4 class="font-semibold mt-2">Finance</h4>
                                    <p class="text-sm text-gray-500">Fintech solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="support">
                    <div class="faq-question">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold">What kind of support do you provide?</h3>
                            <p class="text-sm text-gray-500 mt-1">Our comprehensive support system</p>
                        </div>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <div class="support-features">
                                <div class="feature">
                                    <i class="fas fa-clock text-[var(--accent-primary)]"></i>
                                    <div>
                                        <h4>24/7 Support</h4>
                                        <p>Round-the-clock technical assistance</p>
                                    </div>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-user-tie text-[var(--accent-primary)]"></i>
                                    <div>
                                        <h4>Dedicated Manager</h4>
                                        <p>Personal account management</p>
                                    </div>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-tools text-[var(--accent-primary)]"></i>
                                    <div>
                                        <h4>Regular Maintenance</h4>
                                        <p>Proactive system updates</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="pricing">
                    <div class="faq-question">
                        <div class="flex-1">
                            <h3 class="text-xl font-semibold">How is your pricing structured?</h3>
                            <p class="text-sm text-gray-500 mt-1">Transparent pricing models</p>
                        </div>
                        <div class="faq-icon">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <div class="pricing-models">
                                <div class="model">
                                    <div class="model-header">
                                        <i class="fas fa-project-diagram"></i>
                                        <h4>Project-Based</h4>
                                    </div>
                                    <p>Fixed price for specific solutions</p>
                                </div>
                                <div class="model">
                                    <div class="model-header">
                                        <i class="fas fa-sync"></i>
                                        <h4>Subscription</h4>
                                    </div>
                                    <p>Monthly plans for ongoing services</p>
                                </div>
                                <div class="model">
                                    <div class="model-header">
                                        <i class="fas fa-building"></i>
                                        <h4>Enterprise</h4>
                                    </div>
                                    <p>Custom pricing for large-scale solutions</p>
                                </div>
                            </div>
                            <div class="mt-4 text-center">
                                <a href="#contact"
                                    class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[var(--accent-primary)] to-[var(--accent-secondary)] text-white rounded-full hover:shadow-lg transition-all duration-300">
                                    Get Custom Quote
                                    <i class="fas fa-arrow-right ml-2"></i>
                                </a>
                            </div>
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