
<?php 
//aquivo que o usuario sera redirecionado ao login
session_start();
    if(empty($_SESSION)) {
        print "<scrip>location.href='index.php';</scritp>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">Sistema login</a>
            <?php 
                print "Olá, ".$_SESSION["nome"];
                print "<a href='logout.php'class='btn btn-danger'> Sair </a>"
            ?>
        </div>

    </nav>
</body>


</html>