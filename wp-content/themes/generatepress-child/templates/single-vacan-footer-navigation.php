<div>
				<div class="posts-nav">
					<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment()  ) : ?>
						<?php
							$nextPost = get_next_post();
							if( ! empty($nextPost) ){
									$nextthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $nextPost->ID ), 'thumbnail' );?>

							<div class="postNavigation nextPostBox"><?php next_post_link('%link','<div class="inner-prevnext"><div class="thumbnail"><img src="' . esc_url( $nextthumbnail[0] ) . '"  alt="%title"/></div><div class="headline"><span>'. __('', 'nanima') .'</span><h4>%title</h4></div></div>'); ?></div>
							<?php }
							?>
						<?php
							$prevPost = get_previous_post();
							if( ! empty($prevPost) ){
								$prevthumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $prevPost->ID ), 'thumbnail' );?>

							<div class="postNavigation prevPostBox"><?php previous_post_link('%link','<div class="inner-prevnext"><div class="thumbnail"><img src="' . esc_url( $prevthumbnail[0] ) . '"/></div><div class="headline"><span>'. __('', 'nanima') .'</span><h4>%title</h4></div></div>'); ?></div>
							<?php }
							?>
					<?php endif; ?>
				</div>
			</div>
