  
          <!------include files---->
            <?php
               session_start();
               $title = 'Admin Login';
               include'include/links.php';  
               include'include/db_configure.php';
               ?>
                
               


        <!------------------admin Login For-------------------------------->
         <div class="bg-info">
         <div class="container col-md-5 mt-5">
            <div class="row"> 
              <div class="col-md-12">
                <!------------------admin Login Form-------------------------------->
               <?php
               $msg= "";
               if (isset($_POST['Login'])) {
               $first_name    = mysqli_real_escape_string($connect, $_POST['fname']);
               $password = mysqli_real_escape_string($connect, $_POST['password']);
                if(empty($first_name)){
                 echo "<div class='alert alert-danger text-center'>All Fields Requierd</div>";

               }elseif (empty($password)) {
                echo "<div class='alert alert-danger text-center'>All Fields Requierd</div>";

               }else{
               
               $sql = "SELECT * FROM admin WHERE first_name ='$first_name' AND '$password'";
               $query = mysqli_query($connect, $sql);

                 while ($row = mysqli_fetch_assoc($query)) {   
                 
               $db_first_name    = $row['first_name'];
               $db_password = $row['password'];
               $image = $row['image'];

               if ( $db_first_name == $first_name   && $db_password == $password) {
                header("Location:dashboard.php"); 
                
                 }else{
                  echo $msg="<div class='alert alert-danger text-center'>Wrong Username and Password";
                 }

                $_SESSION['first_name']= $db_first_name;
                $_SESSION['image']= $image;
               
                }
               }
              }
            ?>
                  <div class="card">
                  <div class="card-header text-center bg-info shadow-lg">
                    <i class="fas fa-lock fa-4x shadow-lg" style="color: #0A2558;"></i><br>
                    <span style="font-family:Felix Titling; font-size:20px;
                    font-weight: bold; color:#0A2558">Admin Login</span>
                  </div>
                  <div class="card-body">
                    <form action="" method="POST">

                  <div class="form-group">
                    <label for="first_name">UserNmae</label>
                    <input type="text" name="fname" class="form-control" value="" placeholder="User_Name">
                 </div>

                  <div class="form-group">
                    <label for="password" class="shadow-md">Password</label>
                    <input type="password" name="password" class="form-control" value="" placeholder="1234" >
                 </div>

                 <div class="form-group mt-2">
                   <button class="btn btn-outline-info btn-md" name="Login">Submit</button>
                 </div>

                 </form>

                  </div>
                   <a href="registration.php" style="text-decoration:none" class="shadow-lg">I Don't Have An Account</a>
                </div>

              </div>
            </div>
          </div>
        </div>