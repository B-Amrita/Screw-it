
<div class="flex-container">

    <section>
        <span>
            <br>
            <br>
            <h1 style="text-align:center; margin-bottom: 40px;">Contact us </h1>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="">

    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="" style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
</span>
        </section>
        
</html>


<style>
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #FCA15F;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #70D6FF;
}

.container {
  width: 500px;
  border-radius: 0px;
  background-color: #ffffff;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  
}

</style>