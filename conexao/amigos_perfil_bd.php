<?php
require_once("../classe/dados.class.php");
include("../functions.php");
include("funcoes.php");

verificacao_online1();
$dados=new dados();

$comando="select * from netwamigo where email='$email_publicacao' order by id desc";
$rs=mysql_query($comando,$conexao) or die("impossivel localizar");
$aux=0;

$email_amigo_banco=array();
$diretorio_amigo=array();
$foto_amigo=array();
$nome_banco=array();

while ($aux<mysql_num_rows($rs)) {
	$R=mysql_fetch_array($rs);

	$dados->SetEmail($R["emailamigo"]);

	$email_amigo_banco[$aux]=$dados->GetEmail();

	$diretorio_amigo[$aux]=caminho_foto1($email_amigo_banco[$aux]);
	$foto_amigo[$aux]=usuario_perfil1($email_amigo_banco[$aux]);
	$nome_banco[$aux]=usuario_nome1($email_amigo_banco[$aux]);


	$aux++;
}

?>