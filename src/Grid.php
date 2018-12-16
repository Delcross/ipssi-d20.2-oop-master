<?php
declare(strict_types=1);
    class Grid
    {
        public function initGrid()
        {
            public $tab;

            for ($row = 6; $row > 0; $row--) {
            
                for ($col = 1; $col < 8; $col++) {
                    $tab[$row][$col] = 0;
                    echo $row.",".$col." ";
                }
            echo"<br>";
            }
        }
    }
?>