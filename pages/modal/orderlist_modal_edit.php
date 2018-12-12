<?php
include "../lib.php";
$id=$_GET['id'];
$sql=mysqli_query($db, "SELECT * FROM custorder WHERE id='$id'");
while($custorder=mysqli_fetch_array($sql)){
  ?>

  <!-- modal edit title-->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title" id="titleModalLabel">Edit Order List</h1>
      </div>
      <div class="modal-body">
       <form action="modal/modal_proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        <div class="col-md-6 form-group">
         <label for="id">Order ID</label>
         <input name="id" id="id" class="form-control" required="required" value="<?php echo $custorder['id']; ?>" readonly>
       </div>
       <div class="col-md-6 form-group">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control" required="required" autofocus="autofocus" value="<?php echo $custorder['username']; ?>" readonly>
      </div>
      <div class="col-md-6 form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required="required" value="<?php echo $custorder['email']; ?>" readonly>
      </div>
      <div class="col-md-6 form-group">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone" class="form-control" required="required" value="<?php echo $custorder['phone']; ?>" readonly>
      </div>
      <div class="col-md-12 form-group">
        <label for="subjek">Choose Service</label>
        <select id="subjek" name="subjek" class="form-control" required="required">
          <option value="<?php echo $custorder['subjek']; ?>"><?php echo $custorder['subjek']; ?></option>
          <option value="HAIRCUT">Haircut</option>
          <option value="HAIR COLOR">Hair Color</option>
          <option value="SHAVE">Shave</option>
        </select>
      </div>
      <div class="col-md-6 form-group">
        <label for="datebooking">Date Booking</label>
        <input type="date" name="datebooking" id="datebooking" class="form-control" required="required" value="<?php echo $custorder['datebooking']; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="timebooking">Time Booking</label>
        <select id="timebooking" name="timebooking" class="form-control" placeholder="" required="required">
          <option value="<?php echo $custorder['timebooking'] ?>"><?php echo $custorder['timebooking'] ?></option>
          <option value="10.00">10:00</option>
          <option value="10.30">10:30</option>
          <option value="11.00">11:00</option>
          <option value="11.30">11:30</option>
          <option value="12.00">12:00</option>
          <option value="12.30">12:30</option>
          <option value="13.00">13:00</option>
          <option value="13.30">13:30</option>
          <option value="14.00">14:00</option>
          <option value="14.30">14:30</option>
          <option value="15.00">15:00</option>
          <option value="15.30">15:30</option>
          <option value="16.00">16:00</option>
          <option value="16.30">16:30</option>
          <option value="17.00">17:00</option>
          <option value="17.30">17:30</option>
        </select>
      </div>
      <div class="col-md-12 form-group">
        <label for="message">Message</label>
        <textarea type="time" name="message" id="message" class="form-control"><?php echo $custorder['message']; ?></textarea>
      </div>
      <div class="col-md-6 form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control" placeholder="" required="required">
          <option value="<?php echo $custorder['status'] ?>"><?php echo $custorder['status'] ?></option>
          <!-- <option value="" selected disabled>-- Select Status --</option> -->
          <option value="WAITING">WAITING</option>
          <option value="CANCEL">CANCEL</option>
        </select>
      </div>
      <div class="col-md-6 form-group">
        <label for="timestamp">Time Stamp</label>
        <input name="text" id="timestamp" class="form-control" required="required" value="<?php echo $custorder['timestamp']; ?>" readonly>
      </div>
      <div>
        <button class="btn btn-danger btn-block"  type="reset" style="margin: 15px 0;">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" name="btneditorderlist">Save Changes</button>
      </div>
    </form>
  <?php } ?>
</div>
</div>
</div>
