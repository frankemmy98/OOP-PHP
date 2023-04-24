<?php

// Report simple running erorrs
error_reporting(E_ALL);

// Make sure they are on screen
ini_set('display_errors', 1);

// Do some errors

// Notice
$nope = 0;
var_dump(5 + $nope);

// Warning
$wrestler = new stdClass;
$wrestler->name = 'Hulk Hogan';

// Strict
class Foo
{
        public static function bar()
        {
        }

        public static function nope()
        {
        }
}
Foo::bar();

// Error

Foo::nope();

echo "We'll never get here";
?>

<!-- // require './vendor/autoload.php';

// Then just reference code in your application

// use League\Flysystem\Filesystem;
// use League\Flysystem\Adapter\Zip as Adapter;

// $filesystem = new Filesystem(new Adapter(__DIR__.'/archive.zip'));

// ?> -->

<!-- // Dont worry about this bit

// use HTTP\Client;
// use Twitter\Client as TwitterClient;

// ini_set('display_errors', 1);


// include './bootstrap.php';

// var_dump(new Client);
// var_dump(new TwitterClient);

// ?> -->

<!-- // phpinfo();
// exit;

// mb_internal_encoding('UTF-8');
// mb_http_output('UTF-8');

// $string = 'Rychlá hnėdă liška zakopl přes plot.';

// header('Content-type: text/html; charset=utf-8');
?> -->

<!-- <!doctype html>

<head>
    <title>UTF-8 Test</title>
</head>

<body>
    <p>Upper: <?= mb_strtoupper($string) ?></p>
    <p>Count: <?= mb_strlen($string) ?></p>
</body>

</html> -->


<!-- // Understanding Time Zones
// $utcDateTime = new DateTime('2023-03-05 16:37', new DateTimeZone('UTC'));

// $localDateTime = clone $utcDateTime;

// $localDateTime->setTimeZone(new DateTimeZone('America/New_York'));

// 
?> -->

<!-- <p>The UTC date/time is: <?= $utcDateTime->format("Y-m-d H:i:s") ?></p> -->
<!-- <p>The New York date/time is: <?= $localDateTime->format("Y-m-d H:i:s") ?></p> -->




<!-- // DateTime
// $date = new DateTime('+2 weeks');

?> -->

<!-- <p>The output date is: <?php echo $date->format('m/d/Y') ?></p> -->

<!-- // DateTime Comparisons
// $dvone = new DateTime('August 1, 1972');
// $spike = new DateTime('August 13, 1970');

// // who is older?
// if ($dvone < $spike) { // echo '<p>D-vone is older than Spike</p>' ; // } else { // echo '<p>Spike is older than D-Vone</p>' ; // } // // age difference // $diff=$dvone->diff($spike);

    // echo $diff->format("<p>There is %y years, and %m months and %d days between Spike and D-Von"); -->



<!-- // Object interface
        // interface Rideable
        // {
        // public function howToRide();
        // }

        // class Skateboard implements Rideable
        // {
        // public function howToRide()
        // {
        // $steps = array();
        // $steps[] = "Balance your front foot on the board";
        // $steps[] = "Kick, then push with the other foot.";
        // $steps[] = "Don't fall down.";
        // return $steps;
        // }
        // } -->

<!-- // class Product
        // {
        // // class definitions go here!

        // // static
        // public static $manufacturer = "Bart Taylor";

        // // properties
        // public $name = 'default_name';
        // public $price = 0;
        // public $desc = 'default description';

        // // methods
        // function __construct($name, $price, $desc)
        // {
        // $this->name = $name;
        // $this->price = $price;
        // $this->desc = $desc;
        // } -->

<!-- // public function getInfo()
        // {
        // return "Product Name: " . $this->name;
        // }

        // public function getMaker()
        // {
        // return self::$manufacturer;
        // }
        // } -->

<!-- // class Soda extends Product
        // {
        // public $flavor; -->

<!-- // function __construct($name, $price, $desc, $flavor)
        // {
        // parent::__construct($name, $price, $desc);
        // $this->flavor = $flavor;
        // } -->

<!-- // public function getInfo()
        // {
        // return "Product Name: " . $this->name . ". Flavor: " . $this->flavor;
        // }
        // } -->

<!-- // $shirt = new Product("Space Juice T-shirt", 20, "Awesome Grey T-Shirt");
        // $soda = new Soda("Space Juice Soda", 2, "Grape Flavored Thirst Mutilator", "Grape"); -->

<!-- 
        // Static Methods and Properties
        // echo $shirt::$manufacturer; -->

<!-- // echo $shirt->getMaker()/; -->