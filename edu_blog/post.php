<?php
include "connect.php";
$blog_id = $_GET['blog_id'];
$button_name = $_GET['button_name'];

if($button_name == "null")
{
  $qry_edu_blogs = $conn->query("SELECT id,blogger_name,title,sub_title,description,date(date_time) as blog_date FROM `edu_blog_blogs` ORDER BY id DESC");
}
else if($button_name == "next")
{
  $qry_edu_blogs = $conn->query("SELECT id,blogger_name,title,sub_title,description,date(date_time) as blog_date FROM `edu_blog_blogs` WHERE id<'$blog_id' ORDER BY id DESC");
}
else if($button_name == "prev")
{
  $qry_edu_blogs = $conn->query("SELECT id,blogger_name,title,sub_title,description,date(date_time) as blog_date FROM `edu_blog_blogs` WHERE id>'$blog_id' ORDER BY id ASC");
}
else if($button_name == "current")
{
  $qry_edu_blogs = $conn->query("SELECT id,blogger_name,title,sub_title,description,date(date_time) as blog_date FROM `edu_blog_blogs` WHERE id='$blog_id' ");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

  <!-- Add fa icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="add_blog.php">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="post.php?blog_id=null&button_name=null">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
<?php
    $res_edu_blog = $qry_edu_blogs->fetch_array();
    $blog_id_fetched = $res_edu_blog['id'];
    $str_date=strtotime($res_edu_blog['blog_date']);
    $month=date("F",$str_date);
    $year=date("Y",$str_date);
    $date_only=date("d",$str_date);
?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/open_book.jpg'); background-color: rgba(0,0,0,1);">
    <div class="overlay"></div>
    <div class="container" style="padding: 0vw;">
      <div class="row"  style="padding: 0vw;">
        <div class="col-lg-12 col-md-12 mx-auto" style="*background-color: yellow; padding: 0; *text-align: center;">
          <div class="post-heading" style="*background-color: red;">
            <h1><?php echo urldecode($res_edu_blog['title']); ?></h1>
            <h2 class="subheading"><?php echo urldecode($res_edu_blog['sub_title']); ?></h2>
<?php
                if($blog_id_fetched !="")
                {
?>
                  <span class="meta">Posted by
                  <a href="#"><?php echo $res_edu_blog['blogger_name']; ?></a>
                  on <?php echo $month," ".$date_only; ?> , <?php echo $year; ?></span>
<?php
                }
?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-12 mx-auto">
          
          <p style="text-align: justify; text-indent: 4vw;"><?php echo urldecode($res_edu_blog['description']); ?></p>
          <!-- <img class="img-fluid" src="img/post-sample-image.jpg" alt="Unable To Load"> -->
<?php
          $qry_blog_section = $conn->query("SELECT section_title,section_description FROM edu_blog_sections WHERE edu_blog_blogs_id = '$blog_id_fetched' ");
          while($res_blog_section = $qry_blog_section->fetch_array())
          {
?>
            <h2 class="section-heading"><?php echo urldecode($res_blog_section['section_title']); ?></h2>

            <p style="text-indent: 4vw;text-align: justify;"><?php echo urldecode($res_blog_section['section_description']); ?></p>
<?php
          }
?>
        </div>
      </div>
    </div>
  </article>
  <div class="col-lg-12 col-md-12" style="padding-right: 5vw; padding-left: 5vw;">
    <button class="btn_icon" onclick="prev_blog('prev','<?php echo $blog_id_fetched; ?>');" style="float: left;" >
      <i class="fa fa-arrow-left"></i>
      Previous
    </button>
    <button class="btn_icon" onclick="next_blog('next','<?php echo $blog_id_fetched; ?>');" style="float: right;" >
      <i class="fa fa-arrow-right"></i>
      Next
    </button>
  </div>
  <hr style="margin-top: 4vw;">

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>

<script type="text/javascript">
  function prev_blog(button_name,blog_id)
  {
    window.location.href = "post.php?blog_id="+blog_id+'&button_name='+button_name;
  }
  function next_blog(button_name,blog_id)
  {
    window.location.href = "post.php?blog_id="+blog_id+'&button_name='+button_name;
  }
</script>
