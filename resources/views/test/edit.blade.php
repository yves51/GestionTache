
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
        <form action="{{ route('enregistrer-une-modification-de-tache', $tache->id ) }}" method="POST"><br>
            @csrf
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label>Titre du tâche</label>
                    <input type="text" name="titre" value="{{ $tache->titre }}" class="form-control">
                </div>
                <div class="col-auto">
                    <label for="status">Statut:</label>
                    <select name="status" id="status" class="form-control">
                        <option value="en cours">En cours</option>
                        <option value="terminee">Terminée</option>
                    </select>
                </div>
            </div><br>
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>