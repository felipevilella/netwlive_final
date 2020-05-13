<?php
$conexao=@mysql_connect("localhost","root","")or die("impossivel conectar ao bd");
$banco=mysql_select_db("netwlive",$conexao)or die("erro ao selecionar ao banco");
?>