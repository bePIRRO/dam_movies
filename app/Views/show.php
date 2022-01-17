<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.css' integrity='sha512-H+HWO9L7oLHex/9VCN9kyGaYp96jiJUwadh87k24XzAe+7eLmCdsdaEOfeZTaFmdZ0y4SDdq0eLh8+1OMJQ50g==' crossorigin='anonymous'/>

    <title>DAM - Movies</title>
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="row">
                <div class="col-4">
                    Titolo: <?php echo $movie['title'] ?>
                </div>
                <div class="col-8">
                    <?php echo $movie['description'] ?>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    Genere: <?php echo $movie['genre'] ?>
                </div>
                <div class="col-8 text-end">
                <a href="<?php echo base_url('/') ?>" class="btn btn-secondary">Indietro</a>
                </div>
            </div>
        </div>
      
    </section>
</body>
</html>