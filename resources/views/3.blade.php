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
    <div class="d-flex justify-content-start">
        <table class="table table-responsive text-center align-middle" style="width: 95%; height: 80%;">
            <tbody>
                <tr>
                    <th colspan="4" style="background: blue; color: white; font-weight: 900;">الاستراتيجية المؤسسية
                    </th>
                    <th style="width: 10%">نسبة الانجاز</th>
                    <th style="width: 20%;">الملاحظات</th>
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
                            <div class="progress-bar" style="width: {{ $t[0]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مواءمة التوجهات والأهداف ومؤشرات الأداء الاستراتيجية للوزارة مع القدرات المؤسسية الداخلية</td>
                    <td><input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[1]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• صياغة الأهداف والتوجهات الاستراتيجية بما يحقق رؤية و رسالة وزارة الشباب</td>
                    <td><input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[2]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• إعداد ومراجعة الاستراتيجية والسياسات الداعمة لها</td>
                    <td><input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[3]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• بناء شراكات فعالة ومستدامة مع الجهات الحكومية وغير الحكومية بما يحقق الاهداف الاستراتيجية
                        للوزارة والمنفعة المتبادلة</td>
                    <td><input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[4]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• التنسيق مع الشركاء الاستراتيجيين في وضع وتحقيق الأهداف الاستراتيجية المشتركة</td>
                    <td><input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[5]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مدى سعي وزارة الشباب الى توفير مصادر الدعم المالي من غير الموازنة بما يخدم تحقيق اهدافها
                        الاستراتيجية</td>
                    <td><input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[6]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• سلسلة ومواءمة الأهداف الاستراتيجية على جميع المستويات داخل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[7]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• ترجمة إستراتيجية وزارة الشباب إلى خطط تشغيلية وما تتضمنه من خدمات وعمليات ومشاريع ومبادرات
                    </td>
                    <td><input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[8]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• استخدام أساليب نوعية وكمية لإستشراف المستقبل للمجالات المرتبطة بعمل وزارة الشباب ودمجها في
                        الخطة الاستراتيجية</td>
                    <td><input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[9]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <th rowspan="13">نتائج الاستراتيجية واستشراف المستقبل</th>
                    <td rowspan="6">نتائج الاداء</td>
                    <td>• نتائج مؤشرات المهام الرئيسية للوزارة</td>
                    <td><input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[10]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج مؤشرات تحقيق الأهداف الاستراتيجية</td>
                    <td><input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[11]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج الرشاقة في التعامل/سرعة الاستجابة للمتغيرات الداخلية والخارجية</td>
                    <td><input onchange="change({{ $t[12]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[12]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[12]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج متعلقة في استشراف المستقبل</td>
                    <td><input onchange="change({{ $t[13]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[13]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[13]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج توفير مصادر الدعم المالي من غير الموازنة</td>
                    <td><input onchange="change({{ $t[14]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[14]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[14]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج تقييم الشراكات الاستراتيجية</td>
                    <td><input onchange="change({{ $t[15]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[15]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[15]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td rowspan="7">مقاييس الرأي</td>
                    <td>• تحقيق الأهداف والتوجهات الاستراتيجية</td>
                    <td><input onchange="change({{ $t[16]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[16]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[16]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• إعداد ومراجعة وتحديث الاستراتيجية</td>
                    <td><input onchange="change({{ $t[17]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[17]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[17]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• التنسيق مع الشركاء الاستراتيجيين</td>
                    <td><input onchange="change({{ $t[18]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[18]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[18]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مؤشرات الأداء الاستراتيجية</td>
                    <td><input onchange="change({{ $t[19]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[19]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[19]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• سلسلة ومواءمة الأهداف الاستراتيجية</td>
                    <td><input onchange="change({{ $t[20]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[20]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[20]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• الانشطة المتعلقة بإستشراف المستقبل</td>
                    <td><input onchange="change({{ $t[21]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[21]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[21]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج انطباعات الشركاء الرئيسيين</td>
                    <td><input onchange="change({{ $t[22]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[22]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[22]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <th rowspan="11">الخطط التشغيلية</th>
                    <td rowspan="6">قدرات الخطط التشغيلية</td>
                    <td rowspan="6"></td>
                    <td>• تطوير الخطط التشغيلية للدوائر وربطها بالخطة الاستراتيجية للوزارة</td>
                    <td><input onchange="change({{ $t[23]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[23]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[23]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• التخطيط المالي للمبادرات/المشاريع/البرامج في الخطط التشغيلية</td>
                    <td><input onchange="change({{ $t[24]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[24]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[24]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تطبيق دراسة تحليل المنفعة أو الاحتياج مقابل التكلفة للمبادرات/المشاريع/البرامج</td>
                    <td><input onchange="change({{ $t[25]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[25]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[25]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تحديد الحلول او البدائل والمخاطر التي تمت دراستها وتحليلها ومقارنتها للمبادرات/
                        المشاريع/البرامج</td>
                    <td><input onchange="change({{ $t[26]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[26]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[26]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مراجعة ومتابعة تنفيذالخطط التشغيلية من خلال مؤشرات أداء ملائمة ومسؤوليات محددة</td>
                    <td><input onchange="change({{ $t[27]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[27]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[27]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تقييم أثر تطبيق المبادرات/المشاريع/البرامج في بناء القدرات للعاملين وزيادة منحنى التعلّم ونقل
                        المعرفة وتحقيق الاهداف الاستراتيجية</td>
                    <td><input onchange="change({{ $t[28]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[28]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[28]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <th rowspan="5">نتائج الخطط التشغيلية</th>
                    <td rowspan="5">نتائج الاداء</td>
                    <td>• تطبيق المبادرات/المشاريع/البرامج (البعد الزمني والموازنة والموارد)</td>
                    <td><input onchange="change({{ $t[29]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[29]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[29]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تحقيق أهداف المبادرات/المشاريع/البرامج على المستوى التشغيلي</td>
                    <td><input onchange="change({{ $t[30]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[30]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[30]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تحقيق قيمة اضافية لصالح ذوي العلاقة</td>
                    <td><input onchange="change({{ $t[31]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[31]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[31]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• انعكاسات تطبيق المبادرات/المشاريع/البرامج المادية وغير المادية</td>
                    <td><input onchange="change({{ $t[32]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[32]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[32]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تطوير المبادرات/المشاريع/البرامج جديدة</td>
                    <td><input onchange="change({{ $t[33]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[33]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[33]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <th rowspan="9">ادارة المخاطر واستمرارية الأعمال</th>
                    <td rowspan="4">قدرات ادارة المخاطر واستمرارية الأعمال</td>
                    <td rowspan="4"></td>
                    <td>• تبني وتطبيق خطة عمل لإدارة المخاطر واستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[34]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[34]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[34]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• إعداد سجل خاص بالمخاطر المحتملة وضمان دورية تحديثه</td>
                    <td><input onchange="change({{ $t[35]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[35]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[35]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تطبيق آليات التواصل والتشاور مع أصحاب العلاقة في ما يخص إدارة المخاطر واستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[36]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[36]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[36]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• المراجعة والتقييم الدوري لخطة عمل إدارة المخاطر واستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[37]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[37]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[37]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td rowspan="5">نتائج ادارة المخاطر واستمرارية الأعمال</td>
                    <td rowspan="4">نتائج الاداء</td>
                    <td>• مؤشرات متعلقة بالمخاطر/الفرص المحتملة</td>
                    <td><input onchange="change({{ $t[38]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[38]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[38]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج النجاح في التعامل مع المخاطر</td>
                    <td><input onchange="change({{ $t[39]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[39]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[39]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مؤشرات مدى كفاءة وفاعلية الاجراءات المطبقة لمعالجة المخاطر</td>
                    <td><input onchange="change({{ $t[40]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[40]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[40]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• نتائج خطة عمل إدارة المخاطر واستمرارية الأعمال</td>
                    <td><input onchange="change({{ $t[41]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[41]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[41]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>مقاييس الرأي</td>
                    <td>• مقاييس رأي ذوي العلاقة في إدارة المخاطر وإستمرارية الاعمال</td>
                    <td><input onchange="change({{ $t[42]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[42]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[42]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <th rowspan="9">الاستدامة</th>
                    <td rowspan="4">قدرات الاستدامة</td>
                    <td rowspan="4"></td>
                    <td>• تضمين خطط وزارة الشباب أهداف لتقليل الآثار السلبية وتعظيم الآثار الإيجابية لأنشطة وخدمات
                        وسياسات الوزارة لتحقيق الاستدامة</td>
                    <td><input onchange="change({{ $t[43]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[43]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[43]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تصميم وتطبيق برامج ومبادرات وسياسات لدعم تحقيق الأهداف الاستراتيجية ذات العلاقة بالاستدامة
                    </td>
                    <td><input onchange="change({{ $t[44]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[44]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[44]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تحديد تأثير أنشطة وخدمات وسياسات وزارة الشباب على الاستدامة</td>
                    <td><input onchange="change({{ $t[45]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[45]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[45]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• تحديد مجالات التقاطع مع أهداف التنمية المستدامة والعمل على تحقيق متطلباتها</td>
                    <td><input onchange="change({{ $t[46]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[46]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[46]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td rowspan="5">نتائج الاستدامة</td>
                    <td rowspan="3">نتائج الاداء</td>
                    <td>• الأداء الاقتصادي والبيئي والاجتماعي ذات العلاقة بعمل وزارة الشباب</td>
                    <td><input onchange="change({{ $t[47]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[47]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[47]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مدى تأثير أنشطة وخدمات برامج ومبادرات وسياسات وزارة الشباب على استخدامه</td>
                    <td><input onchange="change({{ $t[48]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[48]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[48]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مدى تحقيق المؤشرات الوطنية لتعزيز تنافسية الدولة في مؤشرات الاستدامة (أهداف التنمية المستدامة)
                    </td>
                    <td><input onchange="change({{ $t[49]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[49]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[49]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td rowspan="2">مقاييس الرأي</td>
                    <td>• مقاييس رأي كافة الفئات المعنية عن ممارسة وزارة الشباب المتعلقة بالاستدامة</td>
                    <td><input onchange="change({{ $t[50]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[50]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[50]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-success">مشاهدة</button></td>
                    <td><button class="btn btn-success"><i class="fa-solid fa-paperclip"></i></button></td>
                </tr>
                <tr>
                    <td>• مقاييس رأي كافة الفئات المعنية عن ممارسة وزارة الشباب المتعلقة بأهداف التنمية المستدامة</td>
                    <td><input onchange="change({{ $t[51]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[51]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: {{ $t[51]->percentage }}%"></div>
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
