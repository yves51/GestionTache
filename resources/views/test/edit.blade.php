
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
   <div class="container" style="text-align: center"><h1>Modifier une tâche </h1></div><br>
    <div class="container" style="position: relative; left:30%">
        <form class="row g-3 needs-validation" action="{{ route('enregistrer-une-modification-de-tache', $tache->id ) }}" method="POST">
            @csrf
            <div class="col-md-3">
              <label for="validationCustom03" class="form-label">Titre</label>
              <input type="text" name="titre" class="form-control" value="{{ $tache->titre }}" id="validationCustom03" required>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Status</label>
              <select class="form-select" id="" name="etat">
                <option value="">Choisir</option>
                <option value="encours">En cours</option>
                <option value="terminee">Terminée</option>
              </select>
            </div>
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Ajouter</button>
            </div>
          </form>
    </div>
</body>
</html>