<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site laravel sur les carriére</title>
    <meta descriprtion="">
</head>
<body>
    <li><a href="http://127.0.0.1:8000/"> Acceuill</i></a></li>
    <h1> Les concession</h1>
    @foreach($concessions as $concession)
    <table>
        <tr>
            <td>La concession {{$concession->name}}</td>
            <td>SIRET : {{$concession->siret}}</td>
        </tr>
    </table>
    @endforeach
</body>
</html>