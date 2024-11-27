<?php 
session_start();
$user_name=$_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Header and Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">My Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <!-- Add Logout Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Welcome Greeting -->
    <div class="bg-primary text-white text-center py-4">
        <h2>Welcome <?=$user_name?>!</h2>
        <p>Explore the latest articles and posts below</p>
    </div>

    <div class="container my-5">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <article class="mb-4">
                    <h1 class="display-4">Blog Post Title</h1>
                    <p class="text-muted">By <a href="#">Author Name</a> | Published on <span>November 27, 2024</span></p>
                    <hr>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet lacus sed justo tincidunt fringilla. Cras suscipit gravida dui, at tempor velit scelerisque ac. Etiam nec elit ut magna tincidunt convallis in nec justo. Integer condimentum, felis vel malesuada fringilla, lorem purus tristique est, ac dapibus justo augue a eros. Nunc tristique justo eget nibh luctus, a bibendum velit vulputate. Nam accumsan ipsum nec mi fermentum, id gravida libero suscipit.</p>

                    <p>Quisque auctor nisi sit amet ante tincidunt, sed sodales felis facilisis. Morbi fringilla, libero id condimentum fermentum, orci nunc fermentum augue, et interdum libero sapien eu velit. Sed interdum nibh vitae dui auctor maximus. Suspendisse interdum mi ut nulla suscipit, a egestas ipsum consequat. Aliquam erat volutpat. Vivamus venenatis scelerisque magna, non dapibus risus tempus nec.</p>

                    <hr>
                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-primary">Previous Post</button>
                        <button class="btn btn-outline-primary">Next Post</button>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Latest Posts</h4>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Post 1</a>
                        <a href="#" class="list-group-item list-group-item-action">Post 2</a>
                        <a href="#" class="list-group-item list-group-item-action">Post 3</a>
                        <a href="#" class="list-group-item list-group-item-action">Post 4</a>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="card-title">Categories</h4>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action">Category 1</a>
                        <a href="#" class="list-group-item list-group-item-action">Category 2</a>
                        <a href="#" class="list-group-item list-group-item-action">Category 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
