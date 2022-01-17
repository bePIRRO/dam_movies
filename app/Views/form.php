<?php $this->extend('default') ?>

<?php $this->section('content') ?>
    <section class="container">
        <?php
        $validation = \Config\Services::validation();

        if ($movie->exists) {
            $validate = 'edit_validation';
            $btn_value = 'Modifica';
            $title = 'MODIFICA IL FILM';
         } else {
            $validate = 'create_validation';
            $btn_value = 'Aggiungi';
            $title = 'AGGIUNGI UN FILM';
         }
        ?>

        <div class="card">
        <div class="card-header">
                <div class="row">
                <h1 class="m-0"><?php echo $title ?></h1>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url("$validate") ?>" method="post">
                    <div class="form-group my-4">
                        <label for="title">Titolo</label>
                        <input type="text" name="title" class="form-control" placeholder="Titolo" value="<?php echo $movie['title'] ?>">
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
                        <textarea rows="4" form="userform" name="description" class="form-control"><?php echo $movie['description'] ?></textarea>    
                    </div>
                    <div class="form-group my-4">
                        <label for="genre">Genere</label>
                        <input type="text" name="genre" class="form-control" placeholder="Genere" value="<?php echo $movie['genre'] ?>">
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
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><?php echo $btn_value ?></button>
                                </div>
                            </div>

                            <div class="col text-end">
                                <div class="form-group">
                                    <a href="<?php echo base_url('/') ?>" class="btn btn-secondary">Indietro</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $this->endsection() ?>