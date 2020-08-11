<a href="/"><div class="header"></div></a>

<div class="navbar">
    <b>
        <?php if (!isset($_SESSION["user"])): ?>
        Not logged in &bull;
        <?php else: ?>
        Welcome back, <a href="/users/view?id=<?= $_SESSION["user"]["id"] ?>"><?= $_SESSION["user"]["username"] ?></a> &bull;
        <?php endif; ?>

        <a href="/headline/">Headlines</a> &bull; <a href="/video/">Videos</a> &bull; <a href="/chiptune/">Chiptunes</a> &bull; <a href="/midi/">MIDIs</a> &bull; <a href="/song/">Songs</a> &bull; <a href="/game/">Games</a> &bull; <a href="/art/">Artwork</a> &bull; <a href="/review/">Reviews</a> &bull; <a href="/blog/">Blogs</a> &bull; <a href="/file/">Files</a> &bull; <a href="/group/">Groups</a>
        
        <span style="float: right">
            <?php if (!isset($_SESSION["user"])): ?>
                <a href="/register">Register</a> &bull; <a href="/login">Login</a>
            <?php else: ?>
                <a href="/logout">Logout</a>
            <?php endif; ?>
        </span>
    </b>
</div>
<br>