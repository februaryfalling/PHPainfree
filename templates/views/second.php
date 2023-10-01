<h1>This is a completely separate page!</h1>
<div>
	This is a full page that loads in and overwrites <code>&lt;body id="app-body"&gt;</code>.
</div>
<div>
	In a normal web application, we would rely entirely on a full "GET" to /second
	to load this page. With htmx, we can simply swap out the contents of the 
	page body element with this template content.
</div>
<div>
	However, thanks to the magic of progressive enhancement, if the user has
	Javascript disabled or navigates directly to this page, the user would see 
	the full content of the page.
</div>
