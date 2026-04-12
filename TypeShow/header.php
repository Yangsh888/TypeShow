<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->archiveTitle([
        'category' => _t('分类 %s'),
        'search'   => _t('搜索 %s'),
        'tag'      => _t('标签 %s'),
        'author'   => _t('%s 的文章'),
    ], '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php if ($this->options->tsFavicon): ?>
    <link rel="icon" href="<?php echo htmlspecialchars($this->options->tsFavicon); ?>">
    <?php endif; ?>
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw='); ?>
    <?php if ($this->options->tsCustomHead): echo $this->options->tsCustomHead; endif; ?>
</head>
<body>
    <script>
    (function(){
        var t=localStorage.getItem('ts-theme');
        if(t==='dark'||(!t&&window.matchMedia('(prefers-color-scheme:dark)').matches)){
            document.documentElement.setAttribute('data-theme','dark');
        }
    })();
    </script>

    <nav class="ts-nav" id="tsNav">
        <div class="ts-container">
            <div class="ts-nav-inner">

                <a href="<?php $this->options->siteUrl(); ?>" class="ts-logo">
                    <?php if ($this->options->tsLogo): ?>
                    <img src="<?php echo htmlspecialchars($this->options->tsLogo); ?>"
                         alt="<?php $this->options->title(); ?>"
                         class="ts-logo-img ts-logo-img-light">
                    <img src="<?php echo htmlspecialchars($this->options->tsLogoDark ?: $this->options->tsLogo); ?>"
                         alt="<?php $this->options->title(); ?>"
                         class="ts-logo-img ts-logo-img-dark">
                    <?php else: ?>
                    <span class="ts-logo-text"><?php $this->options->title(); ?></span>
                    <?php endif; ?>
                </a>

                <div class="ts-nav-menu" id="tsNavMenu">
                    <a href="<?php $this->options->siteUrl(); ?>"
                       <?php if ($this->is('index')): ?>class="active"<?php endif; ?>>首页</a>
                    <?php if ($this->options->tsNavDocs): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsNavDocs); ?>"
                       target="_blank" rel="noopener">文档</a>
                    <?php endif; ?>
                    <?php if ($this->options->tsNavBlog): ?>
                    <a href="<?php echo rtrim($this->options->siteUrl, '/') . '/' . ltrim($this->options->tsNavBlog, '/'); ?>"
                       <?php if ($this->is('archive') && !$this->is('index')): ?>class="active"<?php endif; ?>>博客</a>
                    <?php endif; ?>
                    <?php
                    $this->widget('Widget_Contents_Page_List')->to($navPages);
                    $skipSlugs = array_filter([
                        $this->options->tsNavBlog,
                        'features', 'about'
                    ]);
                    while ($navPages->next()):
                        if (in_array($navPages->slug, $skipSlugs)) continue;
                    ?>
                    <a href="<?php $navPages->permalink(); ?>"
                       <?php if ($this->is('page', $navPages->slug)): ?>class="active"<?php endif; ?>>
                        <?php $navPages->title(); ?>
                    </a>
                    <?php endwhile; ?>
                </div>

                <div class="ts-nav-actions">
                    <button class="ts-nav-search-btn" id="tsSearchOpen" aria-label="搜索">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    </button>

                    <?php if ($this->options->tsNavGithub): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsNavGithub); ?>"
                       target="_blank" rel="noopener" class="ts-nav-github" aria-label="GitHub">
                        <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        <span class="ts-nav-github-text">GitHub</span>
                    </a>
                    <?php endif; ?>

                    <button class="ts-nav-theme-btn" id="tsThemeToggle" aria-label="切换主题">
                        <svg class="ts-icon-sun" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>
                        <svg class="ts-icon-moon" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
                    </button>

                    <button class="ts-nav-toggle-btn" id="tsNavToggle" aria-label="菜单">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="ts-search-overlay" id="tsSearchOverlay">
        <div class="ts-search-dialog">
            <div class="ts-search-header">
                <div class="ts-search-input-wrap">
                    <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                    <input type="text" class="ts-search-input" id="tsSearchInput"
                           placeholder="输入关键词搜索文章..." autocomplete="off" spellcheck="false">
                </div>
                <button class="ts-search-close" id="tsSearchClose" aria-label="关闭">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                </button>
            </div>
            <div class="ts-search-results" id="tsSearchResults">
                <div class="ts-search-hint">按 <kbd>↵</kbd> 跳转搜索页，或在此查看实时结果</div>
            </div>
        </div>
    </div>

    <script>
    (function(){
        var html = document.documentElement;
        var toggle = document.getElementById('tsThemeToggle');
        function syncThemeIcons(){
            var dark = html.getAttribute('data-theme') === 'dark';
            var sun = toggle ? toggle.querySelector('.ts-icon-sun') : null;
            var moon = toggle ? toggle.querySelector('.ts-icon-moon') : null;
            if(sun)  sun.style.display  = dark ? 'none'  : '';
            if(moon) moon.style.display = dark ? ''      : 'none';
        }
        syncThemeIcons();
        if(toggle){
            toggle.addEventListener('click', function(){
                var dark = html.getAttribute('data-theme') === 'dark';
                document.body.classList.add('ts-theme-switching');
                if(dark){ html.removeAttribute('data-theme'); localStorage.setItem('ts-theme','light'); }
                else    { html.setAttribute('data-theme','dark'); localStorage.setItem('ts-theme','dark'); }
                syncThemeIcons();
                setTimeout(function(){ document.body.classList.remove('ts-theme-switching'); }, 400);
            });
        }

        var navToggle = document.getElementById('tsNavToggle');
        var navMenu   = document.getElementById('tsNavMenu');
        if(navToggle && navMenu){
            navToggle.addEventListener('click', function(e){
                e.stopPropagation();
                navMenu.classList.toggle('ts-nav-open');
                this.setAttribute('aria-expanded', navMenu.classList.contains('ts-nav-open'));
            });
            document.addEventListener('click', function(e){
                if(navMenu.classList.contains('ts-nav-open') &&
                   !navMenu.contains(e.target) && e.target !== navToggle){
                    navMenu.classList.remove('ts-nav-open');
                    navToggle.setAttribute('aria-expanded', 'false');
                }
            });
            navMenu.querySelectorAll('a').forEach(function(a){
                a.addEventListener('click', function(){
                    navMenu.classList.remove('ts-nav-open');
                    navToggle.setAttribute('aria-expanded', 'false');
                });
            });
        }

        var overlay    = document.getElementById('tsSearchOverlay');
        var searchInput = document.getElementById('tsSearchInput');
        var results    = document.getElementById('tsSearchResults');
        var closeBtn   = document.getElementById('tsSearchClose');
        var openBtn    = document.getElementById('tsSearchOpen');
        var searchTimer = null;
        var siteUrl    = <?php echo json_encode(rtrim($this->options->siteUrl, '/')); ?>;

        function openSearch(){
            if(!overlay) return;
            overlay.classList.add('ts-open');
            if(searchInput){ searchInput.value=''; searchInput.focus(); }
            if(results) results.innerHTML = '<div class="ts-search-hint">按 <kbd>↵</kbd> 跳转搜索页，或在此查看实时结果</div>';
        }
        function closeSearch(){
            if(overlay) overlay.classList.remove('ts-open');
        }

        if(openBtn) openBtn.addEventListener('click', openSearch);
        if(closeBtn) closeBtn.addEventListener('click', closeSearch);
        if(overlay){
            overlay.addEventListener('click', function(e){
                if(e.target === overlay) closeSearch();
            });
        }

        document.addEventListener('keydown', function(e){
            if((e.metaKey || e.ctrlKey) && e.key === 'k'){ e.preventDefault(); openSearch(); }
            if(e.key === 'Escape') closeSearch();
            if(e.key === 'Enter' && overlay && overlay.classList.contains('ts-open') && searchInput && searchInput.value.trim()){
                e.preventDefault();
                window.location.href = siteUrl + '/?s=' + encodeURIComponent(searchInput.value.trim());
            }
        });

        if(searchInput){
            searchInput.addEventListener('input', function(){
                clearTimeout(searchTimer);
                var q = this.value.trim();
                if(!q){
                    results.innerHTML = '<div class="ts-search-hint">按 <kbd>↵</kbd> 跳转搜索页，或在此查看实时结果</div>';
                    return;
                }
                results.innerHTML = '<div class="ts-search-loading"><span class="ts-search-dot"></span><span class="ts-search-dot"></span><span class="ts-search-dot"></span></div>';
                searchTimer = setTimeout(function(){
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', siteUrl + '/?s=' + encodeURIComponent(q), true);
                    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                    xhr.onreadystatechange = function(){
                        if(xhr.readyState !== 4) return;
                        if(xhr.status === 200){
                            try{
                                var parser = new DOMParser();
                                var doc = parser.parseFromString(xhr.responseText, 'text/html');
                                var items = doc.querySelectorAll('.ts-post-item, article.ts-post-item');
                                if(!items.length){
                                    results.innerHTML = '<div class="ts-search-empty"><svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg><p>未找到相关文章</p></div>';
                                    return;
                                }
                                var html_str = '<div class="ts-search-list">';
                                items.forEach(function(item){
                                    var titleEl = item.querySelector('.ts-post-title a, h2 a, h3 a');
                                    var dateEl  = item.querySelector('time, .ts-post-item-date');
                                    var descEl  = item.querySelector('.ts-post-item-excerpt, p');
                                    if(!titleEl) return;
                                    html_str += '<a href="' + (titleEl.href || '#') + '" class="ts-search-item">';
                                    html_str += '<div class="ts-search-item-title">' + titleEl.textContent.trim() + '</div>';
                                    if(descEl) html_str += '<div class="ts-search-item-desc">' + descEl.textContent.trim().slice(0, 80) + '…</div>';
                                    if(dateEl) html_str += '<div class="ts-search-item-date">' + dateEl.textContent.trim() + '</div>';
                                    html_str += '</a>';
                                });
                                html_str += '</div>';
                                html_str += '<div class="ts-search-more"><a href="' + siteUrl + '/?s=' + encodeURIComponent(q) + '">查看全部结果 →</a></div>';
                                results.innerHTML = html_str;
                            } catch(err){
                                results.innerHTML = '<div class="ts-search-hint"><a href="' + siteUrl + '/?s=' + encodeURIComponent(q) + '">按回车在搜索页查看结果</a></div>';
                            }
                        } else {
                            results.innerHTML = '<div class="ts-search-hint"><a href="' + siteUrl + '/?s=' + encodeURIComponent(q) + '">按回车在搜索页查看结果</a></div>';
                        }
                    };
                    xhr.send();
                }, 400);
            });
        }
    })();
    </script>
