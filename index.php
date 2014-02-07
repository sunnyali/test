<?php
interface help{
    function display();

}
class Person{
    private $last, $first, $dob, $langpref ;
    function __construct($last="", $first="", $dob="", $langpref="en") // constructor
    {
        echo "person created<br/>";
        $this->last=$last;
        $this->first=$first;
        $this->dob=$dob;
        $this->langpref=$langpref;

    }
    function display()
    {
        echo $this->last, " " ,$this->first, " " , $this->dob, " " , $this->langpref , "<br/>";
    }

    function gret()
    {
        if($this->langpref=="en")
        {
            echo "heloooo<br/><br/>";


        }
        else if($this->langpref=="sp")
        {
            echo "olaaaaa";
        }
    }
    function __destruct(){echo "gud bye","<br/>" ;}
}

class Emp extends Person  {
    private $salary;
    public static $company="OAB tech";// if we decleare a variable static we dont can't intaince

    const minwage=6.0; // contant value not change and not intlize with dolor sing

    function getminwage()
    {
        return self ::minwage;	// self means class its self
    }

    function __construct($l, $f, $d, $lp, $sal="40")
    {
        parent ::__construct($l, $f, $d, $lp); // parent constructor calling
        $this -> salary=$sal;
        echo "Emp created<br/>";
    }

    function display()// for overriding
    {
        parent ::display();// parent display calling
        echo $this->salary ,"<br/>";
    }

}




$me=new Person("owais","ali"); // object
$me->display(); // arrow sing for call method of class after creating obj
$me->gret();
$you=new Emp("suny","ali","","en","500000");
$you->display();
echo EMP::$company; // caling company
//echo "<br/> Min wage=" , Emp::getminwage(), "<br/>";
?>
