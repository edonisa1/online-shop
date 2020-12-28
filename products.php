<?php
include('config.php');
include('header.php');
    $id = $_GET['id']?? 'any default value, but probably null';;

if($id=="Femra")
{
    $query="SELECT * FROM produkt_gallery WHERE Kategoria='Femra'";
}
elseif($id=="Meshkuj")
{
    $query="SELECT* FROM produkt_gallery WHERE Kategoria='Meshkuj'";
}
else 
{
    $query="SELECT * FROM produkt_gallery";
}?>
<!-- Page Content -->
    <!-- Items Starts Here -->
    <div class="featured-page">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Produktet</h1>
            </div>
          </div>
          <div class="col-md-8 col-sm-12">
            <div id="filters" class="button-group">
                <button class="btn btn-primary" ><a href="products.php?id=">Të gjitha produktet</a></button>
                <button class="btn btn-primary" ><a href="products.php?id=Femra">Femra</a></button>
                <button class="btn btn-primary" ><a href="products.php?id=Meshkuj">Meshkuj</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="featured container no-gutter">

        <div class="row posts">
            
<?php
$sql = mysqli_query($conn, $query);
while($row=mysqli_fetch_array($sql))
{?>
    <div class="item new col-md-4">
                <a href="#">
                <div class="featured-item">
                  <img src="<?php echo $row['foto'] ?>">
                  <h4><?php echo $row['emri_foto'] ?></h4>
                  <h6><?php echo $row['cmimi'] ?>&euro;</h6>
                </div>
    </a>
          </div>
<?php } ?>
</div>
    </div>

    <div class="page-navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul>
              <li class="current-page"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Page Ends Here -->
<?php 
include('footer.php');
?>