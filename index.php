<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="result.php" method=GET>
        <input type="text" name="taboo" placeholder="Parola da rimuovere">
        <button type="submit">Invia</button>
        <br>
        <br>
        <textarea rows="10" cols="50" name="comment" placeholder="Testo da filtrare"></textarea>
        </form>
    </div>
</body>
</html>
<style>
    div{
        display: flex;
        justify-content: center;
        margin-top: 8rem;
    }
</style>
