<?php
include 'app/database/db.php';
include 'message.php';
include 'header.php';
$posts = SelectAll('posts', ['published' => 1]);
//    dd($posts);
?>
<h2>Tranding Posts</h2>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <?php foreach ($posts as $post): ?>


            <div class="carousel-item active">
                <img src="<?php echo 'assets/images/' . $post['image']; ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        <?php echo $post['title']; ?>
                    </h5>
                    <p>
                        <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>



    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<h1>Recent Posts</h1>

<div class="container">
    <div class="col-md-12 col-lg-12">

        <?php foreach ($posts as $post): ?>


            <article class="post vt-post">
                <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                        <div class="post-type post-img">
                            <a href="#"><img src="<?php echo 'assets/images/' . $post['image']; ?>" class="img-responsive"
                                    alt="image post"></a>
                        </div>
                        <div class="author-info author-info-2">
                            <ul class="list-inline">
                                <li>
                                    <div class="info">
                                        <p>Posted on:</p>
                                        <strong>
                                            <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                                        </strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <p>Comments:</p>
                                        <strong>127</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
                        <div class="caption">
                            <h3 class="md-heading"><a href="news.php?id=<?php echo $post['id']; ?>">
                                    <?php echo $post['title']; ?>
                                </a></h3>
                            <p>
                                <?php echo $post['body']; ?>

                                <a class="btn btn-default" href="news.php?id=<?php echo $post['id']; ?>" role="button">
                                    Read more about Tata Nexon</a>
                        </div>
                    </div>
                </div>
            </article>




        <?php endforeach; ?>







        <div class="pagination-wrap">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class="clearfix"></div>
    </div>
</div>




<script src="assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>