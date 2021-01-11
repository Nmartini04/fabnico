<?php

require_once 'bdd_model.php';


$sql = "SELECT * FROM images";

$stmt = $bdd->query($sql);
$image = $stmt->fetchAll();


// <p>Déposer une image dans la zone ou cliquez puis selectionnez un fichier</p>
//     <!-- formulaire d'ajout de photo-->
//     <form class="row px-2" enctype="multipart/form-data" action="traitements/ajout_photo.php" method="post">
//         <!-- drag and drop pour l'image ou clic et selection du fichier -->
//         <p class="w-100 drag-photo">
//             <input class="w-100" type="file" id="inputImg" name="photo" style="opacity:0; position:relative;height: 8rem; z-index:1" required/>
//         </p>

//         <!-- div qui va affhicher la photo avant envoi -->
//         <p class="w-100" id="tt"></p>

//         <!-- description de l'image -->
//         <p class="col-lg-10">
//             <label for="description_image">Description de la Photo : </label>
//             <input class="w-50" type="text" name="description_photo">
//         </p>

//         <!-- validation -->
//         <p class="col-lg-2 d-flex align-items-end">
//             <input type="submit" name="upload" value="Envoyer"/>
//         </p>
//     </form>
// // drag and drop pour les images
// //détection d'un event sur l'input du formulaire
// $("#inputImg").on("change", function(e)
// {
//     //création d'un objet FileReader
//     var reader = new FileReader();
//     //déclenchement de l'affichage du fichier dans #tt
//     reader.onload = function (event)
//     {
//         $("#tt").html("<img src='"+event.target.result+"' style='width:100%;'/>");
//     }
//     //lecture du fichier FileList envoyé par le formulaire
//     reader.readAsDataURL(e.target.files[0]);
// });
// .drag-photo
// {
//     height:8rem;
//     overflow:hidden;
//     border: dashed 5px lightgrey;
// }
// .drag-photo:hover
// {
//     border: dashed 5px rgb(195, 0, 255);
// }