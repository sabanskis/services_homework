<?php
/**
 * Created by PhpStorm.
 * User: tautvydas
 * Date: 18.12.2
 * Time: 15.30
 */

namespace App\Services;

/**
 * Class AdultCheck
 * @package App\Services
 */
class AdultCheck
{
    /**
     * @param int $years
     * @return bool
     */
    public function isAdult(int $years){
        return $years>=18;
    }
}