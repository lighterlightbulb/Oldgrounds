<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/../application/includes.php");
    
    if (isset($_SESSION["user"]))
    {
        redirect("/my/dashboard");
    }

    $prefixes = ["This just in", "Breaking News", "Channel OG55"];
    $prefix = $prefixes[array_rand($prefixes)];
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            build_header("Landing");
        ?>
    </head>
    <body>
        <div class="main">
            <?php
                build_navigation_bar();
            ?>
            <div class="container">
                <br>

                <div class="title">
                    <a href="/">Oldgrounds</a>
                </div>

                <div class="left">
                    <div class="note">
                        <div class="note-title">
                            <img src="/html/img/hub.png" width="50">
                        </div>
                        <hr>

                        <a href="<?= PROJECT["DISCORD"] ?>">Join our Discord</a><br>
                        <a href="/headline/create">Write a Headline</a><br>
                        <a href="/review/create">Write a Review Post</a>
                        <hr>

                        <a href="/blog/create">Write a Blog Post</a><br>
                        <a href="/midi/create">Upload MIDI</a><br>
                        <a href="/song/create">Upload Song</a><br>
                        <a href="/game/create">Upload Game</a><br>
                        <a href="/video/create">Upload Video</a><br>
                        <a href="/art/create">Upload Art</a><br>
                        <a href="/chiptune/create">Upload Chiptune</a>
                        <hr>

                        <a href="/featured/">Featured</a>
                    </div>

                    <div class="note">
                        <div class="note-title">
                            <img src="/html/img/reviews.png" width="80">
                        </div>
                        <hr>

                        There's nothing here.
                    </div>

                    <div class="note">
                        <div class="note-title">
                            <img src="/html/img/headlines.png" width="90">
                        </div>
                        <hr>

                        <span class="special-detail"><?= $prefix ?>:</span> Nothing.
                    </div>
                </div>

                <div class="right">
                    <div class="note">
                        <div class="note-title">
                            <img src="/html/img/artwork.png" width="100">
                        </div>
                    </div>
                </div>
            </div>

            <?php
                build_footer();
            ?>
        </div>

        <?php
            build_js();
        ?>
    </body>
</html>

<?php
    close_database_connection($sql, $statement);
?>