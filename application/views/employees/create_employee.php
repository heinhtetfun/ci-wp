<h2><?= $title ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('/index.php/employees/create'); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name">
</div>
<!-- <div class="form-group">
    <label for="department">Department</label>
    <select name="dept" class="custom-select mr-sm-2" id="dept">
        <option selected>Choose...</option>
        <option value="1">One Department</option>
        <option value="2">Two Department</option>
        <option value="3">Three Department</option>
    </select>
</div> -->
<div class="form-group">
    <label for="age">Age</label>
    <input type="text" name="age" class="form-control" id="age">
</div>
<div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="text" name="dob" class="form-control" id="dob">
</div>
<div class="form-group">
    <label for="">Salary</label>
    <input type="text" name="salary" class="form-control" id="salary">
</div>
<!-- <select class="custom-select mr-sm-2" id="position">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select> -->
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" class="form-control" id="address">
</div>
<div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" name="phone" class="form-control" id="phone">
</div>
<button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>