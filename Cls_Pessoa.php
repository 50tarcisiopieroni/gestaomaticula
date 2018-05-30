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
                        $formulario->AddCampoTexto("NomeCompleto","NomeCompleto","","","");
                        $formulario->AddCampoData("Data da matrícula","date","dt_Matricula",date('Y-m-d'),"");

                        /*
                        "Data da matrícula;date;dt_Matricula;".date('Y-m-d')."; ", 
                        "Data de inserção no curso;date;dt_Inserção;;",                
                         
                        Identificação do aluno: 
                        "NomeCompleto;text;nm_pessoa;;", 
                        "Sexo;radio;genero;Masculino; Masculino ",
                        " ;radio;genero;Feminino; Feminino",
                        " ;radio;genero;Outro; Outro",
                        "Data de Nascimento;date;dt_nascimento;;",
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