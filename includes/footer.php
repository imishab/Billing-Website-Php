 
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script>
            $(document).ready(function (){

                  $(document).on('click', '.remove-btn', function(){
                        $(this).closest('.shadow').remove();


                  });

                  $(document).on('click', '.add-more', function(){
                        $('.paste-new').append('<div class="shadow form-group">\
<div class="card ">\
<div class="card-body">\
<div class="col-0">\
<div class="form-group ">\
<label class="mb-2" for="text">Items</label>\
<div class="input-group">\
<select name="topic_id" class="form-control selectpicker " id="select-country" data-live-search="true" required>\
<option value="" required>Select</option>\
<?php foreach ($topics as $key => $topic): ?>\
<?php if (!empty($topic_id) && $topic_id == $topic["id"] ): ?>\
<option selected value="<?php echo $topic["id"] ?>"><?php echo $topic["name"] ?></option>\
<?php else: ?>\
<option value="<?php echo $topic["id"] ?>"><?php echo $topic["name"] ?></option>\
<?php endif; ?>\
<?php endforeach; ?></select></div> </div></div>\
<div class="form-row">\<div class="col">\
<label class="mb-2" for="text">Quatity</label>\
<input type="text" name="qty" class="form-control" placeholder="0" required>\
</div>\
<div class="col">\
<label class="mb-2" for="text">Sale Rate</label>\
<input type="text"  name="sr" class="form-control" placeholder="0/-" required>\
</div>\
</div><br>\
<label class="mb-2" for="text" >Total</label>\
<div class="input-group">\
<input type="text" class="form-control" placeholder="Total Price" name="total" required>\
</div>  \
<button type="button" class="remove-btn btn btn-danger w-59  mt-3">Remove</button> <a href="" class="btn btn-warning w-59 mt-3">Refresh</a>\
</div></div>\
</div>');

                  });

            });
      </script>

</body>
</html>