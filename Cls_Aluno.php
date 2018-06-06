<?php

require_once('Cls_Formulario.php');

class Aluno{

    private $linkForm;
    private $id_aluno;
    private $dt_matricula;
    private $dt_insercao;
    private $como_conheceu;
    private $nm_pessoa;
    private $sexo;
    private $dt_nascimento;
    private $naturalidade;
    private $uf_naturalidade;
    private $nacionalidade;
    private $religiao;
    private $mora_com;
    private $logradouro;
    private $complemento;
    private $num_endereço;
    private $bairro;
    private $cep;
    private $cidade;
    private $uf_endereco;
    private $tel_residencia;
    private $tel_celular;
    private $tel_recado;
    private $nm_emergencia;
    private $tel_emergencia;
    private $nm_escola;
    private $ano_escola;
    private $turno_escola;
    private $nm_mae;
    private $tel_mae;
    private $dt_mae_nascimento;
    private $mae_naturalidade;
    private $mae_uf_naturalidade;
    private $mae_profissao;
    private $mae_local_trabalho;
    private $mae_tel_comercial;
    private $mae_cpf;
    private $mae_rg;
    private $mae_escolaridade;
    private $mae_email;
    private $nm_pai;
    private $tel_pai;
    private $dt_pai_nascimento;
    private $pai_naturalidade;
    private $pai_uf_naturalidade;
    private $pai_profissao;
    private $pai_local_trabalho;
    private $pai_tel_comercial;
    private $pai_cpf;
    private $pai_rg;
    private $pai_escolaridade;
    private $pai_email;
    private $nm_rsp_matricula;
    private $rsp_matricula_tel;
    private $rsp_matricula_parentesco;
    private $beneficio_social;
    private $renda_familiar;
    private $alergia_medicamento;
    private $alergia_alimento;
    private $familia_med_control;
    private $familia_trat_med;
    private $moradia;

    public function __construct($dados) {

        //$this->id_aluno = $dados["id_aluno"];
        $this->dt_matricula = $dados["dt_matricula"];
        $this->dt_insercao = $dados["dt_insercao"];
        $this->como_conheceu = $dados["como_conheceu"];
        $this->nm_pessoa = $dados["nm_pessoa"];
        $this->sexo = $dados["sexo"];
        $this->dt_nascimento = $dados["dt_nascimento"];
        $this->naturalidade = $dados["naturalidade"];
        $this->uf_naturalidade = $dados["uf_naturalidade"];
        $this->nacionalidade = $dados["nacionalidade"];
        $this->religiao = $dados["religiao"];
        $this->mora_com = $dados["mora_com"];

        $this->logradouro = $dados["logradouro"];
        $this->complemento = $dados["complemento"];
        $this->num_endereço = $dados["num_endereço"];
        $this->bairro = $dados["bairro"];
        $this->cep = $dados["cep"];
        $this->cidade = $dados["cidade"];
        $this->uf_endereco = $dados["uf_endereco"];

        $this->tel_residencia = $dados["tel_residencia"];
        $this->tel_celular = $dados["tel_celular"];
        $this->tel_recado = $dados["tel_recado"];
        $this->nm_emergencia = $dados["nm_emergencia"];
        $this->tel_emergencia = $dados["tel_emergencia"];

        $this->nm_escola = $dados["nm_escola"];
        $this->ano_escola = $dados["ano_escola"];
        $this->turno_escola = $dados["turno_escola"];

        $this->nm_mae = $dados["nm_mae"];
        $this->tel_mae = $dados["tel_mae"];
        $this->dt_mae_nascimento = $dados["dt_mae_nascimento"];
        $this->mae_naturalidade = $dados["mae_naturalidade"];
        $this->mae_uf_naturalidade = $dados["mae_uf_naturalidade"];
        $this->mae_profissao = $dados["mae_profissao"];
        $this->mae_local_trabalho = $dados["mae_local_trabalho"];
        $this->mae_tel_comercial = $dados["mae_tel_comercial"];
        $this->mae_cpf = $dados["mae_cpf"];
        $this->mae_rg = $dados["mae_rg"];
        $this->mae_escolaridade = $dados["mae_escolaridade"];
        $this->mae_email = $dados["mae_email"];
        $this->nm_pai = $dados["nm_pai"];
        $this->tel_pai = $dados["tel_pai"];
        $this->dt_pai_nascimento = $dados["dt_pai_nascimento"];
        $this->pai_naturalidade = $dados["pai_naturalidade"];
        $this->pai_uf_naturalidade = $dados["pai_uf_naturalidade"];
        $this->pai_profissao = $dados["pai_profissao"];
        $this->pai_local_trabalho = $dados["pai_local_trabalho"];
        $this->pai_tel_comercial = $dados["pai_tel_comercial"];
        $this->pai_cpf = $dados["pai_cpf"];
        $this->pai_rg = $dados["pai_rg"];
        $this->pai_escolaridade = $dados["pai_escolaridade"];
        $this->pai_email = $dados["pai_email"];
        $this->nm_rsp_matricula = $dados["nm_rsp_matricula"];
        $this->rsp_matricula_tel = $dados["rsp_matricula_tel"];
        $this->rsp_matricula_parentesco = $dados["rsp_matricula_parentesco"];
        $this->beneficio_social = $dados["beneficio_social"];
        $this->renda_familiar = $dados["renda_familiar"];
        $this->alergia_medicamento = $dados["alergia_medicamento"];
        $this->alergia_alimento = $dados["alergia_alimento"];
        $this->familia_med_control = $dados["familia_med_control"];
        $this->familia_trat_med = $dados["familia_trat_med"];
        $this->moradia = $dados["moradia"];
    }


    static function GetFormCadastro(string $linkForm){
        $formulario = new Formulario($linkForm,"cad_aluno","cad_aluno");

        // texto;type;name;atributos extras
        // No atribudo extra é necessário preencher
        // exatamento o HTML
 
        $formulario->AddCampoData("Data da matrícula","dt_matricula","dt_matricula",date('Y-m-d'),"");
        $formulario->AddCampoData("Data de inserção no curso","dt_insercao","dt_insercao","","");
        $formulario->AddCampoTexto("Como chonheceu o projeto","como_conheceu","como_conheceu"); 

        $formulario->Addtopico("</br><center><strong>Aluno</strong></center></br>");
        $formulario->AddTopico("</br>Identificação do aluno");

        $formulario->AddCampoTexto("NomeCompleto","nm_pessoa","nm_pessoa");
        $formulario->AddCampoSelect("Sexo","sexo",array("Feminino","Masculino","outro"));
        $formulario->AddCampoData("Data de nascimento","dt_nascimento","dt_nascimento","");
        $formulario->AddCampoTexto("Narutalidade","naturalidade","naturalidade");
        $formulario->AddCampoSelect("Uf Naturalidade","uf_naturalidade",$formulario::$estados);
        $formulario->AddCampoTexto("Nacionalidade","nacionalidade","nacionalidade");
        $formulario->AddCampoTexto("Religião","religiao","religiao");
        $formulario->AddCampoTexto("Mora com","mora_com","mora_com");

        $formulario->AddTopico("Endereço");

        $formulario->AddCampoTexto("Logradouro","logradouro","logradouro");
        $formulario->AddCampoTexto("Complemento","complemento","complemento");
        $formulario->AddCampoTexto("Numero","num_endereço","num_endereço");

        $formulario->AddCampoTexto("Bairro","bairro","bairro");
        $formulario->AddCampoTexto("CEP","cep","cep");
        $formulario->AddCampoTexto("Cidade","cidade","cidade");
        $formulario->AddCampoSelect("Estado","uf_endereco",$formulario::$estados);

        $formulario->AddTopico("Contato");

        $formulario->AddCampoTexto("Telefone residencial","tel_residencia","tel_residencia");
        $formulario->AddCampoTexto("Telefone celular","tel_celular","tel_celular");
        $formulario->AddCampoTexto("Telefone para Recado","tel_recado","tel_recado");

        $formulario->AddTopico("Em caso de emergência");

        $formulario->AddCampoTexto("Nome pessoa","nm_emergencia","nm_emergencia");
        $formulario->AddCampoTexto("Telefone","tel_emergencia","tel_emergencia");

        $formulario->AddTopico("Escolaridade");

        $formulario->AddCampoTexto("Escola onde estuda","nm_escola","nm_escola");
        $formulario->AddCampoTexto("Ano","ano_escola","ano_escola");
        $formulario->AddCampoSelect("Turno","turno_escola",array("Manhã","Tarde","Noite"));

        $formulario->AddTopico("</br><center><strong>Filiação</strong></center></br>");

        $formulario->AddTopico("</br>Identificação da mãe");
        
        $formulario->AddCampoTexto("Nome da mãe","nm_mae","nm_mae");    
        $formulario->AddCampoTexto("Telefone da mãe","tel_mae","tel_mae");
        $formulario->AddCampoTexto("Data de nascimento da mãe","dt_mae_nascimento","dt_mae_nascimento");
        $formulario->AddCampoTexto("Naturalidade","mae_naturalidade","mae_naturalidade");
        $formulario->AddCampoSelect("UF Naturalidade","mae_uf_naturalidade",$formulario::$estados);
        $formulario->AddCampoTexto("Profissão","mae_profissao"," mae_profissao");
        $formulario->AddCampoTexto("Local de trabalho","mae_local_trabalho","mae_local_trabalho");
        $formulario->AddCampoTexto("Telefone comercial","mae_tel_comercial","mae_tel_comercial");
        $formulario->AddCampoTexto("CPF","mae_cpf","mae_cpf");
        $formulario->AddCampoTexto("RG","mae_rg","mae_rg");
        $formulario->AddCampoTexto("Escolaridade","mae_escolaridade","mae_escolaridade");
        $formulario->AddCampoTexto("e-mail","mae_email","mae_email");
        
        $formulario->AddTopico("Identificação da pai");

        $formulario->AddCampoTexto("Nome da pai","nm_pai","nm_pai");    
        $formulario->AddCampoTexto("Telefone da pai","tel_pai","tel_pai");
        $formulario->AddCampoTexto("Data de nascimento da pai","dt_pai_nascimento","dt_pai_nascimento");
        $formulario->AddCampoTexto("Naturalidade","pai_naturalidade","pai_naturalidade");
        $formulario->AddCampoSelect("UF Naturalidade","pai_uf_naturalidade",$formulario::$estados);
        $formulario->AddCampoTexto("Profissão","pai_profissao"," pai_profissao");
        $formulario->AddCampoTexto("Local de trabalho","pai_local_trabalho","pai_local_trabalho");
        $formulario->AddCampoTexto("Telefone comercial","pai_tel_comercial","pai_tel_comercial");
        $formulario->AddCampoTexto("CPF","pai_cpf","pai_cpf");
        $formulario->AddCampoTexto("RG","pai_rg","pai_rg");
        $formulario->AddCampoTexto("Escolaridade","pai_escolaridade","pai_escolaridade");
        $formulario->AddCampoTexto("e-mail","pai_email","pai_email");

        $formulario->Addtopico("</br><center><strong>Matrícula</strong></center></br>");
        $formulario->AddTopico("</br>Responsável pela matrícula");

        $formulario->AddCampoTexto("Responsável","nm_rsp_matricula","nm_rsp_matricula");
        $formulario->AddCampoTexto("Telefone","rsp_matricula_tel","rsp_matricula_tel");
        $formulario->AddCampoTexto("Parentesco","rsp_matricula_parentesco","rsp_matricula_parentesco");
        $formulario->AddCampoTexto("Benefício Social","beneficio_social","beneficio_social");
        $formulario->AddCampoTexto("Renda Familiar","renda_familiar","renda_familiar");
        $formulario->AddCampoTexto("Alergia por algum medicamento","alergia_medicamento","alergia_medicamento");
        $formulario->AddCampoTexto("Alergia por algum alimento","alergia_alimento","alergia_alimento");
        $formulario->AddCampoTexto("Alguém da família faz uso de medicação controlada","familia_med_control","familia_med_control");
        $formulario->AddCampoSelect("Alguém da família está em tratamento","familia_trat_med",array("Sim","Não"));
        $formulario->AddCampoSelect("Moradia","moradia",array("Própria","Cedida","Aluguel","Financiada","Outra situação"));
   
        return $formulario->GerarFormulario();
    }

}


?>
