<?php
interface cashFlow {
    public function getMoneyInfo();
    public function setDepositMoney($sum);
    public function setWithdrawMoney($sum);
}

class atm implements cashFlow {
    private $money = 0;
    public function getMoneyInfo() {
        echo "You have: $this->money<br>" ;
    }
    public function setDepositMoney($sum) {
        $this->money += $sum;
    }
    public function setWithdrawMoney($sum) {
        if ($this->money > $sum) {
             $this->money -= $sum;
        } else echo "I can't do it, you're poor af<br>";
    }
}

$atm = new atm;
$atm->getMoneyInfo();
$atm->setWithdrawMoney(20);
$atm->getMoneyInfo();
$atm->setDepositMoney(50);
$atm->getMoneyInfo();
$atm->setWithdrawMoney(20);
$atm->getMoneyInfo();
