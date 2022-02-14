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
<h2>Dodaj kontakt</h2>    
    
    <form action="dodaj_kontakt.php" method="POST">
        <table border="0" cellpadding="0" cellspacing="0" class="noborders">

            <tr>
                <td class="noborders">Ime i prezime</td>
                <td class="noborders"><input type="text" name="imeprezime"></td>
            </tr>
            <tr>
                <td class="noborders">Adresa</td>
                <td class="noborders"><input type="text" name="adresa"></td>
            </tr>    
            <tr>
                <td class="noborders">Grad</td>
                <td class="noborders"><input type="text" name="grad"></td>
            </tr>
            <tr>
                <td class="noborders">Email</td>
                <td class="noborders"><input type="email" name="email"></td>
            </tr>
            <tr>
                <td class="noborders">Spol</td>
                <td class="noborders">
                    <select name="spol">
                        <option value="M">M</option>
                        <option value="Ž">Ž</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="noborders">Telefon</td>
                <td class="noborders"><input type="text" name="telefon"></td>
            </tr>
            <tr>
                <td colspan="2" class="noborders">
                    <input style="width:100px; text-align: center;"
class="addbutton" type="submit" name="addkontakt" value="Dodaj kontakt" <?php  if(isset($_POST['addkontakt'])){dodajKontakt();} ?>>
                    <a class="backbutton" href="index.php">Početna</a>
                </td>
            </tr>
        </table>
        
    </form>
    

</body>
</html>