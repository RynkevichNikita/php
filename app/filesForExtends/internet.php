<?php
class Internet {
    protected int $speed = 10;
    protected int $traffic = 10;
    protected int $costMonthly = 10;
    protected const COST_ABOVE_TRAFFIC = 1;

    public function costAboveTraffic()
    {
        $this->costMonthly = $this->traffic <= 0 ? $this->costMonthly + self::COST_ABOVE_TRAFFIC : $this->costMonthly;
    }

}

trait SlowDown {
    public function slowing()
    {
        $this->speed = $this->traffic > 0 ? $this->speed : 2; 
    }
    public function noTraffic($minusTraffic) {
        $this->traffic -= $minusTraffic;
    }
}

trait AdditionalTraffic {
    public function addingTraffic()
    {
        $this->traffic += 20;
    }
}

class InternetConstructor extends Internet {
    use SlowDown, AdditionalTraffic;
    public function __construct($speed, $traffic, $costMonthly)
    {
        $this->speed *= $speed;
        $this->traffic *= $traffic;
        $this->costMonthly *= $costMonthly;
    }
    public function getRateInfo()
    {
        echo "Your speed:$this->speed<br>Remaining traffic:$this->traffic<br>Monthly cost:$this->costMonthly<br>";
    }
}

$cheap = new InternetConstructor(1, 1, 2);
$standard = new InternetConstructor(5, 10, 4);
$ultra = new InternetConstructor(10, 20, 8);

// $cheap->getRateInfo();
// $cheap->addingTraffic();
// $cheap->getRateInfo();

// $standard->getRateInfo();
// $standard->addingTraffic();
// $standard->getRateInfo();

// $ultra->getRateInfo();
// $ultra->addingTraffic();
$ultra->getRateInfo();
$ultra->noTraffic(500);
$ultra->slowing();
$ultra->costAboveTraffic();
$ultra->getRateInfo();