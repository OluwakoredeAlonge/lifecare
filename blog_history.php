<?php
session_start();
//require_once "admin_guard.php";
require_once "classes/Blog.php";
$blo = new Blog;
$blogs = $blo->fetch_blog();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Update</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
        }

        #sidebar {
            width: 100%;
            max-width: 250px;
            background-color: #343a40;
            color: white;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
        }

        #sidebar a {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }

        #main-content {
            flex-grow: 1;
            padding: 20px;
            margin-left: 250px;
        }

        .form-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 2rem;
        }

        .form-control {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <?php
    require_once "partials/admin_menu.php";
    ?>
    <div id="main-content">
        <?php
        require_once "partials/admin_nav.php";
        ?>
        <div class="content">
            <h2>Manage Blog Posts</h2>
            <div class="form-container">
                <h3 class="text-center mb-4">Blog Posts <span><?php echo count($blogs); ?></span></h3>
                <?php if (!empty($blogs)) { ?>
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead class="text-white table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sn = 1;
                                foreach ($blogs as $blo) {
                                ?>
                                    <tr>
                                        <td><?php echo $sn++ ?></td>
                                        <td><?php echo $blo['title']  ?></td>
                                        <td><?php echo $blo['author']  ?></td>
                                        <td><?php echo date('l, d M Y', strtotime($blo["date"])); ?></td>
                                        <td>
                                            <a href="delete_blog.php?id=<?php echo $blo['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        <?php
                } else { ?>
            <div class="alert alert-info text-center" role="alert">
                No Blogs yet.
            </div>
        <?php }
        ?>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>