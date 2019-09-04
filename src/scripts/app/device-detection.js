// Device detection
// Only for legacy support. Prefer feature detection or media queries.

function detectDevice(formFactor) {
	if (formFactor === 'Smartphone') {
		$("body").addClass("phone");
	}
}
