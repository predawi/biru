<?php get_header(); ?>

<div class="master-container" id="master-container">

	<div class="background-cover loaded" style="background-image: url(&quot;http://uncppd.com/wp-content/uploads/2018/03/01-Tuatara-Sauvinova.jpg&quot;);"></div>

	<div class="container">
		<div class="header">
			<h1 class="visuallyhidden">Uncppd</h1>
			<a href="/">
				<img src="/wp-content/themes/uncppd/src/assets/img/uncppd_logo.svg" class="header__logo" alt="Bïru">
			</a>

			<div class="main-nav">
				<ul>
					<li>
						<a href="http://uncppd.com/biere/tuatara-sauvinova/" id="botw" class="main-nav__item" rel="noopener noreferrer">
							<span>Tuatara Sauvinova</span>Bière de la semaine
						</a>
					</li>
					<li>
						<a href="http://uncppd.com/spot/loutland/" id="sotw" class="main-nav__item" rel="noopener noreferrer">
							<span>L’Outland</span>Spot de la semaine
						</a>
					</li>
					<li>
						<a href="http://uncppd.com/follow/une-biere-et-jivay/" id="fotw" class="main-nav__item" rel="noopener noreferrer">
							<span>Une bière et Jivay</span>Réseau de la semaine
						</a>
					</li>
					<li>
						<a href="http://uncppd.com/packaging/titan-of-tokyo/" id="potw" class="main-nav__item" rel="noopener noreferrer">
							<span>Titan of Tokyo</span>Packaging de la semaine
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div id="entry" class="entry">
			<button id="entry__close" class="entry__close">
				<img src="/wp-content/themes/uncppd/src/assets/img/close.svg" alt="Close">
			</button>
			<div id="entry__inner" class="entry__inner">

				<!-- Entry Beer -->
				<?php
						$args = array(
						'post_type'      => 'biere',
						'posts_per_page' => 1,
						'paged'          => 1,
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();
							echo '<div class="entry__content entry__content--beer">';
							echo '<h2 class="entry__title">' . get_the_title() . '</h2>';
							echo '<p class="entry__thumbnail">' . get_the_post_thumbnail() . '</p>';
							the_content();
							echo '</div>';
						}
						wp_reset_postdata();
					}
				?>

				<!-- Entry Spot -->
				<?php
						$args = array(
						'post_type'      => 'spot',
						'posts_per_page' => 1,
						'paged'          => 1,
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();
							echo '<div class="entry__content entry__content--spot">';
							echo '<h2>' . get_the_title() . '</h2>';
							echo '<p class="entry__thumbnail">' . get_the_post_thumbnail() . '</p>';
							the_content();
							echo '</div>';
						}
						wp_reset_postdata();
					}
				?>
				<!-- Entry Follow -->
				<?php
						$args = array(
						'post_type'      => 'follow',
						'posts_per_page' => 1,
						'paged'          => 1,
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();
							echo '<div class="entry__content entry__content--follow">';
							echo '<h2>' . get_the_title() . '</h2>';
							echo '<p class="entry__thumbnail">' . get_the_post_thumbnail() . '</p>';
							the_content();
							echo '</div>';
						}
						wp_reset_postdata();
					}
				?>
				<!-- Entry Packaging -->
				<?php
						$args = array(
						'post_type'      => 'packaging',
						'posts_per_page' => 1,
						'paged'          => 1,
					);
					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
						$query->the_post();
							echo '<div class="entry__content entry__content--packaging">';
							echo '<h2>' . get_the_title() . '</h2>';
							echo '<p class="entry__thumbnail">' . get_the_post_thumbnail() . '</p>';
							the_content();
							echo '</div>';
						}
						wp_reset_postdata();
					}
				?>

			</div>
		</div>
	</div>

	<nav class="alt-nav">
		<ul>
			<li>
				<a href="https://www.instagram.com/uncppd/" target="_blank">Instagram</a>
			</li>
			<li>
				<a href="http://uncppd.com/archives/">Archives</a>
			</li>
		</ul>
	</nav>
</div>

<?php get_footer(); ?>