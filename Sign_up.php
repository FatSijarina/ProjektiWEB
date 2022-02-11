<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>  
    
   <div class="container-signup">
    <div class="signup-img" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(img/img6.jpg); background-repeat: no-repeat; background-size: cover; background-position: unset;">
           
    </div>
       <div class="signup-div1">
       <form id="signup-form"  action="<?= $_SERVER['PHP_SELF']?>" method="post">
           <h3 style="margin-bottom: 20px; color: rgb(69, 189, 45); text-align: center; font-weight: bold;">SIGN UP</h3>

           <label id="name-label" style="color: rgb(49, 170, 49); font-weight: bold;">Name:</label> <br> <br>
           <input type="text" placeholder="Name" id="name-input"> <br> 
           <label id="emri"></label> <br> <br>

           <label id="surname-label" style="color: rgb(49, 170, 49);font-weight: bold;">Surname: </label> <br> <br>
           <input type="text" placeholder="Surname" id="surname-input"> <br>
           <label id="mbiemri"></label> <br> <br>

           <label id="email-label"  style="color: rgb(49, 170, 49);font-weight: bold;">Email:</label> <br> <br>
           <input type="email" placeholder="Email" id="email-input">  <br> 
           <label id="emaili"></label> <br> <br>

           <label id="phone-label"  style="color: rgb(49, 170, 49);font-weight: bold;">Phone number</label> <br> <br>
           <input type="text" placeholder="Phone number" id="phone-input"> <br>
           <label id="phoneNr"></label> <br> <br>

           <label id="username-label"  style="color: rgb(49, 170, 49);font-weight: bold;">Username:</label> <br> <br>
           <input type="text" placeholder="Username" id="username-input">  <br> 
           <label id="username"></label> <br> <br>

           <label id="password-label"  style="color: rgb(49, 170, 49);font-weight: bold;">Password:</label> <br> <br>
           <input type="password" id="password-input" placeholder="Password"> <br> 
           <label id="pass"></label> <br> <br>

           <label id="passwordConfirm-label"  style="color: rgb(49, 170, 49);font-weight: bold;">Confirm password:</label> <br> <br>
           <input type="password" id="confirmPassword-input" placeholder="Confirm password"><br> 
           <label id="passConfirm"> </label> <br> <br>

           <input type="button" id="submit" name="signupInput" value="Submit" style="width: 160px;margin-left: 52px; color:rgb(49, 170, 49); font-weight: bold;">

       </form>  
   </div>
 
</div>
<script>
  
    var login = document.getElementById("submit");

    login.addEventListener("click",function(event) {
        // Name validation
        var nameValidation = /([A-Z][a-z]{2,9})/;
        var nameLabel = document.getElementById('emri');
        var name = document.getElementById("name-input").value;

        if(name == ""){
            nameLabel.innerHTML="Fill the name field";
            nameLabel.style.color = "red";
            event.preventDefault();
        }
        else{
            if(nameValidation.test(name) == true){

            }else{
                nameLabel.innerHTML="Please fill the name field correctly!";
                nameLabel.style.color="red";
                event.preventDefault();
            }
        }

        // Surname validation
        var surnameValidation = /^[A-Z][a-z]{2,20}/;
        var surnameLabel= document.getElementById('mbiemri');
        var surname = document.getElementById('surname-input').value;

        if(surname == ""){
            surnameLabel.innerHTML ="Fill the surname field!";
            surnameLabel.style.color = "red";
            event.preventDefault();
        }
        else{
            if(surnameValidation.test(surname) == true){

            }
            else{
                surnameLabel.innerHTML = "Please fill the surname field correctly!";
                surnameLabel.style.color = "red";
                event.preventDefault;
            }
        }

        // Email validation
        var emailValidation = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})/ ;
        var emailLabel = document.getElementById('emaili');
        var email = document.getElementById('email-input').value;

        if(email == ""){
            emailLabel.innerHTML = "Fill the email field!";
            emailLabel.style.color = "red";
            event.preventDefault;
        }
        else{
            if(emailValidation.test(email) == true){
                
            }
            else{
                emailLabel.innerHTML = "Please fill the email field correctly!";
                emailLabel.style.color="red";
                event.preventDefault;
            }
        }
        // Phone number validation
        var phoneNumberValidation = /^(0|[0-9][0-9]*)$/;
        var phoneLabel = document.getElementById('phoneNr');
        var phoneNumber = document.getElementById('phone-input').value;

        if(phoneNumber == ""){
            phoneLabel.innerText="Fill the phone number field!";
            phoneLabel.style.color="red";
            event.preventDefault;
        }
        else{

            if(phoneNumberValidation.test(phoneNumber) == true){
             
            }
            else{
                phoneLabel.innerHTML= "Please fill the field correctly!";
                phoneLabel.style.color="red";
                event.preventDefault;
            }
        }
        // Username validaton
        var usernameValidation = /^[A-Z][a-z]{2,20}/;
        var usernameLabel = document.getElementById('username');
        var username = document.getElementById('username-input').value;

        if(username == ""){
            usernameLabel.innerHTML = "Fill the username field!";
            usernameLabel.style.color="red";
            event.preventDefault;
        }
        else{
            if(usernameValidation.test(username) == true){

            }
            else{
            usernameLabel.innerHTML = "Fill the username field correctly!";
            usernameLabel.style.color="red";
            event.preventDefault;
            }
        }


        // Password validation
        var passwordValidation = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}/;
        var passwordLabel = document.getElementById('pass');
        var password = document.getElementById('password-input').value;

        if(password == ""){
            passwordLabel.innerHTML = "Fill the password field!";
            passwordLabel.style.color = "red";
            event.preventDefault;
        }
        else{
            if(passwordValidation.test(password) == true){

            }
            else{
                passwordLabel.innerHTML = "Password must be minimum eight characters,<br/> at least one number and one special character";
                passwordLabel.style.color = "red";
                event.preventDefault;
            }
        }

        // Confirm Password validation
        var confirmPasswordLabel = document.getElementById('passConfirm');
        var confirmPassword = document.getElementById('confirmPassword-input').value;

        if(confirmPassword == ""){
            confirmPasswordLabel.innerText = "Fill the confirm password field!";
            confirmPasswordLabel.style.color = "red";
            event.preventDefault;
        }
        
         else if(password != confirmPassword){
            confirmPasswordLabel.innerText = "Password doesn't match!";
            confirmPasswordLabel.style.color="red";
            event.preventDefault; 
         }
    })
</script>




</body>
</html>