<?php

if ($location == '---') {
    echo "<h2>Error</h2>";
    echo "<p>Please select a valid contact reason.</p>";
}

if ($location == 'Ann Arbor, MI') {
    echo "<div id='orderStoreInfo'>
    <h2>LLG Ann Arbor</h2>
    <p>514 Hiscock St</p>
    <p>Ann Arbor, MI 48103</p>
    <p>(123) 456-7890</p>
    </div>";
}

if ($location == 'Climax, MI') {
    echo "<div id='orderStoreInfo'>
    <h2>LLG Climax</h2>
    <p>126 W. Maple St</p>
    <p>Climax, MI 49034</p>
    <p>(567) 890-1234</p>
    </div>";
}

if ($location == 'Colon, MI') {
    echo "<div id='orderStoreInfo'>
    <h2>LLG Colon</h2>
    <p>129 W. State St</p>
    <p>Colon, MI 49040</p>
    <p>(456) 789-0123</p>
    </div>";
}

if ($location == 'Flushing, MI') {
    echo "<div id='orderStoreInfo'>
    <h2>LLG Flushing</h2>
    <p>165 Boman Street</p>
    <p>Flushing, Michigan 48433</p>
    <p>(345) 678-9012</p>
    </div>";
}

if ($location == 'Mount Pleasant, MI') {
    echo "<div id='orderStoreInfo'>
    <h2>LLG Flushing</h2>
    <p>1217 S. Crapo St</p>
    <p>Mount Pleasant, MI 48858</p>
    <p>(012) 345-6789</p>
    </div>";
}

if ($location == 'Pinckney, MI') {
    echo "<div id='orderStoreInfo'>
    <h2>LLG Pinckney</h2>
    <p>4082 Patterson Lake Rd</p>
    <p>Pinckney, MI 48169</p>
    <p>(234) 567-8910</p>
    </div>";
}

if ($location == 'Setagaya-Ku, Tokyo') {
    echo "<div id='orderStoreInfo'>
    <h2>LLG Setagaya-Ku</h2>
    <p>26-3, Kamikitazawa 3-Chōme</p>
    <p>Setagaya-Ku, Tokyo Japan 156-0057</p>
    <p>(678) 901-2345</p>
    </div>";
}

// EXAMPLE HTML
/*
    <div id="orderStoreInfo">
    <h2>LLG Flushing</h2>
    <p>165 Boman Street</p>
    <p>Flushing, Michigan 48433</p>
    <p>(345) 678-9012</p>
    </div>
*/