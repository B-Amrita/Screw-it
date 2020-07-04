<head>
    <style>
        a:hover { color:#FCA15F; text-decoration: none; }
        a:active { color:#FCA15F; text-decoration: none; }
        a { color:#3F7CAC; text-decoration: none; }
    </style>
    
    <script>
    $(document).ready(function(){
      $("h6").click(function(){
        $(this).hide();
      });
    });
</script>

</head>

<?php 

if ($_SESSION ['user_type'] != "Moderator"){
    return call('pages', 'error');
}

?>
<body>
    
<!-- HEADER DETAILS -->

    <br>
    <div class="container-fluid">
        <div class="row">
            
            
            <div class="dropdown" style="padding-left:2rem;">
                <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px; border-color: #fafafa;" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Useful Links
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="https://analytics.google.com/analytics/web/#/">Google Analytics</a>
                  <a class="dropdown-item" href="https://www.insightdiy.co.uk/news-uk.htm">DIY News</a>
                  <a class="dropdown-item" href="https://www.diy.com/">B&Q</a>
                  <a class="dropdown-item" href="https://cat-bounce.com/">Click for cats</a>
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
    
    
    <!-- PROFILE -->    
    <center>

        <h6>
        <?php 
            if (isset($_GET['resp'])){
                $notification = "Your comment has been deleted - yay! #moderatorGoals.";
            }
            else if (isset($_GET['result'])){
                $notification = "Thank you! Your blogger has been added.";
            }
            else if (isset($_GET['res'])){
                $notification = "Your user has been locked - bad user!";
            }
            else if (isset($_GET['unlock'])){
                $notification = "Your user has been unlocked - keep an eye on them!";
            }
            else {
                $notification = "<i class='fas fa-comment-alt'></i> You have 0 new notifications | Click to dismiss.";
            }
            echo $notification;
        ?>  
        </h6>
        <br>
    <div class="container" style="max-width:28rem;">
        <div class="col" style="">
            <div class="row" style="">
            <div class="col" style="">        
            <?php
                    // PROFILE PIC
        
                        if (!empty($details['user_id'])){
                            $imageSrc = $details['profile_pic'];
                            //echo $imageSrc;
                            echo "<img src='".$imageSrc."' style='height: 7rem; width: 7rem; object-fit: cover; margin-top: 0.1rem; border-radius: 50%;'>";
                        } else {
                            $imageSrc = 'views/images/profile_pics/Cat1.png';
                        }
        
                ?> 
            </div>
            
            <div class="col" style="">
                <div class="row" style="justify-content: center; padding-top:1.1rem;">
                    
                    <!-- MEMBER SINCE... --->
                   <h1><b><span style="color: #FCA15F;"><?= $details['username'] ?></span></b></h1> 
                   
                </div>
                <div class="row" style="justify-content: center; text-align-last: center">
                    <p style="font-size: 12px;">Moderator since
                        <?php
                        $d = strtotime($details['date_joined']);
                        echo date("jS F Y", $d);
                        ?>
                    </p>
                </div>
            </div>
                
                
            </div>
        </div>
    </div>
    
    <div class="container"><br></div>

    <!-- BIO / EDIT BIO -->
        <p style="font-size: 14px; margin-left:30%; margin-right:30%;">
            <?php 
            if (!empty($details['bio'])) {
                echo $details['bio'];
            } else {
                echo "<a href='#'>add a bio? <i class='fa fa-edit' style='font-size:14px'></i></i></a>";
            }
            ?>

            <br><br><br>
            
<!-- SCREW-IT STATS ------------------------------------------------------------------->            
        
        <div class="container">
            <h6 style="background-color: #fafafa; padding: 0.5rem;"><b>Screw-It:</b>  website performance</h6>
            <div class="row row-cols-3">
                <div class="col" style=""><i class='fas fa-pencil-alt'></i><b><a href="?controller=categories&action=showAll" style="color: black;"> Total Blogs</a></b></div>
                <div class="col"><i class='fas fa-user-circle'></i><b> Total users</b></div>
                <div class="col"><i class='fas fa-users'></i><b> Total Bloggers</b></div>
                
                <div class="col" style="font-size:3rem;"><?php echo $blogsCount[0]['count'] ?></div>
                <div class="col" style="font-size:3rem;"><?php echo $memCount[0]['count'] ?></div>
                <div class="col" style="font-size:3rem;"><?php echo $bloggerCount[0]['count'] ?></div>
                
                <div class="col" style="color: #54b368"><p>+ <?php echo $blogsCountLW[0]['count'] ?> this week</p></div>
                <div class="col" style="color: #54b368"><p>+ <?php echo $memCountLW[0]['count'] ?> this week</p></div>
                <div class="col" style="color: #f2bf5e"><p>no change</p></div>
                
                
                <div class="col"><i class='far fa-heart'></i><b> Total Likes</b></div>
                <div class="col"><i class='far fa-comment-dots'></i><b> Total Comments</b></div>
                <div class="col"><i class='far fa-comments'></i><b> Total replies</b></div>
                <div class="col" style="font-size:3rem;"><?php echo $likesCount[0]['count'] ?></div>
                <div class="col" style="font-size:3rem;"><?php echo $commsCount[0]['count'] ?></div>
                <div class="col" style="font-size:3rem;"><?php echo $repliesCount[0]['count'] ?></div>
                
                <div class="col" style="color: #54b368"><p>+ <?php echo $likesCountLW[0]['count'] ?> this week</p></div>
                <div class="col" style="color: #54b368"><p>+ <?php echo $commsCountLW[0]['count'] ?> this week</p></div>
                <div class="col" style="color: #f2bf5e"><p>no change</p></div>
            </div>
        </div>
        <br>
        
            
<!-- ------------------------------------------------------------------------------------------------>  

<!-- ADMIN -->
        
<div class="container">
    <h6 style="background-color: #fafafa; padding: 0.5rem;"><b>Screw-It:</b>  admin</h6>
</div>

<!-- review comments -->
<br> 

<p>
  <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px;" class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Review latest comments <i class='fas fa-comment-slash'></i>
  </a>
<div class="collapse" id="collapseExample">
    <div class="container">

<?php 

$i=1;

foreach ($comms as $comment){
    
               
                
                echo "<div class = 'row' style='border-style: solid; border-radius: 0px 5px 5px 0px; border-color: #e3e3e3; border-width:0.1rem; border-left-color: #3F7CAC; border-left-style: solid; border-left-width: 1rem; margin:1rem; padding:0.5rem;'>";
                $blog = $comment['blog_id'];


                    // Commenter Username
                    echo "<div class='col-sm-2' style='background-color: #fafafa;'>";
                        echo "<i class='fas fa-user-circle'></i> ".$comment['username'];
                    echo "</div>";
                    
                    // Comment Date
                    echo "<div class='col-sm-2' style='background-color: #fafafa;'>";
                        $d = strtotime($comment['comment_date']);
                        echo "<i class='far fa-comment-dots'></i> ".date("jS F Y", $d);
                    echo "</div>";
                    
                    //empty
                    echo "<div class='col-sm-4'></div>";
                    
                    //Blog Title
                    echo "<div class='col-sm-4'>";
                        echo "<a href='?controller=blog&action=read&blog_id=$blog'><i class='fas fa-pencil-alt'></i> ".substr($comment['title'],0,25)."...</a>";
                    echo "</div>";
                    
                    //Empty
                    echo "<div class='col-sm-12' style=''>";
                    echo "<p></p></div>";
                    
                    //Comment
                    echo "<div class='col-sm-12' style=''>";
                        echo $comment['comment'];
                    echo "</div>";
                    
                    //Empty
                    echo "<div class='col-sm-12' style=''>";
                    echo "<p></p></div>";
                    
                    
                    //blogger
                    echo "<div class = 'col-sm-2' style='background-color: #fafafa;'>";
                        echo "<i class='fas fa-users'></i> ".$comment['blogger'];
                    echo "</div>";    
                    
                    //blog date
                    echo "<div class = 'col-sm-2' style='background-color: #fafafa;'>";
                        $d = strtotime($comment['date_posted']);
                        echo "<i class='fas fa-calendar'></i> ".date("jS F Y", $d);
                    echo "</div>";
                    
                    //action
                    
                    echo "<div class = 'col-sm-2' style='background-color: #fafafa;'>";
                    
                        echo "<div class='dropdown'>";
                        echo " <a style='color:black; background-color: #fafafa; border-radius:0px; border-style: none;' class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                            echo "<i class='fas fa-comment-slash' style=''></i> Action";
                        echo "</a>";                  
                    
                        echo "<div class='dropdown-menu' aria-labelledby='dropdownMenuLink'>";
                            echo "<a class='dropdown-item' href='?controller=blog&action=read&blog_id=$blog'>View</a>";
                            echo "<a class='dropdown-item' href='?controller=mod&action=showAll&req=deleteComment&commentID=".$comment['comment_id']."'>Delete</a>";
                        echo "</div>";


                    echo "</div>";
                    echo "</div>";
                    
                    //empty
                    echo "<div class = 'col-sm-6'></div>";                
                      
                echo "</div>";
                
                $i++;
                               
    }

?>
        

      
<a href="#">Next ></a>
<br>
</div>
</div>

<!-- Create Blogger -->

<p>
  <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px;" class="btn btn-primary" data-toggle="collapse" href="#collapseBlogger" role="button" aria-expanded="false" aria-controls="collapseExample">
    Create Blogger <i class='fas fa-user-plus'></i>
  </a>
<div class="collapse" id="collapseBlogger">
    <div class="container" style="">
 
<div class="container" style="border-style: solid; border-radius: 0px 5px 5px 0px; border-color: #e3e3e3; border-width:0.1rem; border-left-color: #3F7CAC; border-left-style: solid; border-left-width: 1rem; margin:1rem; padding:0.5rem;">
    <p><br>Enter the blogger details below<br><br></p>
<form action="?controller=mod&action=showAll&result=Success">
    <center>
    
<!-- User Type -->
  <fieldset disabled>
    <!-- User Type -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">User Type</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="disabledTextInput" class="form-control" placeholder="Blogger">
    </div>
  </fieldset>

    <!-- First Name -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="user_fn" class="form-control" placeholder="e.g. Joe">
    </div>
    
    <!-- Last Name -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">Last Name</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="user_ln" class="form-control" placeholder="e.g. Exotic">
    </div>
    
    <!-- Username -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="username" class="form-control" placeholder="e.g. TigerKing">
    </div>
    
    <!-- Email -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="email" class="form-control" placeholder="e.g. BigCats@email.com">
    </div>
    
    <!-- Bio -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">Bio</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="bio" class="form-control" placeholder="e.g. That ... Carol Baskin.">
    </div>
    
    <!-- Twitter -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">Twitter URL</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="twitter_url" class="form-control" placeholder="">
    </div>
    
    <!-- Insta -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">Facebook URL</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="facebook_url" class="form-control" placeholder="">
    </div>
    
    <!-- Facebook -->
    <div class="form-group row" style="justify-content:center;">
          <label for="staticEmail" class="col-sm-2 col-form-label">Instagram URL</label>
      <input type="text" style="text-align: center; max-width:25rem;" id="insta_url" class="form-control" placeholder="">
    </div>
    
    <a style="border:3px; margin: 2px; background-color: #fafafa;" href="?controller=mod&action=showAll&result=Success">Submit</a>
    </center>
</form> 
    <p><br><i style="font-size: 20px;" class="fas fa-exclamation-circle"></i><br><br>The Blogger will be sent an email automatically when the account is created.<br>Please inform them to use this link to reset their password and set up their security answer.</p>
</div>
        
 <br>       
        
    </div>
</div>



<!-- Lock User -->

<p>
  <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px;" class="btn btn-primary" data-toggle="collapse" href="#collapseLock" role="button" aria-expanded="false" aria-controls="collapseExample">
    Lock User Account <i class='fas fa-lock'></i>
  </a>
<div class="collapse" id="collapseLock">
    <div class="container" style="border-style: solid; border-radius: 0px 5px 5px 0px; border-color: #e3e3e3; border-width:0.1rem; border-left-color: #3F7CAC; border-left-style: solid; border-left-width: 1rem; margin:1rem; padding:0.5rem;">
        <br>
        
        <form action="?controller=mod&action=showAll" method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-4" style="text-align:center;">
                <label for="inputUser">Select User</label>
                <select id="inputUser" class="form-control" name="lockUser">
                <?php
                $position = 0;
                foreach ($users as $user) {
                    
                    $user_id = $user['user_id'];
                    $lockedUser = $user['username'];
                    echo "<option value=".$user_id.">".$user['username']."</option>";
                    $position++;
                }
                
                ?>
      </select>
                
                <p></p>
    </div>
            
    <button type="submit" class="btn btn-primary">Lock Account</button>        
        </form>
        <br>
        
        
    </div>
</div>

<!-- unlock User -->

<p>
  <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px; border-color: #fafafa" class="btn btn-primary" data-toggle="collapse" href="#collapseunLock" role="button" aria-expanded="false" aria-controls="collapseExample">
    Unlock User Account <i class='fas fa-lock-open'></i>
  </a>
<div class="collapse" id="collapseunLock">
    <div class="container" style="border-style: solid; border-radius: 0px 5px 5px 0px; border-color: #e3e3e3; border-width:0.1rem; border-left-color: #3F7CAC; border-left-style: solid; border-left-width: 1rem; margin:1rem; padding:0.5rem;">
        <br>
        
        <form action="?controller=mod&action=showAll" method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-4" style="text-align:center;">
                <label for="inputUser">Select User</label>
                <select id="inputUser" class="form-control" name="unlockUser">
                <?php
                $position = 0;
                
                if (count($usersL) == 0) {
                    echo "<option value=''>No members to unlock!</option>";
                }
                else {
                foreach ($usersL as $userL) {
                    
                    $user_id = $userL['user_id'];
                    $lockedUser = $userL['username'];
                    echo "<option value=".$user_id.">".$userL['username']."</option>";
                    $position++;
                }
                }
                ?>
      </select>
                
                <p></p>
    </div>
            
    <button type="submit" class="btn btn-primary">Unlock Account</button>        
        </form>
        <br>
        
        
    </div>
</div>

<!-- Remove User -->

<p>
  <a style="background-color: #fafafa; color:#FCA15F; border:none; border-radius: 0px;" class="btn btn-primary" data-toggle="collapse" href="#collapseRemove" role="button" aria-expanded="false" aria-controls="collapseExample">
    Remove User <i class='fas fa-user-slash'></i>
  </a>
<div class="collapse" id="collapseRemove">
    <div class="container">
        <p> some text here </p>
    </div>
</div>

      
<a style="font-size:14px;" href="#">Back to Top</a>        
</center>    
</body>

