<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>بيانات المراكز</title>
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


    <div class="tabs">

        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <input type="radio"  name="tab-control" checked style="border: none;outline:none;">
        <ul>
            <li><label for="tab4" role="button"><svg viewBox="0 0 24 24">
            <span>بيانات المركز</span></label></li>
        </ul>



        <div class="content">

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

                            @if ($data->gender == 'null' )
                                <td>غير موجود</td>
                            @else
                                <td data-label="نوع الخدمه">
                                    {{ $data->gender }} </td>
                            @endif
                            @if ($data->type == 'null' )
                            <td>غير موجود</td>

                            @else
                            <td data-label="الخدمه">{{ $data->type }}</td>

                            @endif

                            <td data-label="حذف" class="d-flex">
                                <form id="delete-form-{{ $data->id }}"
                                    action="{{ route('delete_table', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('هل تريد حذف بيانات المركز ؟')">حذف</button>
                                </form>

                                <a href="{{ url('data_center') }}/{{$data->id}}" class="btn btn-outline-primary btn-sm ml-1">فتح</a>

                            </td>


                    @endforeach
                    </tbody>
                    @endif
                </table>

            </section>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="{{ url('js/script.js') }}"></script>
</body>

</html>

