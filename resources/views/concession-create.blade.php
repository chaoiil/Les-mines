<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site laravel sur les carriére</title>
    <meta descriprtion="">
</head>
<body>
    <h1>Inserez vos données qui sont pas du tout securisez</h1>
    <form method="post" action="/concession/create">
        @csrf
     <table>
        <tr>
            <td>
                <input type="text" name="name" placeholder="Nom ">
            </td>
            <td>
                <input type="text" name="siret" maxlength="15" placeholder="Numero de CB">
            </td>
            <td>
                <input type="tel" name="phone" placeholder="Numero de telephone">
            </td>
            <td>
                <input type ="submit" value="envoyez"/>
            </td>
        </tr>
     </table>
     <li><a href="/concessions"> Les concession</i></a></li>
</body>
</html>