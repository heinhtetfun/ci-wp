<?php foreach ($employees as $employee) : ?>
    <ul class="list-group">
        <li class="list-group-item"><?php echo $employee['name']; ?></li>
        <a href="<?php echo base_url(); ?>index.php/employees/edit/<?php echo $employee['id']; ?>"><button class="btn btn-primary pull-left">Edit</button></a>
        <?php echo form_open('index.php/employees/delete/' . $employee['id']) ?>
        <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </ul>
<?php endforeach; ?>

<br>
<a href="<?php echo base_url(); ?>index.php/employees/create">Create Employee</a>