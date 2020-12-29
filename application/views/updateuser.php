
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
        <a class="nav-link text-white bg-success  rounded"  href="<?php echo  base_url().'index.php/Register/showuser';?>">Users</a>
      </li>
    </ul>
    
</nav>
     
   
    <div class="container col-md-6 mt-5">
        <h2 class="text-center bg-info rounded text-white pt-2 pb-2 font-weight-bold">Update User Detail</<h2>
    </div>
    <div class="conatiner mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              
                <form name="createuser" method="post" action="<?php echo base_url().('index.php/Register/edit/'.$user[0]['user_id']);?>">
                    <input type="text" class="form-control mb-3" name="username" value="<?php echo $user[0]['user_name']?>">
                    <?php echo form_error('username');?>
                    <input type="email" class="form-control mb-3" name="email" value="<?php echo $user[0]['user_email']?>">
                    <?php echo form_error('email');?>
                    <input type="text" maxlength=10 oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" class="form-control mb-3" name="contact" value="<?php echo $user[0]['contact']?>">
                    <?php echo form_error('contact');?>
                    <input type="text" class="form-control mb-3"  name="pass" value="<?php echo $user[0]['password']?>">
                    <?php echo form_error('pass');?>
                    <button type="submit" class="form-control mb-3 btn btn-outline-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>