<html>
<head></head>
<body>


<form label="test" action="/saveTest" method="POST">
@csrf
<label>Name</label>
<input type="text" name="name" />
<br>
<label> Email</label>
<input type="email" name="email" />
<label>Address</label>
<input type="text" name="address" />
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<button type="submit" name"submit">Submit</button>
</body>
</html>
