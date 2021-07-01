<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Constraint\Count;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('id' => 1,  'short_description' => 'AF', 'long_description' => 'Afganistán'),
            array('id' => 2,  'short_description' => 'AX', 'long_description' => 'Islas Gland'),
            array('id' => 3,  'short_description' => 'AL', 'long_description' => 'Albania'),
            array('id' => 4,  'short_description' => 'DE', 'long_description' => 'Alemania'),
            array('id' => 5,  'short_description' => 'AD', 'long_description' => 'Andorra'),
            array('id' => 6,  'short_description' => 'AO', 'long_description' => 'Angola'),
            array('id' => 7,  'short_description' => 'AI', 'long_description' => 'Anguilla'),
            array('id' => 8,  'short_description' => 'AQ', 'long_description' => 'Antártida'),
            array('id' => 9,  'short_description' => 'AG', 'long_description' => 'Antigua y Barbuda'),
            array('id' => 10, 'short_description' => 'AN', 'long_description' =>  'Antillas Holandesas'),
            array('id' => 11, 'short_description' => 'SA', 'long_description' =>  'Arabia Saudí'),
            array('id' => 12, 'short_description' => 'DZ', 'long_description' =>  'Argelia'),
            array('id' => 13, 'short_description' => 'AR', 'long_description' =>  'Argentina'),
            array('id' => 14, 'short_description' => 'AM', 'long_description' =>  'Armenia'),
            array('id' => 15, 'short_description' => 'AW', 'long_description' =>  'Aruba'),
            array('id' => 16, 'short_description' => 'AU', 'long_description' =>  'Australia'),
            array('id' => 17, 'short_description' => 'AT', 'long_description' =>  'Austria'),
            array('id' => 18, 'short_description' => 'AZ', 'long_description' =>  'Azerbaiyán'),
            array('id' => 19, 'short_description' => 'BS', 'long_description' =>  'Bahamas'),
            array('id' => 20, 'short_description' => 'BH', 'long_description' =>  'Bahréin'),
            array('id' => 21, 'short_description' => 'BD', 'long_description' =>  'Bangladesh'),
            array('id' => 22, 'short_description' => 'BB', 'long_description' =>  'Barbados'),
            array('id' => 23, 'short_description' => 'BY', 'long_description' =>  'Bielorrusia'),
            array('id' => 24, 'short_description' => 'BE', 'long_description' =>  'Bélgica'),
            array('id' => 25, 'short_description' => 'BZ', 'long_description' =>  'Belice'),
            array('id' => 26, 'short_description' => 'BJ', 'long_description' =>  'Benin'),
            array('id' => 27, 'short_description' => 'BM', 'long_description' =>  'Bermudas'),
            array('id' => 28, 'short_description' => 'BT', 'long_description' =>  'Bhután'),
            array('id' => 29, 'short_description' => 'BO', 'long_description' =>  'Bolivia'),
            array('id' => 30, 'short_description' => 'BA', 'long_description' =>  'Bosnia y Herzegovina'),
            array('id' => 31, 'short_description' => 'BW', 'long_description' =>  'Botsuana'),
            array('id' => 32, 'short_description' => 'BV', 'long_description' =>  'Isla Bouvet'),
            array('id' => 33, 'short_description' => 'BR', 'long_description' =>  'Brasil'),
            array('id' => 34, 'short_description' => 'BN', 'long_description' =>  'Brunéi'),
            array('id' => 35, 'short_description' => 'BG', 'long_description' =>  'Bulgaria'),
            array('id' => 36, 'short_description' => 'BF', 'long_description' =>  'Burkina Faso'),
            array('id' => 37, 'short_description' => 'BI', 'long_description' =>  'Burundi'),
            array('id' => 38, 'short_description' => 'CV', 'long_description' =>  'Cabo Verde'),
            array('id' => 39, 'short_description' => 'KY', 'long_description' =>  'Islas Caimán'),
            array('id' => 40, 'short_description' => 'KH', 'long_description' =>  'Camboya'),
            array('id' => 41, 'short_description' => 'CM', 'long_description' =>  'Camerún'),
            array('id' => 42, 'short_description' => 'CA', 'long_description' =>  'Canadá'),
            array('id' => 43, 'short_description' => 'CF', 'long_description' =>  'República Centroafricana'),
            array('id' => 44, 'short_description' => 'TD', 'long_description' =>  'Chad'),
            array('id' => 45, 'short_description' => 'CZ', 'long_description' =>  'República Checa'),
            array('id' => 46, 'short_description' => 'CL', 'long_description' =>  'Chile'),
            array('id' => 47, 'short_description' => 'CN', 'long_description' =>  'China'),
            array('id' => 48, 'short_description' => 'CY', 'long_description' =>  'Chipre'),
            array('id' => 49, 'short_description' => 'CX', 'long_description' =>  'Isla de Navidad'),
            array('id' => 50, 'short_description' => 'VA', 'long_description' =>  'Ciudad del Vaticano'),
            

        );

        foreach ($countries as $key => $item) {
            Country::create([
                'id' =>  $item['id'],
                'short_description' => mb_strtoupper($item['short_description']),
                'long_description' => mb_strtoupper($item['long_description']),
            ]);
        }
    }
}
