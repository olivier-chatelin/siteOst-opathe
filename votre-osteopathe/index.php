<?php
    ob_start(); 
// nav
    $phone_image = "../sources/images/phone.png";
// etudes
$photo_etudes = "../sources/images/main1.jpg";
$intro_etudes ="Flore Limouzin a toujours eu à cœur de prendre en charge chaque patient dans son individualité et son unicité. Elle obtient le DU de périnatalité en 2015 afin de spécialiser sa prise en charge des nouveau-nés et des femmes enceintes. Elle continue néanmoins à prendre en charge tous les patients ayant besoin de retrouver un équilibre non douloureux au quotidien.";
$cursus ="« Ayant toujours voulu « soigner avec mes mains », l’ostéopathie s’est révélée être pour moi plus qu’un métier : c’est une véritable passion.
Au cours de mes 6 années d’études à temps plein, j’ai pu prendre en charge de nombreux patients venant de différents horizons : sportifs amateurs et professionnels (sur leur lieu d’entrainement ou, ponctuellement, en compétition), nouveau-nés et femmes enceintes (dans le cadre du module de périnatalité effectué lors de ma 6ème année d’étude), adolescents, étudiants et adultes, personnes âgées…
À la sortie de mes études, pendant plus de 3 ans, j’ai effectué de nombreux remplacements dans toute la France, rencontrant ainsi différentes patientèles et différents thérapeutes.
Cette diversité m’a permis d’acquérir une meilleure connaissance de la prise en charge de chacun de ces patients et d’élargir mes connaissances techniques et thérapeutiques.
Depuis 2014, je me suis spécialisée dans la prise en charge de la périnatalité, ce qui m’a conduit à l’obtention en 2015 du Diplôme Universitaire de périnatalité (décerné par la faculté de médecine de Paris VII)
Par la pauvreté des traitements allopathiques et l’efficacité de l’ostéopathie dans la prise en charge des femmes enceintes et des nourrissons, la périnatalité est une part importante du travail en ostéopathie. »
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
    require "votre-osteopathe.php";
