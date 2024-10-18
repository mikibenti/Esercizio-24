<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio24</title>
</head>
<body>
    <?php
        $mittente = $_POST["mailM"];
        $destinatario = $_POST["mailD"];
        $oggetto = $_POST["oggetto"];
        $corpo = $_POST["corpo"];
        echo "
        <h1>Mail Creata</h1>
        <h3>Informazioni</h3>
        <div style='background-color:cyan'>
            <p>$mittente</p>
            <p>$destinatario</p>
            <p>$oggetto</p>
        </div>
        <h3>Corpo della Mail</h3>
        <div style='background-color:orange;width:50%'>
            <p>$corpo</p>
        </div>
        <hr>
        <h3>Statistiche Corpo Mail</h3>
        <div style='background-color:lightgray'>
            <p>".strlen($corpo)."</p>
            <p>".str_word_count($corpo)."</p>
        </div>";  
    ?>
</body>
</html>