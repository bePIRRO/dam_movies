<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sium</h1>

    <h2>Aggiungi nuovo Film</h2>

    <?php
        $validation = \Config\Services::validation();
    ?>

    <div class="card">
        </div>
        <div class="card-body">
            <form action="<?php echo base_url("/create") ?>" method="post">
                <div class="form-group">
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
                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea rows="4" form="usrform" name="description" class="form-control">
                        
                </div>
                    <div class="form-group">
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
</body>
</html>