<?php 

Flight::route('GET /posts', function(){
    $offset = Flight::query('offset', 0);
    $limit = Flight::query('limit', 25);
    $search = Flight::query('search');
    $order = Flight::query('order', "-id");

    Flight::json(Flight::postService()->get_posts($search, $offset, $limit, $order));


});

Flight::route('POST /posts', function(){
    $data = Flight::request()->data->getData();
    Flight::postService()->add_post($data);
   });


Flight::route('GET /posts/@id', function($id){
    Flight::json(Flight::postService()->get_by_id($id));
  });


Flight::route('PUT /posts/@id', function($id){
    $data = Flight::request()->data->getData();
    Flight::json(Flight::postService()->update($id, $data));
  });

?>