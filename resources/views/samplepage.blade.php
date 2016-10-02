<!DOCTYPE html>
<html>
<head>
	<title>Sample Page</title>
</head>
<body>
<h1>Welcome to my page</h1>
{{$cases->caseno. " - " .$cases->casetitle}}
</br>
<!-- ok so still working..basically iya gi padali ang pag render sa imu php..kaysa mag gamit ka php tags..naa pa daghan nga pulos ang blade..pero i.google nalang..like gusto ka mag tempalate..-->
<ul>
	@foreach ($cases->payments as $case)
		<li>
			{{$case->amount}}
		</li>
	@endforeach	
</ul>


</body>
</html>