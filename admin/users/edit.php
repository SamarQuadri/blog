<?php include '../../app/controllers/users.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../assets/css/admin.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin Section Add User</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="../../index.php">
        <h1 class="logo-text"><span>SAM</span>Inspire</h1>
      </a>
      <!-- Navbar content -->
    </nav>
  </header>

  <!-- page wrapper -->
  <div class="admin-wrapper">



    <!-- left sidebar -->
    <div class="left-sidebar">
      <ul>
        <li><a href="../posts/index.php">Manage Posts</a></li>
        <li><a href="index.php">Manage Users</a></li>
        <li><a href="../topics/index.php">Manage Topics</a></li>
      </ul>
    </div>
    <!-- left slidebar -->

    <!-- admin content -->
    <div class="admin-content">

      <div class="button-group">
        <a href="create.php"><button type="button" class="btn btn-secondary">Add User </button></a>
        <a href="index.php"><button type="button" class="btn btn-secondary">Manage Users </button></a>

      </div>

      <div class="content">
        <h2 class="page-title">Edit User</h2>
        <?php include '../../app/helpers/formErrors.php'; ?>

        <form action="edit.php" method="post">

          <div class="form-group">

            <input type="hidden" name="id" value="<?php echo $id; ?>">


            <label for="exampleInputEmail1">Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="form-control"
              id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
            <small id="emailHelp" class="form-text text-muted">make your username unique </small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1"
              aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="form-control"
              id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Conform Password</label>
            <input type="password" name="passwordconf" value="<?php echo $passwordconf; ?>" class="form-control"
              id="exampleInputPassword1" placeholder="Password Conform">
          </div>





          <div class="form-group">
            <?php if (isset($admin) && $admin == 1): ?>
              <label>
                <input type="checkbox" name="admin" checked>
                Admin</label>


            <?php else: ?>
              <label>
                <input type="checkbox" name="admin">
                Admin</label>

            <?php endif; ?>


          </div>

          <div class="button-group">
            <button type="submit" name="update-user" class="btn btn-secondary">Update User </button>
        </form>
      </div>
    </div>

  </div>
  <!-- page wrapper -->


</body>

</html>