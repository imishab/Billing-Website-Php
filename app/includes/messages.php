<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
 if(isset($_SESSION['message']))
{ 
  
  ?>


<script>
		swal({
  title: "<?php echo $_SESSION['message']; ?>!",
  text: "Welcome to Hindustan Foods!",
  icon: "<?php echo $_SESSION['type']; ?>",
});
	</script>
 



    <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
 }
    ?>


