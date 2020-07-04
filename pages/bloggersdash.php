

<body>


<section class="main-section-dashboard">
    
    <!-- HEADER DETAILS -->

    <div class="container-fluid">
        <div class="row">
            
            
            <div class="dropdown" style="padding-left:2rem;">
                <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px; border-color: #fafafa;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Useful Links
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#">Google</a>
                  <a class="dropdown-item" href="#">B&Q</a>
                  <a class="dropdown-item" href="#">Cats</a>
                </div>
            </div>
            
            <!-- TODAY'S DATE --> 
            <p><i class="fa fa-calendar" style="font-size: 1rem; padding-top:0.6rem; padding-left:2rem;"></i>    
                <?php
                echo date("jS F Y");
                ?>
            </p>
            
        </div>
    </div>
    
     <!-- Profile -->
     
                <div class="table-container-intro-dashboard" role="table" aria-label="">
                    <div class="flex-table-dashboard row" role="rowgroup">  
                        
                        <div class="flex-row-intro-dashboard" role="cell"> 
                        <img src="<?php echo $blogger['profile_pic'];?>" class="dashboard-img"   alt="profile" style="object-fit: cover;">
                        </div>                        
                        
                        <div class="flex-row-intro-dashboard" id="blogger-name" role="cell"> 
                        <h1><?php echo $blogger['username'];?></h1>
                        <div style="font-size: 12px">
                            
                        Member since
                        <?php
                    $d = strtotime($blogger['date_joined']);
                    echo date("jS F Y", $d);
                    ?></div><br>
                        <p><?php echo $blogs;?> Comments posted<br>
                        <?php echo $comments;?> Blogs Liked</p>
                 
                        </div> 

                  </div>
                </div>
                  
    
<!-- TABS -->
<div class="tab">
        <button class="tablinks" onclick="openTab(event, 'MBlogs')"><b>YOUR BLOGS</b></button>
        <button class="tablinks" onclick="openTab(event, 'MComments')"><b>YOUR COMMENTS</b></button>
        <button class="tablinks" onclick="openTab(event, 'MProfile')" ><b>YOUR PROFILE</b></button>

</div>






<!-- VIEW BLOGS -->
<div id="MBlogs" class="tabcontent">
    <br>
    <?php if (count($blogsfavscomments) > 0) { ?>
    <table class="table table-striped" style="">
        
        <thead>

            <tr>
                <th>Blog</th>
                <th>Date Posted</th>
                <th>Favourite Count</th>
                <th>Comment count</th>
                <th>Publish Status</th>
                <th>Actions</th>
            </tr>
            
        </thead>
        
        
   
        <tbody>
            <?php
            
            $number = 1;
  
            foreach ($blogsfavscomments as $posts){
                echo "<tr>";
                
                echo "<td>".$posts['title']."</td>";
                $d = strtotime($posts['date_posted']);
                echo "<td>".date("jS F Y", $d)."</td>";

                echo "<td>".$posts['favourite_count']."</td>";
                echo "<td>".$posts['comment_count']."</td>";
                echo "<td>".$posts['published']."</td>";
                echo "<td><a href='?controller=blog&action=read&blog_id=".$posts['blog_id']."'><i class='far fa-eye'></i></a>&nbsp;&nbsp;";
                echo "<a href='?controller=blog&action=update&blog_id=".$posts['blog_id']."'><i class='far fa-edit'></i></a>&nbsp;&nbsp;";
                echo "<a href='?controller=blog&action=delete&blog_id=".$posts['blog_id']."'><i class='far fa-trash-alt'></i></a>&nbsp;&nbsp;";
                echo "</td></tr>";
                
                $number++;

    }} else {
                echo '<p>You currently have no published blogs. </p><a href="?controller=blog&action=create"> Create a blog </a>now.</p>';
            }
            ?>
         </tbody>
    </table>
</div>

<!-- VIEW COMMENTS -->
<div id="MComments" class="tabcontent">
    <br>
    <?php if (count($commenttext) > 0) { ?>
    
    <table class="table table-striped" style="">
        
            <thead>    
            <tr>
                <th><h3>Blog</h3></th>
                <th><h3>Date Posted</h3></th>
                <th><h3>Your Comments</h3></th>
                <th><h3>Actions</h3></th>
  
            </tr>
            </thead>
            
            <tbody>
 
            <?php
            
            $number = 1;
  
            foreach ($commenttext as $comment){
                echo "<tr>";
                
                echo "<td>".$comment['title']."</td>";
                
                $d = strtotime($comment['comment_date']);
                echo "<td>".date("jS F Y", $d);

                echo "<td>".$comment['comment'];
                echo "<td><a href='?controller=blog&action=read&blog_id=".$comment['blog_id']."'>View</a>&nbsp;&nbsp;";
                echo "<a href='?controller=blog&action=req=deleteComment&commentID=".$comment['comment_id']."'>Delete</a></td>&nbsp;";
      
                echo "</tr>";
                
                $number++;

    }} else {
        echo '<p>You have not posted any comments yet.</p>';
    }
            ?>

        </tbody>
    </table>
    
</div>

<!-- EDIT YOUR DETAILS -->

<div id="MProfile" class="tabcontent">
  
<div class="container">
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="user_fn">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="user_fn" name="user_fn" placeholder="First Name" value="<?= $blogger['user_fn'] ?>" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="user_ln">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="user_ln" name="user_ln" placeholder="Last Name" value="<?= $blogger['user_ln'] ?>" >
      </div>
    </div>
      <div class="row">
      <div class="col-25">
        <label for="username">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="username" name="username" placeholder="Username" value="<?= $blogger['username'] ?>">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="email">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" value="<?= $blogger['email'] ?>">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
    <label for="bio">Bio</label>
      </div>
      <div class="col-75">
       <input type="text" id="bio" name="bio" placeholder="Tell our readers a little about you" value="<?= $blogger['bio'] ?>">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
    <label for="twitter">Twitter</label>
      </div>
      <div class="col-75">
       <input type="text" id="twitter" name="twitter" placeholder="e.g. twitter.com/example" value="<?= $blogger['twitter_url'] ?>">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
    <label for="insta">Instagram</label>
      </div>
      <div class="col-75">
       <input type="text" id="insta" name="insta" placeholder="e.g. instagram.com/example" value="<?= $blogger['insta_url'] ?>">
      </div>
    </div>
       <div class="row">
      <div class="col-25">
    <label for="facebook">Facebook</label>
      </div>
      <div class="col-75">
       <input type="text" id="facebook" name="facebook" placeholder="e.g. facebook.com/example" value="<?= $blogger['facebook_url'] ?>">
      </div>
    </div>
      <div class="row">
      <div class="col-25">
           <label for="profile_pic" >Profile Picture</label>
      </div>
          <div class="col-75">
       <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<?php 
$file = $blogger['profile_pic'];
if(file_exists($file)){
    $img = "<img src='$file' width='150' />"; 
    echo $img;
}

else
{
echo "<img src='views/images/profileplaceholder.png' width='150' />";
}
?>
  <input type="file" name="profile_pic" />
 
          </div></div>
          <br>
    <div class="row">
        <button id="delete-btn" onclick="deleteAccount(<?php echo $blogger['user_id']; ?>)"><i class="fas fa-trash-alt"></i> Delete Account</a></button>
      <input type="submit" value="Update">
    </div>
  </form>
</div>   
</div>


<script>
function openTab(evt, Area) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(Area).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();


  function deleteAccount(id) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "?controller=blogger&action=delete&user_id=" + id, true);
        xmlhttp.send();
        goBackToHome();
    }
    function goBackToHome() {
        window.refresh;
        window.location.href = "?controller=home&action=home";
}

</script>

   

<style>
  #delete-btn {
       
  background-color: #3F7CAC;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin: 0 auto;     
    }
    
  #delete-btn:hover {
       
  background-color: #70D6FF;    
    }
    
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #FCA15F;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin: 0 auto;
}

input[type=submit]:hover {
  background-color: #70D6FF;
}

.container {
  border-radius: 5px;
  background-color: #FFFFFF;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 15%;
  margin-top: 6px;
  text-align: right;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
    text-align: left;
  }
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #3F7CAC;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 14px;
  color: #FFFFFF;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #70D6FF;
  color: #000000;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #FCB078;
  color: #FFFFFF
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: #FCA15F;
  opacity: 1; /* Firefox */
}
         
:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: #FCA15F;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: #FCA15F;
}
</style>