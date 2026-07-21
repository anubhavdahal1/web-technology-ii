1. Class
syntax:
class ClassName
{
    // Properties
    // Methods
}
Example:
class Students
{
    public $name;

    public function display()
    {
        echo "Welcome to PHP OOP";
    }
}

2. Object
syntax: $objname=new classname();
Example: 
$student = new Students();
$student->display();
*/
/*
$this keyword:
Example:
class introduction{
    //properties
    public $name;
    public $subject;
    // methods 
 public function greet(){
    echo "Hello guys, I am $this->name and i will be teaching $this->subject";
 }
}

$obj=new introduction();
$obj->name="Anubhav Daahal";
$obj->subject="Web Technology";
$obj->greet();

$obj2= new introduction();
$obj2->name="Jiwan Dhamala";
$obj2->subject="Account";
// $obj2->greet();
