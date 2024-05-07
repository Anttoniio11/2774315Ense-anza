<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actualizar Curso</h1>
    <form action="{{route('curso.update', $curso)}}"  method="POST">

@csrf
@method('put')
<label>
Name:
<br>
<input name="name" type="text" value="{{old('Name',$curso->name) }}">
<br>
</label>
<br>
<label>
Descripcion:
<br>
<input name="descripcion" type="text" value="{{old('escripcion',$curso->descripcion)}}">
<br>
</label>
<br>

<button  type="submit">Actualizar Curso</button>

</form>
</body>
</html>