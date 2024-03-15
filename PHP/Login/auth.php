<?php
    session_start();
    
    //------------------------------------ 
    //  _____ _               _    
    // /  __ \ |             | |   
    // | /  \/ |__   ___  ___| | __
    // | |   | '_ \ / _ \/ __| |/ /
    // | \__/\ | | |  __/ (__|   < 
    //  \____/_| |_|\___|\___|_|\_\
    //------------------------------------  

if(isset($_POST["submit"])){

    // require_once("adduser.php");

    $Userlogin = $_POST["User"];
    $passwordlogin = $_POST["password"];
    

    $errors = array();

    if(empty($Userlogin) OR empty($passwordlogin)){
        array_push($errors, "All fields are required");
    }
    if(isset($_POST['User']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    $Userlogin = validate($_POST['User']);
    $passwordlogin = validate($_POST['password']);

    //------------------------------------
    // ____________   _____ _               _    
    // |  _  \ ___ \ /  __ \ |             | |   
    // | | | | |_/ / | /  \/ |__   ___  ___| | __
    // | | | | ___ \ | |   | '_ \ / _ \/ __| |/ /
    // | |/ /| |_/ / | \__/\ | | |  __/ (__|   < 
    // |___/ \____/   \____/_| |_|\___|\___|_|\_\
    //------------------------------------
    
    if(count($errors)===0){

        require_once "DB_Conn.php";

        $sql = "SELECT * FROM t_joueur
                WHERE J_User = '$Userlogin' AND J_MDP='$passwordlogin'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result); 
            if($row['J_User']===$Userlogin && $row['J_MDP'] === $passwordlogin){

                $_SESSION['Photo'] = $row['J_photo'];
                $_SESSION['User'] = $row['J_User'];
                $_SESSION['Id'] = $row['J_Id'];
                $_SESSION['Loggedin'] = $_SESSION['User'];
                header("Location: ./wow-armory.php");

                exit();
            } 
        }else {
            array_push($errors, "UserName or Password doesn't exist.");
        }
    }
    if(count($errors)>0){
        foreach($errors as $error){
            echo"<div class='alert alert-danger'>$error</div>";
        }
    }
}

?>
