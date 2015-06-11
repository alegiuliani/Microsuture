init();

function init() {
	updateTableQueriesURL();
	//enableActions();
}

/*
function enableActions() {
	window.actionEvents = {
		'click .edit': function (e, value, row, index) {
			alert('You click edit icon, row: ' + JSON.stringify(row));
		},
		'click .remove': function (e, value, row, index) {
			alert('You click remove icon, row: ' + JSON.stringify(row));
		}
	};
}
*/

function updateTableQueriesURL() {
	$('[id^=content_]').each(function(i, value) {
		var n = $(this).attr('id');
		n = n.substring(n.indexOf('_') + 1, n.length);

		$(this).attr('data-url', getQueryURL(n));
	});
}

function getQueryURL(id) {
	return './query.php?ref=' + id + '&c=' + $('#y').attr('value') + $('#m').attr('value');
}

function modeloFormatter(value, row) {
	return '<button type="button" class="btn btn-success btn-xs">' + value + '</button>';
}

function actionFormatter(value, row, index) {
	return [
		'<a class="edit ml10" href="javascript:void(0)" title="Edit">',
		'<i class="glyphicon glyphicon-edit"></i>',
		'</a>',
		'<a class="remove ml10" href="javascript:void(0)" title="Remove">',
		'<i class="glyphicon glyphicon-remove"></i>',
		'</a>'
	].join('');
}