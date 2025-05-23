<!-- Navbar -->
<nav class="bg-white shadow-xl fixed w-full top-0 z-50 transition-all duration-300" id="main-navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="nav-container h-14 flex items-center justify-between">
            <!-- Logo -->
            <div class="logo-container flex items-center">
                <div class="relative ">
                    <img src="Images/logo.png" alt="VirtuSwift Logo" class="h-16 transition-all duration-300  ">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-[#0000CD] to-[#FF6600] opacity-0 group-hover:opacity-20 transition-opacity duration-300 rounded-lg">
                    </div>
                    <div
                        class="absolute -inset-0.5 bg-gradient-to-r from-[#0000CD] to-[#FF6600] rounded-lg opacity-0 group-hover:opacity-30 blur-sm group-hover:blur transition-all duration-300 -z-10">
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <ul class="nav-list hidden md:flex items-center space-x-2">
                <!-- Home -->
                <li class="nav-item relative">
                    <a href="index.php"
                        class="nav-link flex items-center px-3 py-1.5 text-gray-800 text-sm font-semibold hover:text-[#FF6600] rounded-md transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">Home</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-1 bg-[#FF6600] group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <!-- About Us -->
                <li class="nav-item relative">
                    <a href="about.php"
                        class="nav-link flex items-center px-3 py-1.5 text-gray-800 text-sm font-semibold hover:text-[#FF6600] rounded-md transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">About Us</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-1 bg-[#FF6600] group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
                <!-- Services Menu -->
                <li class="nav-item relative group">
                    <a href="#"
                        class="nav-link flex items-center px-3 py-1.5 text-gray-800 text-sm font-semibold hover:text-[#FF6600] rounded-md transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10">Services</span>
                        <i
                            class="fas fa-chevron-down ml-1 text-sm transition-transform duration-300 group-hover:rotate-180"></i>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-[3px] bg-[#FF6600] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <div
                        class="dropdown-menu absolute top-full left-50% transform -translate-x-1/2 w-[800px] bg-white border border-gray-200 shadow-2xl rounded-xl z-50 invisible group-hover:visible opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300 pointer-events-none group-hover:pointer-events-auto">
                        <div
                            class="mega-menu-container flex bg-gradient-to-r from-white to-gray-50 rounded-xl overflow-hidden">
                            <!-- Sidebar -->
                            <div
                                class="mega-menu-sidebar w-[25%] bg-gray-100 p-4 border-r border-gray-200 transition-all duration-300 hover:bg-gray-200">
                                <h3 class="text-xl font-bold text-gray-800 mb-3 relative">Services</h3>
                                <ul>
                                    <li class="py-1.5"><a href="#"
                                            class="text-gray-800 text-sm font-medium hover:text-[#FF6600] hover:translate-x-1 inline-block transition-all duration-300">Enterprise
                                            Solutions</a></li>
                                    <li class="py-1.5"><a href="#"
                                            class="text-gray-800 text-sm font-medium hover:text-[#FF6600] hover:translate-x-1 inline-block transition-all duration-300">Cloud
                                            Services</a></li>
                                    <li class="py-1.5"><a href="#"
                                            class="text-gray-800 text-sm font-medium hover:text-[#FF6600] hover:translate-x-1 inline-block transition-all duration-300">Digital
                                            Transformation</a></li>
                                    <li class="py-1.5"><a href="#"
                                            class="text-gray-800 text-sm font-medium hover:text-[#FF6600] hover:translate-x-1 inline-block transition-all duration-300">Learn
                                            More</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Content -->
                            <div class="mega-menu-content w-[75%] p-4 flex flex-wrap gap-4">
                                <!-- Enterprise Solutions -->
                                <div
                                    class="mega-menu-column flex-1 min-w-[200px] p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                                    <h4
                                        class="text-base font-bold text-gray-800 mb-3 flex items-center hover:text-[#FF6600] transition-colors duration-300 cursor-pointer group">
                                        <i
                                            class="fas fa-cogs mr-2 text-xl text-[#0000CD] group-hover:text-[#FF6600] transition-colors duration-300"></i>
                                        Enterprise Solutions
                                    </h4>
                                    <ul>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-check-circle mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="sap_services.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">SAP
                                                Services</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-check-circle mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="oracle_solution.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Oracle
                                                Solutions</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-check-circle mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="microsoft_dynamics.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Microsoft
                                                Dynamics</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-check-circle mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="ibm_systems.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">IBM
                                                Systems</a>
                                        </li>
                                        <li
                                            class="py-apex-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-check-circle mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="sales_force.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Salesforce
                                                Implementation</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Cloud Services -->
                                <div
                                    class="mega-menu-column flex-1 min-w-[200px] p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                                    <h4
                                        class="text-base font-bold text-gray-800 mb-3 flex items-center hover:text-[#FF6600] transition-colors duration-300 cursor-pointer group">
                                        <i
                                            class="fas fa-cloud mr-2 text-xl text-[#0000CD] group-hover:text-[#FF6600] transition-colors duration-300"></i>
                                        Cloud Services
                                    </h4>
                                    <ul>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-cloud mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="aws_migration.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">AWS
                                                Migration</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-cloud mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="azure.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Azure
                                                Cloud Solutions</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-cloud mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="google.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Google
                                                Cloud Services</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-cloud mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="multi_google.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Multi-Cloud
                                                Strategy</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-cloud mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="cloud_security.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Cloud
                                                Security</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Digital Transformation -->
                                <div
                                    class="mega-menu-column flex-1 min-w-[200px] p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                                    <h4
                                        class="text-base font-bold text-gray-800 mb-3 flex items-center hover:text-[#FF6600] transition-colors duration-300 cursor-pointer group">
                                        <i
                                            class="fas fa-digital-tachograph mr-2 text-xl text-[#0000CD] group-hover:text-[#FF6600] transition-colors duration-300"></i>
                                        Digital Transformation
                                    </h4>
                                    <ul>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-digital-tachograph mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="#"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Digital
                                                Strategy</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-digital-tachograph mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="#"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Process
                                                Automation</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-digital-tachograph mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="#"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Data
                                                Analytics & BI</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-digital-tachograph mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="#"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">AI
                                                & Machine Learning</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-digital-tachograph mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="#"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">IoT
                                                Implementation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Industries Menu -->
                <li class="nav-item relative group">
                    <a href="#"
                        class="nav-link flex items-center px-3 py-1.5 text-gray-800 text-sm font-semibold hover:text-[#FF6600] rounded-md transition-all duration-300 relative overflow-hidden">
                        <span class="relative z-10">Industries</span>
                        <i
                            class="fas fa-chevron-down ml-1 text-sm transition-transform duration-300 group-hover:rotate-180"></i>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-[3px] bg-[#FF6600] group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <div
                        class="dropdown-menu absolute top-full left-50% transform -translate-x-1/2 w-[600px] bg-white border border-gray-200 shadow-2xl rounded-xl z-50 invisible group-hover:visible opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300 pointer-events-none group-hover:pointer-events-auto">
                        <div
                            class="mega-menu-container flex bg-gradient-to-r from-white to-gray-50 rounded-xl overflow-hidden">
                            <!-- Sidebar -->
                            <div
                                class="mega-menu-sidebar w-[25%] bg-gray-100 p-4 border-r border-gray-200 transition-all duration-300 hover:bg-gray-200">
                                <h3 class="text-xl font-bold text-gray-800 mb-3 relative">Industries</h3>
                                <ul>
                                    <li class="py-1.5"><a href="#"
                                            class="text-gray-800 text-sm font-medium hover:text-[#FF6600] hover:translate-x-1 inline-block transition-all duration-300">Manufacturing
                                            & Retail</a></li>
                                    <li class="py-1.5"><a href="#"
                                            class="text-gray-800 text-sm font-medium hover:text-[#FF6600] hover:translate-x-1 inline-block transition-all duration-300">Healthcare
                                            & Finance</a></li>
                                    <li class="py-1.5"><a href="#"
                                            class="text-gray-800 text-sm font-medium hover:text-[#FF6600] hover:translate-x-1 inline-block transition-all duration-300">Learn
                                            More</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Content -->
                            <div class="mega-menu-content w-[75%] p-4 flex flex-wrap gap-4">
                                <!-- Manufacturing & Retail -->
                                <div
                                    class="mega-menu-column flex-1 min-w-[200px] p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                                    <h4
                                        class="text-base font-bold text-gray-800 mb-3 flex items-center hover:text-[#FF6600] transition-colors duration-300 cursor-pointer group">
                                        <i
                                            class="fas fa-industry mr-2 text-xl text-[#0000CD] group-hover:text-[#FF6600] transition-colors duration-300"></i>
                                        Manufacturing & Retail
                                    </h4>
                                    <ul>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-industry mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="manufacturing.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Manufacturing
                                                Technology</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-shopping-cart mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="retail.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Retail
                                                & E-commerce</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-truck mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="supply_chain.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Supply
                                                Chain Solutions</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Healthcare & Finance -->
                                <div
                                    class="mega-menu-column flex-1 min-w-[200px] p-3 rounded-lg hover:bg-gray-50 transition-all duration-300">
                                    <h4
                                        class="text-base font-bold text-gray-800 mb-3 flex items-center hover:text-[#FF6600] transition-colors duration-300 cursor-pointer group">
                                        <i
                                            class="fas fa-hospital mr-2 text-xl text-[#0000CD] group-hover:text-[#FF6600] transition-colors duration-300"></i>
                                        Healthcare & Finance
                                    </h4>
                                    <ul>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-hospital mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="healthcare.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Healthcare
                                                IT</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-pills mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="pharmeutical.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Pharmaceutical
                                                IT</a>
                                        </li>
                                        <li
                                            class="py-1.5 flex items-center hover:translate-x-1 transition-transform duration-300">
                                            <i
                                                class="fas fa-university mr-2 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                                            <a href="financial.php"
                                                class="text-gray-600 text-sm hover:text-[#FF6600] transition-colors duration-300">Financial
                                                Services</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Case Studies -->
                <li class="nav-item relative">
                    <a href="#"
                        class="nav-link flex items-center px-3 py-1.5 text-gray-800 text-sm font-semibold hover:text-[#FF6600] rounded-md transition-all duration-300 relative overflow-hidden group">
                        <span class="relative z-10">Case Studies</span>
                        <span
                            class="absolute bottom-0 left-0 w-0 h-1 bg-[#FF6600] group-hover:w-full transition-all duration-300"></span>
                    </a>
                </li>
            </ul>

            <!-- Header Actions -->
            <div class="actions-container flex items-center space-x-3">
                <a href="#"
                    class="hidden md:flex items-center text-[#0000CD] text-xs font-medium hover:text-[#FF6600] transition-colors duration-300">
                    <i
                        class="fas fa-phone-alt mr-1 text-sm text-[#0000CD] hover:text-[#FF6600] transition-colors duration-300"></i>
                    <span>1-800-VIRTUSWIFT</span>
                </a>
                <a href="contact.php"
                    class="bg-[#0000CD] text-white px-4 py-1.5 rounded-lg text-xs font-semibold hover:bg-[#FF6600] hover:-translate-y-1 transition-all duration-300 shadow-md transform-gpu">
                    Contact Us
                </a>
                <!-- Mobile Toggle -->
                <button class="mobile-nav-toggle md:hidden text-gray-800 hover:text-[#0000CD] transition"
                    id="mobile-menu-button">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (Hidden by default) -->
    <div id="mobile-menu"
        class="md:hidden bg-white shadow-lg hidden overflow-hidden transition-all duration-500 max-h-0">
        <div class="mobile-menu-content p-4 space-y-4">
            <a href="index.php"
                class="block py-2 text-gray-800 text-base font-medium hover:text-[#FF6600] border-b border-gray-100">Home</a>
            <a href="about.php"
                class="block py-2 text-gray-800 text-base font-medium hover:text-[#FF6600] border-b border-gray-100">About
                Us</a>

            <!-- Services Accordion -->
            <div class="mobile-accordion">
                <button
                    class="w-full flex justify-between items-center py-2 text-gray-800 text-base font-medium hover:text-[#FF6600] border-b border-gray-100"
                    onclick="toggleAccordion(this)">
                    Services
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                </button>
                <div class="mobile-submenu hidden py-2 pl-4 space-y-2">
                    <p class="font-semibold text-gray-700">Enterprise Solutions</p>
                    <a href="sap_services.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">SAP
                        Services</a>
                    <a href="oracle_solution.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Oracle
                        Solutions</a>
                    <a href="microsoft_dynamics.php"
                        class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Microsoft Dynamics</a>

                    <p class="font-semibold text-gray-700 mt-3">Cloud Services</p>
                    <a href="aws_migration.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">AWS
                        Migration</a>
                    <a href="azure.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Azure Cloud
                        Solutions</a>
                    <a href="google.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Google Cloud
                        Services</a>
                </div>
            </div>

            <!-- Industries Accordion -->
            <div class="mobile-accordion">
                <button
                    class="w-full flex justify-between items-center py-2 text-gray-800 text-base font-medium hover:text-[#FF6600] border-b border-gray-100"
                    onclick="toggleAccordion(this)">
                    Industries
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                </button>
                <div class="mobile-submenu hidden py-2 pl-4 space-y-2">
                    <p class="font-semibold text-gray-700">Manufacturing & Retail</p>
                    <a href="manufacturing.php"
                        class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Manufacturing Technology</a>
                    <a href="retail.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Retail &
                        E-commerce</a>

                    <p class="font-semibold text-gray-700 mt-3">Healthcare & Finance</p>
                    <a href="healthcare.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Healthcare
                        IT</a>
                    <a href="financial.php" class="block py-1 text-gray-600 text-sm hover:text-[#FF6600]">Financial
                        Services</a>
                </div>
            </div>

            <a href="#"
                class="block py-2 text-gray-800 text-base font-medium hover:text-[#FF6600] border-b border-gray-100">Case
                Studies</a>
            <a href="contact.php"
                class="block py-2 bg-[#0000CD] text-white text-center rounded-lg font-medium hover:bg-[#FF6600] transition-colors duration-300">Contact
                Us</a>
        </div>
    </div>

    <style>
    /* Base Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Base styles */
    .nav-item.group .nav-link {
        position: relative;
        background: transparent !important;
    }

    /* Remove yellow highlight/underline from Services and Industries */
    .nav-item.group .nav-link::before,
    .nav-item.group .nav-link::after,
    .nav-item.group .nav-link>*::before,
    .nav-item.group .nav-link>*::after {
        content: none !important;
        display: none !important;
        background: none !important;
    }

    /* Override any existing highlight styles */
    .nav-item.group .nav-link,
    .nav-item.group:hover .nav-link,
    .nav-item.group:focus .nav-link {
        background-image: none !important;
        text-decoration: none !important;
        border: none !important;
    }

    /* Remove any background decorations */
    .nav-item.group .nav-link span {
        background: none !important;
    }

    .nav-item.group .nav-link span::before,
    .nav-item.group .nav-link span::after {
        display: none !important;
    }

    /* Rest of your existing styles */
    @keyframes slideIn {
        from {
            transform: translateX(-15px);
            opacity: 0;
        }

        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.03);
        }

        100% {
            transform: scale(1);
        }
    }

    /* Apply animations */
    .animate-fadeIn {
        animation: fadeIn 0.25s ease-in-out forwards;
    }

    .animate-slideIn {
        animation: slideIn 0.25s ease-in-out forwards;
    }

    /* Navbar Scroll Effect */
    .navbar-scrolled {
        height: 12px !important;
        background-color: rgba(255, 255, 255, 0.97);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
    }

    /* Contact Button Animation */
    .actions-container a:last-child:hover {
        box-shadow: 0 6px 16px rgba(255, 102, 0, 0.25);
        transform: translateY(-2px);
    }

    /* Thin gray separator line */
    .nav-container {
        position: relative;
        border-bottom: 1px solid rgba(209, 213, 219, 0.3);
    }

    /* Extra bold orange hover line for Services and Industries */
    .nav-item.group .nav-link span.absolute {
        height: 8px !important;
        /* Increased thickness */
        background: #FF6600;
        transition: width 0.3s ease;
        bottom: -4px !important;
        /* Position to overlap gray line */
        z-index: 5;
        /* Ensure it appears above the gray line */
        border-radius: 4px 4px 0 0;
        /* Rounded top corners */
    }

    /* Adjust dropdown positioning */
    .dropdown-menu {
        left: 50% !important;
        transform: translateX(-50%) !important;
        margin: 0 auto;
        top: calc(100% + 12px) !important;
        width: 680px !important;
        max-width: 680px;
        border: none;
        border-radius: 8px !important;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
        position: absolute;
        z-index: 2;
        background: #fff;
    }

    /* Ensure orange line is visible on hover */
    .nav-item.group:hover .nav-link span.absolute {
        width: 100%;
        height: 12px;
        background: transparent;
    }

    .dropdown-menu::after {
        content: '';
        position: absolute;
        top: -2px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 5px;
        background-color: #FF6600;
        border-radius: 2.5px;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .nav-item:hover .dropdown-menu::after {
        opacity: 1;
        width: 120px;
    }

    /* Add a subtle transition effect for the megamenu */
    .nav-item:hover .dropdown-menu {
        animation: smoothAppear 0.3s ease forwards;
    }

    @keyframes smoothAppear {
        from {
            opacity: 0;
            transform: translateX(-50%) translateY(5px);
        }

        to {
            opacity: 1;
            transform: translateX(-50%) translateY(0);
        }
    }

    /* Enhance megamenu container */
    .mega-menu-container {
        border-radius: 8px;
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    }

    /* Mega Menu Enhancements */
    .mega-menu-container {
        display: flex;
        width: 100%;
        min-height: 240px;
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        border-radius: 0 0 10px 10px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        justify-content: center;
        position: relative;
        /* Added for positioning context */
    }

    .mega-menu-container:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    .mega-menu-sidebar {
        width: 28%;
        background: #f1f5f9;
        padding: 0.75rem;
        border-right: 1px solid #e2e8f0;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .mega-menu-sidebar:hover {
        background: #e2e8f0;
        transform: translateX(2px);
    }

    .mega-menu-sidebar h3 {
        font-size: 1.25rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 0.5rem;
        position: relative;
    }

    .mega-menu-sidebar ul li {
        padding: 0.5rem 0;
    }

    .mega-menu-sidebar ul li a {
        font-size: 0.85rem;
        font-weight: 500;
        color: #4b5563;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .mega-menu-sidebar ul li a:hover {
        color: #FF6600;
        transform: translateX(2px);
    }

    .mega-menu-content {
        width: 72%;
        padding: 0.75rem;
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        background: transparent;
    }

    .mega-menu-column {
        flex: 1 1 32%;
        /* Same as Services */
        min-width: 180px;
        padding: 0.5rem;
        border-radius: 6px;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.95);
    }

    .mega-menu-column:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        background: #ffffff;
    }

    .mega-menu-column h4 {
        font-size: 0.95rem;
        font-weight: 600;
        margin-bottom: 0.4rem;
        color: #111827;
        transition: color 0.3s ease;
    }

    .mega-menu-column h4:hover {
        color: #FF6600;
    }

    .mega-menu-column ul li {
        padding: 0.3rem 0;
    }

    .mega-menu-column ul li a {
        font-size: 0.82rem;
        font-weight: 400;
        color: #4b5563;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .mega-menu-column ul li a:hover {
        color: #FF6600;
        transform: translateX(2px);
    }

    .mega-menu-column ul li i {
        font-size: 0.8rem;
        transition: transform 0.4s ease, color 0.3s ease;
    }

    /* Orange underline only for active/hovered section */
    .nav-item.group:hover .nav-link span:last-child,
    .nav-item.group:focus-within .nav-link span:last-child {
        width: 100% !important;
    }

    .nav-link span:last-child {
        width: 0 !important;
        height: 8px !important;
        bottom: -4px !important;
        background: #FF6600 !important;
        transition: width 0.3s ease;
        border-radius: 4px 4px 0 0;
    }

    /* Mobile Menu Animations */
    .mobile-menu-open {
        max-height: 1000px !important;
    }

    /* Item Hover Effects */
    .nav-item a:hover i {
        transform: rotate(180deg);
    }

    /* Dropdown Animation */
    .nav-item:hover .dropdown-menu {
        animation: fadeIn 0.25s ease forwards;
    }

    /* Item Highlight Effect */
    .mega-menu-column ul li:hover {
        background: rgba(255, 102, 0, 0.08);
        border-radius: 4px;
    }

    /* Icon rotation on hover */
    .mega-menu-column ul li:hover i {
        transform: rotate(360deg);
    }

    /* Adjust logo responsiveness for smaller screens */
    @media (max-width: 640px) {
        .logo-container img {
            height: 2.25rem;
        }
    }

    /* Ensure mega-menu doesn't overflow on smaller screens */
    @media (max-width: 840px) {
        .dropdown-menu {
            width: 90vw !important;
            max-width: 560px !important;
            top: calc(100% + 2px) !important;
            border-radius: 0 0 8px 8px;
        }

        .mega-menu-container {
            border-radius: 0 0 8px 8px;
        }

        .mega-menu-column {
            flex: 1 1 100%;
            /* Stack columns on mobile */
            min-width: 100%;
        }
    }

    .actions-container a:hover .fa-phone-alt {
        transform: rotate(12deg);
    }

    /* Specific rule to remove orange line from Services and Industries */
    .nav-item.group>.nav-link span:last-child {
        display: none !important;
    }

    /* Keep orange line for other nav items */
    .nav-link span:last-child {
        width: 0 !important;
        height: 6px !important;
        bottom: -3px !important;
        background: #FF6600 !important;
        transition: width 0.3s ease;
        border-radius: 3px 3px 0 0;
    }

    /* Specific styles for Services and Industries dropdown items */
    .nav-item.group .nav-link span.absolute.bottom-0 {
        display: none !important;
    }

    /* Keep orange line for non-dropdown nav items */
    .nav-item:not(.group) .nav-link span.absolute.bottom-0 {
        display: block;
        width: 0;
        height: 6px;
        background: #FF6600;
        transition: width 0.3s ease;
        border-radius: 3px 3px 0 0;
    }

    .nav-item:not(.group):hover .nav-link span.absolute.bottom-0 {
        width: 100%;
    }

    /* Thicker orange hover line */
    .nav-link span.absolute.bottom-0,
    .nav-item.group .nav-link span.absolute {
        height: 6px !important;
        background: #FF6600;
        transition: width 0.3s ease;
        border-radius: 3px 3px 0 0;
    }

    .nav-item.group:hover .nav-link span.absolute {
        width: 100%;
    }

    /* FAQ Section Enhancements */
    .faq-container {
        background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-item {
        border-bottom: 1px solid rgba(229, 231, 235, 0.5);
        transition: all 0.3s ease;
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-question {
        padding: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        background: transparent;
        transition: all 0.3s ease;
    }

    .faq-question:hover {
        background: rgba(255, 102, 0, 0.03);
    }

    .faq-question h3 {
        font-size: 1.1rem;
        font-weight: 600;
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
        transform: rotate(180deg);
    }

    .faq-question:hover .faq-icon i {
        color: white;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        padding: 0 1.25rem;
        color: #4B5563;
        background: rgba(249, 250, 251, 0.5);
        transition: all 0.3s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 500px;
        padding: 1.25rem;
        border-top: 1px solid rgba(229, 231, 235, 0.5);
    }

    .faq-item.active .faq-question {
        background: rgba(255, 102, 0, 0.03);
    }

    .faq-item.active .faq-icon {
        background: #FF6600;
        transform: rotate(180deg);
    }

    .faq-item.active .faq-icon i {
        color: white;
    }

    /* FAQ Animation Effects */
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

    /* FAQ Hover Effects */
    .faq-container:hover {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
        transform: translateY(-2px);
    }

    .faq-question .faq-icon i {
        transition: all 0.3s ease;
    }

    /* FAQ Content Styling */
    .faq-answer p {
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .faq-answer ul {
        list-style-type: disc;
        padding-left: 1.5rem;
        margin: 1rem 0;
    }

    .faq-answer li {
        margin: 0.5rem 0;
        color: #4B5563;
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

    /* FAQ Search and Filter (if needed) */
    .faq-search {
        margin-bottom: 2rem;
        position: relative;
    }

    .faq-search input {
        width: 100%;
        padding: 0.75rem 1rem;
        padding-left: 2.5rem;
        border: 1px solid rgba(229, 231, 235, 0.8);
        border-radius: 8px;
        font-size: 0.95rem;
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
    }

    /* FAQ Categories (if needed) */
    .faq-categories {
        display: flex;
        gap: 1rem;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .faq-category {
        padding: 0.5rem 1rem;
        background: white;
        border: 1px solid rgba(229, 231, 235, 0.8);
        border-radius: 20px;
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
    }

    /* Logo styles */
    .logo-container {
        display: flex;
    }

    .logo-container img {
        height: 3.5rem;
    }

    /* Remove all previous logo styles */
    .logo-container:hover img,
    .logo-container:hover .group,
    .logo-container .group,
    .logo-container img:hover {
        animation: none;
        transform: none;
        transition: none;
        filter: none;
        box-shadow: none;
    }

    @keyframes logoGlow {

        0%,
        50%,
        100% {
            box-shadow: none;
        }
    }
    </style>
</nav>