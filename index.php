<?php
    //ini_set('max_execution_time', 300);

    require_once 'Slim/Slim.php';
    //require_once 'php/Mail.php';
    require_once 'php/JsonResponse.php';
    require_once 'php/ItemService.php';
    require_once 'php/FileService.php';
    require_once 'php/Plinq.php';
    //require_once 'php/contact.php';

    \Slim\Slim::registerAutoloader();

    $app = new \Slim\Slim();

    $app->config(array(
        'debug' => true
    ));

    $app->get('/(:state)', function ($state = null) use($app) {
        $itemService = new ItemService();
        $items = $itemService->getWithImages();
        $itemsrev = array_reverse($items);
        $html1 = "";
        $html2 = "";
        $pitems = new Plinq($itemsrev);
        $items1 = $pitems->Where(function($key, $value) { return $key % 2 != 0; })->ToArray();
        $items2 = $pitems->Where(function($key, $value) { return $key % 2 == 0; })->ToArray();
        
        foreach($items1 as $item) {
            $html1 .= $app->view()->fetch("item.php", [ "model"=>$item ]);
        }
        
        foreach($items2 as $item) {
            $html2 .= $app->view()->fetch("item.php", [ "model"=>$item ]);
        }
        
        $app->render('template.php', array( 'view' => "home.php", 'state' => $state, 'items1'=>$html1, 'items2' => $html2 ));
    });

    $app->post('/add/', function () use($app) {
        $response = new JsonResponse();
        $itemService = new ItemService();

        $model = $itemService->insert($_POST, $_FILES["images"]);

        $modelWithImages = $itemService->getWithImages($model->id);
        
        $html = $app->view()->fetch("item.php", ["model"=>$modelWithImages]);

        $response->successful("Successfully added a new post", $modelWithImages, $html);
    });

    $app->post("/delete/", function() use($app) {
        $response = new JsonResponse();
        $itemService = new ItemService();
        $id = $_POST["id"];
        
        $result = $itemService->delete($id);
        
        $response->successful("Successfully deleted the post", $result);
    });

    $app->run();

?>