<?php
    require_once(__DIR__ . "/../config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/creat-user.php"; ?>
    <div>
      <label for="email">Email: </label>
      <input type="text" name="email"/> 
    </div>
    
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    
    <div>
        <label for="password">Password: </label>
        <input typee="passwords" name="passwords" />
    </div>
        
    <div>
        <buttion type="submit">Submit</buttion>
    </div> 
</form>
