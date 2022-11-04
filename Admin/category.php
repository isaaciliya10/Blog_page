   
            <!------include files---->
                <?php
                    $title = 'Category';
                    include'include/links.php';
                    include'include/side_nav.php';
                    include'include/db_configure.php';
                    $msg="";

                   if (isset($_POST['submit'])) {
                    $category = mysqli_real_escape_string($connect, $_POST['category']);
                    date_default_timezone_set('Africa/Lagos');
                    $date_time = strftime("%B-%d-%Y %H:%M:%S");
                    $author = 'Admin';

                    if (empty($category)) {
                         
                     echo  $mgs = "<div class='alert alert-danger text-center'>All Fields Requierd</div>";     

                    }else{
                    $sql = "INSERT INTO category_table(author,datetime,category) VALUES ('$author','$date_time','$category')";
                    $query = mysqli_query($connect,$sql);

                    if (!$query) {
                     echo  $mgs = "<div class='alert alert-danger text-center'>Category Was Not Added</div>";
                      
                    }else{      
                         echo  $mgs = "<div class='alert alert-success text-center'>New Category Was Added</div>";
                      
                    }
                }
               }         
                ?>
            
              <!---form section for categorey-->
              <div class="container"> 
                <div class="right-side">
                  
                <form action="category.php" method="Post">

                   <div class = "form-group">
                      <h5 class="card-header text-center" style="color:#0A2558;">
                       <i class='bx bxs-chevron-right' ></i>Add Category</h5>
                       
                      <input type="text" class = "form-control mt-2" name="category" placeholder="Enter Category">
                   </div>
                   
                    <div class="submit mt-2 ">
                      <input type="submit" value="Submit"class="btn btn-outline-info btn-md" name="submit">
                    </div> 
                </form> 

                <!-----table creation----->
                <table class="table table-hover table-bordered table-striped text-center"><br>
                   
                  <tr style="background-color:#0A2558">
                    <th class="text-light">ID</th>
                    <th class="text-light">AUTHOR</th>
                    <th class="text-light">DATE/TIME</th>
                    <th class="text-light">CATEGORY</th>
                  </tr>
                  <?php
                   
                       $sql = "SELECT * FROM category_table ORDER BY id DESC";
                       $query = mysqli_query($connect, $sql);
                        $sn= 0;
                          while($row = mysqli_fetch_array($query)){
                        
                       $id = $row['id'];
                       $author = $row['author'];
                       $datetime = $row['datetime'];
                       $category = $row['category'];
                       $sn++
                    
                      ?>
                      <tr>
                        <td><?=$sn; ?></td>
                        <td><?=$author; ?></td>
                        <td><?=$datetime; ?></td>
                        <td><?=$category; ?></td>
                  </tr>
                  
                    <?php } ?> 
                </table>
              
              </div>
              </div>
            </section>


            //javascript code for sidebar
            <script type="text/javascript" src="css/footer.js"></script>

          </body>
          </html>
