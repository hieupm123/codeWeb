<!-- 
Cách sử dụng confirm-popup
1) DOM tới button cần kích hoạt sự kiện
2) gọi hàm openPopup(title, message, callback, iconFileName) với 44 tham số:
    - title: tiêu đề của popup
    - message: thông điệp cần hiển thị
    - callback: hàm sẽ được gọi khi người dùng nhấn xác nhận
    - iconFileName: tên file ảnh icon (không cần đuôi file) xem trong folder web/js/enums.js

Ví dụ:  openPopup('Xác nhận', 'Bạn có chắc chắn muốn tiếp tục?', () => {
            alert('Tìm kiếm giáo viên');
        }, ConfirmPopupIcon.Question);
-->

<div id="confirm-popup" class="overlay" style="display: none;">
    <div class="popup">
        <h3 id="popup-header">Thông báo</h3>
        <div id="popup-icon-container" class="popup-icon">
            <img id="popup-icon" src="" alt="Popup Icon" />
        </div>
        <p id="popup-message">Bạn có chắc chắn muốn tiếp tục?</p>
        <button class="button button-close" style="margin-right: 5px;" onclick="closePopup()">Hủy</button>
        <button class="button" onclick="confirmAction()">Xác nhận</button>
    </div>
</div>

<script>
    let confirmCallback = null;
    const pathFile = '../../../web/images/';


    function openPopup(title, message, callback, iconFileName = '') {
        const popup = document.querySelector('.popup');
        document.getElementById('confirm-popup').style.display = 'flex';
        document.getElementById('popup-message').textContent = message;
        document.getElementById('popup-header').textContent = title;
        confirmCallback = callback;

        const popupIcon = document.getElementById('popup-icon');
        if (iconFileName) {
            popupIcon.src = pathFile + iconFileName + '.svg';

            document.getElementById('popup-icon-container').style.display = 'block';
        } else {
            document.getElementById('popup-icon-container').style.display = 'none';
        }


        popup.style.animation = 'none';
        popup.offsetHeight;
        popup.style.animation = 'popupScale 0.4s ease-out forwards';
    }


    function closePopup() {
        const popup = document.querySelector('.popup');
        popup.style.animation = 'popupCollapse 0.2s ease-in forwards';


        setTimeout(() => {
            document.getElementById('confirm-popup').style.display = 'none';
        }, 100);
    }


    function confirmAction() {
        if (confirmCallback) {
            confirmCallback();
        }
        closePopup();
    }
</script>