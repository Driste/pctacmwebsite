<?php
    $name = 'LAN Registration';
    include('header.php');
?>
    
    <div class="row">
        <div class="large-12 columns">
            <form data-abide>
                <fieldset>
                    <legend>LAN Registraion</legend>
                    <div class="row">
                        
                        <div class="large-6 small-6 columns">
                            <label>First Name
                                <input type="text" placeholder="Joe" required pattern="alpha" />
                            </label>
                            <small class="error">Your first name is required and must be a string.</small>
                        </div>
                        
                        <div class="large-6 small-6 columns">
                            <label>Last Name
                                <input type="text" placeholder="Shmo" required pattern="alpha" />
                            </label>
                            <small class="error">Your last name is required and must be a string.</small>
                        </div>
                        
                        <div class="large-12 columns">
                            <label>Email
                                <input type="email" placeholder="jss3@pct.edu" pattern="email" />
                            </label>
                            <small class="error">Please enter a correct email.</small>
                        </div>
                        
                        <div class="large-4 small-4 columns">
                            <label>Plain
                                <input type="number" placeholder="$1.50/slice" />
                            </label>
                        </div>
                        
                        <div class="large-4 small-4 columns">
                            <label>Pepperoni
                                <input type="number" placeholder="$1.75/slice" />
                            </label>
                        </div>
                        
                        <div class="large-4 small-4 columns">
                            <label>Sausage
                                <input type="number" placeholder="$1.75/slice" />
                            </label>
                        </div>
                        
                        <div class="large-2 columns">
                            <button type="submit">Submit</button>
                        </div>
                        
                    </div>
                </fieldset>
            </form>
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
