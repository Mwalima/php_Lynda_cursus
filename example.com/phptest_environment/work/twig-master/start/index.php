<?php
error_reporting(E_ALL);
require __DIR__.'/vendor/autoload.php';
require __DIR__.'/src/Product.php';
//
//
///*
// * Go to this file in your web-browser to render Twig templates:
// *
// *  * http://localhost/index.php            -> index.twig
// *  * http://localhost/index.php/contact    -> contact.twig
// *
// * ... etc ...
// */
//
//// 1) create a Symfony Request, used only to help make each URL render a different Twig template
//use Symfony\Component\HttpFoundation\Request;
//$request = Request::createFromGlobals();
//$uri = $request->getPathInfo();
//
//// 2) bootstrap Twig!
//$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
//$twig = new Twig_Environment($loader, array(
//    // cache disabled, since this is just a testing project
//    'cache' => false,
//    'debug' => true,
//    'strict_variables' => true
//));
//$twig->addExtension(new Twig_Extension_Debug());
//
//// 3) create a few different "pages"
//switch ($uri) {
//    // The Homepage! (/)
//    case '/':
//        echo $twig->render('homepage.twig', array(
//            'pageData' => array(
//                'title'    => 'Suit Up!',
//                'summary'  => 'You\'re <strong>hip</strong>, you\'re cool, you\'re a penguin! Now, start dressing like one! Find the latest suits, bow-ties, swim shorts and other outfits here!',
//                'hasSale'  => 1,
//            ),
////            'products' => array(
////                'Serious Businessman',
////                'Penguin Dress',
////                'Sportstar Penguin',
////                'Angel Costume',
////                'Penguin Accessories',
////                'Super Cool Penguin',
////            ),
//            
//        ));
//
//        break;
//
//    // All other pages
//    default:
//        // if we have anything else, render the URL + .twig (e.g. /about -> about.twig)
//        $template = substr($uri, 1).'.twig';
//
//        echo $twig->render($template, array(
//            'title' => 'Some random page!',
//        ));
//}
require __DIR__.'/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new Twig_Environment($loader, array(
    // Uncomment the line below to cache compiled templates
    // 'cache' => __DIR__.'/../cache',
));
$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
if (!$name) {
    $name = "Mercury, Venus, Mars, Jupiter, Saturn, Uranus & Neptune.";
}
$dir    = __DIR__.'/assets/images/';
$images = scandir($dir);


//$images = array(
//    new Product('Serious Businessman', 'formal.png'),
//    new Product('Penguin Dress', 'dress.png'),
//    new Product('Sportstar Penguin', 'sports.png'),
//    new Product('Angel Costume', 'angel-costume.png'),
//    new Product('Penguin Accessories', 'swatter.png'),
//    new Product('Super Cool Penguin', 'super-cool.png'),
//);


echo $twig->render('homepage.twig', array(
            'pageData' => array(
                'title'    => 'Suit Up!',
                'summary'  => 'You\'re <strong>hip</strong>, you\'re cool, you\'re a penguin! Now, start dressing like one! Find the latest suits, bow-ties, swim shorts and other outfits here!',
                'hasSale'  => 1,
            ),
    'products' => array(
                'Serious Businessman',
                'Penguin Dress',
                'Sportstar Penguin',
                'Angel Costume',
                'Penguin Accessories',
                'Super Cool Penguin',
            ),
    'images'=> $images,
    ));