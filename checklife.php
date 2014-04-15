<!DOCTYPE html>
<html>
    <head>
        <link type = "text/css" rel="stylesheet" href="checkStyle.css"/>
        <title></title>
    </head>
    <body>
        <nav id = "nav">
            <ul>
                <li><a href = "#home">HOME</a></li>
                <li><a href = "#about">ABOUT</a></li>
                <li><a href = "#team">TEAM</a></li>
                <li><a href = "#contact">CONTACT</a></li>
            </ul>
        </nav>
        <div id = "home">
			<IMG class="logo" src="logo.png" alt="logo" width="800" height="250">
        </div>
        <div id = "about">
        </div>
		<div id = "team">
		</div>
		<div id = "contact">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="http://checklife.binhoster.com" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>
		</div>
    </body>
</html>
