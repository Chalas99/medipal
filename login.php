<?php
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; background-color: #DAFBFE;}
form {border:none;width: 50%;}

input[type=text], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: none;
  box-sizing: border-box;
}

.form-control{
  padding-left: 200px;
}
.login{
  font-size: 50px;
  padding-left: 200px;
  margin-bottom: 0px;

}
h4 {
  color: red;
  padding-left: 200px;
  margin-top: 10px;
}
button {
  background-color: #42C2FF;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  border-radius: 5px;
}

.login-button{
  padding-top: 20px;
}

button:hover {
  opacity: 0.8;
}

.flexContainer {
  display: flex;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  flex: 50%;
  padding: 10px;
}

a{
  color: #309acb;
}

a:link {
  text-decoration: none;
  float: left;
  padding-top: 16px;
  font-family: poppins;
}
.blue{
  color: #42C2FF;
  font-family: poppins;
  float: left;
}

.separator{
  width: 80%;
  margin-top: 30px;
  display: flex;
  align-items: center;
}

.separator h2{
  padding: 0 2rem; /* creates the space */
}

.separator .line{
  flex: 1;
  height: 1px;
  background-color: rgb(75, 75, 75);
}

.separator p{
  padding-left: 20px;
  padding-right: 20px;
}

</style>
</head>
<body>

  <div class="flexContainer">
      
        <div class="container">

          <h1 class="login">Login</h1>
          <h4>doesn't have an acount yet ??</h4><br>

          <form class="form-control" action="" method="post">
          <label for="email"><b>Email</b></label><br>
          <input type="text" placeholder="Enter Email" name="email" required><br>

          <label for="psw"><b>Password</b></label><br>
          <input type="password" placeholder="Enter Password" name="psw" required><br>
              
          <input type="checkbox" checked="checked" name="remember"> Remember me
          </label><br>

          <div class="login-button">
            <button type="submit">LOGIN</button><br>
          </div>
          
          <a href="#">Forgot password?</a><br>

          <div class="separator">
            <div class="line"></div>
            <p>or login with</p>
            <div class="line"></div>
          </div>
          
          </form>
        </div>
    
      <div class="container">
        <img src="./images/2.png" >
      </div>
    </div>
    
</body>
</html>