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
    Ingrese nombre del estudiante:
    <br>
    <input type="text" name="nombre del estudiante">
</label>
<br>
<label>
    Ingrese nota 1:
    <br>
    <input type="text" name="nota_1">
</label>
<br>
<label>
    Ingrese nota 2:
    <br>
    <input type="text" name="nota_2">
</label>
<br><br>
<label>
    Ingrese nota 3:
    <br>
    <input type="text" name="nota_3">
</label>
<br><br>
<label>
    Promedio de notas:
    <br>
    <input type="text" name="promedio">
</label>
<br><br>

<button type="submit">Enviar Calificacion:</button>
</form>

</body>
</html>

