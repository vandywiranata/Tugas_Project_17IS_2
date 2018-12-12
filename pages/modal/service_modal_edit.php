<?php
include "../lib.php";
userverifikasi();
$id=$_GET['id'];
$sql=mysqli_query($db, "SELECT * FROM layservice WHERE id='$id'");
while($layservice=mysqli_fetch_array($sql)){
    ?>


    <!-- modal edit service-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="serviceModalLabel">Edit Service</h1>
        </div>
        <div class="modal-body">
        	<form action="modal/modal_proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" hidden="">
                	<label for="id">ID</label>
                    <input name="id" id="id" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layservice['id']; ?>" />
                </div>
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" name="subjek" id="subjek" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layservice['subjek']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="Description" class="form-control"><?php echo $layservice['description']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="picture">Picture</label>
                    <input type="text" name="picture" id="picture" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layservice['picture']; ?>"/>
                </div>
                <div>
                    <button class="btn btn-danger btn-block"  type="reset" style="margin: 15px 0;">Reset</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="btneditservice">Save Changes</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</div>


