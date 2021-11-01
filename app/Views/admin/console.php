<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
  
    <body>

    <style>
        body {
            background:#edf2f7;
        }
        .text {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
}
    </style>
<br>
<br>
<br>
<br>
<br>


    <?= $validation->listErrors() ?>

        <div class="container">

        <center>
            <h1><b>Admin Dashboard 
            </b></h1>
            <a href="/dashboard" class="btn btn-primary">Back</a>
        </center>
        <br>
        <?php
    if(session()->getFlashData('success')){
    ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('success') ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
    }
    ?>

<?php
    if(session()->getFlashData('info')){
    ?>

    <div class="alert alert-info alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('info') ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
    }
    ?>
    <?php
    if(session()->getFlashData('danger')){
    ?>

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?= session()->getFlashData('danger') ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php
    }
    ?>
        </div>

    <div class="container" style="display:flex; background:white;border-radius:25px;padding:30px;" >
       
    
    <div style=" flex:1;display:flex;flex-direction:column;">
                <a href="createPage" class="me-5 btn btn-outline-info">
                    Add
                </a>
        </div>
        <div style="flex:3;">
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Rate</th>
                <th>Short Desc</th>
                <th>price</th>
                <th>Created Date</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>

        <?php foreach($movie as $item) : ?>
            <tr>
                <td><?= $item['title'] ?></td>
                <td><?= $item['rate'] ?></td>
                <td><p class="text"><?= $item['shortdesc'] ?></p></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['created_at'] ?></td>
                <td>
                    <a href="/update/<?= $item['id'] ?>" class="w-100 btn btn-warning"><i class="fas fa-edit"></i></a>
                    <br>
                    <a href="/delete/<?= $item['id'] ?>" class="w-100 btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                </td>
               
            </tr>
           
            <?php endforeach ?>
         
        </tbody>
   
    </table>

        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
</body>
</html>