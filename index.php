<?php

/**
 * @author Thiago Rodrigues 
 * @version 0.01
 * @category Média, 
 * @license GPL, or GNU General Public License, version 2
 * 
 * TOdos os dados contidos aqui são para usos e ben de todos o/
 * 
 * 
**/

// ==================	CONFIGURAÇÕES PRINCIPAIS   ================== ]

	// Definição do diretório onde iram estar os arquivos de midia. 
	$diretorio = "C:\wamp\www\Player\movie";

	// echo $diretorio;
	$str = realpath("." . $diretorio);
	echo $str;






	break;
	// $diretorio[] = "C:\wamp\www\Player\sdmovie";


// ================================================================== ]


// ==================	  CONFIGURAÇÕES GLOBIAS    ================== ]

	// NÃO MEXER NESSAS CONFIGURAÇÕES.... 	
	$extensaoAutorizadas[] = "mp4";


// ================================================================== ]

	// verificando se é um diretório válido. e iniciando a criação da listagem de arquivos...



	foreach ($diretorio as $key => $dir) {

		if(is_dir($dir)){
			$files = opendir($dir);
			echo "<ul>";
			while ($nome_files = readdir($files)) {
				echo "<li><a href=''>$nome_files</a></li>";
			}
			echo "</ul>";

			// $files = scandir($dir);		

			// 
			// foreach ($files as $nomes) {
			// 	
			// }
			// echo "</ul>";


		}
	}

?>