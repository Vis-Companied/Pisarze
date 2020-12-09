<?php
    session_start();
    if(!isset($_POST['email']) || !isset($_POST['haslo'])){
        header('Location: Vis.php'); 
    }

    require_once "config.php";
    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno!=0)
    {
    
        echo "error:" .$connection->connect_errno;
    }
    else {
        $email_post = $_POST['email'];
        $email = htmlentities($email_post, ENT_QUOTES, "UTF-8");
        $haslo = $_POST['haslo'];

        $rezultat = $connection->query("SELECT * FROM konta_uzytkownikow WHERE email='$email'");
        $czyistnieje = $rezultat->num_rows;
      
        if($czyistnieje > 0){
            $dane = $rezultat->fetch_assoc();
            if(password_verify($haslo ,$dane['haslo'])){
                $_SESSION['nazwa'] = $dane['nazwa_uzytkownika']; 
                header('Location: main.php');
                $_SESSION['zalogowany'] = true;
                unset($_SESSION['error']);
            } else{
                $_SESSION['error'] = 'Niewłaściwe hasło';
                header('Location: Vis.php');
                
            }  
        } 
        else {
            $_SESSION['error'] = 'Nie ma podane adresu mail w bazie';
            header('Location: Vis.php');
        }
        
    }
    $connection->close();


?>