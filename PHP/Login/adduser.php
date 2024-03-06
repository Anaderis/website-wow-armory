<?php

//------------------------------------
//  _____ _               _    
// /  __ \ |             | |   
// | /  \/ |__   ___  ___| | __
// | |   | '_ \ / _ \/ __| |/ /
// | \__/\ | | |  __/ (__|   < 
//  \____/_| |_|\___|\___|_|\_\
//------------------------------------  
                        
if(isset($_POST["submit-register"])){
    $emailregister = $_POST["email-register"];
    $prenomregister = $_POST["prenom-register"];
    $nomregister = $_POST["nom-register"];
    $passwordregister = $_POST["password-register"];
    $passwordrepeatregister = $_POST["password-check-register"];

    $passwordHash = password_hash($passwordregister, PASSWORD_DEFAULT);

    $errors = array();

    if(empty($emailregister) OR empty($prenomregister) OR empty($nomregister) OR empty($passwordregister) OR empty($passwordrepeatregister)){
        array_push($errors, "All fields are required");
    }
    if(!filter_var($emailregister, FILTER_VALIDATE_EMAIL)){
        array_push($errors, "Email is not valid");
    }
    if(strlen($passwordregister)<8){
        array_push($errors, "Password must be at least 8 characters long"); 
    }
    if($passwordregister != $passwordrepeatregister){
        array_push($errors, "Password does not match"); 
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo"<div class='alert alert-danger'>$error</div>";
        }
    }else{
        require_once "DB_Conn.php";
        
        // Fonction pour génèrer un random ID 
        function generateRandomId() {
            return rand(1, 999999);
        }

        // Génère un random ID
        $randomId = generateRandomId();

        // Check si l'ID existe déjà dans la base de données
        $sqlCheck = "SELECT J_Id FROM t_joueur WHERE J_id = '$randomId'";
        $result = $conn->query($sqlCheck);

        if ($result->num_rows > 0) {
            // Si l'Id existe déjà, génère une nouvelle
            $randomId = generateRandomId();
        }


        function sanitizeEmail($emailregister) {
            return filter_var($emailregister, FILTER_SANITIZE_EMAIL);
        }
        // Filtre and valide l'email
        $sanitizedEmail = sanitizeEmail($emailregister);
        
        // Check si l'email existe déjà dans la base de données
        $sqlCheck = "SELECT J_ADR FROM t_joueur WHERE J_ADR = '$sanitizedEmail'";
        $result = $conn->query($sqlCheck);
        
        if ($result->num_rows > 0) {
            echo "Email '$sanitizedEmail' already exists.";
        } else {
            $sql = "INSERT INTO t_joueur (J_Id, J_ADR, J_MDP, J_Nom, J_PRE) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            $preparestmt = mysqli_stmt_prepare($stmt, $sql);
            if($preparestmt){
                mysqli_stmt_bind_param($stmt, "sssss", $randomId, $emailregister, $passwordregister ,$nomregister , $prenomregister);
                mysqli_stmt_execute($stmt);
            }else{
                array_push($errors, "Something went wrong"); 
            }
        }
        // Ferme la base de données
        $conn->close();
    }
}
?>
    
