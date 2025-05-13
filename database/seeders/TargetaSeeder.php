<?php

namespace Database\Seeders;

use App\Models\Targeta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TargetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Targeta::insert([
            [
                "nombre" => "Saber (Artoria Pendragon)",
                "url" => "https://ucarecdn.com/aa65204a-a548-488e-9bac-38faa1bc9f16/-/preview/525x1000/",
            ],
            [
                "nombre" => "Archer (EMIYA)",
                "url" => "https://ucarecdn.com/79166a35-0ffa-46b9-a7dc-70c3925eedca/-/preview/406x1000/"
            ],
            [
                "nombre" => "Saber Alter",
                "url" => "https://ucarecdn.com/bf1ddc54-f4cc-4456-9059-3dee690d46c4/-/preview/525x1000/"
            ],
            [
                "nombre" => "Rider (Medusa)",
                "url" => "https://ucarecdn.com/4c358ea9-bff2-4a47-8621-f791351bfcd2/-/preview/585x1000/"
            ],
            [
                "nombre" => "Kiritsugu Emiya",
                "url" => "https://ucarecdn.com/97b2664c-88d2-4542-b895-a058f65a08c4/-/preview/362x619/"
            ],
            [
                "nombre" => "Saber (Lily)",
                "url" => "https://ucarecdn.com/f9715fa0-af24-47ac-a2bb-94cd6a2e15e4/-/preview/250x300/"
            ],
            [
                "nombre" => "Gilles de Rais",
                "url" => "https://ucarecdn.com/3abb8d37-c699-40f4-9bef-564c3a1f1cca/-/preview/504x1000/"
            ],
            [
                "nombre" => "Hassan of the Cursed Arm",
                "url" => "https://ucarecdn.com/ff847a5c-abcc-4cbe-8abf-043e41650572/-/preview/779x1000/"
            ],
            [
                "nombre" => "Sir Lancelot",
                "url" => "https://ucarecdn.com/681e6308-68a8-4b41-88a3-eccec012b155/-/preview/250x349/"
            ],
            [
                "nombre" => "Siegfried",
                "url" => "https://ucarecdn.com/e533361c-9fdc-478a-94a3-66364140734b/-/preview/720x1000/"
            ],
            [
                "nombre" => "Ruler (Shidou Kotomine)",
                "url" => "hhttps://ucarecdn.com/5423c5cd-7770-49d0-b9a4-674a9e198e0f/-/preview/603x1000/"
            ],
            [
                "nombre" => "Rin Tohsaka",
                "url" => "https://ucarecdn.com/50d2de4b-131b-4a3d-9397-ada1f464b408/-/preview/477x999/"
            ],
            [
                "nombre" => "Alexander (Iskander)",
                "url" => "https://ucarecdn.com/c1f5b299-5c80-4df8-b81e-2369b8ded837/-/preview/812x999/"
            ],
            [
                "nombre" => "Achilles",
                "url" => "https://ucarecdn.com/eab3257a-f90e-48b6-986c-72c4cd72a0c5/-/preview/523x1000/"
            ],
            [
                "nombre" => "Astolfo",
                "url" => "https://ucarecdn.com/5404f019-20c4-4bb4-a5e7-1af7b71cab15/-/preview/665x999/"
            ],
            [
                "nombre" => "Nero Claudius",
                "url" => "https://ucarecdn.com/e7337763-7bcd-4d77-963d-08fd31283bdf/-/preview/774x1000/"
            ],
            [
                "nombre" => "Mordred",
                "url" => "https://ucarecdn.com/9547fbfb-08bf-44b9-8dca-85a7e6586ba1/-/preview/576x1000/"
            ],
            [
                "nombre" => "Leonidas",
                "url" => "https://ucarecdn.com/dc3d67b5-38be-4233-beed-b8a1914c383d/-/preview/819x1000/"
            ],
            [
                "nombre" => "Enkidu",
                "url" => "https://ucarecdn.com/9f2264a9-2fb4-416a-b25c-f4d42fa18283/-/preview/504x1000/"
            ],
            [
                "nombre" => "Vlad III",
                "url" => "https://ucarecdn.com/1ae9dbfa-b897-4f64-a427-67e887398853/-/preview/757x1000/"
            ],
            [
                "nombre" => "Karna",
                "url" => "https://ucarecdn.com/0bb7516e-037a-42f2-ae4c-3442c0c5cbd7/-/preview/728x1000/"
            ],
            [
                "nombre" => "Kirei Kotomine",
                "url" => "https://ucarecdn.com/8c039dcc-f1ec-46f8-8956-d1c639f764a7/-/preview/250x348/"
            ],
            [
                "nombre" => "Heracles",
                "url" => "https://ucarecdn.com/c3f0bd95-4b98-4ec0-9881-a29997f7a60e/-/preview/487x1000/"
            ],
            [
                "nombre" => "Gilgamesh",
                "url" => "https://ucarecdn.com/e07c9ae4-cce1-4f65-b33d-8d2ac11a0492/-/preview/592x1000/"
            ],
            [
                "nombre" => "Lancelot Berserker",
                "url" => "https://ucarecdn.com/308d2d39-c7a7-4cfb-8a8c-daf19a96fb74/-/preview/590x1000/"
            ],
            [
                "nombre" => "Jeanne d'Arc",
                "url" => "https://ucarecdn.com/069990c9-1e64-4aa7-bf50-563aa614e9b9/-/preview/250x401/"
            ],
            [
                "nombre" => "Logo",
                "url" => "https://ucarecdn.com/5cf6ac7c-31a3-461e-8011-2e05eea0420e/-/preview/360x640/"
            ]
        ]);
    }
}
