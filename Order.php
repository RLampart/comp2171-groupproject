<?php
 require_once "Customer.php";
 class Order {

    private static $orderCount = 1;
    private $customer;
    private $orderNum;
    private $address;
    private $status;
    private $menuitems;

    function __construct($customer, $menuitemslst, $address) {  // Constructor
        $this->customer = $customer;
        $this->address = $address;
        $this->status = "Pending";
        $this->menuitems = $menuitemslst;
        //$this->orderNum = self::$orderCount;
        //self::$orderCount += 1;
    }

    function getAddress(){
        return $this->address;
    }
    
    function getStatus(){
        return $this->status;
    }

    function getCustomer(){
        return $this->customer;
    }

    function getMenuItems(){
        return $this->menuitems;
    }

    function getMenuItemNames(){
        $names = "";
        foreach($this->menuitems as $item){
            $names .=  $item[1] . " " . $item[3] . ", ";

        }
        return rtrim($names,", ");
    }

  

   /**function calculatePrice($menuitems){
        for ($i=0; $i<$menuitems.length; $i++)
            $total = menuitems[i].getPrice();
        return $total;
    }*/

    function calculatePriceb(){
        $total = 0;
        for ($i=0; $i<count($this->menuitems); $i++)
            $total += $this->menuitems[$i][2];
        return $total;
    }

  }

?>