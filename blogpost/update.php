
<style>
    /*        .form-container{
                width: 50%;
                padding:0;
                margin-left: 150px;
                margin-top: 50px;
                position: relative;
            }*/

    h1 {
        margin-left: 150px;
        margin-top: 50px;
    }

    .title{
        text-align:center;
        margin-top:2.5rem;
        margin-bottom:2.5rem;
    }


     #Check1 {
            margin:auto;
            padding-left:34rem;        
        }

        #Check2 {
            margin:auto;
            padding-left:19rem;  
        }

    .checkall {
        margin-top:2rem;
    }

    .label1{
        padding-left:1rem;
        text-transform: uppercase;
        font-size: 1.2rem;
    }


    #template-container{
        margin: auto;
        width:50%;
    }

    .main-form{
        margin: auto;
        width:50%;
    }

    .next-btn{
        border: none;
        background-color: black;
        color: white;
        border-radius: 6px;
        margin-left: 42rem;
        padding: 8px 20px;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .next-btn:hover{
        background-color: #3f7cac;
    }

    #customFile{
        cursor: pointer;
    }

    .button {

        border: none;
        color: white;
        padding: 10px 30px;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        display: inline-block;
        font-size: 16px;
        margin-top: 30px;
        margin-bottom: 30px;
        margin-left: 270px;
        cursor: pointer;
        background-color: black;
        border-radius: 7px;
        font-weight: bolder;
    }       

    .button:hover {
        color: white;
        background-color: #3f7cac;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .img-upload {
        margin-bottom: 10px;
    }

    .blog-container {
        margin-left: 170px;
        text-transform: uppercase;
        margin-bottom: 0;

    }

    .cat{
        width:30%;
    }

    .img-title {
        margin-bottom: 0;
    }

    .file-type {
        padding-top: 20px;
    }

    #tags {
        margin-bottom: 20px;
    }

    small {
        font-size: 0.6em;
        font-style: italic;
    }

    @media only screen and (max-width: 400px) {

        h1 {
            font-size: 1.5em;
            margin: auto;
            padding: auto;
            margin-top: 20px;
            margin-left:20px;
        }

        .blog-container {
            margin: auto;
            float:right;

        }
    }


</style>

<span>

    <div class=' form-container'>
        <form action="" method="POST" name="myForm" class="w3-container" enctype="multipart/form-data">
            <h4 style="margin-top:60px" class="title">STEP 1: CHOOSE A NEW LAYOUT?</h4>
            <?php if ($blog['layout'] === '1'): ?>
                <div class="layout">

                    <div class="form-check form-check-inline" id="Check1">
                        <input class="form-check-input" type="radio"  id="inlineRadio1 layout1" onclick="show2();" name="layout" checked value="1">
                        <label class="form-check-label label1" for="inlineRadio1">layout 1</label>
                    </div>
                    <div class="form-check form-check-inline" id="Check2">
                        <input class="form-check-input" type="radio" id="inlineRadio2 layout2"name="layout" onclick="show1();" value="2">
                        <label class="form-check-label label1" for="inlineRadio2">layout 2</label>
                    </div>
                </div>
            <?php elseif ($blog['layout'] === '2'): ?>
                <div class="layout">

                    <div class="form-check form-check-inline" id="Check1">
                        <input class="form-check-input" type="radio"  id="inlineRadio1 layout1" onclick="show2();" name="layout"  value="1">
                        <label style="font-size:15px" class="form-check-label label1" for="inlineRadio1">layout 1</label>
                    </div>
                    <div class="form-check form-check-inline" id="Check2">
                        <input class="form-check-input" type="radio" id="inlineRadio2 layout2"name="layout" onclick="show1();" checked value="2">
                        <label style="font-size:15px" class="form-check-label label1" for="inlineRadio2">layout 2</label>
                    </div>
                </div>
            <?php endif; ?>

            <div id="template-container" class="column">              
                <img src="views/images/layout.png" alt="layout 1" class="blog-template1"/>
            </div>
            <h4 class="title">STEP 2: REWRITE THE CONTENT</h4>
            <div class="main-form">
                <div class="form-group">
                    <label for="formGroupExampleInput"><p><b>TITLE</b></p></label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="title" placeholder="Title of your blog" value="<?= nl2br($blog['title']); ?>" required>
                </div>
                <div class="form-group" id='body1'>
                    <label for="exampleFormControlTextarea1"><p><b>BODY</b></p></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" style="resize:none;" name="body" rows="20" placeholder="Body text" required><?= nl2br($blog['body']); ?></textarea>
                </div>
                <div class="form-group hide" id="body2">
                    <label for="exampleFormControlTextarea1"><p><b>BODY 2</b></p></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="body2" style="resize:none;" rows="10" placeholder="Body text" ><?= nl2br($blog['body2']); ?></textarea>
                </div>

                <div class="form-group cat">
                    <label for="exampleFormControlSelect1"><p><b>CATEGORY</b></p></label>
                    
                    <?php if ($blog['category'] === 'CREATE'): ?>
                        <select class="form-control" name ="category" id="exampleFormControlSelect1" >
                            <option value="CREATE" selected="selected"><?= $blog['category']; ?></option>
                            <option value="RENOVATE">RENOVATE</option>
                            <option value="DECORATE">DECORATE</option>
                        </select>
                    <?php endif; ?>
                    
                    <?php if ($blog['category'] === 'RENOVATE'): ?>
                        <select class="form-control" name ="category" id="exampleFormControlSelect1" >
                            <option value="RENOVATE" selected="selected"><?= $blog['category']; ?></option>
                            <option value="CREATE">CREATE</option>
                            <option value="DECORATE">DECORATE</option>
                        </select>
                    <?php endif; ?>
                    
                    <?php if ($blog['category'] === 'DECORATE'): ?>
                        <select class="form-control" name ="category" id="exampleFormControlSelect1" >
                            <option value="DECORATE" selected="selected"><?= $blog['category']; ?></option>
                            <option value="CREATE">CREATE</option>
                            <option value="RENOVATE">RENOVATE</option>
                        </select>
                    <?php endif; ?>
                    
                    <?php if ($blog['category'] === '' || $blog['category'] === 'Choose a category'): ?>
                        <select class="form-control" name ="category" id="exampleFormControlSelect1" >
                            <option value='' selected="selected">Choose a category</option>
                            <option value="CREATE">CREATE</option>
                            <option value="RENOVATE">RENOVATE</option>
                            <option value="DECORATE">DECORATE</option>
                        </select>
                    <?php endif; ?>
                </div>

                <p><b> TAGS </b></p>
                <p>Tags previously used:</p>
                <p><?php
                    foreach ($tag as $newtag)
                        echo $newtag . "\n " . "\n ";
                    ?></p><br>
                <div class='checkbox-container'>

                    <div class="form-group form-check-inline" required>
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[0]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[0]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[1]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[1]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[2]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[2]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[3]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[3]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[4]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[4]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[5]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[5]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[6]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[6]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[7]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[7]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[8]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[8]; ?></label>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tags[9]; ?>">
                        <label class="form-check-label" for="exampleCheck1"><?php echo $tags[9]; ?></label>
                    </div>

                </div>
                <div id='img_container'>
                    <b>  <p class="img-title">IMAGES </p> </b>
                    <small class="file-type">Formats accepted: jpg/jpeg/png</small> 

                    <input type="hidden" 
                           name="MAX_FILE_SIZE" 
                           value="10000000" />

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload 3 images</label>
                        <input type="file" name="myfile[]" accept="image/*" class="form-control-file" id="exampleFormControlFile1" multiple >
                    </div>


                    <div class="form-group form-check-inline">
                        <input type="radio" class="form-check-input" id="exampleCheck1" name ="published" value="published" checked>
                        <label class="form-check-label" for="exampleCheck1">Publish blog</label>
                    </div>

                    <div class="form-group form-check-inline">
                        <input type="radio" class="form-check-input" id="exampleCheck1" name ="published" value="draft">
                        <label class="form-check-label" for="exampleCheck1">Save to drafts</label>
                    </div>
                    <p id="state">
                    <div class="pure-form pure-form-aligned container-btn">
                        <input type="submit" value="UPDATE" name= "submit" class="button" >
                    </div>  
                </div>
            </div>


        </form>
    </div>
</span>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

<script>

                        function show2() {
                            document.getElementById('body2').style.display = 'block';
                        }

                        function show1() {
                            document.getElementById('body2').style.display = 'none';
                        }

//                       
//                             var state = document.getElementsByName('published');
//                        var ischecked_method = false;
//                        for (var i = 0; i < state.length; i++) {
//                            if (state[i].checked) {
//                                ischecked_method = true;
//                                break;
//                            }
//                        };
//                        if (!ischecked_method) { //payment method button is not checked
//                            alert("Please choose Offline Payment Method");
//                        }
                        
</script>






