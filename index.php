<?php
include_once("class/clinica.class.php");

$clinica = new Clinica();
?>
<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Clínica Demo</title>
  </head>
  <body>
    <div class="container text-center">
    <div class="row">
        <label>Consulta de Especialidade </label>
        <select name="espec" id="espec" class="form-group">
            <option>Selecione a especialidade</option>
            <?php
            foreach( $clinica->especialidade() as $v){
                echo "<option value='".$v["especialidade_id"]."'>".$v["nome"].'</option>';
            }
            ?>
        </select>
        <button type="button" class="btn btn-success rounded form-group" onclick="exibeEspecialidade();">Agendar</button>
    </div>

    <div id="resultado">
        <!-- AQUI ENTRA AS INFORMAÇÕES DOS PROFISSIONAIS -->
    </div>
</div>
    <!-- jQUERY -->
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="js/funcao.js" type="text/javascript"></script>
  </body>
</html>