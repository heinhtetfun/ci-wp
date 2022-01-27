<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('/index.php/employees/update'); ?>
<input type="hidden" name="id" value="<?php echo $emp['id']; ?>">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" value="<?php echo $emp['name']; ?>">
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>