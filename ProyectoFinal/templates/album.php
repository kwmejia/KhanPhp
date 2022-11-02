<?php  require 'config/database.php';

$db= conectarDB();
$resultado = listar();
$contador = 0;
?>

<?php while($album = mysqli_fetch_assoc($resultado)): 
$fechaComoEntero = strtotime($album['alb_date']);    

?>

<div class="col-12 col-md-4 my-4 d-flex justify-content-center">
    <div class="album p-0">
        <div class="m-0 p-0 d-flex justify-content-center h-75 cont-img-album">
            <img src="imagenes/<?php echo $album['alb_imagen'];?>" alt="Album" class="img-fluid img-album">
            
            <h2 class="titulo-de-album"><?php echo $album['alb_titulo'];?></h2>
            <a href="<?php echo $album['alb_descripcion'];?>" target="_blanck" class="escuchar-album"><img src="img/icons8_plus_math_48px.png"></a>

        </div>
        <div class="discos row d-flex justify-content-center">
            <div class="col-4 d-flex flex-column justify-content-center text-center py-3">
                <div>
                    <img src="img/discos.png" width="48px" height="48px" class="text-center ">
                </div>
                <h4 class="text-center"><?php echo $album['alb_canciones'] ;?></h4>
            </div>

            <div class="col-4 d-flex flex-column justify-content-center text-center py-3">
                <div>
                    <img src="img/calendario.png" width="48px" height="48px" class="text-center ">
                </div>
                <h4 class="text-center"><?php echo date('Y',$fechaComoEntero);?></h4>
            </div>
        </div>

    </div>
</div>

<?php 

if ($contador<2) {
    $contador++;
    
}else{
    break;

}
endwhile 
?>