  
              <!------include files---->
             <?php    
                     $title = 'Comment';
                     include'include/links.php';
                     include'include/side_nav.php';
                     include'include/db_configure.php';      

              ?>
              
             <!-----table creation----->
             <!-------------------------label for approved -------------------------->

              <h5 style="color:#0A2558;" class="card-header text-center">
                <i class='bx bxs-chevron-right' ></i>UNAPPROVE COMMENTS</h5>

                  <table  class="table table-hover table-bordered table-striped text-center" ><br>
                     <tbody>
                    <tr>
                        <thead style="background-color:#0A2558">
                          <th class="text-light">S/N</th>
                          <th class="text-light">NAME</th>
                          <th class="text-light">EMAIL</th>
                          <th class="text-light">DATE/TIME</th> 
                          <th class="text-light">IMAGE</th>
                          <th class="text-light">COMMENT</th>
                         
                          <th class="text-light bg-success">UNAPPROVED</th>
                          <th class="text-light bg-danger">DELETE</th>
                        </thead>
                    </tr>

                      <?php
                          $sn=0;
                          $sql = "SELECT * FROM comment WHERE status = 'OFF' ORDER BY id DESC";
                          $query = mysqli_query($connect,$sql);

                           while ($row  = mysqli_fetch_array($query)) {
                           $db_id    = $row['id'];
                           $datetime = $row['datetime'];
                           $image    = $row['image'];
                           $name     = $row['name'];
                           $status   = $row['status'];
                           $email    = $row['email'];
                           $comment  = $row['comment'];
                           $sn++         
                        ?>

                    <tr>
                           <td><?=$sn?></td>
                           <td><?=$name?></td>
                           <td><?=$email?></td>
                       
                           <td>
                            <?php
                            if (strlen($datetime)>11) {
                               $datetime= substr($datetime, 0, 11);
                             } 
                             echo $datetime;
                            ?>
                           </td>

                           <td>
                              <img src="upload/<?=$image?>" style="height:50px; width:50px; border:3px solid red; border-radius: 100px" ></td>
                          
                           <td>
                              <?php
                               if (strlen($comment)>40) {
                               $comment= substr($comment, 0, 40);
                             } 
                             echo $comment;
                               
                              ?>
                            </td>


                        <td>
                            <a href ="include/approve.php?approve=<?=$db_id?>"><span class="btn btn-success">Approve</span></a>
                        </td>

                        <td>
                            <a href="include/delete_comment.php?delete=<?=$db_id?>"><span class="btn btn-danger"><i class='bx bx-trash' ></i></span></a>
                        </td>

                    </tr>

                     </tbody>
                         <?php } ?> 
                    </table>


                    <!-------------------------label for approved -------------------------->
                    <h5 style="color:#0A2558;" class="card-header text-center">
                      <i class='bx bxs-chevron-right' ></i>APPROVED COMMENTS</h5>
                      
                  <table  class="table table-hover table-bordered table-striped text-center"><br>
                    
                    <tr>
                        <thead style="background-color:#0A2558">
                          <th class="text-light">S/N</th>
                          <th class="text-light">NAME</th>
                          <th class="text-light">EMAIL</th>
                          <th class="text-light">DATE/TIME</th> 
                          <th class="text-light">IMAGE</th>
                          <th class="text-light">COMMENT</th>
                        
                          <th class="text-light bg-success">APPROVED</th>
                          <th class="text-light bg-danger">DELETE</th>
                        </thead>
                    </tr>

                      <?php
                          $sn=0;
                          $sql = "SELECT * FROM comment WHERE status = 'ON' ORDER BY id DESC";
                          $query = mysqli_query($connect,$sql);

                           while ($row  = mysqli_fetch_array($query)) {
                           $db_id    = $row['id'];
                           $datetime = $row['datetime'];
                           $image    = $row['image'];
                           $name     = $row['name'];
                           $status   = $row['status'];
                           $email    = $row['email'];
                           $comment  = $row['comment'];
                           $sn++         
                        ?>

                    <tr>
                           <td><?=$sn?></td>
                           <td><?=$name?></td>
                           <td><?=$email?></td>
                       
                           <td>
                            <?php
                            if (strlen($datetime)>11) {
                               $datetime= substr($datetime, 0, 11);
                             } 
                             echo $datetime;
                            ?>
                           </td>
                           <td><img src="upload/<?=$image?>" style="height:50px; width:50px;  border:3px solid darkgreen; border-radius: 100px" ></td>
                          
                           <td><?php
                               if (strlen($comment)>40) {
                               $comment= substr($comment, 0, 40);
                             } 
                             echo $comment;
                               
                              ?>
                          
                            </td>  

                            <td>
                            <a href ="include/unaprove.php?unaprove=<?php echo $db_id;?>"><span class="btn btn-success">Unapprove</span></a>
                          </td>

                          <td>  
                        
                            <a href="include/delete_comment.php?delete=<?=$db_id;?>"><span class="btn btn-danger"><i class='bx bx-trash' ></i></span></a>
                          </td>
                    </tr>

                     </tbody>
                         <?php } ?> 
                    </table>
              
            <!--------------------javascript code for sidebar----------------->
              <script type="text/javascript" src="css/footer.js"></script>

            </body>
            </html>
