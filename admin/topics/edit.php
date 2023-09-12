<?php include '../../app/controllers/topics.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../assets/css/admin.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin Section Add Topics</title>
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
        <li><a href="../users/index.php">Manage Users</a></li>
        <li><a href="index.php">Manage Topics</a></li>
      </ul>
    </div>
    <!-- left slidebar -->

    <!-- admin content -->
    <div class="admin-content">

      <div class="button-group">
        <a href="create.php"><button type="button" class="btn btn-secondary">Add Topics </button></a>
        <a href="index.php"><button type="button" class="btn btn-secondary">Manage Topics </button></a>

      </div>

      <div class="content">
        <h2 class="page-title">Edit Topic</h2>
        <?php include '../../app/helpers/formErrors.php';?>
        <form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
            
        <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="formGroupExampleInput" placeholder="Enter Topic name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Descriptions</label>
    <input type="text" name="descriptions"  value="<?php echo $descriptions; ?>"  class="form-control" id="formGroupExampleInput" placeholder="Enter Descriptions">
  </div>
 
  <div class="button-group">
      <button type="submit" name="update-topic" class="btn btn-secondary">Update Topics </button>
        </form>
      </div>
    </div>

  </div>
  <!-- page wrapper -->


</body>

</html>