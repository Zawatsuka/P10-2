<div class="container">
<img src="assets\img\download (6).gif" width="1000" class="img-fluid text-center"  alt="Merci d'avoir participé !">
 <div class="container text-center text-light p-5">
 <h5 class="ml-4 size-text ">Bonjour <?= $firstname ?? 'Vous n\'avez rien mis'?>  <?= $name ?? 'Vous n\'avez rien mis'?></h5>
 <p class="ml-4 size-text">Recapitulatif de votre formulaire...</p>
 <ul>
        <li> Vous avez <?=$age ?? 'Vous n\'avez rien mis'?> ans</li>
        <li><?php 
                if($gender == "Homme"){
                    echo "vous etes un ".$gender;
                } else if($gender == "Femme"){
                    echo "vous etes une ".$gender;
                } else if($gender == "Autre") {
                    echo "vous avez mis ".$gender;
                } else{
                    echo "vous n'avez rien mis";
                }
            ?>
        </li>
        <li>Et vous venez de la société :<?=$enterprise ?? 'Vous n\'avez rien mis';?> </li>
 </ul>
</div>
</div>