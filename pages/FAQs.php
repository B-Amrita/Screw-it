<style>

    /* Style the buttons that are used to open and close the accordion panel */
    .accordion1 {
        background-color: #3F7CAC;
        color: #FFFFFF;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        border: none;
        outline: none;
        transition: 0.4s;
    }

    /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
    .active, .accordion1:hover {
        background-color: #70D6FF;
        color: #000000;
    }

    /* Style the accordion panel. Note: hidden by default */
    .panel1 {
        padding: 0 18px;
        background-color: white;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }
    .accordion1:after {
        content: '\002B'; /* Unicode character for "plus" sign (+) */
        font-size: 18px;
        color: #FFFFFF;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: '\2212'; /* Unicode character for "minus" sign (-) */
    }

</style>

<div class="container-fluid">

    <section class="intro-section-about"> 
        <h1>FAQs</h1>
    </section>

    <br>
    <div class="container">
        <button class="accordion1">What is the Screw it Blog about?</button>
        <div class="panel1">
            <br>
            <p>The Screw it Blog was developed and written by a group of ladies learning to code so that you can share your DIY queries. 
            To find out more about us, <a href="?controller=blogger&action=about"/>click here</a> to visit our About page. 
            </p>
        </div>
        
        <button class="accordion1">How do I register?</button>
        <div class="panel1">
            <br><p>You can register with us to interact with our bloggers and save your favourite blogs. Simply <a href="?controller=register&action=registerUser"/>click here</a> and fill out the form to sign up. </p>
        </div>
        
        <button class="accordion1">Why can't I log in?</button>
        <div class="panel1">
            <br>
            <p>There are several reasons why this could occur. First, ensure your username and password are correct. If they are, perhaps we've messed up the code, we're beginners so please be kind.  
            </p>
        </div>

        <button class="accordion1">How do I update my profile?</button>
        <div class="panel1">
            <br><p>Simply <a href="?controller=user&action=login"/>log in</a> and visit your dashboard in the member area. </p>
        </div>
    </div>  


</div>


<script>
    var acc = document.getElementsByClassName("accordion1");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            /* Toggle between adding and removing the "active" class,
             to highlight the button that controls the panel */
            this.classList.toggle("active");

            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

</script>
