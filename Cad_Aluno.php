
<?php
    require_once 'Base.php';
	require_once 'Cls_Pessoa.php';

	$p = new Pessoa();

	$pagina = new Base();
	
	$pagina->SetMeio($p->GetFormCadastro());

	$pagina->GerarHTML();

?>

