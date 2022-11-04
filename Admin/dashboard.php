
<!------include files---->

         <?php
         
                 $title = 'Admin Home Page';
                 include'include/links.php';
                 include'include/side_nav.php';
                 include'include/db_configure.php';
                

           ?>
          
             <h5 class="card-header text-center">
               <i class='bx bxs-chevron-right' ></i>DashBoard Content</h5>
         <!-----table creation----->
            

              <table  class="table table-hover table-bordered table-striped"  class="text-center"><br>
                 <tbody>
                <tr>
                    <thead style="background-color:#0A2558">
                      <th class="text-light">S/N</th>
                      <th class="text-light">AUTHOR</th>
                      <th class="text-light">TITLE</th>
                      <th class="text-light">CATEGORY</th>
                      <th class="text-light">DATE/TIME</th>
                      <th class="text-light">COMMENTS</th>
                      <th class="text-light">IMAGES</th>
                      <th class="text-success">PREVIEW</th>
                      <th class="text-info">UPDATE</th>
                      <th class="text-danger">DELETE</th>     
                    </thead>
                 </tr>

                  <?php
                      $sn=0;
                      $sql = "SELECT * FROM add_post ORDER BY datetime DESC";
                      $query = mysqli_query($connect, $sql);

                      while($row = mysqli_fetch_array($query)){
                        $db_id = $row['id'];
                        $author = $row['author']; 
                        $title = $row['title'];
                        $category = $row['category'];
                        $date = $row['datetime'];
                        $content = $row['content'];
                        $banner = $row['image'];
                        $sn++    
                  ?>

                 <tr>
                       <td><?=$sn?></td>
                       <td><?=$author?></td>
                       <td>
                           <?php
                        if (strlen($title)>11) {
                           $title= substr($title, 0, 11);
                         } 
                         echo $title;
                        ?>

                       </td>

                       <td><?=$category?></td>

                       <td>
                        <?php
                        if (strlen($date)>11) {
                           $date = substr($date, 0, 11);
                         } 
                         echo $date;
                        ?>
                        
                       </td>

                       <td>
         
                       </td>

                       <td>
                          <div class="top-sales box">
                         <img src="upload/<?=$banner?>"style="height:50px; width:50px;  border:3px solid darkgreen; border-radius: 100px" ></td>
                        </div>
                        <td>
                        <a href ="../full_post.php?readmore=<?=$db_id;?>"><span class="btn btn-success">Preview</span></a>
                      </td>

                      <td>
                        <a href="update.php?update=<?=$db_id;?>"><span class="btn btn-info"> <i class='bx bx-edit' ></i></span></a>
                      </td>
                      
                      <td> 
                        <a href="include/delete_post.php?delete=<?=$db_id;?>"><span class="btn btn-danger"> <i class='bx bx-trash' ></i> </span></a>
                      </td>
                    
                 </tr>


                 </tbody>
                     <?php } ?> 
                </table>
          
        <!--------------------javascript code for sidebar----------------->
          <script type="text/javascript" src="css/footer.js"></script>

        </body>
        </html>
