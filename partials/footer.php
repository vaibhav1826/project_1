<!-- Footer -->
<footer class="footer">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 pb-8">
            <!-- Column 1: Logo and Description -->
            <div>
                <div class="mb-4">
                    <a href="#" class="flex items-center">
                        <img src="Images\logo.png" alt="VirtuSwift Logo" class="h-16">
                        <!-- Changed from h-10 to h-16 -->
                    </a>
                </div>
                <p class="text-gray-400 mb-4">
                    Excellence Delivered at the Speed of Innovation. Transforming businesses through virtuous
                    innovation and swift execution.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <!-- Column 2: Services -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Services</h3>
                <ul class="space-y-2 footer-links">
                    <li><a href="#">Cloud Services</a></li>
                    <li><a href="#">AI & Machine Learning</a></li>
                    <li><a href="#">IT Staffing</a></li>
                    <li><a href="#">Enterprise Solutions</a></li>
                    <li><a href="#">Cybersecurity</a></li>
                    <li><a href="#">DevOps Automation</a></li>
                </ul>
            </div>

            <!-- Column 3: Company -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Company</h3>
                <ul class="space-y-2 footer-links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">News & Insights</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <!-- Column 4: Newsletter -->
            <div>
                <h3 class="text-xl font-semibold mb-4">Newsletter</h3>
                <p class="text-gray-400 mb-4">Subscribe to our newsletter for the latest updates and insights.</p>
                <form class="mb-4">
                    <form class="mb-4">
                        <div class="flex items-center">
                            <input type="email" placeholder="Your Email Address"
                                class="w-full px-4 py-2 rounded-l focus:outline-none text-gray-800">
                            <button type="submit"
                                class="bg-[#0000CD] hover:bg-[#FF6600] text-white px-4 py-2 rounded-r transition-colors duration-300">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </form>
            </div>
        </div>

        <!-- Copyright and Policy Links -->
        <div class="border-t border-gray-700 pt-6 pb-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-2 md:mb-0">© 2023 VirtuSwift. All rights reserved.</p>
                <div class="flex space-x-4 text-sm text-gray-400">
                    <a href="#" class="hover:text-white">Privacy Policy</a>
                    <a href="#" class="hover:text-white">Terms of Service</a>
                    <a href="#" class="hover:text-white">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Chat Widget -->
<div class="chat-widget-container">
    <!-- Chat Button -->
    <div class="chat-widget-button" id="chat-widget-button">
        <i class="fas fa-comment-dots text-white text-2xl"></i>
    </div>

    <!-- Chat Popup -->
    <div class="chat-widget-popup" id="chat-widget-popup">
        <div class="chat-widget-header">
            <div class="chat-widget-title">VirtuSwift Assistant</div>
            <div class="chat-widget-close" id="chat-widget-close">×</div>
        </div>
        <div class="chat-widget-messages">
            <div class="chat-message">
                <div class="chat-message-bot">Hello! Welcome to VirtuSwift. How can I help you today?</div>
            </div>
            <div class="chat-message">
                <div class="chat-message-user">I'm interested in your cloud services.</div>
            </div>
            <div class="chat-message">
                <div class="chat-message-bot">Great choice! Our cloud services include migration, optimization, and
                    management across</div>
            </div>
        </div>
        <div class="chat-widget-input">
            <input type="text" class="chat-input-field" placeholder="Type your message here...">
            <button class="chat-send-button">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
</div>