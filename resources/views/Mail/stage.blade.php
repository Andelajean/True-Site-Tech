<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de candidature</title>
</head>
<body>
    <h1>Bonjour {{ $application->name }}</h1>
    <p>Merci d'avoir soumis votre candidature ! Voici les informations que vous avez fournies :</p>
    <ul>
        <li><strong>Nom :</strong> {{ $application->name }}</li>
        <li><strong>Email :</strong> {{ $application->email }}</li>
        <li><strong>Téléphone :</strong> {{ $application->phone }}</li>
        <li><strong>Message :</strong> {{ $application->message ?? 'Aucun message fourni' }}</li>
    </ul>
    <p>Nous examinerons votre candidature et nous vous contacterons sous peu.</p>
    <p>Merci,<br>L'équipe de recrutement</p>
</body>
</html>
