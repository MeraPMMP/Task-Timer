<?php

namespace Mera;

use pocketmine\plugin\PluginBase;
use pocketmine\{Server, Player};
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        $this->getLogger()->info("Eklenti Aktif");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getScheduler()->scheduleRepeatingTask(new MTask(), 20 * 3);
	}
}
