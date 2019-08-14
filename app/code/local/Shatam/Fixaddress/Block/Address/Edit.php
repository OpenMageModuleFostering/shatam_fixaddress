<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Shatam_Fixaddress_Block_Address_Edit extends Mage_Customer_Block_Address_Edit
{
 public function getSelfName() {
     $state=$this->escapeHtml($this->getAddress()->getRegion());
     return $state;
    }  
     
 }