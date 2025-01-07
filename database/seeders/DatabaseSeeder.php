<?php

namespace Database\Seeders;

use App\Models\Admin\Candidate;
use App\Models\Admin\City;
use App\Models\Admin\Party;
use App\Models\Admin\State;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //ESTADOS
        $states = [
            ['name' => 'Acre', 'abbreviation' => 'AC'],
            ['name' => 'Alagoas', 'abbreviation' => 'AL'],
            ['name' => 'Amapá', 'abbreviation' => 'AP'],
            ['name' => 'Amazonas', 'abbreviation' => 'AM'],
            ['name' => 'Bahia', 'abbreviation' => 'BA'],
            ['name' => 'Ceará', 'abbreviation' => 'CE'],
            ['name' => 'Distrito Federal', 'abbreviation' => 'DF'],
            ['name' => 'Espírito Santo', 'abbreviation' => 'ES'],
            ['name' => 'Goiás', 'abbreviation' => 'GO'],
            ['name' => 'Maranhão', 'abbreviation' => 'MA'],
            ['name' => 'Mato Grosso', 'abbreviation' => 'MT'],
            ['name' => 'Minas Gerais', 'abbreviation' => 'MG'],
            ['name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS'],
            ['name' => 'Pará', 'abbreviation' => 'PA'],
            ['name' => 'Paraíba', 'abbreviation' => 'PB'],
            ['name' => 'Paraná', 'abbreviation' => 'PR'],
            ['name' => 'Pernambuco', 'abbreviation' => 'PE'],
            ['name' => 'Piauí', 'abbreviation' => 'PI'],
            ['name' => 'Rio de Janeiro', 'abbreviation' => 'RJ'],
            ['name' => 'Rio Grande do Norte', 'abbreviation' => 'RN'],
            ['name' => 'Rio Grande do Sul', 'abbreviation' => 'RS'],
            ['name' => 'Rondônia', 'abbreviation' => 'RO'],
            ['name' => 'Roraima', 'abbreviation' => 'RR'],
            ['name' => 'Santa Catarina', 'abbreviation' => 'SC'],
            ['name' => 'São Paulo', 'abbreviation' => 'SP'],
            ['name' => 'Sergipe', 'abbreviation' => 'SE'],
            ['name' => 'Tocantins', 'abbreviation' => 'TO'],
        ];

        foreach ($states as $state) {
            DB::table('states')->insert($state);
        }        
        
        // CIDADES
        City::factory()->create([
            'name' => 'ITURAMA',
            'slug' => 'iturama',
            'state_id' => 12,
            'quantity' => 15,
            'image' => '1735924480.jpg',
        ]);
        City::factory()->create([
            'name' => 'CAMPINA VERDE',
            'slug' => 'campina-verde',
            'state_id' => 12,
            'quantity' => 11,
            'image' => '1735928376.jpg',
        ]);
        City::factory()->create([
            'name' => 'CARNEIRINHO',
            'slug' => 'carneirinho',
            'state_id' => 12,
            'quantity' => 9,
            'image' => '1735924658.jpg',
        ]);
        City::factory()->create([
            'name' => 'OUROESTE',
            'slug' => 'ouroeste',
            'state_id' => 25,
            'quantity' => 9,
            'image' => '1735928378.jpg',
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

            // 'name',
            // 'slug',
            // 'short_name',
            // 'caption_number',
            // 'status',
            // 'description',
            // 'featured',
            // 'image',
            // 'party_id',
            // 'city_id',

            Candidate::factory()->create([
                'name' => 'MANOEL DE ALMEIDA MARINHO',
                'slug' => 'manoel-de-almeida-marinho',
                'short_name' => 'MANOEL MARINHO',
                'caption_number' => 10000,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242809_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'BRUNO AMARAL SOARES TEODORO',
                'slug' => 'bruno-amaral-soares-teodoro',
                'short_name' => 'AMARAL KITS',
                'caption_number' => 10010,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242805_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'GERALDO APARECIDO DIAS',
                'slug' => 'geraldo-aparecido-dias',
                'short_name' => 'GERALDO DA FARMÁCIA',
                'caption_number' => 10110,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242800_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARCIO FORTUNATO DE GODOY',
                'slug' => 'marcio-fortunato-de-godoy',
                'short_name' => 'MARCINHO DA AMBULÂNCIA',
                'caption_number' => 10111,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242802_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JEDER VIANA DE ALMEIDA',
                'slug' => 'jeder-viana-de-almeida',
                'short_name' => 'JEDER VIANA',
                'caption_number' => 10123,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242801_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA APARECIDA DO AMARAL',
                'slug' => 'maria-aparecida-do-amaral',
                'short_name' => 'MARIA INSTRUTORA',
                'caption_number' => 10147,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242807_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOÃO LONGUINHO FILHO',
                'slug' => 'joao-longuinho-filho',
                'short_name' => 'JOÃO LONGUINHO',
                'caption_number' => 10190,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242804_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA JOSE DE SOUZA MACHADO',
                'slug' => 'maria-jose-de-souza-machado',
                'short_name' => 'PASTORA MARIA MACHADO',
                'caption_number' => 10191,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242810_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DENIZE FERREIRA ARAUJO',
                'slug' => 'denize-ferreira-araujo',
                'short_name' => 'DENIZE ARAUJO',
                'caption_number' => 10194,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242806_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA PERPETUA DA CRUZ',
                'slug' => 'maria-perpetua-da-cruz',
                'short_name' => 'MARIA PERPETUA',
                'caption_number' => 10200,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242811_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ANTONIO AUGUSTO MARQUES DOS SANTOS',
                'slug' => 'antonio-augusto-marques-dos-santos',
                'short_name' => 'PASTOR ANTÔNIO AUGUSTO',
                'caption_number' => 10222,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242799_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ELISANGELA MARIA DOS SANTOS',
                'slug' => 'elisangela-maria-dos-santos',
                'short_name' => 'ELISANGELA CABELEIREIRA',
                'caption_number' => 10333,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242798_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'EDER FREITAS BONISATO',
                'slug' => 'eder-freitas-bonisato',
                'short_name' => 'EDER BONISATO LOMICO',
                'caption_number' => 10678,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242808_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'EUREDES ALVES FERREIRA',
                'slug' => 'euredes-alves-ferreira',
                'short_name' => 'EUREDES ALVES (MESTRE LUA)',
                'caption_number' => 10777,
                'status' => 1,
                'featured' => true,
                'party_id' => '1',
                'city_id' => 1,
                'image' => 'FMG130002242803_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'GILVAN ALVES RAMOS',
                'slug' => 'gilvan-alves-ramos',
                'short_name' => 'GILVANZINHO DO PT',
                'caption_number' => 13013,
                'status' => 1,
                'featured' => true,
                'party_id' => '2',
                'city_id' => 1,
                'image' => 'FMG130002153690_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOANA PRETOS DE MOURA TIAGO',
                'slug' => 'joana-pretos-de-moura-tiago',
                'short_name' => 'JOANA PRETOS',
                'caption_number' => 13123,
                'status' => 1,
                'featured' => true,
                'party_id' => '2',
                'city_id' => 1,
                'image' => 'FMG130002153692_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CAMILA TEIXEIRA LOZON',
                'slug' => 'camila-teixeira-lozon',
                'short_name' => 'CAMILA DO XEROX',
                'caption_number' => 13456,
                'status' => 1,
                'featured' => true,
                'party_id' => '2',
                'city_id' => 1,
                'image' => 'FMG130002153689_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LUDIMILA CONFESSOR DE QUEIROZ',
                'slug' => 'ludimila-confessor-de-queiroz',
                'short_name' => 'LUDIMILA',
                'caption_number' => 13513,
                'status' => 1,
                'featured' => true,
                'party_id' => '2',
                'city_id' => 1,
                'image' => 'FMG130002153691_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARCOS DANIEL FERREIRA GOMES',
                'slug' => 'marcos-daniel-ferreira-gomes',
                'short_name' => 'MARCOS DUBEM',
                'caption_number' => 13613,
                'status' => 1,
                'featured' => true,
                'party_id' => '2',
                'city_id' => 1,
                'image' => 'FMG130002153686_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ESDRAS JUVENAL DE QUEIROZ',
                'slug' => 'esdras-juvenal-de-queiroz',
                'short_name' => 'DR ESDRAS',
                'caption_number' => 13913,
                'status' => 1,
                'featured' => true,
                'party_id' => '2',
                'city_id' => 1,
                'image' => 'FMG130002153684_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARCO TULIO DA CRUZ',
                'slug' => 'marco-tulio-da-cruz',
                'short_name' => 'CUTULA DA ESCOLINHA',
                'caption_number' => 22007,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002387971_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA APARECIDA PIMENTA MARTINS',
                'slug' => 'maria-aparecida-pimenta-martins',
                'short_name' => 'TIA MARIA PROFESSORA',
                'caption_number' => 22022,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332974_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'VANESSA CARLA DE OLIVEIRA',
                'slug' => 'vanessa-carla-de-oliveira',
                'short_name' => 'VANESSA CARLA',
                'caption_number' => 22123,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332977_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RAUL GUSTAVO DE OLIVEIRA',
                'slug' => 'raul-gustavo-de-oliveira',
                'short_name' => 'RAUL GUSTAVO',
                'caption_number' => 22200,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332975_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'UIVERSON SEVERO DOS SANTOS',
                'slug' => 'uiverson-severo-dos-santos',
                'short_name' => 'PASTOR UIVERSON',
                'caption_number' => 22212,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332976_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ELIANE CRISTINA SOUZA',
                'slug' => 'eliane-cristina-souza',
                'short_name' => 'ELIANE SOUZA',
                'caption_number' => 22222,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332978_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LUIZ FELYPPE SANTOS OLIVEIRA',
                'slug' => 'luiz-felyppe-santos-oliveira',
                'short_name' => 'LUIZ MOTORZÃO',
                'caption_number' => 22244,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332971_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'OSVALDO ELIAS DE OLIVEIRA',
                'slug' => 'osvaldo-elias-de-oliveira',
                'short_name' => 'DEDEU',
                'caption_number' => 22321,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332979_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'WILLIAM MEDEIROS COSTA',
                'slug' => 'william-medeiros-costa',
                'short_name' => 'WILLIAM TIOLA',
                'caption_number' => 22333,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332980_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'NADIR GOMES DE OLIVEIRA',
                'slug' => 'nadir-gomes-de-oliveira',
                'short_name' => 'NADIR GOMES',
                'caption_number' => 22345,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 1,
                'image' => 'FMG130002332972_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ITAMAR RODRIGUES DE FREITAS',
                'slug' => 'itamar-rodrigues-de-freitas',
                'short_name' => 'ITAMAR',
                'caption_number' => 22456,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 4,
                'image' => 'FMG130002332969_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JÂNIO EMERSON RODRIGUES',
                'slug' => 'janio-emerson-rodrigues',
                'short_name' => 'JÂNIO CHURRASQUEIRO',
                'caption_number' => 22555,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 2,
                'image' => 'FMG130002332973_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ANDRIELLE RODRIGUES DOS SANTOS',
                'slug' => 'andrielle-rodrigues-dos-santos',
                'short_name' => 'ANDRIELLE RODRIGUES',
                'caption_number' => 22772,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 2,
                'image' => 'FMG130002332970_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'GILSON RAIMUNDO DA SILVA',
                'slug' => 'gilson-raimundo-da-silva',
                'short_name' => 'GILSON DO ABACAXI',
                'caption_number' => 22777,
                'status' => 1,
                'featured' => true,
                'party_id' => '3',
                'city_id' => 2,
                'image' => 'FMG130002332968_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOSÉ LÚCIO NETO',
                'slug' => 'jose-lucio-neto',
                'short_name' => 'NETO LÚCIO',
                'caption_number' => 23000,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332732_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'FERNANDA TRINDADE NUNES',
                'slug' => 'fernanda-trindade-nunes',
                'short_name' => 'FERNANDA NUNES',
                'caption_number' => 23001,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332739_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'VIVIANE NERIS GONÇALVES',
                'slug' => 'viviane-neris-goncalves',
                'short_name' => 'VIVI NERIS MARIA FESTEIRA',
                'caption_number' => 23023,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332729_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'TEREZINHA CONCEIÇÃO DA SILVA',
                'slug' => 'terezinha-conceicao-da-silva',
                'short_name' => 'TEREZINHA DIRETORA',
                'caption_number' => 23033,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332740_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'VANAIR SILVA DOS SANTOS',
                'slug' => 'vanair-silva-dos-santos',
                'short_name' => 'VANAIR SILVA',
                'caption_number' => 23040,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332736_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'WECTON SILVA FREITAS',
                'slug' => 'wecton-silva-freitas',
                'short_name' => 'WECTON MOTORISTA',
                'caption_number' => 23111,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332735_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ADEILTON PHILIPENSE DE AMARAL',
                'slug' => 'adeilton-philipense-de-amaral',
                'short_name' => 'AMARAL DA ASSOCIAÇÃO',
                'caption_number' => 23123,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332730_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'IVAM ALVES SEVERINO SANTANA',
                'slug' => 'ivam-alves-severino-santana',
                'short_name' => 'IVANZIM ALVES',
                'caption_number' => 23222,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332734_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DOMINIQUE GOMES DA COSTA',
                'slug' => 'dominique-gomes-da-costa',
                'short_name' => 'DOMINIQUE',
                'caption_number' => 23233,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332733_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JÚLIO JESUÍNO ROCHA UETSUKI',
                'slug' => 'julio-jesuino-rocha-uetsuki',
                'short_name' => 'MIKIU DA BANANA',
                'caption_number' => 23333,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332741_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DELEON MARTINS DE ALMEIDA',
                'slug' => 'deleon-martins-de-almeida',
                'short_name' => 'DELEON',
                'caption_number' => 23456,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332737_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'FABRÍCIO BENTO SOARES',
                'slug' => 'fabricio-bento-soares',
                'short_name' => 'FABRÍCIO MASSA BRUTA',
                'caption_number' => 23666,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332738_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ALDIRENI DE NAZARE FERREIRA',
                'slug' => 'aldireni-de-nazare-ferreira',
                'short_name' => 'CAROL ENFERMEIRA',
                'caption_number' => 23777,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332742_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'HERALDO PÁDUA DE QUEIROZ',
                'slug' => 'heraldo-pádua-de-queiroz',
                'short_name' => 'HERALDO PÁDUA',
                'caption_number' => 23999,
                'status' => 1,
                'featured' => true,
                'party_id' => '4',
                'city_id' => 2,
                'image' => 'FMG130002332731_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'FABRICIO ADÃO DIAS AMARAL',
                'slug' => 'fabricio-adao-dias-amaral',
                'short_name' => 'FABRICIO AMARAL',
                'caption_number' => 25000,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004613_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JEANE SILVA DOS SANTOS',
                'slug' => 'jeane-silva-dos-santos',
                'short_name' => 'JEANE SILVA',
                'caption_number' => 25025,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004602_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOSÉ FABIO DA SILVA',
                'slug' => 'jose-fabio-da-silva',
                'short_name' => 'PASTOR FABIO',
                'caption_number' => 25045,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004609_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'BENEDITA CANDIDO RUFINO',
                'slug' => 'benedita-candido-rufino',
                'short_name' => 'BENEDITA RUFINO',
                'caption_number' => 25100,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004605_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ADNEIA DE SOUZA LEITE RIBEIRO',
                'slug' => 'adneia-de-souza-leite-ribeiro',
                'short_name' => 'ADNEIA DE ALEXANDRITA',
                'caption_number' => 25111,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004603_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ROBERTA DIAS FREITAS',
                'slug' => 'roberta-dias-freitas',
                'short_name' => 'ROBERTA DIAS',
                'caption_number' => 25123,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004607_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DILAINE VANESSA DE MORAIS PACHECO',
                'slug' => 'dilaine-vanessa-de-morais-pacheco',
                'short_name' => 'DILAINE PACHECO',
                'caption_number' => 25222,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004610_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'SEBASTIÃO TIAGO DE QUEIROZ',
                'slug' => 'sebastiao-tiago-de-queiroz',
                'short_name' => 'TIÃO TIAGO',
                'caption_number' => 25333,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004604_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RICARDO SOLER SOUSA',
                'slug' => 'ricardo-soler-sousa',
                'short_name' => 'RICARDO SOLER',
                'caption_number' => 25444,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004606_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DOUGLAS BAIS DA SILVA',
                'slug' => 'douglas-bais-da-silva',
                'short_name' => 'DOUGLAS BAIS',
                'caption_number' => 25456,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004611_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'WELLINGTON RODRIGUES DE LIMA',
                'slug' => 'wellington-rodrigues-de-lima',
                'short_name' => 'WELLINGTON RODRIGUES MARRUCO',
                'caption_number' => 25555,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004608_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'PATRICIA JOSÉ ALMEIDA QUEIROZ',
                'slug' => 'patricia-jose-almeida-queiroz',
                'short_name' => 'PATRICIA JOSÉ',
                'caption_number' => 25666,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004614_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CLAYTON MARCIO DE FREITAS',
                'slug' => 'clayton-marcio-de-freitas',
                'short_name' => 'MARCINHO PROFESSOR DE MUSICA',
                'caption_number' => 25777,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004601_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ERIVALDO GUILHERME DOS SANTOS',
                'slug' => 'erivaldo-guilherme-dos-santos',
                'short_name' => 'NALDO VIGIA',
                'caption_number' => 25986,
                'status' => 1,
                'featured' => true,
                'party_id' => '5',
                'city_id' => 2,
                'image' => 'FMG130002004612_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RONILDO GONÇALVES DE OLIVEIRA',
                'slug' => 'ronildo-goncalves-de-oliveira',
                'short_name' => 'RONILDO DO MOTOTAXI',
                'caption_number' => 27000,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037752_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LUIZ ANTONIO DE OLIVEIRA',
                'slug' => 'luiz-antonio-de-oliveira',
                'short_name' => 'LUIZINHO DO TRICICLO',
                'caption_number' => 27021,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037747_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LUCELENA DIAS FURTADO',
                'slug' => 'lucelena-dias-furtado',
                'short_name' => 'LUCELENA DIAS',
                'caption_number' => 27027,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037760_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'NATHALIA DE FREITAS COSTA',
                'slug' => 'nathalia-de-freitas-costa',
                'short_name' => 'NATHALIA TURISMO',
                'caption_number' => 27123,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037759_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JULIETE MARTINS BORGES ARAUJO',
                'slug' => 'juliete-martins-borges-araujo',
                'short_name' => 'JULIETE MARTINS',
                'caption_number' => 27125,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037756_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOAQUIM LUIZ CANDIDO',
                'slug' => 'joaquim-luiz-candido',
                'short_name' => 'JOAQUIM DA LARANJA',
                'caption_number' => 27161,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037755_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CARLOS ALBERTO PETROCELLI',
                'slug' => 'carlos-alberto-petrocelli',
                'short_name' => 'TOCHINHA',
                'caption_number' => 27200,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037753_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'GUSTAVO OLIVEIRA HUHNKE',
                'slug' => 'gustavo-oliveira-huhnke',
                'short_name' => 'GUSTAVO DA BIKE',
                'caption_number' => 27333,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037754_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'FRANCISCO FREITAS FILHO',
                'slug' => 'francisco-freitas-filho',
                'short_name' => 'CHICO CANDINHO',
                'caption_number' => 27444,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037749_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOSÉ IVALDO BARBOSA',
                'slug' => 'jose-ivaldo-barbosa',
                'short_name' => 'BATORÉ',
                'caption_number' => 27500,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037748_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ALINE TRINDADE QUEIROZ',
                'slug' => 'aline-trindade-queiroz',
                'short_name' => 'ALINE QUEIROZ',
                'caption_number' => 27657,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037758_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA APARECIDA DE FREITAS OLIVEIRA',
                'slug' => 'maria-aparecida-de-freitas-oliveira',
                'short_name' => 'MARIA DO BERNARDO',
                'caption_number' => 27678,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037757_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'GLAUBER NUNES URZEDO',
                'slug' => 'glauber-nunes-urzedo',
                'short_name' => 'GLAUBER VENDEDOR',
                'caption_number' => 27777,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037751_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JUCILENE DOS SANTOS',
                'slug' => 'jucilene-dos-santos',
                'short_name' => 'BAIANA',
                'caption_number' => 27888,
                'status' => 1,
                'featured' => true,
                'party_id' => '6',
                'city_id' => 2,
                'image' => 'FMG130002037750_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CRISTIAN OLIVEIRA SANTOS',
                'slug' => 'cristian-oliveira-santos',
                'short_name' => 'DR CRISTIAN',
                'caption_number' => 33000,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 2,
                'image' => 'FMG130002332751_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ANGELA PERPETUA SOARES MAIA CAROLINO',
                'slug' => 'angela-perpetua-soares-maia-carolino',
                'short_name' => 'PASTORA ÂNGELA',
                'caption_number' => 33100,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 2,
                'image' => 'FMG130002332749_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'GEISA COSTA LIMA',
                'slug' => 'geisa-costa-lima',
                'short_name' => 'GEISA PROFESSORA',
                'caption_number' => 33107,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 2,
                'image' => 'FMG130002332758_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LOURINEI FRANCISCO DE SOUZA',
                'slug' => 'lourinei-francisco-de-souza',
                'short_name' => 'LOURINEI DO CORRENTE SOLIDÁRIA',
                'caption_number' => 33111,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332755_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'WENDER PERES DE LIMA',
                'slug' => 'wender-peres-de-lima',
                'short_name' => 'PASTOR TÚLIO DO LANCHE',
                'caption_number' => 33123,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332761_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOSÉ FRANCISCO DA ROCHA',
                'slug' => 'jose-francisco-da-rocha',
                'short_name' => 'ZÉ CAMBOTA',
                'caption_number' => 33222,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332759_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'THAMARA DE FREITAS CORCINDO',
                'slug' => 'thamara-de-freitas-corcindo',
                'short_name' => 'THAMARA LANCHES',
                'caption_number' => 33300,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332752_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'FRANCISCO DA SILVA DIAS',
                'slug' => 'francisco-da-silva-dias',
                'short_name' => 'FRANCISCO DIAS',
                'caption_number' => 33333,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332753_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JERÔNIMO NUNES DE ALMEIDA',
                'slug' => 'jeronimo-nunes-de-almeida',
                'short_name' => 'JERÔNIMO NUNES',
                'caption_number' => 33444,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332750_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ALICE ALVES DE OLIVEIRA',
                'slug' => 'alice-alves-de-oliveira',
                'short_name' => 'ALICE OLIVEIRA',
                'caption_number' => 33456,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332757_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOSÉ JACÓ BARBOSA',
                'slug' => 'jose-jaco-barbosa',
                'short_name' => 'JACÓ DO ESPORTE',
                'caption_number' => 33500,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332754_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA IZABELA GUIMARÃES ANDRADE',
                'slug' => 'maria-izabela-guimaraes-andrade',
                'short_name' => 'MARIA IZABELA BELINHA',
                'caption_number' => 33555,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332748_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MAXOEL DE JESUS FERREIRA',
                'slug' => 'maxoel-de-jesus-ferreira',
                'short_name' => 'DR MAXOEL',
                'caption_number' => 33777,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332756_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOSÉ ROBERTO AMARAL',
                'slug' => 'jose-roberto-amaral',
                'short_name' => 'BETO DA FARMÁCIA',
                'caption_number' => 33999,
                'status' => 1,
                'featured' => true,
                'party_id' => '7',
                'city_id' => 4,
                'image' => 'FMG130002332760_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RICARDO OLIVEIRA DE FREITAS',
                'slug' => 'ricardo-oliveira-de-freitas',
                'short_name' => 'RICARDO BAIANO',
                'caption_number' => 40000,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 4,
                'image' => 'FMG130002333234_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CRISTINA LIMA RODRIGUES',
                'slug' => 'cristina-lima-rodrigues',
                'short_name' => 'CRISTINA PROFESSORA',
                'caption_number' => 40111,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 4,
                'image' => 'FMG130002333232_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'SILVIO SIDNEY SILVA',
                'slug' => 'silvio-sidney-silva',
                'short_name' => 'SILVÃO DA PATROL',
                'caption_number' => 40122,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333226_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ANA LUCIA MENEZES SANTOS',
                'slug' => 'ana-lucia-menezes-santos',
                'short_name' => 'ANA LÚCIA',
                'caption_number' => 40123,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333227_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ANA CAROLINA FREITAS MIRANDA',
                'slug' => 'ana-carolina-freitas-miranda',
                'short_name' => 'CAROL MIRANDA',
                'caption_number' => 40222,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333221_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LEONER SOARES TEODORO',
                'slug' => 'leoner-soares-teodoro',
                'short_name' => 'LEO SOARES',
                'caption_number' => 40333,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333222_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'VILMAR DA SILVA BARRETO',
                'slug' => 'vilmar-da-silva-barreto',
                'short_name' => 'VILMAR BARRETO',
                'caption_number' => 40444,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333223_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'PEDRO ALVES GARCIA',
                'slug' => 'pedro-alves-garcia',
                'short_name' => 'PEDRINHO GARCIA',
                'caption_number' => 40555,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333230_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOÃO BATISTA DE OLIVEIRA',
                'slug' => 'joao-batista-de-oliveira',
                'short_name' => 'J FIGUEREDO',
                'caption_number' => 40567,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333228_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOSÉ IDEON DE OLIVEIRA',
                'slug' => 'jose-ideon-de-oliveira',
                'short_name' => 'IDEON OLIVEIRA',
                'caption_number' => 40666,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333225_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'FERNANDA DE MEDEIROS BASILIO',
                'slug' => 'fernanda-de-medeiros-basilio',
                'short_name' => 'DRA FERNANDA',
                'caption_number' => 40777,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333224_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA BATISTA DE URZEDO',
                'slug' => 'maria-batista-de-urzedo',
                'short_name' => 'MARIA DA MARMITA',
                'caption_number' => 40789,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333229_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ADEBALDO BORGES DE FREITAS',
                'slug' => 'adebaldo-borges-de-freitas',
                'short_name' => 'ADEBALDO BORGES',
                'caption_number' => 40888,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333233_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'GILBERTO LUIZ DE FARIA',
                'slug' => 'gilberto-luiz-de-faria',
                'short_name' => 'GILBERTO FARIA',
                'caption_number' => 40999,
                'status' => 1,
                'featured' => true,
                'party_id' => '8',
                'city_id' => 1,
                'image' => 'FMG130002333231_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JAYME DE MORAES VILELA',
                'slug' => 'jayme-de-moraes-vilela',
                'short_name' => 'JAIME DA CAIXA',
                'caption_number' => 43000,
                'status' => 1,
                'featured' => true,
                'party_id' => '9',
                'city_id' => 1,
                'image' => 'FMG130002153683_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CARTER RODRIGO OLIVEIRA SAVISKI',
                'slug' => 'carter-rodrigo-oliveira-saviski',
                'short_name' => 'RODRIGO DO BANCO',
                'caption_number' => 43043,
                'status' => 1,
                'featured' => true,
                'party_id' => '9',
                'city_id' => 1,
                'image' => 'FMG130002153682_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ADJA SILVA DOS SANTOS',
                'slug' => 'adja-silva-dos-santos',
                'short_name' => 'ADJA DO BRONZE',
                'caption_number' => 43333,
                'status' => 1,
                'featured' => true,
                'party_id' => '9',
                'city_id' => 1,
                'image' => 'FMG130002153688_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'HÉLIO CORREIA DE OLIVEIRA',
                'slug' => 'helio-correia-de-oliveira',
                'short_name' => 'HÉLIO CORREIA',
                'caption_number' => 44000,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 1,
                'image' => 'FMG130002359350_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'SÉRGIO APARECIDO ALVES BENTO',
                'slug' => 'sergio-aparecido-alves-bento',
                'short_name' => 'DR SÉRGIO BENTO',
                'caption_number' => 44044,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 1,
                'image' => 'FMG130002359345_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'NEI ALVES BARBOSA JUNIOR',
                'slug' => 'nei-alves-barbosa-junior',
                'short_name' => 'NEI JUNIOR',
                'caption_number' => 44111,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 1,
                'image' => 'FMG130002359349_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RELMARCIO SEVERINO DA SILVA',
                'slug' => 'relmarcio-severino-da-silva',
                'short_name' => 'RELMARCIO',
                'caption_number' => 44222,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 1,
                'image' => 'FMG130002359341_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ABIDAIR DE FREITAS FARIA',
                'slug' => 'abidair-de-freitas-faria',
                'short_name' => 'DR ABIDAIR',
                'caption_number' => 44333,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 1,
                'image' => 'FMG130002359348_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ADRIELLE MAIA BENTO',
                'slug' => 'adrielle-maia-bento',
                'short_name' => 'ADRIELLE PERSONAL',
                'caption_number' => 44440,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359339_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RONALDO VIEIRA DA COSTA',
                'slug' => 'ronaldo-vieira-da-costa',
                'short_name' => 'RONALDO KARFRIOS',
                'caption_number' => 44444,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359343_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'IZABELLA FERREIRA MORAIS GUEDES',
                'slug' => 'izabella-ferreira-morais-guedes',
                'short_name' => 'IZABELLA GUEDES',
                'caption_number' => 44555,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359340_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ODAIR TIAGO DE QUEIROZ',
                'slug' => 'odair-tiago-de-queiroz',
                'short_name' => 'ODAIR TIAGO',
                'caption_number' => 44666,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359347_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DAYANE GONÇALVES DE LIMA',
                'slug' => 'dayane-goncalves-de-lima',
                'short_name' => 'DAYANE LIMA',
                'caption_number' => 44777,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359342_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'SINOMAR BARBOSA DE MORAIS',
                'slug' => 'sinomar-barbosa-de-morais',
                'short_name' => 'SINOMAR BARBOSA',
                'caption_number' => 44789,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359338_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARCIA URZEDO MILANI',
                'slug' => 'marcia-urzedo-milani',
                'short_name' => 'MARCIA URZEDO MILANI',
                'caption_number' => 44888,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359346_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RONEI NETO DE MORAIS',
                'slug' => 'ronei-neto-de-morais',
                'short_name' => 'RONEI MORAIS',
                'caption_number' => 44999,
                'status' => 1,
                'featured' => true,
                'party_id' => '10',
                'city_id' => 3,
                'image' => 'FMG130002359344_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'EDCLEBER CARVALHO CARNEIRO',
                'slug' => 'edcleber-carvalho-carneiro',
                'short_name' => 'EDCLEBER DAS CALHAS THEODORO',
                'caption_number' => 55000,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181206_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'EDILSON FERREIRA DA SILVA',
                'slug' => 'edilson-ferreira-da-silva',
                'short_name' => 'TERRINHA DA PADARIA',
                'caption_number' => 55123,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181207_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'SILVAL ANTONIO BOTELHO',
                'slug' => 'silval-antonio-botelho',
                'short_name' => 'SILVAL CANTOR',
                'caption_number' => 55134,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181210_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DIVALDA PIMENTA BARBOSA',
                'slug' => 'divalda-pimenta-barbosa',
                'short_name' => 'DIVALDA LOIRA SEGURANÇA',
                'caption_number' => 55155,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181201_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'JOCIMARIO JOSE BARBOSA JUNIOR',
                'slug' => 'jocimario-jose-barbosa-junior',
                'short_name' => 'PROFESSOR JOCIMARIO',
                'caption_number' => 55222,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181213_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'UELTON ALVES DE URZEDO',
                'slug' => 'uelton-alves-de-urzedo',
                'short_name' => 'BOLERO',
                'caption_number' => 55333,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181204_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LUCIMARA ROSA DE SOUZA',
                'slug' => 'lucimara-rosa-de-souza',
                'short_name' => 'LUCIMARA MOTORISTA',
                'caption_number' => 55404,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181208_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ELIDA ROSA DA SILVA',
                'slug' => 'elida-rosa-da-silva',
                'short_name' => 'ELIDA',
                'caption_number' => 55444,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181214_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARCIO ANTONIO MOLINA',
                'slug' => 'marcio-antonio-molina',
                'short_name' => 'MARCIO DA AUTO ESCOLA',
                'caption_number' => 55555,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181203_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RAQUEL BERNADES DE OLIVEIRA PEREIRA',
                'slug' => 'raquel-bernades-de-oliveira-pereira',
                'short_name' => 'RAQUEL',
                'caption_number' => 55666,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181211_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RONEI QUEIROZ VASCONCELOS',
                'slug' => 'ronei-queiroz-vasconcelos',
                'short_name' => 'RONEI MOSQUITO',
                'caption_number' => 55777,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181202_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARCELO JUNIOR NASCIMENTO',
                'slug' => 'marcelo-junior-nascimento',
                'short_name' => 'MARCELATUS',
                'caption_number' => 55800,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181209_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ROBISON APARECIDO DA SILVA',
                'slug' => 'robison-aparecido-da-silva',
                'short_name' => 'ROBISON SILVA',
                'caption_number' => 55888,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181205_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'LAZARA REGINA DE FARIA',
                'slug' => 'lazara-regina-de-faria',
                'short_name' => 'LAZARA FARIA',
                'caption_number' => 55999,
                'status' => 1,
                'featured' => true,
                'party_id' => '11',
                'city_id' => 3,
                'image' => 'FMG130002181212_div.jpeg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'RODERVAL ALVES DA SILVA',
                'slug' => 'roderval-alves-da-silva',
                'short_name' => 'RODERVAL CONSTRUTOR',
                'caption_number' => 65000,
                'status' => 1,
                'featured' => true,
                'party_id' => '12',
                'city_id' => 3,
                'image' => 'FMG130002153687_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CRISTIANE DE LIMA SANTOS SOUZA',
                'slug' => 'cristiane-de-lima-santos-souza',
                'short_name' => 'CRISTIANE LIMA',
                'caption_number' => 65225,
                'status' => 1,
                'featured' => true,
                'party_id' => '12',
                'city_id' => 3,
                'image' => 'FMG130002153693_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ODENIRIO CANDIDO MARTINS',
                'slug' => 'odenirio-candido-martins',
                'short_name' => 'NEGUINHO DO XINGU',
                'caption_number' => 65505,
                'status' => 1,
                'featured' => true,
                'party_id' => '12',
                'city_id' => 3,
                'image' => 'FMG130002153685_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DIEGO FERNANDES DE SOUZA',
                'slug' => 'diego-fernandes-de-souza',
                'short_name' => 'DIEGO FERNANDES',
                'caption_number' => 77000,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242953_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'BARBARA CRISTINA RIBEIRO',
                'slug' => 'barbara-cristina-ribeiro',
                'short_name' => 'BARBARA RIBEIRO',
                'caption_number' => 77077,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242965_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ROSIMEIRE REAL DE ARRUDA',
                'slug' => 'rosimeire-real-de-arruda',
                'short_name' => 'ROSIMEIRE REAL',
                'caption_number' => 77123,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242959_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'TAMIRES GOMES MESSIAS',
                'slug' => 'tamires-gomes-messias',
                'short_name' => 'TAMIRES GOMES',
                'caption_number' => 77126,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242966_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'ALAN SILVA PAIVA CUNHA',
                'slug' => 'alan-silva-paiva-cunha',
                'short_name' => 'ALAN PAIVA',
                'caption_number' => 77177,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242955_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'VALDEILSON DA SILVA GOMES',
                'slug' => 'valdeilson-da-silva-gomes',
                'short_name' => 'BÔ BARBEIRO',
                'caption_number' => 77222,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242958_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'CINIRA APARECIDA DE OLIVEIRA',
                'slug' => 'cinira-aparecida-de-oliveira',
                'short_name' => 'CINIRA OLIVEIRA',
                'caption_number' => 77319,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242960_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARCO ANTONIO CAMARGO',
                'slug' => 'marco-antonio-camargo',
                'short_name' => 'MARCO KUEBA',
                'caption_number' => 77333,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242956_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'DEMETRIO CESAR DE SOUSA PINTO',
                'slug' => 'demetrio-cesar-de-sousa-pinto',
                'short_name' => 'DEMÉTRIO VICENTINO',
                'caption_number' => 77444,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242954_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'MARIA CRISTINA FERREIRA NEVES',
                'slug' => 'maria-cristina-ferreira-neves',
                'short_name' => 'CRISTINA DO BOLINHA',
                'caption_number' => 77555,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242963_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'VICENTE DE PAULO SILVA CUNHA',
                'slug' => 'vicente-de-paulo-silva-cunha',
                'short_name' => 'VICENTE CUNHA',
                'caption_number' => 77666,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242961_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'WEMERSON MEDEIROS DOS SANTOS',
                'slug' => 'wemerson-medeiros-dos-santos',
                'short_name' => 'CHICÃO',
                'caption_number' => 77777,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242962_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'FABIANO FAZAN',
                'slug' => 'fabiano-fazan',
                'short_name' => 'FABIANO FAZAN',
                'caption_number' => 77888,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242957_div.jpg',
                
            ]);
    
            Candidate::factory()->create([
                'name' => 'PEDRO CLEMENTINO DA SILVA',
                'slug' => 'pedro-clementino-da-silva',
                'short_name' => 'PEDRO CLEMENTINO',
                'caption_number' => 77890,
                'status' => 1,
                'featured' => true,
                'party_id' => '13',
                'city_id' => 3,
                'image' => 'FMG130002242964_div.jpg',
                
            ]);

    }
}
