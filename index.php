<?php ob_start(); 
// navbar
    $phone_image = "sources/images/phone.png";

//  Carousel
    $title = "Ostéopathe";
    $photo1 = "sources/images/osteo-intro";
    $alt_photo1 ="ostéopathie";
    $photo2 = "sources/images/baby-head";
    $alt_photo2 ="Nouveau-né";
    $photo3 = "sources/images/pregnant2";
    $alt_photo3 ="femme enceinte";
    
//  Alert Message
    $message_display = "";
    $message_display = "d-none";
    $message_title = "Information Covid-19: ";
    $message_alert = "Le cabinet ré-ouvrira à partir du 11/05/2020 avec des mesures particulières pour votre praticien (port du masque, changement de blouse et désinfection entre chaque patient) et vous (attente dans votre véhicule, limiter les accompagnants, port du masque).
    Merci de reporter votre consultation si vous présentez des symptômes du COVID (toux, fièvre, difficultés respiratoires, perte de l'odorat) et de limiter celle-ci aux cas urgents si vous avez un risque de développer une forme grave (obésité, personne de plus de 70 ans, diabète non stabilisé, antécédents cardio vasculaires, pathologies respiratoires chroniques, cancer sous traitements, immunodépression).";
    
//  Flore card
    $photo_card_Flore = " sources/images/flore4";
    $alt_photo_card_Flore ="Flore_Limouzin";
    $text_card_Flore = ", Diplômée en 2011 de l’Institut Supérieur d’Ostéopathie de Lyon, a toujours eu à cœur de prendre en charge chaque patient dans son individualité et son unicité. Elle obtient le DU de périnatalité en 2015 afin de spécialiser sa prise en charge des nouveau-nés et des femmes enceintes. Elle continue néanmoins à prendre en charge tous les patients ayant besoin de retrouver un équilibre non douloureux au quotidien.";
    
// Still card
    $photo_card_Still = " sources/images/img_history_still.png";
    $alt_photo_card_Still ="Sir_Andrew_Taylor_Still";
    $text_card_Still = "L’ostéopathie est une thérapie exclusivement manuelle, basée sur une connaissance approfondie de l’anatomie et de la physiologie, qui a pour but de redonner de la mobilité aux différentes structures composant le corps humain afin que celui-ci puisse (re)trouver un équilibre non douloureux au quotidien.";
    
// Nouveau-nés card
    $photo_card_bebe =" sources/images/manip_nouveau_ne.jpg";
    $alt_photo_card_bebe = "manipulation_sur_nouveau_né";
    $text_card_bebe ="Tout au long de la grossesse, lors de l’accouchement et à sa naissance, votre bébé a dû s’adapter à différents milieux et à leurs contraintes. L’ostéopathe est là pour accompagner votre bébé dans son adaptation à sa vie extra utérine, pour l’aider à se défaire des contraintes autour desquelles il s’est développé in utéro, de celles qu’il a pu subir lors de l’accouchement ou celles qui se sont mises en place après la naissance.";

// Femme enceinte card
    $photo_card_enceinte ="sources/images/manip_femme_enceinte.jpg";
    $alt_photo_card_enceinte = "manipulation_sur_femme_enceinte";
    $text_card_enceinte ="L’ostéopathie accompagne la femme enceinte tout au long de sa grossesse afin d’aider le corps à s’adapter à tous les changements qui accompagnent cette période unique de la vie. Grâce à des manipulations douces, l’ostéopathie permet à la future maman de retrouver de la mobilité et du confort pour une grossesse agréable et sereine.";
    
// Sportifs
    $photo_card_sportif =" sources/images/manip_sportif.jpg";
    $alt_photo_card_sportif = "manipulation_sur_homme_sportif";
    $text_card_sportif = "Les nombreuses sollicitations liées à la pratique du sport peuvent être à l’origine de compensations responsables de douleurs, de fatigue physique et mentale. L’ostéopathie est une solution parfaitement adaptée car elle permet de prévenir les blessures en rééquilibrant les tensions musculaires et articulaires. Elle permet aux athlètes amateurs ou professionnels d’accroitre leurs performances tout en profitant un maximum de leurs activités sportives.";
    
// Seniors
    $photo_card_senior =" sources/images/manip_senior.jpg";
    $alt_photo_card_senior = "manipulation_sur_senior";
    $text_card_senior = "Avec le temps, les tissus du corps perdent de leur élasticité et des tensions articulaires et viscérales se manifestent pouvant perturber le quotidien. Il est particulièrement intéressant de consulter un ostéopathe afin de limiter les troubles liés à l’âge. L’ostéopathie permet d’améliorer la qualité de vie par le maintien d’une mobilité corporelle optimale.";
    
// Commentaire Cabinet
    $photo_cabinet = " sources/images/cabinet2.jpg";
    $alt_photo_cabinet = "cabinet";
    $commentaire_cabinet = "Bien qu'étant spécialisé dans la prise en charge des femmes enceintes, nouveau-nés et sportifs, le cabinet accueille les patients de tout âge et de toute condition physique.
    Les consultations se font sur rendez-vous. N’hésitez pas à laisser un message et votre thérapeute vous recontactera dès la fin de sa consultation.";
    
// horaires
    $lu_ouvert = "";
    $lu_ouvre = "13h30";
    $lu_ferme = "18h30";
    
    $ma_ouvert = "";
    $ma_ouvre = "11h00";
    $ma_ferme = "18h30";
    
    $me_ouvert = "";
    $me_ouvre = "09h00";
    $me_ferme = "18h30";
    
    $je_ouvert = "";
    $je_ouvre = "13h30";
    $je_ferme = "18h30";
    
    $ve_ouvert = "";
    $ve_ouvre = "09h00";
    $ve_ferme = "13h30";
    
    $sa_ouvert = "";
    $sa_ouvre = "09h00";
    $sa_ferme = "12h30";
    
    $di_ouvert = "d-none";
    $di_ouvre = "9h00";
    $di_ferme = "20h00";
    $commentaire_horaire = "Le cabinet ouvre un samedi sur deux";

// Tarifs
    $tarif = "55";
    $reglement = "chèque ou espèces";
    $lien_mutuelle = "https://www.osteopathie.org/mutuelles.html";

// Rdv
    $tel = "05 56 39 68 11";
    $rue = "5 avenue Pierre de Coubertin";
    $complement_adresse = "résidence du parc bât C";
    $ville = "33600 Pessac";
    $lien_doctolib = "https://www.doctolib.fr/osteopathe/pessac/flore-limouzin";

// acces
    $map_link = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.9968082843116!2d-0.6706419841832829!3d44.80125368545294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54d9654fefdc7d%3A0xe9f683db27d4fec!2s5%20Avenue%20Pierre%20de%20Coubertin%2C%2033600%20Pessac!5e0!3m2!1sfr!2sfr!4v1592415511101!5m2!1sfr!2sfr";
    $street_view_link = "https://www.google.com/maps/embed?pb=!4v1592415870304!6m8!1m7!1sG3xc1tu9kjR1bYumnklaQw!2m2!1d44.80090877457441!2d-0.6686021934240002!3f102.43413230487337!4f1.2597202655787783!5f0.7820865974627469";
    $photo_acces_cabinet = " sources/images/acces_cabinet.jpg";
// footer
    $mezzaBuro = "mailto:olivierchatelin@oultook.com";

    $content = ob_get_clean();
    require "accueil.php";
