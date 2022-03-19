<?php
function toda_pagina($ruta, $classname){
    if (is_dir($ruta)){
        $gestor = opendir($ruta);
		$uri = $_SERVER["REQUEST_URI"];
		$aux_ruta = pathinfo($uri)['dirname'];
        echo "<ul>";
        while (($archivo = readdir($gestor)) !== false)  {
            $ruta_completa = $ruta . "/" . $archivo;
            if ($archivo != "." && $archivo != "..") {
                if (is_dir($ruta_completa)) {
                    /*toda_pagina($ruta_completa, $classname);*/
                } else {
					echo '<li>';
						echo '<a href="' . $aux_ruta . "/" .  $archivo . '" class="' . $classname . '">';
							echo '<h5 style="color: #202020;">';
								echo $archivo;
							echo '</h5>';
						echo '</a>';
					echo '</li>';
                }
            }
        }
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}
?>