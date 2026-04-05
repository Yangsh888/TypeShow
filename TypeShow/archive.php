<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main class="ts-archive">
    <div class="ts-container-narrow">
        <div class="ts-archive-type-bar ts-anim">
            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
            <?php $this->archiveTitle([
                'category' => _t('分类 %s'),
                'search'   => _t('搜索：%s'),
                'tag'      => _t('标签 %s'),
                'author'   => _t('%s 的文章')
            ], '', ''); ?>
        </div>

        <?php if ($this->have()): ?>
        <div class="ts-post-list">
            <?php while ($this->next()): ?>
            <article class="ts-post-item ts-anim">
                <div class="ts-post-item-header">
                    <h2 class="ts-post-title">
                        <a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a>
                    </h2>
                    <time class="ts-post-item-date" datetime="<?php $this->date('Y-m-d'); ?>"><?php $this->date('Y-m-d'); ?></time>
                </div>
                <?php $this->excerpt(120, '...'); ?>
                <div class="ts-post-item-footer">
                    <?php if ($this->categories): ?>
                    <span class="ts-post-cat"><?php $this->category(',', false); ?></span>
                    <?php endif; ?>
                    <?php if ($this->commentsNum > 0): ?>
                    <span><?php $this->commentsNum(); ?> 评论</span>
                    <?php endif; ?>
                    <a href="<?php $this->permalink(); ?>" class="ts-post-read-more">阅读全文 →</a>
                </div>
            </article>
            <?php endwhile; ?>
        </div>

        <?php $this->pageNav('&laquo;', '&raquo;', 1, '...', ['wrapTag' => 'nav', 'wrapClass' => 'ts-pagination']); ?>

        <?php else: ?>
        <div class="ts-no-posts ts-anim">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
            <p>没有找到相关内容</p>
        </div>
        <?php endif; ?>
    </div>
</main>

<?php $this->need('footer.php'); ?>
