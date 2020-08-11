<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/../application/includes.php");
    
    if (isset($_SESSION["user"]))
    {
        redirect("/my/dashboard");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            build_header("Landing");
        ?>
    </head>
    <body>
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
                    <a href="/news/create">Write a News Post</a><br>
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

                <div class="note-red">
                    <div class="note-title">
                        <img src="/html/img/reviews.png" width="80">
                    </div>
                    <hr>

                    There's nothing here.
                </div>

                <div class="note-red">
                    <div class="note-title">
                        <img src="/html/img/news.png" width="55">
                    </div>
                    <hr>

                    There's nothing here.
                </div>
            </div>
            <br>
            
        </div>

        <?php
            build_footer();
            build_js();
        ?>
    </body>
</html>

<?php
    close_database_connection($sql, $statement);
?>