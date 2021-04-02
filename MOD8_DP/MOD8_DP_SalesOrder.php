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
       
       //sets the current date with formatting 
       public function getDate() {
           $this->date = new DateTime('today'); 
           return $this->date->format('D,&\nb\sp;M&\nb\sp;jS Y');
        }
       
        //sets the type by updating the private variable via the setter for Order Type
        public function setType($orderType) {
            $this->type = ($orderType);
        }
        //retrieves the Order Type
        public function getType() {
            return $this->type;
        }
        
        //sets the amount by updating the private variable via the setter for Amount
        public function setAmount($amount) {
            $this->total = $amount;
        }
        //retrieves the Amount
        public function getAmount() {
            return $this->total;
        }
        
    }
    
    //Instantiate a new object from the class, set the amount and type
    $salesOrder1 = new MOD8_DP_SalesOrder();
    $salesOrder1->setAmount(1200.74);
    $salesOrder1->setType('Cash');
    
    //gets the date, sales order type and amount base on the object created and displays them as part of the output
    echo "<p>On ".$salesOrder1->getDate()." a ".$salesOrder1->getType()." sales order was placed in the amount of $".$salesOrder1->getAmount().".<p>";
    
	?>
    </body>
</html>