<?

namespace core;

class Router
{
    protected $routes = [];
    protected $params = [];
    public function __construct()
    {
        $arr = require ROOT . "/application/config/routes.php";
        //debug($arr);
        foreach ($arr as $route => $params) {
            $this->add($route, $params);
        }
    }

    public function add($route, $params)
    {
        $route = "#^" . $route . "$#";
        $this->routes[$route] = $params;
    }
    public function match()
    {
        $uri = $this->getURI();
        foreach ($this->routes as $uriPattern => $params) {
            if (preg_match($uriPattern, $uri, $matches)) {
                $this->params = $params;

                return true;
            }
        }
        return false;
    }
    public function run()
    {
        if ($this->match()) {
            $controllerName = "application\controllers\\" . ucfirst($this->params['controller']) . "Controller.php";
            if (class_exists($controllerName)) {
                //
            } else {
                echo "Не найден " . $controllerName;
            }
        } else {
            echo "Такого маршрута нет";
        }
    }

    protected function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], "/");
        }
    }
}
