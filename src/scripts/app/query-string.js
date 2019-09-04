function queryStringToJSON() {
	var pairs = location.search.slice(1).split('&');
	var value;
	var result = {};
	for (var i = 0, len = pairs.length; i < len; i++) {
		var pair = pairs[i];
		pair = pair.split('=');
		value = decodeURIComponent(pair[1] || '');
		if (value === 'true') {
			value = true;
		} else if (value === 'false') {
			value = false;
		}
		result[pair[0]] = value;
	}
	return JSON.parse(JSON.stringify(result));
}
