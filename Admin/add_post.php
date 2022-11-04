         <!------include files---->
              <?php
                $title='Add Post';
                include'include/links.php';
                include'include/side_nav.php';
                include'include/db_configure.php';
              

               if (isset($_POST['submit'])) {
                $title = mysqli_real_escape_string($connect,$_POST['title']);
                $category = mysqli_real_escape_string($connect,$_POST['category']);
                $content= mysqli_real_escape_string($connect,$_POST['content']);

                date_default_timezone_set('Africa/Lagos');
                $date_time = strftime("%B-%d-%Y %H:%M:%S");

                $author = 'Admin';

                $filename = $_FILES["image"]["name"];
                $tempname = $_FILES["image"]["tmp_name"];    
                $folder = "upload/".$filename;

                 

                    //Record insert into database
                $sql = "INSERT INTO add_post(author,datetime,category,title,image,content) VALUES ('$author','$date_time','$category','$title','$filename','$content')";
                $query = mysqli_query($connect,$sql);

                move_uploaded_file($tempname, $folder);

               if ($query){
                   echo  $mgs = "<div class='alert alert-success text-center'>New Post Has Added</div>";
                }else{      
                    echo  $mgs = "<div class='alert alert-danger text-center'>New Post Was not Added</div>";
                        }
                  
                      
                    
                  }
                   
            ?>
        
          <!---form section for categorey-->
          <div class="container"> 
            <div class="right-side">
              <h5 class="card-header text-center" style="color:#0A2558;"> 
               <i class='bx bxs-chevron-right' ></i> Add New Post</h5>
               
            <form action="" method="Post" enctype="multipart/form-data">

                <div class="row"> 
                <div class="col-md-4"> 
                <div class = "form-group">
                  <label>Title</label>
                  <input type="text" class = "form-control" name="title" placeholder="Enter Title" required>
               </div>
                </div>

                <div class="col-md-4">
                <div class = "form-group">
                  <label>Category</label>
                   <select  name="category" id="category" class="form-control" required>

                <!----fetching from the database i'e category by select html tag--->
                           <?php

                if(isset($_POST['submit'])) {
                  $search = $_POST['search'];
                  $sql = "SELECT * FROM add_post WHERE category LIKE %$search%";
                  $query = mysqli_query($connect, $sql);
                }else{


                           $sql = "SELECT * FROM category_table";}
                           $query = mysqli_query($connect, $sql);
                           $sn= 0;
                              while($row = mysqli_fetch_array($query)){
                            
                           $id = $row['id'];
                           $author = $row['author'];
                           $datetime = $row['datetime'];
                           $category = $row['category'];
                          
                           ?>
                           <option value="<?=$category;?>"><?=$category;?></option>
                       <?php };?>  
                   </select>
                </div>
               </div>

                <div class="col-md-4">
               <!-----The data submit and insert into database--->
               <div class = "form-group">
                  <label >Upload Image</label>
                  <input type="file" class = "form-control" name = "image" required>
               </div>
               </div>

                <div class = "form-group">
                  <label>News Content</label>
                  <textarea class = "form-control" rows = "12" name="content" placeholder = "Enter News Content" required></textarea>
                </div>
               
                <div class="form-group mt-2">
                  <input type="submit" value="Submit" class="btn btn-outline-info btn-md" name="submit">
                </div> 
            </form>

          </div>
          </div>
         
             <!----javascript code for sidebar------->
        <script type="text/javascript" src="css/footer.js"></script>
      </body>
      </html>
