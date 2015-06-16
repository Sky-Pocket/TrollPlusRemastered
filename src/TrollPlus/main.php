<?php 

namespace TrollPlus;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\level\Position;
use pocketmine\level\Level;
use pocketmine\level\Explosion;
use pocketmine\event\block\BlockEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\entity\EntityMoveEvent;
use pocketmine\event\entity\EntityMotionEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\Listener;
use pocketmine\math\Vector3 as Vector3;
use pocketmine\math\Vector2 as Vector2;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\network\protocol\AddMobPacket;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\network\protocol\UpdateBlockPacket;
use pocketmine\block\Block;
use pocketmine\block\WallSign;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\server\DataPacketSendEvent;
use pocketmine\network\protocol\DataPacket;
use pocketmine\network\protocol\Info;
use pocketmine\network\protocol\LoginPacket;

class main extends PluginBase implements CommandExecutor 
{
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		// check command names
		if (((strtolower ( $command->getName () ) == "trollplus" || strtolower ( $command->getName () ) == "t")) && isset ( $args [0] )) {
			try {
				$output = "";
				if (! $sender instanceof Player) {
					$output .= "Commands only available in-game play.\n";
					$sender->sendMessage ( $output );
					return;
				}
				
				if (strtolower ( $args [0] ) == "f") 
				{
				 $ciao = true;
				}
				if (strtolower($args[0]) == "f" && ($args[0]) == "off")
				{
				$ciao = false
				}
				
}
public function onPlayerMove(PlayerMoveEvent $event){
	if($ciao==true){
$event->setCancelled(true);
	}
	if($ciao==false)
	{
$event->setCancelled(true);	
	}
}
