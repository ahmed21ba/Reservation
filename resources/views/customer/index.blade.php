
@extends('website.main')

@section('home')

    <div class="container">

    <div class="m-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1"
               style="border-spacing: 24px; border-collapse: separate !important; text-align: center}">
            <thead>
            <tr>
                <th style=" margin: 10px 20px">حالة الطلب</th>
                <th style=" margin: 10px 20px" >اسم الصالة</th>
                <th style=" margin: 10px 20px"> تاريخ بدء الحجز</th>
                <th>تاريخ نهاية الحجز</th>
                <th>المناسبة</th>

            </tr>
            </thead>
            <tbody>
            @foreach($records as  $reserve)

                <tr>
                    <div style="width: 100%">

                        @if( $reserve->status   == 0)
                        <td   style='background-color: #d70206 ; color : white; margin: 10px 20px' >مرفوض</td>
                        @else
                        <td   style='background-color: greenyellow;color : white; margin: 10px 20px'>مقبول</td>
                        @endif
                        <td style=" margin: 10px 20px">{{ $reserve->hall->name }}</td>
                        <td style=" margin: 10px 20px">{{ $reserve->start_time }}</td>
                        <td style=" margin: 10px 20px">{{ $reserve->end_time }}</td>
                        <td style=" margin: 10px 20px">{{ $reserve->occasionType($reserve->occasion) }}</td>


                    </div>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

    </div>
    <script src="bootstrap/bootstrap.min.js"></script>

@endsection
