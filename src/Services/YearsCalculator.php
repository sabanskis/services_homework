<?php
/**
 * Created by PhpStorm.
 * User: tautvydas
 * Date: 18.12.2
 * Time: 15.27
 */

namespace App\Services;

/**
 * Class YearsCalculator
 * @package App\Services
 */
class YearsCalculator
{
    /**
     * @param string $date
     * @return int
     * @throws \Exception
     */
    public function calculate (string $date)
    {
        $birthdate=new \DateTime($date);
        $today=new \DateTime();

        return $today->diff($birthdate)->y;
    }
}