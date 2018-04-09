<?php
// класс
class Building
{
    
    public $URL;

    public $headline;
    public $typeSell;
    public $price;
    public $lessPrice;
    public $buildingType;
    public $houseType;
    public $floorNumber;
    public $floorCount;
    public $commonSquare;
    public $kitchenSquare;
    public $wallType;
    public $roomCount;
    public $layout;
    public $tuilet;
    public $heating;
    public $repear;
    public $furniture;
    public $devices;
    public $multimedia;
    public $comfort;
    public $communication;
    public $infrastructure;
    public $landshaft;
    public $notation;

    public $lengthsToCity;
    public $landSquare;
    public $cadastralNumber;
    public $outHeatingWall;
    public $roofType;
    public $builtYear;


    function __construct($url)
    {
         //echo 'constructor';
         $this->URL = $url;
         $this->headline = "-";
         $this->typeSell = "-";
         $this->price = "-";
         $this->lessPrice = "-";
         $this->buildingType = "-";
         $this->houseType = "-";
         $this->floorNumber = "-";
         $this->floorCount = "-";
         $this->commonSquare = "-";
         $this->kitchenSquare = "-";
         $this->wallType = "-";
         $this->roomCount = "-";
         $this->layout = "-";
         $this->tuilet = "-";
         $this->heating = "-";
         $this->repear = "-";
         $this->furniture = "-";
         $this->devices = "-";
         $this->multimedia = "-";
         $this->comfort = "-";
         $this->communication = "-";
         $this->infrastructure = "-";
         $this->landshaft = "-";
         $this->notation = "-";

         $this->lengthsToCity = "-";
         $this->landSquare = "-";
         $this->cadastralNumber = "-";
         $this->outHeatingWall = "-";
         $this->roofType = "-";
         $this->builtYear = "-";
    }

    public function __toString(){
        return (string)$this->URL.'<br>'.
         (string)$this->headline.'<br>'.
         (string)$this->typeSell.'<br>'.
         (string)$this->price.'<br>'.
         (string)$this->lessPrice.'<br>'.
         (string)$this->buildingType.'<br>'.
         (string)$this->houseType.'<br>'.
         (string)$this->floorNumber.'<br>'.
         (string)$this->floorCount.'<br>'.
         (string)$this->commonSquare.'<br>'.
         (string)$this->kitchenSquare.'<br>'.
         (string)$this->wallType.'<br>'.
         (string)$this->roomCount.'<br>'.
         (string)$this->layout.'<br>'.
         (string)$this->tuilet.'<br>'.
         (string)$this->heating.'<br>'.
         (string)$this->repear.'<br>'.
         (string)$this->furniture.'<br>'.
         (string)$this->devices.'<br>'.
         (string)$this->multimedia.'<br>'.
         (string)$this->comfort.'<br>'.
         (string)$this->communication.'<br>'.
         (string)$this->infrastructure.'<br>'.
         (string)$this->landshaft.'<br>'.
         (string)$this->notation.'<br>'.

         (string)$this->lengthsToCity.'<br>'.
         (string)$this->landSquare.'<br>'.
         (string)$this->cadastralNumber.'<br>'.
         (string)$this->outHeatingWall.'<br>'.
         (string)$this->roofType.'<br>'.
         (string)$this->builtYear;
    }
}
?>