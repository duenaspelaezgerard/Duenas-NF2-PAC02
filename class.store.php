<?php

require("abstract.databoundobject.php");
require("class.pdofactory.php");

class Store extends DataBoundObject {

    protected $ManagerStaffId;
    protected $AddressId;
    protected $LastUpdate;

    protected function DefineTableName() {
        return("store");
    }

    protected function DefineRelationMap() {
        return(array(
            "id" => "ID",
            "manager_staff_id" => "ManagerStaffId",
            "address_id" => "AddressId",
            "last_update" => "LastUpdate"));
    }
}

    $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
    $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $objStore = new Store($objPDO, 7);
    // $objStore->setManagerStaffId(123); 
    // $objStore->setAddressId(456); 
    // $objStore->setLastUpdate(date("Y-m-d H:i:s")); 

    // print "Manager ID es " . $objStore->getManagerStaffId() . "<br />";
    // print "Adress ID es " . $objStore->getAddressId() . "<br />";
    // print "Last Update es " . $objStore->getLastUpdate() . "<br />";

    // print "Guardando...<br />";

    // $objStore->Save();

    // $id = $objStore->getID();
    // print "ID in database is " . $id . "<br />";

    // print "Cambiando datos... Manager ID 123 es Manager ID es 2, 
    //     Adress ID 456 es Adress ID 4 y Last Update es hoy y sera 2023-10-10 20:01:40  <br/>";

    // $objStore->setManagerStaffId(2); 
    // $objStore->setAddressId(4); 
    // $objStore->setLastUpdate("2023-10-10 20:01:40"); 
    // print "Guardando...<br />";
    // $objStore->Save();

    // print "Manager ID es " . $objStore->getManagerStaffId() . "<br />";
    // print "Adress ID es " . $objStore->getAddressId() . "<br />";
    // print "Last Update es " . $objStore->getLastUpdate() . "<br />";

    $objStore->MarkForDeletion();
    unset($objStore);


?>