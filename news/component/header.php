<link rel="stylesheet" href="css/header.css">
<?php
if (!isset($categories_db)) {
  $categories_db = category_model::get_all_from_db();
}
?>
<header>
  <div class="container header-bar">
    <div class="header-left">
      <?php if(isset($_SESSION['user'])): ?>
      <a href="profile.php" class="header-user">
        <img class="header-avatar" src="users_profile_picture/<?= $_SESSION['user']['profile_picture']; ?>" alt="">
        <span class="header-name"><strong><?= $_SESSION['user']['display_name']; ?></strong> | @<?= $_SESSION['user']['username']; ?></span>
      </a>
      <a href="?action=run_logout">Unset session</a>
      <?php else: ?>
        <i class="fa-regular fa-circle-user"></i>
        <a href="?action=view_login" class="btn">Login</a>
        <a href="#" class="btn blacken">Register</a>
      <?php endif; ?>

    </div>
    <a href="?action=home">
      <div class="logo">BLOCK</div>
    </a>
    <div class="header-right">
      <button class="icon-btn" aria-label="Search and menu">
        <i class="fa-brands fa-sistrix"></i>
        <i class="fa-solid fa-bars-staggered"></i>
      </button>
    </div>
  </div>
</header>
<nav class="topic-nav">
  <div class="container">
    <a href="?action=home" class="topic">Home</a>
    <?php foreach ($categories_db as $category) { ?>
      <a href="#" class="topic"><?= $category['category_name']; ?></a>
    <?php } ?>
  </div>
</nav>