<?php
/**
 * TypeShow 是一款开源通用产品展示页模板，轻量高效且预置标准化展示模块，可快速搭建专业产品官网
 *
 * @author TypeRenew Team
 * @version 1.0.0
 * @link https://github.com/Yangsh888/TypeRenew
 */
 
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<main>

    <section class="ts-hero">
        <div class="ts-hero-bg">
            <div class="ts-hero-grid"></div>
            <div class="ts-hero-glow ts-hero-glow-1"></div>
            <div class="ts-hero-glow ts-hero-glow-2"></div>
        </div>

        <div class="ts-hero-inner">
            <div class="ts-hero-text ts-anim">
                <h1 class="ts-hero-title">
                    <?php echo nl2br(htmlspecialchars($this->options->tsHeroTitle ?: '轻量高效・开箱即用<br>一款现代化 CMS 系统')); ?>
                </h1>
                <p class="ts-hero-subtitle">
                    <?php echo nl2br(htmlspecialchars($this->options->tsHeroSubtitle
                        ?: 'TypeRenew 是一款继承 Typecho 轻量内核的现代化 CMS，提供开箱即用的丰富功能、适配现代运行环境，让您能轻松搭建并管理网站，专注于内容创作本身，享受简洁高效的建站体验。')); ?>
                </p>
                <div class="ts-hero-ctas">
                    <a href="<?php echo htmlspecialchars($this->options->tsHeroPrimaryLink ?: '#install'); ?>"
                       class="ts-btn-primary">
                        <?php echo htmlspecialchars($this->options->tsHeroPrimaryText ?: '快速开始'); ?>
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <?php if ($this->options->tsHeroSecondaryLink): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsHeroSecondaryLink); ?>"
                       class="ts-btn-secondary">
                        <?php echo htmlspecialchars($this->options->tsHeroSecondaryText ?: '查看文档'); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="ts-hero-visual ts-anim ts-anim-delay-2">
                <?php if ($this->options->tsShowcaseImg): ?>
                <div class="ts-hero-img-wrap">
                    <img src="<?php echo htmlspecialchars($this->options->tsShowcaseImg); ?>"
                         alt="TypeRenew 界面截图" class="ts-hero-screenshot">
                </div>
                <?php else: ?>
                <div class="ts-hero-stats">
                    <div class="ts-hero-stat-card ts-hsc-accent">
                        <div class="ts-hsc-val"><?php echo htmlspecialchars($this->options->tsHeroStat1Val ?: '48'); ?><span><?php echo htmlspecialchars($this->options->tsHeroStat1Unit ?: 'ms'); ?></span></div>
                        <div class="ts-hsc-label"><?php echo htmlspecialchars($this->options->tsHeroStat1Label ?: '平均响应时间'); ?></div>
                    </div>
                    <div class="ts-hero-stat-card ts-hsc-teal">
                        <div class="ts-hsc-val"><?php echo htmlspecialchars($this->options->tsHeroStat2Val ?: '12'); ?><span><?php echo htmlspecialchars($this->options->tsHeroStat2Unit ?: 'MB'); ?></span></div>
                        <div class="ts-hsc-label"><?php echo htmlspecialchars($this->options->tsHeroStat2Label ?: '内存占用'); ?></div>
                    </div>
                    <div class="ts-hero-stat-card ts-hsc-green">
                        <div class="ts-hsc-val"><?php echo htmlspecialchars($this->options->tsHeroStat3Val ?: '6'); ?><span><?php echo htmlspecialchars($this->options->tsHeroStat3Unit ?: '次'); ?></span></div>
                        <div class="ts-hsc-label"><?php echo htmlspecialchars($this->options->tsHeroStat3Label ?: 'SQL 查询'); ?></div>
                    </div>
                    <div class="ts-hero-stat-card ts-hsc-amber">
                        <div class="ts-hsc-val"><?php echo htmlspecialchars($this->options->tsHeroStat4Val ?: 'PHP'); ?><span><?php echo htmlspecialchars($this->options->tsHeroStat4Unit ?: '8'); ?></span></div>
                        <div class="ts-hsc-label"><?php echo htmlspecialchars($this->options->tsHeroStat4Label ?: '原生支持'); ?></div>
                    </div>
                    <div class="ts-hero-features">
                        <div class="ts-hf-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            CSRF / XSS 双重防护
                        </div>
                        <div class="ts-hf-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Redis / APCu 缓存加速
                        </div>
                        <div class="ts-hf-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            MySQL 8 / SQLite / PgSQL
                        </div>
                        <div class="ts-hf-item">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            插件 &amp; 主题扩展系统
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="ts-tech-stack">
        <div class="ts-container">
            <span class="ts-tech-label ts-anim">基于成熟技术栈构建</span>
            <div class="ts-tech-pills ts-anim ts-anim-delay-1">
                <span class="ts-tech-pill ts-pill-nginx">Nginx</span>
                <span class="ts-tech-pill ts-pill-php">PHP</span>
                <span class="ts-tech-pill ts-pill-mysql">MySQL</span>
                <span class="ts-tech-pill ts-pill-sqlite">SQLite</span>
                <span class="ts-tech-pill ts-pill-pgsql">PostgreSQL</span>
                <span class="ts-tech-pill ts-pill-redis">Redis </span>
                <span class="ts-tech-pill ts-pill-typecho">Typecho</span>
                <span class="ts-tech-pill ts-pill-md">Markdown</span>
            </div>
        </div>
    </section>

    <?php
    $ssItems = [];
    for ($i = 1; $i <= 5; $i++) {
        $img   = $this->options->{'tsScreenshot' . $i . 'Img'};
        $cap   = $this->options->{'tsScreenshot' . $i . 'Cap'};
        if ($img) $ssItems[] = ['img' => $img, 'cap' => $cap ?: ''];
    }
    $showScreenshots = ($this->options->tsScreenshotsEnable !== '0') && !empty($ssItems);
    ?>
    <?php if ($showScreenshots): ?>
    <section class="ts-screenshots ts-section">
        <div class="ts-container">
            <div class="ts-section-header ts-anim">
                <span class="ts-section-label">程序预览</span>
                <h2 class="ts-section-title">焕新设计的程序界面</h2>
                <p class="ts-section-desc">采用现代化的设计理念，致力于提供简洁、直观且高度一致的使用体验</p>
            </div>
            <div class="ts-screenshots-grid ts-ss-count-<?php echo count($ssItems); ?>">
                <?php foreach ($ssItems as $idx => $ss): ?>
                <div class="ts-screenshot-card <?php echo $idx === 0 ? 'ts-screenshot-main' : ''; ?> ts-anim ts-anim-delay-<?php echo $idx; ?>">
                    <div class="ts-screenshot-preview">
                        <img src="<?php echo htmlspecialchars($ss['img']); ?>"
                             alt="<?php echo htmlspecialchars($ss['cap']); ?>"
                             class="ts-screenshot-img" loading="lazy">
                    </div>
                    <?php if ($ss['cap']): ?>
                    <div class="ts-screenshot-info">
                        <p class="ts-screenshot-cap"><?php echo htmlspecialchars($ss['cap']); ?></p>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($this->options->tsFeaturesEnable !== '0'): ?>
    <section class="ts-features ts-section" id="features">
        <div class="ts-container">
            <div class="ts-section-header ts-anim">
                <span class="ts-section-label">核心特性</span>
                <h2 class="ts-section-title">为现代开发者量身打造</h2>
                <p class="ts-section-desc">从性能到安全，从开发体验到部署便利，系统的每个细节都经过精心打磨</p>
            </div>
            <div class="ts-bento-grid">
                <div class="ts-bento-card ts-bento-large-1 ts-anim">
                    <div class="ts-bento-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
                    </div>
                    <h3 class="ts-bento-title">极速性能</h3>
                    <p class="ts-bento-desc">通过采用轻量化架构与多级缓存策略（如集成 Redis 缓存系统），显著减少了数据库直接查询与页面加载时间。配合精心优化的代码执行路径，确保应用能够实现毫秒级的响应与流畅的用户使用体验。</p>
                    <div class="ts-bento-visual">
                        <div class="ts-perf-bar-wrap">
                            <span class="ts-perf-label">负载提升</span>
                            <div class="ts-perf-track"><div class="ts-perf-fill" style="width:20%"></div></div>
                            <span class="ts-perf-val">20%</span>
                        </div>
                        <div class="ts-perf-bar-wrap">
                            <span class="ts-perf-label">速度提升</span>
                            <div class="ts-perf-track"><div class="ts-perf-fill ts-perf-fill-2" style="width:50%"></div></div>
                            <span class="ts-perf-val">50%</span>
                        </div>
                        <div class="ts-perf-bar-wrap">
                            <span class="ts-perf-label">延迟降低</span>
                            <div class="ts-perf-track"><div class="ts-perf-fill ts-perf-fill-3" style="width:80%"></div></div>
                            <span class="ts-perf-val">80%</span>
                        </div>
                    </div>
                </div>

                <div class="ts-bento-card ts-bento-large-2 ts-anim ts-anim-delay-1">
                    <div class="ts-bento-icon ts-icon-green">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="ts-bento-title">安全可靠</h3>
                    <p class="ts-bento-desc">多层安全防护机制，保护您的数据安全。</p>
                    <div class="ts-bento-visual">
                        <div class="ts-sec-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> XSS/CSRF 防护</div>
                        <div class="ts-sec-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 安全密码存储</div>
                        <div class="ts-sec-item"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> 反垃圾评论机制</div>
                    </div>
                </div>

                <div class="ts-bento-card ts-bento-medium ts-anim ts-anim-delay-2">
                    <div class="ts-bento-icon ts-icon-amber">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                    </div>
                    <h3 class="ts-bento-title">易于部署</h3>
                    <p class="ts-bento-desc">只需 1 分钟即可完成安装，部署过程简单快捷，助您迅速上线项目。</p>
                </div>

                <div class="ts-bento-card ts-bento-medium ts-anim ts-anim-delay-3">
                    <div class="ts-bento-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 18l6-6-6-6"/><path d="M8 6l-6 6 6 6"/></svg>
                    </div>
                    <h3 class="ts-bento-title">开发者友好</h3>
                    <p class="ts-bento-desc">提供完善的钩子系统以及详尽的开发文档，大幅降低二次开发与功能扩展的学习成本。</p>
                </div>

                <div class="ts-bento-card ts-bento-medium ts-anim ts-anim-delay-4">
                    <div class="ts-bento-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg>
                    </div>
                    <h3 class="ts-bento-title">多数据库支持</h3>
                    <p class="ts-bento-desc">数据库之间可无缝切换，还可实现零成本迁移与适配，为您提供灵活的存储方案选择。</p>
                </div>

                <div class="ts-bento-card ts-bento-medium ts-anim ts-anim-delay-5">
                    <div class="ts-bento-icon ts-icon-teal">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>
                    </div>
                    <h3 class="ts-bento-title">主题系统</h3>
                    <p class="ts-bento-desc">支持一键切换与深度个性化定制，帮助您轻松打造独具特色的界面风格与用户体验。</p>
                </div>

                <div class="ts-bento-card ts-bento-large-3 ts-anim ts-anim-delay-5">
                    <div class="ts-bento-icon ts-icon-rose">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5l6.74-6.76z"/><line x1="16" y1="8" x2="2" y2="22"/><line x1="17.5" y1="15" x2="9" y2="15"/></svg>
                    </div>
                    <h3 class="ts-bento-title">插件生态</h3>
                    <p class="ts-bento-desc">我们提供了覆盖主流需求，开箱即用的内置插件，并支持开发者快速扩展任意功能，持续丰富应用能力。</p>
                    <div class="ts-bento-visual ts-bento-plugins">
                        <div class="ts-plugin-tag">VditorRenew</div>
                        <div class="ts-plugin-tag">RenewGo</div>
                        <div class="ts-plugin-tag">RenewAvatar</div>
                        <div class="ts-plugin-tag ts-plugin-more">+ 更多</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($this->options->tsHighlightEnable !== '0'): ?>
    <section class="ts-highlight ts-section">
        <div class="ts-container">
            <?php
            $hlRows = [
                [
                    'label' => '功能亮点',
                    'title' => $this->options->tsHl1Title ?: '现代化的后台管理',
                    'desc'  => $this->options->tsHl1Desc  ?: '全新设计的 Renew UI 后台界面，采用扁平化设计语言，操作直观流畅。支持深色模式、响应式布局，让管理博客成为一种享受。',
                    'img'   => $this->options->tsHl1Img,
                    'rev'   => false,
                ],
                [
                    'label' => '功能亮点',
                    'title' => $this->options->tsHl2Title ?: '强大的插件系统',
                    'desc'  => $this->options->tsHl2Desc  ?: '通过插件系统扩展功能，从 SEO 优化到社交登录，从 Markdown 编辑器到图床管理，丰富的插件生态满足各种需求。',
                    'img'   => $this->options->tsHl2Img,
                    'rev'   => true,
                ],
            ];
            foreach ($hlRows as $hl):
            ?>
            <div class="ts-highlight-row <?php echo $hl['rev'] ? 'ts-highlight-row-rev' : ''; ?> ts-anim">
                <div class="ts-hl-text">
                    <span class="ts-section-label"><?php echo htmlspecialchars($hl['label']); ?></span>
                    <h2 class="ts-hl-title"><?php echo htmlspecialchars($hl['title']); ?></h2>
                    <p class="ts-hl-desc"><?php echo htmlspecialchars($hl['desc']); ?></p>
                </div>
                <div class="ts-hl-visual">
                    <?php if ($hl['img']): ?>
                    <div class="ts-hl-img-wrap">
                        <img src="<?php echo htmlspecialchars($hl['img']); ?>"
                             alt="<?php echo htmlspecialchars($hl['title']); ?>"
                             class="ts-hl-img" loading="lazy">
                    </div>
                    <?php else: ?>
                    <div class="ts-hl-img-placeholder">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        <span>在后台设置功能截图</span>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($this->options->tsInstallEnable !== '0'): ?>
    <section class="ts-install ts-section" id="install">
        <div class="ts-container">
            <div class="ts-install-content ts-anim">
                <h2 class="ts-install-title">快速开始</h2>
                <p class="ts-install-desc">只需几行命令，即可完成安装部署</p>

                <div class="ts-install-tabs">
                    <button class="ts-install-tab ts-active" data-tab="git">Git Clone</button>
                    <button class="ts-install-tab" data-tab="download">下载源码</button>
                </div>

                <div class="ts-install-code">
                    <div class="ts-install-code-bar">
                        <div class="ts-install-code-dots">
                            <span></span><span></span><span></span>
                        </div>
                        <button class="ts-install-copy" id="tsCopyBtn" type="button">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"/></svg>
                            复制
                        </button>
                    </div>
                    <div class="ts-install-code-inner">
                        <span class="ts-install-code-prompt">$</span>
                        <code class="ts-install-code-text" id="tsInstallCmd">git clone https://github.com/Yangsh888/TypeRenew.git .</code>
                    </div>
                </div>

                <p class="ts-install-note">
                    安装遇到问题？查阅
                    <?php if ($this->options->tsNavDocs): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsNavDocs); ?>" target="_blank" rel="noopener">安装文档</a>
                    <?php else: ?>
                    安装文档
                    <?php endif; ?>
                    获取帮助
                </p>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($this->options->tsChangelogEnable !== '0'): ?>
    <section class="ts-changelog ts-section">
        <div class="ts-container">
            <div class="ts-section-header ts-anim">
                <span class="ts-section-label">更新日志</span>
                <h2 class="ts-section-title">最新动态</h2>
            </div>

            <div class="ts-changelog-grid ts-anim">
                <div class="ts-changelog-info">
                    <div class="ts-changelog-version">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                        v<?php echo htmlspecialchars($this->options->tsChangelogVersion ?: '1.3.1'); ?>
                    </div>
                    <p class="ts-changelog-date">
                        <?php echo htmlspecialchars($this->options->tsChangelogDate ?: '2025 年 1 月'); ?>
                    </p>
                    <?php if ($this->options->tsChangelogLink): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsChangelogLink); ?>"
                       class="ts-changelog-link" target="_blank" rel="noopener">
                        查看完整更新日志
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <?php endif; ?>
                </div>

                <div class="ts-changelog-list">
                    <?php
                    $clItems = [
                        [
                            'type'  => $this->options->tsChangelog1Type  ?: 'new',
                            'title' => $this->options->tsChangelog1Title ?: '全新 Renew UI 后台界面',
                            'desc'  => $this->options->tsChangelog1Desc  ?: '采用现代化设计语言，支持深色模式，提供更流畅的操作体验',
                        ],
                        [
                            'type'  => $this->options->tsChangelog2Type  ?: 'improve',
                            'title' => $this->options->tsChangelog2Title ?: 'PHP 8 全面兼容',
                            'desc'  => $this->options->tsChangelog2Desc  ?: '代码重构，充分利用 PHP 8 新特性，提升性能和安全性',
                        ],
                        [
                            'type'  => $this->options->tsChangelog3Type  ?: 'fix',
                            'title' => $this->options->tsChangelog3Title ?: 'MySQL 8 连接问题',
                            'desc'  => $this->options->tsChangelog3Desc  ?: '修复 MySQL 8 默认认证方式导致的连接问题',
                        ],
                    ];
                    $clTypeMap = [
                        'new'     => ['label' => '新功能', 'class' => 'ts-type-new'],
                        'improve' => ['label' => '优化',   'class' => 'ts-type-improve'],
                        'fix'     => ['label' => '修复',   'class' => 'ts-type-fix'],
                        'break'   => ['label' => '破坏性', 'class' => 'ts-type-break'],
                    ];
                    foreach ($clItems as $cli):
                        if (!$cli['title']) continue;
                        $typeKey = isset($clTypeMap[$cli['type']]) ? $cli['type'] : 'new';
                        $typeInfo = $clTypeMap[$typeKey];
                    ?>
                    <div class="ts-changelog-item">
                        <div class="ts-changelog-item-header">
                            <span class="ts-changelog-type <?php echo $typeInfo['class']; ?>"><?php echo $typeInfo['label']; ?></span>
                            <span class="ts-changelog-item-title"><?php echo htmlspecialchars($cli['title']); ?></span>
                        </div>
                        <?php if ($cli['desc']): ?>
                        <p class="ts-changelog-item-desc"><?php echo htmlspecialchars($cli['desc']); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($this->options->tsFaqEnable !== '0'): ?>
    <section class="ts-faq ts-section">
        <div class="ts-container">
            <div class="ts-section-header ts-anim">
                <span class="ts-section-label">常见问题</span>
                <h2 class="ts-section-title">你可能想知道的</h2>
            </div>

            <div class="ts-faq-list ts-anim">
                <div class="ts-faq-item">
                    <button class="ts-faq-question" type="button">
                        TypeRenew 与 Typecho 有什么区别？
                        <svg class="ts-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="ts-faq-answer">
                        <div class="ts-faq-answer-body">TypeRenew 是基于 Typecho 1.3.0 二次开发的版本，主要针对 PHP 8 和 MySQL 8 进行了全面适配和优化，同时引入了全新的 Renew UI 后台界面。我们保持了 Typecho 原本高效、轻量、简洁的内核基因，同时提供了更好的开发体验。</div>
                    </div>
                </div>
                <div class="ts-faq-item">
                    <button class="ts-faq-question" type="button">
                        如何从 Typecho 迁移到 TypeRenew？
                        <svg class="ts-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="ts-faq-answer">
                        <div class="ts-faq-answer-body">迁移过程非常简单。只需备份原有数据库和 usr/uploads 目录，然后安装 TypeRenew 并导入数据库即可。大部分 Typecho 插件和主题都可以直接兼容使用。</div>
                    </div>
                </div>
                <div class="ts-faq-item">
                    <button class="ts-faq-question" type="button">
                        TypeRenew 是免费的吗？
                        <svg class="ts-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="ts-faq-answer">
                        <div class="ts-faq-answer-body">是的，TypeRenew 完全开源免费，采用 GPL 2.0 协议。您可以在 GitHub 上获取源代码，也可以参与项目贡献。</div>
                    </div>
                </div>
                <div class="ts-faq-item">
                    <button class="ts-faq-question" type="button">
                        支持哪些服务器环境？
                        <svg class="ts-faq-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
                    </button>
                    <div class="ts-faq-answer">
                        <div class="ts-faq-answer-body">TypeRenew 需要 PHP 8.0 及以上版本，支持 MySQL 5.7+/8.0+、SQLite 3、PostgreSQL 9.5+。推荐使用 Nginx + PHP-FPM 组合部署，Apache + mod_php 同样支持。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php
    $hasSponsor = ($this->options->tsSponsorEnable !== '0') && (
        $this->options->tsSponsor1Name || $this->options->tsSponsor2Name || $this->options->tsSponsor3Name
    );
    ?>
    <?php if ($hasSponsor): ?>
    <section class="ts-sponsors ts-section-sm">
        <div class="ts-container">
            <div class="ts-sponsors-inner ts-anim">
                <span class="ts-sponsors-label">由以下伙伴支持</span>
                <div class="ts-sponsors-list">
                    <?php foreach ([
                        ['name' => $this->options->tsSponsor1Name, 'url' => $this->options->tsSponsor1Url, 'logo' => $this->options->tsSponsor1Logo],
                        ['name' => $this->options->tsSponsor2Name, 'url' => $this->options->tsSponsor2Url, 'logo' => $this->options->tsSponsor2Logo],
                        ['name' => $this->options->tsSponsor3Name, 'url' => $this->options->tsSponsor3Url, 'logo' => $this->options->tsSponsor3Logo],
                    ] as $sp):
                        if (!$sp['name']) continue;
                        $tag = $sp['url'] ? 'a' : 'span';
                        $attrs = $sp['url'] ? ' href="' . htmlspecialchars($sp['url']) . '" target="_blank" rel="noopener"' : '';
                    ?>
                    <<?php echo $tag; ?><?php echo $attrs; ?> class="ts-sponsor-item">
                        <?php if ($sp['logo']): ?>
                        <img src="<?php echo htmlspecialchars($sp['logo']); ?>" alt="<?php echo htmlspecialchars($sp['name']); ?>" class="ts-sponsor-logo">
                        <?php endif; ?>
                        <span class="ts-sponsor-name"><?php echo htmlspecialchars($sp['name']); ?></span>
                    </<?php echo $tag; ?>>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($this->options->tsLatestPostsEnable !== '0'): ?>
    <section class="ts-latest ts-section">
        <div class="ts-container">
            <div class="ts-section-header ts-anim">
                <span class="ts-section-label">最新动态</span>
                <h2 class="ts-section-title">来自博客</h2>
            </div>

            <div class="ts-posts-grid ts-anim">
                <?php
                $latestPosts = \Widget\Contents\Post\Recent::allocWithAlias('indexlatest', 'pageSize=3');
                if ($latestPosts->have()):
                    while ($latestPosts->next()):
                ?>
                <article class="ts-post-card">
                    <a href="<?php $latestPosts->permalink(); ?>" class="ts-post-card-link">
                        <?php if ($latestPosts->categories): ?>
                        <span class="ts-post-card-cat"><?php $latestPosts->category(',', false); ?></span>
                        <?php endif; ?>
                        <h3 class="ts-post-card-title"><?php $latestPosts->title(); ?></h3>
                        <div class="ts-post-card-meta">
                            <span><?php $latestPosts->date('Y-m-d'); ?></span>
                            <?php if ($latestPosts->commentsNum > 0): ?>
                            <span><?php $latestPosts->commentsNum(); ?> 评论</span>
                            <?php endif; ?>
                        </div>
                    </a>
                </article>
                <?php endwhile; else: ?>
                <div class="ts-posts-empty">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                    <p>暂无文章</p>
                </div>
                <?php endif; ?>
            </div>

            <?php if ($this->options->tsNavBlog): ?>
            <div class="ts-latest-footer ts-anim">
                <a href="<?php echo rtrim($this->options->siteUrl, '/') . '/' . ltrim($this->options->tsNavBlog, '/'); ?>"
                   class="ts-btn-outline">
                    查看全部文章
                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <section class="ts-cta-banner">
        <div class="ts-cta-noise"></div>
        <div class="ts-container">
            <div class="ts-cta-inner ts-anim">
                <h2 class="ts-cta-title">准备好开始了吗？</h2>
                <p class="ts-cta-desc">立即体验 TypeRenew，开启你的高效创作之旅</p>
                <div class="ts-cta-actions">
                    <a href="#install" class="ts-cta-btn-primary">立即开始</a>
                    <?php if ($this->options->tsNavDocs): ?>
                    <a href="<?php echo htmlspecialchars($this->options->tsNavDocs); ?>"
                       target="_blank" rel="noopener" class="ts-cta-btn-ghost">查看文档</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php $this->need('footer.php'); ?>
