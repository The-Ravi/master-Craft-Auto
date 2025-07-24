<!DOCTYPE html>
<html lang="en">
<head>
    <!-- top head start -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="apple-touch-icon-precomposed" href="https://mastercraftauto.co.in/images/logo.png">
    <link rel="icon" href="https://mastercraftauto.co.in/images/logo.png">
    <link rel="shortcut icon" href="https://mastercraftauto.co.in/images/logo.png">
    <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/font/stylesheet.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/style.css?v=1.20" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.0/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add Montserrat font explicitly if not already loaded -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- top head end -->
    
    <?php 
    // Set page identifier for SEO tags
    $page_identifier = 'home_centers';
    // Include SEO head component
    $this->load->view('themes/frontend/common/seo-head', ['page_identifier' => $page_identifier, 'tags' => isset($tags) ? $tags : []]);
    ?>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            background-color: #f5f7fa;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg stroke='%23223E7F' stroke-width='0.5' fill='none' stroke-opacity='0.1'%3E%3Crect x='0' y='0' width='100' height='100'/%3E%3Cpath d='M0 0L50 50M50 50L100 0M50 50L100 100M50 50L0 100'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: 100px 100px;
        }
        .container, .container-fluid {
            max-width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            margin: 0 auto;
            box-sizing: border-box;
        }
        .main, footer {
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 15px;
            box-sizing: border-box;
        }
        footer {
            overflow: hidden;
        }
        /* Navbar Color Override (Matching gallery.php) */
        .navbar-light .navbar-nav .nav-link {
            color: #282828 !important;
        }
        ul.dropdown-menu li a {
            padding: .25rem 1rem !important;
        }
        /* Explicit Styling for Hero Banner to Ensure Visibility and Increased Spacing */
        .header {
            margin-bottom: 50px; /* Increased space below the navbar/header */
        }
        .heroinnerbanner.centers {
            position: relative;
            z-index: 1; /* Ensure hero banner is above other content */
            margin-bottom: 30px; /* Reduced space below hero banner */
            margin-top: 60px; /* Increased space above hero banner to separate from navbar */
            min-height: 200px; /* Provide minimum height to ensure visibility */
            background-color: transparent; /* Ensure no background hides content */
        }
        .heroinnerbanner.centers .secondslider {
            padding: 60px 0; /* Adjusted padding for balanced spacing */
            text-align: center; /* Ensure content is centered */
            display: block !important; /* Force display */
            visibility: visible !important; /* Force visibility */
        }
        .heroinnerbanner.centers .secondslider h2 {
            font-size: 45px;
            color: #223E7F;
            text-shadow: none;
            font-family: 'Montserrat', sans-serif !important;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 15px;
            letter-spacing: 1px;
            text-align: center;
        }
        .heroinnerbanner.centers .strip {
            margin-top: 15px;
            margin-bottom: 15px;
            text-align: center;
        }
        .heroinnerbanner.centers .strip img {
            max-width: 120px;
            display: block;
            margin: 0 auto;
        }
        .heroinnerbanner.centers .secondslider span {
            font-size: 30px;
            color: #223E7F;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
            text-align: center;
            display: block;
        }
        /* Professional Styling for Search Container with Adjusted Positioning */
        .search-container {
            background: rgba(255, 255, 255, 0.98); /* Slightly transparent to show subtle background */
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            padding: 25px;
            margin: 10px auto 30px; /* Reduced top margin */
            position: relative;
            z-index: 2; /* Above hero banner */
            max-width: 500px;
            border-top: 5px solid #223E7F;
            backdrop-filter: blur(10px); /* Subtle blur effect */
        }
        .search-container h2 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            text-align: center;
            color: #223E7F;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-label {
            font-size: 0.9rem;
            margin-bottom: 5px;
            color: #333;
            font-weight: 500;
        }
        .form-control {
            /* font-size: 0.9rem; */
            padding: 8px 10px;
            /* border-radius: 8px; */
            /* border: 1px solid #ccc;
            transition: border-color 0.3s ease; */
        }
        .form-control:focus {
            border-color: #223E7F;
            box-shadow: 0 0 0 0.2rem rgba(34, 62, 127, 0.25);
            outline: none;
        }
        .btn-primary {
            background-color: #223E7F;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            text-transform: uppercase;
            width: 100%;
            border-radius: 8px;
            transition: background-color 0.3s ease;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        .btn-primary:hover {
            background-color: #1a2d5d;
        }
        .center-card {
            background: rgba(255, 255, 255, 0.98); /* Slightly transparent */
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            backdrop-filter: blur(10px); /* Subtle blur effect */
        }
        .center-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            background: rgba(255, 255, 255, 1); /* Full white on hover */
        }
        .center-card h2 {
            font-size: 1.6rem;
            color: #223E7F;
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        .center-card h4 {
            font-size: 1.3rem;
            color: #223E7F;
            margin-bottom: 15px;
            font-family: 'Montserrat', sans-serif;
            font-weight: bold;
        }
        .center-card p {
            margin: 8px 0;
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        .no-results {
            text-align: center;
            font-size: 1.3rem;
            color: #777;
            margin-top: 50px;
        }
        .or-separator {
            text-align: center;
            margin: 10px 0;
            font-size: 1rem;
            color: #223E7F;
            font-weight: bold;
            position: relative;
        }
        .or-separator::before, .or-separator::after {
            content: "";
            position: absolute;
            top: 50%;
            width: 40%;
            height: 1px;
            background: #ccc;
        }
        .or-separator::before {
            left: 10px;
        }
        .or-separator::after {
            right: 10px;
        }
        /* Ensure main content area has proper background for readability */
        .main {
            position: relative;
            z-index: 1;
            min-height: 500px;
        }
        @media (max-width: 767px) {
            .heroinnerbanner.centers .secondslider h2 {
                font-size: 21px;
            }
            .heroinnerbanner.centers .secondslider span {
                font-size: 18px;
            }
            .search-container {
                padding: 15px;
                margin: 5px auto 20px; 
                max-width: 90%; /* Adjusted margin for mobile */
            }
            .search-container h2 {
                font-size: 1.1rem;
            }
            .heroinnerbanner.centers {
                margin-top: 40px; /* Slightly reduced for mobile */
                margin-bottom: 20px;
            }
            .header {
                margin-bottom: 30px; /* Slightly reduced for mobile */
            }
        }
    </style>
</head>
<body>
    <!-- Navbar loaded from header.php -->
    <?php $this->load->view('themes/frontend/common/header'); ?>

    <!-- Explicit Hero Banner for Centers to Ensure It Displays -->
    <div class="heroinnerbanner centers my-5">
        <div class="container">
            <div class="secondslider">
                <h2>
                    <?php echo isset($tags) ? get_tag($tags, 'centers_hero_title', 'FIND SERVICE CENTERS') : 'Find Service Centers'; ?>
                </h2>
                <div class="strip">
                    <img src="https://agenziaviaggiinnepal.com/craft/assets/frontend/images/strip_s.png"
                         alt="<?php echo isset($tags) ? get_tag($tags, 'centers_strip_alt', 'Strip Image') : 'Strip Image'; ?>">
                </div>
                <span>
                    <?php echo isset($tags) ? get_tag($tags, 'centers_hero_subtitle', 'Enter your pin code or city to locate nearby centers') : 'Enter your pin code or city to locate nearby centers'; ?>
                </span>
            </div>
        </div>
    </div>

        <!-- Main Content -->
    <div class="main">
        <div class="container">
            <div class="search-container">
                <h2><?php echo isset($tags) ? get_tag($tags, 'centers_search_title', 'Search by Pin Code or City') : 'Search by Pin Code or City'; ?></h2>
                <form action="<?php echo base_url('centers/search'); ?>" method="POST">
                    <div class="form-group">
                        <label for="pin_code" class="form-label"><?php echo isset($tags) ? get_tag($tags, 'centers_pincode_label', 'Enter Pin Code:') : 'Enter Pin Code:'; ?></label>
                        <input type="text" class="form-control" id="pin_code" name="pin_code" placeholder="<?php echo isset($tags) ? get_tag($tags, 'centers_pincode_placeholder', 'E.g., 123456') : 'E.g., 123456'; ?>" value="<?php echo set_value('pin_code', ''); ?>">
                    </div>
                    <div class="or-separator">
                        <p>OR</p>
                    </div>
                    <div class="form-group">
                        <label for="city" class="form-label"><?php echo isset($tags) ? get_tag($tags, 'centers_city_label', 'Enter City:') : 'Enter City:'; ?></label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo isset($tags) ? get_tag($tags, 'centers_city_placeholder', 'E.g., Bengaluru') : 'E.g., Bengaluru'; ?>" value="<?php echo set_value('city', ''); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary"><?php echo isset($tags) ? get_tag($tags, 'centers_search_button', 'Search Centers') : 'Search Centers'; ?></button>
                </form>
            </div>

            <!-- Error Message Display -->
            <?php if (isset($error) && !empty($error)): ?>
                <div class="no-results col-12">
                    <p style="color: red;"><?php echo $error; ?></p>
                </div>
            <?php endif; ?>

            <!-- Results Section -->
            <div class="row">
                <?php if (isset($centers) && !empty($centers)): ?>
                    <div class="col-12 mb-3">
                        <h3>
                            <?php echo count($centers); ?> <?php echo isset($tags) ? get_tag($tags, 'centers_results_found_text', 'Center(s) Found') : 'Center(s) Found'; ?>
                            <?php
                            $pinCode = $this->input->post('pin_code');
                            $city = $this->input->post('city');
                            $searchCriteria = [];
                            if (!empty($pinCode)) {
                                $searchCriteria[] = (isset($tags) ? get_tag($tags, 'centers_pincode_label', 'Pin Code:') : 'Pin Code:') . ' ' . htmlspecialchars($pinCode);
                            }
                            if (!empty($city)) {
                                $searchCriteria[] = (isset($tags) ? get_tag($tags, 'centers_city_label', 'City:') : 'City:') . ' ' . htmlspecialchars($city);
                            }
                            echo !empty($searchCriteria) ? ' ' . (isset($tags) ? get_tag($tags, 'centers_for_text', 'for') : 'for') . ' ' . implode(' ' . (isset($tags) ? get_tag($tags, 'centers_and_text', 'and') : 'and') . ' ', $searchCriteria) : '';
                            ?>
                        </h3>
                    </div>
                    <?php foreach ($centers as $center): ?>
                        <div class="col-md-4">
                            <div class="center-card">
                                <h4><?php echo htmlspecialchars($center->name); ?></h4>
                                <p><strong><?php echo isset($tags) ? get_tag($tags, 'centers_address_label', 'Address:') : 'Address:'; ?></strong> <?php echo htmlspecialchars($center->address); ?></p>
                                <p><strong><?php echo isset($tags) ? get_tag($tags, 'centers_city_label', 'City:') : 'City:'; ?></strong> <?php echo htmlspecialchars($center->city); ?></p>
                                <p><strong><?php echo isset($tags) ? get_tag($tags, 'centers_pincode_label', 'Pin Code:') : 'Pin Code:'; ?></strong> <?php echo htmlspecialchars($center->pin_code); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif (isset($centers) && empty($centers) && !isset($error)): ?>
                    <div class="no-results col-12">
                        <h3><?php echo isset($tags) ? get_tag($tags, 'centers_no_results_text', 'No centers found for the given criteria.') : 'No centers found for the given criteria.'; ?></h3>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Pagination Links (if applicable) -->
            <?php if (isset($pagination)): ?>
                <div class="row">
                    <div class="col-12 mt-3 text-center">
                        <?php echo $pagination; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer section -->
    <?php $this->load->view('themes/frontend/common/footer'); ?>
    <!-- Footer section end -->

    <!-- Scripts -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/cart.js"></script>
    <script>
        var BASEURL = '<?php echo base_url(); ?>';
    </script>
</body>
</html>