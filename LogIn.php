<!-- <?php 
include_once '../controller/loginController.php';
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container3">
           
        
           <div class="login-inputs">
               <form class="form-login" action="<?= $_SERVER['PHP_SELF']?>" method="post">

               <h3 style="text-align: center; color: #316B83;">LOG IN</h3>
               <img src="img/memberlogin.jpg" width="70" height="70" style="margin-left: 111px;" ><br>
               <label for="username">USERNAME:</label> <br> <br>
               <input type="text" placeholder="Username" name="username" id="username2"> <br> <br> <br>
               <label for="password">PASSWORD:</label> <br> <br>
               <input type="password" placeholder="Password" name="password" id="password2"> <br> <br>
               <input type="checkbox" onclick="myFunction()"> Show Password <br> <br>
               <input type="submit" value="Log in" name="login" class="loginInput"> <br> <br>
               <input type="checkbox"> <b style="color: #316B83;">Remember me</b>
               <a href="#" style="text-decoration: none; color: rgb(114, 113, 113); padding-left: 59px;">Forgot password?</a>
            </form>
           </div>

        <div class="signUp" style="background-image: linear-gradient(to right, #39758f , rgb(2, 48, 48));">
            <form class="signup-form">
            <h2 >Don't have an account?</h2> <br>
            <h3>Welcome to sign up</h3> <br>
           <div> <a href="Sign_up.php">Sign up</a> </div>
        </form>
        </div>



</div>
<!-- PASSWORD -->
    <script>
        function myFunction() {
        var x = document.getElementById("password2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
}
    </script>


    
</body>
</html>