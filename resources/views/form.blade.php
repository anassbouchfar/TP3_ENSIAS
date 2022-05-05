<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
  <!-- Content here -->

    <form method="POST" action="{{route('students.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Cne</label>
            <input name="cne" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer cne">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Nom</label>
            <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Nom">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Prénom</label>
            <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Prénom">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tel</label>
            <input name="tel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Tel">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Ville</label>
            <input name="city" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer Ville">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
</body>
</html>