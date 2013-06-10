<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/screen.css">
</head>
<body>
<div class="intro">
	<h1>Compass/SASS Fluid Grid Generator</h1>

	<h2>What is this?</h2>

	<p>A fluid grid is a great starting point for building responsive websites but transforming pixels into percentages can sometimes be a bit of a head-scratcher. There are plenty of online grid generators but this is pure CSS and dynamic, thanks to the power of Compass/SASS mixins.</p>

	<h2>How does it work?</h2>

	<p>Just add <a href="scss/_grid.scss">these few lines of CSS</a> to a Compass/SASS project, call the mixin, compile your stylesheet and you're done. You only need to write 1 line of code and Compass does all the magic for you:</p>

	<p><code class="code">@include generate-grid($_cols, $_width, $_gutters, [$_grid_wrapper])</code></p>

	<p>That's it. Simple.</p>

	<h2>Tell me more...</h2>

	<p>Using some simple maths, compass generates your grid based on the arguments passed to the mixin. These arguments are as follows:</p>

	<pre>
		<ul>
			<li><span class="code">$_cols</span> number of columns</li>
			<li><span class="code">$_width</span> width of each $col in pixels</li>
			<li><span class="code">$_gutters</span> width between $cols in pixels</li>
			<li><span class="code">$_grids_wrapper</span> optional class name for grids container (default: grids)</li>
		</ul>
	</pre>

	<p>You are probably familiar with the 960.gs grid which is traditionally a 12 or 16 column grid that totals 960px wide. This can easily be replicated using this grid generator (resize browser window to see it respond):</p>

	<p><code class="code">@include generate-grid(12, 60, 20)</code></p>

	<h2>Where can I use it?</h2>

	<p>Browser support for the Fluid Grid is IE7+ and all modern browsers. </p>

</div>

<h2>Examples</h2>

<h3>960px 12-Column Fluid Grid with 20px Gutters</h3>
<p><code class="code">@include generate-grid(12, 60, 20)</code></p>

<div class="grids example">
	<div class="grid-12">12</div>
	<div class="grid-11">11</div><div class="grid-1">1</div>
	<div class="grid-10">10</div><div class="grid-2">2</div>
	<div class="grid-9">9</div><div class="grid-3">3</div>
	<div class="grid-8">8</div><div class="grid-4">4</div>
	<div class="grid-7">7</div><div class="grid-5">5</div>
	<div class="grid-6">6</div><div class="grid-6">6</div>
	<div class="grid-5">5</div><div class="grid-7">7</div>
	<div class="grid-4">4</div><div class="grid-8">8</div>
	<div class="grid-3">3</div><div class="grid-9">9</div>
	<div class="grid-2">2</div><div class="grid-10">10</div>
	<div class="grid-1">1</div><div class="grid-11">11</div>
	<div class="grid-12">12</div>
</div>

<h3>960px 16-Column Fluid Grid with 20px Gutters</h3>
<p><code class="code">@include generate-grid(16, 40, 20, grids-16)</code></p>
<div class="grids-16 example">
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

<h3>1000px 6-Column Fluid Grid with 20px Gutters</h3>
<p><code class="code">@include generate-grid(6, 150, 20, container)</code></p>
<div class="container example">
	<div class="grid-6">6</div>
	<div class="grid-5">5</div><div class="grid-1">1</div>
	<div class="grid-4">4</div><div class="grid-2">2</div>
	<div class="grid-3">3</div><div class="grid-3">3</div>
	<div class="grid-2">2</div><div class="grid-4">4</div>
	<div class="grid-1">1</div><div class="grid-5">5</div>
	<div class="grid-6">6</div>
</div>

<h3>480px 24-Column Fluid Grid with 5px Gutters</h3>
<p><code class="code">@include generate-grid(24, 15, 5, grids-wrapper)</code></p>
<div class="grids-wrapper example">
	<div class="grid-24">24</div>
	<div class="grid-23">23</div><div class="grid-1">1</div>
	<div class="grid-22">22</div><div class="grid-2">2</div>
	<div class="grid-21">21</div><div class="grid-3">3</div>
	<div class="grid-20">20</div><div class="grid-4">4</div>
	<div class="grid-19">19</div><div class="grid-5">5</div>
	<div class="grid-18">18</div><div class="grid-6">6</div>
	<div class="grid-17">17</div><div class="grid-7">7</div>
	<div class="grid-16">16</div><div class="grid-8">8</div>
	<div class="grid-15">15</div><div class="grid-9">9</div>
	<div class="grid-14">14</div><div class="grid-10">10</div>
	<div class="grid-13">13</div><div class="grid-11">11</div>
	<div class="grid-12">12</div><div class="grid-12">12</div>
	<div class="grid-24">24</div>
</div>
</body>
</html>
