<?php
obtener_estructura_directorios(getcwd());

function obtener_estructura_directorios($ruta){
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)){
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
		
		echo $ruta;
		$uri = $_SERVER["REQUEST_URI"];
		$aux_ruta = pathinfo($uri)['dirname'];
        echo "<ul>";

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false)  {
                
            $ruta_completa = $ruta . "/" . $archivo;
			
            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != "..") {
                // Si es un directorio se recorre recursivamente
				//echo $ruta_completa;
                if (is_dir($ruta_completa)) {
                    /*echo '<li><a href="' . $aux_ruta . "/" . $archivo . '">asdf' . $archivo . '</a></li>';
                    obtener_estructura_directorios($ruta_completa);*/
                } else {
					echo '<li><a href="' . $aux_ruta . "/" .  $archivo . '">' . $archivo . '</a></li>';
                }
            }
        }
        
        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}

?>