<?php
    $name = 'BYOC Registration';
    include('header.php');
?>

    <div class="row">
        <div class="large-12 columns">
            <?php
                //Pre post
                if(!('POST' == $_SERVER['REQUEST_METHOD'])){
            ?>
            <form data-abide action="byocreg.php" method="POST">
                <br /><p><a href="byoc.html">← BYOC Homepage</a></p>
                <fieldset>
                    <legend>BYOC Registration</legend>
                    <div class="row">
                        
                        <div class="large-6 small-6 columns">
                            <label>First Name
                                <input type="text" placeholder="Joe" name="fName" id="fName" required pattern="alpha" />
                            </label>
                            <small class="error">Your first name is required and must be a string.</small>
                        </div>
                        
                        <div class="large-6 small-6 columns">
                            <label>Last Name
                                <input type="text" placeholder="Shmo" name="lName" id="lName" required pattern="alpha" />
                            </label>
                            <small class="error">Your last name is required and must be a string.</small>
                        </div>
                        
                        <div class="large-12 columns">
                            <label>Email
                                <input type="email" placeholder="jss3@pct.edu" name="email" id="email" pattern="email" />
                            </label>
                            <small class="error">Please enter a correct email.</small>
                        </div>
                        
                        <div class="large-12 columns">
                            <label>PCT Student Number (Non-Students can skip this)
                                <input type="number" placeholder="777777777" name="pctId" id="pctId"/>
                            </label>
                            
                        </div>
                        
                        <hr />
                        
                        <div class="large-12 columns">
                            <label>What will you be bringing?</label><br/>
                                <input id="desktop" type="checkbox" name="box[1]">    <label for="desktop">Desktop Computer</label><br/>
                                <input id="laptop" type="checkbox" name="box[2]">     <label for="laptop">Laptop Computer</label><br/>
                                <input id="ps" type="checkbox" name="box[3]">         <label for="ps">Playstation 3 or 4</label><br/>
                                <input id="xbox" type="checkbox" name="box[4]">       <label for="xbox">Xbox 360 or One</label><br/>
                                <input id="handheld" type="checkbox" name="box[5]">   <label for="handheld">Handheld Gaming Device</label><br/>
                        </div>
                        
                        <hr />
                        
                    </div>
                    
                        <div class="row">
                            
                            <div class="large-12 columns">
                                <label>What games would you like to see as a tournament?
                                    <textarea style="resize: none;" rows="8" name="games" id="games" placeholder="Dota 2"></textarea>
                                </label>
                            </div>
                            
                        </div>
                    
                        <hr />
                    
                    <div class="row right">
                        
                        <div class="large-12 columns">
                            <button type="submit">Submit</button>
                        </div>
                        
                    </div>
                </fieldset>
            </form>
            
            <?php
                }else{
                $db = new mysqli("localhost", "test", "Jm6uvBSdRCy6bp2E", "registration");
                if($db->connect_errno){
                    echo '<p style="color: red;">Failed to connect to MySQL: '.mysqli_connect_error().'</p>';
                }
                    
                $bring = '';
                  
                foreach($_POST['box'] as $id=>$check){
                    if ($check == 'on'){
                        switch ($id) {
                            case 1:
                                $bring .= 'Desktop Computer, ';
                                break;
                            case 2:
                                $bring .= 'Laptop Computer, ';
                                break;
                            case 3:
                                $bring .= 'Playstation, ';
                                break;
                            case 4:
                                $bring .= 'Xbox, ';
                                break;
                            case 5:
                                $bring .= 'Handheld';
                                break;
                        }
                    }
                }
                
                $db->query("INSERT INTO byocreg(fName, lName, email, pctId, bringing, games) VALUES ('$_POST[fName]', '$_POST[lName]', '$_POST[email]', $_POST[pctId], '$bring', '$_POST[games]')");
                
                echo '<p><br/>Thank you!</p><a href="byocreg.php" class="button">New Registration</a>';
                    
                }
            ?>
            
        </div>
    </div>
 
 
  <!-- Footer -->
 <hr />
  <footer class="row">
  <div class="large-12 columns">
      <div class="row">
 
        <div class="large-6 columns">
            <p>© Copyright PCT ACM | pctacm.com | All rights Reserved.</p>
        </div>
 
        <div class="large-6 columns">
            <ul class="inline-list right">
                
            </ul>
        </div>
 
      </div>
  </div>
  </footer>
    
      
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
