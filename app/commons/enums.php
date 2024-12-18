<?php

enum SchoolYear: String
{
    case Nam_1 =  'Năm 1';
    case Nam_2 = 'Năm 2';
    case Nam_3 = 'Năm 3';
    case Nam_4 = 'Năm 4';


    public function getName(): string
    {
        return match ($this) {
            self::Nam_1 => 'Năm 1',
            self::Nam_2 => 'Năm 2',
            self::Nam_3 => 'Năm 3',
            self::Nam_4 => 'Năm 4',
        };
    }
}
enum Specialized: string
{
    case ComputerScience = '001';
    case DataScience = '002';
    case  Oceanography = '003';

    public function getName(): string
    {
        return match ($this) {
            self::ComputerScience => 'Khoa học máy tính',
            self::DataScience => 'Khoa học dữ liệu',
            self::Oceanography => 'Hải dương học',
        };
    }
}


enum Degree: String
{
    case Bachelor = '001';
    case Master = '002';
    case Doctor = '003';
    case AssociateProfessor = '004';
    case Professor = '005';

    public function getName(): string
    {
        return match ($this) {
            self::Bachelor => 'Cử nhân',
            self::Master => 'Thạc sĩ',
            self::Doctor => 'Tiến sĩ',
            self::AssociateProfessor => 'Phó Giáo sư',
            self::Professor => 'Giáo sư',
        };
    }
}

enum ConfirmPopupIcon: string
{
    case Success = 'icon_circle_check';
    case Error = 'icon_circle-xmark';
    case Warning = 'icon_circle_warning';
    case Question = 'icon_circle_question';
}
