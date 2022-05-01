<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AstrologieController extends Controller{

    // j'ai utilisé ce site pour la fonction https://www.fourchette-et-bikini.fr/astro/comment-calculer-son-signe-astrologique-chinois-49440.html
    static function calChinois($birthdate) {
        $year = (int)substr($birthdate, 0, 4);

        $signe = [
            ['Rat', 1900],
            ['Boeuf', 1901],
            ['Tigre', 1902],
            ['Lapin', 1903],
            ['Dragon', 1904],
            ['Serpent', 1905],
            ['Cheval', 1906],
            ['Chèvre', 1907],
            ['Singe', 1908],
            ['Coq', 1909],
            ['Chien', 1910],
            ['Cochon', 1911]
        ];
        
        $year = $year - 1900;
        $year = $year % 12;
        return $signe[$year][0];

      }

    
    
    // j'ai utilisé ce site pour ma fonction : https://www.femmeactuelle.fr/horoscope2/vos-previsions-astro/signe-astrologique-et-ascendant-comment-connaitre-les-votres-2069096#:~:text=C'est%20en%20observant%20le,on%20trouve%20son%20signe%20astrologique.
    static function calZodiaque($birthdate){
        $month = (int)substr($birthdate, 5, 2);
        $day = (int)substr($birthdate, 8, 2);

        $signeJour = [
            ['Verseau', 21], //janvier
            ['Poissons', 20], // fevrier
            ['Bélier', 21], //mars
            ['Taureau', 22], //...
            ['Gémeaux', 22],
            ['Cancer', 22],
            ['Lion', 23],
            ['Vierge', 23],
            ['Balance', 23],
            ['Scorpion', 23],
            ['Sagittaire', 23], //Sagittaire = du 23 novembre
            ['Capricorne', 22] // au 21 décembre
        ]; 


        $dateVerif = $signeJour[$month-1][1];
        /*
            ex : Je suis née le 4 février :
        */
        if ($day < $dateVerif){  // 4 < 20 ? -> oui
            if($month == 1){ //on vérifie si on est née au mois de janvier -> non
                return $signeJour[11][0];
            }else  {
                return $signeJour[$month-2][0]; // on retourne le signe précédent le signe du mois de février -> signe du moi de janvier
            }
        } else {
            return $signeJour[$month-1][0];
        } 
    }
}
