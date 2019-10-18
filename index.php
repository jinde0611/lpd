<?php
include('include/header.php');
?>
<style>
    @import url('https://fonts.googleapis.com/css?family=Nunito+Sans');

    .flex {
    display: flex;
    justify-content: center;
  }

  .vldform {
      box-sizing: border-box;
      width: 375px;
      display: flex;
      flex-direction: column;
      padding: 35px 55px;
      font-family: "Nunito Sans";
      animation: a .5s;
      animation-fill-mode: forwards;
      border: #009688 1px solid;
      border-radius: 10px;
      box-shadow: 0 2px 6px 0 hsla(0, 0%, 0%, 0.2);
  }

  .vldform a {
      text-decoration: none;
  }

  .vldform h1 {
      font-size: 40px;
      color: #009688;
      margin: 0px 0px 26px 0px;
  }

  .vldform__textbox {
      border: 0;
      outline: 0;
      border-bottom: 2px #009688 solid;
      font-size: 18px;
      margin-top: 36px;
      padding-bottom: 9px;
      font-family: "Nunito Sans";
  }

  .vldform__textbox[type="password"]::after {
      content: " ";
      display: block;
      width: 10px;
      height: 10px;
      background-color: rebeccapurple;
      
  }

  .vldform__recoverypassword{
      align-self: flex-end;
      margin: 10px 0px;
      font-size: 16px;
      color: #009688;
  }

  .vldform__button {
      margin-top: 42px;
      height: 50px;
      border: 0;
      color: #fff;
      border-radius: 10px;
      background-image: linear-gradient(#009688, #008080);
      font-size: 22px;
      font-weight: 600;
      font-family: "Nunito Sans";
      cursor: pointer;
  }

  .vldform__signup {
      align-self: center;
      margin-top: 50px;
      margin-bottom: 0px;
  }

  .vldform__signup a {
      color: #009688;
      font-weight: 600;
      margin-left: 4px;
  }

  .vldreg {
      display: none;
  }

  .vldrecpass {
      display: none;
  }

  @keyframes a {
      0% {
          opacity: 0;
          transform: translateY(-5px)
      }

      to {
          opacity: 1;
          transform: translateY(5px)
      }
  }

  @media (max-width: 400px) {
      .vldform {
          width: 350px;
          padding: 20px 40px;
      }
      
  }

  @media (max-width: 360px) {
      .vldform {
          width: 305px;
          padding: 20px 35px;
      }

      .vldform__signup {
          text-align: center;
      }

      .vldform__signup a {
          margin-left: 14px;
      }
  }
</style>
<script>

function checkPassword(form) 
{ 
  password1 = form.password1.value; 
  password2 = form.password2.value; 

  // If password not entered 
  if (password1 == '') 
      alert ("Please enter Password"); 
        
  // If confirm password not entered 
  else if (password2 == '') 
      alert ("Please enter confirm password"); 
        
  // If Not same return False.     
  else if (password1 != password2) { 
      alert ("\nPassword did not match: Please try again...") 
      return false; 
  } 

  // If same return True. 
  else{ 
      alert("Signup Successful: Please login now") 
      return true; 
  } 
} 

  function showregform(){
    document.title = "Sign up";
    document.querySelector(".vldauth").style.display = "none";
    document.querySelector(".vldreg").style.display = "flex";
}

function showauthform(){
    document.title = "Log in";
    document.querySelector(".vldauth").style.display = "flex";
    document.querySelector(".vldreg").style.display = "none";
    document.querySelector(".vldrecpass").style.display = "none";
}

function showrecoveryform(){
    document.title = "Password recovery";
    document.querySelector(".vldauth").style.display = "none";
    document.querySelector(".vldrecpass").style.display = "flex";
}
</script>
<div class="flex pt-4">
  <form class="vldform vldauth" action="process/process_user_login.php" method="POST">
    <h1>Log in</h1>
    <input class="vldform__textbox" type="text" name="u_name" placeholder="Email Id" required>
    <input class="vldform__textbox" type="password" name="u_password" id="" placeholder="Password" required>
    <a class="vldform__recoverypassword" href="#" onclick="showrecoveryform()">Forgot password?</a>
    <input class="vldform__button" type="submit" value="Log in">
    <p class="vldform__signup">Don't have account?
      <a class="vldform__signuplink" href="#" onclick="showregform()">Sign up</a>
    </p>
  </form>
  <form class="vldform vldreg" action="process/process_signup.php" method="POST" onSubmit = "return checkPassword(this)">
      <h1>Sign up</h1>
      <input class="vldform__textbox" type="text" name="name" placeholder="Full name" required>
      <input class="vldform__textbox" type="text" name="username" placeholder="Username" required>
      <input class="vldform__textbox" type="email" name="email" id="" placeholder="Email" required>
      <input class="vldform__textbox" type="password" name="password1" id="" placeholder="Password" required>
      <input class="vldform__textbox" type="password" name="password2" id="" placeholder="Password again" required>
      <input class="vldform__button" type="submit" value="Sign up">
      <p class="vldform__signup">You already have account?
        <a href="#" onclick="showauthform()">Log in</a>
      </p>
  </form>

  <form class="vldform vldrecpass" action="recovery.php" method="POST">
    <h1>Password recovery</h1>
    <input class="vldform__textbox" type="email" name="email" id="" placeholder="Email" required>
    <input class="vldform__button" type="submit" value="Recovery">
  </form>
</div>
<?php
include('include/footer.php');
?>