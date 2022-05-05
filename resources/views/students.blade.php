<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>students</title>
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">

</head>
<body>
    <div class="container">
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Cne</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">tel</th>
            <th scope="col">ville</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
             <tr>
                <td scope="row">{{$student->cne}}</td>
                <td>{{$student->firstname}}</td>
                <td>{{$student->lastname}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->tel}}</td>
                <td>{{$student->city}}</td>
              </tr>
            @endforeach
          
        
        </tbody>
      </table>
      </div>
</body>
</html>