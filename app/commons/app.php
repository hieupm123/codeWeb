<?php
require_once __DIR__ . "/define.php";
class App
{
    private $controller = "login"; // Mặc định là trang login
    private $action = "render";   // Action mặc định
    private $params = [];         // Tham số truyền vào

    public function __construct()
    {
        $arr = $this->RouterProccess();

        // Xử lý Controller
        if (isset($arr[0]) && file_exists("app/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        } else {
            $this->controller = "login";
        }

        //Đặt tên các file phải có dấu "_", ví dụ: "teacher_search.php"
        //Tên class phải không có dấu "_", ví dụ: "TeacherSearch extends Controller"
        $object =  str_replace("_", "", $this->controller);
        require_once "app/controllers/" . $this->controller . ".php";
        $this->controller = new $object;

        // Xử lý Action
        if (isset($arr[1]) && method_exists($this->controller, $arr[1])) {
            $this->action = $arr[1];
            unset($arr[1]);
        }

        // Xử lý tham số
        $this->params = $arr ? array_values($arr) : [];

        // Gọi controller và action
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    /**
     * Xử lý Router
     * 
     */
    private function RouterProccess()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $base = '/';
        $relativeUri = str_replace($base, '', $uri);
        $cleanUri = explode('?', $relativeUri)[0];
        return explode('/', trim($cleanUri, '/'));
    }
}
