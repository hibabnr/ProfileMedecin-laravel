<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>créer un formulaire</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <input type="text" name="title" value="article de demonstaration"><br>
        <textarea  name="content">content de demonstaration</textarea><br>
        <button>enregistrer</button>
    </form>
</body>
</html>
