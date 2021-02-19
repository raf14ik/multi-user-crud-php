<?php
$connection = new mysqli("localhost","root","","my_db");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}
include_once  "Common.php";

if($_FILES['excelDoc']['name']) 
{
    $arrFileName = explode('.', $_FILES['excelDoc']['name']);
    if ($arrFileName[1] == 'csv') 
    {
        $handle = fopen($_FILES['excelDoc']['tmp_name'], "r");
        $count = 0;
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
        {
            $count++;
            if ($count == 1)
            {
                continue;
            }
                $name = $connection->real_escape_string($data[0]);
                $mobile = $connection->real_escape_string($data[1]);
                $email = $connection->real_escape_string($data[2]);
                $yup = $connection->real_escape_string($data[3]);

                $common = new Common();
                $SheetUpload = $common->uploadData($connection,$name,$mobile,$email,$yup);
        }
        if ($SheetUpload)
        {
            echo "<script>alert('Vos données sont importés avec succès !');window.location.href='../../addnotes.php';</script>";
        }
    }
}
?>