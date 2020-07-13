<?php
return function ($app) {
	$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
		$name = $args['name'];
		$response->getBody()->write("Hello, $name");
		return $response;
	});
};