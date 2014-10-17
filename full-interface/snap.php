<?php

session_start();

if (isset($_POST['username']))
{
	$_SESSION['username'] = preg_replace('/[^a-z\d ]/i', '', $_POST['username']);
	header( 'Location: snap.php' );
}


if (isset($_SESSION['username']))
{

?>




<!DOCTYPE html>
<!-- saved from url=(0053)http://snap.berkeley.edu/hoc/full-interface/snap.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<title>Snap! Build Your Own Blocks. Beta</title>
        <link rel="shortcut icon" href="http://snap.berkeley.edu/fav3.gif" type="image/gif">
		<script type="text/javascript" src="./morphic.js"></script>
		<script type="text/javascript" src="./widgets.js"></script>
		<script type="text/javascript" src="./blocks.js"></script>
		<script type="text/javascript" src="./threads.js"></script>
		<script type="text/javascript" src="./objects.js"></script>
		<script type="text/javascript" src="./gui.js"></script>
		<script type="text/javascript" src="./paint.js"></script>
		<script type="text/javascript" src="./lists.js"></script>
		<script type="text/javascript" src="./byob.js"></script>
		<script type="text/javascript" src="./xml.js"></script>
		<script type="text/javascript" src="./store.js"></script>
		<script type="text/javascript" src="./locale.js"></script>
		<script type="text/javascript" src="./cloud.js"></script>
		<script type="text/javascript" src="./sha512.js"></script>
		<script type="text/javascript" src="./xml2json.js"></script>
		<script type="text/javascript">
			var world;
                        var ide;

                        function load_project_uri(uri) {
                                var request = new XMLHttpRequest ();
                                request.onload = function () {
                                        window.ide.droppedText(this.responseText);
                                };
                                request.open("get", uri, true);
                                request.send();
                        }

                        function load_project_uri(uri) {
                                var request = new XMLHttpRequest ();
                                request.onload = function () {
                                        window.ide.droppedText(this.responseText);
                                };
                                request.open("get", uri, true);
                                request.send();
                        }


                        function load_project_xml(xml) {
                                window.ide.droppedText(xml);
                        }

                        function export_project_xml(xml) {
                                return window.ide.exportProjectToStr ();
                        }

                        window.load_project_uri = load_project_uri;
                        window.load_project_xml = load_project_xml;
                        window.export_project_xml = export_project_xml;

			window.onload = function () {
				world = new WorldMorph(document.getElementById('world'));
				ide = new IDE_Morph();
                                ide.openIn(world);
				setInterval(loop, 1);
			};
			function loop() {
				world.doOneCycle();
			}
		</script>
	</head>
	<body style="margin: 0;">
		<canvas id="world" tabindex="1" style="position: absolute;" width="1045" height="674">


</canvas></body></html>


<?php

}
else
{


?>
<html>
<body>
<h1>Welcome to SNAP!</h1>

<p>Please enter your username!</p>

<form action="" method="post">
Username <input type="text" name="username"></input>
<input type="submit" value="Start programming!"></input>
</form>
</body>
</html>

<?php

}

?>
