<?php
class TeacherSearch extends Controller
{

    public function getTeacherList(array $where = array()): array
    {
        $teacher =  $this->model("teacher_model");
        $list = $teacher->getTeacherList();
        return $list;
    }
    function render()
    {
        $this->view("main_layout", [
            "view" => "teacher_search",
            "teacherList" => $this->getTeacherList()
        ]);
    }
}
