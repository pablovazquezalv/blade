<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Equipos</title>
</head>
<body class="bg-dark-subtle">
  <div class="bg-dark p-2 text-white"><h1 class="mt-2 text-center">Equipos Existentes</h1> </div>
<div class="container text-center" style="color: rgb(126, 235, 149)">
  <div class="row">
    <div class="mt-2 col-2">
      <a type="button" href="/crear/equipo" class="mt-2 btn btn-dark">
        <i class="bi bi-arrow-left-square"></i> Registrar</a>   
    </div>
    <div class="mt-2 col-6">
     <table class=" table table-striped">
        <thead class="bg-dark text-white">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Propietario</th>
            <th scope="col">Estado</th>
            <th scope="col-2"></th>
            <th scope="col">Acciones</th>
            <th scope="col"></th>
            </tr>
        </thead>
            <tbody class="bg-light text-black">
                @foreach ($equipos as $equipo)
                <tr>
                <td>{{$equipo->id}} </td>
                <td>{{$equipo->nombre}} </td>
                <td>{{$equipo->propietario}}</td>
                <td>{{$equipo->estado}}</td>
                <td>
                  <a class="btn btn-warning" type="button " href="{{ url('editarurle/'.$equipo->id)}}" >
                    <i class="bi bi-arrow-left-square"></i>Editar</a> 
                </td>
                 <td>
                  <button onclick="mostrar()" class="btn btn-danger" type="button"
                   href="{{ url('eliminare/'.$equipo->id)}}">
                    <i class="bi bi-arrow-left-square"></i>
                    Eliminar
                  </button>
                </td>
               <td>
                <a type="button"  href="{{ url('crear/jugadorequipo/'.$equipo->id)}}" class="btn btn-success formulario"><i class="bi bi-caret-down-fill"></i>
                Agregar Jugadores</a></td>
                </tr>
                @endforeach

            </tbody>
        </table>

      </div> 
  
      <div class="col-4">
        <img  src="https://cdn-icons-png.flaticon.com/512/3098/3098946.png" alt="" width="214px" height="214px">
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
  return ;
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>