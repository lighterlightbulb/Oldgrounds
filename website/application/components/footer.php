<?php
    $phrases = ["All your base are belong to us."];
    $phrase = $phrases[array_rand($phrases)];
?>
<div id="foot">
    <div id="originalfooterdiv">
        <div class="box boxsizer">

        </div>

        <span id="originalfooterspan">
            <strong class="dotted yellow">Made with love by the <?= PROJECT["NAME"] ?> team. <a class="yellow" href="/privacy">Privacy Policy</a> | <a href="/legal">Terms of Use</a></strong>
            <strong class="dotted"><?= PROJECT["NAME"] ?> — Your #1 online entertainment community. <?= $phrase ?></strong>
            <strong class="dotted yellow"><a href="/portal/">Flash Portal</a> | <a href="/audio/">Audio Portal</a> | <a href="/game/">Games</a> | <a href="/movies/">Movies</a> | <a href="/collection/">Collections</a> | <a href="/collection/series">Series</a> | <a href="/bbs">Forums</a></strong>
            <strong class="dotted orange"><a href="/primer">About <?= PROJECT["NAME"] ?></a> | <a href="/lit/faq">Help / FAQ</a> | <a href="/news/">Blogs</a> | <a href="/chat/">Chat</a> | <a href="/lit/">Literature</a> | <a href="/mature/">Mature</a> | <a href="/rankings/">Rankings</a> | <a href="/network/">Network</a> | <a href="/downloads/">Arsenal</a></strong>
            <strong class="dotted red"><a href="/staff">The Staff</a> | <a href="/magazine">Magazine</a> | <a href="/link">Link to Us!</a> | <a href="/submit">Submit Content!</a> | <a href="/feeds/rss">RSS</a></strong>
        </span>
    </div>
</div>