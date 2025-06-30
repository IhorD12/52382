<?php
/**
 * Latest Posts Section Block Pattern.
 */
return array(
	'title'      => __( 'Latest Posts Section', 'globaly-block' ),
	'categories' => array( 'globaly-block', 'featured', 'query' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
                        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontStyle":"normal","fontWeight":"700"}}} -->
                        <h2 class="has-text-align-center" style="font-size:2.5rem;font-style:normal;font-weight:700">' . esc_html__( 'From Our Blog', 'globaly-block' ) . '</h2>
                        <!-- /wp:heading -->

                        <!-- wp:spacer {"height":"30px"} -->
                        <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
                        <!-- /wp:spacer -->

                        <!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"wide"} -->
                        <div class="wp-block-query alignwide">
                            <!-- wp:post-template -->
                                <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"200px"} /-->
                                <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.25rem","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|10"}}}} /-->
                                <!-- wp:post-excerpt {"moreText":"' . esc_html__( 'Read More', 'globaly-block' ) . '"} /-->
                                <!-- wp:post-date {"style":{"typography":{"fontSize":"0.875rem"}},"textColor":"text-main","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->
                            <!-- /wp:post-template -->
                        </div>
                        <!-- /wp:query -->
                    </div>
                    <!-- /wp:group -->',
);
