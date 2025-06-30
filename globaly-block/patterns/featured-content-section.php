<?php
/**
 * Featured Content Section Block Pattern.
 */
return array(
	'title'      => __( 'Featured Content Section (3 Columns)', 'globaly-block' ),
	'categories' => array( 'globaly-block', 'featured', 'columns' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
                        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="has-text-align-center" style="font-size:2.5rem;font-style:normal;font-weight:700">' . esc_html__( 'Explore Our Work', 'globaly-block' ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:spacer {"height":"30px"} -->
                        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:columns {"align":"wide"} -->
                        <div class="wp-block-columns alignwide">
                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:image {"linkDestination":"none","style":{"spacing":{"marginBottom":"var:preset|spacing|20"}}} -->
                                <figure class="wp-block-image" style="margin-bottom:var(--wp--preset--spacing--20)"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-about.png' ) ) . '" alt="' . esc_attr__( 'Featured Item 1', 'globaly-block' ) . '"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"1.25rem","fontStyle":"normal","fontWeight":"700"}}} -->
                                <h4 class="has-text-align-left" style="font-size:1.25rem;font-style:normal;font-weight:700">' . esc_html__( 'Project Alpha', 'globaly-block' ) . '</h4>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
                                <p style="font-size:0.9rem">' . esc_html__( 'A brief description of this featured project or content piece, highlighting its key aspects and achievements.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
                                    <!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"5px"}},"className":"is-style-fill"} -->
                                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background" href="#" style="border-radius:5px">' . esc_html__( 'View Details', 'globaly-block' ) . '</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:image {"linkDestination":"none","style":{"spacing":{"marginBottom":"var:preset|spacing|20"}}} -->
                                <figure class="wp-block-image" style="margin-bottom:var(--wp--preset--spacing--20)"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-about.png' ) ) . '" alt="' . esc_attr__( 'Featured Item 2', 'globaly-block' ) . '"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"1.25rem","fontStyle":"normal","fontWeight":"700"}}} -->
                                <h4 class="has-text-align-left" style="font-size:1.25rem;font-style:normal;font-weight:700">' . esc_html__( 'Service Beta', 'globaly-block' ) . '</h4>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
                                <p style="font-size:0.9rem">' . esc_html__( 'Discover more about this innovative service and how it can benefit you or your organization.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
                                    <!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"5px"}},"className":"is-style-fill"} -->
                                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background" href="#" style="border-radius:5px">' . esc_html__( 'Explore Service', 'globaly-block' ) . '</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:image {"linkDestination":"none","style":{"spacing":{"marginBottom":"var:preset|spacing|20"}}} -->
                                <figure class="wp-block-image" style="margin-bottom:var(--wp--preset--spacing--20)"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-about.png' ) ) . '" alt="' . esc_attr__( 'Featured Item 3', 'globaly-block' ) . '"/></figure>
                                <!-- /wp:image -->
                                <!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"1.25rem","fontStyle":"normal","fontWeight":"700"}}} -->
                                <h4 class="has-text-align-left" style="font-size:1.25rem;font-style:normal;font-weight:700">' . esc_html__( 'Case Study Gamma', 'globaly-block' ) . '</h4>
                                <!-- /wp:heading -->
                                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}}} -->
                                <p style="font-size:0.9rem">' . esc_html__( 'Read our in-depth case study to see the tangible results and successes we have achieved for our clients.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->
                                <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
                                <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20)">
                                    <!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"5px"}},"className":"is-style-fill"} -->
                                    <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background" href="#" style="border-radius:5px">' . esc_html__( 'Read Case Study', 'globaly-block' ) . '</a></div>
                                    <!-- /wp:button -->
                                </div>
                                <!-- /wp:buttons -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->',
);
