<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'adresse mail',
    'adresse mail'
];

$subject = "Newsletter";

$html = '
    <html lang="fr">
        <head>
            <title>Mes actualités</title>
        </head>
        <body>
            <div>
                <!-- Vos actualités ici -->
                <h3>Ceci est une newsletter sans aucune importance !</h3>
            </div>
        </body>
    </html>
';

$header ="MIME-Version: 1.0\r\n";
$header.='FROM:"adressemail"<adressemail>'."\n";
$header.='Content-Type:text/html; charset="utf-8"'."\n";
$header.='Content-Transfert-Encoding: 8bit';

for($i = 0; $i < count($to); $i++){
    if(mail($to[$i], $subject, $html, $header)){
        echo "Message bien envoyé<br>";
    }else{
        echo "Non envoyé<br>";
    }
}