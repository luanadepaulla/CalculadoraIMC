<?php
if(isset($_POST['altura']) && isset($_POST['peso'])) {
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <h2>Calculadora IMC</h2>
        <form method="POST">
        <div class="divAltura">
            <label for="altura"><strong>Altura (M)</label></strong>
            <input type="text" value="<?php if (isset($_POST['altura'])) : echo $_POST['altura'];endif;?>" name="altura" id="altura" placeholder="Insira a altura">
        </div>
        <div class="divPeso">
            <label for="peso"><strong>Peso (KG)</label></strong>
            <input type="text" value="<?php if(isset($_POST['peso'])) : echo $_POST['peso'];endif;?>" name="peso" id="peso" placeholder="Insira o peso">
        </div>
        <div>
            <input id="calcular" type="submit" value="Calcular">
            <input type="button" id="limpar" value="Limpar">
        </div>
    </form>

        <span id="resultado"></span>
    <?php
        require_once 'control.php';
    ?>
    </main>


    <script src="js/script.js"></script>
</body>
</html>

