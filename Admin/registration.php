  
            <!------include files---->
              <?php
                   $title = 'Admin Registration';
                   include'include/links.php'; 
                   include'include/db_configure.php';
                   include'include/inc.php';
               ?>
              
            
         <div class="bg-info">
          <div class="container col-md-5 mt-5">
            <div class="row">
              <div class="col-md-12">

                 <?php 
               $msg= "";

              if (isset($_POST['Register'])) {

                $first_name       = mysqli_real_escape_string($connect, $_POST['first_name']);
                $surname          = mysqli_real_escape_string($connect, $_POST['surname']);
                $email            = mysqli_real_escape_string($connect, $_POST['email']);

                //image upload 
                $filename          = $_FILES["image"]["name"];
                $tempname          = $_FILES["image"]["tmp_name"];    
                $folder            = "include/images/".$filename;

                $password         = mysqli_real_escape_string($connect, $_POST['password']);
                $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);


                $imageFileType = strtolower(pathinfo($folder,PATHINFO_EXTENSION));

                 // Valid image file extensions
                 $extensions_arr = array("jpg","jpeg","png","gif");

                  // Check extension
                 if( in_array($imageFileType,$extensions_arr)){
                
                 //first_name Validation
                 }elseif(empty($first_name)){
                   echo "<div class='alert alert-danger text-center'>Your First_Name cannot be empty</div>";
                 }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
                 echo "<div class='alert alert-danger text-center'>Name Must Not Have Special Characters</div>";
                 
                  //surname Validation
                  }elseif(empty($surname)){
                   echo "<div class='alert alert-danger text-center'>Your surname is required </div>";
                  }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$surname)) {
                  echo "<div class='alert alert-danger text-center'>Name Must Not Have Special Characters</div>"; 
                 
                   //email Validation
                   }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && empty($email)){
                   echo "<div class='alert alert-danger text-center'>Wrong Email Format</div>";

                   //Password Validation
                   }elseif ($password < 6 && empty($password)) {
                   echo $mgs = "<div class='alert alert-danger text-center'>Password Most Be Less Than Six Characters.</div>";

                   }elseif ($confirm_password!=$password < 6 && empty($confirm_password))  {
                   echo  $mgs = "<div class='alert alert-danger text-center'>Confirm_Password Most Be The  With the Password.</div>";
                   }else{

                   $sql = "INSERT INTO admin (first_name,surname,email,image,password,confirm_password) VALUES('$first_name','$surname','$email','$filename','$password','$confirm_password')";
                   $query = mysqli_query($connect, $sql);

                    move_uploaded_file($tempname, $folder);

                   echo $mgs = "<div class='alert alert-success text-center'>Your Account Was Created Successfully.</div>";
                
                  } 
                }
          
               
              ?>

                  <div class="card">
                  <div class="card-header text-center bg-info shadow-lg">
                    <i class="fas fa-user fa-4x shadow-lg" style="color:  #0A2558;"></i><br>
                    <span style="font-family:Felix Titling; font-size:20px;
                    font-weight: bold; color:#0A2558">Admin Registration</span>
                  </div>

                  <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                       <label for="User_Name">First Name</label>
                       <input type="text" name="first_name" class="form-control" value="" placeholder="First_Name">
                     </div>

                     <div class="form-group">
                        <label for="Surname">Surname</label>
                        <input type="text" name="surname" class="form-control" value="" placeholder="Surname" >
                     </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="" placeholder="--@gmail.com">
                     </div>  

                      <div class = "form-group">
                        <label for="image" >Upload Image</label>
                        <input type="file" class = "form-control" name ="image" >
                      </div>

                       <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" value=""  placeholder="123..."  >
                     </div>

                      <div class="form-group">
                        <label for="confirm_password">Confirm_Password</label>
                        <input type="password" name="confirm_password" class="form-control" value="" placeholder="123.."  >
                     </div>

                     <div class="form-group mt-2">
                       <button class="btn btn-outline-info btn-md" name="Register">Register</button>
                     </div>
                     </form>          
                    </div>
                    <a href="index.php" style="text-decoration:none" class="shadow-lg">I Already Have An Account</a>
                  </div>
                </div>
               </div> 
              </div> 
            </div>