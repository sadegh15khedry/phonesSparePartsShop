<!DOCTYPE html>
<html lang="en">
<head>
    <title>ac2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../js/src/jquery-3.2.1.min%20(1).js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/ac2.css">
    <link rel="stylesheet" href="../resourse/bootstrap-3.3.7-dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="../resourse/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/css/basics.css">
</head>
<body>
<div class="container-fluid">


    <!-------------------------------------- navbar ------------------------------------->
    <div class="row">
        <nav class="navbar-inverse" role="navigation" id="hor-nav">
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



    <div class="row"  id="second_row">
        <form id="add_como_form" action="" >
<!---------------------------------------------------------- first col ------------------------------------------------------------->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sm-push-6" id="first_col">
        <!------------------ first select ----------------------->
        <div class="form-group">
            <label class="form-label" for="first_select" >دسته</label>
            <select id="first_select" class="form-control">
                <option value="nothing">دسته را انتخاب کنید</option>
                <option value="labtop">لبتاب</option>
                <option value="mobile">موبایل</option>
                <option value="other">لوازم جانبی</option>
            </select>
        </div>
        <!------------------ second select ----------------------->
        <div id="second_select_div" class="form-group display-none">
            <label class="form-label" for="second_select">دسته</label>
            <select class="form-control" id="second_select">
                <!--<option value="nothing">دسته را انتخاب کنید</option>-->
                <option value="labtop">لبتاب</option>
                <option value="labtop">لبتاب</option>
                <option value="labtop">لبتاب</option>
                <option value="labtop">لبتاب</option>
            </select>
        </div>
        <!------------------ third select ----------------------->
        <div id="third_select_div" class="form-group display-none">
            <label class="form-label" for="third_select">دسته</label>
            <select class="form-control" id="third_select">
                <option value="labtop">لوازم جانبی</option>
                <option value="hello">لوازم جانبی</option>
                <option value="akbar">لوازم جانبی</option>
                <option value="asghar">لوازم جانبی</option>
            </select>
        </div>

        <!-------------------- radio ----------------------->
        <div id="ad_type_div" class="form-group display-none">
            <label class="form-label" for="price_radio">نوع آگهی</label>
            <div id="price_radio">
                <label for="for_sale_radio" id="first_radio_label" class="radio_label">فروشی</label>
                <input name="type_radio" id="for_sale_radio" class="radio_btn" type="radio" value="for_sell1">
                <label  for="for_buy_radio" class="radio_label">درخواستی</label>
                <input name="type_radio" id="for_buy_radio" class="radio_btn" type="radio" value="for_sell2">
                <label  for="for_rent_radio" class="radio_label">کرایه</label>
                <input name="type_radio" id="for_rent_radio" class="radio_btn" type="radio" value="for_sell3">
                <div id="ad_type_err" class="text_err"></div>
            </div>

        </div>

        <!------------------ img stuff ----------------------->
        <div id="img_div" class="form-group display-none">
            <label class="form-label" for="adding_pic">عکس</label>
            <button href="#" class="btn form-control" id="adding_pic">افزودن عکس</button>
        </div>
    </div>






<!----------------------------------------------------- second col ------------------------------------------------------------------->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-sm-pull-6 display-none" id="second_col">
                    <div id="price_stuff_div2" class="form-group display-none">
                        <label class="form-label" for="price_div" >قیمت</label>
                        <div id="price_div">
                            <label for="tavafoghi" id="first_radio_label2" class="radio_label">توافقی</label>
                            <input name="type_radio2" id="tavafoghi" class="radio_btn" type="radio" value="for_sell1">
                            <label  for="maghto" class="radio_label">مقطوع</label>
                            <input name="type_radio2" id="maghto" class="radio_btn" type="radio" value="for_sell2">
                            <div id="price_radio_err" class="text_err"></div>
                        </div>
                        <div id="p_rapper">
                            <input id="price_number_field" class="form-control" type="text" placeholder="قیمت">
                            <div id="price_num_err" class="text_err"></div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="form-label" for="city_select_field">شهر</label>
                        <select class="form-control" id="city_select_field">
                            <option value="other">بوشهر</option>
                            <option value="other">بوشهر</option>
                            <option value="other">بوشهر</option>
                            <option value="other">بوشهر</option>
                        </select>
                        <div id="city_err" class="text_err"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="title_field">عنوان</label>
                        <input id="title_field" type="text" class="form-control">
                        <div id="title_err" class="text_err"></div>
                    </div>
                    <div class="form-group">
                        <label for="details" class="form_label">توضیحات</label>
                        <textarea placeholder="جزییات را وارد کنید" class="form-control" id="details"></textarea>
                    </div>
                </div>


            <div id="btn_div" class="row ">
                <button class="btn form-control display-none" type="submit" id="submit_btn">ثبت آگهی</button>
            </div>
        </form>
    </div>






<!------------------------------------------------------------ footer --------------------------------------------------------------->

    <div class="navbar navbar-fixed-bottom" id="footer">
        <p id="footer_text">    تمامی خدمات این فروشگاه، حسب مورد دارای مجوزهای لازم از مراجع مربوطه می‌باشد و فعالیت‌های این سایت تابع قوانین و مقررات جمهوری اسلامی ایران است.
        </p>
    </div>
</div>
<script src="../js/src/jquery-3.2.1.min.js"></script>
<script src="../resourse/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="../js/jquery/formAnimation.js"></script>
<script src="../js/jquery/acValidation.js"></script>

</body>
</html>