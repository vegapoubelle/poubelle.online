<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vega Poubelle</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/f/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/f/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/f/favicon-16x16.png">
    <link rel="manifest" href="/f/manifest.json">
    <link rel="mask-icon" href="/f/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
    <style>
body {
  background-image: url("fond.png");
  font-family: verdana, arial, helvetica, sans-serif;
  text-align: center;
  margin: 1em 0px 1em;
  font-size: 16px;
  color: silver;
}
a {
  font-family: arial, sans-serif;
  padding-left: 1px;
  padding-right: 1px;
  color: white;
}
table.center {
  margin-left:auto; 
  margin-right:auto;
}
#title {
  font-family: 'Shrikhand', cursive;
  font-size: 3em;
}
    </style>
  </head>
  <body>
<?php require 'php/connect.php';?>
    <p><img src="poubelle.png" alt="Logo">
    </p>
    <h1 id="title">La Vega Poubelle</h1>

    <!-- php goes here -->
    <p>
      id: <b><?php echo $id; ?></b>,
      matière: <b><?php echo $matiere; ?></b>,
      masse: <b><?php echo $masse; ?></b>,
      date: <b><?php echo $time; ?></b>.
    </p>
    <!-- php done here -->

    <footer>
      <b>fait avec ❤️ à Pontivy</b><br>
      code disponible sur 
      <a href="https://github.com/vegapoubelle" title="Tout le code du projet"title>github</a><br><br>
      
      <table class="center">
        <thead>
          <tr>
            <th><a href="https://github.com/bideabiere" title="Bideabiere">Elouan Lamour</a></th>
            <th><a href="https://www.youtube.com/channel/UChFaUrD7t1JQ0w7rObWhIRA" title="Benjo">Benoit-Joseph Millot</a></th>
            <th><a href="https://github.com/Guehendek" title="Le chinois">Yann Le Guehennec</a></th>
            <th><a href="http://philippeloctaux.com" title="Le russe">Philippe Loctaux</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="https://github.com/bideabiere" title="Bideabiere"><img src="img/elouan.jpg" alt="Bideabiere" style="max-width:100%;"></a></td>
            <td><a href="https://www.youtube.com/channel/UChFaUrD7t1JQ0w7rObWhIRA" title="Benjo"><img src="img/benjo.jpg" alt="Benjo" style="max-width:100%;"></a></td>
            <td><a href="https://github.com/Guehendek" title="Le chinois"><img src="img/yann.jpg" alt="Le chinois" style="max-width:100%;"></a></td>
            <td><a href="http://philippeloctaux.com" title="Le russe"><img src="img/phil.jpg" alt="Le russe" style="max-width:100%;"></a></td>
          </tr>
        </tbody>
      </table>
      <br>
      &copy; Copyright <?php $fromYear = 2017;  $thisYear = (int)date('Y');  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?></footer>
  </body>
</html>