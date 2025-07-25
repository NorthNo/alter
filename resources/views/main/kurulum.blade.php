<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Alter ● {{ $page_name ?? '' }}</title>

    <link rel="shortcut icon" href="/img/minilogo.png" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/stroke.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/style_setup.css">

    <link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shCore.css" media="all">
    <link rel="stylesheet" type="text/css" href="js/syntax-highlighter/styles/shThemeRDark.css" media="all">

    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

    <script>
        var mybutton = document.getElementById("myBtn");
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        function topFunction() {
            window.scrollTo({ top: 0, behavior: 'smooth' })
            document.documentElement.scrollTo({ top: 0, behavior: 'smooth' })
        }

        document.addEventListener("DOMContentLoaded", () => {
            document.querySelector('#mode').addEventListener('click',()=>{
                document.querySelector('html').classList.toggle('dark');
            })
        });


    </script>

    <div id="wrapper">

        <div id="mode" >
            <div class="dark">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>Aydınlık Mod</title>
                    <path fill="currentColor" d="M256 160c-52.9 0-96 43.1-96 96s43.1 96 96 96 96-43.1 96-96-43.1-96-96-96zm246.4 80.5l-94.7-47.3 33.5-100.4c4.5-13.6-8.4-26.5-21.9-21.9l-100.4 33.5-47.4-94.8c-6.4-12.8-24.6-12.8-31 0l-47.3 94.7L92.7 70.8c-13.6-4.5-26.5 8.4-21.9 21.9l33.5 100.4-94.7 47.4c-12.8 6.4-12.8 24.6 0 31l94.7 47.3-33.5 100.5c-4.5 13.6 8.4 26.5 21.9 21.9l100.4-33.5 47.3 94.7c6.4 12.8 24.6 12.8 31 0l47.3-94.7 100.4 33.5c13.6 4.5 26.5-8.4 21.9-21.9l-33.5-100.4 94.7-47.3c13-6.5 13-24.7.2-31.1zm-155.9 106c-49.9 49.9-131.1 49.9-181 0-49.9-49.9-49.9-131.1 0-181 49.9-49.9 131.1-49.9 181 0 49.9 49.9 49.9 131.1 0 181z"></path>
                </svg>
            </div>
            <div class="light">
                <svg aria-hidden="true" viewBox="0 0 512 512">
                    <title>Karanlık Mod</title>
                    <path fill="currentColor" d="M283.211 512c78.962 0 151.079-35.925 198.857-94.792 7.068-8.708-.639-21.43-11.562-19.35-124.203 23.654-238.262-71.576-238.262-196.954 0-72.222 38.662-138.635 101.498-174.394 9.686-5.512 7.25-20.197-3.756-22.23A258.156 258.156 0 0 0 283.211 0c-141.309 0-256 114.511-256 256 0 141.309 114.511 256 256 256z"></path>
                </svg>
            </div>
        </div>

        <div class="container">
            <section id="top" class="section docs-heading">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title text-center">
                            <h1>Alter Kurulum Dokümanları</h1>
                            <p class="lead">Alter / documentation version 1.0</p>
                        </div>
                    </div>
                </div>
                <hr>
            </section>

            <div class="row">

                <div class="col-md-3">
                    <nav class="docs-sidebar" data-spy="affix" data-offset-top="300" data-offset-bottom="200" role="navigation">
                        <ul class="nav">
                            <li><a href="#line1">Getting Started</a></li>
                            <li><a href="#line2">How to Install WordPress</a></li>
                            <li><a href="#line3">How to Install Theme</a></li>
                            <li><a href="#line4">Necessary Plugins</a></li>
                            <li><a href="#line5">Creating Blog Pages</a></li>
                            <li><a href="#line6">Revolution Slider</a></li>
                            <li><a href="#line7">How to Use Option Panel</a>
                                <ul class="nav">
                                    <li><a href="#line7_1">General Options</a></li>
                                    <li><a href="#line7_2">Style Options</a></li>
                                    <li><a href="#line7_3">Header Options</a></li>
                                    <li><a href="#line7_4">Font Options</a></li>
                                    <li><a href="#line7_5">Slider Options</a></li>
                                    <li><a href="#line7_6">Page Options</a></li>
                                    <li><a href="#line7_7">Import & Export</a></li>
                                </ul>
                            </li>
                            <li><a href="#line8">Support Desk</a></li>
                            <li><a href="#line9">Files & Sources</a></li>
                            <li><a href="#line10">Version History (Changelog)</a></li>
                            <li><a href="#line11">Copyright and license</a></li>
                        </ul>
                    </nav >
                </div>
                <div class="col-md-9">
                    <section class="welcome">
                        <div class="row">
                            <div class="col-md-12 left-align">
                               <h2 class="dark-text">Introduction<hr></h2>
                                <div class="row">

                                    <div class="col-md-12 full">
                                        <div class="intro1">
                                            <ul>
                                                <li><strong>Item Name : </strong>Gather Responsive Event Template</li>
                                                <li><strong>Item Version : </strong> v 1.0</li>
                                                <li><strong>Author  : </strong> <a href="http://themeforest.net/user/surjithctly" target="_blank">Surjith S M</a></li>
                                                <li><strong>Support Forum : </strong> <a href="https://support.surjithctly.in/forums" target="_blank">https://support.surjithctly.in/forums</a></li>
                                                <li><strong>License : </strong> <a href="#" target="_blank">Un License</a></li>
                                            </ul>
                                        </div>

                                        <hr>
                                        <div>
                                            <p>First of all, Thank you so much for purchasing this template and for being my loyal customer.
                                                <strong>You are awesome!</strong>
                                                <br> You are entitled to get free lifetime updates to this product + exceptional support from the author directly.
                                            </p>

                                            <p>This documentation is to help you regarding each step of customization. Please go through the documentation carefully to understand how this template is made and how to edit this properly. Basic HTML and CSS knowledge is required to customize this template. You may learn basics from <a href="http://www.w3schools.com/" target="_blank">w3schools</a>, <a href="https://developer.mozilla.org/" target="_blank">Developer.mozilla</a> and <a href="http://learn.shayhowe.com/html-css/building-your-first-web-page/" target="_blank">learn.shayhowe</a>. </p>

                                            <h4>Requirements</h4>
                                            <p>You will need the following sofwares to customize this template.</p>
                                            <ol>
                                                <li>Code Editing Software (eg: Dreamweaver, Sublime Text or Notepad)</li>
                                                <li>Web Browser for testing (eg: Google Chrome or Mozilla Firefox)</li>
                                                <li>FTP Tool to upload files to Server (eg: <a href="https://filezilla-project.org/download.php?type=client" target="_blank">FileZilla</a>) </li>
                                            </ol>
                                            <div class="intro2 clearfix">
                                                <p><i class="fa fa-exclamation-triangle"></i> Be careful while editing the template. If not edited properly, the design layout may break completely.
                                                    <br> No support is provided for faulty customization.
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                    </section>

                    <section id="line1" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Getting Started <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                                <h4>Bootstrap Grid System</h4>

                                <pre class="brush: html; highlight: [2,4]">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        YOUR CODES GOES HERE
                                    </div>
                                </div>
                            </div></pre>

                                <p>Our you can use the grid system with 2 columns like this;</p>

                                <pre class="brush: html">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        YOUR CODES GOES HERE
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        YOUR CODES GOES HERE
                                    </div>
                                </div>
                            </div>
                         </pre>

                                <p>Our you can use the grid system with 3 columns like this;</p>

                                <pre class="brush: html">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        YOUR CODES GOES HERE
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        YOUR CODES GOES HERE
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        YOUR CODES GOES HERE
                                    </div>
                                </div>
                            </div>
                         </pre>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line2" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Install WordPress <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="intro2 clearfix">
                            <p><i class="fa fa-wordpress"></i> Lorem the It is a long established fact that a reader will be distracted..
                                <br> Please read more about WordPress here. <a href="#">WordPress Installation via FTP.</a> </p>
                        </div>

                        <hr>

                        <h4>Upload via WordPress Admin</h4>

                        <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                        <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>
                        <hr>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="media">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/snFzbPm_RUE" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>

                    </section>
                    <!-- end section -->

                    <section id="line3" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Install Theme <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <h4>Upload via WordPress Admin</h4>

                        <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                        <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>

                        <hr>

                        <h4>Upload via FTP Server</h4>

                        <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                        <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="media">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/yQnQyI5WlKs" frameborder="0" allowfullscreen></iframe>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/z0kEVwJB_go" frameborder="0" allowfullscreen></iframe>
                                </div>

                            </div>
                        </div>

                    </section>
                    <!-- end section -->

                    <section id="line4" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Necessary Plugins <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <img src="images/upload/plugin1.png" alt="" class="img-responsive img-thumbnail">
                                <h4>Plugin name #1</h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                            </div>
                            <!-- end col -->

                            <div class="col-md-4">
                                <img src="images/upload/plugin2.png" alt="" class="img-responsive img-thumbnail">
                                <h4>Plugin name #2</h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                            </div>
                            <!-- end col -->

                            <div class="col-md-4">
                                <img src="images/upload/plugin3.png" alt="" class="img-responsive img-thumbnail">
                                <h4>Plugin name #3</h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                            </div>
                            <!-- end col -->

                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

                                <div class="text-center">
                                    <a href="#" class="btn btn-primary">Get a Installation Service</a> <a href="#" class="btn btn-info">Ask a Question</a>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line5" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Creating Blog Pages <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>

                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                                <h4 id="line5_1">WordPress Blog Page -</h4>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <!-- end col -->

                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                                <h4 id="line5_2">Blog Post Sections -</h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <!-- end col -->

                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                                <h4 id="line5_3">Create Blog Gallery -</h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line6" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Install Revolution Slider <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-md-12">
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                            </div>

                            <div class="col-md-6">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                                <h4>Installation Slider</h4>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <!-- end col -->

                            <div class="col-md-6">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                                <h4>Updating Slider</h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</p>
                                <ul>
                                    <li><strong>Step 1</strong> - Lorem the It is a long established fact that a reader ease read more about WordPress here.</li>
                                    <li><strong>Step 2</strong> - Lorem the It is a long established fact that a reader will be distracted.. Please read more about WordPress here.</li>
                                    <li><strong>Step 3</strong> - Lorem the It is a long established fact that a read.</li>
                                </ul>
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line7" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">How to Use Option Panel <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_1">General Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_2">Style Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_3">Header Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_4">Font Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_5">Slider Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_6">Page Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <hr>

                        <div class="row">
                            <div class="col-md-4">
                                <a href="upload/thumbnail.png" data-rel="prettyPhoto"><img src="images/upload/thumbnail.png" alt="" class="img-responsive img-thumbnail"></a>
                            </div>

                            <div class="col-md-8">
                                <h4 id="line7_7">Import & Export Options - </h4>
                                <p>Lorem the It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. long established fact that a reader will English.</p>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line8" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Support Desk <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <p>Please remember you have purchased a very affordable theme and you have not paid for a full-time web design agency. Occasionally we will help with small tweaks, but these requests will be put on a lower priority due to their nature. Support is also 100% optional and we provide it for your connivence, so please be patient, polite and respectful.</p>

                                <p>Please visit our <a href="http://themeforest.net/user/yourusername"><strong>profile page</strong></a> or ask question <a href="mailto:yourusername@gmail.com">@yourusername</a></p>

                                <strong>Support for my items includes:</strong>
                                <ul>
                                    <li>* Responding to questions or problems regarding the item and its features</li>
                                    <li>* Fixing bugs and reported issues</li>
                                    <li>* Providing updates to ensure compatibility with new software versions</li>
                                </ul>
                                <strong>Item support does not include:</strong>
                                <ul>
                                    <li>* Customization and installation services</li>
                                    <li>* Support for third party software and plug-ins</li>
                                </ul>

                            </div>

                            <div class="col-md-6">
                                <strong>Before seeking support, please...</strong>
                                <ul>
                                    <li>* Make sure your question is a valid Theme Issue and not a customization request.</li>
                                    <li>* Make sure you have read through the documentation and any related video guides before asking support on how to accomplish a task.</li>
                                    <li>* Make sure to double check the theme FAQs.</li>
                                    <li>* Try disabling any active plugins to make sure there isn't a conflict with a plugin. And if there is this way you can let us know.</li>
                                    <li>* If you have customized your theme and now have an issue, back-track to make sure you didn't make a mistake. If you have made changes and can't find the issue, please provide us with your changelog.</li>
                                    <li>* Almost 80% of the time we find that the solution to people's issues can be solved with a simple "Google Search". You might want to try that before seeking support. You might be able to fix the issue yourself much quicker than we can respond to your request.</li>
                                    <li>* Make sure to state the name of the theme you are having issues with when requesting support via ThemeForest.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line9" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Files & Sources <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <strong>Included Stylesheets</strong>

                                <p>These are the primary CSS files used for general front-end styling. Use these to customize your theme even further. All included JavaScript codes under <strong>yourthemename/css/</strong></p>

                                <ul>
                                    <li>1. style.css - Primary stylesheet</li>
                                    <li>2. bootstrap.css - Bootstrap stylesheet</li>
                                    <li>3. owl-carousel.css - OWL Carousel</li>
                                    <li>4. fontawesome.css - FontAwesome Font Icons stylesheet</li>
                                    <li>5. custom.css - Pathos Color Schemes stylesheet</li>
                                    <li>6. prettyPhoto.css - Lightbox effect css file</li>
                                    <li>7. flexslider.css - Flexslider css file</li>
                                    <li>8. et-line.css - Elegant icons css file</li>
                                    <li>9. carousel.css - OWL Carousel css file</li>
                                    <li>10. animate.css - CSS3 animations css file</li>
                                </ul>

                            </div>

                            <div class="col-md-6">
                                <strong>Included JavaScript</strong>

                                <p>These are the various attribution inks to the Javascript files included or modified to work with in this theme. All included JavaScript codes under <strong>yourthemename/js/</strong></p>

                                <ul>
                                    <li>1. bootstrap.js - Bootstrap JavaScript</li>
                                    <li>2. custom.js - All JavaScript Plugins</li>
                                    <li>3. retina.js - Retina JavaScript</li>
                                    <li>4. jquery.js - Base JavaScript</li>
                                    <li>5. prettyPhoto.js - Lightbox JavaScript</li>
                                    <li>6. owl-carousel.js - Lightbox JavaScript</li>
                                    <li>7. revslider.js - Revolution Slider JavaScript</li>
                                    <li>8. flexslider.js - Flexslider JavaScript</li>
                                    <li>9. awesome-grid.nin.js - Awesome grid portfolio JavaScript</li>
                                    <li>10. circle.js - Coming soon page JavaScript</li>
                                    <li>11. contact.js - Contact form validate JavaScript</li>
                                    <li>12. isotope.js - Masonry Portfolio JavaScript</li>
                                    <li>13. progress.js - Progress bar JavaScript</li>
                                    <li>14. rotate.js - Text rotate effect JavaScript</li>
                                    <li>15. wow.js - CSS3 animation JavaScript</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line10" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Version History (Changelog) <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">

                                <p>You can find the version history (changelog.txt) file on <strong>yourthemename-full.zip</strong> folder or you can check changelog on theme sale page.</p>
                                <p>Once again, thank you so much for purchasing this theme. As I said at the beginning, I'd be glad to help you if you have any questions relating to this theme. No guarantees, but I'll do my best to assist. If you have a more general question relating to the themes on ThemeForest, you might consider visiting the forums and asking your question in the "Item Discussion" section.</p>

                                <hr>

                                <h4>Changelog</h4>

                                <pre class="brush: html">

                                        -----------------------------------------------------------------------------------------
                                        Version 3.8.4 - May 7th, 2015
                                        -----------------------------------------------------------------------------------------

                                        - new revolution slider plugin version
                                        - fixed security issue with xss vulnerability
                                        - improved demo importer for certain server environments
                                        - updated WooCommerce template files for the outdated message in system status
                                        - added suhosin check in system status 
                                        - added information that explains ZipArchive is required on your server for importing demos 
                                        - portfolio Grid template improvement
                                        - added more information to demo popup message for individual demo requirements
                                        - RTL style improvements
                                        - breadcrumb function improved for various areas

                                        -----------------------------------------------------------------------------------------
                                        Version 3.8.3 - May 7th, 2015
                                        -----------------------------------------------------------------------------------------
                                        - fixed responsive / retina issue for larger logos
                                        - fusion slider now uses responsive headings all the time
                                        - dropped custom Avada styles for select boxes in IE since it is not supported
                                        - fixed compatibility issue with Category Order and Taxonomy Terms Order plugin
                                        - fixed issue of full width background being affected by padding options
                                        - tested and fixed hellobar issue 
                                        - typography settings now apply to single post pages
                                        - improved smooth scroll in certain situations
                                        - youtube & vimeo videos will show at normal size in light box as long as video embed link is not used
                                        - fixed issue of â€œfixedâ€ featured image mode not working for carousels / recent work
                                        - fixed issue of header tagline font not working with font options

                                        -----------------------------------------------------------------------------------------
                                        Version 3.8.2 - May 7th, 2015
                                        -----------------------------------------------------------------------------------------
                                        - fixed formatting issues with Turkish language files 
                                        - letter spacing menu option improvement
                                        - improved fusion slider max content width setting
                                        - removed the â€œdisable first featured image on productsâ€ setting since it does not apply
                                        - improved portfolio featured image loading
                                        - removed encoding from tracking code, space before head, space before body, and custom CSS to stop it from parsing code within TO and removing special characters e.g. +
                                        - woo login box now shows login fields for logged out users
                                        - woo cart / my account links now show on mobile 
                                        - fixed button styling issue with gravity forms


                                      </pre>

                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->

                    <section id="line11" class="section">

                        <div class="row">
                            <div class="col-md-12 left-align">
                                <h2 class="dark-text">Copyright and license <hr></h2>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                
                                <p>Code released under the <a href="#" target="_blank">Un License</a> License.</p>                        
                                <p>For more information about copyright and license check <a href=" https://choosealicense.com/licenses/unlicense/" target="_blank">choosealicense.com</a>.</p>
                            
                            </div>
                        </div>
                        <!-- end row -->

                    </section>
                    <!-- end section -->
                </div>
                <!-- // end .col -->

            </div>
            <!-- // end .row -->

        </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>

    <!-- CUSTOM PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/main.js"></script>

    <script src="js/syntax-highlighter/scripts/shCore.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushXml.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushCss.js"></script>
    <script src="js/syntax-highlighter/scripts/shBrushJScript.js"></script>

</body>

</html>
