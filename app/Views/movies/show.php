<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>single movie</h1>

        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Descrizione</th>
                    <th>Genere</th>
                </tr>
            </thead>
            <tbody>
                <?php if($movies): ?>
                <?php foreach($movies as $movie) : ?>
                <tr>
                    <td><?php echo $movie['title'] ?></td>
                    <td><?php echo $movie['description'] ?></td>
                    <td><?php echo $movie['genre'] ?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
</body>
</html>