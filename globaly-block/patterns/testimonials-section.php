<?php
/**
 * Testimonials Section Block Pattern.
 */
return array(
	'title'      => __( 'Testimonials Section', 'globaly-block' ),
	'categories' => array( 'globaly-block', 'featured', 'text' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"light-gray-1","layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull has-light-gray-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
                        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="has-text-align-center" style="font-size:2.5rem;font-style:normal;font-weight:700">' . esc_html__( 'What Our Clients Say', 'globaly-block' ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:spacer {"height":"30px"} -->
                        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:columns {"align":"wide"} -->
                        <div class="wp-block-columns alignwide">
                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                                <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing|30);padding-right:var(--wp--preset--spacing|30);padding-bottom:var(--wp--preset--spacing|30);padding-left:var(--wp--preset--spacing|30)">
                                    <!-- wp:quote {"align":"left","style":{"typography":{"fontStyle":"italic"}}} -->
                                    <blockquote class="wp-block-quote has-text-align-left" style="font-style:italic"><p>"' . esc_html__( 'Working with this team was a game-changer for our business. Their expertise and dedication are unmatched!', 'globaly-block' ) . '"</p><cite>' . esc_html__( 'Jane Doe, CEO of Awesome Inc.', 'globaly-block' ) . '</cite></blockquote>
                                    <!-- /wp:quote -->
                                    <!-- wp:image {"align":"left","width":48,"height":48,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}},"className":"is-style-rounded"} -->
                                    <figure class="wp-block-image alignleft size-full is-resized is-style-rounded"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-avatar.png' ) ) . '" alt="' . esc_attr__( 'Avatar of Jane Doe', 'globaly-block' ) . '" style="border-radius:24px" width="48" height="48"/></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->

                            <!-- wp:column -->
                            <div class="wp-block-column">
                                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
                                <div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing|30);padding-right:var(--wp--preset--spacing|30);padding-bottom:var(--wp--preset--spacing|30);padding-left:var(--wp--preset--spacing|30)">
                                    <!-- wp:quote {"align":"left","style":{"typography":{"fontStyle":"italic"}}} -->
                                    <blockquote class="wp-block-quote has-text-align-left" style="font-style:italic"><p>"' . esc_html__( 'The results speak for themselves. Our productivity has skyrocketed since implementing their solutions.', 'globaly-block' ) . '"</p><cite>' . esc_html__( 'John Smith, Marketing Director at Innovate Ltd.', 'globaly-block' ) . '</cite></blockquote>
                                    <!-- /wp:quote -->
                                    <!-- wp:image {"align":"left","width":48,"height":48,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"24px"}},"className":"is-style-rounded"} -->
                                    <figure class="wp-block-image alignleft size-full is-resized is-style-rounded"><img src="' . esc_url( get_theme_file_uri( 'assets/images/placeholder-avatar.png' ) ) . '" alt="' . esc_attr__( 'Avatar of John Smith', 'globaly-block' ) . '" style="border-radius:24px" width="48" height="48"/></figure>
                                    <!-- /wp:image -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:column -->
                        </div>
                        <!-- /wp:columns -->
                    </div>
                    <!-- /wp:group -->',
);
