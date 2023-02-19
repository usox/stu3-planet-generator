<?php

use Stu\PlanetGenerator\PlanetGenerator;

$data = $odata = $udata = $phase = $uphase = $ophase = [];

$data[PlanetGenerator::COLGEN_DETAILS] = "Klasse K - Basisklasse Ödland";

$bonusdata = array(PlanetGenerator::BONUS_AENERGY, PlanetGenerator::BONUS_HABITAT, PlanetGenerator::BONUS_HABITAT);

$data[PlanetGenerator::CONFIG_COLGEN_SIZEW] = 10;
$data[PlanetGenerator::CONFIG_COLGEN_SIZEH] = 6;

$hasGround = 1;
$hasOrbit = 1;

$data[PlanetGenerator::COLGEN_BASEFIELD] = 601;
$odata[PlanetGenerator::COLGEN_BASEFIELD] = 900;
$udata[PlanetGenerator::COLGEN_BASEFIELD] = 803;

$phases = 0;
$ophases = 0;
$uphases = 0;


// config

$eisn = rand(3, 4);
$eiss = ($eisn == 4 ? 3 : rand(3, 4));

$berge = rand(12, 14);
$desert = rand(8, 12);
$felsf = rand(6, 8);


$ufels = rand(4, 7);
$ueis = 5;


// Surface Phases

$phase[$phases][PlanetGenerator::COLGEN_MODE] = "polar seeding north";
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = "Polkappe N";
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $eisn;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = array("0" => "601");
$phase[$phases][PlanetGenerator::COLGEN_TO] = array("0" => "501");
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = "polar seeding south";
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = "Polkappe S";
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $eiss;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = array("0" => "601");
$phase[$phases][PlanetGenerator::COLGEN_TO] = array("0" => "501");
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = "equatorial";
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = "Wüsten";
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $desert;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = array("0" => "601");
$phase[$phases][PlanetGenerator::COLGEN_TO] = array("0" => "402");
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = array("0" => "201");
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 25;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = "normal";
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = "Berge";
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $berge;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = array("0" => "601");
$phase[$phases][PlanetGenerator::COLGEN_TO] = array("0" => "702");
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 20;
$phases++;

$phase[$phases][PlanetGenerator::COLGEN_MODE] = "nocluster";
$phase[$phases][PlanetGenerator::COLGEN_DESCRIPTION] = "Felsformation";
$phase[$phases][PlanetGenerator::COLGEN_NUM] = $felsf;
$phase[$phases][PlanetGenerator::COLGEN_FROM] = array("0" => "601");
$phase[$phases][PlanetGenerator::COLGEN_TO] = array("0" => "611");
$phase[$phases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENT] = array();
$phase[$phases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$phase[$phases][PlanetGenerator::COLGEN_FRAGMENTATION] = 0;
$phases++;


$ophase = [];
// Orbit Phases
/*
$ophase[$ophases][PlanetGenerator::COLGEN_MODE] = "lower orbit";
$ophase[$ophases][PlanetGenerator::COLGEN_DESCRIPTION] = "Lower Orbit";
$ophase[$ophases][PlanetGenerator::COLGEN_NUM] = 10;
$ophase[$ophases][PlanetGenerator::COLGEN_FROM] = array("0" => "100");
$ophase[$ophases][PlanetGenerator::COLGEN_TO]   = array("0" => "120");
$ophase[$ophases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$ophase[$ophases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$ophase[$ophases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$ophase[$ophases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$ophases++;
*/

// Underground Phases

$uphase[$uphases][PlanetGenerator::COLGEN_MODE] = "normal";
$uphase[$uphases][PlanetGenerator::COLGEN_DESCRIPTION] = "Untergrundeis";
$uphase[$uphases][PlanetGenerator::COLGEN_NUM] = $ueis;
$uphase[$uphases][PlanetGenerator::COLGEN_FROM] = array("0" => "803");
$uphase[$uphases][PlanetGenerator::COLGEN_TO] = array("0" => "821");
$uphase[$uphases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_FRAGMENTATION] = 2;
$uphases++;

$uphase[$uphases][PlanetGenerator::COLGEN_MODE] = "normal";
$uphase[$uphases][PlanetGenerator::COLGEN_DESCRIPTION] = "Untergrundfels";
$uphase[$uphases][PlanetGenerator::COLGEN_NUM] = $ufels;
$uphase[$uphases][PlanetGenerator::COLGEN_FROM] = array("0" => "803");
$uphase[$uphases][PlanetGenerator::COLGEN_TO] = array("0" => "813");
$uphase[$uphases][PlanetGenerator::COLGEN_ADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_NOADJACENTLIMIT] = 0;
$uphase[$uphases][PlanetGenerator::COLGEN_FRAGMENTATION] = 10;
$uphases++;

return [
    $odata,
    $data,
    $udata,
    $ophase,
    $phase,
    $uphase,
    $hasGround, $hasOrbit
];
