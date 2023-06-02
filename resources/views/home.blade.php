<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>الاستبيان</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- import ajax , jquery , bootstrap , stylesheet --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('fonts/alfont_com_AlFont_com_AvenirArabic-Medium.otf') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>
    <!-- Multi step form -->
    <section class="multi_step_form">
        <div id="msform">

            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active" style="padding-bottom: 5px;">تسجيل بيانات المركز</li>
                <li>تسجيل بيانات المختصين</li>
                <li>تاكيد التسجيل</li>
                <a href="https://massage1.net/"><img src="img/logo.png" alt="img" class="img-circle"></a>
            </ul>

            <!-- fieldsets -->
            <form id="my-form">
                <!-- step 1 -->
                <fieldset class="step-one">

                    <div class="form-group">
                        <label style="margin-bottom: 5px !important;"> <span style="color: red;">*</span> اسم
                            المركز</label>
                        <input name="name_center" id="name_center" type="text" placeholder="ادخل اسم المركز"
                            class="form-control" required>
                        <span class="error">.هذا الحقل اجباري</span>
                    </div>

                    <div class="form-group">
                        <label style="margin-bottom:7px !important;"><span style="color: red;">*</span> المدينه</label>
                        <input name="city" id="city" type="text" placeholder="ادخل اسم المدينه"
                            class="form-control" required>
                        <span class="error" id="error">.هذا الحقل اجباري</span>
                    </div>

                    <div class="form-group">
                        <label style="margin-bottom:7px !important;"> الحي</label>
                        <input name="district" id="district" type="text" placeholder="ادخل اسم الحي "
                            class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="margin-bottom:7px !important;"><span style="color: red;">*</span> وصف الموقع
                        </label>
                        <textarea name="location" id="location" type="text" placeholder="ادخل موقعك " rows="3" class="form-control"
                            style="height: 80px;" required></textarea>
                        <span class="error" id="error">.هذا الحقل اجباري</span>
                    </div>

                    <div class="form-group">
                        <label style="margin-bottom: 5px !important;text-align:right;"><span
                                style="color: red;">*</span> نوع الخدمه</label>
                        <select class="product_select" name='gender' id="gender" required>
                            <option data-display="اختر النوع" selected disabled>أختر النوع</option>
                            <option value="رجال">رجال</option>
                            <option value="نساء">نساء</option>
                            <option value="الكل">الكل</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label style="margin-top:25px !important;"><span style="color: red;">*</span> الخدمه</label>
                        <select class="product_select" onchange="yesnoCheck(this);" name="type" id="type"
                            required>
                            <option data-display="اختر مكان الخدمه" selected disabled>أختر النوع</option>
                            <option value="منزلي">منزلي</option>
                            <option value="مركز">مركز</option>
                            <option value="الكل">الكل</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label style="margin-top:25px !important;width: 100% !important;"><span
                                style="color: red;">*</span>الخدمات الاضافيه المقدمه </label>
                        <div id="options-circle">

                            <div class="option-circle option-small" onclick="selectOption(1)" data-value="جاكوزي">
                                <span>جاكوزي</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-small" onclick="selectOption(2)" data-value="حجامه">
                                <span>حجامه</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-small" onclick="selectOption(3)"
                                data-value="حمام مغربي">
                                <span>حمام مغربي</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                        </div>

                        <div id="options-circle">

                            <div class="option-circle option-small" onclick="selectOption(4)" data-value="بدكير">
                                <span> بدكير</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-small" onclick="selectOption(5)" data-value="منكير">
                                <span>منكير </span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-small" onclick="selectOption(6)" data-value="تسريح شعر">
                                <span>تسريح شعر</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                        </div>

                        <div id="options-circle" class="option-custome">
                            <div class="option-circle option-small" onclick="selectOption(7)" data-value="ميكب">
                                <span>ميكب</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                        </div>

                        <a href="#" data-bs-toggle="modal" class="link-add" data-bs-target="#exampleModal1"><i
                                class="fa-sharp fa-solid fa-plus"></i> اضافه خدمه</a>

                    </div>

                    <div id="ifYes" class="form-group" style="display:none;">
                        <label style="margin-top:25px;">عدد المختصين المنزلي</label>
                        <input name="count_home" id="count_home" type="number"
                            placeholder=" أدخل عدد المختصين المنزليين" class="form-control">
                    </div>

                    <div id="ifNo" class="form-group">
                        <div>
                            <label> انواع المساج المقدمة داخل المركز</label>

                            <div id="options-circle" onchange="yesnoCheck(this);">

                                <div class="option-circle option-large" onclick="selectedOptionsCenter(8)"
                                    data-value="مساج استرخائي">
                                    <span>مساج استرخائي</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-large" onclick="selectedOptionsCenter(9)"
                                    data-value="مساج تايلندي">
                                    <span>مساج تايلندي</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-large" onclick="selectedOptionsCenter(10)"
                                    data-value="مساج سويدي">
                                    <span>مساج سويدي</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                            </div>

                            <div id="options-circle">
                                <div class="option-circle option-large" onclick="selectedOptionsCenter(11)"
                                    data-value="مساج شياتسو">
                                    <span> مساج شياتسو</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-large" onclick="selectedOptionsCenter(12)"
                                    data-value="مساج رياضي">
                                    <span> مساج رياضي</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-large option-custome-large"
                                    onclick="selectedOptionsCenter(13)" data-value="مساج ماقبل الولاده">
                                    <span>مساج ماقبل الولاده</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="options-circle" class="d-flex justify-content-center">
                                            <div class="option-circle option-large"
                                                onclick="selectedOptionsCenter(14)" data-value="مساج الانسجه الناعمه">
                                                <span>مساج الانسجه الناعمه</span>
                                                <div class="i-circle">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                            </div>

                                            <div class="option-circle option-large"
                                                onclick="selectedOptionsCenter(15)" data-value="مساج الانسجه العميقه">
                                                <span>مساج الانسجة العميقة</span>
                                                <div class="i-circle">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                            </div>

                                            <div class="option-circle option-large"
                                                onclick="selectedOptionsCenter(16)" data-value="مساج الاحجار الساخنه">
                                                <span>مساج الاحجار الساخنة</span>
                                                <div class="i-circle">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="options-circle" class="d-flex justify-content-center">


                                            <div class="option-circle option-large option-custome-large"
                                                onclick="selectedOptionsCenter(17)" data-value="مساج بالزيوت العطريه">
                                                <span>مساج بالزيوت العطريه</span>
                                                <div class="i-circle">
                                                    <i class="fa-solid fa-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                        <a href="#" data-bs-toggle="modal" class="link-add" data-bs-target="#exampleModal2"><i
                                class="fa-sharp fa-solid fa-plus"></i> اضافه نوع مساج</a>
                    </div>

                    <div class="form-group" id="pricing_step_one">
                        <label class="response-mobile">حدد سعر ومده جلسه المساج داخل المركز </label>

                        <div id="options-circle" style="margin-bottom: 20px;">

                            <div class="option-circle option-small">
                                <div class="parent-circle" onclick="time(18);" data-value="0:30 د">
                                    <span> 0:30 د</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price" type="text" onchange="time(18);" class="price-input"
                                    placeholder="السعر" style="height: 33px;">
                            </div>

                            <div class="option-circle option-small ">
                                <div class="parent-circle" onclick="time(19)" data-value="0:45 د">
                                    <span> 0:45 د</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text" onchange="time(19);" class="price-input"
                                    placeholder="السعر" style="display: none;height: 33px;">
                            </div>

                            <div class="option-circle option-small">
                                <div class="parent-circle" onclick="time(20)" data-value="1:00 س">
                                    <span>1:00 س </span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text" onchange="time(20);" class="price-input"
                                    placeholder="السعر" style="display: none;height: 33px;">
                            </div>

                        </div>

                        <div id="options-circle">
                            <div class="option-circle option-small ">
                                <div class="parent-circle" onclick="time(21)" data-value="1:30 س">
                                    <span>1:30 س</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text" onchange="time(21);" class="price-input"
                                    placeholder="السعر" style="display: none;height: 33px;">
                            </div>

                            <div class="option-circle option-small ">
                                <div class="parent-circle" onclick="time(22)" data-value="2:00 س">
                                    <span> 2:00 س</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text" onchange="time(22);" class="price-input"
                                    placeholder="السعر" style="display: none;height: 33px;">
                            </div>

                            <div class="option-circle option-small">
                                <div class="parent-circle" onclick="time(23)" data-value="2:30 س">
                                    <span>2:30 س</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text" onchange="time(23);" class="price-input"
                                    placeholder="السعر" style="display: none;height: 33px;">
                            </div>

                        </div>

                        <div id="options-circle" style="margin-top: 20px;">
                            <div class="option-circle option-small">
                                <div class="parent-circle" onclick="time(24)" data-value="3:00 س">
                                    <span> 3:00 س</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text" onchange="time(24);" placeholder="السعر"
                                    class="price-input" style="display: none;height: 33px;">
                            </div>

                            <div class="option-circle option-small">
                                <div class="parent-circle" onclick="time(25)" data-value="3:30 س">
                                    <span> 3:30 س</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text" onchange="time(25);" placeholder="السعر"
                                    class="price-input" style="display: none;height: 33px;">
                            </div>

                        </div>

                    </div>

                    <div class="form-group" id="free-product" style="display: none;">
                        <label class="response-mobile-2">الخدمات المجانية المقدمة مع جلسة المساج داخل المركز</label>

                        <div id="options-circle">
                            <div class="option-circle option-middle" onclick="selectedfreServ(26)"
                                data-value="عدد 1 منشفه">
                                <span>عدد 1 منشفه</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-middle" onclick="selectedfreServ(27)"
                                data-value="عدد 2 منشفه">
                                <span>عدد 2 منشفه</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-middle" onclick="selectedfreServ(28)"
                                data-value="عدد 3 منشفه">
                                <span>عدد 3 منشفه</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                        </div>

                        <div id="options-circle">
                            <div class="option-circle option-middle" onclick="selectedfreServ(29)" data-value="شموع">
                                <span>شموع</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-middle" onclick="selectedfreServ(30)"
                                data-value="زيوت مساج">
                                <span>زيوت مساج</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-middle" onclick="selectedfreServ(31)"
                                data-value="زيوت عطرية">
                                <span>زيوت عطرية</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                        </div>

                        <div id="options-circle">
                            <div class="option-circle option-large" onclick="selectedfreServ(32)"
                                data-value="سرير مساج خاص">
                                <span>سرير مساج خاص</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-large" onclick="selectedfreServ(33)"
                                data-value="جهاز تدليك للجسم">
                                <span>جهاز تدليك للجسم</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>

                            <div class="option-circle option-large" onclick="selectedfreServ(34)"
                                data-value="جهاز تدليك للاقدام">
                                <span>جهاز تدليك للاقدام</span>
                                <div class="i-circle">
                                    <i class="fa-solid fa-check"></i>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="link-add" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            <i class="fa-sharp fa-solid fa-plus"></i> اضافه خدمه
                        </a>
                    </div>


                    <div class="form-group" id="price-private" style="display: none;">
                        <label class="response-mobile-3">الخدمات المدفوعه المقدمه مع جلسه المساج
                            داخل المركز</label>
                        <div id="options-circle">

                            <div class="option-circle">
                                <div class="parent-circle option-middle" onclick="servicePriceCenter(35)"
                                    data-value="شموع عطريه">
                                    <span>شموع عطريه</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" type="text"
                                    class="price-input"onchange="servicePriceCenter(35)" placeholder="السعر"
                                    style="display: none;height: 33px;">
                            </div>

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="servicePriceCenter(36)" data-value="مناشف">
                                    <span>مناشف</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" onchange="servicePriceCenter(36)"
                                    type="text"placeholder="السعر"
                                    class="price-input"style="display: none;height: 33px;">
                            </div>

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="servicePriceCenter(37)" data-value="جهاز تدليك">
                                    <span>جهاز تدليك</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" onchange="servicePriceCenter(37)" type="text"
                                    placeholder="السعر" class="price-input" style="display: none;height: 33px;">
                            </div>

                        </div>

                        <div id="options-circle">
                            <div class="option-circle option-large"
                                style="margin-top: 50px;position: relative;left:15px !important;">
                                <div class="parent-circle" onclick="servicePriceCenter(38)"
                                    data-value="زيوت عطريه خاصه">
                                    <span> زيوت عطريه خاصه</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <input name="price[]" onchange="servicePriceCenter(38)" type="text"
                                    class="price-input" placeholder="السعر" style="display: none;height: 33px;">
                            </div>
                        </div>

                        <a href="#" data-bs-toggle="modal" class="link-add" data-bs-target="#exampleModal4"><i
                                class="fa-sharp fa-solid fa-plus"></i> اضافه خدمه</a>

                    </div>

                    <div class="form-group">
                        <label style="margin-top: 35px !important;"><span style="color: red;">*</span> الدوام
                            الرسمي</label>
                        <div id="options-circle" style="margin-bottom: 18px !important;">

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="dayCenter(39)" data-value="السبت">
                                    <span>السيت</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div onchange="dayCenter(39)" class="selectt" style="display: none;">
                                    <select id="to-time" name="to-time">
                                        <option value="" disabled selected>الي</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>

                                    <select id="from-time" name="from-time">
                                        <option value="" disabled selected>من</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                </div>

                            </div>

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="dayCenter(40)" data-value="الاحد">
                                    <span>الاحد</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="selectt" style="display: none;" onchange="dayCenter(40)">
                                    <select id="to-time" name="to-time">
                                        <option value="" disabled selected>الي</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>

                                    <select id="from-time" name="from-time">
                                        <option value="" disabled selected>من</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                </div>

                            </div>

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="dayCenter(41)" data-value="الاثنين">
                                    <span>الاثنين</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="selectt" style="display: none;" onchange="dayCenter(41)">
                                    <select id="to-time" name="to-time">
                                        <option value="" disabled selected>الي</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>

                                    <select id="from-time" name="from-time">
                                        <option value="" disabled selected>من</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div id="options-circle">

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="dayCenter(42)" data-value="الثلاثاء">
                                    <span>الثلاثاء</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="selectt" style="display: none;" onchange="dayCenter(42)">
                                    <select id="to-time" name="to-time">
                                        <option value="" disabled selected>الي</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>

                                    <select id="from-time" name="from-time">
                                        <option value="" disabled selected>من</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="dayCenter(43)" data-value="الاربعاء">
                                    <span>الاربعاء</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="selectt" style="display: none;" onchange="dayCenter(43)">
                                    <select id="to-time" name="to-time">
                                        <option value="" disabled selected>الي</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>

                                    <select id="from-time" name="from-time">
                                        <option value="" disabled selected>من</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="dayCenter(44)" data-value="الخميس">
                                    <span>الخميس</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="selectt" style="display: none;" onchange="dayCenter(44)">
                                    <select id="to-time" name="to-time">
                                        <option value="" disabled selected>الي</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>

                                    <select id="from-time" name="from-time">
                                        <option value="" disabled selected>من</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div id="options-circle" style="margin-top: 20px;">
                            <div class="option-circle option-middle">
                                <div class="parent-circle" onclick="dayCenter(45)" data-value="الجمعه">
                                    <span>الجمعه</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="selectt" style="display: none;" onchange="dayCenter(45)">
                                    <select id="to-time" name="to-time">
                                        <option value="" disabled selected>الي</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>

                                    <select id="from-time" name="from-time">
                                        <option value="" disabled selected>من</option>
                                        <option value="">الغاء</option>
                                        @for ($i = 1; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}:00</option>
                                        @endfor
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div>
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span> اسم
                                المسؤول
                            </label>
                            <input name="maneger_person" id="maneger_person" type="text"
                                placeholder="ادخل اسم المسؤول" class="form-control">
                            <span class="error">.هذا الحقل اجباري</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span> رقم جوال
                                المسؤول
                            </label>
                            <input name="phone_maneger" id="phone_maneger" type="tel"
                                placeholder="ادخل جوال المسؤول" class="form-control" required>
                            <span class="error">.هذا الحقل اجباري</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span> ايميل
                                التسجيل</label>
                            <input name="email_maneger" id="email_maneger" type="email"
                                placeholder="ادخل الايميل المراد التسجيل به" class="form-control" required>
                            <span class="error">.هذا الحقل اجباري</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span> جوال العمل
                                الرسمي
                            </label>
                            <input name="phone_work" id="phone_work" type="text" placeholder="ادخل الجوال الرسمي"
                                class="form-control" required>
                            <span class="error">.هذا الحقل اجباري</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span> جوال
                                الماليه
                            </label>
                            <input name="phone_mony" id="phone_mony" type="text"
                                placeholder="رقم الجوال الذي من خلاله يستطيع المسؤول سحب الاموال من لوحه التحكم "
                                class="form-control" required>
                            <span class="error">.هذا الحقل اجباري</span>

                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <label class="response-mobile" style="margin-top: 10px !important;"> <span class=" "
                                    style="color: red;font-size: 12px;">( يساعدك على الظهور للعملاء
                                    )</span> صف نفسك
                            </label>
                            <textarea name="about_center" id="about_center" type="text" rows="3" style="height: 150px;"
                                placeholder="نحن مركز الافضل نعمل منذ 9 سنوات في مجال المساج والعنايه ونقدم افضل انواع المساج على ايدي افضل المختصين من الفلبين ويتمتع المركز بموقعه المميز على شارع احمد ويطل على الشاطئ وبقربه من مراكز الفعاليات الموسميه"
                                class="form-control"></textarea>
                        </div>
                    </div>

                    <button type="button" class="next action-button btn-step-one continue">التالي</button>

                </fieldset>

                <!-- step 2 -->
                <fieldset>

                    <div id="step-two">

                        <div class="form-group">
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span> الاسم
                                الاول</label>
                            <input name="fname" type="text" placeholder=" الاسم الاول" class="form-control"
                                id="fname">
                        </div>

                        <div class="form-group">
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span> الاسم
                                الثاني</label>
                            <input name="lname" type="text" id="lname" placeholder=" الاسم الثاني"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span>الجنسية
                            </label>
                            <input name="nationality" type="text" placeholder="الجنسية" id="nationality"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <label style="margin-top: 10px !important;"> <span style="color: red;">*</span>
                                العمر</label>
                            <input name="age" type="text" placeholder="العمر " id="age"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <div>
                                <label class="response-mobile-5"> انواع المساج التي يقدمها هذا المختص  </label>
                                <div id="options-circle">

                                    <div class="option-circle option-large" onclick="serviceper(46)"
                                        data-value="مساج استرخائي">
                                        <span>مساج استرخائي</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large" onclick="serviceper(47)"
                                        data-value="مساج تايلندي">
                                        <span>مساج تايلندي</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large" onclick="serviceper(48)"
                                        data-value="مساج سويدي">
                                        <span>مساج سويدي</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                </div>

                                <div id="options-circle">

                                    <div class="option-circle option-large" onclick="serviceper(49)"
                                        data-value="مساج شياتسو">
                                        <span> مساج شياتسو</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large" onclick="serviceper(50)"
                                        data-value="مساج رياضي">
                                        <span> مساج رياضي</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large option-custome-large"
                                        onclick="serviceper(51)" data-value="مساج ماقبل الولاده">
                                        <span>مساج ماقبل الولاده</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>

                                <div id="options-circle">
                                    <div class="option-circle option-large option-custome-large"
                                        onclick="serviceper(52)" data-value="مساج الانسجه الناعمه">
                                        <span>مساج الانسجه الناعمه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large option-custome-large"
                                        onclick="serviceper(53)" data-value="مساج الانسجه العميقه">
                                        <span> مساج الانسجة العميقة</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large option-custome-large"
                                        onclick="serviceper(54)" data-value="مساج الاحجار الساخنه">
                                        <span> مساج الاحجار الساخنة </span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                </div>

                                <div id="options-circle">
                                    <div class="option-circle option-large option-custome-large"
                                        onclick="serviceper(55)" data-value="مساج بالزيوت العطريه">
                                        <span> مساج بالزيوت العطريه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" data-bs-toggle="modal" class="form-group"
                                data-bs-target="#exampleModal5"> <i class="fa-sharp fa-solid fa-plus"></i> اضافه نوع
                                مساج</a>
                        </div>

                        <div class="form-group">
                            <label class="response-mobile-4">حدد سعر ومده جلسه المساج
                                لهذا المختص</label>
                            <div id="options-circle" style="margin-bottom: 20px;">

                                <div class="option-circle option-small">
                                    <div class="parent-circle" onclick="dayworks(56);" data-value="0:30 د">
                                        <span> 0:30 د</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="price-input" onchange="dayworks(56);"
                                        placeholder="السعر" style="display: none;height: 33px;">
                                </div>

                                <div class="option-circle option-small ">
                                    <div class="parent-circle" onclick="dayworks(57)" data-value="0:45 د">
                                        <span> 0:45 د</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="price-input" onchange="dayworks(57);"
                                        placeholder="السعر" style="display: none;height: 33px;">
                                </div>

                                <div class="option-circle option-small">
                                    <div class="parent-circle" onclick="dayworks(58)" data-value="1:00 س">
                                        <span>1:00 س </span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" onchange="dayworks(58);" class="price-input"
                                        placeholder="السعر" style="display: none;height: 33px;">
                                </div>

                            </div>

                            <div id="options-circle">
                                <div class="option-circle option-small ">
                                    <div class="parent-circle" onclick="dayworks(59)" data-value="1:30 س">
                                        <span>1:30 س</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" onchange="dayworks(59);" class="price-input"
                                        placeholder="السعر" style="display: none;height: 33px;">
                                </div>

                                <div class="option-circle option-small ">
                                    <div class="parent-circle" onclick="dayworks(60)" data-value="2:00 س">
                                        <span> 2:00 س</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" onchange="dayworks(60);" class="price-input"
                                        placeholder="السعر" style="display: none;height: 33px;">
                                </div>

                                <div class="option-circle option-small">
                                    <div class="parent-circle" onclick="dayworks(61)" data-value="2:30 س">
                                        <span>2:30 س</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" onchange="dayworks(61);" class="price-input"
                                        placeholder="السعر" style="display: none;height: 33px;">
                                </div>

                            </div>

                            <div id="options-circle" style="margin-top: 20px;">

                                <div class="option-circle option-small">
                                    <div class="parent-circle" onclick="dayworks(62)" data-value="3:00 س">
                                        <span> 3:00 س</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" onchange="dayworks(62);" placeholder="السعر"
                                        class="price-input" style="display: none;height: 33px;">
                                </div>

                                <div class="option-circle option-small">
                                    <div class="parent-circle" onclick="dayworks(63)" data-value="3:30 س">
                                        <span> 3:30 س</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input type="text" placeholder="السعر" onchange="dayworks(63)"
                                        class="price-input" style="display: none;height: 33px;">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <label class="response-mobile-4">الخدمات المجانية المقدمة مع جلسة المساج </label>
                                <div id="options-circle">

                                    <div class="option-circle option-middle" onclick="freeServtwo(64)"
                                        data-value="عدد 1 منشفه">
                                        <span>عدد 1 منشفه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-middle" onclick="freeServtwo(65)"
                                        data-value="عدد 2 منشفه">
                                        <span>عدد 2 منشفه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-middle" onclick="freeServtwo(66)"
                                        data-value="عدد 3 منشفه">
                                        <span>عدد 3 منشفه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                </div>

                                <div id="options-circle">

                                    <div class="option-circle option-middle" onclick="freeServtwo(67)"
                                        data-value="شموع">
                                        <span>شموع</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>


                                    <div class="option-circle option-middle" onclick="freeServtwo(68)"
                                        data-value="زيوت مساج">
                                        <span>زيوت مساج</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-middle" onclick="freeServtwo(69)"
                                        data-value="زيوت عطريه">
                                        <span>زيوت عطريه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                </div>

                                <div id="options-circle">
                                    <div class="option-circle option-large" onclick="freeServtwo(70)"
                                        data-value="سرير مساج خاص">
                                        <span>سرير مساج خاص</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large" onclick="freeServtwo(71)"
                                        data-value="جهاز تدليك للجسم">
                                        <span>جهاز تدليك للجسم</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="option-circle option-large" onclick="freeServtwo(72)"
                                        data-value="جهاز تدليك للاقدام">
                                        <span>جهاز تدليك للاقدام </span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                </div>

                                <a href="#" class="link-add" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal7"> <i class="fa-sharp fa-solid fa-plus"></i> اضافه
                                    خدمه</a>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="response-mobile-6"> الخدمات المدفوعه المقدمة مع جلسة المساج</label>
                            <div id="options-circle">

                                <div class="option-circle">
                                    <div class="parent-circle option-middle" onclick="paidServtwo(73)"
                                        data-value="شموع عطريه">
                                        <span>شموع عطريه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input name="price[]" type="text"
                                        class="price-input"onchange="paidServtwo(73)" placeholder="السعر"
                                        style="display: none;height: 33px;">
                                </div>

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="paidServtwo(74)" data-value="مناشف">
                                        <span>مناشف</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input name="price[]" onchange="paidServtwo(74)"
                                        type="text"placeholder="السعر"
                                        class="price-input"style="display: none;height: 33px;">
                                </div>

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="paidServtwo(75)" data-value="جهاز تدليك">
                                        <span>جهاز تدليك</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input name="price[]" onchange="paidServtwo(75)" type="text"
                                        placeholder="السعر" class="price-input" style="display: none;height: 33px;">
                                </div>

                            </div>

                            <div id="options-circle">
                                <div class="option-circle option-large"
                                    style="margin-top: 50px;position: relative;left:15px !important;">
                                    <div class="parent-circle" onclick="paidServtwo(76)"
                                        data-value="زيوت عطريه خاصه">
                                        <span> زيوت عطريه خاصه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <input name="price[]" onchange="paidServtwo(76)" type="text"
                                        class="price-input" placeholder="السعر" style="display: none;height: 33px;">
                                </div>
                            </div>

                            <a href="#" data-bs-toggle="modal" class="link-add"
                                data-bs-target="#exampleModal8"><i class="fa-sharp fa-solid fa-plus"></i> اضافه
                                خدمه</a>

                        </div>

                        <div class="form-group">
                            <label style="margin-top:25px !important;"><span style="color: red;">*</span> الخدمات
                                الاضافيه المقدمه </label>
                            <div id="options-circle">

                                <div class="option-circle option-small" onclick="service_msggge(77)"
                                    data-value="جاكوزي">
                                    <span>جاكوزي</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-small" onclick="service_msggge(78)"
                                    data-value="حجامه">
                                    <span>حجامه</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-small" onclick="service_msggge(79)"
                                    data-value="حمام مغربي">
                                    <span>حمام مغربي</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                            </div>

                            <div id="options-circle">
                                <div class="option-circle option-small" onclick="service_msggge(80)"
                                    data-value="بدكير">
                                    <span> بدكير</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-small" onclick="service_msggge(81)"
                                    data-value="منكير">
                                    <span>منكير </span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>

                                <div class="option-circle option-small" onclick="service_msggge(82)"
                                    data-value="تسريح شعر">
                                    <span>تسريح شعر</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="options-circle" class="option-custome">
                                <div class="option-circle option-small " onclick="service_msggge(83)"
                                    data-value="ميكب">
                                    <span>ميكب</span>
                                    <div class="i-circle">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                            </div>

                            <a href="#" data-bs-toggle="modal" class="form-group"
                                data-bs-target="#exampleModal6"> <i class="fa-sharp fa-solid fa-plus"></i> اضافه
                                خدمه</a>

                        </div>

                        <div class="form-group">
                            <label style="margin-top: 35px !important;"><span style="color: red;">*</span>اوقات عمل
                                هذا المختص</label>
                            <div id="options-circle" style="margin-bottom: 18px !important;">

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="dayworkss(84)" data-value="السبت">
                                        <span>السيت</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div onchange="dayworkss(84)" class="selectt" style="display: none;">
                                        <select id="to-time" name="to-time">
                                            <option value="" disabled selected>الي</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>

                                        <select id="from-time" name="from-time">
                                            <option value="" disabled selected>من</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>
                                    </div>

                                </div>

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="dayworkss(85)" data-value="الاحد">
                                        <span>الاحد</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="selectt" style="display: none;" onchange="dayworkss(85)">
                                        <select id="to-time" name="to-time">
                                            <option value="" disabled selected>الي</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>

                                        <select id="from-time" name="from-time">
                                            <option value="" disabled selected>من</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>
                                    </div>

                                </div>

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="dayworkss(86)" data-value="الاثنين">
                                        <span>الاثنين</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="selectt" style="display: none;" onchange="dayworkss(86)">
                                        <select id="to-time" name="to-time">
                                            <option value="" disabled selected>الي</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>

                                        <select id="from-time" name="from-time">
                                            <option value="" disabled selected>من</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div id="options-circle">

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="dayworkss(87)" data-value="الثلاثاء">
                                        <span>الثلاثاء</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="selectt" style="display: none;" onchange="dayworkss(87)">
                                        <select id="to-time" name="to-time">
                                            <option value="" disabled selected>الي</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>

                                        <select id="from-time" name="from-time">
                                            <option value="" disabled selected>من</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="dayworkss(88)" data-value="الاربعاء">
                                        <span>الاربعاء</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>

                                    <div class="selectt" style="display: none;width:50px !important;"
                                        onchange="dayworkss(88)">
                                        <select id="to-time" name="to-time">
                                            <option value="" disabled selected>الي</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>

                                        <select id="from-time" name="from-time">
                                            <option value="" disabled selected>من</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="dayworkss(89)" data-value="الخميس">
                                        <span>الخميس</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="selectt" style="display: none;" onchange="dayworkss(89)">
                                        <select id="to-time" name="to-time">
                                            <option value="" disabled selected>الي</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>

                                        <select id="from-time" name="from-time">
                                            <option value="" disabled selected>من</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="options-circle" style="margin-top: 20px;">
                                <div class="option-circle option-middle">
                                    <div class="parent-circle" onclick="dayworkss(90)" data-value="الجمعه">
                                        <span>الجمعه</span>
                                        <div class="i-circle">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                    </div>
                                    <div class="selectt" style="display: none;" onchange="dayworkss(90)">
                                        <select id="to-time" name="to-time">
                                            <option value="" disabled selected>الي</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>

                                        <select id="from-time" name="from-time">
                                            <option value="" disabled selected>من</option>
                                            <option value="">الغاء</option>
                                            @for ($i = 1; $i <= 24; $i++)
                                                <option value="{{ $i }}">{{ $i }}:00</option>
                                            @endfor
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="response-mobile"> <span class="span-text"
                                    style="color: red;font-size: 12px;width: 100%;">*</span>اذكر الاحياء التي لايذهب اليها المختص</label>
                            <textarea name="goto" id="goto" type="text" rows="3" style="height: 120px;"
                                placeholder="اذكر الاحياء التي لا تذهب اليها في مدينتك " class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label style="margin-top: 10px !important;"> <span class="span-text"
                                    style="color: red;font-size: 12px;width: 100%;">*</span> الخبرات </label>
                            <textarea name="name" id="experinse" type="text" rows="3" style="height: 120px;"
                                placeholder="يعمل احمد منذ 9 سنوات في المساج ولديه شهادات وخبرات علميه وعمليه طويله تؤهله للعمل وتقديم افضل الخدمات بأفضل طريقه"
                                class="form-control"></textarea>
                        </div>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="upload" id="upload">
                                <label class="custom-file-label" for="upload"><i
                                        class="ion-android-cloud-outline"></i>تحميل صوره المختص</label>
                                <div id="file-info" style="z-index: 999;color:red;"></div>
                            </div>
                        </div>

                        <div class="msg">
                        </div>

                        <div class="container">
                            <div class="table_btn">
                                <button type="button" class="btn btn-outline-success btn-step-two"><i class="fa-solid fa-plus"> حفظ </i></button>
                            </div>
                            <span style="stepp_two">الاضافات</span>
                            <table class="table-responsive-full">
                                <thead>
                                    <tr>
                                        <th>الاسم الاول</th>
                                        <th>الاسم الثاني</th>
                                        <th>الجنسيه</th>
                                        <th>العمر</th>
                                        <th>حذف</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <button type="button" class="next action-button" style="float: right !important;">استكمال</button>

                </fieldset>

                <!-- step 3 -->
                <fieldset>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="step-three">
                        <label class="label">تحميل صوره السجل التجاري او اي وثيقه رسميه </label>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input form-control" name="upload_formal"
                                    id="upload_formal">
                                <label class="custom-file-label" for="upload_formal"><i
                                        class="ion-android-cloud-outline"></i>اختر ملف</label>
                                <div id="file-info1" style="z-index: 999;color:red;"></div>
                            </div>
                        </div>

                        <label class="label"><span style="color: red;">(اختياري)</span> تحميل صوره المركز الرئيسيه </label>

                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="upload_center"
                                    id="upload_center">
                                <label class="custom-file-label" for="upload_center"><i
                                        class="ion-android-cloud-outline"></i>اختر ملف</label>
                                <div id="file-info2" style="z-index: 999;color:red;"></div>
                            </div>
                        </div>

                        <label style="margin-right: 10px !important;">اسم البنك </label>
                        <div class="form-group">
                            <input type="text" id="name_bank" name="name_bank"
                                class="form-control custmo-input-bank" placeholder="ادخل اسم البنك">
                        </div>

                        <label style="margin-right: 10px !important;">الايبان</label>
                        <div class="form-group d-flex custmo-input">
                            <input type="text" class="form-control" name="sa" id="sa"
                                style="margin-right:15px !important;width: 20%;" placeholder="SA" disabled>
                            <input type="text" class="form-control" name="ipan" id="ipan"
                                placeholder="ادخل رقم الايبان">
                        </div>
                    </div>

                    <button type="button" class="next action-button submit btn-step-three">ارسال</button>
                </fieldset>

            </form>
            <!-- </form> -->

        </div>

        <!-- Modal1 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافه خدمه</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="addServ" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;" id="addServ"
                                name="addServ">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- modal 2-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">اضافه خدمه</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="newserveice" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" id="newserveice" style="height: 35px;"
                                name="newserveice">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn2"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal 3 --}}
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel3">اضافه خدمه مجانيه</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="freeServeCenter" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;"
                                id="freeServeCenter" name="freeServeCenter">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn3"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal 4 --}}
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel4">اضافه خدمه مدفوعه</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="priceServeCenter" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;"
                                id="priceServeCenter" name="priceServeCenter">
                            <label for="priceServeCenter2" class="form-label">سعر الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;"
                                id="priceServeCenter2" name="priceServeCenter2">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn4"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal 5 --}}
        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel5">اضافه خدمه </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="servicePerson" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;" id="servicePerson"
                                name="servicePerson">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn5"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal 6 --}}
        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel6">اضافه خدمه </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="servicess" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;" id="servicess"
                                name="servicess">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn6"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal 7 --}}
        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel7">اضافه خدمه </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="servicePersonfree" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;"
                                id="servicePersonfree" name="servicePersonfree">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn7"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal 8 --}}
        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel8">اضافه خدمه مدفوعه</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="priceServeperson" class="form-label">اسم الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;"
                                id="priceServeperson" name="priceServeperson">
                            <label for="priceServeCenter2" class="form-label">سعر الخدمه</label>
                            <input type="text" class="form-control" style="height: 35px;"
                                id="priceServeperson2" name="priceServeperson2">
                        </div>
                        <button type="button" class="btn btn-primary" id="saveBtn8"
                            data-bs-dismiss="modal">حفظ</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal success --}}
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="icon-box">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center">
                        <h4>!تم الارسال</h4>
                        <p>.شكرا لك سنتواصل معك قريبا</p>
                        <button class="btn btn-success" data-bs-dismiss="modal"><a href="https://massage1.net/"
                                style="color: white;"> <span>الرئيسيه</span> <i
                                    class="fa-solid fa-arrow-up-right-from-square"></i></a></button>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal success 1 --}}
        <div id="myModal1" class="modal fade">
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header justify-content-center">
                        <div class="icon-box">
                            <i class="fa-solid fa-check"></i>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal"
                            aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body text-center">
                        <h4>!تم الاضافه</h4>
                        <p>كرر العمليه اذا كان لديك مختص اخر</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Multi step form -->
    <!-- partial -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js'></script>
    <script src="{{ url('js/script.js') }}"></script>
</body>

</html>
