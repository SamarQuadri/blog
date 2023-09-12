<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>NewsBlog</title>
    <script src="myscript.js"></script>
</head>
<body>
<!--facebook page plugin-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0" nonce="TyL4O9j5"></script>
    <header>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
          
            <h1 class="logo-text"><span>SAM</span>Inspire</h1>
          </a>

    

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
              <h3>
                <a class="nav-link" href="index.php">Home</a>
              </h3>
              </li>
              <li class="nav-item">
              <h3>  <a class="nav-link" href="about.php">About</a>
              </h3>
              </li>
              <li class="nav-item">
                <h3>
                <a class="nav-link" href="services.php">services</a>
                </h3>
              </li>
             
              <?php if (isset($_SESSION['id'])):?>

                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                 <h3>
                  <?php echo $_SESSION['username'];?>
                 </h3>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <?php if($_SESSION['admin']): ?>
                  <li><a class="dropdown-item" href="admin/posts/index.php">Dashboard</a></li>
                  <?php endif ?>
                  <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
              </li>
              <?php else:?>
                <li class="nav-item">
                <h3>
                <a class="nav-link" href="register.php">Register</a>
                </h3>
              </li>
              <li class="nav-item">
                <h3>
                <a class="nav-link" href="login.php">Login</a>
                </h3>
              </li>

              <?php endif;?>
          
           
        
            </ul>


          
            <!--
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        -->
          </div>
        </div>
      </nav>

      </header>
<dev class="text">

</dev>