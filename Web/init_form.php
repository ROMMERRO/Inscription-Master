<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/init_form.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  </head>
  <body>
      <form class="initial_form" action="" method="get">

        <label for="nom">Nom*</label>
        <input type="text" name="nom" placeholder="Entrer votre nom" maxlength="30" required pattern="[a-zA-Z]{3,}">

        <br><br><label for="prenom">Prenom*</label>
        <input type="text" name="prenom" placeholder="Entrer votre prenom" maxlength="30" required pattern="[a-zA-Z]{3,30}">

        <br><br><label for="cne">CNE*</label>
        <input type="text" name="cne" value="" placeholder="Entrer votre CNE" required pattern="[a-zA-Z]{1}[0-9]{9}">

        <br>
        <input type="submit" name="next" value="NEXT">

      </form>
  </body>
</html>
