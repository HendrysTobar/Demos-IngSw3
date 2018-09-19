<?php
    //
    if(isset($_GET['edad']))
    {
        //
        $e = $_GET['edad'];
        //
        if($e >= 18)
        {
            //
            echo "Puedes Beber!";
        }
        else
        {
            //
            echo "Ni lo pienses, eso es malo";
        }
            
    }
    //
    else
    {
        //
        echo "Edad no especificada";
    }
    //
    echo "<br/>";

    //                                             //
    echo "Información obtenida del servidor el " . date("d/m/Y h:i:sa");
    
?>
