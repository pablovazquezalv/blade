<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Actualizar Jugador</title>
</head>
<body class="bg-dark-subtle">
    <div class="bg-warning p-2 text-white"><h1 class="mt-2 text-center">Actualizar Jugadores</h1> </div>

<div class="container">
  <div class="row">
    <div class="col-3">
    </div>
    <form method="POST" action="{{url('actualizar/'.$jugadores->id)}}">
       @csrf
        <div class="col-6"style="text-align: left;">
        <div class="mb-3">
            <label for="Nombre" class="form-label @error('nombre') is-invalid @enderror" style="text-align: left;">Nombre </label>
            <input type="text" class="form-control" name="nombre" placeholder="Escribe el nuevo nombre del jugador">
            @error('nombre')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="apellido_paterno" class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" placeholder="Escribe el nuevo Apellido apellido_paterno">
            @error('apellido_paterno')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>  
        <div class="mb-3">
            <label for="apellido_materno" class="form-label">Apellido materno</label>
            <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" placeholder="Escribe el nuevo Apellido materno">
            @error('apellido_materno')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number"min="0" max="120" class="form-control" name="edad" id="edad" placeholder="Escribe la nueva edad">
            @error('edad')
            <small style="color: red">{{$message}}</small>
            @enderror
        </div>
           <div class='mb-3'>
                <label class='control-label'>Equipo</label>
                          
                <select name='equipo_id' class='form-select'>
                    @foreach ($equipos as $equipo)                     
                                    <option value="{{$equipo->id}}" >{{$equipo->nombre}}</option>
                                    @endforeach    
                                </select>      
                            </div>
                        </div>
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