<?php
/**
 * SEO Setup Helper - Initialize default SEO tags for all pages
 * Run this once to populate the database with default SEO tags
 */

if (!function_exists('setup_default_seo_tags')) {
    function setup_default_seo_tags() {
        $CI =& get_instance();
        $CI->load->database();
        
        // Define default SEO tags for all pages
        $default_seo_tags = [
            // Home Pages
            [
                'page' => 'home_index',
                'tag_type' => 'seo',
                'tag_key' => 'home_index_title',
                'tag_value' => 'Transform Your Wheels With Car Detailing | Mastercraft'
            ],
            [
                'page' => 'home_index',
                'tag_type' => 'seo',
                'tag_key' => 'home_index_meta_description',
                'tag_value' => 'Mastercraft is the best auto destination for car detailing, car denting, painting, ceramic coating & much more. Book Today and turn your car into a masterpiece.'
            ],
            [
                'page' => 'home_services',
                'tag_type' => 'seo',
                'tag_key' => 'home_services_title',
                'tag_value' => 'Professional Car Services - Detailing, Denting & Painting | Mastercraft'
            ],
            [
                'page' => 'home_services',
                'tag_type' => 'seo',
                'tag_key' => 'home_services_meta_description',
                'tag_value' => 'Discover our comprehensive car services including professional detailing, denting, painting, ceramic coating and more. Expert care for your vehicle.'
            ],
            [
                'page' => 'home_services_details',
                'tag_type' => 'seo',
                'tag_key' => 'home_services_details_title',
                'tag_value' => 'Service Details - Professional Car Care | Mastercraft'
            ],
            [
                'page' => 'home_services_details',
                'tag_type' => 'seo',
                'tag_key' => 'home_services_details_meta_description',
                'tag_value' => 'Get detailed information about our professional car care services. Quality workmanship and customer satisfaction guaranteed.'
            ],
            [
                'page' => 'home_denting_painting',
                'tag_type' => 'seo',
                'tag_key' => 'home_denting_painting_title',
                'tag_value' => 'Car Denting & Painting Services - Professional Auto Body Repair | Mastercraft'
            ],
            [
                'page' => 'home_denting_painting',
                'tag_type' => 'seo',
                'tag_key' => 'home_denting_painting_meta_description',
                'tag_value' => 'Expert car denting and painting services. Restore your vehicle\'s appearance with our professional auto body repair and painting solutions.'
            ],
            [
                'page' => 'home_aboutus',
                'tag_type' => 'seo',
                'tag_key' => 'home_aboutus_title',
                'tag_value' => 'About Us - Leading Car Care Experts | Mastercraft Auto'
            ],
            [
                'page' => 'home_aboutus',
                'tag_type' => 'seo',
                'tag_key' => 'home_aboutus_meta_description',
                'tag_value' => 'Learn about Mastercraft Auto - your trusted partner for premium car care services. Years of experience in automotive detailing and restoration.'
            ],
            [
                'page' => 'home_gallery',
                'tag_type' => 'seo',
                'tag_key' => 'home_gallery_title',
                'tag_value' => 'Car Transformation Gallery - Before & After Results | Mastercraft'
            ],
            [
                'page' => 'home_gallery',
                'tag_type' => 'seo',
                'tag_key' => 'home_gallery_meta_description',
                'tag_value' => 'View our stunning car transformation gallery showcasing before and after results of our professional detailing and restoration services.'
            ],
            [
                'page' => 'home_centers',
                'tag_type' => 'seo',
                'tag_key' => 'home_centers_title',
                'tag_value' => 'Service Centers Near You - Find Mastercraft Auto Locations'
            ],
            [
                'page' => 'home_centers',
                'tag_type' => 'seo',
                'tag_key' => 'home_centers_meta_description',
                'tag_value' => 'Find Mastercraft Auto service centers near you. Convenient locations for professional car care, detailing, and maintenance services.'
            ],
            [
                'page' => 'home_faq',
                'tag_type' => 'seo',
                'tag_key' => 'home_faq_title',
                'tag_value' => 'Frequently Asked Questions - Car Care Services | Mastercraft'
            ],
            [
                'page' => 'home_faq',
                'tag_type' => 'seo',
                'tag_key' => 'home_faq_meta_description',
                'tag_value' => 'Get answers to commonly asked questions about our car care services, pricing, booking, and service processes.'
            ],
            [
                'page' => 'home_video',
                'tag_type' => 'seo',
                'tag_key' => 'home_video_title',
                'tag_value' => 'Car Care Videos - Professional Techniques & Results | Mastercraft'
            ],
            [
                'page' => 'home_video',
                'tag_type' => 'seo',
                'tag_key' => 'home_video_meta_description',
                'tag_value' => 'Watch our car care videos showcasing professional techniques, transformation results, and expert tips for vehicle maintenance.'
            ],
            [
                'page' => 'home_insurance',
                'tag_type' => 'seo',
                'tag_key' => 'home_insurance_title',
                'tag_value' => 'Car Insurance Assistance - Claims & Coverage Support | Mastercraft'
            ],
            [
                'page' => 'home_insurance',
                'tag_type' => 'seo',
                'tag_key' => 'home_insurance_meta_description',
                'tag_value' => 'Get assistance with car insurance claims and coverage for accident repairs, denting, painting, and restoration services.'
            ],
            [
                'page' => 'home_testimonials',
                'tag_type' => 'seo',
                'tag_key' => 'home_testimonials_title',
                'tag_value' => 'Customer Reviews & Testimonials - Mastercraft Auto'
            ],
            [
                'page' => 'home_testimonials',
                'tag_type' => 'seo',
                'tag_key' => 'home_testimonials_meta_description',
                'tag_value' => 'Read what our satisfied customers say about their experience with Mastercraft Auto car care services and exceptional results.'
            ],
            [
                'page' => 'home_thankyou',
                'tag_type' => 'seo',
                'tag_key' => 'home_thankyou_title',
                'tag_value' => 'Thank You - Booking Confirmed | Mastercraft Auto'
            ],
            [
                'page' => 'home_thankyou',
                'tag_type' => 'seo',
                'tag_key' => 'home_thankyou_meta_description',
                'tag_value' => 'Thank you for choosing Mastercraft Auto. Your service booking has been confirmed. We look forward to serving you.'
            ],
            // Admin Pages
            [
                'page' => 'admin_login',
                'tag_type' => 'seo',
                'tag_key' => 'admin_login_title',
                'tag_value' => 'Admin Login - Mastercraft Auto Management System'
            ],
            [
                'page' => 'admin_login',
                'tag_type' => 'seo',
                'tag_key' => 'admin_login_meta_description',
                'tag_value' => 'Secure admin login portal for Mastercraft Auto management system. Authorized personnel only.'
            ]
        ];

        // Insert tags if they don't exist
        foreach ($default_seo_tags as $tag) {
            $existing = $CI->db
                ->where('page', $tag['page'])
                ->where('tag_key', $tag['tag_key'])
                ->get('cr_page_tags')
                ->num_rows();
                
            if ($existing == 0) {
                $CI->db->insert('cr_page_tags', $tag);
            }
        }
        
        return "Default SEO tags have been set up successfully!";
    }
}

if (!function_exists('get_seo_page_recommendations')) {
    /**
     * Get recommendations for SEO improvements
     */
    function get_seo_page_recommendations() {
        return [
            'title_length' => [
                'min' => 30,
                'max' => 60,
                'optimal' => '50-60 characters for best SEO results'
            ],
            'description_length' => [
                'min' => 50,
                'max' => 160,
                'optimal' => '150-160 characters for best SEO results'
            ],
            'recommended_pages' => [
                'home_index' => 'Main homepage with primary keywords',
                'home_services' => 'Services overview page',
                'home_aboutus' => 'About us / company information',
                'home_gallery' => 'Portfolio and work samples',
                'home_centers' => 'Location and contact information',
                'home_faq' => 'Frequently asked questions'
            ]
        ];
    }
}
?>