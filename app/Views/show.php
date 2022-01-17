<?php $this->extend('default') ?>

<?php $this->section('content') ?>
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
<?php $this->endsection() ?>