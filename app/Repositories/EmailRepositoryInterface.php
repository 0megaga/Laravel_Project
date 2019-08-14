<?php
/**
 * Created by PhpStorm.
 * User: Yi sa
 * Date: 27/04/2019
 * Time: 19:59
 */

namespace App\Repositories;

interface EmailRepositoryInterface
{
    public function save( $mail );
}