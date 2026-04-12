<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text(
        'tsLogo', null, null,
        _t('Logo 图片地址'),
        _t('亮色模式下显示的 Logo，留空则显示站点名称文字')
    );
    $form->addInput($logoUrl);

    $logoDark = new Typecho_Widget_Helper_Form_Element_Text(
        'tsLogoDark', null, null,
        _t('暗色 Logo 地址'),
        _t('暗色模式下显示的 Logo，留空则使用亮色 Logo')
    );
    $form->addInput($logoDark);

    $favicon = new Typecho_Widget_Helper_Form_Element_Text(
        'tsFavicon', null, null,
        _t('Favicon 地址'),
        _t('网站图标，支持 .ico / .svg / .png')
    );
    $form->addInput($favicon);

    $navGithub = new Typecho_Widget_Helper_Form_Element_Text(
        'tsNavGithub', null, null,
        _t('GitHub 仓库地址'),
        _t('填写后导航栏右侧显示 GitHub 按钮，留空不显示')
    );
    $form->addInput($navGithub);

    $navDocs = new Typecho_Widget_Helper_Form_Element_Text(
        'tsNavDocs', null, null,
        _t('文档地址'),
        _t('外部文档站点链接，留空不在导航显示')
    );
    $form->addInput($navDocs);

    $navBlog = new Typecho_Widget_Helper_Form_Element_Text(
        'tsNavBlog', null, 'blog',
        _t('博客页面 URL 别名'),
        _t('博客列表页的 slug，默认 blog；设为空则不在导航显示')
    );
    $form->addInput($navBlog);

    $heroTitle = new Typecho_Widget_Helper_Form_Element_Textarea(
        'tsHeroTitle', null, '轻量、高效、现代化的博客系统',
        _t('Hero 主标题'),
        _t('支持换行（回车），换行后以独立段落渲染')
    );
    $form->addInput($heroTitle);

    $heroSubtitle = new Typecho_Widget_Helper_Form_Element_Textarea(
        'tsHeroSubtitle', null,
        'TypeRenew 是基于 Typecho 二次开发的现代化博客系统，专为 PHP 8 与 MySQL 8 优化，保持简洁高效的同时提供更好的开发体验。',
        _t('Hero 副标题')
    );
    $form->addInput($heroSubtitle);

    $heroPrimaryText = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroPrimaryText', null, '快速开始',
        _t('主按钮文字')
    );
    $form->addInput($heroPrimaryText);

    $heroPrimaryLink = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroPrimaryLink', null, '#install',
        _t('主按钮链接')
    );
    $form->addInput($heroPrimaryLink);

    $heroSecondaryText = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroSecondaryText', null, '查看文档',
        _t('次按钮文字')
    );
    $form->addInput($heroSecondaryText);

    $heroSecondaryLink = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroSecondaryLink', null, '',
        _t('次按钮链接'),
        _t('留空则隐藏次按钮')
    );
    $form->addInput($heroSecondaryLink);

    $showcaseImg = new Typecho_Widget_Helper_Form_Element_Text(
        'tsShowcaseImg', null, null,
        _t('Hero 展示区截图地址'),
        _t('显示在 Hero 右侧浏览器窗口内的截图，留空则使用内置统计卡片')
    );
    $form->addInput($showcaseImg);

    $stat1Val = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat1Val', null, '48',
        _t('统计卡片 1 数值'),
        _t('例如：48（无截图时显示于 Hero 右侧）')
    );
    $form->addInput($stat1Val);

    $stat1Unit = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat1Unit', null, 'ms',
        _t('统计卡片 1 单位')
    );
    $form->addInput($stat1Unit);

    $stat1Label = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat1Label', null, '平均响应时间',
        _t('统计卡片 1 说明')
    );
    $form->addInput($stat1Label);

    $stat2Val = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat2Val', null, '12',
        _t('统计卡片 2 数值')
    );
    $form->addInput($stat2Val);

    $stat2Unit = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat2Unit', null, 'MB',
        _t('统计卡片 2 单位')
    );
    $form->addInput($stat2Unit);

    $stat2Label = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat2Label', null, '内存占用',
        _t('统计卡片 2 说明')
    );
    $form->addInput($stat2Label);

    $stat3Val = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat3Val', null, '6',
        _t('统计卡片 3 数值')
    );
    $form->addInput($stat3Val);

    $stat3Unit = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat3Unit', null, '次',
        _t('统计卡片 3 单位')
    );
    $form->addInput($stat3Unit);

    $stat3Label = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat3Label', null, 'SQL 查询',
        _t('统计卡片 3 说明')
    );
    $form->addInput($stat3Label);

    $stat4Val = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat4Val', null, 'PHP',
        _t('统计卡片 4 数值')
    );
    $form->addInput($stat4Val);

    $stat4Unit = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat4Unit', null, '8',
        _t('统计卡片 4 单位')
    );
    $form->addInput($stat4Unit);

    $stat4Label = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHeroStat4Label', null, '原生支持',
        _t('统计卡片 4 说明')
    );
    $form->addInput($stat4Label);

    $screenshotsEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsScreenshotsEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '1',
        _t('截图展示区')
    );
    $form->addInput($screenshotsEnable);

    for ($i = 1; $i <= 5; $i++) {
        $ssImg = new Typecho_Widget_Helper_Form_Element_Text(
            'tsScreenshot' . $i . 'Img', null, null,
            _t('截图 ' . $i . ' 图片地址'),
            $i === 1 ? _t('第一张截图将在布局中占据更大位置（如有多张）') : ''
        );
        $form->addInput($ssImg);

        $ssCap = new Typecho_Widget_Helper_Form_Element_Text(
            'tsScreenshot' . $i . 'Cap', null, null,
            _t('截图 ' . $i . ' 说明文字'),
            _t('选填，显示在截图下方')
        );
        $form->addInput($ssCap);
    }

    $featuresEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsFeaturesEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '1',
        _t('核心特性区')
    );
    $form->addInput($featuresEnable);

    $highlightEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsHighlightEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '1',
        _t('功能亮点区')
    );
    $form->addInput($highlightEnable);

    $hl1Title = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHl1Title', null, '现代化的后台管理',
        _t('亮点 1 标题')
    );
    $form->addInput($hl1Title);

    $hl1Desc = new Typecho_Widget_Helper_Form_Element_Textarea(
        'tsHl1Desc', null, '全新设计的 Renew UI 后台界面，采用扁平化设计语言，操作直观流畅。支持深色模式、响应式布局，让管理博客成为一种享受。',
        _t('亮点 1 描述')
    );
    $form->addInput($hl1Desc);

    $hl1Img = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHl1Img', null, null,
        _t('亮点 1 截图地址'),
        _t('留空则显示占位提示框')
    );
    $form->addInput($hl1Img);

    $hl2Title = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHl2Title', null, '强大的插件系统',
        _t('亮点 2 标题')
    );
    $form->addInput($hl2Title);

    $hl2Desc = new Typecho_Widget_Helper_Form_Element_Textarea(
        'tsHl2Desc', null, '通过插件系统扩展功能，从 SEO 优化到社交登录，从 Markdown 编辑器到图床管理，丰富的插件生态满足各种需求。',
        _t('亮点 2 描述')
    );
    $form->addInput($hl2Desc);

    $hl2Img = new Typecho_Widget_Helper_Form_Element_Text(
        'tsHl2Img', null, null,
        _t('亮点 2 截图地址'),
        _t('留空则显示占位提示框')
    );
    $form->addInput($hl2Img);

    $installEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsInstallEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '1',
        _t('快速安装区')
    );
    $form->addInput($installEnable);

    $changelogEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsChangelogEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '1',
        _t('更新日志区')
    );
    $form->addInput($changelogEnable);

    $changelogVersion = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelogVersion', null, '1.3.1',
        _t('当前版本号'),
        _t('显示在更新日志区的版本号')
    );
    $form->addInput($changelogVersion);

    $changelogDate = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelogDate', null, '2025 年 1 月',
        _t('版本发布日期')
    );
    $form->addInput($changelogDate);

    $changelogLink = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelogLink', null, '',
        _t('完整日志链接'),
        _t('留空则不显示"查看完整更新日志"按钮')
    );
    $form->addInput($changelogLink);

    $clTypeOptions = ['new' => _t('新功能'), 'improve' => _t('优化'), 'fix' => _t('修复'), 'break' => _t('破坏性')];

    $cl1Type = new Typecho_Widget_Helper_Form_Element_Select(
        'tsChangelog1Type', $clTypeOptions, 'new', _t('日志条目 1 类型')
    );
    $form->addInput($cl1Type);

    $cl1Title = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelog1Title', null, '全新 Renew UI 后台界面',
        _t('日志条目 1 标题')
    );
    $form->addInput($cl1Title);

    $cl1Desc = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelog1Desc', null, '采用现代化设计语言，支持深色模式，提供更流畅的操作体验',
        _t('日志条目 1 描述')
    );
    $form->addInput($cl1Desc);

    $cl2Type = new Typecho_Widget_Helper_Form_Element_Select(
        'tsChangelog2Type', $clTypeOptions, 'improve', _t('日志条目 2 类型')
    );
    $form->addInput($cl2Type);

    $cl2Title = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelog2Title', null, 'PHP 8 全面兼容',
        _t('日志条目 2 标题')
    );
    $form->addInput($cl2Title);

    $cl2Desc = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelog2Desc', null, '代码重构，充分利用 PHP 8 新特性，提升性能和安全性',
        _t('日志条目 2 描述')
    );
    $form->addInput($cl2Desc);

    $cl3Type = new Typecho_Widget_Helper_Form_Element_Select(
        'tsChangelog3Type', $clTypeOptions, 'fix', _t('日志条目 3 类型')
    );
    $form->addInput($cl3Type);

    $cl3Title = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelog3Title', null, 'MySQL 8 连接问题',
        _t('日志条目 3 标题')
    );
    $form->addInput($cl3Title);

    $cl3Desc = new Typecho_Widget_Helper_Form_Element_Text(
        'tsChangelog3Desc', null, '修复 MySQL 8 默认认证方式导致的连接问题',
        _t('日志条目 3 描述')
    );
    $form->addInput($cl3Desc);

    $faqEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsFaqEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '1',
        _t('常见问题区')
    );
    $form->addInput($faqEnable);

    $latestPostsEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsLatestPostsEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '1',
        _t('最新文章区')
    );
    $form->addInput($latestPostsEnable);

    $sponsorEnable = new Typecho_Widget_Helper_Form_Element_Radio(
        'tsSponsorEnable', ['1' => _t('显示'), '0' => _t('隐藏')], '0',
        _t('赞助商区块'),
        _t('至少填写一位赞助商信息后才会显示')
    );
    $form->addInput($sponsorEnable);

    $sponsor1Name = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor1Name', null, null,
        _t('赞助商 1 名称')
    );
    $form->addInput($sponsor1Name);

    $sponsor1Url = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor1Url', null, null,
        _t('赞助商 1 链接'),
        _t('留空则不可点击')
    );
    $form->addInput($sponsor1Url);

    $sponsor1Logo = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor1Logo', null, null,
        _t('赞助商 1 Logo 地址'),
        _t('留空则显示名称文字')
    );
    $form->addInput($sponsor1Logo);

    $sponsor2Name = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor2Name', null, null,
        _t('赞助商 2 名称')
    );
    $form->addInput($sponsor2Name);

    $sponsor2Url = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor2Url', null, null,
        _t('赞助商 2 链接')
    );
    $form->addInput($sponsor2Url);

    $sponsor2Logo = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor2Logo', null, null,
        _t('赞助商 2 Logo 地址')
    );
    $form->addInput($sponsor2Logo);

    $sponsor3Name = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor3Name', null, null,
        _t('赞助商 3 名称')
    );
    $form->addInput($sponsor3Name);

    $sponsor3Url = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor3Url', null, null,
        _t('赞助商 3 链接')
    );
    $form->addInput($sponsor3Url);

    $sponsor3Logo = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSponsor3Logo', null, null,
        _t('赞助商 3 Logo 地址')
    );
    $form->addInput($sponsor3Logo);

    $footerSlogan = new Typecho_Widget_Helper_Form_Element_Textarea(
        'tsFooterSlogan', null, '轻量、高效、现代化的博客系统',
        _t('页脚品牌标语'),
        _t('支持换行（回车），将以独立行渲染')
    );
    $form->addInput($footerSlogan);

    for ($i = 1; $i <= 6; $i++) {
        $flName = new Typecho_Widget_Helper_Form_Element_Text(
            'tsFriendLink' . $i . 'Name', null, null,
            _t('友情链接 ' . $i . ' 名称')
        );
        $form->addInput($flName);

        $flUrl = new Typecho_Widget_Helper_Form_Element_Text(
            'tsFriendLink' . $i . 'Url', null, null,
            _t('友情链接 ' . $i . ' 地址')
        );
        $form->addInput($flUrl);
    }

    $footerIcp = new Typecho_Widget_Helper_Form_Element_Text(
        'tsFooterIcp', null, null,
        _t('ICP 备案号'),
        _t('留空不显示备案信息')
    );
    $form->addInput($footerIcp);

    $socialGithub = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSocialGithub', null, null, _t('GitHub 链接')
    );
    $form->addInput($socialGithub);

    $socialQq = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSocialQq', null, null, _t('QQ 群链接'), _t('填写 QQ 群链接，如 https://qm.qq.com/...')
    );
    $form->addInput($socialQq);

    $socialEmail = new Typecho_Widget_Helper_Form_Element_Text(
        'tsSocialEmail', null, null,
        _t('联系邮箱'),
        _t('将生成 mailto: 链接')
    );
    $form->addInput($socialEmail);

    $customHead = new Typecho_Widget_Helper_Form_Element_Textarea(
        'tsCustomHead', null, null,
        _t('自定义 head 代码'),
        _t('插入到 &lt;/head&gt; 之前，支持 CSS / meta 等')
    );
    $form->addInput($customHead);

    $customFooter = new Typecho_Widget_Helper_Form_Element_Textarea(
        'tsCustomFooter', null, null,
        _t('自定义 footer 代码'),
        _t('插入到 &lt;/body&gt; 之前，支持统计脚本等')
    );
    $form->addInput($customFooter);
}
