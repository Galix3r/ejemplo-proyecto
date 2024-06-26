<?php
class mysqlcon
{
    public function conex()
    {
        $enlace  = mysqli_connect("localhost","root","","form");
        return $enlace;
    }
}
?>