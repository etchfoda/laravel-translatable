<?php

namespace Etchfoda\Translatable\Test\Model;

use Etchfoda\Translatable\Translatable;

class CountryWithCustomTranslationModel extends Country
{
    use Translatable;

    public $table = 'countries';
    public $translationForeignKey = 'country_id';
    public $translationModel = 'Etchfoda\Translatable\Test\Model\CountryTranslation';
}
