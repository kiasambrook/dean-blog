<?php
/**
 * @var mixed $data Custom data for the template.
 */
if ( $data->utilities->get_element( 'thumb', $data->args ) ) {
	?>
                 <?php
                 // Check if post has post thumbnail.
                 if ( ! empty( $data->events->post->logo_url ) ) {
	                 // Thumbnails
	                 printf( '<a class="%2$s" %1$s rel="bookmark" %6$s><img class="class="w-full h-48 object-cover" src="%3$s" alt="%4$s"></a>',
		                 $data->event->booknow,
		                 esc_attr( $data->utilities->get_element( 'thumb_align', $data->args ) ),
		                 esc_url( $data->events->post->logo_url ),
		                 esc_attr( get_the_title() ),
		                 (int) $data->utilities->get_element( 'thumb_width', $data->args ),
		                 ( $data->utilities->get_element( 'newtab', $data->args ) ) ? 'target="_blank"' : ''
	                 );

	                 // Display default image.
                 } elseif ( ! empty( $data->utilities->get_element( 'thumb_default', $data->args ) ) ) {
	                 printf( '<a class="%2$s" %1$s rel="bookmark" %6$s><img class="class="w-full h-48 object-cover" src="%3$s" alt="%4$s"></a>',
		                 $data->event->booknow,
		                 esc_attr( $data->utilities->get_element( 'thumb_align', $data->args ) ),
		                 esc_url( $data->utilities->get_element( 'thumb_default', $data->args ) ),
		                 esc_attr( get_the_title() ),
		                 (int) $data->utilities->get_element( 'thumb_width', $data->args ),
		                 ( $data->utilities->get_element( 'newtab', $data->args ) ) ? 'target="_blank"' : ''
	                 );
                 }
                 ?>
	<?php
}

