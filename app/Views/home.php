<?php $this->extend('default') ?>

<?php $this->section('content') ?>
    <section class="container">
        <?php
            $session = \Config\Services::session();

            if($session->getFlashdata("success")) {
                echo '<div class="alert alert-success">' . $session->getFlashdata("success") . '</div>';
            }
        ?>

        <div class="card">
            <!-- card header -->
            <div class="card-header">
                <div class="row">
                    <div class="col-6 d-flex align-items-center"><h4>Lista Film</h4></div>
                    <div class="col-6 text-end">
                        <a href="<?php echo base_url("create") ?>" class="btn btn-primary">Aggiungi Film</a>
                    </div>
                </div>
            </div>
            <!-- card body -->
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>Titolo</th>
                            <th class="text-center">Descrizione</th>
                            <th>Genere</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if($movies): ?>
                        <?php foreach($movies as $movie) : ?>
                            <tr>
                                <td><?php echo $movie['title'] ?></td>
                                <td class="px-5">
									<?php
										$description = strlen($movie['description']) > 500 ? substr($movie['description'],0,500)."..." : $movie['description'];
										echo $description;
									?>
								</td>
                                <td><?php echo $movie['genre'] ?></td>
                                <td>
									<div class="dropdown">
            								<button class="btn btn-secondary dropdown-toggle" 
												type="button" id="dropdownMenuButton" 
												data-toggle="dropdown" 
												aria-expanded="false">
            								</button>
            							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              								<a href="<?php echo base_url('show/' . $movie['id']) ?>" class="dropdown-item">Vedi</a>
              								<a href="<?php echo base_url('edit/' . $movie['id']) ?>" class=" dropdown-item">Modifica</a>
              									<button type="button" 
                                                    onclick="delete_data(<?php echo $movie['id'] ?>)" 
                                                    class="dropdown-item">
                                                    Elimina
                                                </button>
            							</div>
         							</div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php $this->endSection() ?>