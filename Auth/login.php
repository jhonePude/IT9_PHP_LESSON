<?php
    session_start();
    $session_id = session_id();

    if(isset($_SESSION['username'])){
        header("Location: welcome.php");
        exit();
    };

    $users = [
        "admin" => "1234",
        "michael" => "pass123",
        "student1" => "abc123",
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        //check if username exists and pass matches
        if(isset($users[$username]) &&  $users[$username] ==  $password){
           
            $_SESSION['username'] = $username;

            header("Location: welcome.php");
            

        }else{
            $error = "invalid username or password";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginpage</title>
</head>
<body>
    <h2>Login</h2>

    <form method="POST">
        Username: <input type="text" name = "username" required> <br> <br>
        Password: <input type="text" name = "password" required> <br> <br>
        <button type = "submit">Login</button>

    </form>

    <script>
        let phpSessionId = "<?php echo $session_id; ?>";
        sessionStorage.setItem("PHP_SESSIONN_ID", phpSessionId);
    </script>
</body>
</html>