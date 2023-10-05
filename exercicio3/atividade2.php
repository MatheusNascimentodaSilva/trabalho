<?php
   
    if ($_GET["calcular"] 
    {
      
        $altura = $_GET ["altura"];
        $sexo = $_GET["sexo"];

      
        if ($sexo === "M") 
        {
            $peso_ideal = (72.7 * $altura) - 58;

        } 
        elseif ($sexo === "F")
         {
            $peso_ideal = (62.1 * $altura) - 44.7;
        }
         else
          {
            echo "<p style='color: red;'>Selecione um sexo válido.</p>";
            exit(); 
        }
        echo "<p>O peso ideal para uma altura de $altura metros é aproximadamente: $peso_ideal kg.</p>";
    }
    ?>