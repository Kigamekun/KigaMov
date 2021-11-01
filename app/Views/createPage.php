<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/fonts/dropify.ttf">
    <title>Hello, world!</title>
  </head>
  <body>
 <style>

body {
            background:#edf2f7;
        }
    
 </style>
<br>
<br>
<br>
<br>
    <div class="container" style="background:white;padding:25px;border-radius:25px;">
   
    <form action="/createPost" method="post" enctype="multipart/form-data">
    <? csrf_field()?>
    <center><h2>Create Movie</h2></center>
    
<div class="col-md-12">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control <?=  ($validation->hasError('title')) ? 'is-invalid' : '';?>" id="title" aria-describedby="titleFeedback"  >
    <div id="titleFeedback" class="invalid-feedback">
      
    <?= $validation->getError('title') ?>

    </div>
  </div>

  <br>

  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Textarea</label>
    <textarea name="shortDesc" class="form-control  <?=  ($validation->hasError('shortDesc')) ? 'is-invalid' : '';?>" name="shortDesc" id="validationTextarea" placeholder="Required example textarea"></textarea>
    <div class="invalid-feedback">
    
    <?= $validation->getError('shortDesc') ?>
    </div>
  </div>
  <br>

<div class="col-md-12">
    <label for="rate" class="form-label">rate</label>
    <input name="rate" type="text" class="form-control <?=  ($validation->hasError('rate')) ? 'is-invalid' : '';?>" id="rate" aria-describedby="rateFeedback"  >
    <div id="rateFeedback" class="invalid-feedback">
      
    <?= $validation->getError('rate') ?>

    </div>
  </div>

  <br>
<div class="col-md-12">
    <label for="price" class="form-label">price</label>
    <input name="price" type="text" class="form-control <?=  ($validation->hasError('price')) ? 'is-invalid' : '';?>" id="price" aria-describedby="priceFeedback"  >
    <div id="priceFeedback" class="invalid-feedback">
      
    <?= $validation->getError('price') ?>

    </div>
  </div>

  <br>
  <input type="file" class="dropify"   name="thumb"  />
<br>
<center>
<button class="w-100 btn btn-outline-info">Kirim</button></center>
    </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <script>
    $('.dropify').dropify();
  </script>
   
  </body>
</html>
