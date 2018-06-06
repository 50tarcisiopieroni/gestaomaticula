<?php

	class Formulario{
		
		private $campos;
		private $classDiv;
		private $classForm;
		private $idForm;
		static $estados;

		public function __Construct($link,$classForm,$idForm)
		{	
			$this->link = $link;
			$this->campos = array("");
			$this->classDiv = "formulario";
		    $this->classForm = $classForm;
			$this->idForm = $idForm;
			$this::$estados = array("AC","AL","AP","AM","BA","CE","DF","ES","GO","MA","MT","MS","MG","PA","PB","PR","PE","PI","RJ","RN","RS","RO","RR","SC","SP","SE","TO");
		}

		public function GerarFormulario()
			{
			$Html = "<div class='".$this->classDiv."'>" . PHP_EOL .
					"<form action='". $this->link ."' method='post' id='".$this->idForm."' class='".$this->classForm."'>". PHP_EOL.
					"<table>". PHP_EOL 
					;
			
			for($i = 0; $i< count($this->campos);$i++)
			{
				$Html .= $this->campos[$i];
			}

			$Html .= 
					 "</table>" . PHP_EOL .
					 "<div class='bt_cadastrar'><input type='submit' value='Cadastrar'></div>" . PHP_EOL .
					 "</form>" . PHP_EOL .
					 "<div class='clear'></div>" . PHP_EOL .
					 "</div>" . PHP_EOL
					;
				
			return $Html;
			}

		public function AddCampoTexto(string $preDescricao, string $name, string $id){
				
				$Html = "<tr>". PHP_EOL .
						"<td>".$preDescricao."</td>" . PHP_EOL.
						"<td><input type='text' name='". $name ."' id='".$id."'></td>
						</tr>";
						
				$this->campos[] = $Html;
			}

		public function AddCampoRadio(string $preDescricao, string $name, string $id, string $value, string $posDescricao){

			$Html = "<tr>". PHP_EOL .
					"<td>".$preDescricao."</td>" . PHP_EOL.
					"<td><input type='radio' name='". $name ."' id='".$id."' value='".$value."'>". $posDescricao ."</td>
					</tr>";
			
			$this->campos[] = $Html;
			}

		public function AddCampoData(string $preDescricao, string $name, string $id, string $value){
			
			$Html = "<tr>". PHP_EOL .
					"<td>".$preDescricao."</td>" . PHP_EOL.
					"<td><input type='date' name='". $name ."' id='".$id."' value='".$value."'></td>
					</tr>";

				$this->campos[] = $Html;
			}
		
		public function AddCampoSelect(string $preDescricao, string $id, $value){
			
			$Html = "<tr>". PHP_EOL .
					"<td>".$preDescricao."</td>" . PHP_EOL.
					"<td> <select name='$id'>";
					
			for($i=0;$i<count($value);$i++){
				$Html .= " <option value='".$value[$i]."'>".$value[$i]."</option>";
			}

			$Html .= "</select>
					</td>
					</tr>";

				$this->campos[] = $Html;
			}

		public function AddCampoHTML(string $preDescricao,string $Html){
			$this->campos[] = $Html;
			}

		public function AddTopico(string $titulo){
			$Html = "<tr>
					<td colspan='2' class='topico'>".$titulo."</td> 
					</tr>";			
			$this->campos[] = $Html;
			

			}
		}

?>