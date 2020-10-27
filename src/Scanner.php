<?php
namespace Markforest\Tools\Url;

class Scanner
{
    protected $month = [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март',
        4 => 'Апрель',
        5 => 'Май',
        6 => 'Инюнь',
        7 => 'Июль',
        8 => 'Август',
        9 => 'Сентябрь',
        10 => 'Октябрь',
        11 => 'Ноябрь',
        12 => 'Декабрь'
    ];

    /**
     * @params integer $monthNumber
     * @return string
     */
    public function getMonth(integer $monthNumber): string
    {
        if ($monthNumber < 1 || $monthNumber > 12) throw new RangeException("The month of the year must be between 1 and 12");

        return $this->month[$monthNumber];
    }
}
