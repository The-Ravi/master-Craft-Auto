<?php $this->load->view('themes/frontend/common/top-head'); ?>
<link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<?php 
// Set page identifier for SEO tags
$page_identifier = 'home_centers';
// Include SEO head component
$this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
?>

<?php $this->load->view('themes/frontend/common/header'); ?>
    
    <style>
        :root {
            --primary-color: #223E7F;
            --secondary-color: #1a2d5d;
            --accent-color: #223E7F;
            --gradient-primary: linear-gradient(135deg, #223E7F 0%, #1a2d5d 100%);
            --gradient-secondary: linear-gradient(135deg, #223E7F 0%, #1a2d5d 100%);
            --text-dark: #2c3e50;
            --text-light: #7f8c8d;
            --bg-light: #f8f9fa;
            --shadow-light: 0 2px 10px rgba(0,0,0,0.1);
            --shadow-medium: 0 5px 25px rgba(0,0,0,0.15);
            --shadow-heavy: 0 10px 40px rgba(0,0,0,0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background: linear-gradient(to bottom, #223E7F 0%, #1a2d5d 30%, #f8f9fa 30%, #e9ecef 100%);
            background-attachment: fixed;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #223E7F 0%, #1a2d5d 100%);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
            margin-top: 70px;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="1000,100 1000,0 0,100"/></svg>');
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            opacity: 0;
            animation: slideInUp 1s ease-out 0.3s forwards;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            font-weight: 300;
            margin-bottom: 2rem;
            opacity: 0;
            animation: slideInUp 1s ease-out 0.6s forwards;
        }

        .hero-icon {
            font-size: 4rem;
            margin-bottom: 2rem;
            opacity: 0;
            animation: bounceIn 1s ease-out 0.9s forwards;
            color: rgba(255, 255, 255, 0.9);
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounceIn {
            0% {
                opacity: 0;
                transform: scale(0.3);
            }
            50% {
                opacity: 1;
                transform: scale(1.05);
            }
            70% {
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Search Container */
        .search-container {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 40px;
            margin: -60px auto 60px;
            max-width: 600px;
            position: relative;
            z-index: 10;
            box-shadow: var(--shadow-heavy);
            border: 2px solid rgba(34, 62, 127, 0.1);
            opacity: 0;
            animation: slideInUp 1s ease-out 1.2s forwards;
        }

        .search-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .search-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: linear-gradient(135deg, #223E7F 0%, #1a2d5d 100%);
            border-radius: 2px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            font-weight: 500;
            color: var(--text-dark);
            margin-bottom: 8px;
            display: block;
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e8ed;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(34, 62, 127, 0.1);
            transform: translateY(-2px);
        }

        .or-separator {
            text-align: center;
            margin: 30px 0;
            position: relative;
            font-weight: 600;
            color: var(--primary-color);
        }

        .or-separator::before,
        .or-separator::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 40%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
        }

        .or-separator::before { left: 0; }
        .or-separator::after { right: 0; }

        .search-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #223E7F 0%, #1a2d5d 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .search-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .search-btn:hover::before {
            left: 100%;
        }

        .search-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-medium);
        }

        /* Results Section */
        .results-section {
            padding: 60px 0;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }

        .results-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .results-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 15px;
            text-shadow: none;
        }

        .results-count {
            font-size: 1.2rem;
            color: var(--text-light);
            font-weight: 300;
        }

        /* Center Cards */
        .center-card {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: var(--shadow-medium);
            border: 2px solid rgba(34, 62, 127, 0.1);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(50px);
            animation: cardSlideIn 0.6s ease-out forwards;
        }

        .center-card:nth-child(1) { animation-delay: 0.1s; }
        .center-card:nth-child(2) { animation-delay: 0.2s; }
        .center-card:nth-child(3) { animation-delay: 0.3s; }
        .center-card:nth-child(4) { animation-delay: 0.4s; }
        .center-card:nth-child(5) { animation-delay: 0.5s; }
        .center-card:nth-child(6) { animation-delay: 0.6s; }

        @keyframes cardSlideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .center-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(135deg, #223E7F 0%, #1a2d5d 100%);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .center-card:hover::before {
            transform: scaleX(1);
        }

        .center-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-heavy);
        }

        .center-name {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .center-name i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        .center-info {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 8px 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-icon {
            color: var(--primary-color);
            font-size: 1.1rem;
            margin-top: 2px;
            min-width: 20px;
        }

        .info-content {
            flex: 1;
        }

        .info-label {
            font-weight: 600;
            color: var(--text-dark);
            font-size: 0.9rem;
            margin-bottom: 2px;
        }

        .info-value {
            color: var(--text-light);
            font-size: 0.95rem;
            line-height: 1.4;
        }

        /* No Results */
        .no-results {
            text-align: center;
            padding: 80px 20px;
            color: var(--primary-color);
        }

        .no-results-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            opacity: 0.7;
            color: var(--primary-color);
        }

        .no-results-title {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--primary-color);
        }

        .no-results-text {
            font-size: 1.1rem;
            opacity: 0.8;
            max-width: 500px;
            margin: 0 auto;
            color: var(--text-light);
        }

        /* Error Messages */
        .error-message {
            background: rgba(231, 76, 60, 0.1);
            border: 1px solid rgba(231, 76, 60, 0.3);
            color: #e74c3c;
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: 500;
        }

        /* Loading Animation */
        .loading {
            display: none;
            text-align: center;
            padding: 40px;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 4px solid rgba(34, 62, 127, 0.3);
            border-top: 4px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.1rem;
            }

            .search-container {
                margin: -40px 20px 40px;
                padding: 30px 20px;
            }

            .center-card {
                margin-bottom: 20px;
                padding: 20px;
            }

            .results-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .hero-section {
                padding: 100px 0 60px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .search-container {
                padding: 25px 15px;
            }

            .center-name {
                font-size: 1.3rem;
            }
        }

        /* Scroll animations */
        .fade-in-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>


    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h1 class="hero-title">
                    <?php echo isset($tags) ? get_tag($tags, 'centers_hero_title', 'Find Service Centers') : 'Find Service Centers'; ?>
                </h1>
                <p class="hero-subtitle">
                    <?php echo isset($tags) ? get_tag($tags, 'centers_hero_subtitle', 'Locate our professional car care centers near you') : 'Locate our professional car care centers near you'; ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Search Container -->
    <div class="container">
        <div class="search-container">
            <h2 class="search-title">
                <i class="fas fa-search"></i>
                <?php echo isset($tags) ? get_tag($tags, 'centers_search_title', 'Search Centers') : 'Search Centers'; ?>
            </h2>
            <form action="<?php echo base_url('centers/search'); ?>" method="POST" id="searchForm">
                <div class="form-group">
                    <label for="pin_code" class="form-label">
                        <i class="fas fa-map-pin"></i>
                        <?php echo isset($tags) ? get_tag($tags, 'centers_pincode_label', 'Pin Code') : 'Pin Code'; ?>
                    </label>
                    <input type="text" 
                           class="form-control" 
                           id="pin_code" 
                           name="pin_code" 
                           placeholder="<?php echo isset($tags) ? get_tag($tags, 'centers_pincode_placeholder', 'Enter your pin code (e.g., 560001)') : 'Enter your pin code (e.g., 560001)'; ?>" 
                           value="<?php echo set_value('pin_code', ''); ?>">
                </div>
                
                <div class="or-separator">
                    <span>OR</span>
                </div>
                
                <div class="form-group">
                    <label for="city" class="form-label">
                        <i class="fas fa-city"></i>
                        <?php echo isset($tags) ? get_tag($tags, 'centers_city_label', 'City') : 'City'; ?>
                    </label>
                    <input type="text" 
                           class="form-control" 
                           id="city" 
                           name="city" 
                           placeholder="<?php echo isset($tags) ? get_tag($tags, 'centers_city_placeholder', 'Enter your city (e.g., Bangalore)') : 'Enter your city (e.g., Bangalore)'; ?>" 
                           value="<?php echo set_value('city', ''); ?>">
                </div>
                
                <button type="submit" class="search-btn">
                    <i class="fas fa-search"></i>
                    <?php echo isset($tags) ? get_tag($tags, 'centers_search_button', 'Find Centers') : 'Find Centers'; ?>
                </button>
            </form>
        </div>
    </div>

    <!-- Loading Animation -->
    <div class="loading" id="loadingAnimation">
        <div class="loading-spinner"></div>
        <p style="color: var(--primary-color);">Searching for centers...</p>
    </div>

    <!-- Results Section -->
    <section class="results-section">
        <div class="container">
            <!-- Error Message Display -->
            <?php if (isset($error) && !empty($error)): ?>
                <div class="error-message">
                    <i class="fas fa-exclamation-triangle"></i>
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <!-- Results Header -->
            <?php if (isset($centers) && !empty($centers)): ?>
                <div class="results-header fade-in-up">
                    <h2 class="results-title">
                        <i class="fas fa-map-marked-alt"></i>
                        Centers Found
                    </h2>
                    <p class="results-count">
                        <?php echo count($centers); ?> 
                        <?php echo isset($tags) ? get_tag($tags, 'centers_results_found_text', 'center(s) found') : 'center(s) found'; ?>
                        <?php
                        $pinCode = $this->input->post('pin_code');
                        $city = $this->input->post('city');
                        $searchCriteria = [];
                        if (!empty($pinCode)) {
                            $searchCriteria[] = 'Pin Code: ' . htmlspecialchars($pinCode);
                        }
                        if (!empty($city)) {
                            $searchCriteria[] = 'City: ' . htmlspecialchars($city);
                        }
                        echo !empty($searchCriteria) ? ' for ' . implode(' and ', $searchCriteria) : '';
                        ?>
                    </p>
                </div>

                <!-- Centers Grid -->
                <div class="row">
                    <?php foreach ($centers as $index => $center): ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="center-card" style="animation-delay: <?php echo ($index * 0.1); ?>s;">
                                <h3 class="center-name">
                                    <i class="fas fa-store"></i>
                                    <?php echo htmlspecialchars($center->name); ?>
                                </h3>
                                
                                <div class="center-info">
                                    <div class="info-item">
                                        <i class="fas fa-map-marker-alt info-icon"></i>
                                        <div class="info-content">
                                            <div class="info-label">Address</div>
                                            <div class="info-value"><?php echo htmlspecialchars($center->address); ?></div>
                                        </div>
                                    </div>
                                    
                                    <div class="info-item">
                                        <i class="fas fa-city info-icon"></i>
                                        <div class="info-content">
                                            <div class="info-label">City</div>
                                            <div class="info-value"><?php echo htmlspecialchars($center->city); ?></div>
                                        </div>
                                    </div>
                                    
                                    <div class="info-item">
                                        <i class="fas fa-map-pin info-icon"></i>
                                        <div class="info-content">
                                            <div class="info-label">Pin Code</div>
                                            <div class="info-value"><?php echo htmlspecialchars($center->pin_code); ?></div>
                                        </div>
                                    </div>
                                    
                                    <?php if (isset($center->phone) && !empty($center->phone)): ?>
                                    <div class="info-item">
                                        <i class="fas fa-phone info-icon"></i>
                                        <div class="info-content">
                                            <div class="info-label">Phone</div>
                                            <div class="info-value">
                                                <a href="tel:<?php echo htmlspecialchars($center->phone); ?>" 
                                                   style="color: var(--primary-color); text-decoration: none;">
                                                    <?php echo htmlspecialchars($center->phone); ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php elseif (isset($centers) && empty($centers) && !isset($error)): ?>
                <!-- No Results -->
                <div class="no-results fade-in-up">
                    <div class="no-results-icon">
                        <i class="fas fa-search-location"></i>
                    </div>
                    <h3 class="no-results-title">No Centers Found</h3>
                    <p class="no-results-text">
                        <?php echo isset($tags) ? get_tag($tags, 'centers_no_results_text', 'We couldn\'t find any service centers matching your search criteria. Please try a different location or contact us for assistance.') : 'We couldn\'t find any service centers matching your search criteria. Please try a different location or contact us for assistance.'; ?>
                    </p>
                </div>
            <?php endif; ?>

            <!-- Pagination Links -->
            <?php if (isset($pagination)): ?>
                <div class="row">
                    <div class="col-12 mt-4 text-center">
                        <?php echo $pagination; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Footer -->
    <?php $this->load->view('themes/frontend/common/footer'); ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/cart.js"></script>
    
    <script>
        var BASEURL = '<?php echo base_url(); ?>';
        
        // Initialize AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });

        // Form submission with loading animation
        document.getElementById('searchForm').addEventListener('submit', function() {
            document.getElementById('loadingAnimation').style.display = 'block';
        });

        // Scroll animations
        function isElementInViewport(el) {
            const rect = el.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }

        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.fade-in-up');
            elements.forEach(el => {
                if (isElementInViewport(el)) {
                    el.classList.add('visible');
                }
            });
        }

        // Throttled scroll event
        let ticking = false;
        function updateAnimations() {
            handleScrollAnimations();
            ticking = false;
        }

        window.addEventListener('scroll', function() {
            if (!ticking) {
                requestAnimationFrame(updateAnimations);
                ticking = true;
            }
        });

        // Initial check
        handleScrollAnimations();

        // Enhanced form interactions
        const formInputs = document.querySelectorAll('.form-control');
        formInputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });

        // Add ripple effect to search button
        const searchBtn = document.querySelector('.search-btn');
        searchBtn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });

        // Add CSS for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            .ripple {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.6);
                transform: scale(0);
                animation: ripple-animation 0.6s linear;
                pointer-events: none;
            }
            
            @keyframes ripple-animation {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);
    </script>