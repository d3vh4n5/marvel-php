<?php

declare(strict_types=1);

class SuperHero {

    // a partir de php 8 (promoted properties)
    public function __construct(
        readonly public string $name,
        private array $powers,
        public string $planet
    ){}

    public function show_all(){
        return get_object_vars($this);
    }

    public function description(){

        $powers = implode(", ", $this->powers);

        return "
            $this->name es un superhéroe que viene de
            $this->planet y tiene los siguientes poderes:
            $powers
        ";
    }

    public static function random(){
        $names = ["Thor", "Hulk"];
        $powers = [
            ["Superfuerza", "SuperOtraCosa"],
            ["Superhambre", "Super Aburrido"],
        ];
        $planets = ["Asgard", "Azeroth"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }
}

$hero2 = SuperHero::random();
echo $hero2->description();

// $hero = new SuperHero("Superman", ["SuperFuerza"], "Krypton");
// echo $hero->description();

// var_dump($hero->show_all());