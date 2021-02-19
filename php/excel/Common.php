<?php
/**
 * Created by PhpStorm.
 * User: kc
 * Date: 11/29/2018
 * Time: 7:50 PM
 */

class Common
{
  public function uploadData($connection,$name,$contact,$email,$yup)
  {
      $mainQuery = "INSERT INTO notes SET etu='$name',dbase='$contact',webdev='$email',glpi='$yup'";
      $result1 = $connection->query($mainQuery) or die("Error in main Query".$connection->error);
      return $result1;
  }
}
?>