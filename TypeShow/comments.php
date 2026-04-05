<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<section class="ts-comments">
    <h3 class="ts-comments-title">
        <?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t('%d 条评论')); ?>
    </h3>

    <div class="ts-comment-list" id="comments">
        <?php $this->comments()->to($comments); ?>
        <?php while ($comments->next()): ?>
        <div class="ts-comment<?php if ($comments->authorId == $this->authorId): ?> ts-comment-author<?php endif; ?>"
             id="<?php $comments->theId(); ?>">
            <div class="ts-comment-inner">
                <div class="ts-comment-avatar">
                    <?php $comments->gravatar(44); ?>
                </div>
                <div class="ts-comment-content">
                    <div class="ts-comment-meta">
                        <cite class="ts-comment-name">
                            <?php if ($comments->url): ?>
                            <a href="<?php $comments->url(); ?>" target="_blank" rel="nofollow noopener"><?php $comments->author(false); ?></a>
                            <?php else: $comments->author(false); endif; ?>
                            <?php if ($comments->authorId == $this->authorId): ?>
                            <span class="ts-comment-badge">作者</span>
                            <?php endif; ?>
                        </cite>
                        <time class="ts-comment-time"><?php $comments->date('Y-m-d H:i'); ?></time>
                        <span class="ts-comment-reply"><?php $comments->reply(_t('回复')); ?></span>
                    </div>
                    <div class="ts-comment-text">
                        <?php $comments->content(); ?>
                    </div>
                </div>
            </div>
            <?php if ($comments->children): ?>
            <div class="ts-comment-children">
                <?php $comments->threadedComments(); ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endwhile; ?>
    </div>

    <?php if ($this->allow('comment')): ?>
    <div class="ts-comment-form-wrap" id="<?php $this->respondId(); ?>">
        <h4 class="ts-comment-form-title"><?php _e('发表评论'); ?></h4>

        <form method="post" action="<?php $this->commentUrl(); ?>" role="form" id="tsCommentForm">
            <?php if ($this->user->hasLogin()): ?>
            <p class="ts-logged-as">
                已登录为 <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>。
                <a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?> &raquo;</a>
            </p>
            <?php else: ?>
            <div class="ts-form-row">
                <div class="ts-form-group">
                    <label for="author" class="ts-form-label"><?php _e('称呼'); ?> <span class="ts-required">*</span></label>
                    <input type="text" name="author" id="author" class="ts-form-input"
                           placeholder="<?php _e('您的称呼'); ?>"
                           value="<?php $this->remember('author'); ?>" required>
                </div>
                <div class="ts-form-group">
                    <label for="mail" class="ts-form-label"><?php _e('邮箱'); ?><?php if ($this->options->commentsRequireMail): ?> <span class="ts-required">*</span><?php endif; ?></label>
                    <input type="email" name="mail" id="mail" class="ts-form-input"
                           placeholder="<?php _e('您的邮箱（不公开）'); ?>"
                           value="<?php $this->remember('mail'); ?>"
                           <?php if ($this->options->commentsRequireMail): ?>required<?php endif; ?>>
                </div>
                <div class="ts-form-group">
                    <label for="url" class="ts-form-label"><?php _e('网站'); ?></label>
                    <input type="url" name="url" id="url" class="ts-form-input"
                           placeholder="<?php _e('您的网站（选填）'); ?>"
                           value="<?php $this->remember('url'); ?>"
                           <?php if ($this->options->commentsRequireURL): ?>required<?php endif; ?>>
                </div>
            </div>
            <?php endif; ?>

            <div class="ts-form-group">
                <label for="textarea" class="ts-form-label"><?php _e('评论内容'); ?> <span class="ts-required">*</span></label>
                <textarea name="text" id="textarea" class="ts-form-textarea"
                          placeholder="<?php _e('写下你的评论...'); ?>" required></textarea>
            </div>

            <div class="ts-form-actions">
                <button type="submit" class="ts-form-submit">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                    <?php _e('提交评论'); ?>
                </button>
                <a href="#<?php $this->respondId(); ?>" class="ts-comment-cancel" id="tsCommentCancel" style="display:none"><?php _e('取消回复'); ?></a>
            </div>
        </form>
    </div>
    <?php else: ?>
    <div class="ts-comments-closed">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        <?php _e('评论已关闭'); ?>
    </div>
    <?php endif; ?>
</section>
