<?php
   $nota_1 = fgets(STDIN);
   $nota_2 = fgets(STDIN);

   $media = (($nota_1 * 3.5) + ($nota_2 * 7.5)) / 11;

   printf("MEDIA = %.5f\n", $media);
?>