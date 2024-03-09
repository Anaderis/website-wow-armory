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

    $emaillogin = $_POST["email"];
    $passwordlogin = $_POST["password"];

    $errors = array();

    if(empty($emaillogin) OR empty($passwordlogin)){
        array_push($errors, "All fields are required");
    }
    if(isset($_POST['email']) && isset($_POST['password'])){

        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
    $emaillogin = validate($_POST['email']);
    $passwordlogin = validate($_POST['password']);
    

    //------------------------------------  
    //  _____ _               _      _____                    
    // /  __ \ |             | |    |  ___|                   
    // | /  \/ |__   ___  ___| | __ | |__ _ __ _ __ ___  _ __ 
    // | |   | '_ \ / _ \/ __| |/ / |  __| '__| '__/ _ \| '__|
    // | \__/\ | | |  __/ (__|   <  | |__| |  | | | (_) | |   
    //  \____/_| |_|\___|\___|_|\_\ \____/_|  |_|  \___/|_|   
    //------------------------------------                                                  
    


    //------------------------------------
    // ____________   _____ _               _    
    // |  _  \ ___ \ /  __ \ |             | |   
    // | | | | |_/ / | /  \/ |__   ___  ___| | __
    // | | | | ___ \ | |   | '_ \ / _ \/ __| |/ /
    // | |/ /| |_/ / | \__/\ | | |  __/ (__|   < 
    // |___/ \____/   \____/_| |_|\___|\___|_|\_\
    //------------------------------------
    if(count($errors)>0){
        foreach($errors as $error){
            echo"<div class='alert alert-danger'>$error</div>";
        }
    }else{
        require_once "DB_Conn.php";


        // Check si l'email existe déjà dans la base de données
        $sqlCheckemail = "SELECT J_ADR FROM t_joueur WHERE J_ADR = '$emaillogin' ";
        $resultemail = $conn->query($sqlCheckemail);

        // Check si le MDp existe déjà dans la base de données
        $sqlCheckpassword = "SELECT J_MDP FROM t_joueur WHERE J_MDP = '$passwordlogin' ";
        $resultpassword = $conn->query($sqlCheckpassword);

        if ($resultemail->num_rows > 0 OR $resultpassword->num_rows > 0) {
            echo "Email '$emaillogin' doesn't exist or your password doesn't exist.";
        }
        $sql = "SELECT * FROM t_joueur WHERE J_ADR = '$emaillogin' AND J_MDP='$passwordlogin'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['J_ADR']===$emaillogin && $row['J_MDP'] === $passwordlogin){
                // ------------------------------------
                //  _____      _     _____ _____ _____ _____ _____ _____ _   _ 
                // /  ___|    | |   /  ___|  ___/  ___/  ___|_   _|  _  | \ | |
                // \ `--.  ___| |_  \ `--.| |__ \ `--.\ `--.  | | | | | |  \| |
                //  `--. \/ _ \ __|  `--. \  __| `--. \`--. \ | | | | | | . ` |
                // /\__/ /  __/ |_  /\__/ / |___/\__/ /\__/ /_| |_\ \_/ / |\  |
                // \____/ \___|\__| \____/\____/\____/\____/ \___/ \___/\_| \_/
                //------------------------------------
                $_SESSION['J_ADR'] = $row['J_ADR'];
                $_SESSION['J_Id'] = $row['J_Id'];
                header("Location: ./wow-armory.html");
                exit();
                //------------------------------------
            } else {
                echo "marche pas";
                array_push($errors, "Email or Password incorrect.");
            }
            
        }   
        else
        {
            array_push($errors, "Email or Password incorrect.");
        }
    }
}

?>
