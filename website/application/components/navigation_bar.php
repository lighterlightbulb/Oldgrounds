<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/../application/database.php");

    open_database_connection($sql);
?>

<div id="banner">
    <h1 class="ng"><a href="<?= get_server_host() ?>">Oldgrounds — Recreating forgotten memories.</a></h1>

	<div id="wholeloginbox" class="loginbox">
		<div id="loginbox" style="display: none;">
			<strong class="status">Checking login status…</strong>
        </div>

        <?php if (isset($_SESSION["user"])): ?>
            <div id="loginbox_loggedin" class="logged">
                <div id="loginbox_loggedin_msg">
                    <strong class="status">Logged in as:<br><span id="loginbox_username"><?= $_SESSION["user"]["username"] ?></span></strong>
                </div>

                <?php
                    $unread = 0; // Default as 0; sql connection may be a bit finicky... but in the odd case that it is, this might be useless.

                    $statement = $sql->prepare("SELECT null FROM `messages` WHERE `recipient` = ?");
                    $statement->execute([$_SESSION["user"]["id"]]);
                    $unread = $statement->rowCount();
                ?>

                <span class="btn"><a href="/pm/">Inbox<em id="unread_pm_count_display"><?= $unread ?></em></a></span>
                <span class="btn"><a href="/account/">My Account</a></span>
                <span class="btn"><a href="/account/logout">Log Out</a></span>
            </div>
        <?php else: ?>
            <div id="loginbox_notloggedin" class="hidecode" style="display: block;">
                <form method="post" action="/account/" id="loginboxform" onsubmit="AttemptLogin();return(false);">
                    <ul>
                        <li><a href="/join">Not a member? SIGN UP!</a></li>
                        <li><input type="submit" class="hiddensubmit" value="s"><a href="/join/forgot">Forgot login?</a></li>
                    </ul>

                    <p>
                        <strong>USERNAME:</strong>
                        <input type="text" name="lb_username" id="lb_username" maxlength="20" class="inputfield formtext">
                    </p>

                    <p>
                        <strong>PASSWORD:</strong>
                        <input type="password" name="lb_userpass" id="lb_userpass" maxlength="10" class="inputfield formtext">
                    </p>

                    <div id="loginbox_button">
                        <p class="save">
                            <input type="checkbox" name="lb_remember" id="lb_remember" value="on">
                            <a class="textclick" href="javascript:HandleClick('lb_remember');">Save Info!</a>
                        </p>

                        <span class="btn"><a href="javascript:AttemptLogin();">Jack In!&nbsp;&gt;</a></span>
                    </div>


                    <div id="loginbox_animation_login" class="hidecode">
                        <p class="save"><strong class="status">Logging in…</strong></p>
                    </div>
                </form>
            </div>
        <?php endif; ?>
	</div>

    <form method="get" id="search" action="#" onsubmit="RunSearch('topsearch', 'portal');return(false);">
        <input type="text" id="topsearch_terms" size="12" class="search inputfield formtext">

        <select id="topsearch_type" class="formtext pulldown">
            <option value="title">Title&nbsp;&nbsp;</option>
            <option value="author">Author&nbsp;&nbsp;</option>
        </select>

        <span class="btn"><a href="#" onclick="RunSearch('topsearch', 'portal');return(false);">Search!</a></span>
    </form>

    <div class="linkcomplete" id="searchhint"></div>
</div>

<div id="nav-sub">
    <dl>
        <dd><a href="/primer">About <?= PROJECT["NAME"] ?></a> |</dd>
		<dd><a href="/news/">Blogs</a> |</dd>
		<dd><a href="/chat">Chat</a> |</dd>
		<dd><a href="/downloads/">Downloads</a> |</dd>
		<dd><a href="/lit/faq">Help / FAQ</a> |</dd>
		<dd><a href="/lit/">Lit</a> |</dd>
		<dd><a href="/mature/">Mature</a> |</dd>
		<dd><a href="/network/">Network</a> |</dd>
		<dd><a href="/rankings/">Rankings</a> |</dd>
		<dd><a href="/submit">Submit Content!</a></dd>
	</dl>
</div>

<div id="nav-main">
    <dl>
	    <dd id="flashportal"><a href="/portal/">Flash Portal</a></dd>
		<dd id="audioportal"><a href="/audio/">Audio Portal</a></dd>
		<dd id="artportal"><a href="/art/">Art Portal</a></dd>
		<dd id="games"><a href="/game/">Games</a></dd>
		<dd id="movies"><a href="/movies/">Movies</a></dd>
		<dd id="collections"><a href="/collection/">Collections</a></dd>
		<dd id="series"><a href="/collection/series">Series</a></dd>
		<dd id="forums"><a href="/bbs/">Forums</a></dd>
		<dd id="store"><a href="/store/">Store</a></dd>
	</dl>
</div>

<br clear="left">