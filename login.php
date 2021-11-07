<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style_login.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
   
    <body>

<h1>LOGIN PERPUSTAKAAN</h1>
        <div class="container">
            <center><img src="images/logo.png"></center>
          <h2>Welcome Admin</h2>
            <form method="post" action="cek_login.php">
                <div class="i">
                <i class="fas fa-user"></i> 
                <label>Username</label><br>
                <input type="text" name="user"><br>
            
                <i class="fas fa-lock"></i>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
            </div>

                <button type="submit"  name="submit">Log in</button>				
            </form>
        </div>     
    </body>
</html>

