
                <h2>Who is your favourite Ryan?</h2>
<div id="forgot-container">

   
    
            <form action="" method="post">
                 <div class="form-group">
                    <label for="exampleInputPassword1">Username</label>
                    <input type="text" class="form-control" autocomplete='off' name="username" id="exampleInputPassword1" autofocus required>
                </div> 
                <div class="form-group">
                    <label for="exampleInputPassword1">Who is your favourite Ryan?</label>
                    <input type="password" class="form-control" id="password" name="answer_1" autocomplete='off' required>                 
                </div>
                <div>
                <br>
                    <input type="submit" id="login-btn" class="btn btn-primary" name="submit" value="Submit Answer">
                </div>
                <div>
                    <p>Don't have an account? </br><a href='?controller=register&action=registerUser'>Sign up now</a>.</p>
                </div>
              </form>

</div>

<style>
    
    #forgot-container{
        width: 20%;
        margin: auto;
        margin-bottom:0;
    }
    
    h2{
        text-align: center; 
        margin-bottom:40px; 
        margin-top: 70px;
    }
    
    #login-btn {
         background-color: #3F7CAC;
            border: 0.1px solid #3F7CAC;
            color: white;
            margin-bottom: 15px;
            padding: 8px;
    }
    
    #login-btn:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>