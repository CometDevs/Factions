<?php
namespace factions;

/**
 * Class Factions
 * @package factions
 */
class Factions extends \pocketmine\plugin\PluginBase {

  /** @var Factions $plugin */
  private static Factions $plugin;

  /**
   * @return void
   */
  public function onLoad(): void {
    self::$plugin = $this;
  }

  /**
   * @return Factions
   */
  public static function getPlugin(): Factions {
    return self::$plugin;
  }
}