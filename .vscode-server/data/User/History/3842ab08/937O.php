<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Langue</td>
                <td>Concessionnaire</td>
                <td>Infos personnelles</td>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Civilité</td>
                <td>Date de naissance</td>
                <td>Photo de profil</td>
                <td>Communications marketting</td>
                <td>Offres personnalisées</td>
                <td>KeepMeInformed</td>
                <td>Email</td>
                <td>Mot de passe</td>
                <td>Est active</td>
                <td>Type de compte</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($voitures as $voiture)
            <tr>
                <td>{{$voiture -> idcompte}}</td>
                <td>{{$voiture -> langue}}</td>
                <td>{{$voiture -> concessionnaire}}</td>
                <td>{{$voiture -> infospersos}}</td>
                <td>{{$voiture -> prenomclient}}</td>
                <td>{{$voiture -> nomclient}}</td>
                <td>{{$voiture -> civilite}}</td>
                <td>{{$voiture -> datenaissance}}</td>
                <td>{{$voiture -> photoprofil}}</td>
                <td>{{$voiture -> communicationsmarketting}}</td>
                <td>{{$voiture -> offrespersonnalisees}}</td>
                <td>{{$voiture -> keepmeinformed}}</td>
                <td>{{$voiture -> emailclient}}</td>
                <td>{{$voiture -> motdepasseclient}}</td>
                <td>{{$voiture -> estactive}}</td>
                <td>{{$voiture -> typecompte}}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>