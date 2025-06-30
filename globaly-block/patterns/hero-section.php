<?php
/**
 * Hero Section Block Pattern.
 */
return array(
	'title'      => __( 'Hero Section', 'globaly-block' ),
	'categories' => array( 'globaly-block', 'hero', 'featured' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"secondary","textColor":"white","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull has-white-color has-secondary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
                        <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group alignwide">
                            <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"4rem","fontStyle":"normal","fontWeight":"700"}},"textColor":"white"} -->
                            <h1 class="has-text-align-center has-white-color has-text-color" style="font-size:4rem;font-style:normal;font-weight:700">' . esc_html__( 'Your Catchy Headline Here', 'globaly-block' ) . '</h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem"}},"textColor":"white"} -->
                            <p class="has-text-align-center has-white-color has-text-color" style="font-size:1.25rem">' . esc_html__( 'Briefly describe your product, service, or value proposition. Make it compelling and clear.', 'globaly-block' ) . '</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:spacer {"height":"20px"} -->
                            <div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
                            <!-- /wp:spacer -->

                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                            <div class="wp-block-buttons">
                                <!-- wp:button {"backgroundColor":"primary","textColor":"white","style":{"border":{"radius":"5px"}},"className":"is-style-fill"} -->
                                <div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-white-color has-primary-background-color has-text-color has-background" style="border-radius:5px">' . esc_html__( 'Call to Action', 'globaly-block' ) . '</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->',
);
