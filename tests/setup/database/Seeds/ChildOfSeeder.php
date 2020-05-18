<?php

namespace Tests\Setup\Database\Seeds;

use Illuminate\Database\Seeder;

class ChildOfSeeder extends Seeder
{
    /**
     * Run the database Seeds.
     *
     * @return void
     */
    public function run()
    {
        $childOf = `[
            {"_to": "Characters/NedStark", "_from": "Characters/RobbStark" },
            {"_to": "Characters/NedStark", "_from": "Characters/SansaStark" },
            {"_to": "Characters/NedStark", "_from": "Characters/AryaStark" },
            {"_to": "Characters/NedStark", "_from": "Characters/BranStark" },
            {"_to": "Characters/CatelynStark", "_from": "Characters/RobbStark" },
            {"_to": "Characters/CatelynStark", "_from": "Characters/SansaStark" },
            {"_to": "Characters/CatelynStark", "_from": "Characters/AryaStark" },
            {"_to": "Characters/CatelynStark", "_from": "Characters/BranStark" },
            {"_to": "Characters/NedStark", "_from": "Characters/JonSnow" },
            {"_to": "Characters/TywinLannister", "_from": "Characters/JaimeLannister" },
            {"_to": "Characters/TywinLannister", "_from": "Characters/CerseiLannister" },
            {"_to": "Characters/TywinLannister", "_from": "Characters/TyrionLannister" },
            {"_to": "Characters/CerseiLannister", "_from": "Characters/JoffreyBaratheon" },
            {"_to": "Characters/JaimeLannister", "_from": "Characters/JoffreyBaratheon" }
        ]`;

        $childOf = json_decode($childOf);
    }
}
