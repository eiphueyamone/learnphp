<?php

interface Developer
{
    public function input();
   
}
class CsharpDev implements Developer
{
    public function input()
    {
        echo "This is C# code";
    }
}
class PHPDev implements Developer
{
    public function input()
    {
        echo "This is PHP code";
    }
}
class JSDev implements Developer
{
    public function input()
    {
        echo "This is JS code";
    }
}
$cs=new CsharpDev();
$cs->input();
echo "<pre/>";

$php=new PhpDev();
$php->input();
echo "<pre/>";

$js=new JsDev();
$js->input();
echo "<pre/>";


?>