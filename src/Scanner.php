<?php
namespace Markforest\Tools\Url;

class Scanner
{
    protected $month = [
        'Январь',
        'Февраль',
        'Март',
        'Апрель',
        'Май',
        'Инюнь',
        'Июль',
        'Август',
        'Сентябрь',
        'Октябрь',
        'Ноябрь',
        'Декабрь'
    ];

    /**
     * @return array
     */
    public function getMonth($index)
    {
        return $this->month[$index];
    }
}
