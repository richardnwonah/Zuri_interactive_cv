
<?php

    require "includes/connection.inc.php";

    if(isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        
    $sql = "INSERT INTO contact(name, email, message) VALUES ('$name', '$email', '$message')";

    $conn->query($sql);

        echo "<div id='messageBox'>Message submission successfull</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Richard Nwonah Cv</title>
</head>
<body>

    <div id="header">
    <h1>Richard Nwonah</h1>
    <h4>Address: 9 Chief Opogah Street, off Isheri Lagos state, Nigeria. </h4>
    <h4>E-mail: nwonahr@gmail.com</h4>
</div>
  

<div id="main">
 <div class="float-container">

  <div class="float-child">
<center>
   <h3>Professional Summary</h3>
   <p>I am a php Laravel and c# dotNet backend developer with a very high interest for technology<./p>
   </div>
  
  <div class="float-child">

   <h3>Work history</h3>
   <p>Web developer -Erbaver</p>
   <p>Duration: Three years</p>

   
   <p>Web developer -Ovid inquires</p>
   <p>Duration: one year</p>

   <p>Dotnet Vvm</p>
    <p>Duration: One year</p>
    <p>Task: Ambassador</p>
</center>

</div>
</div>
   </div>
<center>
   <div id="form">
       <h2 id="formText">Contact Form</h2>
   <form action="" method="post"><br><br>
    <input name="name" placeholder="Company/Individual Name" type="text" required/><br><br>
    <input name="email"  placeholder="E-mail" type="text" email/><br><br>
    <textarea  placeholder="Messages" name="message" required></textarea><br><br>
    <input name="submit" value="submit" type="submit"/>
   </form>
</center>
</div>
</body>
</html>
