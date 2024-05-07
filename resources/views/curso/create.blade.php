<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear curso</h1>

    <form action="{{route('cursos.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
            <br>
        </label>
        <br>
        <label>
            descripcion:
            <br>
            <input type="text" name="descripcion">
            <br>
        </label>
       
        <br>
        <label >Adjuntar archivo PDF</label>
        <br>
        <input type="file" name="urlPdf" class="form-control-file" accept="pdf/*">
       
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       
</body>
</html>