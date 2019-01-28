/*
* Snippets para añadir ficheros con scripts o styles para ejecutar en el dashboard de WordPress
*/
add_action( 'admin_enqueue_scripts', 'vstm_style_dashboard' );

public function vstm_style_dashboard( ) {
 wp_register_style( 'vstm_style_dashboard', plugin_dir_url( __FILE__ ) . 'rutaarchivo', array(), "versión" );
 wp_enqueue_style( 'vstm_style_dashboard' );
}
