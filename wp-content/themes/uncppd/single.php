<?php get_header(); ?>
<?php
    // Get custom post type
    $uri_segments = $segments = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
    $post_type = $uri_segments[0];
?>
    <div class="master-container">
        <div class="background-cover loaded" style="background-image: url(&quot;http://uncppd.com/wp-content/uploads/2018/03/punk_ipa.jpg&quot;);"></div>

        <div class="container">
            <div class="header">
                <h1 class="visuallyhidden">Uncppd</h1>
                <a href="/"><img src="/wp-content/themes/uncppd/src/assets/img/uncppd_logo.svg" class="header__logo" alt="Bïru"></a>

                <div class="main-nav">
                    <ul>
                        <?php
                            // BOTW
                            $args = array( 'numberposts' => '1', 'post_type' => 'biere' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" class="main-nav__item"><span>' . $recent[post_title] . '</span>Bière de la semaine</a></li>';
                            }
                            // Spot
                            $args = array( 'numberposts' => '1', 'post_type' => 'spot' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" class="main-nav__item"><span>' . $recent[post_title] . '</span>Spot de la semaine</a></li>';
                            }
                            // Follow
                            $args = array( 'numberposts' => '1', 'post_type' => 'follow' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" class="main-nav__item"><span>' . $recent[post_title] . '</span>Réseau de la semaine</a></li>';
                            }
                            // Packaging
                            $args = array( 'numberposts' => '1', 'post_type' => 'packaging' );
                            $recent_posts = wp_get_recent_posts( $args );
                            foreach( $recent_posts as $recent ){
                                echo '<li><a href="' . get_permalink($recent["ID"]) . '" class="main-nav__item"><span>Le packaging</span>de la semaine</a></li>';
                            }
                        ?>
                    </ul>
                </div>

                <div class="alt-nav"></div>
            </div>

            <div id="entry" class="entry opening opened">
                <button id="entry__close" class="entry__close">
                <img src="/wp-content/themes/uncppd/src/assets/img/close.svg" alt="Close"></button>
                <div id="entry__inner" class="entry__inner">
                    <!-- The content -->
                    <?php
                         $args = array(
                            'post_type'      => $post_type,
                            'posts_per_page' => 1,
                            'paged'          => 1,
                        );
                        $query = new WP_Query( $args );

                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) {
                            $query->the_post();
                                echo '<p class="entry__thumbnail">' . get_the_post_thumbnail() . '</p>';
                                the_content();
                            }
                            wp_reset_postdata();
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>