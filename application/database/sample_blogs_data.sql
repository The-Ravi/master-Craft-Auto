-- Sample Blog Data
-- Insert sample blog posts to test the blogs functionality

INSERT INTO `cr_blogs` (`title`, `slug`, `excerpt`, `content`, `category`, `author`, `status`, `views`, `created_at`) VALUES

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

<p>By following these maintenance tips, you''ll keep your vehicle running smoothly for years to come!</p>',
'Maintenance', 'Admin', 1, 125, NOW()),

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
<p>Always park in a garage or shaded area when possible. This minimizes UV exposure and reduces the risk of paint damage from weather and debris.</p>',
'Paint Protection', 'Admin', 1, 89, DATE_SUB(NOW(), INTERVAL 7 DAY)),

('Understanding Your Insurance Coverage', 'understanding-insurance-coverage', 
'A comprehensive breakdown of auto insurance coverage types and what they mean for you.',
'<h2>Types of Auto Insurance Coverage</h2>
<p>Understanding your insurance coverage is essential for protecting yourself financially on the road.</p>

<h2>Liability Coverage</h2>
<p>Liability coverage pays for damage you cause to others'' vehicles or property. It''s required by law in most states.</p>

<h2>Collision Coverage</h2>
<p>This covers damage to your vehicle from a collision with another vehicle or object, minus your deductible.</p>

<h2>Comprehensive Coverage</h2>
<p>Comprehensive coverage protects against non-collision incidents like theft, vandalism, weather, and animal collisions.</p>

<h2>Uninsured/Underinsured Motorist Coverage</h2>
<p>This protects you if you''re hit by a driver with insufficient or no insurance.</p>

<h2>Medical Payments Coverage</h2>
<p>Medical payments coverage covers medical expenses for you and your passengers after an accident.</p>

<p>Consult with your insurance agent to ensure you have adequate coverage for your needs.</p>',
'Insurance', 'Admin', 1, 156, DATE_SUB(NOW(), INTERVAL 14 DAY)),

('Professional Denting and Painting Services', 'professional-denting-painting', 
'Why choosing professional services for dent repair and painting is the best decision for your vehicle.',
'<h2>Why Go Professional?</h2>
<p>When your vehicle needs dent repair or paint work, choosing professional services ensures the best results.</p>

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

<p>Contact us today for a free estimate on your dent and paint repairs!</p>',
'Services', 'Admin', 1, 203, DATE_SUB(NOW(), INTERVAL 21 DAY));
