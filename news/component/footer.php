<link rel="stylesheet" href="css/footer.css">
<?php
if (!isset($categories_db)) {
    $categories_db = category_model::get_all_from_db();
}
?>
<footer class="site-footer">
    <div class="container">

        <div class="footer-logo">BLOCK</div>

        <!-- Categories (loop the link) -->
        <nav class="footer-nav">
            <a href="#" class="footer-link">Home</a>
            <?php foreach ($categories_db as $category) { ?>
                <a href="#" class="footer-link"><?= $category['category_name']; ?></a>
            <?php } ?>
        </nav>

        <!-- Thin line -->
        <div class="footer-line"></div>

        <!-- Follow us -->
        <div class="follow-us">
            <span>Follow BLOCK on:</span>
            <div class="follow-us wrap">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.youtube.com/shorts/ufulM21qHHg" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>

    </div>
</footer>