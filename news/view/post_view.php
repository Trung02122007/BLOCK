<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $view_post['post_title']; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/post_view.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/17e95093e3.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include("component/header.php"); ?>
    <article class="post container">

        <h1 class="post-title"><?= $view_post['post_title']; ?></h1>

        <!-- Tag + date on the left, action buttons on the right -->
        <div class="post-meta">
            <div class="post-info">
                <span class="tag"># <?= $view_post['category_name']; ?></span>
                <span class="date"><?= $view_post['published_at']; ?></span>
            </div>

            <div class="post-actions">
                <button class="action-btn"><i class="fa-regular fa-heart"></i> Like</button>
                <button class="action-btn"><i class="fa-regular fa-bookmark"></i> Save</button>
                <button class="action-btn"><i class="fa-solid fa-share-nodes"></i> Share</button>
            </div>
        </div>

        <!-- Author -->
        <div class="author-row">
            <div class="author">
                <img class="avatar" src="users_profile_picture/default_picture_greyed.jpg" alt="">
                <span>Author: <strong><?= $view_post['display_name']; ?></strong> | @<?= $view_post['username']; ?></span>
            </div>
            <button class="follow-btn">Follow</button>
        </div>

        <!-- Image + content -->
        <img class="post-image" src="storage/<?= $view_post['post_image']; ?>" alt="">

        <div class="post-content">
            <p><?= $view_post['post_content']; ?></p>
        </div>

    </article>

<?php include('component/footer.php'); ?>
</body>

</html>