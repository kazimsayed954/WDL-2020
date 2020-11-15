<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
   
    <title>Register</title>
</head>
<body>
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <form action="register.php" method="post">
    <div class="form">
       <div class="inputfield">
          <label>Full Name</label>
          <input type="text" class="input" name="fName">
       </div>   
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="Mob">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
       </div>
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" id="pswrd_1" name="pass">
          <span class="show-btn"><i class="fas fa-eye"></i></span> 
       </div>
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input">
       </div>  
      <div class="inputfield">
        <input type="submit" value="Register" class="btn" name= "btnSubmit" >
      </div>
    </div>
    </form>
</div>
<script>
const passField = document.querySelector("#pswrd_1");
    const showBtn = document.querySelector("span i");
    showBtn.onclick = (() => {
      if (passField.type === "password") {
        passField.type = "text";
        showBtn.classList.add("hide-btn");
      } else {
        passField.type = "password";
        showBtn.classList.remove("hide-btn");
      }
    });    
</script>
</body>
</html>