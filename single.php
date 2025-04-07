<?php get_header(); ?>

<main>
    <!-- Container for centering content -->
    <div class="book-container">
        <h1>
            <?php 
                the_title(); // Display the title of the current post (book)
            ?>
        </h1>
    
        <div class="book-details">
            <!-- Display the book's author -->
            <p>
                <strong>
                    <?php 
                        // Translate the 'Author' label for internationalization
                        esc_html_e( 'Author:', 'bookcollection' ); 
                    ?>
                </strong> 
                <?php 
                    // Get and display the author's name
                    $author_name = get_the_author_meta( 'display_name', get_post_field( 'post_author', get_the_ID() ) );
                    echo esc_html( $author_name ); // Display the author name, escaped for security
                ?>
            </p>
        
            <!-- Display the book's publication year -->
            <p>
                <strong>
                    <?php 
                        // Translate the 'Year' label for internationalization
                        esc_html_e( 'Year:', 'bookcollection' ); 
                    ?>
                </strong> 
                <?php 
                    // Display the publication year of the book
                    echo esc_html( get_the_date( 'Y', get_the_ID() ) ); 
                ?>
            </p>
        
            <!-- Display the book's description -->
            <p>
                <strong>
                    <?php 
                        // Translate the 'Description' label for internationalization
                        esc_html_e( 'Description:', 'bookcollection' ); 
                    ?>
                </strong> 
                <?php 
                    the_content(); // Display the content (description) of the book
                ?>
            </p>
        </div>
    </div> <!-- End of book-container -->
</main>

<?php get_footer(); ?>
