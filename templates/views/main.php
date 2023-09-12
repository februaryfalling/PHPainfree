<main>
	<h1>PHPainfree Application Code</h1>
	<div>
		This template is called "main.php" and is loaded as the default route.
	</div>
	<h2>Access</h2>
	<div>
		It is accessible via <a href="/" hx-get="/" hx-target="#app-body">/</a> and 
		<a href="/main" hx-get="/main" hx-target="#app-body">/main</a>.
	</div>
	<h2>htmx</h2>
	<div>
		<a href="https://github.com/februaryfalling/phpainfree">PHPainfree v2</a> v2
		has a deep connection to <a href="https://htmx.org">htmx</a>. Any request
		made to a view template by htmx will render <strong>only</strong> the 
		view template and won't re-render the entire page.
	</div>
	<h3>htmx examples</h3>
	<div>
		<ul>
			<li>
				<a href="/partial" hx-get="/partial" hx-target="#partial-div">
					Partial Content Example
				</a>
			</li>
			<li>
				<a href="/second" hx-get="/second" hx-target="#app-body" hx-push-url="true">
					"Page Navigation Example" to /second
				</a>
			</li>
		</ul>
	</div>
	<div id="partial-div" style="background-color: #ccc; border: 1px solid #000; padding: 8px;">
		This box will be replaced when the "partial" link is clicked.
	</div>
</main>
