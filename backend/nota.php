<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $not = $_POST['nota'];

                $mensagem = "";

            switch ($not) {
                case "D":
                    $mensagem = "Desenvolvido";
                    break;
                case "ND":
                    $mensagem = "Não Desenvolvido";
                    break;
                default:
                    $mensagem = "Nota Inválida!";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo $mensagem;?>
</body>
</html>