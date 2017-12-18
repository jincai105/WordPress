<?php if( get_header_image() ) { ?>
<!-- header image -->
<div class="skt-header-image">
	<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="front-page-image"  src="<?php header_image(); ?>"/>
</div>
<?php } ?>