-- ============================================================================
-- BLOGS TABLE - COMPLETE SETUP
-- ============================================================================
-- Copy and paste this entire SQL into phpMyAdmin SQL tab and click "Go"
-- ============================================================================

-- Step 1: Create the blogs table
CREATE TABLE IF NOT EXISTS `cr_blogs` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(255) NOT NULL COMMENT 'Blog title',
  `slug` VARCHAR(255) UNIQUE NOT NULL COMMENT 'URL-friendly slug',
  `excerpt` LONGTEXT COMMENT 'Short blog excerpt/summary',
  `content` LONGTEXT NOT NULL COMMENT 'Full blog content',
  `featured_image` VARCHAR(255) COMMENT 'Featured image filename',
  `category` VARCHAR(100) COMMENT 'Blog category',
  `author` VARCHAR(100) COMMENT 'Blog author name',
  `views` INT DEFAULT 0 COMMENT 'Number of views',
  `status` TINYINT(1) DEFAULT 1 COMMENT '1 = Published, 0 = Draft',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP COMMENT 'Date created',
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Date updated',
  
  INDEX `idx_slug` (`slug`),
  INDEX `idx_status` (`status`),
  INDEX `idx_created_at` (`created_at`),
  INDEX `idx_category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Blog posts table';

-- ============================================================================
-- Step 2: Insert sample blog data
-- ============================================================================

INSERT INTO `cr_blogs` (`title`, `slug`, `excerpt`, `content`, `category`, `author`, `status`, `views`, `created_at`) VALUES

-- Blog 1
('The Ultimate Guide to Car Maintenance', 'ultimate-guide-car-maintenance', 
'Learn the essential tips and tricks to keep your vehicle running smoothly and prevent costly repairs.',
'<h2>Introduction</h2>
<p>Regular car maintenance is crucial for keeping your vehicle in top condition, ensuring safety, and maintaining its resale value. In this comprehensive guide, we''ll cover everything you need to know about car maintenance.</p>

<h2>Regular Oil Changes</h2>
<p>One of the most important maintenance tasks is changing your oil regularly. Most modern vehicles require an oil change every 5,000 to 10,000 miles. Fresh oil keeps your engine lubricated and running efficiently.</p>

<h3>Benefits of Regular Oil Changes:</h3>
<ul>
<li>Improved engine performance</li>
<li>Extended engine life</li>
<li>Better fuel efficiency</li>
<li>Reduced emissions</li>
</ul>

<h2>Tire Care and Rotation</h2>
<p>Your tires are critical for safety and fuel efficiency. Check your tire pressure monthly and rotate them every 5,000-7,000 miles to ensure even wear.</p>

<h2>Battery Maintenance</h2>
<p>A healthy battery is essential for starting your vehicle. Have your battery tested annually, and replace it every 3-5 years for optimal performance.</p>

<h2>Brake System</h2>
<p>Your brakes are one of the most important safety components. Have them inspected regularly and replace brake pads when they wear down.</p>

<p>By following these maintenance tips, you''ll keep your vehicle running smoothly for years to come!</p>',
'Maintenance', 'Admin', 1, 125, NOW()),

-- Blog 2
('Top 5 Paint Protection Tips for Your Vehicle', 'top-5-paint-protection-tips', 
'Discover how to keep your car''s paint looking brand new with these expert protection tips.',
'<h2>Why Paint Protection Matters</h2>
<p>Your vehicle''s paint is constantly exposed to harsh environmental elements. Protecting it properly can save you hundreds in repair costs down the road.</p>

<h2>1. Regular Washing</h2>
<p>Wash your vehicle at least twice a month with pH-balanced car soap and a soft microfiber cloth. This removes dirt, salt, and contaminants that can damage the paint.</p>

<h2>2. Wax Application</h2>
<p>Apply a quality car wax every three months. This creates a protective barrier that shields your paint from UV rays and environmental contaminants.</p>

<h2>3. Paint Sealant</h2>
<p>Consider using a paint sealant for long-lasting protection. Sealants last longer than wax and provide superior protection against harsh conditions.</p>

<h2>4. Ceramic Coating</h2>
<p>For the ultimate protection, invest in a professional ceramic coating. These coatings can last 2-5 years and provide exceptional protection.</p>

<h2>5. Park Smart</h2>
<p>Always park in a garage or shaded area when possible. This minimizes UV exposure and reduces the risk of paint damage from weather and debris.</p>

<p>With these five tips, your vehicle''s paint will remain vibrant and protected for years to come!</p>',
'Paint Protection', 'Admin', 1, 89, DATE_SUB(NOW(), INTERVAL 7 DAY)),

-- Blog 3
('Understanding Your Insurance Coverage', 'understanding-insurance-coverage', 
'A comprehensive breakdown of auto insurance coverage types and what they mean for you.',
'<h2>Types of Auto Insurance Coverage</h2>
<p>Understanding your insurance coverage is essential for protecting yourself financially on the road.</p>

<h2>Liability Coverage</h2>
<p>Liability coverage pays for damage you cause to others'' vehicles or property. It''s required by law in most states and is the foundation of any insurance policy.</p>

<h2>Collision Coverage</h2>
<p>This covers damage to your vehicle from a collision with another vehicle or object, minus your deductible. It''s recommended if you have a newer vehicle.</p>

<h2>Comprehensive Coverage</h2>
<p>Comprehensive coverage protects against non-collision incidents like theft, vandalism, weather, and animal collisions. It covers virtually everything except collisions.</p>

<h2>Uninsured/Underinsured Motorist Coverage</h2>
<p>This protects you if you''re hit by a driver with insufficient or no insurance. It can cover medical bills and vehicle repairs.</p>

<h2>Medical Payments Coverage</h2>
<p>Medical payments coverage covers medical expenses for you and your passengers after an accident, regardless of who was at fault.</p>

<p>Consult with your insurance agent to ensure you have adequate coverage for your needs.</p>',
'Insurance', 'Admin', 1, 156, DATE_SUB(NOW(), INTERVAL 14 DAY)),

-- Blog 4
('Professional Denting and Painting Services', 'professional-denting-painting', 
'Why choosing professional services for dent repair and painting is the best decision for your vehicle.',
'<h2>Why Go Professional?</h2>
<p>When your vehicle needs dent repair or paint work, choosing professional services ensures the best results and protects your investment.</p>

<h2>Benefits of Professional Dent Repair</h2>
<p>Our professional technicians use advanced techniques and tools to restore your vehicle to its original condition without damage to the surrounding paint.</p>

<ul>
<li>Expert assessment of damage</li>
<li>Advanced repair techniques</li>
<li>High-quality materials</li>
<li>Professional finish</li>
<li>Warranty on repairs</li>
</ul>

<h2>Professional Painting Services</h2>
<p>Whether you need a complete repaint or touch-ups, our professional painting team delivers flawless results that match your vehicle''s original factory color.</p>

<h3>Our Process:</h3>
<ol>
<li>Thorough cleaning and preparation</li>
<li>Color matching to factory specifications</li>
<li>Professional application with premium paints</li>
<li>Quality inspection and finishing touches</li>
</ol>

<h2>Quality Assurance</h2>
<p>We stand behind our work with comprehensive warranties and guarantees. Your satisfaction is our priority.</p>

<p>Contact us today for a free estimate on your dent and paint repairs!</p>',
'Services', 'Admin', 1, 203, DATE_SUB(NOW(), INTERVAL 21 DAY)),

-- Blog 5
('Winter Car Care: Essential Tips', 'winter-car-care-tips', 
'Prepare your vehicle for cold winter weather with these essential maintenance tips.',
'<h2>Winter Car Care Guide</h2>
<p>As temperatures drop, your vehicle needs special attention to stay safe and reliable on winter roads.</p>

<h2>1. Check Your Battery</h2>
<p>Cold weather reduces battery effectiveness by 30-50%. Have your battery tested and replace it if it''s more than 3-5 years old. A strong battery is essential for winter driving.</p>

<h2>2. Tire Pressure and Tread</h2>
<p>Tire pressure drops about 1 PSI for every 10°F drop in temperature. Keep your tires properly inflated and ensure they have adequate tread for traction on snow and ice.</p>

<h2>3. Fluid Levels</h2>
<p>Use winter-grade oil and ensure all fluid levels are topped up. Check your coolant concentration to prevent freezing.</p>

<h2>4. Brake System</h2>
<p>Have your brakes inspected to ensure they''re in top condition. Brakes are critical for safety on slippery winter roads.</p>

<h2>5. Windshield and Wipers</h2>
<p>Use winter-grade windshield washer fluid and install winter wiper blades for better visibility in snow and ice.</p>

<h2>6. Emergency Kit</h2>
<p>Keep an emergency kit in your vehicle with blankets, jumper cables, a flashlight, and first aid supplies.</p>

<p>Following these winter car care tips will keep you safe and your vehicle reliable throughout the cold season!</p>',
'Maintenance', 'Admin', 1, 67, DATE_SUB(NOW(), INTERVAL 28 DAY));

-- ============================================================================
-- Verification Query
-- ============================================================================
-- Run this to verify your blogs were inserted successfully:
-- SELECT COUNT(*) as total_blogs FROM cr_blogs WHERE status = 1;


