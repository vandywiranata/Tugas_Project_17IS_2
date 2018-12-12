<?php
include "../lib.php";
$id=$_GET['id'];
$sql=mysqli_query($db, "SELECT * FROM laytitle WHERE id='$id'");
while($laytitle=mysqli_fetch_array($sql)){
    ?>

    <!-- modal edit title-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="titleModalLabel">Edit Title</h1>
        </div>
        <div class="modal-body">
        	<form action="modal/modal_proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" hidden="">
                	<label for="id">ID</label>
                    <input name="id" id="id" class="form-control" required="required" autofocus="autofocus" value="<?php echo $laytitle['id']; ?>" />
                </div>
                <div class="form-group">
                    <label for="specialfeature">Special Feature</label>
                    <textarea type="text" name="specialfeature" id="specialfeature" class="form-control"><?php echo $laytitle['specialfeature']; ?></textarea>
                </div><div class="form-group">
                    <label for="price">Price</label>
                    <textarea type="text" name="price" id="price" class="form-control"><?php echo $laytitle['price']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="specialteam">Special team</label>
                    <textarea type="text" name="specialteam" id="specialteam" class="form-control"><?php echo $laytitle['specialteam']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="testimonial">Testimonial</label>
                    <textarea type="text" name="testimonial" id="testimonial" class="form-control"><?php echo $laytitle['testimonial']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="faq">FAQ</label>
                    <textarea type="text" name="faq" id="faq" class="form-control"><?php echo $laytitle['faq']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="appointment">Appointment</label>
                    <textarea type="text" name="appointment" id="appointment" class="form-control"><?php echo $laytitle['appointment']; ?></textarea>
                </div>
                <div>
                    <button class="btn btn-danger btn-block"  type="reset" style="margin: 15px 0;">Reset</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="btnedittitle">Save Changes</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</div>
