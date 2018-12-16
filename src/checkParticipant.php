<?php
    declare (strict_types = 1);
    class checkParticipant extends participantCreation
    {
        
        protected function checkNumber()
        {
            $allPlayer = new participantCreation;
            $content = $allPlayer->createNumberPlayer();
            if (count($content) % 2 == "1") {
                $remove = array_pop($content);
                unset($remove);
            }
            return ($content);
        }
        private function frequency($tab, $number, $x, $i)
        {
            $count = 0;
            $flag = " ";
            for ($i = 1; $i <= $number; $i++) {
                if ($count == 4) {
                    break;
                }
                if ($tab[$i] === $x && $flag === $x) {
                    $count++;
                } elseif ($tab[$i] === $x) {
                    $count = 1;
                } else {
                    $count = 0;
                }
                $flag = $tab[$i];
            }
            return $count;
        }
        private function Line($grid)
        {
            foreach ($grid as $value) {
                $x = 'yellow';
                $i = 1;
                $number = sizeof($value);
                $check = $this->frequency($value, $number, $x, $i);
                if ($check == 4) {
                    $score["winner"] = $x;
                    $score["flag"] = 1;
                    break;
                } else {
                    $score["winner"] = null;
                    $score["flag"] = 0;
                }
                $x = 'red';
                $i = 1;
                $number = sizeof($value);
                $check = $this->frequency($value, $number, $x, $i);
                if ($check == 4) {
                    $score["winner"] = $x;
                    $score["flag"] = 1;
                } else {
                    $score["winner"] = null;
                    $score["flag"] = 0;
                }
            }
            return($score);
        }
        private function Column($grid)
        {
            $yellow = array();
            $red = array();
            for ($col = 1; $col <= 7; $col++) {
                for ($row = 1; $row <= 6; $row++) {
                    $yellow[$row] = $grid[$row][$col];
                }
                $y = 'yellow';
                $number = sizeof($yellow);
                $reponse = $this->frequency($yellow, $number, $y, $i = 1);
                if ($reponse == 4) {
                    $score["winner"] = $y;
                    $score["flag"] = 1;
                    break;
                } else {
                    $score["winner"] = null;
                    $score["flag"] = 0;
                }
                for ($row = 1; $row <= 6; $row++) {
                    $red[$row] = $grid[$row][$col];
                }
                $r = 'red';
                $number = sizeof($red);
                $reponse = $this->frequency($red, $number, $r, $i = 1);
                if ($reponse == 4) {
                    $score["winner"] = $r;
                    $score["flag"] = 1;
                    break;
                } else {
                    $score["winner"] = null;
                    $score["flag"] = 0;
                }
            }
            return ($score);
        }
        private function Diagonal($grid)
        {
           
        }
        public function checkAll($grid)
        {
            
        }
        public function checkGrid($grid)
        {
            $score = $this->checkLine($grid);
            if ($score["flag"] == 1) {
                return $score;
            } else {
                $score = $this->checkColumn($grid);
                if ($score["flag"] == 1) {
                    return $score;
                } else {
                    $score = $this->checkDiagonal($grid);
                    if ($score["flag"] == 1) {
                        return $score;
                    } else {
                        return $score;
                    }
                }
            }
        }
    }
?>