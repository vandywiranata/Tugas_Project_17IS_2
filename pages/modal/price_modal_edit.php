<?php
include "../lib.php";
$id=$_GET['id'];
$sql=mysqli_query($db, "SELECT * FROM layprice WHERE id='$id'");
while($layprice=mysqli_fetch_array($sql)){
    ?>


    <!-- modal edit price-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="priceModalLabel">Edit Price</h1>
        </div>
        <div class="modal-body">
        	<form action="modal/modal_proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" hidden="">
                	<label for="id">ID</label>
                    <input name="id" id="id" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layprice['id']; ?>" />
                </div>
                <div class="form-group">
                    <label for="subjek">Subjek</label>
                    <input type="text" name="subjek" id="subjek" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layprice['subjek']; ?>"/>
                </div>
               <div class="form-group">
                    <label for="pricing">Pricing</label>
                    <input type="text" name="pricing" id="pricing" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layprice['pricing']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="description1">Description1</label>
                    <textarea type="text" name="description1" id="description1" class="form-control"><?php echo $layprice['description1']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="description2">Description2</label>
                    <textarea type="text" name="description2" id="description2" class="form-control"><?php echo $layprice['description2']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="description3">Description3</label>
                    <textarea type="text" name="description3" id="description3" class="form-control"><?php echo $layprice['description3']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="description4">Description4</label>
                    <textarea type="text" name="description4" id="description4" class="form-control"><?php echo $layprice['description4']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="description5">Description5</label>
                    <textarea type="text" name="description5" id="description5" class="form-control"><?php echo $layprice['description5']; ?></textarea>
                </div>
                <div>
                    <button class="btn btn-danger btn-block"  type="reset" style="margin: 15px 0;">Reset</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="btneditprice">Save Changes</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</div>
