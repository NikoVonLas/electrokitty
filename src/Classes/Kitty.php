<?php

namespace ElectroKitty\Classes;

class Kitty {

    public function __construct(
        public string $name,
        public bool $sex,           // 0 - female, 1 - male
        public int $age,            // Seconds
        public int $hp,             // Procents
        public int $starvation,     // Procents
        public int $temperature,    // -1 low, 0 normal, 1 high
        public int $mood,           // -1 low, 0 normal, 1 high
        public int $fatigue         // Procents
    ) {

    }

    public function getAllParams() {
        return json_encode([
            'name'          => $this->name,
            'sex'           => $this->sex,
            'age'           => $this->age,
            'hp'            => $this->hp,
            'starvation'    => $this->starvation,
            'temperature'   => $this->temperature,
            'mood'          => $this->mood,
            'fatigue'       => $this->fatigue
        ], JSON_UNESCAPED_UNICODE);
    }

}


