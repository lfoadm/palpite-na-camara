<?php

namespace Database\Seeders;

use App\Models\Admin\City;
use App\Models\Admin\Party;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // CIDADES
        City::factory()->create([
            'name' => 'ITURAMA MG',
            'slug' => 'iturama-mg',
            'quantity' => 15,
            'image' => '1735924480.jpg',
        ]);
        City::factory()->create([
            'name' => 'CAMPINA VERDE MG',
            'slug' => 'campina-verde-mg',
            'quantity' => 11,
            'image' => '1735928376.jpg',
        ]);
        City::factory()->create([
            'name' => 'CARNEIRINHO MG',
            'slug' => 'carneirinho-mg',
            'quantity' => 9,
            'image' => '1735924658.jpg',
        ]);

        //USUÁRIOS
        User::factory()->create([
            'name' => 'Leandro Oliveira',
            'email' => 'lfoadm@icloud.com',
            'mobile' => '34999749344',
            'utype' => 'ADM',
        ]);
        User::factory()->create([
            'name' => 'Carol Mendonça',
            'email' => 'carol@carol.com',
            'mobile' => '34999924794',
            'utype' => 'USR',
        ]);
        User::factory()->create([
            'name' => 'Usuario comum',
            'email' => 'user@user.com',
            'mobile' => '17997249344',
            'utype' => 'USR',
        ]);

        // PARTIDOS
        Party::factory()->create([
            'name' => 'MOVIMENTO DEMOCRÁTICO BRASILEIRO',
            'slug' => 'movimento-democratico-brasileiro',
            'acronym' => 'MDB',
            'number' => 15,
            'image' => '15.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO DEMOCRÁTICO TRABALHISTA',
            'slug' => 'partido-democratico-trabalhista',
            'acronym' => 'PDT',
            'number' => 12,
            'image' => '12.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO DOS TRABALHADORES',
            'slug' => 'partido-dos-trabalhadores',
            'acronym' => 'PT',
            'number' => 13,
            'image' => '13.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO COMUNISTA DO BRASIL',
            'slug' => 'partido-comunista-do-brasil',
            'acronym' => 'PCdoB',
            'number' => 65,
            'image' => '65.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO SOCIALISTA BRASILEIRO',
            'slug' => 'partido-socialista-brasileiro',
            'acronym' => 'PSB',
            'number' => 40,
            'image' => '40.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO DA SOCIAL DEMOCRACIA BRASILEIRA',
            'slug' => 'partido-da-social-democracia-brasileira',
            'acronym' => 'PSDB',
            'number' => 45,
            'image' => '45.jpg',
            ]);
        Party::factory()->create([
            'name' => 'AGIR',
            'slug' => 'agir',
            'acronym' => 'AGIR',
            'number' => 36,
            'image' => '36.jpg',
            ]);
        Party::factory()->create([
            'name' => 'Mobilização Nacional',
            'slug' => 'mobilizacao-nacional',
            'acronym' => 'MOBILIZA',
            'number' => 33,
            'image' => '33.jpg',
            ]);
        Party::factory()->create([
            'name' => 'CIDADANIA',
            'slug' => 'cidadania',
            'acronym' => 'CIDADANIA',
            'number' => 23,
            'image' => '23.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO VERDE',
            'slug' => 'partido-verde',
            'acronym' => 'PV',
            'number' => 43,
            'image' => '43.jpg',
            ]);
        Party::factory()->create([
            'name' => 'AVANTE',
            'slug' => 'avante',
            'acronym' => 'AVANTE',
            'number' => 70,
            'image' => '70.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PROGRESSISTAS',
            'slug' => 'progressistas',
            'acronym' => 'PP',
            'number' => 11,
            'image' => '11.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO SOCIALISTA DOS TRABALHADORES UNIFICADO',
            'slug' => 'partido-socialista-dos-trabalhadores-unificado',
            'acronym' => 'PSTU',
            'number' => 16,
            'image' => '16.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO COMUNISTA BRASILEIRO',
            'slug' => 'partido-comunista-brasileiro',
            'acronym' => 'PCB',
            'number' => 21,
            'image' => '21.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO RENOVADOR TRABALHISTA BRASILEIRO',
            'slug' => 'partido-renovador-trabalhista-brasileiro',
            'acronym' => 'PRTB',
            'number' => 28,
            'image' => '28.jpg',
            ]);
        Party::factory()->create([
            'name' => 'DEMOCRACIA CRISTÃ',
            'slug' => 'democracia-crista',
            'acronym' => 'DC',
            'number' => 27,
            'image' => '27.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO DA CAUSA OPERÁRIA',
            'slug' => 'partido-da-causa-operaria',
            'acronym' => 'PCO',
            'number' => 29,
            'image' => '29.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PODEMOS',
            'slug' => 'podemos',
            'acronym' => 'PODE',
            'number' => 20,
            'image' => '20.jpg',
            ]);
        Party::factory()->create([
            'name' => 'REPUBLICANOS',
            'slug' => 'republicanos',
            'acronym' => 'REPUBLICANOS',
            'number' => 10,
            'image' => '10.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO SOCIALISMO E LIBERDADE',
            'slug' => 'partido-socialismo-e-liberdade',
            'acronym' => 'PSOL',
            'number' => 50,
            'image' => '50.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO LIBERAL',
            'slug' => 'partido-liberal',
            'acronym' => 'PL',
            'number' => 22,
            'image' => '22.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO SOCIAL DEMOCRÁTICO',
            'slug' => 'partido-social-democratico',
            'acronym' => 'PSD',
            'number' => 55,
            'image' => '55.jpg',
            ]);
        Party::factory()->create([
            'name' => 'SOLIDARIEDADE',
            'slug' => 'solidariedade',
            'acronym' => 'SOLIDARIEDADE',
            'number' => 77,
            'image' => '77.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO NOVO',
            'slug' => 'partido-novo',
            'acronym' => 'NOVO',
            'number' => 30,
            'image' => '30.jpg',
            ]);
        Party::factory()->create([
            'name' => 'REDE SUSTENTABILIDADE',
            'slug' => 'rede-sustentabilidade',
            'acronym' => 'REDE',
            'number' => 18,
            'image' => '18.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO DA MULHER BRASILEIRA',
            'slug' => 'partido-da-mulher-brasileira',
            'acronym' => 'PMB',
            'number' => 35,
            'image' => '35.jpg',
            ]);
        Party::factory()->create([
            'name' => 'UNIDADE POPULAR',
            'slug' => 'unidade-popular',
            'acronym' => 'UP',
            'number' => 80,
            'image' => '80.jpg',
            ]);
        Party::factory()->create([
            'name' => 'UNIÃO BRASIL',
            'slug' => 'uniao-brasil',
            'acronym' => 'UNIÃO',
            'number' => 44,
            'image' => '44.jpg',
            ]);
        Party::factory()->create([
            'name' => 'PARTIDO RENOVAÇÃO DEMOCRÁTICA',
            'slug' => 'partido-renovacao-democratica',
            'acronym' => 'PRD',
            'number' => 25,
            'image' => '25.jpg',
            ]);

        
    }
}
