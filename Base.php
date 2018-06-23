<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Base
 *
 * @author Tarcisio
 */
class Base {

        private $header;
        private $top;
        private $meio;
        private $script;

        public function __construct(){

                $this->header = "<head>" . PHP_EOL .
                "<link rel='shortcut icon' href='image/favicon.ico' />". PHP_EOL .
                "<title>Gestão de matricula</title>" . PHP_EOL .
                "<link rel='stylesheet' href='style.css'>" . PHP_EOL .
                "<link href='https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto+Mono' rel='stylesheet'>" . PHP_EOL .
                "</head>" . PHP_EOL ;

                $this->menu = "<dir class='menu'>" . PHP_EOL .
                        "<ul>" . PHP_EOL .
                        "  <li><a href='index.php'>Principal</a></li>" . PHP_EOL .
                        "  <li><a href='cad_aluno.php'>Cadastrar aluno</a></li>" . PHP_EOL .
                        "  <li><a href='matriculas.php'>Gerenciar matricula</a></li>" . PHP_EOL .
                        "</ul>" . PHP_EOL .
                        "</dir>" . PHP_EOL;

                $this->top = "<div class='banner'>" . PHP_EOL .
                        "<img src='image/LOGO.png' class='logo'>". PHP_EOL .
                        "<h1>Gestão de matricula</h1>" . PHP_EOL .
                        "<h2>Software de gestão de matriculas</h2>" . PHP_EOL .
                        "</div>" . PHP_EOL;
        }
        public function gerarHTML(){

                $Html = "<!DOCTYPE html>
                        <html>";

                $Html.= $this->header;
                $Html.= $this->top;
                $Html.= $this->menu;

                $Html.= "<div class='meio'>";
                $Html.= $this->meio;
                $Html.= "</div>";

                $Html.= $this->script;

                $Html.= " </body>
                        </html>";

                echo $Html;
        }

        public function SetMeio($html){
                $this->meio = $html;
        }

 }

?>