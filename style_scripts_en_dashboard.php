<?php 
/*
* Snippets para añadir ficheros con scripts o styles para ejecutar en el dashboard de WordPress
*/
add_action( 'admin_enqueue_scripts', 'vstm_dashboard' );

/* AÑADIMOS EL FICHERO DE ESTILOS */
public function vstm_style_dashboard( ) {
  // wp_register_style( 'Nombre unico', 'Dirección del fichero', 'Dependencia de archivos ( Si debe de cargar despues de otro archivo, indicar aqui )', 'versión', 'Dispositivo para el que es valido ese fichero');
 wp_register_style( 'vstm_style_dashboard', plugin_dir_url( __FILE__ ) . 'rutaarchivo', array(), 1.0 ); // Registramos el archivo style que elijamos para usarlo posteriormente
 wp_enqueue_style( 'vstm_style_dashboard' ); // Encolamos el fichero que registramos en la linea anterior para que se ejecute cuando carguemos el dasboard de WordPress
}

echo "Hello World;"

 Hola que tal
  
/* AÑADIMOS EL FICHERO DE SCRIPS */
public function vstm_script_dashboard( ) {
  // wp_register_script( 'Nombre unico', 'Dirección del fichero', 'Dependencia de archivos ( Si debe de cargar despues de otro archivo, indicar aqui )', 'versión', 'Boolean que indica si quieres que el script se carge en el footer');
 wp_register_script( 'vstm_script_dashboard', plugin_dir_url( __FILE__ ) . 'rutaarchivo', array(), "versión", true ); // Registramos el script que elijamos para usarlo posteriormente
 wp_enqueue_script( 'vstm_script_dashboard' ); // Encolamos el fichero que registramos en la linea anterior para que se ejecute cuando carguemos el dasboard de WordPress
}
