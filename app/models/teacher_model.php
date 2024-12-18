<?php
require_once 'app/models/entities/teacher_entity.php';

class TeacherModel extends Database
{

    public function getTeacherList(array $where = array()): array
    {
        $sql = "SELECT * FROM teachers ORDER BY id DESC";
        $result = mysqli_query($this->connection, $sql,);
        $teacherList = [];
        while ($row = mysqli_fetch_array($result)) {
            $teacher = new Teacher(
                $row['id'],
                $row['name'],
                $row['avatar'],
                $row['description'],
                $row['specialized'],
                $row['degree'],
                $row['updated'],
                $row['created']
            );
            $teacherList[] = $teacher;
        }
        return $teacherList;
    }
}
