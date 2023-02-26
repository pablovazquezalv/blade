<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Jugadores</title>
</head>
<body class="bg-dark-subtle">
  <div class="bg-dark p-2 text-white"><h1 class="mt-2 text-center">Jugadores Registrado</h1> </div>
<div class="container text-center">
  <div class="row">
    <div class="col-2">
       <a type="button" class="mt-2 btn btn-success" href="/crear/jugador"><i class="bi bi-arrow-left-square"></i>Registrar</a></button> 
    </div>
    <div class="mt-2 col-8">
    <table class=" table table-striped">
        <thead class="bg-black text-white rounded-5">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Edad</th>
            <th scope="col">Equipo</th>
            <th scope="col">Acciones</th>
            <th></th>
            </tr>
        </thead>
            <tbody class="bg-light text-black">
                @foreach ($jugadores as $equipo)
                <tr>
                <td>{{$equipo->id}} </td>
                <td>{{$equipo->nombre}} </td>
                <td>{{$equipo->apellido_paterno}}</td>
                <td>{{$equipo->apellido_materno}}</td>
                <td>{{$equipo->edad}}</td>
                <td>{{$equipo->team}}</td>
                <td>
                 <a href="{{ url('editarurlj/'.$equipo->id)}}" type="button" class="btn btn-warning"><i class="bi bi-arrow-left-square"></i>
                  Editar</a>
                </td>
               <td>
                <button type="button" onclick="mostrar()" class="btn btn-danger formulario" href="{{ url('eliminar/'.$equipo->id)}}">
                    <i class="bi bi-x-circle"></i>Eliminar</button></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    
  </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">Swal.fire("Hello world!");</script>
<script type="text/javascript">

function mostrar()
{
  var respuesta=confirm("Estas seguro de eliminar?");

  if(respuesta==True)
  {
    return true;
  }
  else
  return false;
}
</script>
<script src="sweetalert2.min.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>