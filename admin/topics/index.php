<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
include(ROOT_PATH . "/includes/header2.php");
adminOnly();
?>




                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                   





 <!-- Content -->
 <div class="container">
 <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-warning mt-5" href="">Add New Date</button><input class="btn btn-secondary float-right mt-5" type="date"> 



    <div class="card border-0 shadow mb-4 mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">No.</th>
                                    <th class="border-0">Date</th>
                                    <th class="border-0">Delete</th>                           
                                </tr>
                            </thead>
                           
                            <tbody>
                            <?php foreach ($topics as $key => $topic): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><strong><?php echo date('j-F-Y', strtotime($topic['name'])); ?></strong></td>
                                    <td><a class="btn btn-danger" href="index.php?del_id=<?php echo $topic['id']; ?>">delete</a></td> 
                                   
                                    
                                </tr>
                            <?php endforeach; ?>


                        </table>
                    </div>
                </div>
            </div>

    </div>
    <!-- // Content -->




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title position-center" id="exampleModalLabel">Add Date</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>


<div class="container">
<form action="index.php" method="post" enctype="multipart/form-data" class="mt-4">

<!-- Form -->
<div class="form-group mb-3">
<label class="mb-2" for="text">Add Date</label>
<div class="input-group">
<input type="date" class="form-control" placeholder="Costumer Name"  name="name" value="<?php echo $name ?>" autofocus required>
</div>  
</div>
<div class="d-grid">
<button class="w-100 btn btn-primary btn-lg" name="add-topic" type="submit">Add Date</button>
</div>
</form>
</div>      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>














                    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
