<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="ts-single">
    <div class="ts-container-narrow">
        <div class="ts-breadcrumb ts-anim">
            <a href="<?php $this->options->siteUrl(); ?>">首页</a>
            <span class="ts-breadcrumb-sep">/</span>
            <?php if ($this->categories): $this->category(',', false); ?><span class="ts-breadcrumb-sep">/</span><?php endif; ?>
            <span class="ts-breadcrumb-current"><?php $this->title(); ?></span>
        </div>

        <article class="ts-article">
            <header class="ts-article-header">
                <h1 class="ts-post-title"><?php $this->title(); ?></h1>
                <div class="ts-post-meta">
                    <span class="ts-meta-item">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <time datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
                    </span>
                    <span class="ts-meta-item">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                        <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
                    </span>
                    <?php if ($this->categories): ?>
                    <span class="ts-meta-item">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                        <?php $this->category(',', false); ?>
                    </span>
                    <?php endif; ?>
                    <?php if ($this->commentsNum > 0): ?>
                    <span class="ts-meta-item">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                        <?php $this->commentsNum(); ?> 评论
                    </span>
                    <?php endif; ?>
                </div>
            </header>

            <div class="ts-article-body">
                <?php $this->content(); ?>
            </div>

            <?php if ($this->tags): ?>
            <footer class="ts-article-footer">
                <div class="ts-tags">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg>
                    <?php $this->tags('', true, ''); ?>
                </div>
            </footer>
            <?php endif; ?>
        </article>

        <nav class="ts-post-nav">
            <?php
            ob_start(); $this->thePrev('%s', ''); $prevHtml = ob_get_clean();
            ob_start(); $this->theNext('%s', ''); $nextHtml = ob_get_clean();
            ?>
            <div class="ts-post-nav-item<?php if (!trim($prevHtml)): ?> ts-nav-disabled<?php endif; ?>">
                <span class="ts-post-nav-label">
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"/></svg>
                    上一篇
                </span>
                <?php if (trim($prevHtml)): ?>
                <span class="ts-post-nav-title"><?php echo $prevHtml; ?></span>
                <?php else: ?>
                <span class="ts-post-nav-title">已是最早的文章</span>
                <?php endif; ?>
            </div>

            <div class="ts-post-nav-item ts-nav-next<?php if (!trim($nextHtml)): ?> ts-nav-disabled<?php endif; ?>">
                <span class="ts-post-nav-label">
                    下一篇
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                </span>
                <?php if (trim($nextHtml)): ?>
                <span class="ts-post-nav-title"><?php echo $nextHtml; ?></span>
                <?php else: ?>
                <span class="ts-post-nav-title">已是最新的文章</span>
                <?php endif; ?>
            </div>
        </nav>

        <?php $this->need('comments.php'); ?>
    </div>
</main>

<?php $this->need('footer.php'); ?>
