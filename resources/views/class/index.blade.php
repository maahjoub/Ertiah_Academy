i<x-app-layout>
    <div class="content">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="card-block">
                        <div class="flex justify-between">
                            <div>
                                <a href="{{route('class.create')}}" class="btn btn-primary">إضافة فصل </a>
                            </div>
                            <div><h4 class="card-title text-bold page-title text-xl">قائمة الفصول</h4></div>
                        </div>
                        <div class="table-responsive">
                            <table class="datatable table table-stripped custom">
                                <thead>
                                <tr>
                                    <th>العمليات</th>
                                    <th>المرحلة</th>
                                    <th>اسم الصف</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
