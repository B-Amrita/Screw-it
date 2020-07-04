

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Update your details</title>
    </head>
    <body>


<div class="add-form"> 
               
                
             <h2>Update Your Details</h2>

              
                
                
                <form name="updateUser" class="updateUser" id="updateUser" action = "" method = "POST">

                    
                <div class="form-group">
                <div class="row">
                <div class="col">
                First Name:<input  type="text" class="form-control" placeholder="First Name"  name="firstName" id="firstName" value="<?=$contact['user_FN']?>" required autofocus="true" />              
                </div> 
                <div class="col">
                Last Name:<input  type="text" class="form-control" placeholder="Last Name"  name="lastName" id="lastName" value="<?=$contact['user_SN']?>" required autofocus="true" />        
              </div>
                </div></div>
                <br/>
                
                
                
                <div class="form-group">
                <div class="row">
                <div class="col">
                User Name:<input  type="text" class="form-control" placeholder="Username"  name="userName" id="userName" value="<?=$contact['user_UN']?>" required autofocus="true" />          
                   </div> 
                <div class="col">
                Email:<input  type="text" class="form-control" placeholder="Email"  name="email" id="email" value="<?=$contact['user_EMAIL']?>" required autofocus="true" />        
              </div>
                </div></div>
                <br/>
                
                
               <div class="form-group">
                <div class="row">
                <div class="col">
                Date of Birth:<input  type="text" class="form-control" placeholder="Date of Birth"  name="dob" id="dob" value="<?=$contact['user_DOB']?>" required autofocus="true" />          
                   </div> 
                <div class="col">
                Telephone No.:<input  type="text" class="form-control" placeholder="Telephone No."  name="telNo" id="telNo" value="<?=$contact['user_TEL']?>" required autofocus="true" />        
              </div>
                </div></div>
                <br/> 
               
                

                
              
           <input type="submit" value=" Update details " name="updateMem" id="submit-button" class="btn btn-primary" onclick="clearField()" />

                </form> 
                </div>
    </body>
</html>
