
<div class="flex-container">

<!--    <section class="intro-section-about"> 
        <h1>Register with us </h1>
    </section>-->

    <section>
        <span>
            <h1 style="text-align:center; margin-bottom: 40px;">Register with us </h1>

            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return Validate(this);">
                
                <div class="form-group">
                    <label for="exampleInputPassword1">First name</label>
                    <input type="text" class="form-control" autocomplete='off' name="user_fn" id="exampleInputPassword1" value="" required>
                </div>
              
                <div class="form-group">
                    <label for="exampleInputPassword1">Last name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  name="user_ln" autocomplete='off' required value="">
                </div>

                 <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                           title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete='off' required>                 
                </div>
                <div id="message">
                <h3 style="font-size:14px;">Password must contain the following:</h3>
                <p style="font-size:12px; margin-bottom:0;" id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p style="font-size:12px; margin-bottom:0;" id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p style="font-size:12px; margin-bottom:0;" id="number" class="invalid">A <b>number</b></p>
                <p style="font-size:12px; margin-bottom:0;" id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" id="exampleInputPassword1 username" name="username" autocomplete='off' required value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" autocomplete='off' required value="">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Date of Birth</label>
                    <input style="width: 70%;" type="date" class="form-control" id="exampleInputPassword1" name="dob" autocomplete='off' required value="">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Security question: Who is your favourite Ryan?</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="answer_1" autocomplete='off' required value="">
                </div>
                 <div>
                        <label>Upload a profile pic</label><br/>
                        <small class="file-type">Formats accepted: jpg/jpeg/png</small><br/><br/>
                        <input type="hidden" 
                               name="MAX_FILE_SIZE" 
                               value="10000000"
                               />
                        <input type="file" name="profile_pic" /><br>
                       
                    </div>
                 <input type="submit" class="btn " id="reg-button" value="Register Now" />
                 </br>  <p style="font-size:12px;">Already have an account? <a href='?controller=login&action=login'>Login here</a></p>


<!--            <p>Enter your details to create an account</p>-->
<!--            <div>
                <form action="" method="POST" enctype="multipart/form-data"
                      onsubmit="return Validate(this);">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" autocomplete='off' required value="">
                    </div> 
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" autocomplete='off' required>
                    </div>
                    <div>
                        <label>First Name</label>
                        <input type="text" name="user_fn" autocomplete='off' required value="">
                    </div> 
                    <div>
                        <label>Last Name</label>
                        <input type="text" name="user_ln" autocomplete='off' required value="">
                    </div> 
                    <div>
                        <label>Email Address</label>
                        <input type="email" name="email" autocomplete='off' required value="">
                    </div> 
                    <div>
                        <label>Date of Birth</label>
                        <input type="date" name="dob" autocomplete='off' required value="">
                    </div> 
                    <div>
                        <label>Security Question: Who is your favourite Ryan?</label>
                        <input type="text" name="answer_1" autocomplete='off' required value="">
                    </div> 
                    <div>
                        <label>Upload a profile pic</label>
                        <small class="file-type">Formats accepted: jpg/jpeg/png</small> 
                        <input type="hidden" 
                               name="MAX_FILE_SIZE" 
                               value="10000000"
                               />
                        <input type="file" name="profile_pic" /><br><br>
                        <input type="submit" value="Register Now" />
                    </div>


                        <div>
                            <br>
                            <input type="submit" name="submit" value="Register Now">
                        </div> 
                    <br><p>Already have an account? <a href='?controller=login&action=login'>Login here</a></p>

            </div> -->
            
            </form>
        </span>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <script>
        var myInput = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function () {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function () {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function () {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

    </script>
    <script>
        var _validFileExtensions = [".jpg", ".jpeg", ".png"];
        function Validate(oForm) {
            var arrInputs = oForm.getElementsByTagName("input");
            for (var i = 0; i < arrInputs.length; i++) {
                var oInput = arrInputs[i];
                if (oInput.type == "file") {
                    var sFileName = oInput.value;
                    if (sFileName.length > 0) {
                        var blnValid = false;
                        for (var j = 0; j < _validFileExtensions.length; j++) {
                            var sCurExtension = _validFileExtensions[j];
                            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                                blnValid = true;
                                break;
                            }
                        }

                        if (!blnValid) {
                            alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                            return false;
                        }
                    }
                }
            }

            return true;
        }
    </script>

    <style>
        h1 {
            margin-top: 60px;
        }
        
        #message{
            margin-bottom: 15px;
        }
        
        .invalid {
            font-size:0.4em;
        }
        
        section{
            margin: auto;
            width: 25%
        }
        
        .intro-section-about{
            margin: auto;
            width:70%;
        }
        
        #reg-button{
            background-color: #3F7CAC;
            border: 0.1px solid #3F7CAC;
            color: white;
            padding: 8.1px;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        
        #reg-button:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        

    </style>

