-- ============================================
-- Blog Table Creation Script
-- Database: u748543024_mastercraft
-- ============================================

-- Drop table if exists (optional - comment out if you don't want to drop)
-- DROP TABLE IF EXISTS `blogs`;

-- Create blogs table
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `excerpt` text DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `status` enum('draft','published','archived') DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `status` (`status`),
  KEY `created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ============================================
-- Sample Blog Posts (Optional)
-- ============================================

-- Sample Blog Post 1
INSERT INTO `blogs` (`title`, `slug`, `content`, `excerpt`, `author`, `status`, `created_at`) VALUES
(
  'Welcome to Our Blog',
  'welcome-to-our-blog',
  '<h2>Welcome to Our Blog!</h2>
  <p>We are excited to launch our new blog where we will share valuable insights, tips, and updates about our services.</p>
  <p>Our team is committed to providing you with high-quality content that will help you make informed decisions about your vehicle care needs.</p>
  <h3>What to Expect</h3>
  <ul>
    <li>Expert tips on car maintenance</li>
    <li>Latest industry trends</li>
    <li>Service updates and promotions</li>
    <li>Customer success stories</li>
  </ul>
  <p>Stay tuned for more exciting content!</p>',
  'We are excited to launch our new blog where we will share valuable insights, tips, and updates about our services.',
  NULL,
  'Admin',
  'published',
  NOW()
),

-- Sample Blog Post 2
(
  'Top 5 Car Maintenance Tips',
  'top-5-car-maintenance-tips',
  '<h2>Keep Your Car Running Smoothly</h2>
  <p>Regular maintenance is key to keeping your vehicle in top condition. Here are our top 5 maintenance tips:</p>
  <h3>1. Regular Oil Changes</h3>
  <p>Change your oil every 5,000-7,500 miles to keep your engine running smoothly.</p>
  <h3>2. Check Tire Pressure</h3>
  <p>Maintain proper tire pressure for better fuel efficiency and safety.</p>
  <h3>3. Brake Inspection</h3>
  <p>Have your brakes inspected regularly to ensure optimal stopping power.</p>
  <h3>4. Battery Maintenance</h3>
  <p>Clean battery terminals and check battery health periodically.</p>
  <h3>5. Fluid Levels</h3>
  <p>Regularly check and top up all essential fluids including coolant, brake fluid, and windshield washer fluid.</p>
  <p>Following these simple tips can help extend the life of your vehicle and prevent costly repairs.</p>',
  'Regular maintenance is key to keeping your vehicle in top condition. Here are our top 5 essential maintenance tips.',
  NULL,
  'Admin',
  'published',
  NOW()
),

-- Sample Blog Post 3
(
  'Understanding Auto Insurance Claims',
  'understanding-auto-insurance-claims',
  '<h2>Navigating the Insurance Claim Process</h2>
  <p>Dealing with auto insurance claims can be confusing. We are here to help make the process easier.</p>
  <h3>Steps to File a Claim</h3>
  <ol>
    <li>Document the damage with photos</li>
    <li>Contact your insurance provider immediately</li>
    <li>Get a repair estimate</li>
    <li>Choose a trusted repair shop</li>
    <li>Keep all documentation</li>
  </ol>
  <p>Our team has extensive experience working with insurance companies and can help guide you through every step of the process.</p>
  <h3>We Work With All Major Insurance Providers</h3>
  <p>We have established relationships with all major insurance companies to ensure a smooth claim process for you.</p>
  <p>Contact us today to learn more about how we can help with your insurance claim.</p>',
  'Dealing with auto insurance claims can be confusing. We are here to help make the process easier.',
  NULL,
  'Admin',
  'published',
  NOW()
);

-- ============================================
-- Create uploads directory structure
-- NOTE: You need to manually create these directories:
-- - uploads/blog/
-- And set proper permissions (755 or 775)
-- ============================================

-- End of SQL script

