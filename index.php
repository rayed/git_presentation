<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Introduction to Git Source Code Management</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="css/reveal.min.css">
		<link rel="stylesheet" href="css/theme/default.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', use the PDF print sheet -->
		<script>
			document.write( '<link rel="stylesheet" href="css/print/' + ( window.location.search.match( /print-pdf/gi ) ? 'pdf' : 'paper' ) + '.css" type="text/css" media="print">' );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">




<section>
	<p><img src="img/Git-Logo-White.png" "Git Logo" border="0" style="border:0; background:transparent; box-shadow:none;" />
	<h3>Source Code Management</h3>
	<p>
		<small><a href="http://rayed.com">Rayed Alrashed</a> / <a href="http://twitter.com/rayed">@rayed</a></small>
	</p>
</section>

<section>
	<h2>What will we cover?</h2>
	<ol>
	<li class="fragment">Source Code Management</li>
	<li class="fragment">Git Basics</li>
	<li class="fragment">Git Branching</li>
	<li class="fragment">Git on the Server</li>
	<li class="fragment">GitHub &amp; Heroku</li>
	<li class="fragment">Tips</li>
	</ol>
</section>


<section>
<?php @include '001-scm.php'; ?>
</section>


<section>
<?php @include '010-git-basics.php'; ?>
</section>


<section>
<?php @include '020-git-branching.php'; ?>
</section>


<section>
<?php @include '030-git-server.php'; ?>
</section>


<section>
<?php @include '035-git-services.php'; ?>
</section>


<section>
<?php @include '040-tips.php'; ?>
</section>

<section>
<h2>Thank You</h2>
<p>
	<img src="img/devcamp.png" style="border:0; background:transparent; box-shadow:none;"  />
&nbsp;
&nbsp;
	<img src="img/badir.png" style="border:0; background:transparent; box-shadow:none;"  />
</p>
<p>
	The slides can be found at:<br/>
	<a href="http://dev.rayed.com/git_presentation/">dev.rayed.com/git_presentation</a>
</p>
<p>
	<small><a href="http://rayed.com">Rayed Alrashed</a> / <a href="http://twitter.com/rayed">@rayed</a></small>
</p>
</section>



			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: 'plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
					// { src: 'plugin/search/search.js', async: true, condition: function() { return !!document.body.classList; } }
					// { src: 'plugin/remotes/remotes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

	</body>
</html>
