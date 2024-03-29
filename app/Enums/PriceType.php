<?php

namespace App\Enums;

abstract class PriceType
{
    const Fixed             = 1;
    const PerWord           = 2;
    const PerPage           = 3;
    const PerSlide           = 4;


    const FixedPriceUnit             = 'each';
    const PerWordPriceUnit           = 'words';
    const PerPagePriceUnit           = 'pages';
    const PerSlidePriceUnit           = 'slides';
}
