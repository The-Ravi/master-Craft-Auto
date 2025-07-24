# Master Craft Auto - Setup Guide

This guide will help you set up the Master Craft Auto website on your local environment.

## Prerequisites

- **Web Server**: Apache/Nginx with PHP support
- **PHP**: Version 7.4 or higher
- **Database**: MySQL 5.7+ or MariaDB
- **Composer**: For dependency management (optional)

## Installation Steps

### 1. Clone the Repository
```bash
git clone https://github.com/The-Ravi/master-Craft-Auto.git
cd master-Craft-Auto
```

### 2. Database Setup

#### Create Database
1. Create a new MySQL database named `u748543024_mastercraft` (or any name you prefer)
2. Import the database structure (SQL file should be provided separately)

#### Configure Database Connection
Edit `application/config/database.php`:

```php
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'localhost',        // Your database host
    'username' => 'root',             // Your database username
    'password' => 'root',             // Your database password
    'database' => 'u748543024_mastercraft', // Your database name
    'dbdriver' => 'mysqli',
    // ... other settings remain the same
);
```

### 3. File Permissions

Set proper permissions for the following directories:
```bash
chmod 755 application/cache/
chmod 755 application/logs/
chmod 755 application/sessions/
chmod 755 uploads/
```

### 4. Web Server Configuration

#### Apache (.htaccess)
The project includes `.htaccess` files for URL rewriting. Ensure `mod_rewrite` is enabled.

#### Nginx
If using Nginx, configure URL rewriting manually.

### 5. Base URL Configuration

Edit `application/config/config.php`:
```php
$config['base_url'] = 'http://localhost/master-Craft-Auto/'; // Adjust to your local URL
```

### 6. Upload Directory

Ensure the `uploads/` directory exists and is writable:
- `uploads/services/` - For service images
- `uploads/galleries/` - For gallery images
- `uploads/category/` - For category images

## Features Included

### SEO Tag Management System
- Dynamic meta tags for all pages
- SEO helper functions
- Admin interface for SEO management
- Automatic tag generation

### Admin Panel
- Dashboard: `/admin`
- Default credentials should be set up during database import

### Frontend Features
- Responsive design
- Service management
- Gallery management
- Contact forms
- FAQ system

## Common Issues & Solutions

### 1. Images Not Loading
- Check if `uploads/` directory has proper permissions
- Verify image paths in the database
- Ensure web server can serve static files

### 2. Database Connection Error
- Verify database credentials in `application/config/database.php`
- Ensure MySQL service is running
- Check if database exists

### 3. 404 Errors
- Enable `mod_rewrite` for Apache
- Check `.htaccess` files are present
- Verify base URL configuration

### 4. Session Issues
- Ensure `application/sessions/` directory is writable
- Check session configuration in `application/config/config.php`

## Development Notes

### File Structure
```
├── application/
│   ├── controllers/     # Main controllers
│   ├── models/         # Database models
│   ├── views/          # View templates
│   ├── helpers/        # Helper functions (including SEO helper)
│   └── modules/        # HMVC modules
├── assets/             # CSS, JS, Images
├── uploads/            # User uploaded content
└── system/             # CodeIgniter core files
```

### SEO Helper Usage
```php
// In controllers
$this->load->helper('seo_setup');

// Generate meta tags
$seo_data = generate_seo_tags('page_name', $custom_data);
$this->load->view('common/seo-head', $seo_data);
```

## Support

For issues or questions:
1. Check this setup guide
2. Review CodeIgniter documentation
3. Check the project's issue tracker on GitHub

## Security Notes

- Change default database credentials
- Update admin panel passwords
- Set proper file permissions
- Keep CodeIgniter framework updated
- Validate all user inputs

---

**Note**: This project uses CodeIgniter 3.x framework. Make sure you're familiar with CI3 conventions and best practices.