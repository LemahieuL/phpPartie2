<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link href="style.css" />
        <title>Exercice 2 PHP partie 2</title>
    </head>
    <body>
        <div>
            <?php
                $isEasy = true; /*variable booléan qui renvoit true*/
                if ($isEasy) { /* je crée une condition pour faire apparaitre "c'est facile" 
                 * si la variable renvoit true sinon elle renvoit "c'est difficile"*/
                    echo 'C\'est facile!!';
                } else {
                    echo 'C\'est difficile !!!';
                }
            ?>
        </div>
        <div>
            <?php

                if (!$isEasy) {/* je crée une condition pour faire apparaitre "c'est facile" 
                 * si la variable renvoit true sinon elle renvoit "c'est difficile"*/
                    echo 'C\'est facile!!';
                } else {
                    echo 'C\'est difficile !!!';
                }
            ?>
        </div>
    </body>
</html>