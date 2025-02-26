<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="My first webpage, with PHP" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Peter Zerbinos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="./css/style.css" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
      <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-green.min.css" />
      <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
      <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
      <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
      <link rel="manifest" href="site.webmanifest" />
        <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/icon?family=Material+Icons"
        />
    <link
      rel="stylesheet"
      href="https://code.getmdl.io/1.3.0/material.purple-deep_orange.min.css"
    />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>My first webpage, with JavaScript</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Hello, World! with PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
          <?php echo '<p>Hello, World!</p>'; ?>
          <img src="./images/php.png" alt="PHP" style="width: 200px; height: auto;">
      </main>
    </div>
  </body>
</html>
