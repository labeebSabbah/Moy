@php
    
    $t = \App\Models\Task::where('standard', 1)->get();

    $s = \App\Models\Standard::where('name', 1)->first();

@endphp
<x-app>

    <x-slot:title></x-slot:title>

    <x-slot:styles>

        <style>
            * {

                font-family: "Times New Roman", Times, serif;
                font-weight: bold;
                font-size: large;

            }

            table,
            td,
            th {

                border: 3px solid black !important;

            }
        </style>

    </x-slot:styles>
    <a href="{{ route('home') }}" class="btn btn-primary" style="position: fixed; top: 10px; right: 10px;"><i class="fa-solid fa-arrow-right"></i></a>
    <div class="d-flex justify-content-start">
        <table class="table table-responsive text-center align-middle" style="width: 95%; height: 80%;">
            <thead>
                <tr>
                    <th colspan="3" style="background: blue; color: white; font-weight: 900;">التوجهات الوطنية
                        والقطاعية</th>
                        <th>{{ $standard->percentage }}%</th>
                    <th style="width: 20%">نسبة الانجاز</th>
                    <th style="width: 10%;">الملاحظات</th>
                    <th>الوسائط</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th rowspan="6">التوجهات الوطنية</th>
                    <td rowspan="3">قدرات التوجهات الوطنية</td>
                    <td rowspan="3"></td>
                    <td>• تحديد دور وزارة الشباب كمالك رئيس أو مساهم في تحقيق الرؤى الوطنية (السياسية والاقتصادية
                        والادارية) وكتب التكليف السامي وخطة العمل الحكومي ذات العلاقة بوزارة الشباب</td>
                    <td><input onchange="change({{ $t[0]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[0]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[0]->percentage < 50) bg-danger @endif @if ($t[0]->percentage == 100) bg-success @endif" style="width: {{ $t[0]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[0]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[0]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[0]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[0]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى مواءمة التوجهات والأهداف ومؤشرات الأداء الاستراتيجية للجهة الحكومية مع الرؤى الوطنية
                        (السياسية والاقتصادية والادارية) وكتب التكليف السامي وخطة العمل الحكومي ذات العلاقة بوزارة
                        الشباب</td>
                    <td><input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[1]->percentage < 50) bg-danger @endif @if ($t[1]->percentage == 100) bg-success @endif" style="width: {{ $t[1]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[1]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[1]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[1]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[1]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التنسيق والمشاركة الفاعلة مع كافة الجهات المساهمة بتحقيق مؤشرات الأداء الاستراتيجية الوطنية
                        ومؤشرات التنافسية الوطنية في التقارير الدولية ذات العلاقة بوزارة الشباب</td>
                    <td><input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[2]->percentage < 50) bg-danger @endif @if ($t[2]->percentage == 100) bg-success @endif" style="width: {{ $t[2]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[2]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[2]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[2]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[2]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="3">نتائج القدرات الوطنية</td>
                    <td rowspan="2">نتائج الاداء</td>
                    <td>• نتائج المؤشرات الاستراتيجية الوطنية في الرؤى الوطنية ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[3]->percentage < 50) bg-danger @endif @if ($t[3]->percentage == 100) bg-success @endif" style="width: {{ $t[3]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[3]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[3]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[3]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[3]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج تقييم فاعلية الأهداف والمبادرات والمشاريع والبرامج وفقا للمؤشرات الاستراتيجية الوطنية
                        ومؤشرات التنافسية الدولية ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[4]->percentage < 50) bg-danger @endif @if ($t[4]->percentage == 100) bg-success @endif" style="width: {{ $t[4]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[4]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[4]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[4]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[4]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• انطباعات الجهات المساهمة في تحقيق المؤشرات الوطنية ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[5]->percentage < 50) bg-danger @endif @if ($t[5]->percentage == 100) bg-success @endif" style="width: {{ $t[5]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[5]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[5]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[5]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[5]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="6">الدور القطاعي</th>
                    <td rowspan="3">قدرات الدور القطاعي</td>
                    <td rowspan="3"></td>
                    <td>تحديد دور وزارة الشباب كمالك رئيسي أو مساهم في تحقيق مؤشرات الأداء الإستراتيجية القطاعية ذات
                        العلاقة بوزارة الشباب</td>
                    <td><input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[6]->percentage < 50) bg-danger @endif @if ($t[6]->percentage == 100) bg-success @endif" style="width: {{ $t[6]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[6]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[6]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[6]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[6]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مواءمة التوجهات والأهداف ومؤشرات الأداء الاستراتيجية للجهة الحكومية مع الأهداف الاستراتيجية
                        للجهات العاملة بنفس القطاع</td>
                    <td><input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[7]->percentage < 50) bg-danger @endif @if ($t[7]->percentage == 100) bg-success @endif" style="width: {{ $t[7]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[7]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[7]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[7]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[7]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التنسيق والمشاركة الفاعلة مع كافة الجهات المساهمة بتحقيق مؤشرات الأداء الاستراتيجية القطاعية
                        ذات العلاقة بوزارة الشباب</td>
                    <td><input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[8]->percentage < 50) bg-danger @endif @if ($t[8]->percentage == 100) bg-success @endif" style="width: {{ $t[8]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[8]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[8]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[8]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[8]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="3">نتائج الدور القطاعي</td>
                    <td rowspan="2">نتائج الاداء</td>
                    <td>• نتائج مؤشرات الاستراتيجية القطاعية ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[9]->percentage < 50) bg-danger @endif @if ($t[9]->percentage == 100) bg-success @endif" style="width: {{ $t[9]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[9]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[9]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[9]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[9]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج مؤشرات أداء تقييم فاعلية الأهداف والمبادرات والمشاريع والبرامج وفقا للمؤشرات
                        الاستراتيجية القطاعية ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[10]->percentage < 50) bg-danger @endif @if ($t[10]->percentage == 100) bg-success @endif" style="width: {{ $t[10]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[10]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[10]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[10]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[10]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• انطباعات الجهات المساهمة في تحقيق المؤشرات القطاعية ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[11]->percentage < 50) bg-danger @endif @if ($t[11]->percentage == 100) bg-success @endif" style="width: {{ $t[11]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[11]->notes) > 0) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[11]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[11]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[11]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>

    <x-slot:scripts>

        <script>

            function change(id ,percentage) {

                $.ajax({

                    url: "{{ route('task.update') }}",

                    type: "PUT",

                    data: {

                        id: id,

                        percentage: percentage,

                        "_token": "{{ csrf_token() }}"

                    },

                    success: function (response) {

                        window.location = window.location.href;

                    },

                    error: function (response) {
                            
                            console.log(response);
                    }

                });

            }

        </script>

    </x-slot:scripts>


</x-app>
