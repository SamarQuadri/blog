<?php include '../../app/controllers/posts.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../assets/css/admin.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin Section Add posts</title>
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
        <h2 class="page-title">Edit Posts</h2>
        <?php include '../../app/helpers/formErrors.php';?>

        <form action="edit.php" method="post"  enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="form-group">
            <label for="formGroupExampleInput">Title</label>
            <input type="text" name="title" value="<?php echo $title ?>" class="form-control" id="formGroupExampleInput"
              placeholder="Enter Title">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea class="form-control" name="body" value="<?php echo $body;?>" id="exampleFormControlTextarea1"
              rows="8"></textarea>
          </div>
          <div>
            <label class="form-label" for="customFile">Default file input example</label>
            <input type="file" name="image" class="form-control" id="customFile" />

          </div>
          <div>
            <label for="">Topic</label>
            <select name="topic_id" class="text-input">
              <option value=""></option>

              <?php foreach ($topics as $key => $topic): ?>
                <?php if (!empty($topic_id) && $topic_id == $topic['id']): ?>
                  <option selected value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>

                <?php else: ?>
                  <option value="<?php echo $topic['id']; ?>"><?php echo $topic['name']; ?></option>

                <?php endif; ?>
              <?php endforeach; ?>

            </select>
          </div>
          <div>
            <?php if (empty($published) && $published == 0):?>
              <label>
              <input type="checkbox" name="published">Published
            </label>
              <?php else:?>
                <label>
              <input type="checkbox" name="published" Checked> Published
            </label>
                <?php endif;?>
  
          <div class="button-group">
            <button type="submit" name="update-post" class="btn btn-secondary">Update Post </button>
        </form>
      </div>
    </div>

  </div>
  <!-- page wrapper -->


</body>

</html>