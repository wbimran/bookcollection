<?php get_header(); ?>

<main>
    <h1><?php _e( 'Featured Books', 'bookcollection' ); ?></h1>
    <?php
    // Fetch number of books from the Customizer
    $books_per_page = get_theme_mod('books_per_page', 6); // Default to 6 books per page

    $args = array(
        'post_type'      => 'book',
        'posts_per_page' => $books_per_page,
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) :
        echo '<div class="book-grid">';
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="book-item">
                <a href="<?php the_permalink(); ?>" class="book-link">
                    <div class="book-thumbnail">
                        <?php 
                            // Display the book's cover image (if available)
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'medium' ); // Medium size for the image
                            } else {
                                echo '<img src="' . esc_url( get_template_directory_uri() . '/images/default-book.jpg' ) . '" alt="Default Book Cover">';
                            }
                        ?>
                    </div>
                <div class="book-info">
                    <h3 class="book-title"><?php the_title(); ?></h3>
                    <p class="book-description"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                </div>
                        </a>
            </div>
            <?php
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
        echo '<p>' . __( 'No books found.', 'bookcollection' ) . '</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>
