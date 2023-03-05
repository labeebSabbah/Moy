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
    <div class="d-flex justify-content-start">
        <table class="table table-responsive text-center align-middle" style="width: 95%; height: 80%;">
            <tbody>
                <tr>
                    <th colspan="4" style="background: blue; color: white; font-weight: 900;">التحسين والتطوير</th>
                    <th style="width: 10%">نسبة الانجاز</th>
                    <th style="width: 20%;">الملاحظات</th>
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
                            <div class="progress-bar" style="width: {{ $t[0]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• حصر وتصنيف البيانات والمعلومات والمعارف لدعم عملية اتخاذ القرار ومأسسة العمل الحكومي</td>
                    <td><input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[1]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• إدارة المخاطر والتهديدات المرتبطة بالموجودات المعرفية</td>
                    <td><input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[2]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• استخدام البيانات والمعلومات والمعارف عن الأداء الحالي لتحديد مجالات التعلّم وفرص التغيير
                        والابتكار</td>
                    <td><input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[3]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• استخدام الانظمة الحديثة والتي تساهم في عمليات تبادل المعرفة والتعلّم</td>
                    <td><input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[4]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• ضمان تبادل المعرفة المؤسسية مع الشركاء</td>
                    <td><input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[5]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td rowspan="8">نتائج ادارة المعرفة</td>
                    <td rowspan="8">نتائج الاداء</td>
                    <td>• تحقيق أهداف خطة إدارة المعرفة</td>
                    <td><input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[6]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج دقة المعلومات وملائمتها وتوفرها</td>
                    <td><input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[7]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج المشاركة وتبادل المعارف</td>
                    <td><input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[8]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج حصر المعارف في وزارة الشباب</td>
                    <td><input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[9]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج فعالية التقنيات والآليات التطويرية المستخدمة في نشر المعرفة</td>
                    <td><input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[10]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج إدارة المخاطر والتهديدات المرتبطة بالموجودات المعرفية</td>
                    <td><input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[11]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج متعلقة بإدارة التعلّم المؤسسي</td>
                    <td><input onchange="change({{ $t[12]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[12]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[12]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج متعلقة بمأسسة العمل الحكومي</td>
                    <td><input onchange="change({{ $t[13]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[13]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[13]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <th rowspan="15">ادارة الابتكار</th>
                    <td rowspan="7">قدرات ادارة الابتكار</td>
                    <td rowspan="7"></td>
                    <td>• تحديد مجالات الإبتكار التدريجي والتحويلي والجذري في وزارة الشباب</td>
                    <td><input onchange="change({{ $t[14]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[14]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[14]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تطوير وتطبيق خارطة طريق لإدارة الابتكار</td>
                    <td><input onchange="change({{ $t[15]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[15]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[15]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• بناء وادارة شبكة شراكات فعالة لدعم الابتكار</td>
                    <td><input onchange="change({{ $t[16]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[16]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[16]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• بناء ثقافة وبيئة عمل داعمة للإبتكار</td>
                    <td><input onchange="change({{ $t[17]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[17]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[17]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• توفير الموارد والقنوات الملائمة والأدوات التي تحفز المعنيين على الابتكار</td>
                    <td><input onchange="change({{ $t[18]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[18]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[18]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• إدارة المواهب وإعداد وتنفيذ برامج لبناء القدرات في مجال الابداع والابتكار</td>
                    <td><input onchange="change({{ $t[19]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[19]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[19]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تعديل الهيكل التنظيمي للجهة لتحديد مسؤولية إدارة الابتكار</td>
                    <td><input onchange="change({{ $t[20]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[20]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[20]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td rowspan="8">نتائج ادارة الابتكار</td>
                    <td rowspan="7">نتائج الاداء</td>
                    <td>• تحقيق أهداف خطة إدارة الابتكار</td>
                    <td><input onchange="change({{ $t[21]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[21]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[21]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• الاقتراحات/الأفكار الإبداعية المطبقة</td>
                    <td><input onchange="change({{ $t[22]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[22]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[22]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• الخدمات/المنتجات الجديدة أو المطورة الناتجة عن أفكار مبدعة او ابتكارات</td>
                    <td><input onchange="change({{ $t[23]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[23]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[23]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• زيادة الإيرادات/خفض النفقات المتأتية من تطبيق الافكار الابتكارية</td>
                    <td><input onchange="change({{ $t[24]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[24]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[24]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• المخصصات المرصودة للابتكار</td>
                    <td><input onchange="change({{ $t[25]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[25]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[25]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• النشاطات الابتكارية المنفذة مع الشركاء</td>
                    <td><input onchange="change({{ $t[26]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[26]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[26]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• الأبحاث والدراسات في مجال الابتكار</td>
                    <td><input onchange="change({{ $t[27]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[27]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[27]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• قياس انطباعات الموظفين ومتلقي الخدمات والشركاء عن انشطة ونتائج الابتكار</td>
                    <td><input onchange="change({{ $t[28]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[28]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[28]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <th rowspan="7">ادارة التغيير</th>
                    <td rowspan="5">قدرات ادارة التغيير</td>
                    <td rowspan="5"></td>
                    <td>• فهم العوامل الداخلية والخارجية المحركة لإدارة التغيير/ التحسين الواجب إجرائها والنتائج
                        المترتبة عليه.</td>
                    <td><input onchange="change({{ $t[29]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[29]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[29]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تطوير وتطبيق خطة لإدارة التغيير</td>
                    <td><input onchange="change({{ $t[30]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[30]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[30]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• بناء وادارة شبكة شراكات فعالة لدعم إدارة التغيير</td>
                    <td><input onchange="change({{ $t[31]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[31]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[31]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تطوير وتطبيق خطة للاتصال والتواصل مرتبطة بخطة ادارة التغيير</td>
                    <td><input onchange="change({{ $t[32]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[32]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[32]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• التنبؤ بالمتغيرات الداخلية والخارجية وسرعة الاستجابة لها بطرق مبتكرة وفي الوقت الملائم ويشمل
                        ذلك الرشاقة المؤسسية والقدرة على تغيير آليات العمل والموارد الداخلية لتتوائم مع المتغيرات والفرص
                        المتاحة</td>
                    <td><input onchange="change({{ $t[33]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[33]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[33]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td rowspan="2">نتائج ادارة التغيير</td>
                    <td>نتائج الاداء</td>
                    <td>• نتائج إدارة التغيير</td>
                    <td><input onchange="change({{ $t[34]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[34]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[34]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• قياس انطباعات الموظفين ومتلقي الخدمات والشركاء عن انشطة ونتائج إدارة التغيير</td>
                    <td><input onchange="change({{ $t[35]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[35]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[35]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
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
