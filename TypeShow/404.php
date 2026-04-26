<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="ts-not-found">
    <div class="ts-not-found-inner">
        <div class="ts-not-found-num">404</div>
        <h1 class="ts-not-found-title">页面未找到</h1>
        <p class="ts-not-found-desc">抱歉，您访问的页面不存在或已被移除。<br>请检查网址是否正确，或返回首页继续浏览。</p>

        <div class="ts-not-found-actions">
            <a href="<?php $this->options->siteUrl(); ?>" class="ts-btn-primary">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                返回首页
            </a>
            <?php if ($this->options->tsNavBlog): ?>
            <a href="<?php echo htmlspecialchars(ts_blog_url($this), ENT_QUOTES, 'UTF-8'); ?>"
               class="ts-btn-secondary">浏览博客</a>
            <?php endif; ?>
        </div>

        <form class="ts-404-search" action="<?php $this->options->siteUrl(); ?>" method="get" role="search">
            <div class="ts-404-search-inner">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                <input type="text" name="s" class="ts-404-search-input" placeholder="搜索内容...">
                <button type="submit" class="ts-404-search-btn" aria-label="搜索">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </button>
            </div>
        </form>
    </div>
</main>

<?php $this->need('footer.php'); ?>
