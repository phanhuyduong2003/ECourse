# ECourse - Nền tảng khoá học trực tuyến

## Cấu trúc thư mục:

-   index.html: Giao diện trang chủ
-   signin.html: Giao diện trang đăng nhập
-   signup.html: Giao diện trang đăng kí
-   course.html: Giao diện danh sách khoá học

### Thư mục **assets**:

-   bootstrap: Thư mục chứa file CSS và JS của thư viện bootstrap
-   css: Thư mục chứa file CSS cho toàn bộ dự án
-   icon: Thư mục chứa file CSS và font sử dụng [FontAwesome](https://fontawesome.com)
-   image: Thư mục chứa ảnh của dự án, nếu như có nhiều ảnh cho 1 phần nào đó thì tạo thêm 1 thư mục với tên phần cần làm trong thư mục này để chứa các anhhr đó
-   js: Thư mục chứa file main.js là file chứa toàn bộ code JS cho dự án

## Thao tác với GitHub

### Tải Git

[Link tải](https://git-scm.com/downloads)

### Kéo dự án GitHub về máy

_Mở Git Bash, truy cập vào 1 thư mục nào đó, có thể là Download, sau đó gõ lệnh dưới_

-   `git clone https://github.com/phanhuyduong2003/ECourse.git`

### Đẩy code lên GitHub (Khuyến khích nên đẩy lên GitHub sau mỗi buổi code)

**Mở Terminal trên VS Code (Dùng tổ hợp Ctrl + J), lựa chọn Git Bash như ảnh sau: [Link](https://code.visualstudio.com/assets/docs/terminal/basics/select-profile-dropdown.png)**

**Sau đó gõ các lệnh dưới đây:**

-   `git pull origin main` (Lấy code mới nhất từ GitHub về phòng trường hợp có người khác sửa vào file của mình dẫn đến hiện tượng gọi là conflict. Nếu bị conflict thì sẽ phải hỏi người sửa code của mình tại sao sửa để xem xét phần code bị conflict nên giữ lại code của mình hay sử dụng code của người khác đã sửa.)

-   `git add .` (Thêm tất cả các file trong thư mục dự án để đẩy lên GitHub)

-   `git commit -m "message"` (Thay `message` bằng nội dung phần mình đã làm, viết ngắn gọn)

-   `git push origin main` (Đẩy code lên GitHub)

-   `Test` asad
