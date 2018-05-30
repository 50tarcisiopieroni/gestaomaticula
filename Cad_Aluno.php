
<?php
    require_once 'Base.php';
	require_once('Cls_Pessoa.php');
	require_once('Cls_Campo.php');

	$p = new Pessoa();

	$Html = Campo::GerarFormulario($p->GetCampos());

	Base::gerarHTML($Html);
?>

