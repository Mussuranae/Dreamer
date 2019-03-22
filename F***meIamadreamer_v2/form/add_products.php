<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add Products</title>
  </head>
  <body>

<?php 
include('valid_form.php');
?>

    <div class="jumbotron">
      <h1>Add Products</h1>
  
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCat">Category *</label>
        <select id="inputCat" class="form-control">
          <option selected>Choose...</option>
          <option>Travels</option>
          <option>X-Trem</option>
          <option>Shows</option>
          <option>Bedding</option>
          <option>Dream Addict</option>
          <option>Virtual Reality</option>
        </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPrice">Price *</label>
      <input type="text" class="form-control" id="inputPrice" placeholder="example: 10.00" pattern='\d+(\.\d{2})?' name="inputPrice" required="required"><span class="error" style="color: red"><?php echo $inputPriceErr;?></span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName">Name *</label>
    <input type="text" class="form-control" id="inputName" placeholder="Name" name="inputName" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$"><span class="error" style="color: red"><?php echo $inputNameErr;?></span>
  </div>
  <div class="form-group">
    <label for="inputDescript1">Description #1 *</label>
    <textarea class="form-control" id="inputDescript1" rows="3" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,300}$" name="inputDescript1" placeholder="3OO char. max"></textarea><span class="error" style="color: red"><?php echo $inputDescript1Err;?></span>
  </div>
  <div class="form-group">
    <label for="inputDescript2">Description #2</label>
    <textarea class="form-control" id="inputDescript2" rows="3" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,300}$" name="inputDescript2" placeholder="3OO char. max"></textarea>
  </div>
  <div class="form-group">
    <label for="inputWarnings">beware</label>
    <textarea class="form-control" id="inputDescript2" rows="2" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,120}$" name="inputDescript2" placeholder="12O char. max"></textarea>
  </div>
  


  <div class="form-group">
    <label for="inputImage1">Image #1</label>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputImage1">
    <label class="custom-file-label" for="inputImage1" aria-describedby="inputImage12" name="inputImage1">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="inputImage12">Upload</span>
  </div>
</div></div>

<div class="form-group">
    <label for="inputImage2">Image #2</label>
    <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputImage2">
    <label class="custom-file-label" for="inputImage2" aria-describedby="inputImage22">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="inputImage22">Upload</span>
  </div>
</div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I have accepted the conditions. *
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Add new</button>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  </body>
</html>