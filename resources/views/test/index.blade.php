<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><br>
   <div class="container" style="text-align: center"><h1>La liste des tâches </h1></div><br>
   @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div><br />
        @endif
  <a href="{{route('ajouter-une-tache')}}"><button class="btn btn-primary" style="position: relative; left:80%" >ajouter une tâche</button></a> 
    <div class="container">
        
        <table class="table" style="right: ">
            <thead>
              <tr>
                <th width="3%">Id</th>
                <th width="3%">Titre</th>
                <th width="3%">Date Création</th>
                <th width="3%">Date Modification</th>
                <th width="3%">Status</th>
                <th width="3%">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($taches as $tache)
                <tr>
                    <td>{{$tache->id}}</td>
                    <td>{{$tache->titre}}</td>
                    <td>{{$tache->created_at}}</td>
                    <td>{{$tache->updated_at}}</td>
                    <td>{{$tache->etat}}</td>
                    <td>
                        <a href="{{ route('modifier-une-tache', $tache->id)}}" class="btn btn-primary">Modifier</a>
                        <a type="button" onclick="return confirmRegistre(this)" href="{{ route('supprimer-une-tache', $tache->id)}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    <script>
        // Attendre 5 secondes (5000 millisecondes) puis masquer l'alerte
        setTimeout(function() {
            var alert = document.querySelector('.alert');
            if (alert) {
                alert.style.display = 'none';
            }
        }, 5000);

        function confirmRegistre(el) {
            swal({
                title: "Êtes-vous sûr ?",
                text: "Une fois supprimé, vous ne pourrez pas récupérer ce fichier!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    window.location = el.getAttribute("href");
                } else {
                    swal("Votre fichier est en sécurité !");
                }
                });
                return false;
            }
    </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>