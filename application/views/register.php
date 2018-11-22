<html>
<head>
<?php include("layouts/headers.html"); ?>
<title>Register</title>
<!-- <script type = "text/javascript" src = "<?php echo base_url();?>js/main.js"></script>
<script></script> -->
</head>

<body>
<form id="regform" method="POST"> 
        <h2>Registration Form</h2>
        <div class="container">

            <label for="fname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="fname" required>

            <label for="lname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lname" required>

            <label for="userid"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="userid" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <label for="rpassword"><b>Reapeat Password</b></label>
            <input type="password" placeholder="Enter Password Again" name="rpassword" required>


            <button id="register" >Register</button>
            
        </div>
        

    </form>
</body>

</html>