<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Welcome to CodeIgniter Xtend</title>
		<meta name="description" content="The small framework with powerful features">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico">

		<!-- STYLES -->
		<style {csp-style-nonce}>
			* {
				transition: background-color 300ms ease, color 300ms ease;
			}

			*:focus {
				background-color: rgba(221, 72, 20, .2);
				outline: none;
			}

			html,
			body {
				color: rgba(33, 37, 41, 1);
				font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
				font-size: 16px;
				margin: 0;
				padding: 0;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				text-rendering: optimizeLegibility;
			}

			header {
				background-color: rgba(247, 248, 249, 1);
				padding: .4rem 0 0;
			}

			header .heroe {
				margin: 0 auto;
				max-width: 1100px;
				padding: 1rem 1.75rem 1.75rem 1.75rem;
			}

			header .heroe h1 {
				font-size: 2.5rem;
				font-weight: 500;
			}

			header .heroe h2 {
				font-size: 1.5rem;
				font-weight: 300;
			}

			section {
				margin: 0 auto;
				max-width: 1100px;
				padding: 2.5rem 1.75rem 3.5rem 1.75rem;
			}

			section h1 {
				margin-bottom: 2.5rem;
			}

			section h2 {
				font-size: 120%;
				line-height: 2.5rem;
				padding-top: 1.5rem;
			}

			section pre {
				background-color: rgba(247, 248, 249, 1);
				border: 1px solid rgba(242, 242, 242, 1);
				display: block;
				font-size: .9rem;
				margin: 2rem 0;
				padding: 1rem 1.5rem;
				white-space: pre-wrap;
				word-break: break-all;
			}

			section code {
				display: block;
			}

			section a {
				color: rgba(221, 72, 20, 1);
			}

			section svg {
				margin-bottom: -5px;
				margin-right: 5px;
				width: 25px;
			}

			footer {
				text-align: center;
			}

			footer .environment {
				padding: 2rem 1.75rem;
			}

			footer .copyrights {
				color: rgba(200, 200, 200, 1);
				padding: .25rem 1.75rem;
			}
		</style>
	</head>

	<body>
		<!-- HEADER: HEROE SECTION -->
		<header>

			<div class="heroe">

				<h1>Welcome to CodeIgniter Xtend <?= \Xtend\Xtend::VERSION ?></h1>

				<h2>Alat yang kami rancang sebagai manajemen extension di atas Framework Codeigniter</h2>

			</div>

		</header>

		<!-- CONTENT -->
		<section>

			<h1>About this page</h1>

			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you will find it located at:</p>

			<pre><code>application/views/welcome_message.php</code></pre>

			<p>The corresponding controller for this page can be found at:</p>

			<pre><code>application/controllers/Welcome.php</code></pre>

		</section>

		<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
		<footer>
			<div class="environment">

				<p>Page rendered in {elapsed_time} seconds</p>

				<p>Environment: <?= ENVIRONMENT ?></p>

			</div>

			<div class="copyrights">

				<p>&copy; <?= date('Y') ?> open source project released under the MIT open source licence.</p>

			</div>

		</footer>
	</body>

</html>
