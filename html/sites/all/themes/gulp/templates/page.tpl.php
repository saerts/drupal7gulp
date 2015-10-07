<div class="wrapper">
    <header class="clearfix">
        <div class="pane-container clearfix">
            <div class="logo"><?php print render($page['logo']); ?></div>
            <nav> <?php print render($page['mainmenu']); ?> </nav>
            <div class="languages"><?php print render($page['languages']); ?></div>
        </div>
    </header>
    <div class="contentContainer page clearfix">
    <section id="contentTop" class="clearfix"> <?php print render($page['contentTop']); ?> </section>
        <section id="contentFrame" class="clearfix">
            <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            <?php print $messages; ?> <?php print render($title_prefix); ?> <?php print render($title_suffix); ?>
            <?php if ($title): ?>
            <h1 class="title" id="page-title"><span><?php print $title; ?></span></h1>
            <?php endif; ?>
            <?php print render($page['content']); ?> </section>
        <section id="contentBottom" class="clearfix"> <?php print render($page['contentBottom']); ?> </section>
    </div>
    <section id="bottomBlocks" class="clearfix">
        <div class="pane-container clearfix">
            <div class="bottomblock bottomblock1"> <?php print render($page['bottomBlock1']); ?> </div>
            <div class="bottomblock bottomblock2"><?php print render($page['bottomBlock2']); ?></div>
            <div class="bottomblock bottomblock3"><?php print render($page['bottomBlock3']); ?></div>
        </div>
    </section>
    <section id="copyright"><?php print render($page['copyright']); ?></section>
</div>
<div class="winkelmandje"><?php print render($page['cart']); ?></div>