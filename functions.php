//* Customize the credits
add_filter( 'genesis_footer_creds_text', 'sp_footer_creds_text' );
function sp_footer_creds_text() {
	echo '<div class="creds"><p>';
	echo 'Handcrafted by <a href="https://murray.ac/">Murray</a> · ';
	echo do_shortcode('[footer_loginout]');
	echo '</p></div>';
}
