<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/../application/includes.php");
    require_once($_SERVER["DOCUMENT_ROOT"] . "/../application/database.php");

    open_database_connection($sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
            build_header("Recreating forgotten memories.");
        ?>
    </head>
    <body>
        <div id="mainframe"><div id="main">
            <div id="center">
                <?php
                    build_navigation_bar();
                ?>

                <div id="cont-out">
                    <div id="cont-mid">
                        <div id="cont">
                            <div>
                                <div id="rightcol">
                                </div>

                                <div id="leftcol">
                                    <div class="box title">
                                        <div class="boxtop"><div></div></div>
                                        
                                        <div class="boxl"><div class="boxr"><div class="boxm">
                                            <div class="headsizer">
                                                <div class="heading">
                                                    <h2 class="i-info">Site News</h2>
                                                    <p><a href="/bbs/forum/1">All News</a></p>
                                                </div>
                                            </div>

                                            <div class="featurefix dotted">
                                                <br clear="left">
                                            </div>

                                            <div class="featurefix">
                                                <br clear="left">
                                            </div>
                                        </div></div></div>

                                        <div class="boxbot"><div></div></div>
                                    </div>

                                    <div class="box title">
                                        <div class="boxtop"><div></div></div>

                                        <div class="boxl"><div class="boxr"><div class="boxm" style="height: 130px">
                                            <div class="headsizer">
                                                <div class="heading"><h2 class="i-ok">To-Do List</h2></div>
                                            </div>

                                            <ul class="bio" style="font-size: 1.3em; margin: 18px 10px">
                                                <li>Join our <a href="<?= PROJECT["DISCORD"] ?>">Discord!</a></li>
                                                <li>Earn some <a href="/game/gameswithmedals">Medals</a></li>
                                                <li>Try out <a href="/lit/flashapi">Flash</a></li>
                                                <li>Play some <a href="/game/">Games</a></li>
                                            </ul>
                                        </div></div></div>

                                        <div class="boxbot"><div></div></div>
                                    </div>

                                    <div class="box title" id="indexsub">
                                        <div class="boxtop"><div></div></div>

                                        <div class="boxl"><div class="boxr"><div class="boxm">
                                            <div class="headsizer">
                                                <div class="heading"><h2 class="i-flash">Latest Submissions</h2></div>
                                            </div>

                                            <ul id="colorlabels">
                                                <li class="great">Great Score</li>
                                                <li class="awesome narrow">Awesome Score</li>
                                            </ul>
                                            <br clear="left">
                                            <ol class="entries">
                                            
                                            </ol>
                                        </div></div></div>

                                        <div class="boxbot"><div></div></div>
                                    </div>

                                    <div class="box title">
                                        <div class="boxtop"><div></div></div>

                                        <div class="boxl"><div class="boxr"><div class="boxm">
                                            <div class="headsizer">
                                                <div class="heading">
                                                    <h2 class="i-users">Artist News</h2>
                                                    <p><a href="/news/">More News</a></p>
                                                </div>
                                            </div>
                                            
                                            <div class="featurefix">
                                            </div>
                                        </div></div></div>

                                        <div class="boxbot"><div></div></div>
                                    </div>
                                </div>
                            </div>

                            <br clear="all">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div></div>

        <?php
            build_footer();
            build_js();
        ?>
    </body>
</html>

<?php
    close_database_connection($sql, $statement);
?>