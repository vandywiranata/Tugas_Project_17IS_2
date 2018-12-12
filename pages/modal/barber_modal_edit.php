<?php
include "../lib.php";
$id=$_GET['id'];
$sql=mysqli_query($db, "SELECT * FROM laybarber WHERE id='$id'");
while($laybarber=mysqli_fetch_array($sql)){
    ?>


    <!-- modal edit price-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="barberModalLabel">Edit Barber</h1>
        </div>
        <div class="modal-body">
        	<form action="modal/modal_proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" hidden="">
                	<label for="id">ID</label>
                    <input name="id" id="id" class="form-control" required="required" autofocus="autofocus" value="<?php echo $laybarber['id']; ?>" />
                </div>
                <div class="form-group">
                    <label for="barber">Barber</label>
                    <input type="text" name="barber" id="barber" class="form-control" required="required" autofocus="autofocus" value="<?php echo $laybarber['barber']; ?>"/>
                </div>
               <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control" required="required" autofocus="autofocus" value="<?php echo $laybarber['description']; ?>"/>
                </div>
                <div>
                    <button class="btn btn-danger btn-block"  type="reset" style="margin: 15px 0;">Reset</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="btneditbarber">Save Changes</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</div>
