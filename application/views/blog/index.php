<style>
.navbar-light .navbar-nav .nav-link {
    color: #282828 !important;
}

.heroinnerbanner.blog {
    margin-top: 80px;
    margin-bottom: 10px;
    text-align: center;
}

.heroinnerbanner.blog .secondslider {
    text-align: center;
}

.heroinnerbanner.blog .secondslider h2 {
    font-size: 45px;
    color: #223E7F;
    text-shadow: none;
    font-weight: 700;
    margin-bottom: 20px;
}

.heroinnerbanner.blog .secondslider p {
    font-size: 18px;
    color: #223E7F;
    font-family: 'Montserrat';
    margin: 0 auto;
    margin-bottom: 0;
}

.heroinnerbanner.blog .strip {
    text-align: center;
    margin: 10px auto 5px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.heroinnerbanner.blog .strip img {
    max-width: 200px;
    width: 100%;
    height: auto;
}

.blog-page {
    background: #FFFFFF;
    padding-top: 0;
    padding-bottom: 70px;
}

.blog-container {
    max-width: 1160px;
    margin: 0 auto;
    padding: 0 15px;
    margin-top: 20px;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 20px;
    margin-top: 0;
    margin-bottom: 60px;
}

.blog-card {
    background: #FFFFFF;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    border: 1px solid #e0e0e0;
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.blog-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
    background: #f5f5f5;
}

.blog-image-placeholder {
    width: 100%;
    height: 220px;
    object-fit: cover;
    background-size: cover;
    background-position: center;
    position: relative;
}

.blog-image-placeholder::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(34, 62, 127, 0.3) 0%, rgba(220, 53, 69, 0.3) 100%);
}

.blog-content {
    padding: 20px;
}

.blog-date {
    font-size: 13px;
    color: #dc3545;
    margin-bottom: 10px;
    font-weight: 600;
}

.blog-title {
    font-size: 22px;
    font-weight: 700;
    color: #223E7F;
    margin-bottom: 12px;
    line-height: 1.4;
}

.blog-excerpt {
    font-size: 15px;
    color: #666666;
    line-height: 1.6;
    margin-bottom: 18px;
}

.blog-read-more {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 11px 28px;
    background: #dc3545;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    transition: all 0.3s ease;
    font-size: 14px;
    border: none;
    box-shadow: 0 2px 8px rgba(220, 53, 69, 0.3);
}

.blog-read-more:hover {
    background: #c82333;
    color: #fff;
    text-decoration: none;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
}

.blog-read-more i {
    transition: transform 0.3s ease;
    font-size: 12px;
}

.blog-read-more:hover i {
    transform: translateX(4px);
}

.no-blogs {
    text-align: center;
    padding: 80px 20px;
    background: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
}

.no-blogs h3 {
    font-size: 28px;
    color: #223E7F;
    margin-bottom: 15px;
}

.no-blogs p {
    font-size: 16px;
    color: #666666;
}

@media (max-width: 768px) {
    .heroinnerbanner.blog {
        margin-top: 60px;
        margin-bottom: 5px;
    }
    
    .blog-page {
        padding-top: 0;
    }
    
    .blog-container {
        margin-top: 15px;
    }
    
    .heroinnerbanner.blog .strip {
        margin: 8px auto 3px;
    }
    
    .heroinnerbanner.blog .secondslider p {
        margin-bottom: 0;
    }
    
    .heroinnerbanner.blog .secondslider h2 {
        font-size: 28px;
    }
    
    .heroinnerbanner.blog .secondslider p {
        font-size: 16px;
    }
    
    .heroinnerbanner.blog .strip img {
        max-width: 150px;
    }
    
    .blog-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .blog-title {
        font-size: 18px;
    }
    
    .blog-read-more {
        padding: 9px 22px;
        font-size: 13px;
    }
    
    .blog-read-more i {
        font-size: 11px;
    }
}
</style>

<div class="heroinnerbanner blog">
    <div class="container">
        <div class="secondslider">
            <h2>Mastercraft Blog</h2>
            <div class="strip">
                <img src="<?php echo base_url(); ?>assets/frontend/images/strip_s.png" alt="Blog Decorative Strip">
            </div>
            <p>Stay updated with our latest news, tips, and insights</p>
        </div>
    </div>
</div>

<div class="blog-page">
    <div class="blog-container">

        <?php if (!empty($blogs)): ?>
            <div class="blog-grid">
                <?php 
                // Array of placeholder images from your existing assets
                $placeholder_images = array(
                    'slider2.jpg',
                    'slider3.jpg',
                    'slider4.jpg',
                    'slider5.jpg',
                    'slider6.jpg',
                    'slider7.jpg',
                    'benzcar.jpg',
                    'wash.jpg'
                );
                $image_index = 0;
                ?>
                <?php foreach ($blogs as $blog): ?>
                    <div class="blog-card">
                        <?php if (!empty($blog->featured_image)): ?>
                            <img src="<?php echo base_url('uploads/blog/' . $blog->featured_image); ?>" 
                                 alt="<?php echo htmlspecialchars($blog->title); ?>" 
                                 class="blog-image">
                        <?php else: ?>
                            <?php 
                            $placeholder = $placeholder_images[$image_index % count($placeholder_images)];
                            $image_index++;
                            ?>
                            <div class="blog-image-placeholder" 
                                 style="background-image: url('<?php echo base_url('assets/frontend/images/' . $placeholder); ?>');">
                            </div>
                        <?php endif; ?>
                        
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="fa fa-calendar"></i> 
                                <?php echo date('F d, Y', strtotime($blog->created_at)); ?>
                            </div>
                            
                            <h2 class="blog-title"><?php echo htmlspecialchars($blog->title); ?></h2>
                            
                            <p class="blog-excerpt">
                                <?php 
                                $excerpt = strip_tags($blog->content);
                                echo substr($excerpt, 0, 150) . '...'; 
                                ?>
                            </p>
                            
                            <a href="<?php echo base_url('blog/view/' . $blog->slug); ?>" 
                               class="blog-read-more">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="no-blogs">
                <h3>No Blog Posts Yet</h3>
                <p>Stay tuned! We'll be sharing exciting content soon.</p>
            </div>
        <?php endif; ?>
    </div>
</div>


