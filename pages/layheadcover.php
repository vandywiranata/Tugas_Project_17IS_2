<?php 
require "lib.php";
userverifikasi();
$laytitle   = daftarlaytitle();
$laycover   = daftarLaycover();
$layservice = daftarLayservice();
$layprice   = daftarLayprice();
$layfaq     = daftarLayfaq();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <?php include __DIR__.'/head.php'; ?>
</head>

<body>

 <div id="wrapper">
  <?php include __DIR__.'/layout/navbar.php'; ?>
  <?php include __DIR__.'/layout/sidebar.php'; ?>
  <div id="page-wrapper">


    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Header Cover</h1>
      </div>
    </div>

    <!-- Panel Title -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default" id="home">
          <div class="panel-heading">
            <i class="fa fa-gears fa-fw"></i> Title
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr style="text-align: center;">
                    <td>No</td>
                    <td style="width: 150px">Special Feature</td>
                    <td style="width: 150px">Price</td>
                    <td style="width: 150px">Special Team</td>
                    <td style="width: 150px">Testimonial</td>
                    <td style="width: 150px">FAQ</td>
                    <td style="width: 150px">Appointment</td>
                    <td style="width: 12%;">Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $x = 1;
                  foreach ($laytitle as $key => $laytitle) {
                    ?>
                    <tr>
                      <td style="text-align: center;"><?php echo $x;?></td>
                      <td><?php echo $laytitle['specialfeature']; ?></td>
                      <td><?php echo $laytitle['price']; ?></td>
                      <td><?php echo $laytitle['specialteam']; ?></td>
                      <td><?php echo $laytitle['testimonial']; ?></td>
                      <td><?php echo $laytitle['faq']; ?></td>
                      <td><?php echo $laytitle['appointment']; ?></td>
                      <td align="center">
                        <a type="button" href="#" class='btn btn-warning btn-sm open_modal_title' id='<?php echo  $laytitle['id']; ?>' style="width: 80%;">Edit</a>
                      </td>
                    </tr>
                    <?php
                    $x++; 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.panel title-->

    <!-- Panel Home -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default" id="home">
          <div class="panel-heading">
            <i class="fa fa-gear fa-fw"></i> Home
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr style="text-align: center;">
                    <td>No</td>
                    <td>Subject1</td>
                    <td>Subject2</td>
                    <td>Description</td>
                    <td style="width: 12%;">Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $x = 1;
                  foreach ($laycover as $key => $laycover) {
                    ?>
                    <tr>
                      <td style="text-align: center;"><?php echo $x;?></td>
                      <td><?php echo $laycover['subjek1']; ?></td>
                      <td><?php echo $laycover['subjek2']; ?></td>
                      <td><?php echo $laycover['description']; ?></td>
                      <td align="center" ">
                       <a type="button" href="#" class='btn btn-warning btn-sm open_modal_cover' id='<?php echo  $laycover['id']; ?>' style="
                       width: 80%;">Edit</a>
                     </td>
                   </tr>
                   <?php
                   $x++; 
                 }
                 ?>
               </tbody>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- /.panel home-->

   <!-- Panel Service -->
   <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default" id="service">
        <div class="panel-heading">
          <i class="fa fa-gear fa-fw"></i> Service
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table width="100%" class="table table-striped table-bordered table-hover">
              <thead>
                <tr style="text-align: center;">
                  <td>No</td>
                  <td>Subject</td>
                  <td>Description</td>
                  <td>Picture</td>
                  <td style="width: 12%;">Action</td>
                </tr>
              </thead>
              <tbody>
                <?php 
                $x = 1;
                foreach ($layservice as $key => $layservice) {
                  ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $x;?></td>
                    <td><?php echo $layservice['subjek']; ?></td>
                    <td><?php echo $layservice['description']; ?></td>
                    <td><?php echo $layservice['picture']; ?></td>
                    <td align="center" ">
                     <a type="button" href="#" class='btn btn-warning btn-sm open_modal_service' id='<?php echo  $layservice['id']; ?>' style="
                     width: 80%;">Edit</a>
                   </td>
                 </tr>
                 <?php
                 $x++; 
               }
               ?>
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- /.panel service-->


 <!-- Panel Price -->
 <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default" id="price">
      <div class="panel-heading">
        <i class="fa fa-gear fa-fw"></i> Price
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered table-hover">
            <thead>
              <tr style="text-align: center;">
                <td>No</td>
                <td>Subject</td>
                <td>Pricing</td>
                <td>Description1</td>
                <td>Description2</td>
                <td>Description2</td>
                <td>Description4</td>
                <td>Description5</td>
                <td style="width: 12%;">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php 
              $x = 1;
              foreach ($layprice as $key => $layprice) {
                ?>
                <tr>
                  <td style="text-align: center;"><?php echo $x;?></td>
                  <td><?php echo $layprice['subjek']; ?></td>
                  <td><?php echo $layprice['pricing']; ?></td>
                  <td><?php echo $layprice['description1']; ?></td>
                  <td><?php echo $layprice['description2']; ?></td>
                  <td><?php echo $layprice['description3']; ?></td>
                  <td><?php echo $layprice['description4']; ?></td>
                  <td><?php echo $layprice['description5']; ?></td>
                  <td align="center" ">
                   <a type="button" href="#" class='btn btn-warning btn-sm open_modal_price' id='<?php echo  $layprice['id']; ?>' style="
                   width: 80%;">Edit</a>
                 </td>
               </tr>
               <?php
               $x++; 
             }
             ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- /.panel price-->


<!-- Panel Barber -->
 <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default" id="barber">
      <div class="panel-heading">
        <i class="fa fa-gear fa-fw"></i> Barber
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered table-hover">
            <thead>
              <tr style="text-align: center;">
                <td>No</td>
                <td>Barber Name</td>
                <td>Jobs Description</td>
                <td style="width: 12%;">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php 
              $x = 1;
              $sql = mysqli_query($db, "SELECT * FROM laybarber");
              while ($hsl = mysqli_fetch_array($sql)) {
                ?>
                <tr>
                  <td style="text-align: center;"><?php echo $x;?></td>
                  <td><?php echo $hsl['barber']; ?></td>
                  <td><?php echo $hsl['description']; ?></td>
                  <td align="center" ">
                   <a type="button" href="#" class='btn btn-warning btn-sm open_modal_barber' id='<?php echo  $hsl['id']; ?>' style="
                   width: 80%;">Edit</a>
                 </td>
               </tr>
               <?php
               $x++; 
             }
             ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- /.panel barber-->


<!-- Panel FAQ -->
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default" id="faq">
      <div class="panel-heading">
        <i class="fa fa-gear fa-fw"></i> FAQ
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table width="100%" class="table table-striped table-bordered table-hover">
            <thead>
              <tr style="text-align: center;">
                <td>No</td>
                <td>Subject</td>
                <td>Description</td>
                <td style="width: 12%;">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php 
              $x = 1;
              foreach ($layfaq as $key => $layfaq) {
                ?>
                <tr>
                  <td style="text-align: center;"><?php echo $x;?></td>
                  <td><?php echo $layfaq['question']; ?></td>
                  <td><?php echo $layfaq['answer']; ?></td>
                  <td align="center" ">
                   <a type="button" href="#" class='btn btn-warning btn-sm open_modal_faq' id='<?php echo  $layfaq['id']; ?>' style="
                   width: 80%;">Edit</a>
                 </td>
               </tr>
               <?php
               $x++; 
             }
             ?>
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- /.panel service-->
<center><p><i><b>Coming Soon ...</b></i></p></center>
</div>
<div>
  <?php include __DIR__.'/layout/footer.php'; ?>
</div>
</div>


<!-- modal edit title-->
<div id="ModalEditTitle" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="titleModalLabel" aria-hidden="true">
</div>


<!-- modal edit cover-->
<div id="ModalEditCover" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="coverModalLabel" aria-hidden="true">
</div>


<!-- modal edit service-->
<div id="ModalEditService" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="serviceModalLabel" aria-hidden="true">
</div>


<!-- modal edit price-->
<div id="ModalEditPrice" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="priceModalLabel" aria-hidden="true">
</div>


<!-- modal edit barber-->
<div id="ModalEditBarber" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="barberModalLabel" aria-hidden="true">
</div>


<!-- modal edit faq-->
<div id="ModalEditFaq" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="faqModalLabel" aria-hidden="true">
</div>


<!-- Script JS -->
<?php include __DIR__.'/js.php'; ?>

</body>
</html>
