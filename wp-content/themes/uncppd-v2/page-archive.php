<?php
/**
 * Template Name: Page Archive
 *
 * This is the template that displays all archives.
 *
 */

get_header(); ?>
<?php
    $post_type = 'page';
?>
    <div class="master-container reading ">
        <div class="background-cover loaded" style="background-color: #37ebe5;"></div>

        <div class="container">
            <div class="header">
                <h1 class="visuallyhidden">Uncppd</h1>
                <a href="/"><img src="/wp-content/themes/uncppd/src/assets/img/uncppd_logo.svg" class="header__logo" alt="Bïru"></a>

                <div class="main-nav">
                    <ul>
                        <li><a href="/" class="main-nav__item"><span>Archives</span> des éditions</a></li>
                    </ul>
                </div>
            </div>

            <div id="entry" class="entry entry--archives opening opened">
                <div id="entry__inner" class="entry__inner">
                    <!-- The content -->
                    <?php
                         $args = array(
                            'post_type'   => 'biere',
                            'orderby'     => 'ID',
                            'order'       => 'DESC',
                        );
                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();
                                $post_tags = get_the_tags();
                                echo '<h2 class="entry--archives__title"><a href="' . get_home_url() . '/' . $post_tags[0]->slug . '">' . $post_tags[0]->name . ' - ' . get_the_title() . '</a></h2>';
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php include 'altnav.php' ?>
    </div>

<?php get_footer(); ?>