<?php

require("abstract.databoundobject.php");
require("class.pdofactory.php");

class Address extends DataBoundObject {

    protected $Address;
    protected $Address2;
    protected $District;
    protected $CityID;
    protected $PostalCode;
    protected $Phone;
    protected $LastUpdate;

    protected function DefineTableName() {
        return("address");
    }

    protected function DefineRelationMap() {
        return(array(
            "id" => "ID",
            "address" => "Address",
            "address2" => "Address2",
            "district" => "District",
            "city_id" => "CityID",
            "postal_code" => "PostalCode",
            "phone" => "Phone",
            "last_update" => "LastUpdate"));
    }
}

    $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
    $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
    $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $objAddress = new Address($objPDO, 7);
    // $objAddress->setAddress('Calle Principal'); 
    // $objAddress->setAddress2('Piso 2'); 
    // $objAddress->setDistrict('Distrito Central'); 
    // $objAddress->setCityID(1);
    // $objAddress->setPostalCode('28001'); 
    // $objAddress->setPhone('123456789'); 
    // $objAddress->setLastUpdate(date("Y-m-d H:i:s")); 
    
    // print "Dirección principal es " . $objAddress->getAddress() . "<br />";
    // print "Dirección secundaria es " . $objAddress->getAddress2() . "<br />";
    // print "Distrito es " . $objAddress->getDistrict() . "<br />";
    // print "ID de ciudad es " . $objAddress->getCityID() . "<br />";
    // print "Código postal es " . $objAddress->getPostalCode() . "<br />";
    // print "Teléfono es " . $objAddress->getPhone() . "<br />";
    // print "Última actualización es " . $objAddress->getLastUpdate() . "<br />";
    
    // print "Guardando...<br />";

    // $objAddress->Save();

    // $id = $objAddress->getID();
    // print "ID in database is " . $id . "<br />";
    
    // print "Cambiando datos... <br/>";

    // print "<br />";

    // $objAddress->setAddress('Calle Ave del Paraiso');
    // $objAddress->setAddress2('Piso 8');
    // $objAddress->setDistrict('Distrito Inferior');
    // $objAddress->setCityID(1);
    // $objAddress->setPostalCode('41005');
    // $objAddress->setPhone('955789012');
    // $objAddress->setLastUpdate(date("Y-m-d H:i:s"));

    // print "Guardando...<br />";
    // $objAddress->Save();

    // print "<br />";
    // print "<br />";

    // print "Dirección principal es " . $objAddress->getAddress() . "<br />";
    // print "Dirección secundaria es " . $objAddress->getAddress2() . "<br />";
    // print "Distrito es " . $objAddress->getDistrict() . "<br />";
    // print "ID de ciudad es " . $objAddress->getCityID() . "<br />";
    // print "Código postal es " . $objAddress->getPostalCode() . "<br />";
    // print "Teléfono es " . $objAddress->getPhone() . "<br />";
    // print "Última actualización es " . $objAddress->getLastUpdate() . "<br />";
    

    $objAddress->MarkForDeletion();
    unset($objAddress);

?>