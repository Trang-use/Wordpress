1. Website tin tức

   1.1 Mô tả chức năng
   đây là website tin tức, người dùng có thể xem các bài viết mới nhất về nhiều chủ đề.
   người dùng có thể thêm bài viết (add article) vào trang.
   người dùng có thể chỉnh sửa (Edit), cập nhật (Update) hoặc xóa (Delete) bài viết.
   
   1.2- Trang chủ của web video demo:

    https://www.loom.com/share/177a37d342ff47c6aa316b3e21a6169b

   1.3 - Vai trò cụ thể của em trong dự án
   Thiết kế giao diện

   1.4 -  xử lý backend
   Hiển thị các bài viết theo chuyên mục (category) cụ thể, chia thành các khối nội dung như Videos, Featured, JavaScript & jQuery, với 1 bài nổi bật và danh sách liên kết các bài còn lại.
  
   1.5 - tích hợp plugin
   Tích hợp plugin chính là đoạn include 'featured.php', dùng để thêm chức năng nổi bật (featured) vào trang — đóng vai trò như một plugin nội bộ hoặc module mở rộng


2. Slide video chuyên mục

   2.1 Mô tả chức năng
    Video trình bày giao diện một nền tảng chia sẻ nội dung học tập dạng số, với chức năng chính là hiển thị và phân loại các bài học theo chuyên mục, mỗi chuyên mục gồm:
    1 video nổi bật (hiển thị thumbnail, tiêu đề, mô tả ngắn)
    Danh sách bài học liên quan (liệt kê tiêu đề dạng danh sách)
    Các chuyên mục ví dụ: Videos, JavaScript, PHP Videos
   
   2.2 Hình ảnh website video demo
     https://www.loom.com/share/95a660b8b2bc4ce598894728a59aa053
  
   2.3 - Vai trò cụ thể của em trong dự án
    Thiết kế giao diện
  
   2.4 -  xử lý backend
    Backend của video sử dụng các truy vấn WP_Query để lấy dữ liệu bài viết theo từng chuyên mục, xử lý phân loại và hiển thị bài viết nổi bật cùng danh sách liên quan, sau đó render ra giao diện. Các module có 
    thể mở rộng qua file featured.php.

   2.5 - tích hợp plugin
    Trong đoạn code bạn gửi, phần tích hợp plugin chính là việc include file featured.php như một module mở rộng. Phần còn lại là xử lý truy vấn bài viết chuẩn WordPress. Nếu muốn tích hợp plugin khác, bạn cần 
    gọi shortcode hoặc hàm của plugin tương ứng.
