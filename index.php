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

	<h2>How do I use it?</h2>

	<p>The generated CSS uses SASS silent placeholder classes which gives you
	the flexibility to name your grids with nice "human readable" class
	names and use the SASS <span class="code">@extend</span> feature to allow them to inherit the
	properties of each grid unit.</p>

	<p><pre><code class="code">&lt;!-- The HTML --&gt;
&lt;div class="homepage"&gt;
  &lt;div class="homepage-features"&gt;
    &lt;article class="homepage-feature"&gt;&lt;/article&gt;
    &lt;article class="homepage-feature"&gt;&lt;/article&gt;
    &lt;article class="homepage-feature"&gt;&lt;/article&gt;
    &lt;article class="homepage-feature"&gt;&lt;/article&gt;
  &lt;/div&gt;
  &lt;div class="homepage-latest-posts"&gt;
    &lt;article class="homepage-latest-post"&gt;&lt;/article&gt;
    &lt;article class="homepage-latest-post"&gt;&lt;/article&gt;
  &lt;/div&gt;
&lt;/div&gt;


// The SCSS
.homepage {
  @extend %grids;
}
.homepage-feature {
  @extend %grid-6-of-24; // 4 equal columns
}
.homepage-latest-post {
  @extend %grid-12-of-24; // 2 equal columns
}

</code></pre></p>

	<h3>You can also do nested grids</h3>

	<p><pre><code class="code">&lt;!-- The HTML --&gt;
&lt;div class="homepage-feature-products"&gt;
  &lt;section class="homepage-feature-products-container"&gt;
    &lt;article class="homepage-feature-product"&gt;.homepage-feature-product&lt;/article&gt;
    &lt;article class="homepage-feature-product"&gt;.homepage-feature-product&lt;/article&gt;
    &lt;article class="homepage-feature-product"&gt;.homepage-feature-product&lt;/article&gt;
    &lt;article class="homepage-feature-product"&gt;.homepage-feature-product&lt;/article&gt;
  &lt;/section&gt;
&lt;/div&gt;


// The SCSS
.homepage-feature-products {
  @extend %grid-12-of-24; // one of 2 equal columns
}
.homepage-feature-products-container {
  @extend %grids; // nested grid container
}
.homepage-feature-product {
  @extend %grid-12-of-24; // 2 equal columns inside nested grid
  // as the grid uses percentages, each nested grid container
  // becomes a grid of (for example) 24 columns which means to
  // have a 2-column layout within a 2-column layout, you will
  // need to @extend grid-12-of-24.
}
	</code></pre></p>

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
<p>Uses generic container class and generic grid naming convention</p>
<p><code class="code">@include generate-grid(12, 60, 20)</code></p>

<div class="grids example">
	<div class="grid-12">.grid-12</div>
	<div class="grid-11">.grid-11</div><div class="grid-1">.grid-1</div>
	<div class="grid-10">.grid-10</div><div class="grid-2">.grid-2</div>
	<div class="grid-9">.grid-9</div><div class="grid-3">.grid-3</div>
	<div class="grid-8">.grid-8</div><div class="grid-4">.grid-4</div>
	<div class="grid-7">.grid-7</div><div class="grid-5">.grid-5</div>
	<div class="grid-6">.grid-6</div><div class="grid-6">.grid-6</div>
	<div class="grid-5">.grid-5</div><div class="grid-7">.grid-7</div>
	<div class="grid-4">.grid-4</div><div class="grid-8">.grid-8</div>
	<div class="grid-3">.grid-3</div><div class="grid-9">.grid-9</div>
	<div class="grid-2">.grid-2</div><div class="grid-10">.grid-10</div>
	<div class="grid-1">.grid-1</div><div class="grid-11">.grid-11</div>
	<div class="grid-12">.grid-12</div>
</div>

<h3>960px 16-Column Fluid Grid with 20px Gutters</h3>
<p>Uses descriptive naming convention for classes and leverages <code>@extend</code></p>
<p><code class="code">@include generate-grid(16, 40, 20, grids-16)</code></p>

<div class="homepage example">
	<div class="homepage-slideshow">.homepage-slideshow</div>
	<section>
		<article class="homepage-feature">.homepage-feature</article>
		<article class="homepage-feature">.homepage-feature</article>
		<article class="homepage-feature">.homepage-feature</article>
	</section>
	<section>
		<aside class="homepage-feature-product-details">.homepage-feature-product-details</aside>
		<div class="homepage-feature-products">
			<p>.homepage-feature-products (with nested grid)</p>
			<section>
				<article class="homepage-feature-product">.homepage-feature-product</article>
				<article class="homepage-feature-product">.homepage-feature-product</article>
				<article class="homepage-feature-product">.homepage-feature-product</article>
				<article class="homepage-feature-product">.homepage-feature-product</article>
			</section>
		</div>
	</section>
	<section>
		<div class="homepage-latest-blog-post">.homepage-latest-blog-post</div>
		<div class="homepage-latest-tweets">.homepage-latest-tweets</div>
	</section>
</div>

<h3>Example of changing source order</h3>
<p>Sometimes the most important content and visual layout don't match up
but you can modify your grid by pushing (moving right) and pulling
(moving left) your containers by <span class="code">@extend</span>ing them
with selectors like <span class="code">%pull-8-of-24</span>.</p>

<div class="pushpull example">
	<div class="push-12-of-24">.push-12-of-24 (first in source order</div>
	<div class="pull-12-of-24">.pull-12-of-24</div>
	<div class="push-16-of-24">.push-16-of-24 (first in source order)</div>
	<div class="pull-8-of-24">.pull-8-of-24</div>
</div>

</body>
</html>
