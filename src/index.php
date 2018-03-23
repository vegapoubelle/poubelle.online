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
    <style>
body {
  font-family: verdana, arial, helvetica, sans-serif;
  text-align: center;
  margin: 1em 0px 1em;
  font-size: 16px;
}
a {
  font-family: arial, sans-serif;
  padding-left: 1px;
  padding-right: 1px;
}
table.center {
  margin-left:auto; 
  margin-right:auto;
}
    </style>
  </head>
  <body>
<?php require 'php/connect.php';?>
    <p><img src="poubelle.png" alt="Logo">
    </p>
    <h1>La Vega Poubelle</h1>

    <p>site <i>toujours</i> en construction</p>

    <p>
      valeur magique: <b><?php echo $masse; ?></b>
    </p>

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
            <td><a href="https://github.com/bideabiere" title="Bideabiere"><img src="https://avatars0.githubusercontent.com/u/34767257?s=100" alt="Bideabiere" style="max-width:100%;"></a></td>
            <td><a href="https://www.youtube.com/channel/UChFaUrD7t1JQ0w7rObWhIRA" title="Benjo"><img src="https://avatars2.githubusercontent.com/u/34767515?s=100" alt="Benjo" style="max-width:100%;"></a></td>
            <td><a href="https://github.com/Guehendek" title="Le chinois"><img src="https://avatars1.githubusercontent.com/u/34568595?s=100" alt="Le chinois" style="max-width:100%;"></a></td>
            <td><a href="http://philippeloctaux.com" title="Le russe"><img src="https://avatars0.githubusercontent.com/u/8809909?s=100" alt="Le russe" style="max-width:100%;"></a></td>
          </tr>
        </tbody>
      </table>
      <br>
      &copy; Copyright <?php $fromYear = 2017;  $thisYear = (int)date('Y');  echo $fromYear . (($fromYear != $thisYear) ? '-' . $thisYear : '');?></footer>
  </body>
</html>

<!--
vim: set ts=2 sw=2 sts=2 et :
-->
