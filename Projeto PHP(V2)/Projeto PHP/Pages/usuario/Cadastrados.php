<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Os usarios cadastrados são esses:</h1>
    <?php
    $db=connection();
    $query = $db->query("SELECT * FROM users");

        echo "<hr>";
        while($row = $query->fetchArray()){
            echo "|Nome: ".$row['nome']." |Email: ".$row['email']." |Senha: ".$row['senha'];
            echo "<br>";
            echo "<hr>";
        }
    ?>
</body>
</html>