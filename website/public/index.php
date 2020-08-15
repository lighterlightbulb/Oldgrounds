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
                            <div id="rightcol">
                            </div>

                            <div id="leftcol">
                            </div>
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