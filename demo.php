<?php 
$name= "Raquel";
$age= 23;


define('LOGO_URL', 'https://imgs.search.brave.com/1bmxzs8_KwRyKhFN24QTKVHedjg6fksvdeHJN6j86Lc/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMuc3RpY2twbmcu/Y29tL2ltYWdlcy81/ODQ4MTc5MWNlZjEw/MTRjMGI1ZTQ5OTQu/cG5n');

$output ="Hola $name, con una edad de $age.";
$outputAge = match (true){
    $age <= 2  => "Eres un bebe, $name",
    $age <= 10 => "Eres un niño, $name",
    $age <= 18 => "Eres un adolecente, $name",
    $age <= 30 => "Eres un adulto joven, $name",
    default    => "Eres un adulto, $name",
};

$bestLanguages=["PHP", "Javascripth", "Java"];
$bestLanguages[] ="C++";

?>
<ul>
    <?php foreach ($bestLanguages as $key=> $language) :?>
        
        <li><?= $key. " " .$language?></li>
    
    <?php endforeach;?>

</ul>

<h2><?= $outputAge?></h2>

<img src="<?= LOGO_URL ?>" alt="php-logo" width=200>
<h1>
    <?= $output ?>
</h1>
