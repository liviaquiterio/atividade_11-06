<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
    <style>
    body {
        font-family: 'Courièr New', Courier, monospace;
            font-size: 20px;
            background-color: pink;
    }
    
    </style>
</head>
<body>
    <h3>LOOPING UTILIZANDO A LINGUAGEM PHP</h3>
    <form name="looping" method="post" action="looping.php">
        <p>
        <label>Informe o dia da semana:</label>
        <input type="text" name="dia" size="100" maxlenght="100" required placeholder="Informe o dia entre domingo e segunda">
       </p>
        <p>
        <label>Informe uma mensagem referente ao dia da semana que escolheu:</label>
                    <select name="mensagem" required>
                        <option value="Descanso">Descanso</option>
                        <option value="Aula">Aula</option>
                        <option value="Tédio">Tédio</option>
                        <option value="Fome">Fome</option>
                        <option value="Academia">Academia</option>
                        <option value="Viajar">Viajar</option>
                        <option value="Passear">Passear</option>
                        </select>
        </p>
        <p>
        <label>Informe o seu nome:</label>
        <input type="text" name="nome" size="100" maxlenght="100" required placeholder="Informe o seu nome">
        </p>
        <p>
        <label>Quantas vezes deseja exibir?</label>
        <input type="text" name="numero" size="100" maxlenght="100" required>
        </p>
        <p>
        <input type="submit" name="enviar" value="Enviar">
        </p>
</form>
<?php
if(isset($_POST["enviar"]))
{
$dia = $_POST["dia"];
$mensagem = $_POST["mensagem"];
$nome = $_POST["nome"];
$numero = $_POST["numero"];
echo "Dia da semana: " . $dia  . "<br>" ;
echo "Mensagem: " . $mensagem .  "<br>";
for($c=1;$c<=$numero;$c++)
{
    
    echo $nome . " " . $c . "<br>";
}
}
?>
</body>
</html>