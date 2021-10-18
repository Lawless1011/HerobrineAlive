<?php

namespace HerobrineAlive;

use pocketmine\scheduler\PluginTask;

class HerobrineChat extends PluginTask{
    public function onRun(){
        $chatid = rand(1, 10); //Get a random number to choose the message text
        
        if($chatid == "1"){
            $message = "<Herobrine> Where is your god now?";
        }elseif($chatid == "2"){
            $message = "<Herobrine> You can not defeat me!";
        }elseif($chatid == "3"){
            $message = "<Herobrine> I am your god now!";
        }elseif($chatid == "4"){
            $message = "<Herobrine> Your world is mine!";
        }elseif($chatid == "5"){
            $message = "<Herobrine> Hello";
        }elseif($chatid == "6"){
            $message = "<Herobrine> Minecraft is dominated by me";
        }elseif($chatid == "7"){
            $message = "<Herobrine> §k§4Die, to the fool who tried to find me";
        }elseif($chatid == "8"){
            $message = "<Herobrine> Die, to the fool who tried to find me";
        }elseif($chatid == "9"){
            $message = "<Herobrine> Let's impose sanctions";
        }elseif($chatid == "10"){
            $message = "<Herobrine> I'm herobrine, I'm Notch's younger brother";
        }
        //Broadcast $message
    }
}
