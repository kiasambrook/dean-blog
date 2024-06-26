<?php
/**
 * @var mixed $data Custom data for the template.
 */
if ( $data->utilities->get_element( 'thumb', $data->args ) ) {
	?>
	<div class="md:w-1/3 md:mr-4 md:mb-0 mb-4">
                <span>
                 <?php
                 // Check if post has post thumbnail.
                 if ( ! empty( $data->events->post->logo_url ) ) {
	                 // Thumbnails
	                 printf( '<img class="eaw-img rounded-lg md:rounded-xl lg:rounded-2xl" style="" src="%3$s" alt="%4$s">',
		                 $data->event->booknow,
		                 esc_attr( $data->utilities->get_element( 'thumb_align', $data->args ) ),
		                 esc_url( $data->events->post->logo_url ),
		                 esc_attr( get_the_title() ),
		                 (int) $data->utilities->get_element( 'thumb_width', $data->args ),
		                 ( $data->utilities->get_element( 'newtab', $data->args ) ) ? 'target="_blank"' : ''
	                 );

	                 // Display default image.
                 } elseif ( ! empty( $data->utilities->get_element( 'thumb_default', $data->args ) ) ) {
	                 printf( '<img class="eaw-img rounded-lg md:rounded-xl lg:rounded-2xl"/>',
		                 $data->event->booknow,
		                 esc_attr( $data->utilities->get_element( 'thumb_align', $data->args ) ),
		                 esc_url( $data->utilities->get_element( 'thumb_default', $data->args ) ),
		                 esc_attr( get_the_title() ),
		                 (int) $data->utilities->get_element( 'thumb_width', $data->args ),
		                 ( $data->utilities->get_element( 'newtab', $data->args ) ) ? 'target="_blank"' : ''
	                 );
                 }
                 ?>
                 </span>
	</div>
	<?php
}

