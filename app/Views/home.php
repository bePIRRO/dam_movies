<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>DAM - Movies</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.css' integrity='sha512-H+HWO9L7oLHex/9VCN9kyGaYp96jiJUwadh87k24XzAe+7eLmCdsdaEOfeZTaFmdZ0y4SDdq0eLh8+1OMJQ50g==' crossorigin='anonymous'/>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js' integrity='sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==' crossorigin='anonymous'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.js' integrity='sha512-RT3IJsuoHZ2waemM8ccCUlPNdUuOn8dJCH46N3H2uZoY7swMn1Yn7s56SsE2UBMpjpndeZ91hm87TP1oU6ANjQ==' crossorigin='anonymous'></script>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		.menu {
			padding: .4rem 2rem;
		}
		header ul {
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			list-style-type: none;
			margin: 0;
			overflow: hidden;
			padding: 0;
			text-align: right;
		}
		header li {
			display: inline-block;
		}
		header li a {
			border-radius: 5px;
			color: rgba(0, 0, 0, .5);
			display: block;
			height: 44px;
			text-decoration: none;
		}
		header li.menu-item a {
			border-radius: 5px;
			margin: 5px 0;
			height: 38px;
			line-height: 36px;
			padding: .4rem .65rem;
			text-align: center;
		}
		header li.menu-item a:hover,
		header li.menu-item a:focus {
			background-color: rgba(221, 72, 20, .2);
			color: rgba(221, 72, 20, 1);
		}
		header .logo {
			float: left;
			height: 44px;
			padding: .4rem .5rem;
		}
		header .menu-toggle {
			display: none;
			float: right;
			font-size: 2rem;
			font-weight: bold;
		}
		header .menu-toggle button {
			background-color: rgba(221, 72, 20, .6);
			border: none;
			border-radius: 3px;
			color: rgba(255, 255, 255, 1);
			cursor: pointer;
			font: inherit;
			font-size: 1.3rem;
			height: 36px;
			padding: 0;
			margin: 11px 0;
			overflow: visible;
			width: 40px;
		}
		header .menu-toggle button:hover,
		header .menu-toggle button:focus {
			background-color: rgba(221, 72, 20, .8);
			color: rgba(255, 255, 255, .8);
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		header .heroe h2 {
			font-size: 1.5rem;
			font-weight: 300;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section h2 {
			font-size: 120%;
			line-height: 2.5rem;
			padding-top: 1.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
		section a {
			color: rgba(221, 72, 20, 1);
		}
		section svg {
			margin-bottom: -5px;
			margin-right: 5px;
			width: 25px;
		}
		.further {
			background-color: rgba(247, 248, 249, 1);
			border-bottom: 1px solid rgba(242, 242, 242, 1);
			border-top: 1px solid rgba(242, 242, 242, 1);
		}
		.further h2:first-of-type {
			padding-top: 0;
		}
		footer {
			background-color: rgba(221, 72, 20, .8);
			text-align: center;
		}
		footer .environment {
			color: rgba(255, 255, 255, 1);
			padding: 2rem 1.75rem;
		}
		footer .copyrights {
			background-color: rgba(62, 62, 62, 1);
			color: rgba(200, 200, 200, 1);
			padding: .25rem 1.75rem;
		}
		@media (max-width: 629px) {
			header ul {
				padding: 0;
			}
			header .menu-toggle {
				padding: 0 1rem;
			}
			header .menu-item {
				background-color: rgba(244, 245, 246, 1);
				border-top: 1px solid rgba(242, 242, 242, 1);
				margin: 0 15px;
				width: calc(100% - 30px);
			}
			header .menu-toggle {
				display: block;
			}
			header .hidden {
				display: none;
			}
			header li.menu-item a {
				background-color: rgba(221, 72, 20, .1);
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .7);
				color: rgba(255, 255, 255, .8);
			}
		}

		 .dropdown:hover .dropdown-menu {
			display: block;
			right: 1%;
		}

		tr {
			border-bottom: 1px solid #ccc;
			min-height: 90px;
			height: 90px;
		}

		.container {
			min-width: 1800px;
		}

		.ellipsis {
    		overflow: hidden;
    		white-space: nowrap;
    		text-overflow: ellipsis;
		}
	</style>
</head>
<body>

<!-- HEADER -->
<header class="p-3">
<h1 class="text-center">Movies</h1>

</header>

<!-- main -->

<main>
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
              								<a href="" class=" dropdown-item">Modifica</a>
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
</main>


<!-- FOOTER -->

<footer>

</footer>


<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}

	function delete_data(id) {
		if(confirm('Sei sicuro di voler eliminare il film?')) {
			window.location.href="<?php echo base_url(); ?>/delete/"+id;
		}
		return false;
	}
</script>

</body>
</html>
