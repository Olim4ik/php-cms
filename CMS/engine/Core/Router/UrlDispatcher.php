<?php 

namespace Engine\Core\Router;


class UrlDispatcher
{
    /**
     * @var array 
     */
    private $method = [
        'GET',
        'POST'
    ];

    /**
     * @var array 
     */
    private $routes = [
        'GET' => [],
        'POST' => [],
    ];

    /**
     * @var array 
     */
    private $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]+',
        'any' => '[a-zA-Z0-9\.\-_%]+'
    ];

    /**
     * @param $key
     * @param $pattern
     */
    public function addPattern($key, $patterns)
    {
        $this->patterns[$key] = $patterns;
    }

    /**
     * @param $method
     */
    public function routes($method)
    {
        return isset($this->routes[$method]) ? $this->routes[$method] : [];
    }

    /**
     * @param $method
     * @param $uri
     */
    public function dispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method));

        if (array_key_exists($uri, $routes)) 
        {
            return new DispatcherRouter($routes[$uri]); 
        }
    }

}