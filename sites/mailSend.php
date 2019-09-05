<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="DE">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Use the title from a page's frontmatter if it has one -->
    <title>VereineVor</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600,600i,700i&display=swap" rel="stylesheet">
    <link href="/stylesheets/site.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/javascripts/site.js"></script>
  </head>
  <body>

    <div class="menu">
      <button id="menu-button-2">
        <div class="burger-icon">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 6 5" xml:space="preserve">
            <line x1="1" y1=".5" x2="5" y2="4.5" style="stroke:#2380c4; stroke-width: .4;"/>
            <line x1="1" y1="4.4" x2="5" y2=".5" style="stroke:#2380c4; stroke-width: .4;"/>
          </svg>
        </div>
        <span>Schließen</span>
      </button>
      <nav>
        <ul>
          <li><a href="../index.html">Start</a></li>
          <li><a href="../sites/agenda.html">Agenda</a></li>
          <li><a href="../sites/team.html">Team</a></li>
          <li><a href="../sites/support.html">Support</a></li>
          <li><a href="../sites/join.html">Mitmachen</a></li>
        </ul>
        <hr>
        <ul>
          <li><a href="../sites/imprint.html">Impressum</a></li>
          <li><a href="../sites/policy.html">Datenschutz</a></li>
        <ul>
      </nav>
    </div>
    <div class="overlay"></div>

    <header>
      <button id="menu-button-1">
        <div class="burger-icon">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 6 5" xml:space="preserve">
            <rect x="1" y="1" width="4" height=".5" fill="#fff"/>
            <rect x="1" y="2.25" width="4" height=".5" fill="#fff"/>
            <rect x="1" y="3.5" width="4" height=".5" fill="#fff"/>
          </svg>
        </div>
        <span>Menü</span>
      </button>
      <a href="../index.html" class="logo">#vereinevor<a>
    </header>

    <div class="wrapper">
        <section class="mailsend">
  <div class="content-wrapper">
    <p>Vielen Dank für Deine Unterstützung!</p>
    <div class="hideme" style="display: none;">
      <?php require_once("dd24_send_mail.inc.php"); ?>
    </div>
  </div>
</section>

    </div>

    <footer>
      <span>#vereinevor</span>
      <address>
        Fasanerieweg 15<br>
        66121 Saarbrücken<br>
        u-team@vereinevor.saarland
      </address>
      <span>Folge uns auf Facebook</span>
      <div>
        <a href="https://www.facebook.com/VereineVor-1357730054378422/">
          <img src="../images/icons/facebook.svg" alt="facebook logo" class="logo-facebook"/>
        </a>
      </div>
      <hr>
      <div class="links">
        <a href="../sites/imprint.html">Impressum</a>
        <a href="../sites/policy.html">Datenschutz</a>
      </div>
      <div>
        <img src="../images/logos/image001.jpg" alt="saarland logo" class="logo-saarland">
      </div>
    </footer>
  </body>
</html>
