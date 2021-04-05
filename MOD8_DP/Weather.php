<?php

// Setting up the Class

class Weather {
    
    // Defining the properties for the class
    private  $dt;
    private  $temp = 54;
    private  $forecast = ["Sun", "Rain", "Snow"];
    
    // Creating a public function to return the value of the temp property
    public function get_temp() {
        return $this->temp;
    }
    
    // Creating a public function to return the value of the forecast property
    public function get_forecast() {
        return $this->forecast[1];
    }
    
    // Create a public function to return the value of the DateTime class object
    public function get_date() {
        $this->dt = new DateTime('today');
        return $this->dt->format('m-d-Y');
        
    }
    
}

// Creating a new instance of weather class as an object and displaying the results of the public functions.
$weather = new Weather();
echo "Today's date is -- {$weather->get_date()} <br>";
echo "The forecast calls for -- {$weather->get_forecast()} <br>";
echo "Today's high will be {$weather->get_temp()} degrees";

?>