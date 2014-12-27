<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="/chocolatechip-ui/chui-ios-3.7.0.min.css" type="text/css">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script>
	$(document).ready(function(){
			$.getJSON( "http://localhost:8000/api/v1/notification", function( data ) {
			  var items = [];
			  $.each( data.notifications, function( key, val ) {
			    items.push( "<li id='" + key + "'>" + val.notification + "</li>" );
			  });
			 
			  $("<h2>Notifications</h2>").appendTo("body");

			  $( "<ul/>", {
			    "class": "list",
			    html: items.join( "" )
			  }).appendTo( "body" );
			});
	});

	</script>

</head>
<body>
	
</body>
</html>
