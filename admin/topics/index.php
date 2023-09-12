<?php include '../../app/controllers/topics.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Section Manage Topics</title>
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
      <div class= "admin-wrapper">


      
      <!-- left sidebar -->
      <div class ="left-sidebar">
        <ul>
          <li><a href="../posts/index.php">Manage Posts</a></li>
          <li><a href="../users/index.php">Manage Users</a></li>
          <li><a href="index.php">Manage Topics</a></li>
        </ul>
      </div>
      <!-- left slidebar -->
      
      <!-- admin content -->
      <div class="admin-content">

      <div class= "button-group">
        <a href="create.php"><button type="button" class="btn btn-secondary">Add Topic</button></a>
        <a href="index.php"><button type="button" class="btn btn-secondary">Manage Topic </button></a>

      </div>

      <div class="content">
        <h2 class="page-title">Manage Topics</h2>
        <?php  include '../../message.php';?>

      
        <table>
          <thead>
            <th>SN</th>
            <th>Name</th>
            <th colspan="2">Action</th> 
            <!-- three colum created for same row -->
          </thead>
          <tbody>
            <?php 
            foreach ($topics as $key => $topic):?>
            <tr>
              <td><?php echo $key +1;?></td>
              <td><?php echo $topic['name'];?></td>
              <td><a href="edit.php?id=<?php echo $topic['id']?>" class="edit">edit</a></td>
              <td><a href="index.php?del_id=<?php echo $topic['id'];?>" class="delete">Delete</a></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>

      </div>
      </div>

      </div>
      <!-- page wrapper -->

</body>
</html>
