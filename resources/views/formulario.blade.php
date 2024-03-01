<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Formulario</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese el apellido:
    <br>
    <input type="text" name="apellido">
</label>
<br><br>
<label>
    Ingrese la edad:
    <br>
    <input type="text" name="edad">
</label>
<br><br>
<label>
    Ingrese la estatura:
    <br>
    <input type="text" name="estatura" step="any">
</label>
<br><br>

<button type="submit">Enviar Formulario:</button>
</form>

</body>
</html>
