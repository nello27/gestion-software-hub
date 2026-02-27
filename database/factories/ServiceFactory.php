<?php

namespace Database\Factories;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    // Tomamos una categoría existente
        $category = Category::inRandomOrder()->first();

        $servicesByCategory = [
            'Frontend' => [
                'Desarrollo en React',
                'Aplicación en Vue',
                'Maquetación HTML/CSS'
            ],
            'Backend' => [
                'API REST en Laravel',
                'Integración con SQL Server',
                'Sistema de autenticación JWT'
            ],
            'DevOps' => [
                'Dockerización',
                'CI/CD con GitHub Actions',
                'Deploy en AWS'
            ],
            'Base de Datos' => [
                'Optimización SQL',
                'Procedimientos almacenados',
                'Modelado relacional'
            ]
        ];

        $priceRanges = [
            'Frontend' => [300, 900],
            'Backend' => [600, 1800],
            'DevOps' => [1000, 3000],
            'Base de Datos' => [500, 1500]
        ];

        $name = $this->faker->randomElement(
            $servicesByCategory[$category->name] ?? ['Servicio General']
        );

        [$min, $max] = $priceRanges[$category->name] ?? [200, 800];

        return [
            'name' => $this->faker->randomElement(
                $servicesByCategory[$category->name]
            ),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, $min, $max),
            'category_id' => $category->id,
            'active' => true,
        ];
    }
}
