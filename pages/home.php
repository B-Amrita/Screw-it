<body>
<!-- --------------------------------------------------------------------------------------------------------------------->
            <?php //echo $count; ?>
            <?php //echo $test0->blog_id; ?>
        
<div class="container">
           <?php  
            
            //if (isset($_SESSION['loggedin'])) {
                //echo "<div style='background-color: #FCB37E; margin-left: 4%; color: black; text-align: center;'>";
                //echo "<h3>Welcome</h3>" . $_SESSION['username'];
                //echo "</div>";
            //} 
            ?>
</div>
<!-- CAROUSEL - LATEST BLOGS ---------------------------------------------------->

<div class="container-fluid">
    
    <!-- HEADER -->  
        <center>
            <br>
            <br>
        <div class="HP-carousel-caption" style="">
            <h3 style="">The <span style="color: #FCA15F">home</span> of DIY</h3>
        </div>
            <br>
        </center>
    
    <!-- CAROUSEL OF IMAGES --> 
    
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="background-color: #fafafa; padding:1.5rem;">
        
        <div class="carousel-inner">
           
          <!-- blog 1 -->   
          <div class="carousel-item active">
              
              <div class="container" style="background-color: white; text-align: center; z-index: 1; position: absolute; right: 0; bottom:0; margin-bottom: 1rem; max-width: 40em; opacity: 0.85;">
                  <div class="row">
                        <div class="col-sm-2">                         
                        </div>
                      
                        <div class="col-sm-8" style="border-bottom: 0.2rem; border-bottom-style: solid; ">
                             <h3 style="padding:1rem;"><?php echo $blog1->titleShort ?></h3>
                        </div>
                      
                        <div class="col-sm-2">                          
                        </div>  
                      
                        <!-- new row -->
                         
                        <div class="col-sm-1">
                        </div>
                        
                        <div class="col-sm-10">
                             <p style="padding:1rem;"><?php echo $blog1->bodyLong ?></p>
                        </div>
                        
                        <div class="col-sm-1">
                        </div> 
                        
                        <!-- new row -->
                         
                        <div class="col-sm-1">
                        </div>
                        
                        <div class="col-sm-10">
                            <p style=""><a style="color:#3F7CAC" href='?controller=blog&action=read&blog_id=<?php echo $blog1->blog_id;?>'>Read More...</a></p>
                        </div>
                        
                        <div class="col-sm-1">
                        </div> 
                        
                        
                  </div>
              </div>
                                       
              <!-- image -->   
                <a href='?controller=blog&action=read&blog_id=<?php echo $blog1->blog_id;?>'>
                            <?php 
                            $img = "<img class='d-block w-100' src=$blog1->main_image alt='$blog1->title' style='width: auto; height: 40rem; max-height: 40rem; object-fit: cover;'/>";
                            echo $img; 
                            ?>
                </a>
              
          </div>

          <!-- blog 2 -->
          <div class="carousel-item">
              
                <div class="container" style="background-color: white; text-align: center; z-index: 1; position: absolute; right: 0; bottom:0; margin-bottom: 1rem; max-width: 40em; opacity: 0.85;">
                  <div class="row">
                        <div class="col-sm-2">                         
                        </div>
                      
                        <div class="col-sm-8" style="border-bottom: 0.2rem; border-bottom-style: solid; ">
                             <h3 style="padding:1rem;"><?php echo $blog2->titleShort ?></h3>
                        </div>
                      
                        <div class="col-sm-2">                          
                        </div>  
                      
                        <!-- new row -->
                         
                        <div class="col-sm-1">
                        </div>
                        
                        <div class="col-sm-10">
                             <p style="padding:1rem;"><?php echo $blog2->bodyLong ?></p>
                        </div>
                        
                        <div class="col-sm-1">
                        </div> 
                        
                        <!-- new row -->
                         
                        <div class="col-sm-1">
                        </div>
                        
                        <div class="col-sm-10">
                            <p style=""><a style="color:#3F7CAC" href='?controller=blog&action=read&blog_id=<?php echo $blog2->blog_id;?>'>Read More...</a></p>
                        </div>
                        
                        <div class="col-sm-1">
                        </div> 
                        
                        
                  </div>
              </div>
            
              <!-- image -->   
                <a href='?controller=blog&action=read&blog_id=<?php echo $blog2->blog_id;?>'>
                            <?php 
                            $img = "<img class='d-block w-100' src=$blog2->main_image alt='$blog2->title' style='width: auto; height: 40rem; max-height: 40rem; object-fit: cover;'/>";
                            echo $img; 
                            ?>
                </a>
              
          </div>

          <!-- blog 3 -->
          <div class="carousel-item">
              
               <div class="container" style="background-color: white; text-align: center; z-index: 1; position: absolute; right: 0; bottom:0; margin-bottom: 1rem; max-width: 40em; opacity: 0.85;">
                  <div class="row">
                        <div class="col-sm-2">                         
                        </div>
                      
                        <div class="col-sm-8" style="border-bottom: 0.2rem; border-bottom-style: solid; ">
                             <h3 style="padding:1rem;"><?php echo $blog3->titleShort ?></h3>
                        </div>
                      
                        <div class="col-sm-2">                          
                        </div>  
                      
                        <!-- new row -->
                         
                        <div class="col-sm-1">
                        </div>
                        
                        <div class="col-sm-10">
                             <p style="padding:1rem;"><?php echo $blog3->bodyLong ?></p>
                        </div>
                        
                        <div class="col-sm-1">
                        </div> 
                        
                        <!-- new row -->
                         
                        <div class="col-sm-1">
                        </div>
                        
                        <div class="col-sm-10">
                            <p style=""><a style="color:#3F7CAC" href='?controller=blog&action=read&blog_id=<?php echo $blog3->blog_id;?>'>Read More...</a></p>
                        </div>
                        
                        <div class="col-sm-1">
                        </div> 
                        
                        
                  </div>
              </div>
            
              <!-- image -->   
                <a href='?controller=blog&action=read&blog_id=<?php echo $blog3->blog_id;?>'>
                            <?php 
                            $img = "<img class='d-block w-100' src=$blog3->main_image alt='$blog3->title' style='width: auto; height: 40rem; max-height: 40rem; object-fit: cover;'/>";
                            echo $img; 
                            ?>
                </a>
              
          </div>

        </div>
        
        <!-- controls --> 
        
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        
  
</div>  
    
    

</div>


<!-- CATEGORIES ----------------------------------------------------------------->


<br><br>
<!-- header -->
<center>
    <div class="container-fluid">
    <div class="HP-caption" style="">
        <h3 style="">browse by <span style="color: #70d6ff">category</span></h3>
    </div>
    </div>    
</center>
<br>

<!-- images -->
    <div class="container-fluid">
      <div class="row">
          
          <div class="col-4" style="padding:1em;">
            
            <!-- Category 1 --> 
            
            <a href="?controller=categories&action=searchCategory&category=<?php echo $category[0] ?>">
                <img style="" class="cat-1" src="views/images/HP_images/<?php echo $category[0] ?>.png" alt="<?php echo $category[0] ?>">
            </a>
                        
        </div>
        <div class="col-4" style="padding:1em;">
        
          
            <!-- Category 2 --> 
            
            <a href="?controller=categories&action=searchCategory&category=<?php echo $category[1] ?>">
                <img class="cat-2" src="views/images/HP_images/<?php echo $category[1] ?>.png" alt="<?php echo $category[1] ?>">
            </a>
            
        </div>
        <div class="col-4" style="padding:1em;">
      
          
            <!-- Category 3 --> 
            
            <a href="?controller=categories&action=searchCategory&category=<?php echo $category[2] ?>">
                <img class="cat-3" src="views/images/HP_images/<?php echo $category[2] ?>.png" alt="<?php echo $category[2] ?>">
            </a>
            
        </div>
          
      </div>
    </div>

<!-- BLOG FEED - LATEST BLOGS ---------------------------------------------------->

<div class="container-fluid" style="background-color: #fafafa;">

<div class="container-fluid">
    
    
 
    <!-- HEADER -->  
        <center>
            <br>
            <br>
        <div class="HP-carousel-caption" style="">
            <h3 style="">be <span style="color: #3f7cac">inspired</span></h3>
        </div>
            <br>
        </center>    
    
    
</div>

<div class="container" style="background-color: white;">
  <!-- row 1 -->
 <div class="row" style="padding:0.5rem;">
     
     
  <!-- 1:1 -->   
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog1->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog1->main_image alt=$blog1->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog1->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog1->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog1->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog1->viewHTML; ?></li>
                                        <li><br></li>
                                        
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog1->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog1->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    

<!-- 1:2 -->   
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog2->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog2->main_image alt=$blog2->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog2->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog2->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog2->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog2->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog2->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog2->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    
<!-- 1:3 --> 
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog3->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog3->main_image alt=$blog3->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog3->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog3->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog3->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog3->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog3->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog3->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
      
  </div>
  
  
  
  <!-- row 2 -->
  
  
 <div class="row" style="padding:0.5rem;">

     <!-- 2:1 --> 
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog4->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog4->main_image alt=$blog4->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog4->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog4->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog4->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog4->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog4->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog4->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    
     
     <!-- 2:2 --> 
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog5->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog5->main_image alt=$blog5->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog5->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog5->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog5->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog5->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog5->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog5->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    
     
    <!-- 2:3 -->  
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog6->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog6->main_image alt=$blog6->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog6->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog6->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog6->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog6->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog6->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog6->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
      
  </div>
  
  <!-- row 3 -->
  
  
 <div class="row" style="padding:0.5rem;">
     
    <!-- 3:1 -->   
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog7->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog7->main_image alt=$blog7->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog7->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog7->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog7->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog7->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog7->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog7->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    
    
    <!-- 3:2 --> 
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog8->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog8->main_image alt=$blog8->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog8->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog8->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog8->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog8->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog8->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog8->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    
    
    <!-- 3:3 --> 
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog9->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog9->main_image alt=$blog9->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog9->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog9->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog9->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog9->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog9->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog9->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
      
  </div>
  
  <!-- row 4 -->
  
  
 <div class="row" style="padding:0.5rem;">
    
     <!-- 4:1 -->  
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog10->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog10->main_image alt=$blog10->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog10->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog10->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog10->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog10->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog10->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog10->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    
    <!-- 4:2 -->  
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog11->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog11->main_image alt=$blog11->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog11->blog_id; ?>'>
                
                <div class="gallery-item-info">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog11->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog11->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog11->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog11->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog11->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
    
    <!-- 4:3 -->
    <div class="col-sm">
        <div class="gallery-item" tabindex="0">
        <!-- image -->
            <?php
                if ($count<2){
                    $img = "<img class='gallery-image' src='views/images/HP_images/comingsoon.JPG' alt=$blog12->title style=' height: 10px;'/>";
                } else {
                    $img = "<img class='gallery-image' src=$blog12->main_image alt=$blog12->title style='background-size: cover;'/>";
                }
                echo $img; 
            ?> 
                            
            <a href='?controller=blog&action=read&blog_id=<?php echo $blog12->blog_id; ?>'>
                
                <div class="gallery-item-info" style="">

				<!-- Likes and Comments -->

                                    <ul>
                                        <!-- title -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog12->titleShort?><br></li>
                                        <li><br></li>
                                        <!-- body -->
                                        <li class="gallery-item-body" style="color:white; font-size: 16px">“<?php echo $blog12->bodyShort?>”<br></li>
                                        <!-- likes -->
                                        <li><br></li>
                                        <li style="color:white; font-size: 16px; font-family: 'Playfair Display', serif;"><?php echo $blog12->viewHTML; ?></li>
                                        <li><br></li>
                                        <li class="HP-catagories-gallery-item-likes" style="color:white; font-size: 16px">
                                            <i class="fa fa-heart-o"></i><?php echo " ".$blog12->likes?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="fa fa-comment-o"></i><?php echo " ".$blog12->comments?></li>

                                    </ul>

				</div>
                
            </a>
        </div>
    </div>
      
  </div>
</div>
    <center>    
        <br><br>
    <a style="color: #3F7CAC" href="?controller=categories&action=showAll">View All</a>
    <p style="font-size:10px;"></p>
    <br>
    </center>
</div>
  

<!-- End of container -->

<center>
<br>
    <a style="color: #FCA15F" href="#">Back to Top</a>
<br>
</center>

<?php
include_once "Footer.php";
?>

      <!-- For Image on Hover - probably need to move to a JS file -->   
    <script  type='text/javascript'>
        $(document).ready(function(){
            $(".cat-1").hover(
            function() {$(this).attr("style","filter: grayscale(100%);");},
            function() {$(this).attr("style","");
            });
        });
    
        $(document).ready(function(){
            $(".cat-2").hover(
            function() {$(this).attr("style","filter: grayscale(100%);");},
            function() {$(this).attr("style","");
            });
        });
        
        $(document).ready(function(){
            $(".cat-3").hover(
            function() {$(this).attr("style","filter: grayscale(100%);");},
            function() {$(this).attr("style","");
            });
        });
        
      
    </script>
</body>
</html>
