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
   
  static public function gerarHTML($meio){

    $Html = "<!DOCTYPE html>
            <html>";

    $Html.= Base::header();
    $Html.= Base::top();
    $Html.= Base::menu();

    $Html.= "<div class='meio'>";
    $Html.= $meio;
    $Html.= "</div>";
    $Html.= " </body>
             </html>";

    echo $Html;
  }

  static private function header(){
    $Html = "<head>" . PHP_EOL .
            "<title>Gestão de matricula</title>" . PHP_EOL .
            "<link rel='stylesheet' href='style.css'>" . PHP_EOL .
            "<link href='https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto+Mono' rel='stylesheet'>" . PHP_EOL .
            "</head>" . PHP_EOL ;
    return $Html;
  } 
  static private function menu(){
       $Html = "<dir class='menu'>" . PHP_EOL .
               "<ul>" . PHP_EOL .
               "  <li><a href='index.php'>Principal</a></li>" . PHP_EOL .
               "  <li><a href='cad_aluno.php'>Cadastrar Aluno</a></li>" . PHP_EOL .
               "</ul>" . PHP_EOL .
               "</dir>" . PHP_EOL;
        return $Html;
  }

  static private function top(){
        $Html = "<div class='banner'>" . PHP_EOL .
                "<h1>Matricula</h1>" . PHP_EOL .
                "<h2>Software de matriculas</h2>" . PHP_EOL .
                "</div>" . PHP_EOL;
        return $Html;
   }
 }

?>