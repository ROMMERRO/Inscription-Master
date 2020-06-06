<?php $connect = mysqli_connect("localhost","root","2126","ETUDIANTS") or die("unable to connect"); ?>

<!-- first page -->
<?php
  if (isset($_GET['next'])) {

    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $cne = $_GET['cne'];
    $query = "select CNE from ETUDIANT_GI";
    $result = mysqli_query($connect,$query) or die("l'inscription a echouée!");
    while ($row = mysqli_fetch_assoc($result)) {
      if ($cne == $row['CNE']) {
        echo "<script type='text/javascript'>";
        echo "alert('Sorry! Le CNE que vous avez entré est déja inscris'),";
        echo "window.location= 'index.php'";
        echo "</script>";
      }
    }

    echo "
      <script type='text/javascript'>
        document.getElementsByClassName('container')[0].style.height = '700px';
      </script>
      ";
    include 'main_form.php';
  }
  else include 'init_form.php';
 ?>

<!-- second page -->
<?php
    if (isset($_POST['submit'])){
      $nationalite = $_POST['nationalite'];
      $dateNaissance = $_POST['dateNaissance'];
      $province = $_POST['province'];
      $ville = $_POST['ville'];
      $adresse = $_POST['adresse'];
      $codePostal = $_POST['codePostal'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
      $anneeObtentionLicence = $_POST['anLic'];
      $moyenneLicence = $_POST['moyLic'];
      $mentionLicence = addslashes(file_get_contents($_FILES['menLic']['tmp_name']));
      $cin = addslashes(file_get_contents($_FILES['cin']['tmp_name']));
      $cv = addslashes(file_get_contents($_FILES['cv']['tmp_name']));

      $query = "insert into ETUDIANT_GI(
               nom,
               prenom,
               cne,
               nationalite,
               dateNaissance,
               province,
               ville,
               adresse,
               codePostal,
               telephone,
               email,
               anneeObtentionLicence,
               moyenneLicence,
               mentionLicence,
               cin,
               cv)values(
               '".$nom."',
               '".$prenom."',
               '".$cne."',
               '".$nationalite."',
               '".$dateNaissance."',
               '".$province."',
               '".$ville."',
               '".$adresse."',
               '".$codePostal."',
               '".$telephone."',
               '".$email."',
               '".$anneeObtentionLicence."',
               '".$moyenneLicence."',
               '".$mentionLicence."',
               '".$cin."',
               '".$cv."')";

      $result = mysqli_query($connect,$query)
              or die("<p style='color:red;font-size:18px;font-weight: normal;'>l'inscription a echouée! (la taille des fichiers!!)</p>");
      echo '<script type="text/javascript">';
      echo 'alert("Congratulation! vos informations ont été saisies avec succès"),';
      echo 'window.location= "index.php"';
      echo '</script>';
     }
  ?>

<?php mysqli_close($connect); ?>
