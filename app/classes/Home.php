<?php


namespace App\classes;


class Home extends Database
{
    public $menuItems = [];
    public $heroBanner = [];


    public function __construct()
    {
        parent::__construct();
        $this->menuItem();
        $this->displayHero();
    }

    public function index()
    {
        header("Location: action.php?pages=home");
    }

    public function menuItem()
    {
        $this-> menuItems = [
            ["name" => "Home", "route" => "action.php?pages=home"],
            ["name" => "Hero", "route" => "action.php?pages=hero"],
            ["name" => "About", "route" => "action.php?pages=about"],
        ];
    }

    public function displayHero()
    {
        $myQuery = "SELECT * FROM heros WHERE id = 1";
        $result  = mysqli_query($this->connection, $myQuery);
        $array   = mysqli_fetch_assoc($result);
        $this->heroBanner = $array;
    }

}