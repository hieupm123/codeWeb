CREATE DATABASE IF NOT EXISTS timetable;
USE timetable;

CREATE TABLE admins (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    login_id VARCHAR(20),
    password VARCHAR(64),
    actived_flag INT(1) DEFAULT 1,   -- '0: not active, 1: actived',
    reset_password_token VARCHAR(100),
    updated DATETIME ON UPDATE CURRENT_TIMESTAMP, -- thời điểm cập nhật bản ghi
    created DATETIME DEFAULT CURRENT_TIMESTAMP-- thời điểm tạo bản ghi
);

CREATE TABLE subjects (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250),
    avatar VARCHAR(250), -- file name, ko lưu path
    description TEXT,
    school_year CHAR(10), -- Năm 1, Năm 2, Năm 3, Năm 4
    updated DATETIME ON UPDATE CURRENT_TIMESTAMP,
    created DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE teachers (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(250),
    avatar VARCHAR(250),
    description TEXT,
    specialized CHAR(10), -- bộ môn: Khoa học máy tính, KHoa học dữ liệu, Hải dương học,
    degree CHAR(10), -- học vị: Cử nhân, Thạc sĩ, Tiến sĩ, Phó giáo sư, Giáo sư
    updated DATETIME ON UPDATE CURRENT_TIMESTAMP,
    created DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE schedules (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    school_year CHAR(10),
    subject_id INT(10),
    teacher_id INT(10),
    week_day CHAR(10),
    lession CHAR(10),
    notes TEXT,
    updated DATETIME ON UPDATE CURRENT_TIMESTAMP,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (subject_id) REFERENCES subjects(id),
    FOREIGN KEY (teacher_id) REFERENCES teachers(id)
);
