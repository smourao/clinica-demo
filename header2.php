<?php
//BUSCANDO AS CLASSES
//require_once 'classes/Login.class.php';
//ESTANCIANDO 
//$objFunc = new Login();
//VALIDANDO USUARIO
/*session_start();
if($_SESSION["logado"] == "sim"){
	$objFunc->userLogado($_SESSION['func']);
}else{
	header("location: /login"); 
}
if(!empty($_GET['sair']) == "sim"){
	$objFunc->userOut();
}*/
?>

<nav class="navbar navbar-inverse navbar-radius">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="/aCavalcanti/">Home</a></li>
      <li><a href="/aCavalcanti/aluno">Aluno</a></li>
      <li><a href="/aCavalcanti/academia">Academia</a></li>
      <li><a href="/aCavalcanti/user">User</a></li>
    </ul>
    <!--ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Olá, <?=$_SESSION['nome']?></a></li>
      <li><a href="?sair=sim"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
    </ul-->
  </div>
</nav>
