<?php 
require "lib.php";
userverifikasi();
$laycover = daftarLaycover();
$layservice = daftarLayservice();
$layprice = daftarLayprice();
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


    <!-- Panel Service -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default" id="service">
          <div class="panel-heading">
            <i class="fa fa-bar-chart-o fa-fw"></i> Service
          </div>
          <div class="panel-body">
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
                foreach ($layservice as $key => $layservice) {
                  ?>
                  <tr>
                    <td style="text-align: center;"><?php echo $x;?></td>
                    <td><?php echo $layservice['subjek']; ?></td>
                    <td><?php echo $layservice['description']; ?></td>
                    <td align="center" ">
                     <a type="button" href="#" class='btn btn-success btn-sm open_modal' id='<?php echo  $layservice['id']; ?>' style="
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
   <!-- /.panel service-->


   <center><p><i><strong>Coming Soon ...</strong></i></p></center>


 </div>
 <div>
  <?php include __DIR__.'/layout/footer.php'; ?>
</div>
</div>


<!-- modal edit service-->
<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

</div>


<!-- Javascript untuk popup modal Edit--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEdit").html(ajaxData);
        $("#ModalEdit").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>

<!-- Script JS -->
<?php include __DIR__.'/js.php'; ?>

</body>
</html>
