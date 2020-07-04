<div class="flex-container">
    
                <section class="intro-section-about"> 
                    <h1>Meet the Screw it bloggers </h1>
                    </section>
    
<section class="main-section" >

<div class="table-container-about" role="table" aria-label="">
      <div class="flex-table-about row" role="rowgroup"> 

        <?php foreach ($bloggers as $profile) : ?>
            <div class="flex-row-about"><div class="card" style="border: none;">
                    <img class="card-img-top" src="<?php echo $profile['profile_pic'] ?>" height="250" width="80%" style="border-radius: 5%; object-fit: cover;" >
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $profile['user_fn'] . " " . $profile['user_ln'] ?></h5>
                        <p class="card-text"><?php echo $profile['bio'] ?></p>  
                        <p class="text-muted"><?php
                            $d = strtotime($profile['date_joined']);
                            echo "Blogging since " . date("F Y", $d) . "<br>";
                            ?></p>
                    </div>

                </div>
            </div>
        <?php endforeach; ?> 

          </section>
    </div>