<?php

class Aluno{

    public function GetFormCadastro(){
        $formulario = new Formulario;
        $formulario->AddCampoData("Data da matrícula","date","dt_Matricula",date('Y-m-d'),"");
        $formulario->AddCampoData("Data de inserção no curso","date","dt_Inserção","","");
        
    }
}


?>