<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
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
<label class="mb-2" for="text">Shop Name</label>
<div class="input-group">
<select name="customer_id" class="form-control selectpicker " id="select-country" data-live-search="true">
<?php foreach ($customers as $key => $customer): ?>
<?php if (!empty($customer_id) && $customer_id == $customer['id'] ): ?>
<option selected value="<?php echo $customer['id'] ?>"><?php echo $customer['name']; ?></option>
<?php else: ?>
<option value="<?php echo $customer['id'] ?>"><?php echo $customer['name']; ?></option>
<?php endif; ?>
<?php endforeach; ?>
</select>
</div>  
</div>


<div class="form-group mb-4">
<label class="mb-2" for="text">Date</label>
<div class="input-group">
<select name="topic_id" class="form-control selectpicker " id="select-country" data-live-search="true">
<?php foreach ($topics as $key => $topic): ?>
<?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
<option selected value="<?php echo $topic['id'] ?>"><?php echo date('j-F-Y', strtotime($topic['name'])); ?></option>
<?php else: ?>
<option value="<?php echo $topic['id'] ?>"><?php echo date('j-F-Y', strtotime($topic['name'])); ?></option>
<?php endif; ?>
<?php endforeach; ?>
</select>
</div>  
</div>


<div class="shadow form-group">
<div class="card ">
<div class="card-body">


<div class="col-0">
<div class="form-group ">
<label class="mb-2" for="text">Items</label>
<div class="input-group">
<select name="product_id" class="form-control selectpicker "  data-live-search="true" required>
<option value="" required>Select</option>
<?php foreach ($products as $key => $product): ?>
<?php if (!empty($product_id) && $product_id == $product['id'] ): ?>
<option selected value="<?php echo $product['id'] ?>"><?php echo $product['name'] ?></option>
<?php else: ?>
<option value="<?php echo $product['id'] ?>"><?php echo $product['name'] ?> - <?php echo $product['rate'] ?>/-</option>
<?php endif; ?>
<?php endforeach; ?>
</select>
</div>  
</div>
</div>


<div class="form-row">
<div class="col">
<label class="mb-2" for="text">Quatity</label>
<input type="text" name="qty" class="form-control" placeholder="0" required>
</div>
<div class="col">
<label class="mb-2" for="text">Sale Rate</label>
<input type="text"  name="sr" class="form-control" placeholder="0/-" required>
</div>
</div><br>
<label class="mb-2" for="text" >Total</label>
<div class="input-group">

<input type="text" class="form-control" placeholder="Total Price" name="total" required>
</div>  


</div></div>
</div>




<div class="paste-new"></div>

<div class="col">
<a href="javascript:void(0)" class="add-more btn btn-dark  mb-3">+ Add Columns</a>
</div>



<!-- End of Form -->
<!-- Form -->
 <div class="form-group mb-2">
<label class="mb-2" for="text">Borrow</label>
<div class="input-group">

<input type="text" class="form-control" name="borrow" value="<?php echo $borrow ?>" placeholder="0/-">
</div>  
</div> 

<div class="row">

<div class="col">
<div class="form-group ">
<label class="mb-2" for="text"></label>
<div class="input-group">

<input type="hidden" placeholder="0" class="form-control">
</div>  
</div>
</div>
<div class="col">
<div class="form-group mb-4">
<label class="mb-2" for="text"></label>
<div class="input-group">

<input type="hidden" placeholder="0/-" class="form-control">
</div>  
</div>
</div>
<div class="col-5">
<div class="form-group mb-4">
<label class="mb-2" for="text"><strong>Total</strong></label>
<div class="input-group">

<input type="text" placeholder="0/-" class="form-control"  name="total">
</div>  
<div>
                            <?php if (empty($published)): ?>
                                <label>
                                    <input type="hidden" name="published" checked>
                                    
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="hidden" name="published" checked>
                                    
                                </label>
                            <?php endif; ?>
                           

                        </div>
</div>
</div>
</div>
<!-- End of Form -->

<div class="d-grid">
<button class="w-100 btn btn-primary btn-lg" name="add-post" type="submit">Add Bill</button>
</div>
</form>
</div>
</main>
</div>
<br><br>


         
        <?php 
include(ROOT_PATH . "/includes/footer.php");
?>