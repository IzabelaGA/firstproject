<?php
$to = 'izabela.sosnowska23@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject= 'Nowy mail od ' . $name . ' (' . $email .')';
$message = $_POST['message'];
// $headers = 'From: ' . $name'' . ' (' . $email .')';
$headers = 'From: ' . $_POST['email'] . "\r\n" .
$headers .= 'Content-type: text/html; charset=utf-8\r\n';

mail($to, $subject, $message, $headers);
// echo 'Wiadomosć wysłana';
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Obejrzyj moje portfolio">
    <meta name="keywords" content="web developer,front-end developer,junior front-end developer,frontend developer,junior frontend developer,Izabela Sosnowska">
    <title>Izabela Sosnowska - Web Developer</title>
    <link href="https://fonts.googleapis.com/css?family=Saira+Condensed:400,700|Saira:300,400&amp;subset=latin-ext"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- <nav class=" top clearfix">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">O mnie</a></li>
            <li><a href="#galery">Galeria</a></li>
            <li><a href="#motto">Motto</a></li>
            <li><a href="#freeTime">Lubię</a></li>
            <li><a href="#contact">Kontakt</a></li>
        </ul>
    </nav> -->
    <header>
        <div class="wrap" id="home">

            <div class="welcome">

            <?php
$to = 'is.contact@izabelasosnowska.pl';
$name = $_POST['name'];
$email = $_POST['email'];
$subject= 'Pytanie przez formularz kontaktowy od ' . $name . ' (' . $email .')';
$message = $_POST['message'];
// $headers = 'From: ' . $name'' . ' (' . $email .')';
$headers = 'From: ' . $_POST['email'] . "\r\n" .
$headers .= 'Content-type: text/html; charset=utf-8\r\n';

mail($to, $subject, $message, $headers);

?>
                <p>Wiadomość została wysłana</p>
                
                <button> <a href="index.html">Powrót</a></button>
            </div>


        </div>
    </header>

    

   

    <footer>
        <p>&copy; Izabela Sosnowska 2019</p>
    </footer>
</body>

</html>