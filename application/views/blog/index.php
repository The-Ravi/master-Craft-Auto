<style>
.blog-page {
    padding: 150px 0px 70px 0px;
    min-height: 100vh;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.blog-container {
    max-width: 1160px;
    margin: 0 auto;
    padding: 0 15px;
}

.blog-header {
    text-align: center;
    margin-bottom: 60px;
}

.blog-header h1 {
    font-size: 48px;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
}

.blog-header p {
    font-size: 18px;
    color: #666;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
}

.blog-card {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}

.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.blog-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.blog-content {
    padding: 25px;
}

.blog-date {
    font-size: 14px;
    color: #999;
    margin-bottom: 10px;
}

.blog-title {
    font-size: 24px;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
    line-height: 1.4;
}

.blog-excerpt {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.blog-read-more {
    display: inline-block;
    padding: 10px 25px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.blog-read-more:hover {
    background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    color: #fff;
    text-decoration: none;
}

.no-blogs {
    text-align: center;
    padding: 80px 20px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.no-blogs h3 {
    font-size: 28px;
    color: #666;
    margin-bottom: 15px;
}

.no-blogs p {
    font-size: 16px;
    color: #999;
}

@media (max-width: 768px) {
    .blog-page {
        padding: 100px 0px 50px 0px;
    }
    
    .blog-header h1 {
        font-size: 36px;
    }
    
    .blog-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .blog-title {
        font-size: 20px;
    }
}
</style>

<div class="blog-page">
    <div class="blog-container">
        <div class="blog-header">
            <h1>Our Blog</h1>
            <p>Stay updated with our latest news, tips, and insights</p>
        </div>

        <?php if (!empty($blogs)): ?>
            <div class="blog-grid">
                <?php foreach ($blogs as $blog): ?>
                    <div class="blog-card">
                        <?php if (!empty($blog->featured_image)): ?>
                            <img src="<?php echo base_url('uploads/blog/' . $blog->featured_image); ?>" 
                                 alt="<?php echo htmlspecialchars($blog->title); ?>" 
                                 class="blog-image">
                        <?php else: ?>
                            <div class="blog-image"></div>
                        <?php endif; ?>
                        
                        <div class="blog-content">
                            <div class="blog-date">
                                <i class="far fa-calendar-alt"></i> 
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
                                Read More <i class="fas fa-arrow-right"></i>
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

