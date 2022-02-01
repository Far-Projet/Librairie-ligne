<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LibNum CYU</title>

  <link href="css/stylesheet.css" rel="stylesheet">
</head>

<body>
	<header>
		<nav id="brand">
		    <div class="container-fluid">
                <a class="navbar-brand" href="index.php">LibNum</a>
				<form action = "" method = "get">
   				    <input type = "search" name = "terme">
   				    <input type = "submit" name = "s" value = "Rechercher">
  			    </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <?php
                        if (!isset($_SESSION['user'])) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="connexion.php">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="inscription.php">Inscription</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link disabled">Bonjour, <?php echo $data['nom_client'], " ", $data['prenom_client']; ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="landing.php">Paramètres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
		</nav>
	</header>
</body>