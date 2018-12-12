<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
	$(document).ready(function() {
		$('#myTables').DataTable({
			responsive: true
		});
		$('#titleTables').DataTable({
			responsive: true
		});
		$('#homeTables').DataTable({
			responsive: true
		});
		$('#serviceTables').DataTable({
			responsive: true
		});
		$('#priceTables').DataTable({
			responsive: true
		});
	});
</script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<!-- <script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script> -->

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Javascript dashboard confirm_complete--> 
<script type="text/javascript">
	function confirm_complete(complete_url)
	{
		$('#modal_complete').modal('show', {backdrop: 'static'});
		document.getElementById('complete_link').setAttribute('href' , complete_url);
	}
</script>

<!-- Javascript modal dashboard edit orderlist--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal_orderlist").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal/orderlist_modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEditOrderlist").html(ajaxData);
        $("#ModalEditOrderlist").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>

<!-- Javascript modal layheadcover edit title--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal_title").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal/title_modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEditTitle").html(ajaxData);
        $("#ModalEditTitle").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>

<!-- Javascript modal layheadcover edit cover--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal_cover").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal/cover_modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEditCover").html(ajaxData);
        $("#ModalEditCover").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>

<!-- Javascript modal layheadcover edit service--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal_service").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal/service_modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEditService").html(ajaxData);
        $("#ModalEditService").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>

<!-- Javascript modal layheadcover edit price--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal_price").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal/price_modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEditPrice").html(ajaxData);
        $("#ModalEditPrice").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>

<!-- Javascript modal layheadcover edit barber--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal_barber").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal/barber_modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEditBarber").html(ajaxData);
        $("#ModalEditBarber").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>

<!-- Javascript modal layheadcover edit faq--> 
<script type="text/javascript">
 $(document).ready(function () {
   $(".open_modal_faq").click(function(e) {
    var m = $(this).attr("id");
    $.ajax({
      url: "modal/faq_modal_edit.php",
      type: "GET",
      data : {id: m,},
      success: function (ajaxData){
        $("#ModalEditFaq").html(ajaxData);
        $("#ModalEditFaq").modal('show',{backdrop: 'true'});
      }
    });
  });
 });
</script>