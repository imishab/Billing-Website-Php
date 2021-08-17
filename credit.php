<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
include(ROOT_PATH . "/includes/header2.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "The Bill Date - '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>

  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>



  <!-- Page Wrapper -->
  <div class="page-wrapper">

    
  <div class="container py-4">
  <div class="accordion" id="accordionExample">
  <div class="dropdown mb-3">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Select Date
  </button>
   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   <a class="dropdown-item" href="<?php echo BASE_URL . '/bill.php'?>">All</a>
  <?php foreach ($topics as $key => $topic): ?>
    <a class="dropdown-item" href="<?php echo BASE_URL . '/bill.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a>
    <?php endforeach; ?>
   
  </div>
</div>
  </div></div>

    <!-- Content -->
    <div class="container">
    <h3 class="recent-post-title"><?php echo $postsTitle ?></h3><br>



    <div class="card border-0 shadow mb-4 mt-3">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0 rounded-start">No.</th>
                                    <th class="border-0">Shop Name</th>
                                    <th class="border-0">Borrow</th>
                                    <th class="border-0">Date</th>
                                    <th class="border-0">Edit</th>

                                   
                                </tr>
                            </thead>
                           
                            <tbody>
                            <?php foreach ($posts as $key => $post): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></td>
                                    <td><?php echo $post['borrow'] ?></td>
                                    <td><?php echo date('j-F-Y', strtotime($post['created_at'])); ?></td>
                                    <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                                    <!-- <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td> -->

                                   
                                    
                                </tr>
                            <?php endforeach; ?>


                        </table>
                    </div>
                </div>
            </div>

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->

  <?php include(ROOT_PATH . "/includes/footer.php"); ?>


 