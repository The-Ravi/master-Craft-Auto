<?php $this->load->view('themes/frontend/common/header'); ?>

<style>
.blog-detail-container {
    background: #f8f9fa;
    padding: 40px 0 60px;
}

.blog-detail-content {
    background: white;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.blog-detail-header {
    margin-bottom: 40px;
    padding-bottom: 30px;
    border-bottom: 2px solid #f0f0f0;
}

.blog-detail-header h1 {
    font-size: 38px;
    color: #223e7f;
    margin-bottom: 20px;
    line-height: 1.3;
}

.blog-detail-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    font-size: 14px;
    color: #666;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 5px;
}

.meta-item strong {
    color: #223e7f;
}

.blog-featured-image {
    width: 100%;
    max-height: 450px;
    object-fit: cover;
    border-radius: 8px;
    margin: 30px 0;
}

.blog-detail-body {
    font-size: 16px;
    line-height: 1.8;
    color: #333;
}

.blog-detail-body h2 {
    font-size: 28px;
    color: #223e7f;
    margin: 35px 0 20px;
    font-weight: 700;
}

.blog-detail-body h3 {
    font-size: 22px;
    color: #223e7f;
    margin: 25px 0 15px;
    font-weight: 600;
}

.blog-detail-body p {
    margin-bottom: 15px;
}

.blog-detail-body ul,
.blog-detail-body ol {
    margin: 20px 0 20px 30px;
}

.blog-detail-body li {
    margin-bottom: 8px;
}

.blog-detail-body blockquote {
    border-left: 4px solid #ff6b35;
    padding: 15px 20px;
    margin: 20px 0;
    background: #f8f9fa;
    font-style: italic;
    color: #666;
}

.blog-detail-body img {
    max-width: 100%;
    height: auto;
    margin: 20px 0;
    border-radius: 8px;
}

.blog-navigation {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-top: 50px;
    padding-top: 30px;
    border-top: 2px solid #f0f0f0;
}

.blog-nav-link {
    flex: 1;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.blog-nav-link:hover {
    background: #223e7f;
    color: white;
}

.blog-nav-link-label {
    display: block;
    font-size: 12px;
    color: #999;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}

.blog-nav-link:hover .blog-nav-link-label {
    color: #ffb3b3;
}

.blog-nav-link-title {
    font-size: 16px;
    font-weight: 600;
    color: #223e7f;
}

.blog-nav-link:hover .blog-nav-link-title {
    color: white;
}

.blog-nav-link.prev::before {
    content: '← ';
}

.blog-nav-link.next::after {
    content: ' →';
}

.blog-sidebar {
    padding: 30px;
    background: #f8f9fa;
    border-radius: 8px;
}

.blog-sidebar-title {
    font-size: 20px;
    color: #223e7f;
    font-weight: 700;
    margin-bottom: 20px;
}

.recent-blogs-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.recent-blogs-list li {
    padding: 12px 0;
    border-bottom: 1px solid #e0e0e0;
}

.recent-blogs-list li:last-child {
    border-bottom: none;
}

.recent-blogs-list a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
    font-size: 14px;
}

.recent-blogs-list a:hover {
    color: #ff6b35;
}

.back-to-blogs {
    display: inline-block;
    margin-bottom: 20px;
    color: #ff6b35;
    text-decoration: none;
    font-weight: 600;
}

.back-to-blogs:hover {
    color: #223e7f;
}

.back-to-blogs::before {
    content: '← ';
}

@media (max-width: 768px) {
    .blog-detail-content {
        padding: 25px;
    }

    .blog-detail-header h1 {
        font-size: 26px;
    }

    .blog-detail-meta {
        gap: 15px;
        font-size: 13px;
    }

    .blog-navigation {
        flex-direction: column;
    }
}
</style>

<div class="blog-detail-container">
    <div class="container">
        <a href="<?php echo base_url('blogs'); ?>" class="back-to-blogs">Back to Blogs</a>

        <?php if (!empty($blog)): ?>
            <div class="blog-detail-content">
                <div class="blog-detail-header">
                    <h1><?php echo $blog->title; ?></h1>
                    
                    <div class="blog-detail-meta">
                        <div class="meta-item">
                            <strong>Published:</strong>
                            <span><?php echo date('F d, Y', strtotime($blog->created_at)); ?></span>
                        </div>
                        <div class="meta-item">
                            <strong>Category:</strong>
                            <span><?php echo !empty($blog->category) ? $blog->category : 'General'; ?></span>
                        </div>
                        <div class="meta-item">
                            <strong>Views:</strong>
                            <span><?php echo $blog->views; ?></span>
                        </div>
                        <?php if (!empty($blog->author)): ?>
                            <div class="meta-item">
                                <strong>By:</strong>
                                <span><?php echo $blog->author; ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (!empty($blog->featured_image)): ?>
                    <img src="<?php echo base_url('uploads/blogs/' . $blog->featured_image); ?>" 
                         alt="<?php echo $blog->title; ?>" 
                         class="blog-featured-image">
                <?php endif; ?>

                <div class="blog-detail-body">
                    <?php echo $blog->content; ?>
                </div>

                <div class="blog-navigation">
                    <?php
                    // You can add previous/next blog navigation here
                    // For now, we'll just show a back to blogs button
                    ?>
                    <a href="<?php echo base_url('blogs'); ?>" class="blog-nav-link">
                        <span class="blog-nav-link-label">← Back to all blogs</span>
                        <span class="blog-nav-link-title">View All Articles</span>
                    </a>
                </div>
            </div>
        <?php else: ?>
            <div class="blog-detail-content">
                <h2>Blog Not Found</h2>
                <p>The blog you're looking for doesn't exist.</p>
                <a href="<?php echo base_url('blogs'); ?>" class="btn btn-primary">Back to Blogs</a>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $this->load->view('themes/frontend/common/footer'); ?>
