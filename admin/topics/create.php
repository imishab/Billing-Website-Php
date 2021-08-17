<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
include(ROOT_PATH . "/includes/header2.php");

adminOnly();
?>


<div class="container">
<main>
<div class="py-3 text-center">
<h2>Add Bill</h2>
<?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
</div>


<div class="container">
<form action="create.php" method="post" enctype="multipart/form-data" class="mt-4">

<!-- Form -->
<div class="form-group mb-3">
<label class="mb-2" for="text">Add Costumer</label>
<div class="input-group">
<input type="date" class="form-control" placeholder="Costumer Name"  name="name" value="<?php echo $name ?>" autofocus required>
</div>  
</div>
<div class="d-grid">
<button class="w-100 btn btn-primary btn-lg" name="add-topic" type="submit">Add Date</button>
</div>
</form>
</div>



                    

                       

                    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
