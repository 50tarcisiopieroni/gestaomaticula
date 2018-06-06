
<?php
    require_once 'Base.php';
	require_once 'Cls_Aluno.php';
	
	$pagina = new Base();

	if(isset($_POST['nm_pessoa']))
	{
		$a = new Aluno($_POST);
	}else{
		$pagina->SetMeio(Aluno::GetFormCadastro("Cad_Aluno.php"));
	}


	$pagina->GerarHTML();

?>

