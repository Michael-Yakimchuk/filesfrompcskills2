

<?php
    // Create Connection
    $con = mysqli_connect('10.0.0.20','competitor2','4sD7XP','competitor2');
    
    // Check Connecion
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Define Inputs
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Question = $_POST['question'];
  
              // Define Query
        $sql = "INSERT INTO questions (Name,Email,Question) VALUES ('$Name','$Email','$Question')"; 
    
        // Insert Into DB
        if ($Name == "" || $Email == "" || $Question == ""){
          echo "<p> Please fill the form fully.</p><br><a href='../contact.php'>Return</a>";
        } else{
          if(mysqli_query($con, $sql)){
            echo "<p>Question was submitted successfully! click <a href='../contact.php'>here</a> to return";
          }else{
            echo "<p>Failed to add product</p>";
          }
        }
?>
