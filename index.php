<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Sushi</title>   
    <style>
        @media (max-width: 600px) {
    .container {
      display: block; 
    }
    
    .column-3{
        width: 100%; 
      }
    .column-4{
        width: 100%; 
      }
    .column-5 {
      width: 100%; 
    }
  }
    </style>
</head>

<body>
<div class='column-1'>
    <h1>Sushi</h1>
    </div>
    <div class='column-2'>
    <h2>Menú</h2>
    </div>

<?php

if (file_exists('xml/carta.xml')) {
    $menu = simplexml_load_file('xml/carta.xml');
} else {
    exit('Error abriendo carta.xml.');
}
?>

<?php

echo"<div class='column-3'>";

$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['plato1'],$aux)){

        echo '<h1>'.$plato['plato1'].'</h1>'; 

    
        array_push($aux,(string)$plato['plato1']);
    }
    if($plato['plato1']=='Entrantes'){
        echo '<h2>'.$plato->title.' ....................'.$plato->precio.'</h2>';
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        if(isset($plato->caracteristicas->item['tema1'])==(string)'cacahuetes'){
            echo '<img src="img/cacahuetes.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'gluten'){
            echo '<img src="img/gluten.png" alt="">';
           
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'huevos'){
            echo '<img src="img/huevos.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'leche'){
            echo '<img src="img/leche.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'pez'){
            echo '<img src="img/pez.png"" alt="">';
           
        }
        
        echo "<br>";
        
    }

   
}

echo"</div>";


echo"<div class='column-4'>";

$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['plato2'],$aux)){

        echo '<h1>'.$plato['plato2'].'</h1>'; 

    
        array_push($aux,(string)$plato['plato2']);
    }
    if($plato['plato2']=='Caliente'){
        echo '<h2>'.$plato->title.' ....................'.$plato->precio.'</h2>';
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        if(isset($plato->caracteristicas->item['tema1'])==(string)'cacahuetes'){
            echo '<img src="img/cacahuetes.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'gluten'){
            echo '<img src="img/gluten.png" alt="">';
           
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'huevos'){
            echo '<img src="img/huevos.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'leche'){
            echo '<img src="img/leche.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'pez'){
            echo '<img src="img/pez.png"" alt="">';
           
        }
        
        echo "<br>";
    }

   
}



$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['plato3'],$aux)){

        echo '<h1>'.$plato['plato3'].'</h1>'; 

    
        array_push($aux,(string)$plato['plato3']);
    }
    if($plato['plato3']=='Uramaki'){
        echo '<h2>'.$plato->title.' ....................'.$plato->precio.'</h2>';
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        if(isset($plato->caracteristicas->item['tema1'])==(string)'cacahuetes'){
            echo '<img src="img/cacahuetes.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'gluten'){
            echo '<img src="img/gluten.png" alt="">';
           
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'huevos'){
            echo '<img src="img/huevos.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'leche'){
            echo '<img src="img/leche.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'pez'){
            echo '<img src="img/pez.png"" alt="">';
           
        }
        
        echo "<br>";
    }

   
}

echo"</div>";

echo"<div class='column-5'>";

$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['plato4'],$aux)){

        echo '<h1>'.$plato['plato4'].'</h1>'; 

    
        array_push($aux,(string)$plato['plato4']);
    }
    if($plato['plato4']=='Bebidas'){
        echo '<h2>'.$plato->title.' ....................'.$plato->precio.'</h2>';
        
        if(isset($plato->caracteristicas->item['tema1'])==(string)'cacahuetes'){
            echo '<img src="img/cacahuetes.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'gluten'){
            echo '<img src="img/gluten.png" alt="">';
           
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'huevos'){
            echo '<img src="img/huevos.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'leche'){
            echo '<img src="img/leche.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'pez'){
            echo '<img src="img/pez.png"" alt="">';
           
        }
        
        echo "<br>";
    }

   
}

$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['plato5'],$aux)){

        echo '<h1>'.$plato['plato5'].'</h1>'; 

    
        array_push($aux,(string)$plato['plato5']);
    }
    if($plato['plato5']=='Cafés'){
        echo '<h2>'.$plato->title.' ....................'.$plato->precio.'</h2>';
        
        if(isset($plato->caracteristicas->item['tema1'])==(string)'cacahuetes'){
            echo '<img src="img/cacahuetes.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema2'])==(string)'gluten'){
            echo '<img src="img/gluten.png" alt="">';
           
        }
        if(isset($plato->caracteristicas->item['tema3'])==(string)'huevos'){
            echo '<img src="img/huevos.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema4'])==(string)'leche'){
            echo '<img src="img/leche.png" alt="">';
            
        }
        if(isset($plato->caracteristicas->item['tema5'])==(string)'pez'){
            echo '<img src="img/pez.png"" alt="">';
           
        }
        
        echo "<br>";
    }

   
}




?>
</body>
</html>

