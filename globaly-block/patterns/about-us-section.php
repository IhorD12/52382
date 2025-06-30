<?php
/**
 * About Us Section Block Pattern.
 */
return array(
	'title'      => __( 'About Us Section', 'globaly-block' ),
	'categories' => array( 'globaly-block', 'featured', 'columns', 'text' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
                        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="has-text-align-center" style="font-size:2.5rem;font-style:normal;font-weight:700">' . esc_html__( 'About Our Company', 'globaly-block' ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:spacer {"height":"30px"} -->
                        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
                        <div class="wp-block-columns alignwide are-vertically-aligned-center">
                            <!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                                <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                                <figure class="wp-block-image size-large"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-about.png' ) ) . '" alt="' . esc_attr__( 'Our team collaborating', 'globaly-block' ) . '"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontStyle":"normal","fontWeight":"700"}}} -->
                                <h3 style="font-size:1.75rem;font-style:normal;font-weight:700">' . esc_html__( 'Driving Innovation, Delivering Excellence', 'globaly-block' ) . '</h3>
                                <!-- /wp:heading -->

                                <!-- wp:paragraph -->
                                <p>' . esc_html__( 'Founded with a passion for creating impactful solutions, our company has grown into a leading provider in the industry. We believe in the power of collaboration, innovation, and putting our clients first.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:paragraph -->
                                <p>' . esc_html__( 'Our dedicated team works tirelessly to understand your needs and deliver results that exceed expectations. Learn more about our journey and what makes us different.', 'globaly-block' ) . '</p>
                                <!-- /wp:paragraph -->

                                <!-- wp:spacer {"height":"10px"} -->
                                <div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
                                <!-- /wp:spacer -->

                                <!-- wp:buttons -->
                                <div class="wp-block-buttons">
                                    <!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"5px"}}} -->
                                    <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background" href="#" style="border-radius:5px">' . esc_html__( 'Learn More About Us', 'globaly-block' ) . '</a></div>
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
