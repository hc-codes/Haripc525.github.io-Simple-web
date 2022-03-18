<?php
include "connect.php";

$blogger_name = $_POST['blogger_name'];
$blog_main_title = urlencode($_POST['blog_main_title']);
$blog_sub_title = urlencode($_POST['blog_sub_title']);
$blog_main_description = urlencode($_POST['blog_main_description']);
$section_title_array_json = $_POST['section_title_array_json'];
$section_description_json = $_POST['section_description_json'];

date_default_timezone_set('Asia/Kolkata');
$date_time = date('Y-m-d H:i:s');

$section_title_array = json_decode($section_title_array_json);
$section_description = json_decode($section_description_json);

$conn->query("INSERT INTO `edu_blog_blogs` (`id`, `blogger_name`, `title`, `sub_title`, `description`, `date_time`) VALUES (NULL, '$blogger_name', '$blog_main_title', '$blog_sub_title', '$blog_main_description', '$date_time')");
$edu_blog_blogs_id = $conn->insert_id;
// echo "-->".sizeof($section_title_array);
for($i=0; $i<sizeof($section_title_array);$i++)
{
	$section_title_encoded = urlencode($section_title_array[$i]);
	$section_description_encoded = urlencode($section_description[$i]);
	$conn->query("INSERT INTO `edu_blog_sections` (`id`, `edu_blog_blogs_id`, `section_title`, `section_description`) VALUES (NULL, '$edu_blog_blogs_id', '$section_title_encoded', '$section_description_encoded')");
}
?>