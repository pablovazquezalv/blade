<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Actualizar Equipos de Futbol</title>
</head>
<body class="bg-light">
    
    <div class="bg-warning p-2 text-white"><h1 class="mt-2 text-center">Actualizar Equipos</h1> </div>


<div class="container">
  <div class="row">
    <div class="col">
    </div>
    <form method="POST" action="{{url('actualizare/'.$equipos->id)}}" >
       @csrf
        <div class="col-6"style="text-align: left;">
        <div class="mb-3">
            <label for="Nombre" class="form-label" style="text-align: left;">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Escribe el nuevo nombre del club">
            @error('nombre')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="propetario" class="form-label">Propetario</label>
            <input type="text" class="form-control" name="propietario" id="propetario" placeholder="Escribe el nuevo nombre del propetario">
            @error('propietario')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado o Residencia</label>
            <input type="text" class="form-control" id="Estado" name="estado" placeholder="Escribe el nuevo  estado de donde es el equipo">
            @error('estado')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>
    </div>

    <div class="col-3">
    </div>
  </div>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>