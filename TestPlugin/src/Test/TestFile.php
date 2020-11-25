<?php

namespace Test;

use pocketmine\plugin\PluginBase;

use pocketmine\event\player\PlayerJoinEvent;

use pocketmine\event\player\PlayerQuitEvent;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat as C;

class Test extends PluginBase implements Listener{

          public function onLoad(){
                    $this->getLogger()->info("Plugin Loading");
          }
          public function onEnable(){
                    $this->getServer()->getPluginManager()->registerEvents($this,$this);
		    $this->getLogger()->info("Enabled Plugin");
          }
          public function onDisable(){
                    $this->getLogger()->info("Plugin Disabled");
          }
	  public function onJoin(PlayerJoinEvent $event){
  		 $player = $event->getPlayer();
   		$name = $player->getName();
   		$this->getServer()->broadcastMessage(C::GREEN."$name Joined The Test Server! Awesome!");
	}
}
