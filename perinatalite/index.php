<?php
    ob_start(); 
// nav
    $phone_image = "../sources/images/phone.png";
//La femme enceinte
    $photo_enceinte = "../sources/images/manip_femme_enceinte3.jpg";
    $alt_enceinte = "osteopathic manipulation pregnant woman";
    $femme_enceinte = "     Pendant les 9 mois de la grossesse, la croissance de l’embryon, puis du fœtus, est exponentielle. Le corps de la maman évolue, s’organise autour de ce petit être qui grandit. C’est bien plus que l’utérus et le bassin de la maman qui s’adaptent à ces nouvelles contraintes : c’est tout son corps qui se réorganise. Les viscères sont petit à petit repoussés vers le haut et l’arrière de l’abdomen, l’utérus s’épanouit dans les 3 dimensions prenant de plus en plus de place, les muscles abdominaux se relâchent et laissent la place au développement du ventre, toute la statique rachidienne change en intégrant cette nouvelle présence : les lombaires se creusent et le thorax perd de son amplitude, tous les ligaments sont plus détendus grâce aux régime hormonal… Le corps fait face à beaucoup de changements, et tout le temps. 
    Il est alors essentiel que chaque partie du corps, chaque structure le composant, fasse son travail et soit au maximum de ses capacités, sans quoi des douleurs peuvent apparaître et mettre à mal l’épanouissement tant physique que psychologique de la future maman.
    C’est là que l’ostéopathie intervient : en redonnant de la mobilité à ces structures, en réharmonisant le fonctionnement du corps et en aidant la maman à trouver un nouvel équilibre indolore et serein.
    C’est aussi important pour le bébé qui, lui aussi, subit ces manques de mobilité et peut parfois être un peu limité dans ses mouvements ou dans son positionnement, et ainsi créer des douleurs pour la maman ou des inquiétudes (bébé bas, contractions…).
    En aidant le corps à s’adapter au mieux à la grossesse, c’est non seulement les douleurs de la future maman qui sont diminuées, mais aussi les contraintes subies par le bébé. Toutes les tensions, autant physiques que psychologiques, liées à ses douleurs, sont à éviter au maximum pour la maman et pour le bébé.
    J’ai donc à cœur d’aider et d’accompagner les futures mamans dans l’évolution de leur grossesse, de leur éviter au maximum les désagréments liés à leur état de femme enceinte, et d’accompagner les nouveau-nés dans leur adaptation à la vie extra utérine, pour favoriser la naissance d’une famille sereine.
    ";
    $photo_consultation_enceinte = "../sources/images/consultation-enceinte.jpg";
    $alt_consultation_enceinte = "Pregnant woman suffering";
    $consultation_enceinte ="L’ostéopathie est là pour accompagner le corps des mamans. Le suivi ostéopathique se fait au rythme de la grossesse et des sensations de la maman.
    Si la maman sent que, « ça tire », « ça coince », « ça appuie », 
    Si elle a des douleurs ou sent que le bébé et son corps ont du mal à « cohabiter », alors la consultation est indiquée (douleur de dos, sciatique, douleurs ligamentaires dans le bas du ventre, sensation de bébé bas, contractions, constipation, vertiges...)
    Si la maman n’est pas gênée, embêtée ou agacée par la présence de son bébé, si elle arrive à bouger et à profiter pleinement de sa grossesse, alors la consultation n’est pas obligatoirement nécessaire.
    Une consultation est toutefois intéressante 2 à 3 semaines avant le jour du terme afin de vérifier la bonne mobilité du bassin. En effet, celui-ci ayant subi beaucoup de changements et de contraintes pendant 9 mois, et au vu de son rôle essentiel lors de l’accouchement, travailler sa mobilité en amont s’avère être une bonne chose.
    " ;
//Le nouveau-né
    $photo_bebe = "../sources/images/nouveau-ne.jpg";
    $alt_bebe ="osteopathic manipulation on baby";
    $nouveau_ne ="Tout au long de la grossesse, votre futur bébé va se développer, s’adapter, s’organiser autour de son environnement. Dès les premières semaines de la grossesse, l’organisation structurelle du corps de votre futur bébé est en place : le cœur bat, les pieds et les mains sont formés, l’ouïe se met en place, votre bébé prend contact avec son environnement.
    Au cours des semaines qui suivent, il va grandir de façon exponentielle, et ainsi augmenter les contraintes sur l’organisme de sa maman et vice-versa, celui-ci va avoir une influence de plus en plus importante sur votre enfant. C’est une colocation unique qui se met en place, qui demande beaucoup d’adaptabilité des deux parties (maman et bébé) et qui peut laisser chez le bébé des empreintes tissulaires après l’accouchement (comme une position préférentielle, des zones de densité ou des manques de mobilité). 
    Lors de l’accouchement  c’est à de nouvelles contraintes que votre enfant va devoir s’adapter. Que ce soit un accouchement par voie basse, une césarienne programmée ou d’urgence, qu’il y ait eu extraction instrumentale (forceps, ventouses, cuillères etc) ou non, la naissance est un évènement extrêmement intense pour votre enfant. Pendant les heures de travail et pendant la phase d’expulsion, votre bébé subit de fortes contraintes mécaniques.  L’ostéopathie est là pour lever toutes les éventuelles dysfonctions acquises sur ce chemin et permettre à votre enfant d’intégrer son nouvel environnement le plus sereinement possible.
    Les contraintes subies par votre enfant lors d’un accouchement par voie basse sont loin d’être inutiles, elles entrainent un relâchement tissulaire par la suite et permettent à votre enfant d’avoir une mobilité crânienne optimale. C’est en partie pourquoi une césarienne, malgré les apparences, peut parfois laisser des stigmates plus contraignants pour votre enfant qu’un accouchement par voie basse.
    Grâce à des manipulations douces, l’ostéopathe est là pour accompagner votre enfant dans son nouvel environnement et l’aider à s’adapter le mieux possible à tous ces changements.
    ";
    $photo_consultation_bebe = "../sources/images/bebe_pleure.jpg";
    $alt_consultation_bebe = "crying baby";
    $consultation_bebe = "Si votre enfant tourne toujours la tête du même côté et qu’il ne va quasiment jamais spontanément de l’autre côté  
    Si vous remarquez l’apparition d’un méplat sur son crâne, 
    Si votre bébé a du mal à prendre le sein, à bien ouvrir la bouche et à retrousser correctement ses lèvres (et que vous avez consulté les conseillères en lactation qui auront pu vérifier les freins de langue et de lèvres), 
    Si vous avez des crevasses à un sein (ou au deux) malgré la rectification de la position d’allaitement, 
    Si vous trouvez que votre enfant se tortille souvent, bat des jambes et semble régulièrement inconfortable, que ce soit au moment des repas ou après,
    Si votre enfant a du mal à évacuer ses selles, qu’il pousse et semble douloureux au moment de faire caca,
    Si votre bébé régurgite et ne supporte pas la position allongé,
    Si votre enfant a du mal a trouver le sommeil en journée ou la nuit, 
    S’il semble crispé, « nerveux » et refuse d’être posé, s’il sursaute au moindre bruit,
    Si votre enfant pleure beaucoup et est difficilement consolable, bien qu’il ait mangé et soit dans un environnement calme.
    
    Alors l’ostéopathie pourra vérifier qu’aucune restriction de mobilité ne vienne perturber votre enfant dans l’apprentissage de tous ces processus physiologiques (alimentation, sommeil, motricité…)
    
    Lors de sa croissance, votre enfant va évoluer dans sa motricité. S’il présente des difficultés lorsqu’il se déplace (rampe ou 4 pattes), qu’il a du mal à se mettre assis seul (au-delà de 10-12 mois), qu’il ne se hisse pas sur ses jambes (au-delà de 15mois), une consultation est intéressante afin de vérifier qu’aucune restrictions de mobilité n’entrave sa motricité.
    Une fois que votre enfant a acquis la marche et que celle-ci est assurée (qu’il ne tombe plus ou peu lors de ses déplacements et qu’il arrive à faire demi-tour), alors il est temps de faire un point en ostéopathie afin de s’assurer que tout le corps s’est bien adapté à cette nouvelle position.
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
    require "perinatalite.php";
