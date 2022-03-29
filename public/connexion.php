
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="asset/vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/vendors/css/connexion.css">
    <title>page de connexion</title>
</head>
<body>
<section class="vh-100">
<div class="container py-5 h-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"><img src="image/logo.png" alt=""></span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form  method="POST" action="<?=  $router->generate ('connexionControllers');?>" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" name="login" class="form-control form-control-lg" />
              <label class="form-label"  for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password"   name="password" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" name="send" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="<?=  $router->generate ('create');?>">Creer un compte</a></p>
  
            

          </form>
          
        </div>

</div>
<div class="col-sm-6 px-0 d-none d-sm-block">

</div>
</div>
</div>
</div>
</section>


        </div>

      </div>
<script src="asset/vendors/js/bootstrap.min.js"></script>
</body>
</html>  
