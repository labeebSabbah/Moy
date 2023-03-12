@php
    
    $t = \App\Models\Task::where('standard', 3)->get();

    $s = \App\Models\Standard::where('name', 3)->first();

@endphp
<x-app>

    <x-slot:title>Home</x-slot:title>


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
            <tbody>
                <tr>
                    <th colspan="3" style="background: blue; color: white; font-weight: 900;">الاستراتيجية المؤسسية
                    </th>
                    <th>{{ $standard->percentage }}%</th>
                    <th style="width: 20%">نسبة الانجاز</th>
                    <th style="width: 10%;">الملاحظات</th>
                    <th>الوسائط</th>
                </tr>
                <tr>
                    <th rowspan="23">الاستراتيجية واستشراف المستقبل</th>
                    <td rowspan="10">قدرات الاستراتيجية واستشراف المستقبل</td>
                    <td rowspan="10"></td>
                    <td>• مواءمة التوجهات والأهداف ومؤشرات الأداء الاستراتيجية للوزارة مع تحليل البيئة الخارجية
                        والاتجاهات العالمية ذات العلاقة</td>
                    <td><input onchange="change({{ $t[0]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[0]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[0]->percentage == 100) bg-success @endif @if ($t[0]->percentage < 50) bg-danger @endif" style="width: {{ $t[0]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[0]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[0]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[0]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[0]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مواءمة التوجهات والأهداف ومؤشرات الأداء الاستراتيجية للوزارة مع القدرات المؤسسية الداخلية</td>
                    <td><input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[1]->percentage == 100) bg-success @endif @if ($t[1]->percentage < 50) bg-danger @endif" style="width: {{ $t[1]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[1]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[1]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[1]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[1]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• صياغة الأهداف والتوجهات الاستراتيجية بما يحقق رؤية و رسالة وزارة الشباب</td>
                    <td><input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[2]->percentage == 100) bg-success @endif @if ($t[2]->percentage < 50) bg-danger @endif" style="width: {{ $t[2]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[2]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[2]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[2]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[2]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إعداد ومراجعة الاستراتيجية والسياسات الداعمة لها</td>
                    <td><input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[3]->percentage == 100) bg-success @endif @if ($t[3]->percentage < 50) bg-danger @endif" style="width: {{ $t[3]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[3]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[3]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[3]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[3]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• بناء شراكات فعالة ومستدامة مع الجهات الحكومية وغير الحكومية بما يحقق الاهداف الاستراتيجية
                        للوزارة والمنفعة المتبادلة</td>
                    <td><input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[4]->percentage == 100) bg-success @endif @if ($t[4]->percentage < 50) bg-danger @endif" style="width: {{ $t[4]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[4]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[4]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[4]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[4]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التنسيق مع الشركاء الاستراتيجيين في وضع وتحقيق الأهداف الاستراتيجية المشتركة</td>
                    <td><input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[5]->percentage == 100) bg-success @endif @if ($t[5]->percentage < 50) bg-danger @endif" style="width: {{ $t[5]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[5]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[5]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[5]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[5]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى سعي وزارة الشباب الى توفير مصادر الدعم المالي من غير الموازنة بما يخدم تحقيق اهدافها
                        الاستراتيجية</td>
                    <td><input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[6]->percentage == 100) bg-success @endif @if ($t[6]->percentage < 50) bg-danger @endif" style="width: {{ $t[6]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[6]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[6]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[6]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[6]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• سلسلة ومواءمة الأهداف الاستراتيجية على جميع المستويات داخل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[7]->percentage == 100) bg-success @endif @if ($t[7]->percentage < 50) bg-danger @endif" style="width: {{ $t[7]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[7]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[7]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[7]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[7]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• ترجمة إستراتيجية وزارة الشباب إلى خطط تشغيلية وما تتضمنه من خدمات وعمليات ومشاريع ومبادرات
                    </td>
                    <td><input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[8]->percentage == 100) bg-success @endif @if ($t[8]->percentage < 50) bg-danger @endif" style="width: {{ $t[8]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[8]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[8]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[8]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[8]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• استخدام أساليب نوعية وكمية لإستشراف المستقبل للمجالات المرتبطة بعمل وزارة الشباب ودمجها في
                        الخطة الاستراتيجية</td>
                    <td><input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[9]->percentage == 100) bg-success @endif @if ($t[9]->percentage < 50) bg-danger @endif" style="width: {{ $t[9]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[9]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[9]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[9]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[9]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="13">نتائج الاستراتيجية واستشراف المستقبل</th>
                    <td rowspan="6">نتائج الاداء</td>
                    <td>• نتائج مؤشرات المهام الرئيسية للوزارة</td>
                    <td><input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[10]->percentage == 100) bg-success @endif @if ($t[10]->percentage < 50) bg-danger @endif" style="width: {{ $t[10]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[10]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[10]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[10]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[10]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج مؤشرات تحقيق الأهداف الاستراتيجية</td>
                    <td><input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[11]->percentage == 100) bg-success @endif @if ($t[11]->percentage < 50) bg-danger @endif" style="width: {{ $t[11]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[11]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[11]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[11]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[11]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج الرشاقة في التعامل/سرعة الاستجابة للمتغيرات الداخلية والخارجية</td>
                    <td><input onchange="change({{ $t[12]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[12]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[12]->percentage == 100) bg-success @endif @if ($t[12]->percentage < 50) bg-danger @endif" style="width: {{ $t[12]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[12]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[12]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[12]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[12]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج متعلقة في استشراف المستقبل</td>
                    <td><input onchange="change({{ $t[13]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[13]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[13]->percentage == 100) bg-success @endif @if ($t[13]->percentage < 50) bg-danger @endif" style="width: {{ $t[13]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[13]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[13]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[13]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[13]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج توفير مصادر الدعم المالي من غير الموازنة</td>
                    <td><input onchange="change({{ $t[14]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[14]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[14]->percentage == 100) bg-success @endif @if ($t[14]->percentage < 50) bg-danger @endif" style="width: {{ $t[14]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[14]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[14]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[14]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[14]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج تقييم الشراكات الاستراتيجية</td>
                    <td><input onchange="change({{ $t[15]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[15]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[15]->percentage == 100) bg-success @endif @if ($t[15]->percentage < 50) bg-danger @endif" style="width: {{ $t[15]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[15]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[15]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[15]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[15]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="7">مقاييس الرأي</td>
                    <td>• تحقيق الأهداف والتوجهات الاستراتيجية</td>
                    <td><input onchange="change({{ $t[16]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[16]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[16]->percentage == 100) bg-success @endif @if ($t[16]->percentage < 50) bg-danger @endif" style="width: {{ $t[16]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[16]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[16]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[16]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[16]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إعداد ومراجعة وتحديث الاستراتيجية</td>
                    <td><input onchange="change({{ $t[17]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[17]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[17]->percentage == 100) bg-success @endif @if ($t[17]->percentage < 50) bg-danger @endif" style="width: {{ $t[17]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[17]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[17]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[17]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[17]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التنسيق مع الشركاء الاستراتيجيين</td>
                    <td><input onchange="change({{ $t[18]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[18]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[18]->percentage == 100) bg-success @endif @if ($t[18]->percentage < 50) bg-danger @endif" style="width: {{ $t[18]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[18]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[18]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[18]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[18]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات الأداء الاستراتيجية</td>
                    <td><input onchange="change({{ $t[19]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[19]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[19]->percentage == 100) bg-success @endif @if ($t[19]->percentage < 50) bg-danger @endif" style="width: {{ $t[19]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[19]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[19]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[19]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[19]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• سلسلة ومواءمة الأهداف الاستراتيجية</td>
                    <td><input onchange="change({{ $t[20]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[20]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[20]->percentage == 100) bg-success @endif @if ($t[20]->percentage < 50) bg-danger @endif" style="width: {{ $t[20]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[20]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[20]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[20]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[20]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الانشطة المتعلقة بإستشراف المستقبل</td>
                    <td><input onchange="change({{ $t[21]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[21]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[21]->percentage == 100) bg-success @endif @if ($t[21]->percentage < 50) bg-danger @endif" style="width: {{ $t[21]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[21]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[21]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[21]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[21]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج انطباعات الشركاء الرئيسيين</td>
                    <td><input onchange="change({{ $t[22]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[22]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[22]->percentage == 100) bg-success @endif @if ($t[22]->percentage < 50) bg-danger @endif" style="width: {{ $t[22]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[22]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[22]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[22]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[22]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="11">الخطط التشغيلية</th>
                    <td rowspan="6">قدرات الخطط التشغيلية</td>
                    <td rowspan="6"></td>
                    <td>• تطوير الخطط التشغيلية للدوائر وربطها بالخطة الاستراتيجية للوزارة</td>
                    <td><input onchange="change({{ $t[23]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[23]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[23]->percentage == 100) bg-success @endif @if ($t[23]->percentage < 50) bg-danger @endif" style="width: {{ $t[23]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[23]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[23]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[23]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[23]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التخطيط المالي للمبادرات/المشاريع/البرامج في الخطط التشغيلية</td>
                    <td><input onchange="change({{ $t[24]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[24]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[24]->percentage == 100) bg-success @endif @if ($t[24]->percentage < 50) bg-danger @endif" style="width: {{ $t[24]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[24]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[24]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[24]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[24]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق دراسة تحليل المنفعة أو الاحتياج مقابل التكلفة للمبادرات/المشاريع/البرامج</td>
                    <td><input onchange="change({{ $t[25]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[25]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[25]->percentage == 100) bg-success @endif @if ($t[25]->percentage < 50) bg-danger @endif" style="width: {{ $t[25]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[25]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[25]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[25]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[25]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحديد الحلول او البدائل والمخاطر التي تمت دراستها وتحليلها ومقارنتها للمبادرات/
                        المشاريع/البرامج</td>
                    <td><input onchange="change({{ $t[26]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[26]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[26]->percentage == 100) bg-success @endif @if ($t[26]->percentage < 50) bg-danger @endif" style="width: {{ $t[26]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[26]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[26]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[26]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[26]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مراجعة ومتابعة تنفيذالخطط التشغيلية من خلال مؤشرات أداء ملائمة ومسؤوليات محددة</td>
                    <td><input onchange="change({{ $t[27]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[27]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[27]->percentage == 100) bg-success @endif @if ($t[27]->percentage < 50) bg-danger @endif" style="width: {{ $t[27]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[27]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[27]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[27]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[27]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تقييم أثر تطبيق المبادرات/المشاريع/البرامج في بناء القدرات للعاملين وزيادة منحنى التعلّم ونقل
                        المعرفة وتحقيق الاهداف الاستراتيجية</td>
                    <td><input onchange="change({{ $t[28]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[28]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[28]->percentage == 100) bg-success @endif @if ($t[28]->percentage < 50) bg-danger @endif" style="width: {{ $t[28]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[28]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[28]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[28]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[28]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="5">نتائج الخطط التشغيلية</th>
                    <td rowspan="5">نتائج الاداء</td>
                    <td>• تطبيق المبادرات/المشاريع/البرامج (البعد الزمني والموازنة والموارد)</td>
                    <td><input onchange="change({{ $t[29]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[29]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[29]->percentage == 100) bg-success @endif @if ($t[29]->percentage < 50) bg-danger @endif" style="width: {{ $t[29]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[29]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[29]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[29]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[29]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحقيق أهداف المبادرات/المشاريع/البرامج على المستوى التشغيلي</td>
                    <td><input onchange="change({{ $t[30]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[30]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[30]->percentage == 100) bg-success @endif @if ($t[30]->percentage < 50) bg-danger @endif" style="width: {{ $t[30]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[30]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[30]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[30]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[30]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحقيق قيمة اضافية لصالح ذوي العلاقة</td>
                    <td><input onchange="change({{ $t[31]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[31]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[31]->percentage == 100) bg-success @endif @if ($t[31]->percentage < 50) bg-danger @endif" style="width: {{ $t[31]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[31]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[31]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[31]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[31]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• انعكاسات تطبيق المبادرات/المشاريع/البرامج المادية وغير المادية</td>
                    <td><input onchange="change({{ $t[32]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[32]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[32]->percentage == 100) bg-success @endif @if ($t[32]->percentage < 50) bg-danger @endif" style="width: {{ $t[32]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[32]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[32]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[32]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[32]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير المبادرات/المشاريع/البرامج جديدة</td>
                    <td><input onchange="change({{ $t[33]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[33]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[33]->percentage == 100) bg-success @endif @if ($t[33]->percentage < 50) bg-danger @endif" style="width: {{ $t[33]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[33]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[33]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[33]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[33]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="9">ادارة المخاطر واستمرارية الأعمال</th>
                    <td rowspan="4">قدرات ادارة المخاطر واستمرارية الأعمال</td>
                    <td rowspan="4"></td>
                    <td>• تبني وتطبيق خطة عمل لإدارة المخاطر واستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[34]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[34]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[34]->percentage == 100) bg-success @endif @if ($t[34]->percentage < 50) bg-danger @endif" style="width: {{ $t[34]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[34]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[34]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[34]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[34]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إعداد سجل خاص بالمخاطر المحتملة وضمان دورية تحديثه</td>
                    <td><input onchange="change({{ $t[35]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[35]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[35]->percentage == 100) bg-success @endif @if ($t[35]->percentage < 50) bg-danger @endif" style="width: {{ $t[35]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[35]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[35]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[35]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[35]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق آليات التواصل والتشاور مع أصحاب العلاقة في ما يخص إدارة المخاطر واستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[36]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[36]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[36]->percentage == 100) bg-success @endif @if ($t[36]->percentage < 50) bg-danger @endif" style="width: {{ $t[36]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[36]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[36]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[36]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[36]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• المراجعة والتقييم الدوري لخطة عمل إدارة المخاطر واستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[37]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[37]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[37]->percentage == 100) bg-success @endif @if ($t[37]->percentage < 50) bg-danger @endif" style="width: {{ $t[37]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[37]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[37]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[37]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[37]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="5">نتائج ادارة المخاطر واستمرارية الأعمال</td>
                    <td rowspan="4">نتائج الاداء</td>
                    <td>• مؤشرات متعلقة بالمخاطر/الفرص المحتملة</td>
                    <td><input onchange="change({{ $t[38]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[38]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[38]->percentage == 100) bg-success @endif @if ($t[38]->percentage < 50) bg-danger @endif" style="width: {{ $t[38]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[38]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[38]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[38]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[38]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج النجاح في التعامل مع المخاطر</td>
                    <td><input onchange="change({{ $t[39]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[39]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[39]->percentage == 100) bg-success @endif @if ($t[39]->percentage < 50) bg-danger @endif" style="width: {{ $t[39]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[39]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[39]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[39]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[39]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات مدى كفاءة وفاعلية الاجراءات المطبقة لمعالجة المخاطر</td>
                    <td><input onchange="change({{ $t[40]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[40]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[40]->percentage == 100) bg-success @endif @if ($t[40]->percentage < 50) bg-danger @endif" style="width: {{ $t[40]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[40]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[40]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[40]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[40]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج خطة عمل إدارة المخاطر واستمرارية الأعمال</td>
                    <td><input onchange="change({{ $t[41]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[41]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[41]->percentage == 100) bg-success @endif @if ($t[41]->percentage < 50) bg-danger @endif" style="width: {{ $t[41]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[41]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[41]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[41]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[41]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• مقاييس رأي ذوي العلاقة في إدارة المخاطر وإستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[42]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[42]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[42]->percentage == 100) bg-success @endif @if ($t[42]->percentage < 50) bg-danger @endif" style="width: {{ $t[42]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[42]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[42]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[42]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[42]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="9">الاستدامة</th>
                    <td rowspan="4">قدرات الاستدامة</td>
                    <td rowspan="4"></td>
                    <td>• تضمين خطط وزارة الشباب أهداف لتقليل الآثار السلبية وتعظيم الآثار الإيجابية لأنشطة وخدمات
                        وسياسات الوزارة لتحقيق الاستدامة</td>
                    <td><input onchange="change({{ $t[43]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[43]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[43]->percentage == 100) bg-success @endif @if ($t[43]->percentage < 50) bg-danger @endif" style="width: {{ $t[43]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[43]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[43]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[43]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[43]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تصميم وتطبيق برامج ومبادرات وسياسات لدعم تحقيق الأهداف الاستراتيجية ذات العلاقة بالاستدامة
                    </td>
                    <td><input onchange="change({{ $t[44]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[44]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[44]->percentage == 100) bg-success @endif @if ($t[44]->percentage < 50) bg-danger @endif" style="width: {{ $t[44]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[44]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[44]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[44]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[44]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحديد تأثير أنشطة وخدمات وسياسات وزارة الشباب على الاستدامة</td>
                    <td><input onchange="change({{ $t[45]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[45]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[45]->percentage == 100) bg-success @endif @if ($t[45]->percentage < 50) bg-danger @endif" style="width: {{ $t[45]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[45]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[45]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[45]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[45]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحديد مجالات التقاطع مع أهداف التنمية المستدامة والعمل على تحقيق متطلباتها</td>
                    <td><input onchange="change({{ $t[46]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[46]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[46]->percentage == 100) bg-success @endif @if ($t[46]->percentage < 50) bg-danger @endif" style="width: {{ $t[46]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[46]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[46]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[46]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[46]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="5">نتائج الاستدامة</td>
                    <td rowspan="3">نتائج الاداء</td>
                    <td>• الأداء الاقتصادي والبيئي والاجتماعي ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[47]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[47]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[47]->percentage == 100) bg-success @endif @if ($t[47]->percentage < 50) bg-danger @endif" style="width: {{ $t[47]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[47]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[47]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[47]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[47]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى تأثير أنشطة وخدمات برامج ومبادرات وسياسات وزارة الشباب على استخدامه</td>
                    <td><input onchange="change({{ $t[48]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[48]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[48]->percentage == 100) bg-success @endif @if ($t[48]->percentage < 50) bg-danger @endif" style="width: {{ $t[48]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[48]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[48]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[48]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[48]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى تحقيق المؤشرات الوطنية لتعزيز تنافسية الدولة في مؤشرات الاستدامة (أهداف التنمية المستدامة)
                    </td>
                    <td><input onchange="change({{ $t[49]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[49]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[49]->percentage == 100) bg-success @endif @if ($t[49]->percentage < 50) bg-danger @endif" style="width: {{ $t[49]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[49]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[49]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[49]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[49]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="2">مقاييس الرأي</td>
                    <td>• مقاييس رأي كافة الفئات المعنية عن ممارسة وزارة الشباب المتعلقة بالاستدامة</td>
                    <td><input onchange="change({{ $t[50]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[50]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[50]->percentage == 100) bg-success @endif @if ($t[50]->percentage < 50) bg-danger @endif" style="width: {{ $t[50]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[50]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[50]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[50]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[50]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مقاييس رأي كافة الفئات المعنية عن ممارسة وزارة الشباب المتعلقة بأهداف التنمية المستدامة</td>
                    <td><input onchange="change({{ $t[51]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[51]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[51]->percentage == 100) bg-success @endif @if ($t[51]->percentage < 50) bg-danger @endif" style="width: {{ $t[51]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn @if (count($t[51]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[51]->id]) }}">ملاحظات</a></td>
                    <td><a class="btn @if (count($t[51]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[51]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
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
