<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CoinCombinations.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) { 
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_coin_combination", function() use($app) { 
        $my_CoinCombinations = new CoinCombinations;
        $price = is_numeric($_GET['price']) ? intval($_GET['price']) : 0;
        $coinComb = $my_CoinCombinations->makeChange($price);
        return $app['twig']->render('form.html.twig', array('result' => $coinComb, 'price' => $price));
    });

    return $app;
?>