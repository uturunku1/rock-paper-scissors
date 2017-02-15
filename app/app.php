<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    $app = new Silex\Application();
    $app['debug']= true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array('game'=> null));
    });

    $app->get("/result", function() use($app) {
        $computer_options = array("scissors", "rock", "paper");
        $computer_choice = $computer_options[array_rand($computer_options,1)];
        $game = new Game($_GET['choice'], $computer_choice);

        return $app['twig']->render('index.html.twig', array('game' => $game));
    });

    return $app;
 ?>
