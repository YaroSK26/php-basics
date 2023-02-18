  <?php
  function Connection(){
    global $connection;
      $connection = mysqli_connect("localhost","root","","loginapplication");
      if($connection){
        echo "ez databaza prepojena ";
        echo "<br>";
      }else {
        die(" rip databaza");
        echo "<br>";
      }
  }



  function UpdateFun(){
 global $connection;
      $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];


        //sql injection
  $username = mysqli_real_escape_string($connection , $username);
  $password = mysqli_real_escape_string($connection , $password);
        
        $query2 = "UPDATE users SET username='$username', password='$password' WHERE id = $id ";
        
        $resultUPD = mysqli_query($connection,$query2);
        
        if(!$resultUPD){
            die("Query selhalo".mysqli_error());
    }
      }


      function deleteFun(){
 global $connection;
        $id = $_POST["id"];

        //sql injection
$id = mysqli_real_escape_string($connection , $id);
        
        $query2 = "DELETE FROM users WHERE id = $id";
        
        $resultUPD = mysqli_query($connection,$query2);
        
        if(!$resultUPD){
            die("Query selhalo".mysqli_error());
    }
      }




      function AddFun()
  {global $connection;
  $username = $_POST["username"];
  $password = $_POST["password"];

//sql injection
$username = mysqli_real_escape_string($connection , $username);
$password = mysqli_real_escape_string($connection , $password);
//hashovanie hesla
 $hashFormat = "$2y$10$";
 $salt = "blaznivafunkcenahesla9";
 $hashFormat_salt = $hashFormat.$salt;
 $password = crypt($password, $hashFormat.$salt );



  $query = "INSERT INTO users(username,password) VALUES('$username', '$password')";
  
  $result = mysqli_query($connection,$query);
  if(!$result){
    die("nepodarilo sa zapisat".mysqli_error());
  }
  
}


function SelectFun(){
  global $connection;
  global $resultREAD;
  $query= "SELECT * FROM users";
  $resultREAD =  mysqli_query($connection,$query);

  if(!$resultREAD){
    die("nepodarilo sa vybrat data");
  }
}

    
  ?>