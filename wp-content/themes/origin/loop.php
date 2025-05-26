<?php
// Loop tiêu chuẩn của WP, hiển thị post dựa trên câu lệnh truy vấn URL
if(have_posts()) : while(have_posts()) : the_post();
    //.......
endwhile; else;
    //.......
endif;
?>

<?php
// Sử dụng query_posts để sửa lại cấu trúc mặc định của loop.
query_posts('posts_per_page=5&cat=3&orderby=rand');
if(have_posts()) : while(have_posts()) : the_post();
    //.......
endwhile; else;
    //.......
endif;
wp_reset_query();
?>

<?php
// Sử dụng $query_string để bảo toàn câu lệnh truy vấn URL
global $query_string;
$posts = query_posts($query_string . 'posts_per_page=5&cat=3&orderby=rand');
if(have_posts()) : while(have_posts()) : the_post();
    //.......
endwhile; else;
    //.......
endif;
wp_reset_query();
?>

<?php
// Sử dụng Class new WP_Query để chỉnh sửa hoặc tạo loop mới hoặc nhiều loop trên một trang
$featured = new WP_Query('posts_per_page=5&cat=3&orderby=rand');
while($featured->have_posts()) : $featured->the_post();
    //.......
endwhile;
wp_reset_postdata();
?>
<?php
// Sử dụng Class new WP_Query để chỉnh sửa hoặc tạo loop mới hoặc nhiều loop trên một trang
$featured = new WP_Query('posts_per_page=5&cat=3&orderby=rand');
while($featured->have_posts()) : $featured->the_post();
    //...
endwhile;
wp_reset_postdata();
?>

<?php
// Cách thức an toàn nhất để tạo một loop riêng biệt hoặc nhiều loop trên một trang
global $post;
$args = array('numberposts'=>3, 'category'=>5,6,7, 'orderby'=>'rand');
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);
    //...
endforeach;
wp_reset_postdata();
?>
