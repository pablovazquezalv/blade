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
<h1 class="mt-4 mb-2 text-center">Registrar Jugadores a  {{$equipos->nombre}}</h1>
<div class="container">
  <div class="row">
    <div class="col-4">
    <button type="" class="col-4 btn btn-dark"><i class="bi bi-arrow-left-square"></i>
                <a  href="/ver/equipos">Ver</a></button>
    </div>
    
    <div class="mb-3">
      <label for="equipo" class="form-label">Jugadores sin equipo:</label>    
      <select name='id' class='form-select'>
        @foreach ($jugadores as $jugador)                      
            <option value="{{$jugador->id}}" >{{$jugador->nombre}}</option>
          @endforeach    
      </select> 
  </div>

        <div class="col-6"style="text-align: left;">
          <form method="POST"action="{{url('crear/crearequipojugador/'.$jugador->id)}}" class="">
            @csrf
            <input type="hidden" value="{{$equipos->id}}" name="equipo_id">
 
          <button type="submit" class="btn btn-success formulario">asignar </button>
           
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