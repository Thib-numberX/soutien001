<?php

include "inc/header.php"

?>

<main>
    <section id="section--form" class="section">
        <div>
            <section id="section--form__data">
                <?php

                if (
                    !empty($_POST['lastname']) AND
                    !empty($_POST['firstname']) AND
                    !empty($_POST['email'])AND 
                    !empty($_POST['checkbox'])
                    ){

                    $nom    = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
                    $prenom = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
                    $mail   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
                    $checkbox = filter_input(INPUT_POST, 'checkbox', FILTER_SANITIZE_STRING);
                     

                    echo "<p class=\"form__data\">".$prenom . " " . $nom . ", merci de votre inscription.</p>" ;
                    echo "<p class=\"form__data\">Vous recevrez nos e-mail à votre adresse " . $mail . ".</p>" ; 
                    echo "<p class=\"form__data\">Vous avez bien coché la case</p>" ;

                }elseif(!empty($_POST['lastname']) AND
                !empty($_POST['firstname']) AND
                !empty($_POST['email'])AND 
                empty($_POST['checkbox'])){
                    
                    echo "<p class=\"form__data\">Désolé vous n'avez pas coché la case</p>" ;
                
                }elseif(empty($_POST['lastname']) AND
                !empty($_POST['firstname']) AND
                !empty($_POST['email'])AND 
                !empty($_POST['checkbox'])){
                    
                    echo "<p class=\"form__data\">Désolé vous n'avez pas renseigné votre <span class=\"wrong\">NOM</span></p>" ;
                
                }elseif(!empty($_POST['lastname']) AND
                empty($_POST['firstname']) AND
                !empty($_POST['email'])AND 
                !empty($_POST['checkbox'])){
                    
                    echo "<p class=\"form__data\">Désolé vous n'avez pas renseigné votre <span class=\"wrong\">PRENOM</span></p>" ;
                
                }elseif(!empty($_POST['lastname']) AND
                !empty($_POST['firstname']) AND
                empty($_POST['email'])AND 
                !empty($_POST['checkbox'])){
                    
                    echo "<p class=\"form__data\">Désolé vous n'avez pas renseigné votre <span class=\"wrong\">EMAIL</span></p>" ;
                
                }else{
                    echo "<p class=\"form__data\">Désolé vous n'avez pas rempli tous les champs</p>" ;
                }
                ?>
            </section>
        </div>
        </section>
        <section id="section--para" class="section" id="section--para">
            <p id="section--para__message">
                Inscris toi à notre newsletter. Promis, pas plus d'une sollicitation par jour sur des sujets inintéressants. 
            </p>
        </section>
</main>

<?php

include "inc/footer.php"

?>