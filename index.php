<?php include 'include/functions.php';?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src='main.js'></script>
</head>


<body>
<h1>Imenik</h1>
    <a href="dodaj_kontakt.php" class="addbutton">Dodaj kontakt</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Ime i prezime</th>
            <th>Adresa</th>
            <th>Grad</th>
            <th>Email</th>
            <th>Spol</th>
            <th>Telefon</th>
            
            <th width="228px">Akcija</th>
        </tr>
        <?php izlistajKontakte();?>
        <?php izbrisiKontakt();?>
    </table>



</body>
</html>