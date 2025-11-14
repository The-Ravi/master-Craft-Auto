<?php $this->load->view('themes/frontend/common/header'); ?>

<style>
.blog-container {
    background: #f8f9fa;
    padding: 60px 0;
}

.blog-header {
    text-align: center;
    margin-bottom: 50px;
}

.blog-header h1 {
    font-size: 42px;
    color: #223e7f;
    margin-bottom: 15px;
    font-weight: 700;
}

.blog-header p {
    font-size: 16px;
    color: #666;
    max-width: 600px;
    margin: 0 auto;
}

.blog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

.blog-card {
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.blog-card-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
    background: #e9ecef;
}

.blog-card-content {
    padding: 25px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.blog-card-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
    font-size: 13px;
    color: #999;
}

.blog-card-category {
    display: inline-block;
    background: #223e7f;
    color: white;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 12px;
}

.blog-card-title {
    font-size: 20px;
    color: #223e7f;
    margin-bottom: 12px;
    font-weight: 600;
    line-height: 1.4;
    flex-grow: 1;
}

.blog-card-title a {
    color: #223e7f;
    text-decoration: none;
    transition: color 0.3s ease;
}

.blog-card-title a:hover {
    color: #ff6b35;
}

.blog-card-excerpt {
    color: #666;
    font-size: 14px;
    line-height: 1.6;
    margin-bottom: 15px;
    flex-grow: 1;
}

.blog-card-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 15px;
    border-top: 1px solid #eee;
}

.blog-read-more {
    display: inline-block;
    color: #ff6b35;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.blog-read-more:hover {
    color: #223e7f;
    margin-right: -5px;
}

.blog-read-more::after {
    content: ' →';
}

.blog-views {
    color: #999;
    font-size: 13px;
}

.no-blogs {
    text-align: center;
    padding: 60px 20px;
    background: white;
    border-radius: 8px;
}

.no-blogs h3 {
    color: #666;
    font-size: 22px;
    margin-bottom: 10px;
}

.no-blogs p {
    color: #999;
}

@media (max-width: 768px) {
    .blog-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .blog-header h1 {
        font-size: 32px;
    }
}
</style>

<div class="blog-container">
    <div class="container">
        <div class="blog-header">
            <h1>Our Blog</h1>
            <p>Explore our latest insights, tips, and stories about automotive care and services.</p>
        </div>

        <?php if (!empty($blogs)): ?>
            <div class="blog-grid">
                <?php foreach ($blogs as $blog): ?>
                    <div class="blog-card">
                        <?php if (!empty($blog->featured_image)): ?>
                            <img src="<?php echo base_url('uploads/blogs/' . $blog->featured_image); ?>" 
                                 alt="<?php echo $blog->title; ?>" 
                                 class="blog-card-image">
                        <?php else: ?>
                            <div class="blog-card-image" 
                                 style="background: linear-gradient(135deg, #223e7f 0%, #ff6b35 100%);"></div>
                        <?php endif; ?>

                        <div class="blog-card-content">
                            <div class="blog-card-meta">
                                <span><?php echo date('M d, Y', strtotime($blog->created_at)); ?></span>
                                <span class="blog-card-category">
                                    <?php echo !empty($blog->category) ? $blog->category : 'General'; ?>
                                </span>
                            </div>

                            <h3 class="blog-card-title">
                                <a href="<?php echo base_url('blogs/' . $blog->slug); ?>">
                                    <?php echo substr($blog->title, 0, 50); ?>
                                </a>
                            </h3>

                            <p class="blog-card-excerpt">
                                <?php echo substr(strip_tags($blog->excerpt), 0, 100); ?>...
                            </p>

                            <div class="blog-card-footer">
                                <a href="<?php echo base_url('blogs/' . $blog->slug); ?>" class="blog-read-more">
                                    Read More
                                </a>
                                <span class="blog-views">
                                    <?php echo $blog->views; ?> views
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="no-blogs">
                <h3>No Blogs Found</h3>
                <p>We'll be publishing exciting content soon. Check back later!</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $this->load->view('themes/frontend/common/footer'); ?>
