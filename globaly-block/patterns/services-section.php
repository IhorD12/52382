<?php
/**
 * Services Section Block Pattern.
 */
return array(
	'title'      => __( 'Services Section (3 Columns)', 'globaly-block' ),
	'categories' => array( 'globaly-block', 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
                        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="has-text-align-center" style="font-size:2.5rem;font-style:normal;font-weight:700">' . esc_html__( 'Our Services', 'globaly-block' ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:spacer {"height":"30px"} -->
                        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:columns {"align":"wide"} -->
                        <div class="wp-block-columns alignwide">
                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                <figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-icon.png' ) ) . '" alt="' . esc_attr__( 'Service Icon 1', 'globaly-block' ) . '" width="64" height="64"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem"}}} -->
                                <h3 class="has-text-align-center" style="font-size:1.5rem">' . esc_html__( 'Service One', 'globaly-block' ) . '</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center">' . esc_html__( 'Brief description of the first amazing service you offer. Keep it concise and impactful.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                <figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-icon.png' ) ) . '" alt="' . esc_attr__( 'Service Icon 2', 'globaly-block' ) . '" width="64" height="64"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem"}}} -->
                                <h3 class="has-text-align-center" style="font-size:1.5rem">' . esc_html__( 'Service Two', 'globaly-block' ) . '</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center">' . esc_html__( 'Explain the second fantastic service. Highlight the key benefits for your customers.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:image {"align":"center","width":64,"height":64,"sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                <figure class="wp-block-image aligncenter size-full is-style-default"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-icon.png' ) ) . '" alt="' . esc_attr__( 'Service Icon 3', 'globaly-block' ) . '" width="64" height="64"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"1.5rem"}}} -->
                                <h3 class="has-text-align-center" style="font-size:1.5rem">' . esc_html__( 'Service Three', 'globaly-block' ) . '</h3>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"align":"center"} -->
                                <p class="has-text-align-center">' . esc_html__( 'Detail the third incredible service. Focus on what makes it unique and valuable.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->',
);
