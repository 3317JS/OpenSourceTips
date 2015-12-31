<?php

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\server\ServerCommandEvent;


public  function playerCommand(PlayerCommandPreprocessEvent $event) {
    $pl = $event->getPlayer();
    $me = $event->getMessage();
	$na = "PluginName";
	  if(strstr($me, $na)){
        if($this->getServer()->getPluginManager()->getPlugin("DevTools") == true){
        }else{
        $event->setCancelled();
        $pl->sendMessage("U ARE NOOB");
    }}
	}	

public function ServerCommand(ServerCommandEvent $event) {
    $pl = $event->getSender();
    $me = $event->getCommand();
	$na = "PluginName";
	  if(strstr($me, $na)){
        if($this->getServer()->getPluginManager()->getPlugin("DevTools") == true){
        }else{
        $event->setCancelled();
        $pl->sendMessage("U ARE NOOB");
    }}
	}