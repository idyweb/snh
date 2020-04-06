<?php include_once("lib/header.php");
//if(isset($_SESSION["loggedIn"]) && !empty($_SESSION["loggedIn"])){
    //redirect to dashboard
    //header("Location: dashboard.php");
//}

//include_once("lib/header.php") ?>
  <h3>Login</h3>
    <p>
    <?php
         if(isset($_SESSION['error'])&& !empty($_SESSION['error'])){
            echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
    
            session_destroy();
        }

    ?>
    
    </p>
    <form method="POST" action="processlogin.php">
   
    <p>
        <label>Email</label><br/>
        <input 
        
        <?php
        if(isset($_SESSION['email'])){
            echo "value=" . $_SESSION['email'];
        }
        ?>
        type="text" name="email" placeholder="Enter a valid email"
        
       

    </p>

        <p>
        <label>Password</label><br/>
        <input type="password" name="password" placeholder="password"/>


        </p>

        <p>
            <button type="submit">Login</button>
        </p>

    </form>

<?php include_once("lib/footer.php")?>