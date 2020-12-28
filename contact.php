<?php
include 'header.php';
?>

 <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="contact-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Na kontaktoni</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div id="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d748437.5812710847!2d20.29848325506406!3d42.88161747459645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135345089c22ba8f%3A0xfcbdd4727a0a776c!2sUniversity%20of%20Mitrovica%20%22Isa%20Boletini%22!5e0!3m2!1sen!2s!4v1591889972522!5m2!1sen!2s" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>              
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <div class="container">
                <form id="contact"  method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input name="emri" type="text" class="form-control" id="name" placeholder="Emri juaj..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" placeholder="Email-i juaj..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="subjekti" type="text" class="form-control" id="subject" placeholder="Subjekti..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="mesazhi" rows="6" class="form-control" id="message" placeholder="Mesazhi juaj..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" name="dergo" id="form-submit" class="button">Dërgo mesazhin</button>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <div class="share">
                        <h6>Mund të na ndjekni edhe në rrjetet sociale: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <?php
    if(isset($_POST['dergo'])) {
        include_once 'function.php';  
        $obj = new Contact();
        $res = $obj->kontaktet($_POST); 
        if($res==true) {
            echo "<script>alert('Pyetesi u dergua me sukses. Faleminderit!')</script>";
        }
        else {
             echo "<script>alert('Diqka shkoi keq. Provoni përsëri.')</script>";
        }
    }
    
include 'footer.php';

?>