<!DOCTYPE html>
<html lang="en">
<head>
    <title>صفحه ی اصلی</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="../js/src/jquery-3.2.1.min%20(1).js"></script>
    <link rel="stylesheet" href="../resourse/bootstrap-3.3.7-dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../resourse/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/home.css">
    <link rel="stylesheet" href="../style/css/basics.css">
</head>
<body>

<div class="container-fluid">
<!--------------------------------------------- header ------------------------------------------------------------------------------>
        <div class="row">
                <div id="location" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#location" data-slide-to="0"></li>
                        <li data-target="#location" data-slide-to="1"></li>
                        <li data-target="#location" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive header-img" src="../imgs/smartphones-technology-website-header.jpg" width="100%">
                        </div>
                        <div class="item">
                            <img class="img-responsive header-img"  src="../imgs/smartphones-technology-website-header.jpg" width="100%">
                        </div>
                        <div class="item">
                            <img class="img-responsive header-img" src="../imgs/smartphones-technology-website-header.jpg" width="100%">
                        </div>
                    </div>
                    <a class="right carousel-control" href="#location" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a class="left carousel-control" href="#location" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
            </div>
        </div>
<!--------------------------------------------------------- navbar ------------------------------------------------------------------>
        <div class="row" id="fist-row">
            <nav class="  navbar-inverse " role="navigation" id="hor-nav">
                <div class="navbar-header navbar-right">
                    <button type="button" class="navbar-toggle"
                            data-toggle="collapse" data-target="#collapse">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">تــعــمــیـــــــرگــاه</a>
                </div>
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a >آگهی ها</a></li>
                        <li><a class="active" href="singIn.php">ثبت نام</a></li>
                        <li><a href="logIN.php">ورود به سایت</a></li>
                        <li><a href="ac2.php">ثبت آگهی</a></li>
                        <li><a href="#">درباره ی ما</a></li>
                    </ul>
                </div>
            </nav>
        </div>
<!-------------------------------------------------search and selector-------------------------------------------------------------------->
        <div class="row" id="second-row">
            <div id="search_select_div" class="col-sm-9 col-sm-offset-1">
                <form  class="form-inline">
                    <select class="form-control" name="آگهی ها" id="selector1">
                        <option selected = "selected">دسته را انتخاب کنید</option>
                        <option value="لبتاب">لبتاب</option>
                        <option value="موبایل">موبایل</option>
                        <option value="قطعات">قطعات</option>
                    </select>
                    <select class="form-control" id="selector2">
                        <option selected = "selected">دسته را انتخاب کنید</option>
                        <option value="لبتاب">لبتاب</option>
                        <option value="موبایل">موبایل</option>
                        <option value="قطعات">قطعات</option>
                    </select>
                    <div id="search">
                        <input id="text_search" type="text" class="form-control">
                        <button id="search_btn" type="submit" class="btn"><i id="search_gly" class="glyphicon glyphicon-search"></i></button>
                    </div>
                </form>

<!---------------------------------------------------- sec ----------------------------------------------------------------------------->
                <div id="sec_rapper">
                    <div class="row">
                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>

                        <div class="col-sm-4 sec-content last-item">
                            <img class="img-responsive como_img" src="../imgs/apple-iphone-7-plus-gallery-img-6.jpg" height="150px">
                            <h6 class="como_name">حسنعلی نیکنام</h6>
                            <p class="price-par">قیمت توافقی</p>
                        </div>
                    </div>
                </div>
            </div>


<!------------------------------------------------------ slider -------------------------------------------------------------------------->
            <div class="col-sm-2 text-center " id="ver-nav">
                    <div id="slider_rapper">
                        <ul class="nav nav-tabs nav-stacked dynamic-slider" id="slider_list">
                            <li><a class="slider-link" id="item_0" href="#">لوازم الکترونیک</a></li>
                            <li><a class="slider-link" id="item_1"  href="#">سرگرمی وفراغت</a></li>
                            <li><a class="slider-link" id="item_2"  href="#">اجتماعی</a></li>
                            <li><a class="slider-link" id="item_3"  href="#">کسب و کار</a></li>
                        </ul>
                    </div>
            </div>
        </div>
        <div id="loading"></div>

<!---------------------------------------------------- footer ----------------------------------------------------------------------->
    <div class="navbar navbar-fixed-bottom" id="footer">
        <p id="footer_text">    تمامی خدمات این فروشگاه، حسب مورد دارای مجوزهای لازم از مراجع مربوطه می‌باشد و فعالیت‌های این سایت تابع قوانین و مقررات جمهوری اسلامی ایران است.
        </p>
    </div>

</div>
    <script src="../js/src/jquery-3.2.1.min%20(1).js"></script>
    <script src="../js/jquery/selectorsJs.js"></script>
    <script src="../js/jsFiles/scroll.js"></script>
    <script src="../js/jquery/sliderPosition.js"></script>
    <script src="../js/jquery/slider.js"></script>
    <script type="javascript" src="../js/jquery/slider.js"></script>
    <script src="../resourse/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>