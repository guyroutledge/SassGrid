# Compass/SASS Fluid Grid Generator

## What is this?

A fluid grid is a great starting point for building responsive websites but transforming pixels into percentages can sometimes be a bit of a head-scratcher. There are plenty of online grid generators but this is pure CSS and dynamic, thanks to the power of Compass/SASS mixins.

## How does it work?

Just add "scss/_grid.scss" to a Compass/SASS project, call the mixin, compile your stylesheet and you're done. You only need to write 1 line of code and Compass does all the magic for you:

	@include generate-grid($_cols, $_width, $_gutters, [$_grid_wrapper], [$_guides], [$_color])

That's it. Simple.

## Tell me more...

Using some simple maths, compass generates your grid based on the arguments passed to the mixin. These arguments are as follows:

* `$_cols` number of columns
* `$_width` width of each $col in pixels
* `$_gutters` width between $cols in pixels
* `$_grids_wrapper` optional class name for grids container (default: grids)
* `$_guides` optionally show overlay guides (default: false)
* `$_color` color of guides (default: red)

You are probably familiar with the 960.gs grid which is traditionally a 12 or 16 column grid that totals 960px wide. This can easily be replicated using this grid generator (resize browser window to see it respond):

	@include generate-grid(12, 60, 20, true, blue)

## Where can I use it?

Browser support for the Fluid Grid is IE7+ and all modern browsers.

The overlay guides use CSS3 gradients so are not supported in IE9 but all modern browsers have you covered. These can be a bit flaky due to rounding of percentages but they're a good approximation of your grid at various screen sizes. From testing, Firefox seems to produce the most accurate results.

### License

Just use it. Fork it, change it, copy it, distribute it, give it some love.