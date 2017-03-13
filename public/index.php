<html><h2>Bienvenue sur la page index de votre projet samurai http://samurai.devweb.lva.fr</h2><p>Les fichiers publics de votre projet devraient être placés dans l'espace public <code>/home/web/www/samurai/public</code>. C'est sur ce répertoire que pointe votre hôte virtuel.</p><p>Vous pouvez envoyer des fichiers par FTP à l'adresse ftp.devweb.lva.fr avec l'utilisateur web </p><p>Le répertoire FTP distant par défaut devrait être <code>/www/samurai</code></p><p>Le mod_rewrite est activé : vous devriez être redirigé sur cette page avec le paramètre url en GET si vous rendez sur une adresse ne correspondant à aucun fichier ou répertoire existant comme <a href="http://samurai.devweb.lva.fr/fd4f5">http://samurai.devweb.lva.fr/fd4f5</a> par exemple - en revanche la page <a href="http://samurai.devweb.lva.fr/index2.php">index2</a> existe.</p><p>Voici votre configuration virtualhost : <xmp><VirtualHost *:80>

	ServerName samurai.devweb.lva.fr
	ServerAdmin webmaster@lva.fr
	DocumentRoot /home/web/www/samurai/public
	ErrorLog /home/web/www/logs/error-samurai.log
	# Possible values include: debug, info, notice, warn, error, crit,alert, emerg
	LogLevel debug
	<Directory /home/web/www/samurai/public>
		allow from all
		Options -Indexes
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost></xmp></p><p>Votre version de php est : <?php require_once '../vendor/autoload.php';chdir(dirname(__DIR__));echo phpversion(); ?></html>
