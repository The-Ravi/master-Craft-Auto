<style>
.navbar-light .navbar-nav .nav-link {
    color: #282828 !important;
}

.single-blog-page {
    background: #FFFFFF;
    padding-top: 120px;
    padding-bottom: 70px;
    min-height: 100vh;
}

.single-blog-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 15px;
}

.blog-post {
    background: #FFFFFF;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
    border: 1px solid #e0e0e0;
}

.blog-post-header {
    padding: 40px 40px 20px;
}

.blog-post-title {
    font-size: 38px;
    font-weight: 700;
    color: #223E7F;
    margin-bottom: 20px;
    line-height: 1.3;
}

.blog-post-meta {
    display: flex;
    gap: 30px;
    color: #dc3545;
    font-size: 14px;
    margin-bottom: 30px;
    flex-wrap: wrap;
    font-weight: 600;
}

.blog-post-meta span {
    display: flex;
    align-items: center;
    gap: 8px;
}

.blog-post-featured-image {
    width: 100%;
    height: 450px;
    object-fit: cover;
}

.blog-post-featured-placeholder {
    width: 100%;
    height: 450px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.blog-post-featured-placeholder::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(34, 62, 127, 0.2) 0%, rgba(220, 53, 69, 0.2) 100%);
}

.blog-post-content {
    padding: 40px;
    font-size: 16px;
    line-height: 1.8;
    color: #333333;
}

.blog-post-content h2 {
    font-size: 30px;
    font-weight: 700;
    color: #223E7F;
    margin-top: 40px;
    margin-bottom: 20px;
}

.blog-post-content h3 {
    font-size: 22px;
    font-weight: 600;
    color: #223E7F;
    margin-top: 30px;
    margin-bottom: 15px;
}

.blog-post-content p {
    margin-bottom: 20px;
}

.blog-post-content ul,
.blog-post-content ol {
    margin-bottom: 20px;
    padding-left: 30px;
}

.blog-post-content li {
    margin-bottom: 10px;
}

.blog-post-content img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    margin: 30px 0;
}

.blog-post-content blockquote {
    border-left: 4px solid #dc3545;
    padding-left: 20px;
    margin: 30px 0;
    font-style: italic;
    color: #666666;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
}

.blog-post-content ul,
.blog-post-content ol {
    color: #333333;
}

.back-to-blog {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 30px;
    padding: 12px 28px;
    background: #dc3545;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    transition: all 0.3s ease;
    font-size: 15px;
    border: none;
    box-shadow: 0 2px 8px rgba(220, 53, 69, 0.3);
}

.back-to-blog:hover {
    background: #c82333;
    color: #fff;
    text-decoration: none;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(220, 53, 69, 0.4);
}

.back-to-blog i {
    transition: transform 0.3s ease;
    font-size: 13px;
}

.back-to-blog:hover i {
    transform: translateX(-4px);
}

@media (max-width: 768px) {
    .single-blog-page {
        padding-top: 100px;
    }
    
    .blog-post-header {
        padding: 30px 20px 15px;
    }
    
    .blog-post-title {
        font-size: 26px;
    }
    
    .blog-post-meta {
        font-size: 13px;
        gap: 15px;
    }
    
    .blog-post-featured-image,
    .blog-post-featured-placeholder {
        height: 250px;
    }
    
    .blog-post-content {
        padding: 30px 20px;
        font-size: 15px;
    }
    
    .blog-post-content h2 {
        font-size: 22px;
    }
    
    .blog-post-content h3 {
        font-size: 18px;
    }
    
    .back-to-blog {
        padding: 10px 24px;
        font-size: 14px;
        margin-bottom: 20px;
    }
    
    .back-to-blog i {
        font-size: 12px;
    }
}
</style>

<div class="single-blog-page">
    <div class="single-blog-container">
        <a href="<?php echo base_url('blog'); ?>" class="back-to-blog">
            <i class="fa fa-arrow-left"></i> Back to Blog
        </a>
        
        <article class="blog-post">
            <div class="blog-post-header">
                <h1 class="blog-post-title"><?php echo htmlspecialchars($blog->title); ?></h1>
                
                <div class="blog-post-meta">
                    <span>
                        <i class="fa fa-calendar"></i>
                        <?php echo date('F d, Y', strtotime($blog->created_at)); ?>
                    </span>
                    <?php if (!empty($blog->author)): ?>
                        <span>
                            <i class="fa fa-user"></i>
                            <?php echo htmlspecialchars($blog->author); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            
            <?php if (!empty($blog->featured_image)): ?>
                <img src="<?php echo base_url('uploads/blog/' . $blog->featured_image); ?>" 
                     alt="<?php echo htmlspecialchars($blog->title); ?>" 
                     class="blog-post-featured-image">
            <?php else: ?>
                <?php 
                // Use a random placeholder from your existing slider images
                $placeholders = array('slider2.jpg', 'slider3.jpg', 'slider4.jpg', 'slider5.jpg', 'slider6.jpg');
                $random_placeholder = $placeholders[array_rand($placeholders)];
                ?>
                <div class="blog-post-featured-placeholder" 
                     style="background-image: url('<?php echo base_url('assets/frontend/images/' . $random_placeholder); ?>');">
                </div>
            <?php endif; ?>
            
            <div class="blog-post-content">
                <?php echo $blog->content; ?>
            </div>
        </article>
    </div>
</div>

