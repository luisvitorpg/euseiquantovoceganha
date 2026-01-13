<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="_css/style.css">
        <title>Jogo de advinhação de salário</title>
    </head>
    <body>
        <div class="principal">
            <h1>EU SEI ADVINHAR QUANTO VOCÊ GANHA!</h1>
            <h3>Para conseguir saber o quanto você ganha, 
                digite abaixo o quanto você ganha que iremos te dizer o quanto você ganha.
            </h3>
            <form action="./index.php" method="POST">
                <!-- The 'name' attribute is crucial for accessing the data in PHP -->
                <input type="text" id="user_message" name="message_content" placeholder="Insira o quanto você ganha"><br><br>
                
                <input type="submit" value="Saber quanto você ganha">
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $received_message = htmlspecialchars($_POST['message_content']);

            if (is_numeric($received_message)) {
                if (strlen($received_message) > 20) {
                    echo "<p>Não vou calcular isso e nem me pergunte o motivo.</p><br/>";
                } else {
                    echo "<p>Você ganha $received_message reias.</p><br/>";
                }
            } else {
                echo "<p>Insira um número.</p><br/>";
            }
        } else {
            echo "<p>Você ainda não inseriu nenhum dado.</p><br/>";
        }
        ?>
    </body>
</html>