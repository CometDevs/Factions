<?php
namespace factions;

class Factions extends \pocketmine\plugin\PluginBase {

  private static Factions $plugin;
  
  public function onLoad(): void {
   self::$plugin = $this;
  }

  public static function getPlugin(): Factions {
   return self::$plugin;
  }
}
