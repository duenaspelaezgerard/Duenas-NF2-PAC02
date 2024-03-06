<?php

require("abstract.databoundobject.php");
require("class.pdofactory.php");


class Staff extends DataBoundObject {

        protected $FirstName;
        protected $LastName;
        protected $AddressId;
        protected $Email;
        protected $StoreId;

        protected $Active;
        protected $Username;      
        protected $Password;
        protected $LastUpdate;
        protected $Picture;

        protected function DefineTableName() {
                return("staff");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "first_name" => "FirstName",
                        "last_name" => "LastName",
                        "address_id" => "AddressId",
                        "email" => "Email",
                        "store_id" => "StoreId",
                        "active" => "Active",
                        "username" => "Username",
                        "password" => "Password",
                        "last_update" => "LastUpdate",
                        "picture" => "Picture",));
        }
}

        $strDSN = "pgsql:dbname=usuaris;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $objStaff = new Staff($objPDO,1 );
        $objStaff->setFirstName('Adrian');
        $objStaff->setLastName('Sanchez');
        $objStaff->setAddressId(456);
        $objStaff->setEmail('adrian.sanchez@example.com');
        $objStaff->setStoreId(2);
        $objStaff->setActive(true);
        $objStaff->setUsername('adrian');
        $objStaff->setPassword('password123');
        $objStaff->setLastUpdate(date("Y-m-d H:i:s"));
        $objStaff->setPicture('adrian_profile.jpg');
        

        print "Nombre: " . $objStaff->getFirstName() . "<br />";
        print "Apellido: " . $objStaff->getLastName() . "<br />";
        print "ID de dirección: " . $objStaff->getAddressId() . "<br />";
        print "Email: " . $objStaff->getEmail() . "<br />";
        print "ID de tienda: " . $objStaff->getStoreId() . "<br />";
        print "Activo: " . ($objStaff->getActive() ? "Sí" : "No") . "<br />";
        print "Nombre de usuario: " . $objStaff->getUsername() . "<br />";
        print "Contraseña: " . $objStaff->getPassword() . "<br />";
        print "Última actualización: " . $objStaff->getLastUpdate() . "<br />";
        print "Imagen: " . $objStaff->getPicture() . "<br />";

        print "Guardando...<br />";

        $objStaff->Save();

        $id = $objStaff->getID();
        print "ID in database is " . $id . "<br />";

        print "Cambiando datos... <br/>";

        print "<br />";

        $objStaff->setFirstName('Aaron');
        $objStaff->setLastName('Vidana');
        $objStaff->setAddressId(987);
        $objStaff->setEmail('aaron.vidana@example.com');
        $objStaff->setStoreId(4);
        $objStaff->setActive(true);
        $objStaff->setUsername('aaronv');
        $objStaff->setPassword('mypassword321');
        $objStaff->setLastUpdate(date("Y-m-d H:i:s"));
        $objStaff->setPicture('aaron_profile.jpg');

        print "Guardando...<br />";
        $objStaff->Save();
        print "<br />";
        print "<br />";
        print "Nombre: " . $objStaff->getFirstName() . "<br />";
        print "Apellido: " . $objStaff->getLastName() . "<br />";
        print "ID de dirección: " . $objStaff->getAddressId() . "<br />";
        print "Email: " . $objStaff->getEmail() . "<br />";
        print "ID de tienda: " . $objStaff->getStoreId() . "<br />";
        print "Activo: " . ($objStaff->getActive() ? "Sí" : "No") . "<br />";
        print "Nombre de usuario: " . $objStaff->getUsername() . "<br />";
        print "Contraseña: " . $objStaff->getPassword() . "<br />";
        print "Última actualización: " . $objStaff->getLastUpdate() . "<br />";
        print "Imagen: " . $objStaff->getPicture() . "<br />";

        $objStaff->MarkForDeletion();
        unset($objStaff);



?>
