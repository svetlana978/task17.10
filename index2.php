
<?php
interface VehicleInterface {
    public function goAheadOrBack();
    public function specialPossibilites();
    public function honk();
    public function turnOnWipers();
}

class Car implements VehicleInterface
{
$maxVelocity = 250;
$color = 'red';
$signal = 'Bip-bip';
public function goAheadOrBack() {}

public function specialPossibilites()
{
    driveFast() {
        //...
    }
}

public function honk(){
    echo $signal;
}

public function turnOnWipers(){
    //...
}
}

class Tank implements VehicleInterface
{
$destructiveness = 20;
$crew = 3;
$signal = 'Bup';
public function goAheadOrBack() {}

public function specialPossibilites()
{
    shoot(){
       //... 
    }
}
public function honk(){
    echo $signal;
}

public function turnOnWipers(){
    //...
}
}

class specializedMachinery implements VehicleInterface
{
$loadCapacity = 30;
$weight = 4;
$signal = 'Beep-beep-beep';
public function goAheadOrBack() {}

public function specialPossibilites()
{
    moveBucket(){
        //...
    } 
}
public function honk(){
    echo $signal;
}

public function turnOnWipers(){
    //...
}
}

function testVehicle(VehicleInterface $vehicle) {
  $vehicle->goAheadOrBack();
  $vehicle->specialPossibilites();
}