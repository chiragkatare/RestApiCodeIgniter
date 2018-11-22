<!DOCTYPE html>
<html>
<head>
<?php include("layouts/headers.html") ?>
<title>Login</title>
</head>
<body>
    <form id="reg"action="/action_page.php">
        <h2>Login Form</h2>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="userid" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button id="login" type="submit" >Login</button>
            
        </div>
        
    </form>

<div>OR<button class = "button button2"type="button" onclick="location.href='<?php echo base_url(); ?>users/register'">Register</button>
</div>
</body>

</html>