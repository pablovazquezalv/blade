<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Registrar Equipos</title>
</head>
<body class="bg-dark-subtle">
    <div class="bg-primary p-2 text-white"><h1 class="mt-2 text-center">Registrar Equipos</h1> </div>

<div class="container">
  <div class="row">
    <div class="col-4 mt-2">
    <button type="" class="col-4 btn btn-dark"><i class="bi bi-arrow-left-square"></i>
                <a  href="/ver/equipos">Ver</a></button>
    </div>

        <div class="col-6"style="text-align: left;">
        <form method="POST" action="{{route('crear.equipo')}}">
       @csrf
        <div class="mb-3">
            <label for="Nombre" class="form-label" style="text-align: left;">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Escribe el nombre del club">
            @error('nombre')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="propetario" class="form-label">Propetario</label>
            <input type="text" class="form-control" name="propietario" id="propetario" placeholder="Escribe nombre del propetario">
            @error('propietario')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado o Residencia</label>
            <input type="text" class="form-control" id="Estado" name="estado" placeholder="Escribe el estado de donde es el equipo">
            @error('estado')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
   
    </div>
    
    <div class="col-2">
   
    </div>
   
  </div>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>