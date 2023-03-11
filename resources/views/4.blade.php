@php
    
    $t = \App\Models\Task::where('standard', 4)->get();

    $s = \App\Models\Standard::where('name', 4)->first();

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
    <div class="d-flex justify-content-start">
        <table class="table table-responsive text-center align-middle" style="width: 95%; height: 80%;">
            <tbody>
                <tr>
                    <th colspan="4" style="background: blue; color: white; font-weight: 900;">الموارد والممتلكات
                        الحكومية</th>
                    <th style="width: 10%">نسبة الانجاز</th>
                    <th style="width: 20%;">الملاحظات</th>
                    <th>الوسائط</th>
                </tr>
                <tr>
                    <th rowspan="20">إدارة الموارد البشرية</th>
                    <td rowspan="8">قدرات ادارة الموارد البشرية</td>
                    <td rowspan="8"></td>
                    <td>• تحديد الاحتياجات الحالية والمستقبلية من الموارد البشرية اللازمة لتوفير متطلبات الخطة
                        الاستراتيجية
                        والخطط التشغيلية للجهة</td>
                    <td><input onchange="change({{ $t[0]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[0]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[0]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[0]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[0]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير و/او تطبيق سياسات وأنظمة عمل متكاملة وخطط وبرامج ومبادرات ذات العلاقة بإدارة المواهب
                    </td>
                    <td><input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[1]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[1]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[1]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تمكين الموارد البشرية من خلال تأمين الأدوات وتفويض الصلاحيات والحصول على المعلومات</td>
                    <td><input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[2]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[2]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[2]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحديد الاحتياجات التدريبية بناء على تقييم الكفايات السلوكية والفنية</td>
                    <td><input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[3]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[3]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[3]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير ادوات التحفيز ومكافأة الإنجازات على جميع المستويات</td>
                    <td><input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[4]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[4]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[4]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحديد احتياجات ومتطلبات التواصل الفعّال مع الموارد البشرية</td>
                    <td><input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[5]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[5]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[5]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تقييم أداء الموارد البشرية بما يضمن تحقيق العدالة وتكافؤ الفرص والشفافية وربط الأداء الفردي
                        بالأداء
                        المؤسسي</td>
                    <td><input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[6]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[6]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[6]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• توفير بيئة عمل إيجابية وصحية وآمنه وملائمة لمختلف الفئات</td>
                    <td><input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[7]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[7]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[7]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="12">نتائج ادارة الموارد البشرية</td>
                    <td rowspan="5">نتائج الاداء</td>
                    <td>• نتائج تنمية الموارد البشرية (التدريب والتمكين والتحفيز)</td>
                    <td><input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[8]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[8]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[8]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الإنتاجية</td>
                    <td><input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[9]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[9]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[9]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• النتائج المتعلقة بأنظمة عمل وبرامج إدارة المواهب</td>
                    <td><input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[10]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[10]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[10]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• النتائج المتعلقة بالتواصل مع الموارد البشرية</td>
                    <td><input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[11]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[11]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[11]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• النتائج المتعلقة بتقييم الموارد البشرية</td>
                    <td><input onchange="change({{ $t[12]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[12]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[12]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[12]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[12]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="7">مقاييس الرأي</td>
                    <td>• الرضا الوظيفي</td>
                    <td><input onchange="change({{ $t[13]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[13]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[13]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[13]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[13]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• أنظمة وسياسات العمل</td>
                    <td><input onchange="change({{ $t[14]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[14]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[14]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[14]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[14]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• بيئة العمل</td>
                    <td><input onchange="change({{ $t[15]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[15]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[15]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[15]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[15]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• أدوات التواصل</td>
                    <td><input onchange="change({{ $t[16]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[16]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[16]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[16]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[16]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• أدوات التحفيز</td>
                    <td><input onchange="change({{ $t[17]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[17]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[17]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[17]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[17]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تقييم الموظفين</td>
                    <td><input onchange="change({{ $t[18]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[18]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[18]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[18]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[18]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تدريب الموظفين</td>
                    <td><input onchange="change({{ $t[19]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[19]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[19]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[19]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[19]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="19">ادارة الموارد المالية</th>
                    <td rowspan="10">قدرات ادارة الموارد المالية</td>
                    <td rowspan="10"></td>
                    <td>• إعداد وتنفيذ خطط مالية قصيرة ومتوسطة وبعيدة المدى وربطها باستراتيجية وزارة الشباب</td>
                    <td><input onchange="change({{ $t[20]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[20]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[20]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[20]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[20]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• ربط الموازنة السنوية للوزارة بأولويات تنفيذ خطتها الاستراتيجية، وتحديد المؤشرات في قانون
                        الموازنة
                        والقيم المستهدفة لها بما يتوافق مع مؤشرات الخطة الاستراتيجية</td>
                    <td><input onchange="change({{ $t[21]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[21]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[21]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[21]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[21]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة التدفقات النقدية</td>
                    <td><input onchange="change({{ $t[22]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[22]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[22]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[22]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[22]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تفعيل استخدام التقنيات الحديثة والذكية في اعداد وتنفيذ والرقابة على الموازنة العامة السنوية
                        للجهة</td>
                    <td><input onchange="change({{ $t[23]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[23]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[23]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[23]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[23]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إعداد وتطبيق برامج متكاملة لترشيد النفقات وتنمية الايرادات</td>
                    <td><input onchange="change({{ $t[24]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[24]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[24]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[24]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[24]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير اجراءات تحصيل الايرادات المستحقة للجهة الحكومية</td>
                    <td><input onchange="change({{ $t[25]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[25]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[25]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[25]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[25]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• توفير أدلة العمل والإجراءات اللازمة لتنفيذ العمليات المالية وبما يتوافق مع تعليمات الجهات
                        الحكومية ذات
                        العلاقة</td>
                    <td><input onchange="change({{ $t[26]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[26]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[26]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[26]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[26]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة عمليات شراء الخدمات والمواد بما يتوافق مع الأنظمة الحكومية المركزية</td>
                    <td><input onchange="change({{ $t[27]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[27]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[27]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[27]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[27]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تصميم عمليات الضبط الداخلي والرقابة والمراجعة وإعداد التقارير المالية</td>
                    <td><input onchange="change({{ $t[28]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[28]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[28]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[28]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[28]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة العلاقة مع الموردين والتعامل معهم وتقييم أدائهم بشفافية وتقدير جهود المتميزين منهم</td>
                    <td><input onchange="change({{ $t[29]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[29]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[29]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[29]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[29]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="9">نتائج ادارة الموارد المالية</td>
                    <td rowspan="9">نتائج الاداء</td>
                    <td>• التخطيط المالي</td>
                    <td><input onchange="change({{ $t[30]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[30]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[30]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[30]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[30]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الموازنة</td>
                    <td><input onchange="change({{ $t[31]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[31]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[31]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[31]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[31]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التدفق النقدي</td>
                    <td><input onchange="change({{ $t[32]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[32]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[32]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[32]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[32]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• حوسبة وأتمتة العمليات المالية وعمليات الشراء</td>
                    <td><input onchange="change({{ $t[33]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[33]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[33]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[33]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[33]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تنمية الإيرادات وترشيد النفقات</td>
                    <td><input onchange="change({{ $t[34]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[34]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[34]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[34]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[34]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الرقابة المالية</td>
                    <td><input onchange="change({{ $t[35]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[35]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[35]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[35]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[35]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تقييم الشركاء والموردين</td>
                    <td><input onchange="change({{ $t[36]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[36]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[36]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[36]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[36]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الشفافية المتعلقة بالموردين</td>
                    <td><input onchange="change({{ $t[37]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[37]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[37]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[37]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[37]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج الملاحظات الواردة في تقارير الجهات الرقابية (نتائج تقارير ديوان المحاسبة، وتقارير
                        التدقيق
                        الداخلي/الخارجي وتقارير دائرة الموازنة العامة)</td>
                    <td><input onchange="change({{ $t[38]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[38]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[38]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[38]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[38]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="15">ادارة الموارد والممتلكات</th>
                    <td rowspan="7">قدرات ادارة الموارد والممتلكات</td>
                    <td rowspan="7"></td>
                    <td>• تطوير وتطبيق سياسات وخطط لإدارة الموارد المادية والممتلكات من مباني ومرافق ومعدات وأجهزة
                        وربطها
                        بالاستراتيجية للوزارة</td>
                    <td><input onchange="change({{ $t[39]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[39]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[39]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[39]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[39]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الاستخدام الأمثل للممتلكات والمرافق والمعدات وإدارة دورة حياة تلك الأصول وأمنها وإدامتها</td>
                    <td><input onchange="change({{ $t[40]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[40]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[40]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[40]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[40]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق المواصفات والمعايير البيئية وترشيد استهلاك الموارد غير المتجددة</td>
                    <td><input onchange="change({{ $t[41]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[41]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[41]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[41]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[41]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق المواصفات والمعايير الخاصة بالسلامة العامة والصحة المهنية</td>
                    <td><input onchange="change({{ $t[42]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[42]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[42]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[42]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[42]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة المستودعات والمخزون وبما يتوافق مع أو يرتبط بنظام إدارة المخزون العام الحكومي (GIMCS)
                    </td>
                    <td><input onchange="change({{ $t[43]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[43]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[43]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[43]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[43]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• ضمان تكاملية عمليات الشراء مع المخزون</td>
                    <td><input onchange="change({{ $t[44]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[44]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[44]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[44]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[44]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تأهيل موظفي المستودعات بالكفايات التخصصية اللازمة لتمكينهم من قيامهم بأعمالهم</td>
                    <td><input onchange="change({{ $t[45]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[45]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[45]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[45]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[45]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="8">نتائج ادارة الموارد والممتلكات</td>
                    <td rowspan="8">نتائج الاداء</td>
                    <td>• كفاءة الاستعمال</td>
                    <td><input onchange="change({{ $t[46]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[46]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[46]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[46]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[46]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• عمليات الصيانة</td>
                    <td><input onchange="change({{ $t[47]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[47]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[47]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[47]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[47]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• خفض الاستهلاك المرتبط بإدارة الممتلكات</td>
                    <td><input onchange="change({{ $t[48]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[48]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[48]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[48]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[48]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إعادة الاستخدام والتدوير للمواد</td>
                    <td><input onchange="change({{ $t[49]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[49]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[49]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[49]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[49]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• المخزون والمستودعات</td>
                    <td><input onchange="change({{ $t[50]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[50]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[50]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[50]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[50]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• ترشيد استهلاك الموارد غير المتجددة</td>
                    <td><input onchange="change({{ $t[51]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[51]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[51]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[51]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[51]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة البيئة</td>
                    <td><input onchange="change({{ $t[52]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[52]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[52]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[52]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[52]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• السلامة العامة والصحة المهنية</td>
                    <td><input onchange="change({{ $t[53]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[53]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[53]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[53]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[53]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="11">ادارة الشراكات</th>
                    <td rowspan="4">قدرات ادارة الشراكات</td>
                    <td rowspan="4"></td>
                    <td>• تحديد وتصنيف الشركاء والموردين محلياً وإقليمياً ودولياً وفي القطاعين الحكومي والخاص ومؤسسات
                        المجتمع
                        المدني</td>
                    <td><input onchange="change({{ $t[54]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[54]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[54]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[54]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[54]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحديد فرص الشراكات المستقبلية وتنفيذ القابل للتطبيق منها، وبما يساهم في تحقيق قيمة مضافة
                        للمعنيين وخفض
                        التكاليف والإنفاق المتعقل</td>
                    <td><input onchange="change({{ $t[55]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[55]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[55]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[55]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[55]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نشر وتعميم مفاهيم ومهارات وتطبيقات الابتكار واستخدام التقنيات الحديثة والذكية في تطوير وزيادة
                        كفاءة
                        وفاعلية عمليات شراء الخدمات والتوريد</td>
                    <td><input onchange="change({{ $t[56]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[56]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[56]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[56]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[56]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة مشاريع الشراكة مع القطاع الخاص –حيثما توفر-</td>
                    <td><input onchange="change({{ $t[57]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[57]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[57]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[57]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[57]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="7">نتائج ادارة الشراكات</td>
                    <td rowspan="7">نتائج الاداء</td>
                    <td>• تقييم الشركاء</td>
                    <td><input onchange="change({{ $t[58]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[58]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[58]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[58]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[58]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مبادرات التحسين المنفذة مع الشركاء</td>
                    <td><input onchange="change({{ $t[59]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[59]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[59]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[59]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[59]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إدارة المشاريع المشتركة</td>
                    <td><input onchange="change({{ $t[60]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[60]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[60]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[60]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[60]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مستوى التقنية المستخدمة في التعامل مع الموردين والشركاء</td>
                    <td><input onchange="change({{ $t[61]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[61]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[61]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[61]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[61]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• انطباع الشركاء عن التعاون والشراكة والالتزام ببنود وشروط الشراكة/التعاقد</td>
                    <td><input onchange="change({{ $t[62]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[62]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[62]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[62]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[62]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• انطباع الشركاء عن الشفافية في التعامل</td>
                    <td><input onchange="change({{ $t[63]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[63]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[63]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[63]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[63]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• انطباع الشركاء عن قنوات التواصل</td>
                    <td><input onchange="change({{ $t[64]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[64]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[64]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[64]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[64]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
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
