<?php 
	$directorio = "c";
	function borrar($directorio){
		
		foreach (glob($directorio."/*") as $value) {
			if (is_dir($value)) {
				borrar($value);
			}else{
				unlink($value);
			}

		}
		rmdir($directorio);

	}

	borrar($directorio);
	echo "directorio borrado";
 ?>