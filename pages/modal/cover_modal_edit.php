<?php
include "../lib.php";
$id=$_GET['id'];
$sql=mysqli_query($db, "SELECT * FROM laycover WHERE id='$id'");
while($laycover=mysqli_fetch_array($sql)){
    ?>


    <!-- modal edit cover-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="coverModalLabel">Edit Cover</h1>
        </div>
        <div class="modal-body">
        	<form action="modal/modal_proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" hidden="">
                	<label for="id">ID</label>
                    <input name="id" id="id" class="form-control" required="required" autofocus="autofocus" value="<?php echo $laycover['id']; ?>" />
                </div>
                <div class="form-group">
                    <label for="subjek1">Subjek1</label>
                    <input type="text" name="subjek1" id="subjek1" class="form-control" required="required" autofocus="autofocus" value="<?php echo $laycover['subjek1']; ?>"/>
                </div>
                 <div class="form-group">
                    <label for="subjek2">Subjek2</label>
                    <input type="text" name="subjek2" id="subjek2" class="form-control" required="required" autofocus="autofocus" value="<?php echo $laycover['subjek2']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" id="Description" class="form-control"><?php echo $laycover['description']; ?></textarea>
                </div>
                <div>
                    <button class="btn btn-danger btn-block"  type="reset" style="margin: 15px 0;">Reset</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="btneditcover">Save Changes</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</div>
