-- Create Blogs Table
-- Run this SQL to create the blogs table in your MySQL database

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
