<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"><p class="h2 text-white">Ced-Ignitor</p></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link bg-success rounded text-white" href="<?php echo  base_url().'index.php/Register/registerform';?>">Add User</a>
      </li>
    </ul>

</nav>
<?php 
$success=$this->session->userdata('success');
if ($success !="") {?>
  <div class="container col-md-8 mt-5 pl-1 pr-1">
        <h4 class="alert alert-success fadeInUp "><?php echo $success;?> </<h4>
    </div>
<?php }?>
  
    <div class="container col-md-8 mt-5 pl-1 pr-1">
        <h2 class="text-center bg-info rounded text-white pt-2 pb-2 font-weight-bold">ALL USER LIST</<h2>
    </div>
    <div class="conatiner mt-2">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <table  class="table table-hover table-bordered">
                <thead class="thead-dark thead-bordered text-center">
                    <tr>
                    <th scope="col">UserId</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th colspan="2" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody  class="text-center">
              
                <?php 
                foreach($users as $key) {?>
                    <tr>
                    <td><?php echo $key['user_id'] ?></td>
                    <td><?php echo $key['user_name'] ?></td>
                    <td><?php echo $key['user_email'] ?></td>
                    <td><?php echo $key['contact'] ?></td>
                    <td><a href="<?php echo  base_url().'index.php/Register/edit/'.$key['user_id']?>" class="btn btn-outline-primary">Edit</a></td>
                    <td><a onclick="javascript:return confirm('Are you sure do you want to delete');" href="<?php echo base_url().'index.php/Register/delete/'.$key['user_id']?>" class="btn btn-outline-danger">Delete</a></td>
                    </tr>
                <?php }?>                
                </tbody>
            </div>
        </div>
    </div>
    
</body>
</html>