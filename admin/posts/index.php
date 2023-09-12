<?php include '../../app/controllers/posts.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../assets/css/admin.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin Section Manage Posts</title>
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
        <li><a href="index.php">Manage Posts</a></li>
        <li><a href="../users/index.php">Manage Users</a></li>
        <li><a href="../topics/index.php">Manage Topics</a></li>
      </ul>
    </div>
    <!-- left slidebar -->

    <!-- admin content -->
    <div class="admin-content">

      <div class="button-group">
        <a href="create.php"><button type="button" class="btn btn-secondary">Add Post </button></a>
        <a href="index.php"><button type="button" class="btn btn-secondary">Manage Posts </button></a>

      </div>

      <div class="content">
        <h2 class="page-title">Manage Posts</h2>
        <?php  include '../../message.php';?>

        <table>
          <thead>
            <th>SN</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3">Action</th>
            <!-- three colum created for same row -->
          </thead>
          <tbody>
            <?php foreach ($posts as $key => $post): ?>

              <tr>
                <td>
                  <?php echo $key + 1; ?>
                </td>
                <td>
                  <?php echo $post['title'] ?>
                </td>
                <td>awa</td>
                <td><a href="edit.php?id=<?php echo $post['id'];?>" class="edit">edit</a></td>
                <td><a href="edit.php?delete_id=<?php echo $post['id'];?>" class="delete">Delete</a></td>

                <?php if ($post['published']):
                  ?>

                  <td><a href="edit.php?published=0&p_id=<?php echo $post['id'];?>" class="unpublished">unpublished</a></td>
                <?php else: ?>
                  <td><a href="edit.php?published=1&p_id=<?php echo $post['id'];?>" class="published">Published</a></td>
                <?php endif; ?>
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