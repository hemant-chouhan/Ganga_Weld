
 
$(document).ready(function(e) {

	_.templateSettings.interpolate = /<\?=([\s\S]+?)\?>/g;

	$script = $('#destination');
	var markup = $script.html();
	var template = _.template(markup);
	var baseurl = $('#baseurl').val();
	$.ajax({

		url:baseurl+"destinations/json",
		dataType:"json",
		complete: function (data ,status) {
			var json = data.responseJSON;	
			var html = '';

			for (var i = 0; i < json.length; i++) {
				json[i]['$size'] = '4';

				for (star = 1; star <= 5; star++) {

					if (star <= json[i].$rating){
						json[i]['$rating'+star] = '';
					}else{
						json[i]['$rating'+star] = '-empty';
					}
				}
				html +=  template(json[i]);
			}
			$script.parent().prepend(html);
		}
	})
});