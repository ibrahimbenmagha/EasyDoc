<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="/crude">
        <table>

        <tr>
            <td><label for="labelid">Id de stagiare</label></td>
            <td><input type="number" id="labelid" name="id"></td>
        </tr>
        <tr>
            <td><label for="name">Nom de stagiare</label></td>
            <td><input type="text" id="name" name="nomde"></td>
        </tr>
        <tr>
            <td><label for="adrs">Adresse de stagiare</label></td>
            <td><input type="text" id="adrs" name="adrs"></td>
        </tr>
        <tr>
            <td colspane="2">
                <button name="action" value="add">Ajouter</button>
                <button name="action" value="update">Modifier</button>
                <button name="action" value="delete">suprimer</button>
            </td>
        </tr>
 </table>
    </form>


    <table border="1">
        <tr>
            <th>Id stagiare</th>
            <th>Nom</th>
            <th>Adresse</th>

        </tr>
        @foreach ($afficheS as $dn)
            <tr>
                <td>{{$dn -> idS}}</td>
                <td>{{$dn -> nom}}</td>
                <td>{{$dn -> adress}}</td>
            </tr>
        @endforeach 
    </table>
</body>
</html>