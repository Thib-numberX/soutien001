<?php

include "inc/header.php"

?>

<main>
    <section id="section--form" class="section">
        <div>
            <form action="receptionForm.php" method="post">
                <label for="prenom">Prénom</label>
                <input type="text" name="firstname" id="prenom" placeholder="Votre prénom">
                
                <label for="nom">Nom</label>
                <input type="text" name="lastname" id="nom" placeholder="Votre nom"> 
                
                <label for="email">Votre e-mail</label>
                <input type="email"name="email" id="email" placeholder="Votre e-mail">

                <input type="checkbox"name="checkbox" id="checkbox">
                <label for="checkbox">En cochant cette case, vous acceptez de recevoir nos e-mails d'incitation à l'achat (vas y rends nous riche!)</label>

                <input type="submit"name="bouton" id="button">

            </form>
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