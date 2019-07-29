<?php

use Illuminate\Database\Seeder;
use App\Models\Collaborator;

class CollaboratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Collaborator::class, 50)->create();
    }
}
