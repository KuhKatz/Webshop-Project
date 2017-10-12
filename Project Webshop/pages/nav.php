<?php
$navs = array(
"mainmenu" => "Main Menu",
"nes" => "NES",
"snes" => "SNES",
"n64" => "N64",
"virtualboy" => "Virtual Boy",
"gamecube" => "GameCube",
"wii" => "Wii",
"wiiu" => "Wii U",
"switch" => "Switch",
"gameboy" => "Game Boy",
"gameboycolor" => "Game Boy Color",
"ds" => "DS",
"3ds" => "DS / 3DS"
);

$page = isset($page) ? $page : "";
  ?>


<nav>
<?php
foreach ($navs as $nav=>$name) {$class = $page == $nav ? "active" : "inactive";

echo "<a class=\"inactive\" href=nav.php\">$name</a>\n";
}
?>
</nav>
