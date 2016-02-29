<?php

class de_cbble extends MapsHeatmap {

<<<<<<< HEAD
    public function __construct($match_id) {
        $this->setStartX(-3488);
        $this->setStartY(-2068);
        $this->setEndX(887);
        $this->setEndY(3039);
        $this->setFlipV(true);
        $this->setResX(500);
        $this->setResY(585);
        $this->calcSize();
        $this->setMatchId($match_id);
    }

    public function getMapImage() {
        return "/images/maps/csgo/overview/de_cbble.png";
    }
=======
        public function __construct($match_id) {
                $this->setStartX(-3496);
                $this->setStartY(-2072);
                $this->setEndX(864);
                $this->setEndY(3048);
                $this->setFlipV(true);
                $this->setResX(500);
                $this->setResY(584);
                $this->calcSize();
                $this->setMatchId($match_id);
        }

        public function getMapImage() {
                return "/images/maps/csgo/overview/de_cbble.png";
        }
>>>>>>> refs/remotes/deStrO/master

}

?>
