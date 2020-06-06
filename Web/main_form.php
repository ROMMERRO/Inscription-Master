<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/main_form.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
  </head>
  <body>
      <form class="main_form" action="" method="post" enctype="multipart/form-data">
        <div class="field">
          <label for="nationalite">Nationalite</label>      <input type="text" name="nationalite" value="Maroc" maxlength="30"><br>
        </div><div class="field">
          <label for="dateNaissance">Date Naissance*</label> <input type="date" name="dateNaissance" required> <br>
        </div><div class="field">
          <label for="province">Province</label>            <input type="text" name="province" maxlength="30"><br>
        </div><div class="field">
          <label for="ville">Ville*</label>                  <input type="text" name="ville" required maxlength="30"><br>
        </div><div class="field">
          <label for="adresse">Adresse</label>              <input type="text" name="adresse" maxlength="50"><br>
        </div><div class="field">
          <label for="codePostal">Code Postal</label>       <input type="text" name="codePostal" maxlength="10" pattern="[0-9]{0,10}"><br>
        </div><div class="field">
          <label for="telephone">Téléphone</label>          <input type="text" name="telephone" maxlength="15" pattern="[+]{0,1}[0-9]{5,15}"><br>
        </div><div class="field">
          <label for="email">Adresse Electronique</label>   <input type="email" name="email" maxlength="30"><br>
        </div><div class="field">
          <label for="anLic">Année obtention Licence*</label><input type="number" name="anLic" required min="1990" max="2020"><br>
        </div><div class="field">
          <label for="moyLic">Moyenne Licence*</label>       <input type="number" name="moyLic" required min="10" max="20"><br>
        </div><div class="field">
          <label for="menLic">Mention Licence(png/jpg/jpeg)*</label>      <input type="file" name="menLic" accept=".png,.jpg,.jpeg" required><br>
        </div><div class="field">
          <label for="cin">CIN (png/jpg/jpeg)*</label>                      <input type="file" name="cin" accept=".png,.jpg,.jpeg" required><br>
        </div><div class="field">
          <label for="cv">CV (.pdf)*</label>                        <input type="file" name="cv" accept="application/pdf" required><br>
        </div><div class="field">
          <p>P.S: la taille maximale des fichers est 1mb</p>
        </div>
        <input type="submit" name="submit" value="SUBMIT">
      </form>
  </body>
</html>
