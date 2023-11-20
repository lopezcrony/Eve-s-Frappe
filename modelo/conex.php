<?php

    class ConnectionDataBase{

            static public function classConection(){
                
                $link = new PDO("mysql:host=localhost;name=frappe", "root", "3307");
                $link->exec("set names utf8");
                return $link;

            }

    }