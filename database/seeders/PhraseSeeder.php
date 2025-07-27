<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phrase;

class PhraseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $phrases = [
            ['text' => 'Cree en ti y todo será posible', 'author' => 'Anónimo'],
            ['text' => 'Cada día es una nueva oportunidad', 'author' => 'Confucio'],
            ['text' => 'El éxito es la suma de pequeños esfuerzos', 'author' => 'Napoleon Hill'],
            ['text' => 'No cuentes los días, haz que los días cuenten', 'author' => 'Muhammad Ali'],
            ['text' => 'Hazlo con miedo, pero hazlo', 'author' => 'Anónimo'],
            ['text' => 'La disciplina tarde o temprano vencerá a la inteligencia', 'author' => 'Jim Rohn'],
            ['text' => 'Lo único imposible es aquello que no intentas', 'author' => 'Anónimo'],
            ['text' => 'No se trata de tener tiempo, se trata de hacer tiempo', 'author' => 'Anónimo'],
            ['text' => 'Empieza donde estás. Usa lo que tienes. Haz lo que puedas.', 'author' => 'Arthur Ashe'],
            ['text' => 'Haz hoy lo que otros no quieren, y mañana vivirás como otros no pueden', 'author' => 'Jerry Rice'],
        ];

        foreach ($phrases as $phrase) {
            Phrase::create($phrase);
        }
    }
}
