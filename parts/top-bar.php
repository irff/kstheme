<div class="top-bar-container contain-to-grid show-for-medium-up navigation">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li>
                <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
            </li>
            <li>
                <a href="<?php echo home_url().'/berita'; ?>">Berita</a>
            </li>
            <li>
                <a href="<?php echo home_url().'/biografi'; ?>">Biografi</a>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
        </section>
    </nav>
</div>
