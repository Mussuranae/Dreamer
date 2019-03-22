<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="travel.css">
<?php
include "navbar.inc.php"
?>
<div class="container mt-3">
<h1>Product addition form</h1>
</div>
<hr>
<form class="container">
  <div class="container form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefault01">Product name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Product name" value="" required>
    </div>
  </div>
  <div>
    <div class="col-md-12 mb-4 form-group">
      <label for="exampleFormControlSelect1">Categories</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option selected>Choose...</option>
        <option>Travels</option>
        <option>Dream Addict</option>
        <option>Bedding</option>
        <option>Shows</option>
        <option>Virtual Reality</option>
        <option>Xtrem</option>
      </select>
    </div>
  </div>
  <div class="container form-row">
    <div class="col-md-12 mb-3">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    </div>
  </div>
  <div class="container form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefault04">Description</label>
      <textarea type="text" class="form-control" placeholder="Product description" required></textarea>
    </div>
  </div>
  <div class="container form-row">
    <div class="col-md-12 mb-3">
      <label for="validationDefault05">Price</label>
      <input type="text" class="form-control" id="validationDefault05" placeholder="Price" required>
    </div>
  </div>
  <div class="ml-3 form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="ml-3 btn btn-primary" type="submit">Submit form</button>
</form>
<?php
include "footer.inc.php"
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>