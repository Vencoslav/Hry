<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class SeederZanr extends Seeder
{
    public function run()
    {
        $genres = [
            'Action', 'Adventure', 'Casual', 'Indie', 'RPG', 'Simulation', 'Strategy', 'Sports', 'Racing', 'Puzzle', 'Horror', 'Platformer', 'Shooter', 'Fighting', 'Visual Novel', 'Sandbox', 'Survival', 'Stealth', 'Open World', 'Roguelike', 'Roguelite', 'Metroidvania', 'Turn-Based', 'Real-Time Strategy', 'Tactical', 'City Builder', 'Farming Sim', 'Dating Sim', 'Rhythm', 'Card Game', 'Tower Defense', 'MOBA', 'MMORPG', 'Battle Royale', 'Souls-like', 'JRPG', 'Western RPG', '2D', '3D', 'Pixel Graphics', 'Retro', 'Sci-fi', 'Fantasy', 'Historical', 'Noir', 'Cyberpunk', 'Post-apocalyptic', 'Mystery', 'Detective', 'Psychological', 'Comedy', 'Educational', 'Experimental', 'Minimalist', 'Atmospheric', 'Story Rich', 'Choices Matter', 'Multiple Endings', 'Replay Value', 'Procedural Generation', 'Crafting', 'Building', 'Exploration', 'Resource Management', 'Base Building', 'Economy', 'Trading', 'Space', 'Flight', 'Naval', 'Mechs', 'Zombies', 'Vampires', 'Dragons', 'Pirates', 'Ninjas', 'Superhero', 'Aliens', 'Robots', 'Dinosaurs', 'Western', 'War', 'World War II', 'World War I', 'Cold War', 'Modern Warfare', 'Future Warfare', 'Crime', 'Heist', 'Mafia', 'Gangster', 'Detective', 'Survival Horror', 'Lovecraftian', 'Gore', 'Sexual Content', 'Nudity', 'LGBTQ+', 'Female Protagonist', 'Male Protagonist', 'Character Customization', 'Controller', 'VR', 'Multiplayer', 'Singleplayer', 'Co-op', 'Online Co-op', 'Local Co-op', 'Split Screen', 'Cross-Platform Multiplayer', 'PvP', 'PvE', 'Competitive', 'Turn-Based Combat', 'Real-Time Combat', 'Tactical RPG', 'Action RPG', 'Hack and Slash', 'Beat \'em up', 'Bullet Hell', 'Shoot \'Em Up', 'Twin Stick Shooter', 'First-Person', 'Third-Person', 'Top-Down', 'Isometric', 'Side Scroller', 'Point & Click', 'Text-Based', 'Interactive Fiction', 'Hidden Object', 'Match 3', 'Board Game', 'Chess', 'Poker', 'Solitaire', 'Trivia', 'Word Game', 'Party Game', 'Music', 'Dance', 'Karaoke', 'Instrument', 'Driving', 'Motorcycle', 'Offroad', 'Sailing', 'Submarine', 'Football', 'Soccer', 'Basketball', 'Baseball', 'Golf', 'Tennis', 'Hockey', 'Skateboarding', 'Snowboarding', 'Skiing', 'Fishing', 'Hunting', 'Boxing', 'Martial Arts', 'Wrestling', 'Olympics', 'eSports', 'Casino', 'Gambling', 'Slots', 'Horse Racing', 'Pet', 'Cooking', 'Life Sim', 'God Game', 'Political Sim', 'Business Sim', 'Stock Market', 'Tycoon', 'Management', 'Time Management', 'Grand Strategy', '4X', 'Auto Battler', 'Wargame', 'Logic', 'Physics', 'Sokoban', 'Sudoku', 'Minesweeper', 'Mahjong', 'Jigsaw', 'Endless Runner', 'Parkour'
        ];
        
        foreach ($genres as $genre) {
            $this->db->table('zanr')->insert(['nazev' => $genre]);
        }
    }
}
