<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily News</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/17e95093e3.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
$first  = $latest[0] ?? null;
$second = $latest[1] ?? null;
$third  = $latest[2] ?? null;
?>

  <?php include("component/header.php"); ?>

  <main class="container">
    <!-- Large story -->
    <?php if($first) { ?>
    <a href="?action=view_post&id=<?= $first['id']; ?>" class="card main-story">
      <img src="storage/<?= $first['post_image']; ?>" alt="">
      <div class="text">
        <div class="meta">
          <span class="tag"># Latest Story</span>
            <div class="stats">
              <span><i class="fa-regular fa-heart"></i> 100</span>
              <span><i class="fa-regular fa-comment"></i> 20</span>
            </div>
        </div>
        <h2><?= $first['post_title']; ?></h2>
        <p><?= $first['post_content']; ?></p>
      </div>
    </a>
    <?php } ?>

    <!-- Two side stories -->
    <div class="side">
      <?php if($second) { ?>
      <a href="?action=view_post&id=<?= $second['id']; ?>" class="card">
        <img src="storage/<?= $second['post_image']; ?>" alt="">
        <div class="text">
          <div class="meta">
            <span class="tag"><?= $second['category_name'] ?></span>
            <div class="stats">
              <span><i class="fa-regular fa-heart"></i> 96</span>
              <span><i class="fa-regular fa-comment"></i> 12</span>
            </div>
          </div>
          <h3><?= $second['post_title']; ?></h3>
        </div>
      </a>
      <?php } ?>

      <?php if($third) { ?>
      <a href="?action=view_post&id=<?= $third['id']; ?>" class="card">
        <img src="storage/<?= $third['post_image']; ?>" alt="">
        <div class="text">
          <div class="meta">
            <span class="tag"><?= $third['category_name'] ?></span>
            <div class="stats">
              <span><i class="fa-regular fa-heart"></i> 96</span>
              <span><i class="fa-regular fa-comment"></i> 12</span>
            </div>
          </div>
          <h3><?= $third['post_title']; ?></h3>
        </div>
      </a>
      <?php } ?>
    </div>
  </main>

<section class="topic-section container">
  <h2 class="section-title">Entertaining news</h2>

  <div class="card-row">
    <?php foreach($entertainment_posts as $post) { ?>
    <a href="?action=view_post&id=<?= $post['id']; ?>" class="card">
      <img src="storage/<?= $post['post_image']; ?>" alt="">
      <div class="text">
        <h3><?= $post['post_title']; ?></h3>
        <p><?= $post['post_title']; ?></p>
        <div class="meta">
          <span class="date"><?= $post['published_at'] ?></span>
          <span class="tag"><?= $post['category_name']; ?></span>
        </div>
      </div>
    </a>
    <?php } ?>
  </div>
</section>

<section class="topic-section container">
  <h2 class="section-title">Healthcare news</h2>

  <div class="card-row">
    <?php foreach($health_posts as $post) { ?>
    <a href="?action=view_post&id=<?= $post['id']; ?>" class="card">
      <img src="storage/<?= $post['post_image']; ?>" alt="">
      <div class="text">
        <h3><?= $post['post_title']; ?></h3>
        <p><?= $post['post_title']; ?></p>
        <div class="meta">
          <span class="date"><?= $post['published_at']; ?></span>
          <span class="tag"><?= $post['category_name']; ?></span>
        </div>
      </div>
    </a>
    <?php } ?>
  </div>
</section>

<section class="topic-section container">
  <h2 class="section-title">Social news</h2>

  <div class="card-row">
    <?php foreach($social_posts as $post) { ?>
    <a href="?action=view_post&id=<?= $post['id']; ?>" class="card">
      <img src="storage/<?= $post['post_image']; ?>" alt="">
      <div class="text">
        <h3><?= $post['post_title']; ?></h3>
        <p><?= $post['post_title']; ?></p>
        <div class="meta">
          <span class="date"><?= $post['published_at'] ?></span>
          <span class="tag"><?= $post['category_name']; ?></span>
        </div>
      </div>
    </a>
    <?php } ?>
  </div>
</section>

<?php include('component/footer.php'); ?>
</body>

</html>