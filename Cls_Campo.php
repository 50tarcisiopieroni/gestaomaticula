<?php

	class campo{

		static function GerarFormulario($campos){

		$Html = "<div class='formulario'>" . PHP_EOL .
				"<table>". PHP_EOL .
				"<form class='cadastro'>". PHP_EOL
				;
		

		for($i = 0; $i< count($campos);$i++)
		{
			$title = explode(";", $campos[$i]);
			$cor = ($i%2==0)?"#E0F8E0":"rgb(240,240,240,0.2)";
			$Html.= "<tr style='background:". $cor ."'>" . PHP_EOL .
				 	"<td>".$title[0]."</td> " . PHP_EOL .
					"<td> <input type='".$title[1]."'
					name='".$title[2]."'  
					value='". $title[3] ."'>"
					. $title[4] ."</td>" . PHP_EOL .
				 	"<tr>". PHP_EOL
				 	;
		}	


			$Html .= "</form>" . PHP_EOL .
					 "</table>" . PHP_EOL .
					 "<div class='clear'></div>" . PHP_EOL .
					 "</div>" . PHP_EOL
					 ;

		return $Html;
		}
	}

?>