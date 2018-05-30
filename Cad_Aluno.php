
<?php
    require_once 'Base.php';
	require_once('Cls_Pessoa.php');

	$p = new Pessoa();

	$Html = $p->GetFormCadastro();

	Base::gerarHTML($Html);
?>

