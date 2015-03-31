<?php

class de_cbble extends MapsHeatmap {

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

}

?>
