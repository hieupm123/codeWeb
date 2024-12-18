<?php
require_once 'app/controllers/teacher_search.php';
$teacherList = $data["teacherList"];
?>

<div id="teacher-search">
    <div class="teacher-search-form">
        <form action="" class="form" method="post">
            <div class="form-group">
                <label for="teacher-search-specialized">Chuyên ngành</label>
                <select name="teacher-search-specialized" id="teacher-search-specialized">
                    <?php foreach (Specialized::cases() as $specialized): ?>
                        <option value="<?= $specialized->value; ?>">
                            <?= $specialized->getName(); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group"><label for="teacher-search">Từ khóa</label><input type="text" name="teacher-search-keysearch" id="teacher-search" placeholder="Nhập tên, bộ môn, mô tả"></div>

            <button type="button" id="teacher-search-btn" class="button">Tìm kiếm</button>

        </form>
    </div>
    <div class="teacher-search-table">
        <h4>Số giáo viên tìm thấy: <span><?= count($teacherList); ?></span></h4>
        <table class="datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tên giáo viên</th>
                    <th>Bộ môn</th>
                    <th>Mô tả chi tiết</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($teacherList)): ?>
                    <?php foreach ($teacherList as $index => $teacher): ?>
                        <tr>
                            <td type="number"><?= $index + 1; ?></td>
                            <td>
                                <?= htmlspecialchars($teacher->name); ?>
                            </td>
                            <td><?= htmlspecialchars($teacher->specialized); ?></td>
                            <td><?= htmlspecialchars($teacher->description ?? 'Không có mô tả'); ?></td>
                            <td type="action">
                                <button onclick="editTeacher(<?= $teacher->id; ?>)" class="btn-action btn-edit">Sửa</button>
                                <button onclick="deleteTeacher(<?= $teacher->id; ?>)" class="btn-action btn-delete">Xóa</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">Không có giáo viên nào được tìm thấy.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    document.getElementById('teacher-search-btn').addEventListener('click', () => {
        openPopup('Xác nhận', 'Bạn có chắc chắn muốn tiếp tục?', () => {
            alert('Tìm kiếm giáo viên');
        }, ConfirmPopupIcon.Question);
    });
</script>