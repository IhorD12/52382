<?php
/**
 * Call to Action (CTA) Section Block Pattern.
 */
return array(
	'title'      => __( 'Call to Action Section', 'globaly-block' ),
	'categories' => array( 'globaly-block', 'cta', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull has-white-color has-primary-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
                        <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide">
                            <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
                            <h2 class="has-text-align-center has-white-color has-text-color" style="font-size:2.5rem;font-style:normal;font-weight:700">' . esc_html__( 'Ready to Get Started?', 'globaly-block' ) . '</h2>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"white"} -->
                            <p class="has-text-align-center has-white-color has-text-color" style="font-size:1.125rem">' . esc_html__( 'Join us today and take the next step towards achieving your goals. We are here to help!', 'globaly-block' ) . '</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:spacer {"height":"20px"} -->
                            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                            <!-- /wp:spacer -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                            <div class="wp-block-buttons">
                                <!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"border":{"radius":"5px"}},"className":"is-style-fill"} -->
                                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background" style="border-radius:5px">' . esc_html__( 'Learn More', 'globaly-block' ) . '</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->',
);
