/* global module */
/* http://cssnano.co/optimisations/ */
module.exports = {
	options: {
		//Removes unnecessary prefixes based on the browsers option.
		autoprefixer: false,
		// Reduces CSS calc expressions
		calc: false,
		// Converts between hex, hsl, rgb and CSS keywords
		colormin: false,
		//Converts between equivalent length, time & angle values
		convertValues: false,
		// Trims whitespace and semicolons
		core: true,
		// Removes comments unless marked with '!'
		discardComments: true,
		// Removes duplicated rules
		discardDuplicates: true,
		// Removes empty rules
		discardEmpty: true,
		// Removes at-rules which have the same identifier as another
		discardOverridden: false,
		// Removes at-rules that do not have any bearing on the CSS file
		discardUnused: false,
		// Trims whitespace in filter functions
		filterOptimiser: true,
		// Trims whitespace in CSS functions
		functionOptimiser: true,
		// Merge rule identifiers with different naming that do the same thing
		mergeIdents: false,
		// Collapses longhand properties into the shorthand representation
		mergeLonghand: true,
		// Merges adjacent rules by selectors
		mergeRules: true,
		// Normalizes font & font-family declarations
		minifyFontValues: true,
		// Normalizes linear and radial gradient parameters.
		minifyGradients: true,
		// Trims whitespace from/normalizes at-rule parameters
		minifyParams: true,
		// trims & normalizes selector strings
		minifySelectors: true,
		// Ensures that only a single @charset is present in the CSS file
		normalizeCharset: true,
		// In URLs, resolve unnecessary directory traversal & unquote the value
		normalizeUrl: false,
		// Normalizes argument order
		orderedValues: true,
		// Reduces the two value syntax for background-repeat into the single value syntax
		reduceBackgroundRepeat: true,
		// Renames at-rules such as @keyframes
		reduceIdents: false,
		// Replaces `initial` keyword with actual value (if smaller)
		reduceInitial: true,
		// Normalizes position values
		normalizePositions: true,
		// Normalizes transition timing
		reduceTimingFunctions: true,
		// Converts between transform functions when there is a shorthand
		reduceTransforms: false,
		// with other Postcss plugins: normalize the whitespace created by generating rules
		styleCache: false,
		// Compresses inline SVG definitions with SVGO
		svgo: false,
		// Naturally sorts selectors for every rule, and removes duplicates
		uniqueSelectors: false,
		// Rebases z-index values
		zindex: false
	}
};
