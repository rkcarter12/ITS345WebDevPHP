<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Module 8 Discussion Post</title>
</head>
    <body>
    <?php
    class MOD8_DP_SalesOrder {
        private $createDate;
        private $orderType = array('Quote','Cash','Credit');
        private $amount;
        
       public function getDate() {
           $this->date = new DateTime('today'); 
           return $this->date->format('D,&\nb\sp;M&\nb\sp;jS Y');
        }
        
        public function setType($orderType) {
            $this->type = ($orderType);
        }
        public function getType() {
            return $this->type;
        }
        
        public function setAmount($amount) {
            $this->total = $amount;
        }
        public function getAmount() {
            return $this->total;
        }
        
    }
    
    $salesOrder1 = new MOD8_DP_SalesOrder();
    $salesOrder1->setAmount(1200.74);
    $salesOrder1->setType('Cash');
    $saleDate = $salesOrder1->getDate();
            
    echo "<p>On ".$saleDate." a ".$salesOrder1->getType()." sales order was placed in the amount of $".$salesOrder1->getAmount().".<p>";
    
	?>
    </body>
</html>