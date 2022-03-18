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


  <!-- Ajax Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!-- Sweet Alert Library -->
  <link rel="stylesheet" type="text/css" href="sweetalert.css"><label hidden="">invalid</label>
  <script src="sweetalert.min.js"></script>

</head>

<body>
<div id="loader" style="display:none;"></div>
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

   <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/add_blog.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading" style="*background-color: red; *padding-top: 10vw; height: 28vw;">
            <h2 style="font-size: 3vw;">Add Your Story</h2>
            <!-- <span class="subheading">Education Blog</span> -->
            <div style="margin-top: 3vw;">
              <label class="subheading" style="font-size: 1.5vw;">Name</label>
              <input type="text" class="form-control textbox_style" name="blogger_name" id="blogger_name" placeholder="Enter Your Name" style="margin-top: .5vw;text-align: center;">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div id="add_blog_div" class="col-lg-8 col-md-10 mx-auto">
        <!-- <div style="text-align: center;">
          <img src="img/photo-camera.png" style="width: 6vw;">
          <form>
            <input type="file" name="" style="font-size: .8vw; cursor: pointer;">
          </form>          
        </div> -->
        <label class="blog_subheading">Title</label>
        <input type="text" class="form-control textbox_style" name="blog_main_title" id="blog_main_title" placeholder="Enter Story Title">
        <label class="blog_subheading">SubTitle</label>
        <input type="text" class="form-control textbox_style" name="blog_sub_title" id="blog_sub_title" placeholder="Enter Story SubTitle">
        <label class="blog_subheading">Description</label>
        <textarea class="form-control textbox_style" name="blog_main_description" id="blog_main_description" placeholder="Enter Story Description"></textarea>
        <div class="col-lg-12 col-md-12 mx-auto">
          <table id="section_table" style="width: 100%;">
            <tr>
              <td>
                <label class="blog_subheading">Section Title</label>
                <input type="text" class="form-control textbox_style" name="blog_section_title" placeholder="Enter Section Title">
                <label class="blog_subheading">Section Description</label>
                <textarea class="form-control textbox_style" name="blog_section_description" placeholder="Enter Section Description"></textarea>
              </td>
            </tr>
          </table>
        </div>
        <button type="button" class="btn-primary button_css" onclick="add_sections();" >Add Sections</button>
        <button type="button" class="btn-success button_css" onclick="save_blog();" >Save</button>
      </div>
    </div>
  </div>



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
function add_sections()
{
  var date_time = Date();
  $.ajax({
      type:"POST",
      url:"add_section.php",
      data:'date_time='+date_time,
      success: function(data)
      {
        var table = document.getElementById("section_table");
        var row = table.insertRow();        
        row.innerHTML = data; 
      }
  });
}

function save_blog()
{
  document.getElementById("loader").style.display = "block";

  var section_title_array = [];
  var section_description = [];
  var k=0;
  var date_time = Date();
  var blogger_name = document.getElementById("blogger_name").value;
  var blog_main_title = document.getElementById("blog_main_title").value;
  var blog_sub_title = document.getElementById("blog_sub_title").value;
  var blog_main_description = document.getElementById("blog_main_description").value;
  if(blogger_name == "" || blog_main_title=="" || blog_main_description=="" )
  {
    if(blogger_name == "")
    {
      swal("Must Enter Your Name!!","","error");
    }
    else if(blog_main_title=="")
    {
      swal("Must Enter Title!!","","error");
    }
    else if(blog_main_description=="")
    {
      swal("Must Enter Description!!","","error");
    }
  }
  else
  {
    var section_length = document.getElementsByName("blog_section_title").length;
    for(var i=0; i<section_length; i++)
    {
      if(document.getElementsByName("blog_section_title").item(i).value != "")
      {
        section_title_array[k] = document.getElementsByName("blog_section_title").item(i).value;
        section_description[k] = document.getElementsByName("blog_section_description").item(i).value;
        k++;
      }
    }

    var section_title_array_json = JSON.stringify(section_title_array);
    var section_description_json = JSON.stringify(section_description);

    $.ajax({
      type:"POST",
      url:"save_blog.php",
      data:'date_time='+date_time+'&blogger_name='+blogger_name+'&blog_main_title='+blog_main_title+'&blog_sub_title='+blog_sub_title+'&blog_main_description='+blog_main_description+'&section_title_array_json='+section_title_array_json+'&section_description_json='+section_description_json,
      success: function(data)
      {
        // alert(data);
        document.getElementById("loader").style.display = "none";
        swal("Success","Your Blog Saved Successfully","success");
        document.getElementById("add_blog_div").innerHTML = document.getElementById("add_blog_div").innerHTML;
        document.getElementById("blogger_name").value = "";
      }
    });
  }
  document.getElementById("loader").style.display = "none";
}

</script>