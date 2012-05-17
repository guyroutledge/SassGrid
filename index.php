<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../stylesheets/screen.css">
</head>
<body>
<div class="grids">
	<div class="grid-12 intro">
		<h1>Compass Fluid Grid Generator</h1>
		<p>Just include <a href="scss/_grid.scss">this mixin</a></p>
		<p>It takes three arguments: your desired number of columns, column width and gutter with.</p>
		<p class="code"><code>@include generate-grid($cols, $width, $gutters)</code></p>
		<p>For example, the example below generates a typical 16-column '960px' grid with '20px' gutters<br>
		Resize your browser window to see the fluidness in action.</p>
		</p>
		<p class="code"><code>@include generate-grid(16, 40, 20)</code></p>
	</div>
</div>
<div class="grids example">
	<div class="grid-16">16</div>
	<div class="grid-15">15</div><div class="grid-1">1</div>
	<div class="grid-14">14</div><div class="grid-2">2</div>
	<div class="grid-13">13</div><div class="grid-3">3</div>
	<div class="grid-12">12</div><div class="grid-4">4</div>
	<div class="grid-11">11</div><div class="grid-5">5</div>
	<div class="grid-10">10</div><div class="grid-6">6</div>
	<div class="grid-9">9</div><div class="grid-7">7</div>
	<div class="grid-8">8</div><div class="grid-8">8</div>
	<div class="grid-7">7</div><div class="grid-9">9</div>
	<div class="grid-6">6</div><div class="grid-10">10</div>
	<div class="grid-5">5</div><div class="grid-11">11</div>
	<div class="grid-4">4</div><div class="grid-12">12</div>
	<div class="grid-3">3</div><div class="grid-13">13</div>
	<div class="grid-2">2</div><div class="grid-14">14</div>
	<div class="grid-1">1</div><div class="grid-15">15</div>
	<div class="grid-16">16</div>
</div>
<p>Probably needs love, feel free to give it some</p>
</body>
</html>