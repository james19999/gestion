<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
      <h1>Liste des élèves</h1>

      <table class="table table-dark">
          <thead>
      <tr>
          <th scope="col">Numéro</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">Sexe</th>
        <th scope="col">Age</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Eleves as $Eleve )
      <tr>
        <th scope="row">{{  $Eleve->id }}</th>
        <td>{{ $Eleve->nom }}</td>
        <td>{{ $Eleve->prenom }}</td>
        <td>{{ $Eleve->sexe }}</td>
        <td>{{ $Eleve->age }}</td>
        <td>{{ $Eleve->date_naissance }}</td>

      </tr>
      @endforeach

    </tbody>
  </table>
</body>
</html>
