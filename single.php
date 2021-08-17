<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');
include(ROOT_PATH . "/includes/header2.php");


if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');


?>

     <!-- Content -->
     <div class="container">
       <ul id="myUL">
          <li><h6 class=" mt-4">Bill No: <?php echo $post['id']; ?></h6></li>
          <li><h6 class=" mt-1">Name: <?php echo $post['customer_id']; ?></h6></li>
          <li><h6 class=" mt-1">Ph: +91 994714526</h6></li>
          <li> <h6 class=" mt-1">Date: <?php echo $post['created_at']; ?></h6></li> 
          </ul>    
    <div class="card border-0 shadow mb-4 mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">No.</th>
                                    <th class="border-0">Items</th>
                                    <th class="border-0">Quantity</th>
                                    <th class="border-0">Sales Rate</th>
                                    <th class="border-0">Total Price</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                <tr>
                                  <td>1</td>
                                    <td><?php echo $post['product_id']; ?></td>
                                    <td> <?php echo $post['qty']; ?></td>
                                    <td>₹<?php echo $post['sr']; ?>/-</td>
                                    <td><strong>₹<?php echo $post['total']; ?>/-</strong></td>

                                   
                                    
                                </tr>


                        </table>
                    </div>
                </div>
            </div>
            <ul id="myUL">
           <li><h6 class="float-left">Item Total :</h6>
            <h4 class="float-right"><strong>₹<?php echo $post['total']; ?>/-</strong></h4></li><br><br>


            <li><h6 class="float-left">Borrow :</h6>

            <h4 class="float-right"><font color="red"><strong>- ₹<?php echo $post['borrow']; ?>/-</font></strong></h4></li><br><br><hr class="new5 mt-1">
            <ul id="myUL">
           <li><h6 class="float-left mt-3">Total :</h6>
            <h3 class="float-right mt-3"><strong>₹<?php echo $post['total']; ?>/-</strong></h3></li></ul>

            </ul>
           




    <br><br<br> <br><br<br> <br><br<br><br><br<br>
    <button type="button" class="btn btn-warning mt-5 w-25" onclick="window.print()">Print</button> <button type="button" class="btn btn-primary mt-5">Share</button> <a href="edit.php?id=<?php echo $post['id']; ?>" type="button"  class="btn btn-danger mt-5">Edit</a>
<br><br>
    <!-- // Content -->

    </div>

                    <?php include(ROOT_PATH . "/includes/footer.php"); ?>
