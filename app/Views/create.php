<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.css' integrity='sha512-H+HWO9L7oLHex/9VCN9kyGaYp96jiJUwadh87k24XzAe+7eLmCdsdaEOfeZTaFmdZ0y4SDdq0eLh8+1OMJQ50g==' crossorigin='anonymous'/>

    <title>Document</title>
</head>
<body>
    <section class="container">

        <h1>Aggiungi nuovo Film</h1>
        
        <?php
        $validation = \Config\Services::validation();
        ?>

        <div class="card">
            <div class="card-body">
                <form action="<?php echo base_url("create_validation") ?>" method="post">
                    <div class="form-group my-4">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" class="form-control">
                        <?php
                            if($validation->getError('title'))
                            {
                                echo "
                                <div class='alert alert-danger mt-2'>
                                ". $validation->getError('title') ."
                                ";
                            }
                            ?>
                    </div>
                    <div class="form-group my-4">
                        <label for="description">Descrizione</label>
                        <textarea rows="4" form="userform" name="description" class="form-control"></textarea>    
                    </div>
                    <div class="form-group my-4">
                        <label for="genre">Genere</label>
                        <input type="text" name="genre" class="form-control">
                        <?php
                            if($validation->getError('genre'))
                            {
                                echo "
                                <div class='alert alert-danger mt-2'>
                                ". $validation->getError('genre') ."
                                ";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <button tyoe="submit" class="btn btn-primary">Aggiungi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </body>
    </html>