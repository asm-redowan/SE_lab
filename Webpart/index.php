

<?php include('dbconn.php'); ?> 
<?php
    $message = "";
    session_start(); 
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $password = $_POST['password'];
        $query = mysqli_query($conn,"SELECT * FROM police where id= '$id' and password = '$password'");
        $row = mysqli_fetch_array($query);
        $user_id = $row['id'];

        if ($query->num_rows > 0){
      
            $_SESSION['id']=$user_id;
            header("Location:waiting.php");
            
          }else{ 
            $message = "login failed";
          }	
  
    }

?>
<html>
<style>

.center {
text-align: center;
color: red;
}
    *{margin: 0; padding: 0;}
    body{background: #ecf1f4; font-family: sans-serif;}
    
    .form-wrap{ width: 320px; background: #3e3d3d; padding: 40px 20px; box-sizing: border-box; position: fixed; left: 50%; top: 50%; transform: translate(-50%, -50%);}
    h1{text-align: center; color: #fff; font-weight: normal; margin-bottom: 20px;}
    
    input{width: 100%; background: none; border: 1px solid #fff; border-radius: 3px; padding: 6px 15px; box-sizing: border-box; margin-bottom: 20px; font-size: 16px; color: #fff;}
    
    input[type="button"]{ background: #bac675; border: 0; cursor: pointer; color: #3e3d3d;}
    input[type="button"]:hover{ background: #a4b15c; transition: .6s;}
    
    ::placeholder{color: #fff;}

</style>

<body>

    <div class="form-wrap">
    
        <form action="" method="POST">
        
            <h1>Sign In</h1>
            <center><font color="red"><h4><?php echo $message; ?></h4></font></center>
            <br>
            <input type="number" placeholder="id"  name="id">
            <input type="password" placeholder="password"  name="password">
           <a href='l.php?'>
            <input type="submit" name="submit" placeholder=submit value="Next"/>
           </a>
        </form>
    
    </div>



</body>



</html>
