<?php
include "../lib.php";
userverifikasi();
$id=$_GET['id'];
$sql=mysqli_query($db, "SELECT * FROM layfaq WHERE id='$id'");
while($layfaq=mysqli_fetch_array($sql)){
    ?>


    <!-- modal edit service-->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title" id="serviceModalLabel">Edit FAQ</h1>
        </div>
        <div class="modal-body">
        	<form action="modal/modal_proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                <div class="form-group" hidden="">
                	<label for="id">ID</label>
                    <input name="id" id="id" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layfaq['id']; ?>" />
                </div>
                <div class="form-group">
                    <label for="question">Question</label>
                    <input type="text" name="question" id="question" class="form-control" required="required" autofocus="autofocus" value="<?php echo $layfaq['question']; ?>"/>
                </div>
                <div class="form-group">
                    <label for="answer">Answer</label>
                    <textarea type="text" name="answer" id="answer" class="form-control"><?php echo $layfaq['answer']; ?></textarea>
                </div>
                <div>
                    <button class="btn btn-danger btn-block"  type="reset" style="margin: 15px 0;">Reset</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="btneditfaq">Save Changes</button>
                </div>
            </form>
        <?php } ?>
    </div>
</div>
</div>


