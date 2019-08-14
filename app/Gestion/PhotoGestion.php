<?php
/**
 * Created by PhpStorm.
 * User: Yi sa
 * Date: 27/04/2019
 * Time: 18:42
 */

namespace App\Gestion;

class PhotoGestion implements PhotoGestionInterface
{
    public function  save( $image )
    {
        if ( $image->isValid() )
        {
            $chemin = config('images.path');
            $extension = $image->getClientOriginalExtension();

            do {
                $nom = str_random(10) . '.' . $extension;
            } while (file_exists($chemin . '/' . $nom));

            return $image->move($chemin, $nom);
        }

        return false;
    }
}