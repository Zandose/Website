<?php

$xml = '<?xml version="1.0" encoding="utf-8"?>
<PlacedObjects Version="27">
    <ObjectDoodad Id="706753173" Position="119.9636,159.779,27.9992" Rotation="3.1408" Scale="1,1,1" Type="Aiur_City_Archway_Large_Abandoned" TintColor="255,255,255 3.000000" Pitch="3.1413">
        <Flag Index="HeightOffset" Value="1"/>
        <Flag Index="HeightAbsolute" Value="1"/>
        <Flag Index="ForcePlacement" Value="1"/>
    </ObjectDoodad>
</PlacedObjects>

';
$count = 0;
$dom = new DOMDocument();
$dom->loadXML($xml);
foreach ($dom->getElementsByTagName('ObjectDoodad') as $od) {
    echo "\n";
    $count = $count + 1;
    foreach ($od->attributes as $a) {
        
        if ($a->nodeName == "Position") {
            echo "gv_gSMD.lv_".$a->nodeName."["."$count"."]=libNtve_gf_PointFromXYZ(".$a->nodeValue.");\n";
        }
        elseif ($a->nodeName == "Scale") {
            echo "gv_gSMD.lv_".$a->nodeName."["."$count"."]=libNtve_gf_PointFromXYZ(".$a->nodeValue.");\n";
        }
        elseif ($a->nodeName == "Type") {
            echo "gv_gSMD.lv_".$a->nodeName."["."$count"."]=\"".$a->nodeValue."\";\n";
        }
        elseif ($a->nodeName == "TintColor") {
            echo "gf_SMDColor(\"$count,".$a->nodeValue."\");\n";
        }
        elseif ($a->nodeName == "Rotation") {
            echo "gv_gSMD.lv_".$a->nodeName."["."$count"."]=".rad2deg($a->nodeValue).";\n";
        }
        elseif ($a->nodeName == "Pitch") {
            echo "gv_gSMD.lv_".$a->nodeName."["."$count"."]=".rad2deg($a->nodeValue).";\n";
        }
        elseif ($a->nodeName == "Roll") {
            echo "gv_gSMD.lv_".$a->nodeName."["."$count"."]=".rad2deg($a->nodeValue).";\n";
        }
        else {
            echo "gv_gSMD.lv_".$a->nodeName."["."$count"."]=".$a->nodeValue.";\n";
        }
    }
    echo "\n";
}
