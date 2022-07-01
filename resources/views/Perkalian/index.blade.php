<!DOCTYPE html>
<html>
<head>
	<title>Perkalian</title>
</head>
<body>
<h2>Program Perkalian</h2>
<form action="/perkalian/hasilperkalian" method="POST">
	@csrf
	<input type="number" name="angka1">
	x
	<input type="number" name="angka2">
	<button type="submit">cari</button>

</form>

</body>
</html>