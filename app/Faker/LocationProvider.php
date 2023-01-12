<?php

namespace App\Faker;
use Faker\Provider\Base;

class LocationProvider extends Base
{
    protected static $places = [
        'Budapest, Hungary, Europe, ',
        'Istanbul, Turkey, Europe, ',
        'Ankara, Turkey, Europe/Asia, ',
        'Krakow, Poland, Europe, ',
        'Rome, Italy, Europe, ',
        'Bangkok, Thailand, Asia, ',
        'Paris, France, Europe, ',
        'London, England, Europe, ',
        'Dubai, United Arab Emirates, Asia, ',
        'New York City, United States, North America, ',
        'Singapore, Singapore, Asia, ',
        'Kuala Lumpur, Malaysia, Asia, ',
        'Phuket, Thailand, Asia, ',
        'Tokyo, Japan, Asia, ',
        'Macau, Macau, Asia, ',
        'Delhi, India, Asia, ',
        'Miami, United States, North America, ',
        'Taipei, Taiwan, Asia, ',
        'Bali, Indonesia, Asia, ',
        'Mumbai, India, Asia, ',
        'Mecca, Saudi Arabia, Asia, ',
        'Prague, Czech Republic, Europe, ',
        'Hong Kong, Hong Kong, Asia, ',
        'Pattaya, Thailand, Asia, ',
        'Seoul, South Korea, Asia, ',
        'Barcelona, Spain, Europe, ',
        'Cancún, Mexico, North America, ',
        'Las Vegas, United States, North America, ',
        'Amsterdam, Netherlands, Europe, ',
        'Antalya, Turkey, Europe/Asia, ',
        'Osaka, Japan, Asia, ',
        'Los Angeles, United States, North America, ',
        'Vienna, Austria, Europe, ',
        'Berlin, Germany, Europe, ',
        'Madrid, Spain, Europe, ',
        'Johannesburg, South Africa, Africa, ',
        'Riyadh, Saudi Arabia, Asia, ',
        'Ho Chi Minh City, Vietnam, Asia, ',
        'Venice, Italy, Europe, ',
        'Athens, Greece, Europe, ',
        'Dublin, Ireland, Europe, ',
        'Moscow, Russia, Europe/Asia, ',
        'Toronto, Canada, North America, ',
        'Beijing, China, Asia, ',
        'Sydney, Australia, Australia and Oceania, ',
        'Punta Cana, Dominican Republic, North America, ',
        'San Francisco, United States, North America, ',
        'Munich, Germany, Europe, ',
        'Lisbon, Portugal, Europe, ',
        'Heraklion, Greece, Europe, ',
        'Cairo, Egypt, Africa, ',
        'Copenhagen, Denmark, Europe, ',
        'Kyoto, Japan, Asia, ',
        'Saint Petersburg, Russia, Europe/Asia, ',
        'Melbourne, Australia, Australia and Oceania, ',
        'Marrakesh, Morocco, Africa, ',
        'Auckland, New Zealand, Australia and Oceania, ',
        'Brussels, Belgium, Europe, ',
        'Stockholm, Sweden, Europe, ',
        'Frankfurt am Main, Germany, Europe, ',
        'Mexico City, Mexico, North America, ',
        'Lima, Peru, South America, ',
        'Rio de Janeiro, Brazil, South America, ',
        'Buenos Aires, Argentina, South America, ',
        'Rhodes, Greece, Europe, ',
        'Abu Dhabi, United Arab Emirates, Asia, ',
        'Washington D.C., United States, North America, ',
        'Nice, France, Europe, ',
        'Hurghada, Egypt, Asia, ',
        'Honolulu, United States, North America, ',
        'Cartagena, Colombia, South America, ',
        'Cusco, Peru, South America, ',
        'Quito, Ecuador, South America, ',
        'Cape Town, South Africa, Africa, ',
        'Lagos, Nigeria, Africa, ',
        'Casablanca, Morocco, Africa, ',
        'Accra, Ghana, Africa, ',
        'Auckland, New Zealand, Australia and Oceania, ',
        'Brisbane, Australia, Australia and Oceania, ',
        'Perth, Australia, Australia and Oceania, ',
        'Adelaide, Australia, Australia and Oceania, ',
        'Wellington, New Zealand, Australia and Oceania, ',
        'Queenstown, New Zealand, Australia and Oceania, ',
        'Christchurch, New Zealand, Australia and Oceania, ',
        'Apia, Samoa, Australia and Oceania, ',
        "Nuku'alofa, Tonga, Australia and Oceania, ",
        'Bora Bora, French Polynesia, Australia and Oceania, ',
        'Moscow, Russia, Europe/Asia, ',
        'Chennai, India, Asia, ',
        'Orlando, United States, North America, ',
        'Johor Bahru, Malaysia, Asia, ',
        'Denpasar, Indonesia, Asia, ',
        'Milan, Italy, Europe, ',
        'Osaka, Japan, Asia, ',
        'Agra, India, Asia, ',
        'Shanghai, China, Asia, ',
        'Seoul, South Korea, Asia, ',
        'San Miguel de Allende, Mexico, North America, ',
        'San Sebastián, Spain, Europe, ',
        'Ljubljana, Slovenia, Europe, ',
        'Antigua Guatemala, Guatemala, North America, ',
        'Porto, Portugal, Europe, ',
        'Edinburgh, Scotland, Europe, ',
        'Medellín, Colombia, South America, ',
        'Montreal, Canada, North America, ',
        'Copenhagen, Denmark, Europe, ',
        'Manchester, England, Europe, ',
        'Lyon, France, Europe, ',
        'Birmingham, England, Europe, ',
        'Liverpool, England, Europe, ',
        'Boston, United States, North America, ',
        'Tel Aviv, Israel, Asia, ',
        'Manila, Phillipines, Asia, ',
        'São Paulo, Brazil, South America, ',
        'Doha, Qatar, Asia, ',
        'Oslo, Norway, Europe, ',
        'Grindelwald, Switzerland, Europe, ',
        'Strasbourg, France, Europe, ',
        'Salzburg, Austria, Europe, ',
        'Cappadocia, Turkey, Europe/Asia, ',
        'Munich, Germany, Europe, ',
        'Kigali, Rwanda, Africa, ',
        'Nairobi, Kenya, Africa, ',
        'Durban, South Africa, Africa, ',
        'Algiers, Algeria, Africa, ',
        'Dar es Salaam, Tanzania, Africa, ', 
    ];
    public function location(): string
    {
        return static::randomElement(static::$places);
    }
}