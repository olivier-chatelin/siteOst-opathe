<?php
    ob_start(); 
// nav
    $phone_image = "../sources/images/phone.png";

//l'ostéopathie
$photo_deco = "../sources/images/mur.jpg";
$photo_still_2 = "../sources/images/still2.png";
$alt_Still ="Andrew Taylor Still";

//Qu'est-ce que l'ostéopathie
$citation_1 = "❝Le corps est capable d'autorégulation.❞";
$citation_2 = "❝Chaque partie du corps vit pour et par l'ensemble.❞";
$citation_3 = "❝L'artère, par les messages qu'elle transporte, est suprême.❞";
$citation_4 = "❝La structure et la fonction sont interdépendantes.❞";
$citation_5 = "❝La vie c'est le mouvement.❞";
$osteopathie_explication ="L’ostéopathie est une thérapie exclusivement manuelle, basée sur une connaissance approfondie de l’anatomie et de la physiologie, qui a pour but de redonner de la mobilité aux différentes structures composant le corps humain afin que celui-ci puisse (re)trouver un équilibre non douloureux au quotidien.";

//Comment et pourquoi?
$photo_corps = "../sources/images/corps.jpg";
$alt_corps = "Human body";
$comment_pourquoi = "Le corps est capable de s’adapter à notre quotidien et à tous ses aléas : mauvaise posture, faux mouvement, mauvaise alimentation, stress, fatigue, sport, etc.
Pour ce faire, il va adapter son fonctionnement, modifier son équilibre pour continuer à être efficace sans douleur, en bloquant certaines structures et en réorganisant son fonctionnement.
Les douleurs arrivent lorsque le corps est dépassé, lorsqu’il n’a plus de possibilité d’adaptation. Soit parce que ce qu’on lui demande d’exécuter est hors de ses compétences, soit parce qu’il a dû s’adapter à trop de petites choses pendant trop de temps. Et il suffit d’un mouvement anodin (mettre ses chaussettes, attraper un pot en hauteur, tousser, dormir sur un matelas un peu dur, un courant d’air froid sur la nuque) pour que les douleurs apparaissent. Celles-ci peuvent soit apparaître de manière progressive (tensions qui n’évoluent pas spontanément vers le mieux) ou aigüe (lumbago, torticolis etc).";

//Role
$photo_skull = "../sources/images/skull.jpg";
$alt_skull = "massage";
$role = "En redonnant de la mobilité à certaines structures, L’ostéopathie vise à aider le corps à se réorganiser et à trouver un fonctionnement plus économique en termes d’énergie et moins douloureux. Nous sommes là pour redonner du mouvement, pour remettre au travail les structures qui ne bougent plus bien, afin que chaque partie du corps soit capable d’assumer sa fonction au sein du système corporel.";

// Déroulement
$photo_interrogatoire = "../sources/images/interrogatoire.jpg";
$alt_interrogatoire = "question mark";
$photo_manip = "../sources/images/manip.jpg";
$alt_manip = "osteopathic manipulation";
$photo_temps = "../sources/images/temps.jpg";
$alt_temps = "time effect";
$anamnese = "
C’est l’histoire du patient et de ses douleurs : depuis quand a-t-il mal? Depuis quoi ? À quelle fréquence/rythme ? Soulagées par quoi ? ...

C’est le moment où le thérapeute essaie de cerner la douleur, de comprendre ce qui fait mal, et pourquoi ça fait mal. C’est aussi le moment où le thérapeute exclu un certain nombre d’affections ne relevant pas de l’ostéopathie. 

C’est surtout le moment pendant lequel le thérapeute fait connaissance avec vous, vos habitudes, vos postures, votre rythme, tout ce qui conditionne votre corps et tout ce à quoi il doit s’adapter.";

$pratique ="
Une fois cernés « intellectuellement » les dysfonctionnements probables, il est temps de vérifier ce qui se passe concrètement dans votre corps. 

Afin de pouvoir sentir au mieux les mouvements du corps, il est préférable de porter une tenue fine et souple (type legging ou short et teeshirt), que vous pouvez amener ou porter directement.

Si nécessaire, des tests d’exclusion peuvent être faits afin d’exclure une pathologie relevant de la médecine allopathique (médicaments)

Grâce à sa palpation, l’ostéopathe va, dans un premier temps, déterminer les structures qui ne bougent pas bien (en termes de qualité de mouvement). C’est pourquoi l’ostéopathe, va prendre le temps regarder l’intégralité du corps, et ce quelle que soit votre douleur, afin de comprendre l’équilibre du corps qui, puisqu’il est douloureux, n’est pas optimum.

Une fois cernées les zones en restrictions de mobilité, votre thérapeute va mettre en place des techniques visant à redonner de la mobilité à ces structures. Diverses techniques peuvent être utilisées. 

Personnellement, je travaille de façon douce : mon expérience m’a démontré que j’ai de meilleurs résultats sur l’amélioration des douleurs qu’en manipulant (ou en « faisant craquer »)";
$suite="
Une fois la mobilité redonnée, c’est à votre corps de travailler. En effet, il doit se réorganiser et réintégrer les structures à nouveau mobiles à son fonctionnement : comme elles ne bougeaient plus correctement, le corps s’était organisé en les sollicitant le moins possible.

C’est ce qu’il va faire pendant les 48-72h qui suivent la séance. C’est pourquoi il est possible que les douleurs persistent pendant ce temps-là OU que d’autre gênes apparaissent. Quoiqu’il en soit, passé ces 48-72h, le corps a trouvé son nouvel équilibre et les douleurs se modifient et s’atténuent : l’équilibre trouvé par le corps est bon. 

Pendant ces 48-72h, afin d’aider le corps à se réharmoniser, on reste tranquille (pas de sport, pas d’effort, pas de stress… ou le moins possible !) et on reste mobile (on va se balader, on s’étire, on respire).

Pendant encore 3 semaines, le corps va continuer à s’organiser, à affiner son fonctionnement autour de ce nouvel équilibre pour permettre une disparition totale des douleurs. Si une gêne persiste passé ces 3 semaines ou si les douleurs commencent à revenir, alors une seconde consultation est nécessaire afin de relancer le corps dans une dynamique plus équilibrée.

";



// footer
    $mezzaBuro = "mailto:olivierchatelin@oultook.com";
    $tel = "05 56 39 68 11";
    $rue = "5 avenue Pierre de Coubertin";
    $complement_adresse = "résidence du parc bât C";
    $ville = "33600 Pessac";
    $lien_doctolib = "https://www.doctolib.fr/osteopathe/pessac/flore-limouzin";
    $lien_mutuelle = "https://www.osteopathie.org/mutuelles.html";


    $content = ob_get_clean();
    require "osteopathie.php";
