# Compass/SASS Fluid Grid Generator

## What is this?

A fluid grid is a great starting point for building responsive websites but transforming pixels into percentages can sometimes be a bit of a head-scratcher. There are plenty of online grid generators but this is pure CSS and dynamic, thanks to the power of Compass/SASS mixins.

## How does it work?

Just add "scss/_grid.scss" to a Compass/SASS project, call the mixin, compile your stylesheet and you're done. You only need to write 1 line of code and Compass does all the magic for you:

	@include generate-grid($_cols, $_width, $_gutters, [$_grid_wrapper])

That's it. Simple.

## How do I use it?

The generated CSS uses SASS silent placeholder classes which gives you
the flexibility to name your grids with nice "human readable" class
names and use the SASS `@extend` feature to allow them to inherit the
properties of each grid unit.

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

	<!-- The HTML -->

	<div class="homepage">
		<div class="homepage-features">
			<article class="homepage-feature"></article>
			<article class="homepage-feature"></article>
			<article class="homepage-feature"></article>
			<article class="homepage-feature"></article>
		</div>
		<div class="homepage-latest-posts">
			<article class="homepage-latest-post"></article>
			<article class="homepage-latest-post"></article>
		</div>
	</div>

### You can also do nested grids

	<!-- The HTML -->
	<div class="homepage-feature-products">
	<section class="homepage-feature-products-container">
		<article class="homepage-feature-product">.homepage-feature-product</article>
		<article class="homepage-feature-product">.homepage-feature-product</article>
		<article class="homepage-feature-product">.homepage-feature-product</article>
		<article class="homepage-feature-product">.homepage-feature-product</article>
	</section>
	</div>

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

### You can also change the source order

Sometimes the most important content and visual layout don't match up
but you can modify your grid by pushing (moving right) and pulling
(moving left) your containers by `@extend`ing them with selectors like
`%pull-8-of-24`.


	<!-- The HTML -->

	<div class="pushpull example">
		<div class="push-12-of-24">.push-12-of-24 (first in source order)</div>
		<div class="pull-12-of-24">.pull-12-of-24</div>
		<div class="push-16-of-24">.push-16-of-24 (first in source order)</div>
		<div class="pull-8-of-24">.pull-8-of-24</div>
	</div>

	// The SCSS

	.pushpull {
		@extend %grids-24;
		max-width:960px;
	}
	.push-12-of-24 {
		@extend %grid-12-of-24;
		@extend %push-12-of-24;
	}
	.pull-12-of-24 {
		@extend %grid-12-of-24;
		@extend %pull-12-of-24;
	}
	.push-16-of-24 {
		@extend %grid-8-of-24;
		@extend %push-16-of-24;
	}
	.pull-8-of-24 {
		@extend %grid-16-of-24;
		@extend %pull-8-of-24;
	}

## Tell me more...

Using some simple maths, compass generates your grid based on the arguments passed to the mixin. These arguments are as follows:

* `$_cols` number of columns
* `$_width` width of each $col in pixels
* `$_gutters` width between $cols in pixels
* `$_grids_wrapper` optional class name for grids container (default: grids)

You are probably familiar with the 960.gs grid which is traditionally a 12 or 16 column grid that totals 960px wide. This can easily be replicated using this grid generator (resize browser window to see it respond):

	@include generate-grid(12, 60, 20)

## Where can I use it?

Browser support for the Fluid Grid is IE7+ and all modern browsers.

### License

Just use it. Fork it, change it, copy it, distribute it, give it some love.

### Changelog

#### 11 Jun 2013

* Add ability to work around source order
* Use SASS placeholders instead of classes

#### 10 Jun 2013

* Use clearfix instead of `overflow:hidden`
* Removed gradient overlays

#### 13 May 2012

* Initial version

