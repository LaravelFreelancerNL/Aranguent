<?php

namespace Tests\Setup\Database\Seeds;

use Illuminate\Database\Seeder;
use Tests\Setup\Models\Characteristic;

class CharacteristicsSeeder extends Seeder
{
    /**
     * Run the database Seeds.
     *
     * @return void
     */
    public function run()
    {
        $traits = `[
            { "_key": "A", "en": "strong", "de": "stark" },
            { "_key": "B", "en": "polite", "de": "freundlich" },
            { "_key": "C", "en": "loyal", "de": "loyal" },
            { "_key": "D", "en": "beautiful", "de": "schön" },
            { "_key": "E", "en": "sneaky", "de": "hinterlistig" },
            { "_key": "F", "en": "experienced", "de": "erfahren" },
            { "_key": "G", "en": "corrupt", "de": "korrupt" },
            { "_key": "H", "en": "powerful", "de": "einflussreich" },
            { "_key": "I", "en": "naive", "de": "naiv" },
            { "_key": "J", "en": "unmarried", "de": "unverheiratet" },
            { "_key": "K", "en": "skillful", "de": "geschickt" },
            { "_key": "L", "en": "young", "de": "jung" },
            { "_key": "M", "en": "smart", "de": "klug" },
            { "_key": "N", "en": "rational", "de": "rational" },
            { "_key": "O", "en": "ruthless", "de": "skrupellos" },
            { "_key": "P", "en": "brave", "de": "mutig" },
            { "_key": "Q", "en": "mighty", "de": "mächtig" },
            { "_key": "R", "en": "weak", "de": "schwach" }
        ]`;

        $traits = json_decode($traits);
        Characteristic::insertOrupdate($traits);
    }
}
