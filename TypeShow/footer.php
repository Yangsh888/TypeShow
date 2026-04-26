<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<footer class="ts-footer">
    <div class="ts-container">
        <div class="ts-footer-inner">
            <div class="ts-footer-brand">
                <?php if ($this->options->tsLogo): ?>
                <a href="<?php $this->options->siteUrl(); ?>" class="ts-footer-logo">
                    <img src="<?php echo htmlspecialchars($this->options->tsLogo); ?>"
                         alt="<?php $this->options->title(); ?>"
                         class="ts-footer-logo-img ts-logo-img-light">
                    <img src="<?php echo htmlspecialchars($this->options->tsLogoDark ?: $this->options->tsLogo); ?>"
                         alt="<?php $this->options->title(); ?>"
                         class="ts-footer-logo-img ts-logo-img-dark">
                </a>
                <?php else: ?>
                <a href="<?php $this->options->siteUrl(); ?>" class="ts-footer-logo">
                    <span class="ts-footer-logo-text"><?php $this->options->title(); ?></span>
                </a>
                <?php endif; ?>
                <p class="ts-footer-slogan">
                    <?php echo nl2br(htmlspecialchars($this->options->tsFooterSlogan ?: '轻量、高效、现代化的博客系统')); ?>
                </p>
                <div class="ts-footer-social">
                    <?php if ($this->options->tsSocialGithub): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsSocialGithub); ?>"
                       target="_blank" rel="noopener" aria-label="GitHub">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if ($this->options->tsSocialQq): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsSocialQq); ?>"
                       target="_blank" rel="noopener" aria-label="QQ 群">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.262 2 11.5c0 2.463.935 4.71 2.47 6.43-.3.9-.96 2.55-2.47 3.57 2.13.27 4.2-.45 5.74-1.56C8.9 20.63 10.41 21 12 21c5.523 0 10-4.262 10-9.5S17.523 2 12 2zm-3 12.5c-.83 0-1.5-.895-1.5-2s.67-2 1.5-2 1.5.895 1.5 2-.67 2-1.5 2zm6 0c-.83 0-1.5-.895-1.5-2s.67-2 1.5-2 1.5.895 1.5 2-.67 2-1.5 2z"/></svg>
                    </a>
                    <?php endif; ?>
                    <?php if ($this->options->tsSocialEmail): ?>
                    <a href="mailto:<?php echo htmlspecialchars($this->options->tsSocialEmail); ?>"
                       aria-label="邮箱">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="ts-footer-cols">
                <div class="ts-footer-col">
                    <h4 class="ts-footer-col-title">产品</h4>
                    <div class="ts-footer-links">
                        <a href="<?php echo $this->options->siteUrl; ?>#features">功能特性</a>
                        <a href="<?php echo $this->options->siteUrl; ?>#install">快速开始</a>
                        <?php if ($this->options->tsChangelogLink): ?>
                        <a href="<?php echo htmlspecialchars($this->options->tsChangelogLink); ?>">更新日志</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="ts-footer-col">
                    <h4 class="ts-footer-col-title">资源</h4>
                    <div class="ts-footer-links">
                        <?php if ($this->options->tsNavDocs): ?>
                        <a href="<?php echo htmlspecialchars($this->options->tsNavDocs); ?>" target="_blank" rel="noopener">文档中心</a>
                        <?php endif; ?>
                        <?php if ($this->options->tsNavBlog): ?>
                        <a href="<?php echo htmlspecialchars(ts_blog_url($this), ENT_QUOTES, 'UTF-8'); ?>">博客文章</a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php
                $friendLinks = [];
                for ($i = 1; $i <= 6; $i++) {
                    $n = $this->options->{'tsFriendLink' . $i . 'Name'};
                    $u = $this->options->{'tsFriendLink' . $i . 'Url'};
                    if ($n && $u) $friendLinks[] = ['name' => $n, 'url' => $u];
                }
                if (!empty($friendLinks)):
                ?>
                <div class="ts-footer-col">
                    <h4 class="ts-footer-col-title">友情链接</h4>
                    <div class="ts-footer-links">
                        <?php foreach ($friendLinks as $fl): ?>
                        <a href="<?php echo htmlspecialchars($fl['url']); ?>" target="_blank" rel="noopener"><?php echo htmlspecialchars($fl['name']); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="ts-footer-bottom">
            <div class="ts-footer-copyright">
                Copyright &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($this->options->title); ?>
                <?php if ($this->options->tsFooterIcp): ?>
                &nbsp;·&nbsp;
                <a href="https://beian.miit.gov.cn/" target="_blank" rel="noopener">
                    <?php echo htmlspecialchars($this->options->tsFooterIcp); ?>
                </a>
                <?php endif; ?>
            </div>
            <div class="ts-footer-powered">
                Powered by <a href="https://www.typerenew.com" target="_blank" rel="noopener">TypeRenew</a>
                &nbsp;·&nbsp;
                Theme by <a href="https://github.com/Yangsh888/TypeShow" target="_blank" rel="noopener">TypeShow</a>
            </div>
        </div>
    </div>
</footer>

<?php
$tsCustomFooter = ts_footer_snippet($this->options->tsCustomFooter ?? '');
if ($tsCustomFooter !== '') {
    echo $tsCustomFooter;
}
?>

<button class="ts-back-top" id="tsBackTop" aria-label="返回顶部">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<script>
<?php
$ghUrl  = $this->options->tsNavGithub ? rtrim($this->options->tsNavGithub, '/') : 'https://github.com/Yangsh888/TypeRenew';
$ghRepo = preg_replace('#/(releases|tree|blob|issues|pulls|discussions).*$#', '', $ghUrl);
?>
var tsCommands = {
    git:      <?php echo \Typecho\Common::jsonEncode('git clone ' . $ghRepo . '.git .', JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP, '""'); ?>,
    download: <?php echo \Typecho\Common::jsonEncode('wget ' . $ghRepo . '/releases/latest/download/TypeRenew.zip', JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP, '""'); ?>
};
(function(){
    var nav     = document.getElementById('tsNav');
    var backTop = document.getElementById('tsBackTop');

    function onScroll(){
        var y = window.pageYOffset || document.documentElement.scrollTop;
        if(nav)     nav.classList.toggle('ts-nav-scrolled', y > 20);
        if(backTop) backTop.classList.toggle('ts-visible', y > 400);
    }
    window.addEventListener('scroll', onScroll, { passive: true });

    if(backTop){
        backTop.addEventListener('click', function(){
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    var animEls = document.querySelectorAll('.ts-anim');
    if('IntersectionObserver' in window){
        var io = new IntersectionObserver(function(entries){
            entries.forEach(function(e){
                if(e.isIntersecting){ e.target.classList.add('ts-visible'); io.unobserve(e.target); }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
        animEls.forEach(function(el){ io.observe(el); });
    } else {
        animEls.forEach(function(el){ el.classList.add('ts-visible'); });
    }

    var faqItems = document.querySelectorAll('.ts-faq-item');

    function faqClose(item) {
        var ans = item.querySelector('.ts-faq-answer');
        if (!ans) return;
        ans.style.maxHeight = ans.scrollHeight + 'px';
        requestAnimationFrame(function() {
            ans.style.maxHeight = '0';
            item.classList.remove('ts-faq-open');
        });
    }

    function faqOpen(item) {
        var ans = item.querySelector('.ts-faq-answer');
        if (!ans) return;
        item.classList.add('ts-faq-open');
        ans.style.maxHeight = ans.scrollHeight + 'px';
        ans.addEventListener('transitionend', function onEnd() {
            ans.removeEventListener('transitionend', onEnd);
            if (item.classList.contains('ts-faq-open')) {
                ans.style.maxHeight = 'none';
            }
        });
    }

    faqItems.forEach(function(item) {
        var q = item.querySelector('.ts-faq-question');
        if (!q) return;
        q.addEventListener('click', function() {
            var isOpen = item.classList.contains('ts-faq-open');
            faqItems.forEach(function(i) {
                if (i !== item && i.classList.contains('ts-faq-open')) faqClose(i);
            });
            if (isOpen) faqClose(item); else faqOpen(item);
        });
    });

    var installTabs = document.querySelectorAll('.ts-install-tab');
    var installCmd  = document.getElementById('tsInstallCmd');
    installTabs.forEach(function(tab){
        tab.addEventListener('click', function(){
            installTabs.forEach(function(t){ t.classList.remove('ts-active'); });
            this.classList.add('ts-active');
            if(installCmd && tsCommands[this.dataset.tab]) installCmd.textContent = tsCommands[this.dataset.tab];
        });
    });

    (function(){
        var lb = document.createElement('div');
        lb.className = 'ts-lightbox';
        var img = document.createElement('img');
        lb.appendChild(img);
        document.body.appendChild(lb);
        function close(){ lb.classList.remove('ts-lb-open'); }
        lb.addEventListener('click', close);
        document.addEventListener('keydown', function(e){ if(e.key==='Escape') close(); });
        document.querySelectorAll('.ts-article-body img, .ts-screenshot-img, .ts-hl-img-wrap img, .ts-hero-screenshot').forEach(function(el){
            el.addEventListener('click', function(){
                img.src = el.src;
                lb.classList.add('ts-lb-open');
            });
        });
    })();

    var copyBtn = document.getElementById('tsCopyBtn');
    if(copyBtn && installCmd){
        copyBtn.addEventListener('click', function(){
            navigator.clipboard.writeText(installCmd.textContent).then(function(){
                copyBtn.classList.add('ts-copied');
                copyBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 已复制';
                setTimeout(function(){
                    copyBtn.classList.remove('ts-copied');
                    copyBtn.innerHTML = '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg> 复制';
                }, 2000);
            }).catch(function(){
                var t = document.createElement('textarea');
                t.value = installCmd.textContent;
                document.body.appendChild(t);
                t.select();
                document.execCommand('copy');
                document.body.removeChild(t);
            });
        });
    }
})();
</script>

<?php $this->footer(); ?>
</body>
</html>
