<style>
.single-blog-page {
    padding: 150px 0px 70px 0px;
    min-height: 100vh;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.single-blog-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 15px;
}

.blog-post {
    background: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.blog-post-header {
    padding: 40px 40px 20px;
}

.blog-post-title {
    font-size: 42px;
    font-weight: 700;
    color: #333;
    margin-bottom: 20px;
    line-height: 1.3;
}

.blog-post-meta {
    display: flex;
    gap: 30px;
    color: #999;
    font-size: 14px;
    margin-bottom: 30px;
    flex-wrap: wrap;
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

.blog-post-content {
    padding: 40px;
    font-size: 18px;
    line-height: 1.8;
    color: #444;
}

.blog-post-content h2 {
    font-size: 32px;
    font-weight: 700;
    color: #333;
    margin-top: 40px;
    margin-bottom: 20px;
}

.blog-post-content h3 {
    font-size: 24px;
    font-weight: 600;
    color: #333;
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
    border-left: 4px solid #667eea;
    padding-left: 20px;
    margin: 30px 0;
    font-style: italic;
    color: #666;
}

.back-to-blog {
    display: inline-block;
    margin-bottom: 30px;
    padding: 12px 30px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #fff;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.back-to-blog:hover {
    background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
    color: #fff;
    text-decoration: none;
    transform: translateX(-5px);
}

@media (max-width: 768px) {
    .single-blog-page {
        padding: 100px 0px 50px 0px;
    }
    
    .blog-post-header {
        padding: 30px 20px 15px;
    }
    
    .blog-post-title {
        font-size: 28px;
    }
    
    .blog-post-meta {
        font-size: 13px;
        gap: 15px;
    }
    
    .blog-post-featured-image {
        height: 250px;
    }
    
    .blog-post-content {
        padding: 30px 20px;
        font-size: 16px;
    }
    
    .blog-post-content h2 {
        font-size: 24px;
    }
    
    .blog-post-content h3 {
        font-size: 20px;
    }
}
</style>

<div class="single-blog-page">
    <div class="single-blog-container">
        <a href="<?php echo base_url('blog'); ?>" class="back-to-blog">
            <i class="fas fa-arrow-left"></i> Back to Blog
        </a>
        
        <article class="blog-post">
            <div class="blog-post-header">
                <h1 class="blog-post-title"><?php echo htmlspecialchars($blog->title); ?></h1>
                
                <div class="blog-post-meta">
                    <span>
                        <i class="far fa-calendar-alt"></i>
                        <?php echo date('F d, Y', strtotime($blog->created_at)); ?>
                    </span>
                    <?php if (!empty($blog->author)): ?>
                        <span>
                            <i class="far fa-user"></i>
                            <?php echo htmlspecialchars($blog->author); ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            
            <?php if (!empty($blog->featured_image)): ?>
                <img src="<?php echo base_url('uploads/blog/' . $blog->featured_image); ?>" 
                     alt="<?php echo htmlspecialchars($blog->title); ?>" 
                     class="blog-post-featured-image">
            <?php endif; ?>
            
            <div class="blog-post-content">
                <?php echo $blog->content; ?>
            </div>
        </article>
    </div>
</div>

