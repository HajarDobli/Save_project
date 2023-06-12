<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('./img/img3.jpg');
            background-size: cover;
            background-position: center;
        }
        .container{
            position: relative;
            /*top: 40px;
            width: 400px;
            height: 440px;*/
            background: transparent;
            border: 2px solid rgba(255,255,255,.5);
            border-radius: 20px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0,0,0,.5);
            /*display: flex;
            justify-content: center;
            align-items: center;*/
            overflow: hidden;
            
            transition: transform .5s ease , height  .2s ease;
            z-index:99; 
            
        }
        h2{
            
            margin-left:40%;
            margin-bottom:40px;
            user-select: none;
            
        }
        .btn-primary{
            width: 100%;
            height: 45px;
            background: #192126;
            border: none;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1em;
            color: white;
            font-weight: 500 ;
            margin-bottom:35px
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "../connexion.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if ($password==$user["password"]) {
                   
                    if($email=='adminKNH@gmail.com')
                    {
                        session_start();
                        $_SESSION['monlogin'] = $email;
                        header("Location: ../../Administrateur/admin.php");
                        die();
                    }
                    else
                    {
                        session_start();
                        $_SESSION['monlogin'] = $email;
                        header("Location: ../user.php");
                        die(); 
                    }
                    
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <h2>Login</h2>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Enter Email:" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class=" btn-primary">
        </div>
      </form>
     <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
     <div><p>Go to home <a href="../index.php">Click Here</a></p></div>
    </div>
</body>
</html>