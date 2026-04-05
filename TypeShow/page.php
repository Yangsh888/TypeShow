<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="ts-single">
    <div class="ts-container-narrow">
        <div class="ts-breadcrumb ts-anim">
            <a href="<?php $this->options->siteUrl(); ?>">首页</a>
            <span class="ts-breadcrumb-sep">/</span>
            <span class="ts-breadcrumb-current"><?php $this->title(); ?></span>
        </div>

        <article class="ts-article ts-article-page">
            <header class="ts-article-header">
                <h1 class="ts-post-title"><?php $this->title(); ?></h1>
                <div class="ts-post-meta">
                    <span class="ts-meta-item">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <time datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
                    </span>
                </div>
            </header>

            <div class="ts-article-body">
                <?php $this->content(); ?>
            </div>
        </article>

        <?php if ($this->allow('comment')): ?>
        <?php $this->need('comments.php'); ?>
        <?php endif; ?>
    </div>
</main>

<?php $this->need('footer.php'); ?>
