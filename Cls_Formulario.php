<?php

	class Formulario{
		
		private $campos = array("");
		private $nomeForm;
		private $classDiv = "formulario";
		private $classForm = "cadastro";
		private $idForm = "form";
		
		public function GerarFormulario()
			{
			$Html = "<div class='".$this->classDiv."'>" . PHP_EOL .
					"<table>". PHP_EOL .
					"<form id='".$this->idForm."' class='".$this->classForm."'>". PHP_EOL
					;
			
			for($i = 0; $i< count($this->campos);$i++)
			{
				$Html .= $this->campos[$i];
			}

			$Html .= "</form>" . PHP_EOL .
					"</table>" . PHP_EOL .
					"<div class='clear'></div>" . PHP_EOL .
					"</div>" . PHP_EOL
					;
				
			return $Html;
			}

		public function AddCampoTexto(string $preDescricao, string $name, string $id, string $value, string $posDescricao)
			{
				$Html = "<tr>". PHP_EOL .
						"<td>".$preDescricao."</td>" . PHP_EOL.
						"<td><input type='text' name='". $name ."' id='".$id."' value='".$value."' ></td>". $posDescricao .
						"</tr>";
						
				$this->campos[] = $Html;
			}

		public function AddCampoRadio(string $preDescricao, string $name, string $id, string $value, string $posDescricao)
			{
				$Html = "<tr>". PHP_EOL .
						"<td>".$preDescricao."</td>" . PHP_EOL.
						"<td><input type='radio' name='". $name ."' id='".$id."' value='".$value."' ></td>". $posDescricao .
						"</tr>";
				
				$this->campos[] = $Html;
			}

		public function AddCampoData(string $preDescricao, string $name, string $id, string $value, string $posDescricao)
			{
			$Html = "<tr>". PHP_EOL .
					"<td>".$preDescricao."</td>" . PHP_EOL.
					"<td><input type='date' name='". $name ."' id='".$id."' value='".$value."' ></td>". $posDescricao .
					"</tr>";

				$this->campos[] = $Html;
			}
	}

?>