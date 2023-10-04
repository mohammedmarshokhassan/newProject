
<!DOCTYPE html><html lang="en">
  <head itemscope="" itemtype="http://schema.org/WebSite">
     
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Preview Bootstrap snippets. Register form with particles js. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="keywords" content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
     
    <meta property="twitter:account_id" content="2433978487" />
    <meta name="twitter:card" content="summary"><meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bootdey"><meta name="twitter:creator" content="@bootdey">
    <meta name="twitter:title" content="Preview Bootstrap  snippets. Register form with particles js">
    
    <meta name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/ ">
     
    
    
    <meta property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-653.png">
    <meta property="og:description" content="Preview Bootstrap snippets. Register form with particles js. Copy and paste the html, css and js code for save time, build your app faster and responsive">
     
    
    
    
    </script> 
  </head>
    <body>
      <div id="snippetContent">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
      <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'>

      </script> 
      <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
       <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>


       

        <div id="home" class="jumbotron jumbotron-register">
          <div id="particles-js">
            <canvas class="particles-js-canvas-el" width="1409" height="456" style="width: 100%; height: 100%;">
          </canvas>
            </div>
            <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
     <img style="width :100px" src="z.png" alt="logo">

     <link rel="stylesheet" href="style.css">
   
  </div>
</nav>
            <div class="container center-vertically-holder">
              <div class="center-vertically">
                <div class="col-sm-7 col-lg-6 mt40-xs">
                <h1 class="mb30 no-margin-top scaleReveal" data-sr-id="45">
                  <strong>Register Now!!</strong> Its FREE</h1>
                <h2 style = "color:black ;">Free webinar on coming sunday, 26th Feb
</h2>
                  <h4>Confused on what to do after 12th?? Attend the Webinar to get clarity</h4>
                  <h3>Services we offer </h3>
                  <p class="bottomReveal" data-sr-id="1" >  
                   <li> Assistance on application and visa process  </li>
                   <li>Assistance on scholarship and health insurance </li>
                   <li> Guidance in choosing the right career path</li>
                   <li>Create a career plan as per your interests & preferences</li>
                   <li> Clarifying your Academic goals </li>
                   <li>Finding academic options under your budget </li>

                  </p>
                  
                  
                  <button id = "Tom" ><a id = "HT" href="tel:  +91 8148983339"> +91 8148 983 339 </a></button> </p>
                </div>

                  <div class="col-sm-5 col-lg-5 col-lg-offset-1 mt40-xs"  style="margin-bottom: 100px;">
                    <form role="form" id="register_form" class="register-form mb40-xs" method ="post">

                      <h3 class="no-margin-top mb20">Register For Free</h3>

                      <div class="form-group"> 
                      
                        <input type="text" class="form-control" name="fname" placeholder="First name" required="required">                     
                      </div>

                      <div class="form-group"> 
                       
                        <input type="text" class="form-control" name="lname" placeholder="Last name" required="required">
                      </div>

                      <div class="form-group"> 
                      
                        <input type="email" class="form-control" name="email" placeholder="Email Address " required="required">
                      </div>

                        <div class="form-group">
                         
                          <input type="phone" class="form-control" name="phone" placeholder="phone" required="required" maxlength = "10" >
                          </div>
                          <select class="registerform" name ="colour">
                            <option  id = "HG"  > Preferred Time Slot</option>
                              <option  id = "HG" value ="1">4:00-4:45</option>
                                 <option  id = "HG" value ="2">5:00-5:45</option>
                                  <option  id = "HG" value ="3">6:00-6:45</option>
                            </select>                          
                              <br>
                            <label for="comment" id = "HG"  >Source:</label>
                            <br>                            
      <input class="form-check-input" type="checkbox"  name="option1" value="red"  autocomplete="off" style="margin-left: 20px;">
      <label class="form-check-label"  id = "HG"> Instagram</label><br>
      <input class="form-check-input" type="checkbox" name="option1" value="blue"  autocomplete="off"  style="margin-left: 20px;">
      <label class="form-check-label"  id = "HG">Facebook</label><br>
      <input class="form-check-input" type="checkbox" name="option1" value="green "  autocomplete="off"   style="margin-left: 20px;">
      <label class="form-check-label"  id = "HG">Friends</label><br>
      <input class="form-check-input" type="checkbox" name="option1" value="yellow"  autocomplete="off"   style="margin-left: 20px;">
      <label class="form-check-label"  id = "HG">Other</label>
      </select>
                                <br>
                              <div class="form-group no-margin-bottom mt20" style= "padding-left: 140px;">
                                 <button type="submit" class="btn"    >Submit</button>
                              </div>
                              </form>
                              </div>
                              </div>
                              </div>
                              </div>
 



 </div> 
  
  </body>
  </html>
  <?php

// servername => localhost
// username => root
// password => empty
// database name => staff
$conn = mysqli_connect("localhost", "root", "", "staff");

// Check connection
if($conn === false){
  die("ERROR: Could not connect. "
    . mysqli_connect_error());
}

// Taking all 5 values from the form data(input)
$fname  =isset ($_POST['fname']) ? $_POST [ 'fname'] : 'fname';;
$lname  =isset ($_POST['lname']) ? $_POST [ 'lname'] : 'lname';;
$email  =isset($_POST['email']) ? $_POST [ 'email'] : 'email';;
$phone  =isset ($_POST['phone']) ? $_POST [ 'phone'] : 'phone';
$colour =isset($_POST['colour']) ? $_POST['colour'] : 'colour';

// Performing insert query execution
// here our table name is college`
$sql = "INSERT INTO college VALUES ('$fname',
  '$lname','$email','$phone','$colour')";

if(mysqli_query($conn, $sql)){
  echo '
  <script>
  {
    alert("I am an alert box!");
  }
  </script>
  ';  
 
} else{
  echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
}
// Close connection
mysqli_close($conn);

?>
<script>
    
</script>