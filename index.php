<?php
function valInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$boy = $girl = '';

if (!empty($_GET['m']) && !empty($_GET['f'])) {
  $boy = valInput($_GET['m']);
  $girl = valInput($_GET['f']);
}
else {
  if (empty($_GET['m']) && empty($_GET['f'])) {
    $boy = 'the boy';
    $girl = 'the girl';
  }
  else if (empty($_GET['m'])) {
    $boy = 'the boy';
    $girl = valInput($_GET['f']);
  }
  else if (empty($_GET['f'])) {
    $boy = valInput($_GET['m']);
    $girl = 'the girl';
  }
}
?>

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>
      <title>Valentine Wishes From Kamal</title>

      <!-- G Tracking -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84054106-2', 'auto');
        ga('send', 'pageview');

      </script>

      <!-- CSS Dependencies -->
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">

    </head>
    <body>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="imgBox">
              <img src="img/robotlove.png" class="robot img-responsive" alt="robotlove">
              <div class="inputs">
                <div class="textBox">Be My Valentine?</div>
                <div class="guy"><?php echo $boy; ?></div>
                <div class="girl"><?php echo $girl; ?></div>
              </div>
              <div class="heartBox">
                <div class="heart heart1 hidden"></div>
                <div class="heart heart2"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="response">
              <button type="button" class="btn green" onclick="showMe();">Yes, Always!</a>
              <button type="button" class="btn red" data-toggle="modal" data-target="#ansNo">NoThxBye.</a>
            </div>
          </div>
        </div>

        <div id="ansNo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="ifYes" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Wrong Answer.</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="wizardText">If this attitude continues, someone will end up becoming a wizard.</p>
                <img src="img/wizard.jpg" class="img-responsive" alt="wizard">
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div> -->
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="message">
              <p>Happy Valentine's Day guys. Below is an actual heart, <span><i class="fa fa-heart" aria-hidden="true"></i></span> is a mirrored butt.
                <br/>Don't use <span><i class="fa fa-heart" aria-hidden="true"></i></span>, save lives.</p>
<pre>
|  \ \ | |/ /
|  |\ `' ' /
|  ;'aorta \      / , pulmonary
| ;    _,   |    / / ,  arteries
superior | |   (  `-.;_,-' '-' , vena cava
| `,   `-._       _,-'_
|,-`.    `.)    ,<_,-'_, pulmonary
,'    `.   /   ,'  `;-' _,  veins
;        `./   /`,    \-'
| right   /   |  ;\   |\
| atrium ;_,._|_,  `, ' \
|        \    \ `       `,
`      __ `    \   left  ;,
\   ,'  `      \,  ventricle
\_(            ;,      ;;
|  \           `;,     ;;
inferior |  |`.          `;;,   ;' vena cava
|  |  `-.        ;;;;,;'
|  |    |`-.._  ,;;;;;'
|  |    |   | ``';;;'  FL
        aorta
</pre>
            </div>
          </div>
        </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="shuffleLetters.js"></script>
      <script>
        $('.textBox').shuffleLetters();

        function showMe (name) {
          $('.heart1').toggleClass('hidden');
          $('.message').slideToggle('slow');
          $('.response').slideToggle();
          $('.textBox').html('LOVE ATTACK!')
        }
      </script>
    </body>
  </html>
