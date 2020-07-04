
    
                   
                
           <div class="login-container">
             <div style="margin-top:70px; margin-bottom:40px;">  <h1>Log in</h1> </div> 
            <form action="" method="post">
                <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" autocomplete='off' name="username" id="exampleInputPassword1" autofocus required>
                </div>  
                <div class="form-group">
                    <label for="exampleInputPassword1">Password&nbsp;</label>
                    <input type="password" class="form-control" id="password" name="password" autocomplete='off' required>                 
                </div>
                <br>
                <div>
                    <input type="submit" id="login-btn" class="btn btn-primary" name="submit" value="Log in">
                </div>
                <div>
                    <br><a href='?controller=security&action=loginUserSecurity'>Forgotten your password?</a>
                    <p>Don't have an account? <a href='?controller=register&action=registerUser'>Sign up now</a></p>
                </div>
            </form>
 
        </div>


    <style>
        
        #login-btn {
            
            background-color: #3F7CAC;
            border: 0.1px solid #3F7CAC;
            color: white;
            margin-bottom: 5px;
            padding: 10px;
        }
        
        .login-container {
            margin:auto;
            width:20%;
            padding: 8px;
        }
        
        #login-btn:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        </style>
        