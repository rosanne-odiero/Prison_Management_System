<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/update');?>
  <input type="hidden" name="id" value="<?php echo $prisoner['id']; ?>">
  <div class="form-group">
    <label>Firstname</label>
    <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?php echo $prisoner['firstname']; ?>">
  </div>
  <div class="form-group">
    <label>Lastname</label>
    <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?php echo $prisoner['lastname']; ?>">
  </div> 
   <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $prisoner['email']; ?> ">
  </div> 
  <div class="form-group">
    <label>National ID</label>
    <input type="text" class="form-control" name="nationalid" placeholder="National ID"  value="<?php echo $prisoner['nationalid']; ?> ">
  </div> 
  <div class="form-group">
    <label>Charges</label>
    <textarea  id='editor1' class="form-control" name="charges" placeholder="Charges" ><?php echo $prisoner['charges']; ?></textarea>
  </div> 
  <div class="form-group">
    <label>Duty</label>
    <select class="form-control" name="duty_id">
    <?php foreach($duty as $duties): ?> 
      <option value="<?php echo $duties['id']; ?>"><?php echo $duties['name']; ?></option>
    <?php endforeach; ?>
    </select>
  </div> 
  <div class="form-group">
    <label>Phone number</label>
    <input type="text" class="form-control" name="number" placeholder="Phone Number"  value="<?php echo $prisoner['number']; ?> ">
  </div> 
  <button type="submit" class="btn btn-default">Submit</button>
</form>