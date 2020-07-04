<style>
    #drop {
       background-color: #3F7CAC;
       border-color: #70D6FF;
    }
    
    #dropselect {
        cursor: pointer;
    }
    
    #droptext {
        color: #70D6FF;
        cursor: pointer;
    }
    

.social-media-desktop {
  display: block;
}
@media only screen and (min-width: 980px) {
  .social-media-desktop {
    display: none;
  }
}
</style>
<nav class="navbar justify-content-between" id="navbar" >
    <ul class="nav ml-auto">     
        
        <?php
        // display menu options if user is not logged in
        if (!isset($_SESSION["loggedin"])) {
            echo "<li><a class='nav-link' href='?controller=register&action=registerUser'>SIGN UP</a></li>
                <li><a class='nav-link' href='?controller=login&action=loginUser'>LOG IN</a><li>";
        } else {
            echo " ";
        }
        ?>
                <?php
                // only display menu options if user is logged in
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                    echo '<li class="nav-item dropdown" id="dropselect">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Members Area</a>
            <div class="dropdown-menu" id="drop" aria-labelledby="navbarDropdownMenuLink">';
                }
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION ['user_type']=== "Member") {
                    echo '<a class="nav-link" id="droptext" href="?controller=dashboard&action=mem_details" >Your Dashboard</a>';
                    echo '<a class="nav-link" id="droptext" href="?controller=signout&action=signout">Log out</a>';
                }
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION ['user_type']=== "Blogger"){
                    echo '<a class="nav-link" id="droptext" href="?controller=blog&action=create">Post Blog</a>';
                    echo '<a class="nav-link" id="droptext" href="?controller=blogger&action=dashboard">Dashboard</a>';
                    echo '<a class="nav-link" id="droptext" href="?controller=signout&action=signout" >Log out</a>';
                }
                if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION ['user_type']=== "Moderator"){
                    echo '<a class="nav-link" id="droptext" href="?controller=mod&action=showAll">Dashboard</a>';
                    echo '<a class="nav-link" id="droptext" href="?controller=signout&action=signout">Log out</a>';
                };
                
                ?>&nbsp;&nbsp;
        <li><a><i onclick="openSearch()" class="fa searchfatop fa-search fa-lg"></i></a></li>
    </li>
        
    </ul>

</nav>
<div class="header">
    <a href="?controller=home&action=home"><img src="views/images/screwit3.png" alt="Screw it"></a>
</div>
<div class='sticky'>
    <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>    
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-4">
                    <a class="nav-link" href="?controller=home&action=home">HOME</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="?controller=blogger&action=about">ABOUT</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="?controller=categories&action=searchCategory&category=create">CREATE</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="?controller=categories&action=searchCategory&category=decorate">DECORATE</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="?controller=categories&action=searchCategory&category=renovate">RENOVATE</a>
                </li>
        
            </ul>

        </div>

    </nav>
</div>

        <div id="myOverlay" class="overlay">
            <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
            <div class="overlay-content">
                <form action="?controller=search&action=search" method="POST">
                    <input type="text" placeholder="" name="search" required >
                    <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
                </form>
            </div>

</div>


<div class="icon-bar">
      <a href="http://facebook.com/"><i class="fa fa-facebook fa-lg" id="icon"></i></a>
      <a href="http://instagram.com/"><i class="fa fa-instagram fa-lg" id="icon"></i></a>
     <a href="http://twitter.com/"><i class="fa fa-twitter fa-lg" id="icon" ></i></a>
      <a href="http://pintrest.com/"><i class="fa fa-pinterest fa-lg" id="icon"></i></a>
      <a><i onclick="openSearch()" class="fa searchfa fa-search fa-lg"></i></a>
</div>

<script>
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>