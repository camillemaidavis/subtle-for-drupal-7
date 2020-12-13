<div id="page">

	<header>
        <div class="inner">

            <div id="branding">

                <a href="<?php print $front_page; ?>">
                    <?php if ($logo) : ?>
                    <img id="logo" src="<?php print $logo; ?>" alt="<?php print $site_name . ' logo'; ?>" />
                    <?php endif; ?>

                    <?php if ($site_name) : ?>
                    <h1 id="site_name">
                        <?php print $site_name ?>
                    </h1>
                    <?php endif; ?>
                </a>

                <?php if ($site_slogan) : ?>
                <p id="site_slogan">
                    <?php print $site_slogan ?>
                </p>
                <?php endif; ?>

            </div><!-- end #branding -->

            <nav id="main-menu">
                <div id="toggle">
                    <button class="hamburger hamburger--squeeze" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <?php if ($main_menu) : ?>
                    <?php print theme('links__system_main_menu', array(
                        'links' => $main_menu,
                        'attributes' => array(
                            'class' => 'hidden',
                            'id' => 'links',
                        ),
                        'heading' => array(
                            'text' => t('Main menu'),
                            'level' => 'h2',
                            'class' => array('element-invisible'),
                        ),
                    )); ?>
                <?php endif; ?>
            </nav><!-- end #main-menu -->

        </div><!-- end .inner -->
	</header>

	<main>

        <?php if ($title): ?>
            <div class="inner">
                <h1 id="page-title">
                    <?php print $title; ?>
                </h1>
            </div>
        <?php endif; ?>
        <?php print render($page['content']); ?>

	</main>

	<footer role="contentinfo">
        <div class="inner">
            <?php if ($page['footer']): ?>
                <?php print render($page['footer']); ?>
            <?php endif; ?>
        </div><!-- end .inner -->
	</footer>

</div> <!-- end #page -->
