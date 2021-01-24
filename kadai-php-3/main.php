<?php

require_once 'human.php';


class Main {
    static function start() {
       
        $tanaka = new Human("田中　太朗",25,"電車");
        $tanaka->say();
        $tanaka->think();
        $suzuki = new Human("鈴木　次郎",30,"野球");
        $suzuki->say();
        $suzuki->think();
        $sato = new Human("佐藤　花子",20,"映画");
        $sato->say();
        $sato->think();
        
    }
}

Main::start();