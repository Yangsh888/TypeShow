<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$pageSize   = (int) $this->options->pageSize ?: 10;
$currentPage = max(1, (int) $this->request->filter('int')->get('page', 1));
$posts      = \Widget\Archive::allocWithAlias('blog-list', ['type' => 'index', 'pageSize' => $pageSize, 'page' => $currentPage]);
$allCats    = \Widget\Metas\Category\Rows::alloc();

$this->need('header.php');
?>

<main class="ts-blog-page">

    <section class="ts-blog-hero">
        <div class="ts-blog-hero-bg">
            <div class="ts-blog-hero-glow"></div>
        </div>
        <div class="ts-container">
            <div class="ts-blog-hero-inner">
                <div class="ts-blog-hero-text ts-anim">
                    <span class="ts-section-label">博客</span>
                    <h1 class="ts-blog-hero-title">文章与思考</h1>
                    <p class="ts-blog-hero-desc">分享技术经验、开发心得与项目动态</p>
                </div>
                <?php if ($posts->getTotal() > 0): ?>
                <div class="ts-blog-hero-stat ts-anim ts-anim-delay-1">
                    <span class="ts-blog-stat-num"><?php echo $posts->getTotal(); ?></span>
                    <span class="ts-blog-stat-label">篇文章</span>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="ts-blog-body">
        <div class="ts-container">
            <div class="ts-blog-layout">

                <div class="ts-blog-main">
                    <?php if ($posts->have()): ?>
                    <div class="ts-blog-list">
                        <?php $idx = 0; while ($posts->next()): $idx++; ?>
                        <article class="ts-blog-card ts-anim ts-anim-delay-<?php echo min($idx, 5); ?>">
                            <a href="<?php $posts->permalink(); ?>" class="ts-blog-card-inner">
                                <div class="ts-blog-card-meta">
                                    <?php if ($posts->categories): ?>
                                    <span class="ts-blog-card-cat"><?php $posts->category(',', false); ?></span>
                                    <span class="ts-blog-meta-sep">·</span>
                                    <?php endif; ?>
                                    <time class="ts-blog-card-date" datetime="<?php $posts->date('Y-m-d'); ?>">
                                        <?php $posts->date('Y-m-d'); ?>
                                    </time>
                                    <?php if ($posts->commentsNum > 0): ?>
                                    <span class="ts-blog-meta-sep">·</span>
                                    <span class="ts-blog-card-comments">
                                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                                        <?php $posts->commentsNum(); ?>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <h2 class="ts-blog-card-title"><?php $posts->title(); ?></h2>

                                <?php $ex = strip_tags((string)$posts->excerpt); if (mb_strlen($ex) > 160) { $ex = mb_substr($ex, 0, 160) . '…'; } ?>
                                <?php if ($ex): ?>
                                <p class="ts-blog-card-excerpt"><?php echo htmlspecialchars($ex); ?></p>
                                <?php endif; ?>

                                <div class="ts-blog-card-footer">
                                    <span class="ts-blog-read-more">
                                        阅读全文
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                    </span>
                                </div>
                            </a>
                        </article>
                        <?php endwhile; ?>
                    </div>

                    <?php
                    $total   = $posts->getTotal();
                    $totalPage = (int) ceil($total / $pageSize);
                    if ($totalPage > 1):
                        $blogUrl = rtrim($this->options->siteUrl, '/') . '/' . ltrim($this->options->tsNavBlog, '/');
                    ?>
                    <nav class="ts-blog-pagination">
                        <?php if ($currentPage > 1): ?>
                        <a href="<?php echo $blogUrl . ($currentPage > 2 ? '?page=' . ($currentPage - 1) : ''); ?>" class="prev">←</a>
                        <?php endif; ?>

                        <?php for ($i = 1; $i <= $totalPage; $i++): ?>
                        <?php if ($i == $currentPage): ?>
                        <span class="current"><?php echo $i; ?></span>
                        <?php else: ?>
                        <a href="<?php echo $blogUrl . ($i > 1 ? '?page=' . $i : ''); ?>"><?php echo $i; ?></a>
                        <?php endif; ?>
                        <?php endfor; ?>

                        <?php if ($currentPage < $totalPage): ?>
                        <a href="<?php echo $blogUrl . '?page=' . ($currentPage + 1); ?>" class="next">→</a>
                        <?php endif; ?>
                    </nav>
                    <?php endif; ?>

                    <?php else: ?>
                    <div class="ts-blog-empty ts-anim">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                        <p>暂无文章</p>
                        <span>敬请期待</span>
                    </div>
                    <?php endif; ?>
                </div>

                <aside class="ts-blog-sidebar">

                    <?php if ($allCats->have()): ?>
                    <div class="ts-blog-widget ts-anim">
                        <h3 class="ts-blog-widget-title">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                            文章分类
                        </h3>
                        <ul class="ts-blog-cat-list">
                            <?php while ($allCats->next()): ?>
                            <li>
                                <a href="<?php $allCats->permalink(); ?>" class="ts-blog-cat-item">
                                    <span class="ts-blog-cat-name"><?php $allCats->name(); ?></span>
                                    <span class="ts-blog-cat-count"><?php $allCats->count(); ?></span>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <?php
                    $recentPosts = \Widget\Contents\Post\Recent::allocWithAlias('blog-recent', 'pageSize=5');
                    if ($recentPosts->have()):
                    ?>
                    <div class="ts-blog-widget ts-anim ts-anim-delay-1">
                        <h3 class="ts-blog-widget-title">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                            近期文章
                        </h3>
                        <ul class="ts-blog-recent-list">
                            <?php while ($recentPosts->next()): ?>
                            <li>
                                <a href="<?php $recentPosts->permalink(); ?>" class="ts-blog-recent-item">
                                    <span class="ts-blog-recent-title"><?php $recentPosts->title(); ?></span>
                                    <time class="ts-blog-recent-date"><?php $recentPosts->date('m/d'); ?></time>
                                </a>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <div class="ts-blog-widget ts-anim ts-anim-delay-2">
                        <a href="<?php echo rtrim($this->options->siteUrl, '/'); ?>/feed/" class="ts-blog-rss-btn" target="_blank" rel="noopener">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 11a9 9 0 0 1 9 9"/><path d="M4 4a16 16 0 0 1 16 16"/><circle cx="5" cy="19" r="1"/></svg>
                            订阅 RSS
                        </a>
                    </div>

                </aside>
            </div>
        </div>
    </section>

</main>

<?php $this->need('footer.php'); ?>
