<?php
    ob_start(); 
// nav
$phone_image = "../sources/images/phone.png";

//mentions légales
$statut_propriétaire = "Particulier";
$proprietaire = "Flore Limouzin";
$adresse_propriétaire = "5 avenue Pierre de Coubertin résidence du Parc bât C 33600 Pessac";
$createur = "Olivier Chatelin";
$responsable_publication = "Flore Limouzin";
$mail_responsable_publication = "florelimouzin@club-internet.fr";
$type_responsable_publication = "Personne physique";
// footer
$mezzaBuro = "mailto:olivierchatelin@oultook.com";
$tel = "05 56 39 68 11";
$rue = "5 avenue Pierre de Coubertin";
$complement_adresse = "résidence du parc bât C";
$ville = "33600 Pessac";
$lien_doctolib = "https://www.doctolib.fr/osteopathe/pessac/flore-limouzin";
$lien_mutuelle = "https://www.osteopathie.org/mutuelles.html";
$webmaster = "Olivier Chatelin";
$mail_webmaster = "olivierchatelin@outlook.com";
$nom_hebergeur = "SAS OVH";
$adresse_hebergeur = "2 rue Kellermann BP 80157 59100 Roubaix";
$content = ob_get_clean();
require "mentions-legales.php";