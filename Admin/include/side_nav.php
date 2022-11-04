 
   <?php
    session_start();
   ?>
  <!---sidebar---->
 <div class="sidebar">
    <div class="logo-details"> &nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;<span class="logo_name"><span style="color:silver; font-size:xxx-large">P</span>remier <span style="color:silver; font-size:xxx-large">R</span>eport</span>
    </div>

    <!---sidebar links--->
      <ul class="nav-links">
        <li>
          <a href="dashboard.php" class="active">
            <span class="links_name">
               <i class='bx bx-grid-alt' ></i>
             Dashboard</span>
          </a>
        </li>
        <li>
          <a href="add_post.php"> 
            <i class='bx bx-coin-stack' ></i>     
            <span class="links_name">Add New Post</span>
          </a>
        </li>
        <li>
          <a href="category.php">
             <i class='bx bx-list-ul' ></i>
            <span class="links_name">Categories</span>
          </a>
        </li>
        <li>
          <a href="comment.php">
               <i class='bx bx-message' ></i>
            <span class="links_name">Comments</span>
          </a>
        </li>
         <li>
          <a href="advert.php">
               <i class='bx bx-box' ></i>
            <span class="links_name">Advert</span>
          </a>
        </li>
        <li>
          <a href="#">
              <i class='bx bx-chevron-down' ></i>
            <span class="links_name">Admin Profile</span>
          </a>
        </li>
        <li>
          <a href="index.php">
             <i class='bx bx-log-out'></i>
            <span class="links_name">Logout</span>
          </a>
        </li>         
      </ul>
  </div>

  <!---top dashboard-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">  
        <span class="dashboard mt-5"><span style="color: #0A2558; font-size:xxx-large;">A</span>dmin&nbsp;<span style="color: #0A2558; font-size:xxx-large;">D</span>ash<span style="color: #0A2558; font-size:xxx-large;">B</span>oard</span>

 

          <span style="float: right" class="mt-3 bg-light rounded-4">
          
            <span class="links_name ml-5" style="font-weight: bolder; font-size: 18px;">


             <i class='bx bxs-user fa-2x'></i>

            Admin:</span>
            <span class="links_name" style="font-weight:bold; color:darkblue;">

              <?=$_SESSION['first_name']?></span>

            <img src="include/images<?= $_SESSION['image']?>">

          </span> 
      </div>  
    </nav>
  