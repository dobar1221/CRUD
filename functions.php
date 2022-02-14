<?php
include 'konekcija.php';

function izlistajKontakte() {
    global $conn;

    $sql = "SELECT * FROM kontakti";
    mysqli_set_charset($conn,"utf8");
    $rez = mysqli_query($conn, $sql);

    if (mysqli_num_rows($rez) > 0) {
        while ($row = mysqli_fetch_assoc($rez)){
            echo '<tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['ime'].'</td>
            <td>'.$row['adresa'].'</td>
            <td>'.$row['grad'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['spol'].'</td>
            <td>'.$row['telefon'].'</td>
            <td><a class="viewbutton"
    href="pogledaj_kontakt.php?view='.$row['id'].'">Pogledaj</a>
                    <a class="updatebutton"
    href="izmjeni_kontakt.php?update='.$row['id'].'">Izmjeni</a>                
                    <a class="deletebutton"
    href="index.php?delete='.$row['id'].'"> Izbrisi </a>
            </td>
        </tr>';
        }
    } else {
        echo "<p>Nema rezultata.</p>";
    }
}


function dodajKontakt() {
    global $conn;

    if(isset($_POST['addkontakt'])){
            $imeprezime = $_POST['imeprezime'];
            $adresa     = $_POST['adresa'];
            $grad       = $_POST['grad'];
            $email      = $_POST['email'];
            $spol       = $_POST['spol'];
            $telefon    = $_POST['telefon'];

            $sql = "INSERT INTO kontakti (ime, adresa, grad, email, spol, telefon)
                    VALUES ('$imeprezime', '$adresa', '$grad', '$email', '$spol', '$telefon')";

    mysqli_set_charset($conn,"utf8");
    $rez = mysqli_query($conn, $sql);
    echo $rez;

    if(!$rez) {
        die("Upis u bazu nije uspio" . mysqli_error($conn));
    } else {
        echo "<br>" . "<p style='color:green'; margin-top:10px'>Kontakt uspjesno dodan u bazu. </p>" . "<br>";
    }
    }
}






function izbrisiKontakt() {
    global $conn;

    if(isset($_GET['delete'])) {
        $id = $_GET['delete'];

        $sql = "DELETE FROM kontakti WHERE id=$id";

        mysqli_query($conn, $sql);
        header("Location:index.php");
    }
}


function pogledajKontakt() {
    global $conn;

    if(isset($_GET['view'])) {
        $id = $_GET['view'];

        $sql = "SELECT * FROM kontakti WHERE id=$id";
        mysqli_set_charset($conn, "utf8");
        $rez = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($rez)){
            echo '<tr>
                        <th width="20%" class="noborders">Ime i prezime</th>
                        <td class="noborders pl-15">'.$row['ime'].'</td>
                    <tr>';
                echo '<tr>
                        <th class="noborders">Adresa</th>
                        <td class="noborders pl-15">'.$row['adresa'].'</td>
                        <tr>';
                echo '<tr>
                        <th class="noborders">Grad</th>
                        <td class="noborders pl-15">'.$row['grad'].'</td>
                    <tr>';
                echo '<tr>
                        <th class="noborders">Email</th>
                        <td class="noborders pl-15">'.$row['email'].'</td>
                    <tr>';
                echo '<tr>
                        <th class="noborders">Spol</th>
                        <td class="noborders pl-15">'.$row['spol'].'</td>
                    <tr>';
                echo '<tr>
                        <th class="noborders">Telefon</th>
                        <td class="noborders pl-15">'.$row['telefon'].'</td>
                    <tr>';
        }
    }
}


?>