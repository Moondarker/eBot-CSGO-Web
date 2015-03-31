<?php

class de_overpass extends MapsHeatmap {

    public function __construct($match_id) {
        $this->setStartX(-4573);
        $this->setStartY(-3557);
        $this->setEndX(164);
        $this->setEndY(1724);
        $this->setFlipV(true);
        $this->setResX(500);
        $this->setResY(566);
        $this->calcSize();
        $this->setMatchId($match_id);
    }

    public function getMapImage() {
        return "/images/maps/csgo/overview/de_overpass.png";
    }

}

?>
