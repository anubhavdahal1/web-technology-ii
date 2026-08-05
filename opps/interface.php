<?php
// Interfaces
 
// syntax:
interface InterfaceName
{
    public function method1();
    public function method2();
}

class ClassName implements InterfaceName
{
    public function method1()
    {
        // Implementation
    }

    public function method2()
    {
        // Implementation
    }
}



// Example:


interface Printer
{
    public function printDocument();
}

interface Scanner
{
    public function scanDocument();
}

class MultiFunctionPrinter implements Printer, Scanner
{
    public function printDocument()
    {
        echo "Printing Document...<br>";
    }

    public function scanDocument()
    {
        echo "Scanning Document...";
    }
}

$obj = new MultiFunctionPrinter();

$obj->printDocument();
$obj->scanDocument();

?>