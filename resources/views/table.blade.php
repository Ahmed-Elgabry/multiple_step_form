<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بيانات الاستبيان</title>
    <link rel="stylesheet" href="{{ asset('fonts/alfont_com_AlFont_com_AvenirArabic-Medium.otf') }}">
    <link rel="stylesheet" href="{{ url('css/style-tabs.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('fonts/alfont_com_AlFont_com_AvenirArabic-Medium.otf') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>

</head>

<body>
    @if (session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('delete') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="tabs">



        <input type="radio" id="tab1" name="tab-control">
        <input type="radio" id="tab2" name="tab-control">
        <input type="radio" id="tab3" name="tab-control">
        <input type="radio" id="tab4" name="tab-control" checked>
        <ul>
            <li title="Features"><label for="tab1" role="button"><svg viewBox="0 0 24 24">
                        <path
                            d="M14,2A8,8 0 0,0 6,10A8,8 0 0,0 14,18A8,8 0 0,0 22,10H20C20,13.32 17.32,16 14,16A6,6 0 0,1 8,10A6,6 0 0,1 14,4C14.43,4 14.86,4.05 15.27,4.14L16.88,2.54C15.96,2.18 15,2 14,2M20.59,3.58L14,10.17L11.62,7.79L10.21,9.21L14,13L22,5M4.93,5.82C3.08,7.34 2,9.61 2,12A8,8 0 0,0 10,20C10.64,20 11.27,19.92 11.88,19.77C10.12,19.38 8.5,18.5 7.17,17.29C5.22,16.25 4,14.21 4,12C4,11.7 4.03,11.41 4.07,11.11C4.03,10.74 4,10.37 4,10C4,8.56 4.32,7.13 4.93,5.82Z" />
                    </svg><br><span>المرفقات</span></label></li>
            <li title="Delivery Contents"><label for="tab2" role="button"><svg viewBox="0 0 24 24">
                        <path
                            d="M2,10.96C1.5,10.68 1.35,10.07 1.63,9.59L3.13,7C3.24,6.8 3.41,6.66 3.6,6.58L11.43,2.18C11.59,2.06 11.79,2 12,2C12.21,2 12.41,2.06 12.57,2.18L20.47,6.62C20.66,6.72 20.82,6.88 20.91,7.08L22.36,9.6C22.64,10.08 22.47,10.69 22,10.96L21,11.54V16.5C21,16.88 20.79,17.21 20.47,17.38L12.57,21.82C12.41,21.94 12.21,22 12,22C11.79,22 11.59,21.94 11.43,21.82L3.53,17.38C3.21,17.21 3,16.88 3,16.5V10.96C2.7,11.13 2.32,11.14 2,10.96M12,4.15V4.15L12,10.85V10.85L17.96,7.5L12,4.15M5,15.91L11,19.29V12.58L5,9.21V15.91M19,15.91V12.69L14,15.59C13.67,15.77 13.3,15.76 13,15.6V19.29L19,15.91M13.85,13.36L20.13,9.73L19.55,8.72L13.27,12.35L13.85,13.36Z" />
                    </svg><br><span>معلومات البنك</span></label></li>
            <li title="Shipping"><label for="tab3" role="button"><svg viewBox="0 0 24 24">
                        <path
                            d="M3,4A2,2 0 0,0 1,6V17H3A3,3 0 0,0 6,20A3,3 0 0,0 9,17H15A3,3 0 0,0 18,20A3,3 0 0,0 21,17H23V12L20,8H17V4M10,6L14,10L10,14V11H4V9H10M17,9.5H19.5L21.47,12H17M6,15.5A1.5,1.5 0 0,1 7.5,17A1.5,1.5 0 0,1 6,18.5A1.5,1.5 0 0,1 4.5,17A1.5,1.5 0 0,1 6,15.5M18,15.5A1.5,1.5 0 0,1 19.5,17A1.5,1.5 0 0,1 18,18.5A1.5,1.5 0 0,1 16.5,17A1.5,1.5 0 0,1 18,15.5Z" />
                    </svg><br><span>بيانات المختصين</span></label></li>
            <li title="Returns"><label for="tab4" role="button"><svg viewBox="0 0 24 24">
                        <path
                            d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
                    </svg><br><span>بيانات المركز</span></label></li>
        </ul>

        <div class="slider">
            <div class="indicator"></div>
        </div>

        <div class="content">
            <section>
                <h2>المرفقات</h2>

                <table class="table-responsive-full">
                    <thead>
                        <tr>
                            <th>م</th>
                            <th>صوره المركز</th>
                            <th>السجل التجاري او اي وثيقه رسميه</th>
                        </tr>
                    </thead>
                    @if (count($datapank) == 0)
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-success" style="text-align: center;">لا يوجد بيانات</td>
                            </tr>
                        </tbody>
                    @else
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($datapank as $img)
                            <tbody>
                                <tr>
                                    <td data-label="م">{{ $i++ }}</td>

                                    <td data-label="صوره المركز">

                                        @if ($img->img_center)
                                            <a class="btn btn-outline-success btn-sm"
                                                href="{{ url('View_file') }}/{{ $img->img_center }}" role="button"><i
                                                    class="fas fa-eye"></i>&nbsp;
                                                عرض</a>

                                            <a class="btn btn-outline-info btn-sm"
                                                href="{{ url('download') }}/{{ $img->img_center }}" role="button"><i
                                                    class="fas fa-download"></i>&nbsp;
                                                تحميل</a>
                                        @else
                                            <span>لم يتم ارفاق مرفق</span>
                                        @endif
                                    </td>

                                    <td data-label="السجل التجاري">
                                        @if ($img->img_formal)
                                            <a class="btn btn-outline-success btn-sm"
                                                href="{{ url('View_file') }}/{{ $img->img_formal }}"
                                                role="button"><i class="fas fa-eye"></i>&nbsp;
                                                عرض</a>

                                            <a class="btn btn-outline-info btn-sm"
                                                href="{{ url('download') }}/{{ $img->img_formal }}"
                                                role="button"><i class="fas fa-download"></i>&nbsp;
                                                تحميل</a>
                                        @else
                                            <span>لم يتم ارفاق مرفق</span>
                                        @endif
                                    </td>

                                    <td data-label="حذف">
                                        <form id="delete-form-{{ $img->id }}"
                                            action="{{ route('delete_file', $img->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                onclick="return confirm('تااكيد الحذف')">جذف</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
                    @endif
                </table>

            </section>

            <section>
                <h2>بيانات البنك</h2>

                <table class="table-responsive-full">
                    <thead>
                        <tr>
                            <th>م</th>
                            <th>اسم البنك</th>
                            <th>الايبان</th>
                            <th>حذف</th>

                        </tr>
                    </thead>
                    @if (count($datapank) == 0)
                        <tbody>
                            <tr>
                                <td colspan="5" class="text-success" style="text-align: center;">لا يوجد بيانات
                                </td>
                            </tr>
                        </tbody>
                    @else
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($datapank as $bank)
                                <tr>
                                    <td data-label="م">{{ $i++ }}</td>
                                    @if ($bank->name_bank)
                                        <td data-label="اسم البنك">{{ $bank->name_bank }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif
                                    @if ($bank->ipan)
                                        <td data-label="الايبان">{{ $bank->ipan }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    <td data-label="حذف">
                                        <form id="delete-form-{{ $img->id }}"
                                            action="{{ route('delete_file', $img->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                onclick="return confirm('تااكيد الحذف')">جذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>

            </section>

            <section>
                <h2>بيانات المختصين</h2>

                <table class="table-responsive-full">
                    <thead>
                        <tr>
                            <th>م</th>
                            <th>الاسم الاول</th>
                            <th>الاسم الثاني</th>
                            <th>الجنسيه</th>
                            <th>العمر</th>
                            <th>انواع المساج المقدمه</th>
                            <th>سعر وتوقيت جلسه المساج</th>
                            <th>الخدمات المقدمه</th>
                            <th>اوقات العمل</th>
                            <th><span style="color: red;">X</span> الاحياء </th>
                            <th>الخبرات</th>
                        </tr>
                    </thead>
                    @if (count($dataperson) == 0)
                        <tbody>
                            <tr>
                                <td colspan="11" class="text-success" style="text-align: center;">لا يوجد بيانات
                                </td>
                            </tr>
                        </tbody>
                    @else
                        <tbody>
                            @php
                                $i = 1;
                            @endphp

                            @foreach ($dataperson as $person)
                                <tr>
                                    <td data-label="م">{{ $i++ }}</td>

                                    @if ($person->fname)
                                        <td data-label="الاسم الاول">{{ $person->fname }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif


                                    @if ($person->lname)
                                        <td data-label="الاسم الثاني">{{ $person->lname }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif


                                    @if ($person->nationality)
                                        <td data-label="الجنسيه">{{ $person->nationality }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if ($person->age)
                                        <td data-label="العمر">{{ $person->age }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if (json_decode($person->type_msg, true))
                                        <td data-label="انواع المساج المقدمه">
                                            @foreach (json_decode($person->type_msg) as $item)
                                                {{ $item }} ,
                                            @endforeach
                                        </td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if (json_decode($person->time_work, true))
                                        @foreach (json_decode($person->time_work, true) as $item)
                                            <td data-label="سعر وتوقيت جلسه المساج" class="badge badge-success">
                                                {{ $item['price'] }} / {{ $item['time'] }}
                                            </td>
                                        @endforeach
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if (json_decode($person->service_msg))
                                        <td data-label="الخدمات المقدمه">
                                            @foreach (json_decode($person->service_msg) as $item)
                                                {{ $item }} ,
                                            @endforeach
                                        </td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if (json_decode($person->days_work, true) || '[]')
                                        @foreach (json_decode($person->days_work, true) as $item)
                                            <td data-label="الدوام الرسمي" class="badge badge-success">
                                                @if (in_array($item['time'], ['السبت', 'الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة']))
                                                    من {{ $item['from'] }} الي {{ $item['to'] }} <br><br>
                                                    {{ $item['time'] }}
                                                @else
                                                    من {{ $item['from'] }} الي {{ $item['to'] }} <br><br>
                                                    {{ $item['time'] }}
                                                @endif
                                            </td>
                                        @endforeach
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if ($person->goto)
                                        <td data-label="الاحياء">{{ $person->goto }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if ($person->experince)
                                        <td data-label="الخبرات">{{ $person->experince }}</td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    <td data-label="حذف">
                                        <form id="delete-form-{{ $person->id }}"
                                            action="{{ route('delete_person', $person->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                                onclick="return confirm('تااكيد الحذف')">جذف</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>
                <table class="table-responsive-full">
                    <thead>
                        <tr>
                            <th>م</th>
                            <th>الخدمات المجانيه</th>
                            <th>الخدمات المدفوعه</th>
                            <th>صوره المختص</th>
                        </tr>
                    </thead>
                    @if (count($dataperson) == 0)
                        <tbody>
                            <tr>
                                <td colspan="11" class="text-success" style="text-align: center;">لا يوجد بيانات
                                </td>
                            </tr>
                        </tbody>
                    @else
                        <tbody>
                            @php
                                $i = 1;
                            @endphp

                            @foreach ($dataperson as $person)
                                <tr>
                                    <td data-label="م">{{ $i++ }}</td>

                                    @if (json_decode($person->freeServeStepTwo, true))
                                        <td data-label="الخدمات المجانيه">
                                            @foreach (json_decode($person->freeServeStepTwo) as $item)
                                                {{ $item }} ,
                                            @endforeach
                                        </td>
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    @if (json_decode($person->paidServeStepTwo, true))
                                        @foreach (json_decode($person->paidServeStepTwo, true) as $item)
                                            <td data-label="الخدمات المدفوعه" class="badge badge-success">
                                                {{ $item['price'] }} / {{ $item['time'] }}
                                            </td>
                                        @endforeach
                                    @else
                                        <td>غير موجود</td>
                                    @endif

                                    <td data-label="صوره المختص">
                                        @if ($person->pic)
                                            <a class="btn btn-outline-success btn-sm"
                                                href="{{ url('View_file') }}/{{ $person->pic }}" role="button"><i
                                                    class="fas fa-eye"></i>&nbsp;
                                                عرض</a>

                                            <a class="btn btn-outline-info btn-sm"
                                                href="{{ url('download') }}/{{ $person->pic }}" role="button"><i
                                                    class="fas fa-download"></i>&nbsp;
                                                تحميل</a>
                                        @else
                                            <span>لم يتم ارفاق مرفق</span>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    @endif
                </table>

            </section>

            <section>
                <h2>بيانات المراكز</h2>

                <table class="table-responsive-full">
                    <thead>
                        <tr>
                            <th>م</th>
                            <th>اسم المركز</th>
                            <th>المدينه</th>
                            <th>الحي</th>
                            <th>وصف الموقع</th>
                            <th>نوع الخدمه</th>
                            <th>الخدمه</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if (count($datacenter) == 0)
                    <tbody>
                        <tr>
                            <td colspan="11" class="text-success" style="text-align: center;">لا يوجد بيانات</td>
                        </tr>
                    </tbody>
                @else
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datacenter as $data)
                        <tr>
                            <td data-label="م">{{ $i++ }}</td>
                            @if ($data->name_center)
                                <td data-label="اسم المركز">{{ $data->name_center }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->city)
                                <td data-label="المدينه">{{ $data->city }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->district)
                                <td data-label="الحي">{{ $data->district }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->location)
                                <td data-label="وصف الموقع">{{ $data->location }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->gender == 'null')
                                <td>غير موجود</td>
                            @else
                                <td data-label="نوع الخدمه">
                                    {{ $data->gender }} </td>
                            @endif
                            @if ($data->type == 'null')
                                <td>غير موجود</td>
                            @else
                                <td data-label="الخدمه">{{ $data->type }}</td>
                            @endif

                            <td data-label="حذف">
                                <form id="delete-form-{{ $data->id }}"
                                    action="{{ route('delete_table', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('تااكيد الحذف')">جذف</button>
                                </form>
                            </td>
                    @endforeach
                    </tbody>
                    @endif
                </table>

                <table class="table-responsive-full">
                    <thead>
                        <tr>
                            <th>م</th>
                            <th>الخدمات المقدمه</th>
                            <th>الخدمات المدفوعه</th>
                            <th>انواع المساج داخل المركز</th>
                            <th>الخدمات المجانية</th>
                            <th>سعر وتوقيت</th>
                            <th>عدد المختصين المنزليين</th>
                            <th>الدوام الرسمي</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($datacenter) == 0)
                    <tbody>
                        <tr>
                            <td colspan="11" class="text-success" style="text-align: center;">لا يوجد بيانات</td>
                        </tr>
                    </tbody>
                @else
                    @php
                        $i = 1;
                    @endphp

                    @foreach ($datacenter as $data)
                        <tr>
                            <td data-label="م">{{ $i++ }}</td>
                            @if (json_decode($data->select, true))
                                <td data-label="الخدمات المقدمه">

                                    @foreach (json_decode($data->select) as $item)
                                        {{ $item }} ,
                                    @endforeach
                                </td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if (json_decode($data->price_center, true))
                                @foreach (json_decode($data->price_center, true) as $item)
                                    <td data-label="الخدمات المدفوعه" class="badge badge-success">
                                        {{ $item['price'] }} / {{ $item['time'] }}
                                    </td>
                                @endforeach
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if (json_decode($data->select_center))
                                <td data-label="انواع المساج داخل المركز">
                                    @foreach (json_decode($data->select_center) as $item)
                                        {{ $item }} ,
                                    @endforeach
                                </td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if (json_decode($data->free_center))
                                <td data-label="الخدمات المجانيه">
                                    @foreach (json_decode($data->free_center) as $item)
                                        {{ $item }}
                                    @endforeach
                                </td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if (json_decode($data->time_center, true))
                                @foreach (json_decode($data->time_center, true) as $item)
                                    <td data-label="سعر وتوقيت جلسه المساج" class="badge badge-success">
                                        {{ $item['price'] }} / {{ $item['time'] }}
                                    </td>
                                @endforeach
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->count_home)
                                <td data-label="عدد المختصيين المنزليين">{{ $data->count_home }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if (json_decode($data->days_center, true))
                                @foreach (json_decode($data->days_center, true) as $item)
                                    <td data-label="الدوام الرسمي" class="badge badge-success">
                                        @if (in_array($item['time'], ['السبت', 'الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة']))
                                            من {{ $item['from'] }} الي {{ $item['to'] }} <br><br>
                                            {{ $item['time'] }}
                                        @else
                                            من {{ $item['from'] }} الي {{ $item['to'] }} <br><br>
                                            {{ $item['time'] }}
                                        @endif
                                    </td>
                                @endforeach
                            @else
                                <td>غير موجود</td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                    @endif
                </table>

                <table class="table-responsive-full">
                    <thead>
                        <tr>
                            <th>م</th>
                            <th>اسم المسؤول</th>
                            <th>جوال العمل الرسمي</th>
                            <th>جوال الماليه</th>
                            <th>صف نفسك</th>
                            <th>رقم جوال المسؤول</th>
                            <th>ايميل التسجيل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($datacenter) == 0)
                    <tbody>
                        <tr>
                            <td colspan="11" class="text-success" style="text-align: center;">لا يوجد بيانات</td>
                        </tr>
                    </tbody>
                @else
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datacenter as $data)
                        <tr>
                            <td data-label="م">{{ $i++ }}</td>

                            @if ($data->maneger_person)
                                <td data-label="اسم المسؤول">{{ $data->maneger_person }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->phone_work)
                                <td data-label="جوال العمل">{{ $data->phone_work }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->phone_mony)
                                <td data-label="جوال الماليه">{{ $data->phone_mony }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->about_center)
                                <td data-label="صف نفسك">{{ $data->about_center }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->phone_maneger)
                                <td data-label="رقم جوال المسؤول">{{ $data->phone_maneger }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif

                            @if ($data->email_maneger)
                                <td data-label="ايميل التسجيل">{{ $data->email_maneger }}</td>
                            @else
                                <td>غير موجود</td>
                            @endif
                            </tbody>
                    @endforeach
                    @endif
                </table>

            </section>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script src="{{ url('js/script.js') }}"></script>
</body>

</html>
