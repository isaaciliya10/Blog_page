          
          <!------include files----> 
            <?php
                 $title = 'Post';
                 include'include/links.php';
                 include'include/side_nav.php';
                 include'include/db_configure.php';
                 include'include/inc.php';

                 echo error_message();
                 echo success_message();
            ?>

             <!--- category form-->
             <div class="container"> 
               <div class="right-side">
               <form action="include/post_insert.php" method="Post" enctype="multipart/form-data">
                 <div class="row">

                 <div class="col-md-4"> 
                  <div class = "form-group">
                     <label for = "author" class="m-2">Author</label>
                     <input type="text" class = "form-control" name="author" placeholder="Enter Author Name">
                  </div>
                 </div>

                  <div class="col-md-4">
                  <div class = "form-group">
                     <label for = "title" class="mt-2">Title</label>
                     <input type="text" class = "form-control" name="title" placeholder="Enter Title Name">
                  </div>
                  </div>

                  <div class="col-md-4"> 
                  <div class = "form-group">
                   <label for = "title" class="mt-2">Category</label>
                  <select class="form-select">
                           <option selected>Zero</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                 </select>
                 </div>
                 </div>

                  <div class="col-md-4"> 
                  <div class = "form-group">
                     <label for = "date" class="mt-2">Date</label>
                     <input type="date" class = "form-control" name="date" required>
                  </div>
                 </div>

                  <div class="col-md-4">   
                  <div class = "form-group">
                     <label for = "time" class="mt-2">Time</label>
                     <input type="time" class = "form-control" name="time">
                  </div>
                  </div>

                 

                  <div class="col-md-4">
                  <div class = "form-group">
                     <label for = "image" class="mt-2">Upload Image</label>
                     <input type="file" class = "form-control" name="file">
                  </div>
                  </div>

                  <div class = "form-group">
                     <label for = "Message" class="mt-2">News Content</label>
                     <textarea class = "form-control" rows = "10" name="content" placeholder = "Enter News Content"></textarea>
                  </div>
                  
                   <div class="submit mt-2 ">
                   <input type="submit" value="Submit"class="btn btn-outline-secondary btn-lg" name="submit">
                 </div>
               </form>
               </div>
             </div>
             </div>
           </section>
          
           <script type="text/javascript" src="css/footer.js"></script>
         </body>
         </html>
