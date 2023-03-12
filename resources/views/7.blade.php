@php
    
    $t = \App\Models\Task::where('standard', 7)->get();

    $s = \App\Models\Standard::where('name', 7)->first();

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
                    <th colspan="3" style="background: blue; color: white; font-weight: 900;">التحسين والتطوير</th>
                    <th>{{ $standard->percentage }}%</th>
                    <th style="width: 20%">نسبة الانجاز</th>
                    <th style="width: 10%;">الملاحظات</th>
                    <th>الوسائط</th>
                </tr>
                <tr>
                    <th rowspan="14">ادارة المعرفة</th>
                    <td rowspan="6">قدرات ادارة المعرفة</td>
                    <td rowspan="6"></td>
                    <td>• تطوير خطة لإدارة المعرفة والتعلم المؤسسي لبناء مؤسسة متعلمة/ذكية لتحقيق الأهداف الاستراتيجية
                    </td>
                    <td><input onchange="change({{ $t[0]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[0]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[0]->percentage == 100) bg-success @endif @if ($t[0]->percentage < 50) bg-danger @endif" style="width: {{ $t[0]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[0]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[0]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• حصر وتصنيف البيانات والمعلومات والمعارف لدعم عملية اتخاذ القرار ومأسسة العمل الحكومي</td>
                    <td><input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[1]->percentage == 100) bg-success @endif @if ($t[1]->percentage < 50) bg-danger @endif" style="width: {{ $t[1]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[1]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[1]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة المخاطر والتهديدات المرتبطة بالموجودات المعرفية</td>
                    <td><input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[2]->percentage == 100) bg-success @endif @if ($t[2]->percentage < 50) bg-danger @endif" style="width: {{ $t[2]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[2]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[2]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• استخدام البيانات والمعلومات والمعارف عن الأداء الحالي لتحديد مجالات التعلّم وفرص التغيير
                        والابتكار</td>
                    <td><input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[3]->percentage == 100) bg-success @endif @if ($t[3]->percentage < 50) bg-danger @endif" style="width: {{ $t[3]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[3]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[3]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• استخدام الانظمة الحديثة والتي تساهم في عمليات تبادل المعرفة والتعلّم</td>
                    <td><input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[4]->percentage == 100) bg-success @endif @if ($t[4]->percentage < 50) bg-danger @endif" style="width: {{ $t[4]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[4]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[4]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• ضمان تبادل المعرفة المؤسسية مع الشركاء</td>
                    <td><input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[5]->percentage == 100) bg-success @endif @if ($t[5]->percentage < 50) bg-danger @endif" style="width: {{ $t[5]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[5]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[5]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="8">نتائج ادارة المعرفة</td>
                    <td rowspan="8">نتائج الاداء</td>
                    <td>• تحقيق أهداف خطة إدارة المعرفة</td>
                    <td><input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[6]->percentage == 100) bg-success @endif @if ($t[6]->percentage < 50) bg-danger @endif" style="width: {{ $t[6]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[6]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[6]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج دقة المعلومات وملائمتها وتوفرها</td>
                    <td><input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[7]->percentage == 100) bg-success @endif @if ($t[7]->percentage < 50) bg-danger @endif" style="width: {{ $t[7]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[7]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[7]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج المشاركة وتبادل المعارف</td>
                    <td><input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[8]->percentage == 100) bg-success @endif @if ($t[8]->percentage < 50) bg-danger @endif" style="width: {{ $t[8]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[8]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[8]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج حصر المعارف في وزارة الشباب</td>
                    <td><input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[9]->percentage == 100) bg-success @endif @if ($t[9]->percentage < 50) bg-danger @endif" style="width: {{ $t[9]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[9]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[9]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج فعالية التقنيات والآليات التطويرية المستخدمة في نشر المعرفة</td>
                    <td><input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[10]->percentage == 100) bg-success @endif @if ($t[10]->percentage < 50) bg-danger @endif" style="width: {{ $t[10]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[10]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[10]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج إدارة المخاطر والتهديدات المرتبطة بالموجودات المعرفية</td>
                    <td><input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[11]->percentage == 100) bg-success @endif @if ($t[11]->percentage < 50) bg-danger @endif" style="width: {{ $t[11]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[11]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[11]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج متعلقة بإدارة التعلّم المؤسسي</td>
                    <td><input onchange="change({{ $t[12]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[12]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[12]->percentage == 100) bg-success @endif @if ($t[12]->percentage < 50) bg-danger @endif" style="width: {{ $t[12]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[12]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[12]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج متعلقة بمأسسة العمل الحكومي</td>
                    <td><input onchange="change({{ $t[13]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[13]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[13]->percentage == 100) bg-success @endif @if ($t[13]->percentage < 50) bg-danger @endif" style="width: {{ $t[13]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[13]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[13]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="15">ادارة الابتكار</th>
                    <td rowspan="7">قدرات ادارة الابتكار</td>
                    <td rowspan="7"></td>
                    <td>• تحديد مجالات الإبتكار التدريجي والتحويلي والجذري في وزارة الشباب</td>
                    <td><input onchange="change({{ $t[14]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[14]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[14]->percentage == 100) bg-success @endif @if ($t[14]->percentage < 50) bg-danger @endif" style="width: {{ $t[14]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[14]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[14]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير وتطبيق خارطة طريق لإدارة الابتكار</td>
                    <td><input onchange="change({{ $t[15]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[15]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[15]->percentage == 100) bg-success @endif @if ($t[15]->percentage < 50) bg-danger @endif" style="width: {{ $t[15]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[15]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[15]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• بناء وادارة شبكة شراكات فعالة لدعم الابتكار</td>
                    <td><input onchange="change({{ $t[16]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[16]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[16]->percentage == 100) bg-success @endif @if ($t[16]->percentage < 50) bg-danger @endif" style="width: {{ $t[16]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[16]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[16]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• بناء ثقافة وبيئة عمل داعمة للإبتكار</td>
                    <td><input onchange="change({{ $t[17]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[17]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[17]->percentage == 100) bg-success @endif @if ($t[17]->percentage < 50) bg-danger @endif" style="width: {{ $t[17]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[17]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[17]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• توفير الموارد والقنوات الملائمة والأدوات التي تحفز المعنيين على الابتكار</td>
                    <td><input onchange="change({{ $t[18]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[18]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[18]->percentage == 100) bg-success @endif @if ($t[18]->percentage < 50) bg-danger @endif" style="width: {{ $t[18]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[18]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[18]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة المواهب وإعداد وتنفيذ برامج لبناء القدرات في مجال الابداع والابتكار</td>
                    <td><input onchange="change({{ $t[19]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[19]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[19]->percentage == 100) bg-success @endif @if ($t[19]->percentage < 50) bg-danger @endif" style="width: {{ $t[19]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[19]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[19]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تعديل الهيكل التنظيمي للجهة لتحديد مسؤولية إدارة الابتكار</td>
                    <td><input onchange="change({{ $t[20]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[20]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[20]->percentage == 100) bg-success @endif @if ($t[20]->percentage < 50) bg-danger @endif" style="width: {{ $t[20]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[20]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[20]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="8">نتائج ادارة الابتكار</td>
                    <td rowspan="7">نتائج الاداء</td>
                    <td>• تحقيق أهداف خطة إدارة الابتكار</td>
                    <td><input onchange="change({{ $t[21]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[21]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[21]->percentage == 100) bg-success @endif @if ($t[21]->percentage < 50) bg-danger @endif" style="width: {{ $t[21]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[21]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[21]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الاقتراحات/الأفكار الإبداعية المطبقة</td>
                    <td><input onchange="change({{ $t[22]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[22]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[22]->percentage == 100) bg-success @endif @if ($t[22]->percentage < 50) bg-danger @endif" style="width: {{ $t[22]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[22]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[22]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الخدمات/المنتجات الجديدة أو المطورة الناتجة عن أفكار مبدعة او ابتكارات</td>
                    <td><input onchange="change({{ $t[23]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[23]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[23]->percentage == 100) bg-success @endif @if ($t[23]->percentage < 50) bg-danger @endif" style="width: {{ $t[23]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[23]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[23]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• زيادة الإيرادات/خفض النفقات المتأتية من تطبيق الافكار الابتكارية</td>
                    <td><input onchange="change({{ $t[24]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[24]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[24]->percentage == 100) bg-success @endif @if ($t[24]->percentage < 50) bg-danger @endif" style="width: {{ $t[24]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[24]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[24]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• المخصصات المرصودة للابتكار</td>
                    <td><input onchange="change({{ $t[25]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[25]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[25]->percentage == 100) bg-success @endif @if ($t[25]->percentage < 50) bg-danger @endif" style="width: {{ $t[25]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[25]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[25]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• النشاطات الابتكارية المنفذة مع الشركاء</td>
                    <td><input onchange="change({{ $t[26]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[26]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[26]->percentage == 100) bg-success @endif @if ($t[26]->percentage < 50) bg-danger @endif" style="width: {{ $t[26]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[26]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[26]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الأبحاث والدراسات في مجال الابتكار</td>
                    <td><input onchange="change({{ $t[27]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[27]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[27]->percentage == 100) bg-success @endif @if ($t[27]->percentage < 50) bg-danger @endif" style="width: {{ $t[27]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[27]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[27]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• قياس انطباعات الموظفين ومتلقي الخدمات والشركاء عن انشطة ونتائج الابتكار</td>
                    <td><input onchange="change({{ $t[28]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[28]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[28]->percentage == 100) bg-success @endif @if ($t[28]->percentage < 50) bg-danger @endif" style="width: {{ $t[28]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[28]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[28]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="7">ادارة التغيير</th>
                    <td rowspan="5">قدرات ادارة التغيير</td>
                    <td rowspan="5"></td>
                    <td>• فهم العوامل الداخلية والخارجية المحركة لإدارة التغيير/ التحسين الواجب إجرائها والنتائج
                        المترتبة عليه.</td>
                    <td><input onchange="change({{ $t[29]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[29]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[29]->percentage == 100) bg-success @endif @if ($t[29]->percentage < 50) bg-danger @endif" style="width: {{ $t[29]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[29]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[29]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير وتطبيق خطة لإدارة التغيير</td>
                    <td><input onchange="change({{ $t[30]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[30]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[30]->percentage == 100) bg-success @endif @if ($t[30]->percentage < 50) bg-danger @endif" style="width: {{ $t[30]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[30]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[30]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• بناء وادارة شبكة شراكات فعالة لدعم إدارة التغيير</td>
                    <td><input onchange="change({{ $t[31]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[31]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[31]->percentage == 100) bg-success @endif @if ($t[31]->percentage < 50) bg-danger @endif" style="width: {{ $t[31]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[31]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[31]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير وتطبيق خطة للاتصال والتواصل مرتبطة بخطة ادارة التغيير</td>
                    <td><input onchange="change({{ $t[32]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[32]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[32]->percentage == 100) bg-success @endif @if ($t[32]->percentage < 50) bg-danger @endif" style="width: {{ $t[32]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[32]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[32]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التنبؤ بالمتغيرات الداخلية والخارجية وسرعة الاستجابة لها بطرق مبتكرة وفي الوقت الملائم ويشمل
                        ذلك الرشاقة المؤسسية والقدرة على تغيير آليات العمل والموارد الداخلية لتتوائم مع المتغيرات والفرص
                        المتاحة</td>
                    <td><input onchange="change({{ $t[33]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[33]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[33]->percentage == 100) bg-success @endif @if ($t[33]->percentage < 50) bg-danger @endif" style="width: {{ $t[33]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[33]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[33]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="2">نتائج ادارة التغيير</td>
                    <td>نتائج الاداء</td>
                    <td>• نتائج إدارة التغيير</td>
                    <td><input onchange="change({{ $t[34]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[34]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[34]->percentage == 100) bg-success @endif @if ($t[34]->percentage < 50) bg-danger @endif" style="width: {{ $t[34]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[34]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[34]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• قياس انطباعات الموظفين ومتلقي الخدمات والشركاء عن انشطة ونتائج إدارة التغيير</td>
                    <td><input onchange="change({{ $t[35]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[35]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[35]->percentage == 100) bg-success @endif @if ($t[35]->percentage < 50) bg-danger @endif" style="width: {{ $t[35]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[35]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[35]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
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
