<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Create QR </title>
	</head>
    
   <body>
        <form action="/qrs/create" method="POST">
            {{ csrf_field() }}
        <input type="submit" value="Create">
        </form>
   </body>

 </html>