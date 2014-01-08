function get_build() {
	title = $('#title').val();
	race = $('#race').val();
	text = $('#build').val();

	lines = text.split("\n");
	html = "";
	lines.forEach(function(elem) {
		html += match_line(elem);
	});
	$('#build-preview').html(html);
}

function match_line(line) {
	match = line.match(/^(\d+)\s-\s(.+$)/);
	if (match) {
		return item(match[1], match[2]);
	}

	match = line.match(/^@(\d+)\s(minerals|vespene|gas)\s-\s(.+$)/);
	if (match) {
		return resource_item(match[2], match[1], match[3]);
	}

	match = line.match(/^@100%\s([\w\s]+)\s-\s(.+)$/);
	if (match) {
		return event_item(match[1], match[2]);
	}

	return "<a class='list-group-item'>" + escapeHtml(line) + "</a>";
}

function item(supply, name) {
	return "<a class='list-group-item'><span class='badge'><img src='/build/img/protoss_supply.gif'>&nbsp;" + escapeHtml(supply) + "</span><span style='margin-left: 10px'>" + escapeHtml(name) + "</span></a>";
}

function resource_item(resource, amount, name) {
	if (resource == 'gas' || resource == 'vespene') {
		resource = "vespene-" + $('#race').val() + ".gif";
	}
	if (resource == 'minerals') {
		resource = 'minerals.gif';
	}
	return "<a class='list-group-item'><span class='badge'><img src='/build/img/" + resource + "'>&nbsp;" + escapeHtml(amount) + "</span><span style='margin-left: 10px'>" + escapeHtml(name) + "</span></a>";
}

function event_item(title, body) {
	return "<a class='list-group-item'><span class='badge'>&nbsp;" + escapeHtml(title) + "</span><span style='margin-left: 10px'>" + escapeHtml(body) + "</span></a>";
}

function escapeHtml(text) {
    return text
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}
