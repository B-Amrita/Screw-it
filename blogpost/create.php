
<meta charset="UTF-8">
<body>

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

        .container-btn {

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

    <h2 style="text-align: center; margin-top: 50px;">CREATE A BLOG POST</h2>

    <span>

        <div class=' form-container'>
            <form action="" method="POST" class="w3-container" accept-charset="utf-8" enctype="multipart/form-data">
                <h4 class="title">STEP 1: CHOOSE A LAYOUT</h4>
                <div class="layout">
                    <div class="form-check form-check-inline" id="Check1">
                        <input class="form-check-input" type="radio"  id="inlineRadio1 layout1" onclick="show2();" name="layout" checked value="1">
                        <label style="font-size:15px;"class="form-check-label label1" for="inlineRadio1">layout 1</label>
                    </div>
                    <div class="form-check form-check-inline" id="Check2">
                        <input class="form-check-input" type="radio" id="inlineRadio2 layout2"name="layout" onclick="show1();" value="2">
                        <label style="font-size:15px;" class="form-check-label label1" for="inlineRadio2">layout 2</label>
                    </div>
                </div>

                <div id="template-container" class="column">              
                    <img src="views/images/layout.png" alt="layout 1" class="blog-template1"/>
                </div>
                <h4 class="title">STEP 2: WRITE THE CONTENT</h4>
                <div class="main-form">
                    <div class="form-group">
                        <label for="formGroupExampleInput"><p><b>TITLE</b></p></label>
                        <input type="text" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="formGroupExampleInput" name="title" placeholder="Title of your blog" required>
                    </div>

                    <div class="form-group" id='body1'>
                        <label for="exampleFormControlTextarea1"><p><b>BODY</b></p></label>
                        <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded " style="resize:none;" id="exampleFormControlTextarea1" name="body" rows="20" placeholder="Body text" required></textarea>
                    </div>

                    <div class="form-group hide" id="body2">
                        <label for="exampleFormControlTextarea1"><p><b>BODY 2</b></p></label>
                        <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded" style="resize:none;" id="exampleFormControlTextarea1" name="body2" rows="10" placeholder="Body text" ></textarea>
                    </div>

                    <div class="form-group cat">
                        <label for="exampleFormControlSelect1"><p><b>CATEGORY</b></p></label>
                        <select class="form-control" name ="category" id="exampleFormControlSelect1" >
                            <option selected="selected">Choose a category</option>
                            <option value="CREATE">CREATE</option>
                            <option value="RENOVATE">RENOVATE</option>
                            <option value="DECORATE">DECORATE</option>

                        </select>
                    </div>

                    <p><b> TAGS </b></p>
                    <div class='checkbox-container '>

                        <div class="form-group form-check-inline " required>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[0]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[0]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[1]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[1]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[2]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[2]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[3]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[3]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[4]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[4]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[5]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[5]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[6]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[6]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[7]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[7]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[8]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[8]; ?></label>
                        </div>
                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="tag[]" value="<?php echo $tag[9]; ?>">
                            <label class="form-check-label" for="exampleCheck1"><?php echo $tag[9]; ?></label>
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
                            <input type="file" name="myfile[]"  class="form-control-file" id="file1" accept="image/*" multiple><br>
                        </div>

                        <div class="form-group form-check-inline">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name ="published" value="draft">
                            <label class="form-check-label" for="exampleCheck1">Save to drafts</label>
                        </div>
                        <div class="pure-form pure-form-aligned container-btn">
                            <input type="submit" value="SUBMIT" id="checkfields" name= "submit" class="button" >
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

<script type="text/javascript">

                            function show2() {
                                document.getElementById('body2').style.display = 'block';
                            }

                            function show1() {
                                document.getElementById('body2').style.display = 'none';
                            }


//  function validateImage("file1") {
//    var formData = new FormData();
// 
//    var file = document.getElementById("file1").files[0];
// 
//    formData.append("Filedata", file);
//    var t = file.type.split('/').pop().toLowerCase();
//    if (t != "jpeg" && t != "jpg" && t != "png") {
//        alert('Please select a valid image file');
//        document.getElementById("file1"").value = '';
//        return false;
//    }
//    if (file.size > 1024000) {
//        alert('Max Upload size is 1MB only');
//        document.getElementById("file1").value = '';
//        return false;
//    }
//    return true;
//}


// var _validFileExtensions = [".jpg", ".jpeg", ".png"];
//        function Validate(oForm) {
//            var arrInputs = oForm.getElementsByTagName("input");
//            for (var i = 1; i < arrInputs.length; i++) {
//                var oInput = arrInputs[i];
//                if (oInput.type == "file") {
//                    var sFileName = oInput.value;
//                    if (sFileName.length > 0) {
//                        var blnValid = false;
//                        for (var j = 0; j < _validFileExtensions.length; j++) {
//                            var sCurExtension = _validFileExtensions[j];
//                            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
//                                blnValid = true;
//                                break;
//                            }
//                        }
//
//                        if (!blnValid) {
//                            alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
//                            return false;
//                        }
//                    }
//                }
//            }
//
//            return true;
//        }



</script>




