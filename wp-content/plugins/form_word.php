<?php
/**
 * Plugin Name:Example Form plugin
 */

 function example_form_plugin(){

    $content ='';
    $content .='<h2>Formulaire</h2>';

    $content .='<form method="Post" action="http://localhost/wordpress2/index.php/merci-de-votre-visite/">';

    $content .='<label for="nom">Nom<label/>';
    $content .='<input type="text" name="nom" class="form-control"  placeholder="votre-nom" /><br/><br/>';

    $content .='<label for="prenom">Prenom</label>';
    $content .='<input type="text" name="prenom" placeholder="Votre-prenom" class="form-control" /><br/><br/>';


    $content .='<label for="telephone">Telephone</label>';
    $content .='<input type="text" name="telephone" placeholder="Votre-telephone" class="form-control" /><br/><br/>';

    $content .='<label for="email">E-mail</label>';
    $content .='<input type="email" name="email" placeholder="Votre-email" class="form-control" /><br/><br/>';

    $content .='<label for="comments"> Vos-Commentaires</label>';
    $content .='<textarea name="comments" placeholder="Commentaires" class="form-control"></textarea><br/><br/>';

    $content .='<input type="submit" name="envoyer" class="btn btn-md btn-primary" value="Envoyer"/>';

    $content .='</form>';

    return $content;

 }
 add_shortcode('example_form','example_form_plugin');

 function example_capture(){
     if(isset($_POST['envoyer']))
     {
         $nom=sanitize_text_field($_POST['nom']);
         $prenom=sanitize_text_field($_POST['prenom']);
         $telephone=sanitize_text_field($_POST['telephone']);
         $email=sanitize_text_field($_POST['email']);
         $comments=sanitize_textarea_field($_POST['comments']);

         $to='abdouniangyeumbeul@gmail.com';
         $subject='Test from soumission';
         $message = ''.$nom.' - '.$prenom.' - '.$telephone.' - '.$email.' - '.$comments;

         wp_mail($to,$subject,$message);

     }
 }

 add_action('wp_head','example_capture');

?>