<div class="top-menu">
    <div class="menu-options">
        <?php if (isLoggedIn()): ?>
            <a href="list_posts.php">All posts</a>
            |
            <a href="edit_post.php">New post</a>
            |
            Hello <?php echo htmlEscape(getAuthUser()) ?>
            <a href="logout.php">Log out</a>
        <?php else: ?>
            <a href="login.php">Log in</a>
        <?php endif; ?>
    </div>
</div>