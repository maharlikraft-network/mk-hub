<?php

namespace DPGD896\MKHub;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class main extends PluginBase implements Listener {
	
	public function onEnable(){
	
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
	
	      switch($cmd->getName()){
                 case "hub":
	               if($sender instanceof Player){
		               $sender->teleport($this->getServer()->getDefaultLevel()->getSpawnLocation());
		               $sender->addtitle("§l§aTeleported", "§l§7to Lobby!",);
		               $sender->sendMessage("§l§eHub §l§7» §r§7Teleported!");
                  }
	     }
	return true;
	}
	
	
}
