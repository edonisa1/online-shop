<!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Abonohuni në PIXIE tani!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Për të qenë i njoftuar i pari rreth ofertave më të reja!</p>
              <div class="container">
                <form id="subscribe" action="" method="post">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Email-i juaj..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" name="abonohu" id="form-submit" class="button">Abonohuni tani!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->
     <?php
    if(isset($_POST['abonohu'])) {
        include_once 'function2.php';  
        $obj = new Contact();
        $res = $obj->subscribe($_POST); 
        if($res==true) {
            echo "<script>alert('U abonuat me sukses.Faleminderit')</script>";
        }
        else {
             echo "<script>alert('Jeni abonuar me heret me kete email. Provoni email tjeter.')</script>";
        }
    }
    ?>