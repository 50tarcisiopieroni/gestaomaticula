<?php 

        require_once('Cls_Formulario.php');
        
        class Pessoa
	{
            private $name;
            private $sobrenome;
            private $campos;

            public function __construct() {}

            public function GetCampos(){
                    return $this->campos;
            }
            public function GetFormCadastro(){
                $formulario = new Formulario;

                        // texto;type;name;atributos extras
                        // No atribudo extra é necessário preencher
                        // exatamento o HTML                        
                        $formulario->AddCampoTexto("NomeCompleto",";nm_pessoa","nm_pessoa");
                        $formulario->AddCampoRadio("Sexo","sexo","sexo","masculino","Masculino");
                        $formulario->AddCampoRadio("","sexo","sexo","feminino","feminino");
                        $formulario->AddCampoRadio("","sexo","sexo","outro","outro");
                        $formulario->AddCampoData("Data de nascimento","dt_nascimento","dt_nascimento","");
                        $formulario->AddCampoTexto("Narutalidade","naturalidade","naturalidade");
                        $formulario->AddCampoDataList("Uf Naturalidade","uf_naturalidade",$formulario->estados);


                        /*
                        "",                
                         
                        Identificação do aluno: 
                        ok"NomeCompleto;text;nm_pessoa;;", 
                        ok"Sexo;radio;genero;Masculino; Masculino ",
                        ok" ;radio;genero;Feminino; Feminino",
                        ok" ;radio;genero;Outro; Outro",
                        ok"Data de Nascimento;date;dt_nascimento;;",
                        "Naturalidade;text;Naturalidade;;"
                        
        
                        Uf: 
                        Nacionalidade:
                        Religião: 
                        Endereço:       
                        Bairro:  
                        Cep: 
                        Cidade: 
                        Uf: 
                        
                        Telefone residencial: 
                        Telefone p/ recado: 
                        Em caso de emergencia falar com: 
                        Telefone:  
                        
                        Nome escola onde estuda: 
                        Série: 
                        Turno    
                        
                        Filiação:
                        Nome da mãe:
                        Celular: 
                        Operadora: 
                        Data nascimento: 
                        Naturalidade: 
                        Uf: 
                        Profissão: 
                        Local de trabalho: 
                        Telefone comercial:  
                        Cpf nº: 
                        RG nº: 
                        Escolaridade
                        E-mail:
                        */ 
                return $formulario->GerarFormulario();
                 }
	}
?>