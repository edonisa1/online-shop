<?php
session_start();

$emri = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'listaproduktevedb') or die("Baza e te dhenave nuk u lidh!");

if(isset($_POST['login_user'])){
    $email = mysqli_real_escape_string($db, $_POST['email']?? 'any default value, but probably null');
    $fjalekalimi = mysqli_real_escape_string($db, $_POST['fjalekalimi_1']?? 'any default value, but probably null');
    
    if(empty($email)){
        array_push($errors, "Kërkohet email!");
    }
     if(empty($fjalekalimi)){
        array_push($errors, "Kërkohet fjalëkalimi!");
    }
    if(count($errors) == 0)
    {
        $fjalekalimi = md5($fjalekalimi);
        
        $query = "SELECT * FROM perdoruesit WHERE email='$email' AND fjalekalimi='$fjalekalimi' ";
        $results = mysqli_query($db, $query);
        
        if(mysqli_num_rows($results)) {
            $_SESSION['email']= $email;
            header("location: account.php");
        }
        else {
            array_push($errors,"Keni dhënë kombinim të gabuar të email-it/fjalëkalimit! Ju lutemi, provoni prapë.");
        }
    }
    
}
