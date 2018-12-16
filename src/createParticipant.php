<?php
    declare(strict_types=1);
    class participantCreation
    {
        public $tabPlayer;
        protected function createNumberParticipant()
        {
            for ($i=0; $i < 4 ; $i++) { 
                $tabPlayer["player".$i]["id"] = $i;
            }
            return($tabPlayer);
        }
        public function createTeam()
        {
            $players = new checkParticipant;
            $players = $players -> checkNumber();
            $tabShuffle = array("red","red","yellow","yellow");
            shuffle($tabShuffle);
            for ($i=0; $i < 4 ; $i++) { 
                $players["player".$i]["team"] = $tabShuffle[$i];
            }
            return($players);
        }
    }
?>