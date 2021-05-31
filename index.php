<?php
$host = "tyroliumfguser.mysql.db";
$userDB = "tyroliumfguser";
$passDB = "oixnsg9FFXY";
$Database = "tyroliumfguser";
$ConnectDB = mysqli_connect($host, $userDB, $passDB, $Database);
try{
	$db = new PDO("mysql:host=" . $host . ";dbname=" . $Database, $userDB, $passDB);
	$db->setAttribute(PDO::ERRMODE_EXCEPTION, 'ATTR_ERRMODE');
}catch(PDOEXeption $e){
	echo $e;
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
        <title>Tyrolium Site</title>
            <link href="http://tyrolium.fr/Contenu/Image/Tyrolium Site.png" rel="shortcut icon">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Oxanium&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="http://tyrolium.fr/Contenu/Css/Tyrolium/all.css">
            <link rel="stylesheet" href="http://tyrolium.fr/Contenu/Css/Tyrolium/normalize.css">
            <link rel="stylesheet" href="http://tyrolium.fr/Contenu/Css/Tyrolium/base.css">
            <link rel="stylesheet" type="text/css" media="screen" href="http://tyrolium.fr/Contenu/Css/Tyrolium/style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="http://tyrolium.fr/Contenu/Image/Tyrolium Site.png" alt="TyroliumLogo" width="40px" class="d-inline-block align-text-top">
                    Tyrolium
                </a>
            </div>
        </nav>
    </header>
    <main>
        <section id="accueil">
            <div class="container">
                <article>
                    <h2>TYROLIUM ENTERTAINMENT</h2>
                    <br>
                    <h3>L'informatique au coeur de notre société.</h3>
                    <br>
                    <p>De nos jours, nous sommes beaucoup à rêver de créer des projets en informatique. Tyrolium a réussi le pari de réaliser les rêves de nos employés passionés. Nous sommes fiers de ce que nous accomplissons tous les jours. Nous vous proposons des projets informatiques de grande ampleur toujours avec la passion de tous nos employés. Tyrolium veut vous proposer des services et des projets bien realisés, de quoi vous divertir.</p>
                </article>
            </div>
        </section>
        <section id="projet">
            <h2>Nos Projets</h2>
            <p>Les projets sont créés avec une passion commune au sein de l'entreprise nous souhaitons toujours proposer le meilleur.</p>
            <ul>
                <li>
                    <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium ServerMC.png" alt="TyroservLogo">
                    <h3>TyroServ</h3>
                    <small>Serveur moddé sur le jeu Minecraft.</small><br>
                    <a href="http://tyroserv.fr/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://www.instagram.com/tyroliumserver/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://twitter.com/tyrolium" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                    <a href="https://www.youtube.com/channel/UCZTbdKAcFw2xrLFjO9WpYYw" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                    <a href="https://github.com/TyroliumServerMC" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                    <a href="https://www.curseforge.com/minecraft/mc-mods/tyromod/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/curse.png" alt="curseforge"/></a>
                </li>
                <li>
                    <img class="logo" src="http://tyrolium.fr/Contenu/Image/Wonderlium.png" alt="WonderliumLogo">
                    <h3>Wonderlium</h3>
                    <small>Collectif réalisant des vidéos sur l'univers geek.</small><br>
                    <a href="https://www.youtube.com/channel/UC8tEUehEz2p53Pw8wSky3TQ" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/> Allez sur notre chaine</a>
                    <a href="http://tyrolium.fr/Wonderlium" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/></a>
                    <a href="https://www.instagram.com/wonderlium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                </li>
                <li>
                    <img class="logo" src="http://tyrolium.fr/Contenu/Image/Gamenium.png" alt="GameniumLogo">
                    <h3>Gamenium</h3>
                    <small>Site d'actualité et de critique de jeux-vidéo.</small><br>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre discord</a>
                    <a href="https://www.instagram.com/gamenium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                </li>
                <li>
                    <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" alt="StudioLogo">
                    <h3>Studio</h3>
                    <small>Projet d'un studio de développement de jeux-vidéo.</small><br>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre discord</a>
                </li>

                <li>
                    <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium Music.png" alt="MusicLogo">
                    <h3>Music</h3>
                    <small>Projet de création de musiques de tout types.</small><br>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre discord</a>
                </li>

                <li>
                    <img class="logo" src="http://tyrolium.fr/Contenu/Image/Freenium.png" alt="FreeniumLogo">
                    <h3>Shop</h3>
                    <small>Notre Boutique avec des collection fait par nos graphisme.</small><br>
                    <a href="http://shop.tyrolium.fr/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                </li>
            </ul>
        </section>
        <section id="credit">
            <div class="container">
                <article>
                    <h2>notre équipe</h2>
                    <br>
                    <h3>Directeur-Fondateur</h3>
                    <br>
                    <p>Maxime Tournier</p>
                    <br>
                    <h3>Membres</h3>
                    <br>
                    <?php
					    $reqMembre = "SELECT * FROM membre";

					    $resMembre = mysqli_query($ConnectDB, $reqMembre);

					    foreach ($resMembre as $key => $value) {
					?>

					    <p><?php echo $value['name']; ?></p>

					<?php
					    }
					?>
                </article>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <article>
                <img src="http://tyrolium.fr/Contenu/Image/Tyrolium%20White.png" alt="TyroliumWhiteLogo">
                <p>Tyrolium est une entreprise à but lucratif, toute création de l'entreprise nous appartient.<br> Créer par Maxime Tournier <br> Copyright &copy; Tyrolium. Ent. <br> All Right Reserved &copy;<u>Tyrolium</u></p>
                <a href="https://www.facebook.com/tyrolium/" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/facebookWhite.png" alt="facebook"/></a>
                <a href="https://www.instagram.com/tyroliumentertainment/" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/instagramWhite.png" alt="instagram"/></i></a>
                <a href="https://discord.gg/km8h5jHezt" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/discordWhite.png" alt="discord"/></a>
                <a href="https://twitter.com/TyroliumE" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/twitterWhite.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCY7TQJxzGSawF0YnixBAAXA" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/youtubeWhite.png" alt="youtube"/></a>
                <a href="https://github.com/Tyrolium" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/githubWhite.png" alt="github"/></a>
                <a href="https://www.linkedin.com/company/tyrolium" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/linkedInWhite.png" alt="linkedin"/></a>
                <a href="https://www.google.com/search?q=tyrolium&oq=tyrolium+&aqs=chrome.0.69i59j69i60l5.1698j0j4&sourceid=chrome&ie=UTF-8" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/googleWhite.png" alt="google"/></a>
                <a href="https://www.google.com/maps/place/Tyrolium/@45.7579341,4.7650812,12z/data=!3m1!4b1!4m5!3m4!1s0x47f4c773107f0ffd:0x645f65cd189abc30!8m2!3d45.7579555!4d4.8351209" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/mapsWhite.png" alt="maps"/></a>
                <a href="https://paypal.me/tyroliument" target="_blank"><img class="iconFooter" src="http://tyrolium.fr/Contenu/Image/icone/paypalWhite.png" alt="paypal"/></a>
            </article>
            <form method="post"a action="">
                <h2>Nous contacter</h2>
                <p>Laissez nous votre nom et votre mail et on vous recontactera rapidement.</p>
                <input type="text" name="name" id="name" placeholder="Nom">
                <input type="email" name="email" id="email" placeholder="Email">
                <input type="submit" name="formsend" id="formsend" value="Envoyer" class="btnSub">
                
            <?php
									if(isset($_POST['formsend'])){
										extract($_POST);

											if(!empty($name) && !empty($email)){
															$q = $db->prepare("INSERT INTO `contact` (name,email) VALUES(:name,:email)");
															$q->execute([
																'name' => $name,
																'email' => $email
															]);
															echo "Nous avons bien enregistré vos données.";

											}
									}
								?>
            </form>
            <ul>
                <li>
                    <span class="material-icons">place</span>
                    <div>
                        <h3>Adresse</h3>
                        <p>Dans la métropole <br>Lyonnaise 69000</p>
                    </div>
                </li>
                <li>
                    <span class="material-icons">phone</span>
                    <div>
                        <h3>Téléphone</h3>
                        <p>+33 6 11 11 26 69</p>
                    </div>
                </li>
                <li>
                    <span class="material-icons">mail</span>
                    <div>
                        <h3>Mail</h3>
                        <p id="mail">maxime.tournier@tyrolium.fr<br>tyrolium.staff@gmail.com</p>
                    </div>
                </li>
            </ul>
        </div>
    </footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


