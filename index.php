<?php
include('include/header.php');
?>
   <form action="process/process_user_login.php" class="login-form" method="post">
        <h1>Login</h1>

        <div class="txtb">
          <input name="u_name" type="text" required>
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
          <input name="u_password" type="password" required>
          <span data-placeholder="Password"></span>
        </div>
 
        <input type="submit" class="logbtn" value="Login">

        <div class="bottom-text">
          Don't have account? <a href="#">Sign up</a>
        </div>

      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


<?php
include('include/footer.php');
?>
