<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "srv1427.hstgr.io";
    $username = "u555767490_0jUSF";
    $password = "3#Xw>!v2eQ";
    $dbname = "u555767490_qphYu";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connessione fallita: " . $conn->connect_error);
    }

    $giorno = $_POST['giorno'];
    $orario = $_POST['orario'];
    $cognome = $_POST['cognome'];
    $ordine = $_POST['ordine'];
    $info = $_POST['info'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO ordini (giorno, orario, cognome, ordine, info, telefono)
            VALUES ('$giorno', '$orario', '$cognome', '$ordine', '$info', '$telefono')";

    if ($conn->query($sql) === TRUE) {
        echo '<p class="success-message">Prenotazione effettuata con successo!</p>';
    } else {
        echo '<p class="error-message">Errore: ' . $sql . '<br>' . $conn->error . '</p>';
    }

    $conn->close();
}
?>
