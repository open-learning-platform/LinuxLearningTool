
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="Zeeshan Islam">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>LinuxLearningTool</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style media="screen">
      body {
        padding-top: 60px;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LinuxLearningTool</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="/home">Home</a></li>
            <li><a href="/webquests">Webquests</a></li>
            <li><a href="/lehrplan_integration">Lehrplan Integration</a></li>
            <li><a href="/impressum">Impressum</a></li>
          </ul>
          <!-- <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Registrieren</a></li>
            <li><a href="#">Login</a></li>
          </ul> -->
        </div>
      </div>
    </nav>

    <div class="container">

      @yield('content')

    </div>

  </body>
</html>
