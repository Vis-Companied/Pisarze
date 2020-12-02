<?php 
session_start();


    if(!isset($_POST['nazwa']) || !isset($_POST['email']) || !isset($_POST['haslo'])){
        header('Location: Vis.html'); 
    }

    require_once "config.php";
    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno!=0)
    {
    
        echo "error:" .$connection->connect_errno;
    }
    else
    {
        $nazwa_post = $_POST['nazwa'];
        $nazwa = htmlentities($nazwa_post, ENT_QUOTES, "UTF-8");
        $email_post = $_POST['email'];
        $email = htmlentities($email_post, ENT_QUOTES, "UTF-8");
        $haslo_post = $_POST['haslo'];
        $haslo = htmlentities($haslo_post, ENT_QUOTES, "UTF-8");

        $zapytanie = $connection->query("SELECT * FROM konta_uzytkownikow WHERE Nazwa_Użytkownika='$nazwa' OR Email='$email'");
        $czyistnieje = $zapytanie->num_rows;

        if($czyistnieje > 0){
            echo "Użytkownik z podaną nazwą lub emailem już istnieje <a href='Vis.html'>Powrót</a>";
        }
        else {
            if($dodajuzyt = $connection->query("INSERT INTO konta_uzytkownikow VALUES (NULL,'$nazwa', '$email', '$haslo')")){
                echo "Rejestracja zakończona pomyślnie  <a href='Vis.html'>Powrót</a>";
            } 
            else {
                echo "Ops, something wrong!";
            }

        }
        

        $connection->close(); 
    }

?>

