        <?php
        include 'header.php';
        include 'config.php';
        ?>
 <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>Pixie E-commerce</h2>
              <div class="line-dec"></div>
              <p>Pixie- Faqja më e re dhe më në trend me modën. Duke filluar nga çantat, pantantollat, këpucët e shumë të tjera gjeni artikujt më në trend si për femra ashtu edhe për meshkuj.
              <br><br>Merita e fotos shkon për  <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.</p>
              <div class="main-button">
                <a href="#">Porositni tani!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Artikujt më të shitur</h1>
            </div>
          </div>
            <div class="col-md-12">
            <div class="owl-carousel owl-theme">
             
               <?php  
               $res =mysqli_query($conn, "SELECT * FROM produkt_gallery WHERE Featured='Po'");
               while($row=mysqli_fetch_array($res)){
                       ?>
           <a href="">
                <div class="featured-item">
                  <img src="<?= $row['foto']; ?>">
                  <h4><?= $row['emri_foto']; ?></h4>
                  <h6><?= $row['cmimi']; ?>&euro;</h6>
                      
                </div>     
                          </a>
               <?php } ?>

            </div>
            </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->
    
   

    

       <?php
       include 'footer.php';
        ?>
    