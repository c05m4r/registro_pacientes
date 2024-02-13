<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dni = $this->faker->numerify('########');
        $nombre = $this->faker->firstName();
        $apellido = $this->faker->lastName();
        $usuario_igm = strtoupper($apellido[0] . $nombre[0] . $dni);
        return [
            'dni' => $dni,
            'nombre' => $nombre,
            'apellido'=> $apellido,
            'usuario_igm' => $usuario_igm,
            'email' => $this->faker->freeEmail(),
            'medico_solicitante' => $this->faker->name(),
            'estudio' => $this->faker->word(),
            'obra_social' => $this->faker->company(),
            'tecnico' => $this->faker->name(),
            'categoria' => $this->faker->word(),
            'costo_impresion' => $this->faker->randomFloat(2),
            'estado_informe' => $this->faker->boolean(),
            'estado_envio' => $this->faker->boolean()
        ];
    }
}
