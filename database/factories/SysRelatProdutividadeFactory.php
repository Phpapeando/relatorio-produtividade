<?php

namespace Database\Factories;

use App\Models\SysRelatProdutividade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SysRelatProdutividade>
 */
class SysRelatProdutividadeFactory extends Factory
{

    protected $model = SysRelatProdutividade::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'nome' => $this->faker->name,
        'setor' => $this->faker->numberBetween($min = 1, $max = 5),
        'feito' => $this->faker->text($maxNbChars = 254),
        'nfeito' => $this->faker->text($maxNbChars = 254),
        'produtividade' => $this->faker->numberBetween($min = 1, $max = 5),  
        ];

        
    }
}
