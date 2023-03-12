@php
    
    $t = \App\Models\Task::where('standard', 6)->get();

    $s = \App\Models\Standard::where('name', 6)->first();

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
            <tr>
                <th colspan="3" style="background: blue; color: white; font-weight: 900;">التحول الرقمي</th>
                <th>{{ $standard->percentage }}%</th>
                <th style="width: 20%">نسبة الانجاز</th>
                <th style="width: 10%;">الملاحظات</th>
                <th>الوسائط</th>
            </tr>
            <tr>
                <th rowspan="14">البنية التحتية الرقمية</th>
                <td rowspan="8">قدرات البنية التحتية الرقمية</td>
                <td rowspan="8"></td>
                <td>• إعداد وإدارة خطة التحول الرقمي والتي تشمل مستوى الربط ما بين الحكومة والحكومة G2G والحكومة
                    والمواطن G2C والحكومة وقطاع الاعمال G2B</td>
                <td>
                    <input onchange="change({{ $t[0]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[0]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[0]->percentage == 100) bg-success @endif @if ($t[0]->percentage < 50) bg-danger @endif" style="width: {{ $t[0]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[0]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[0]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[0]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[0]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• تحديد مستوى النضج الرقمي وانعكاسه على خطة التحول الرقمي للوزارة</td>
                <td>
                    <input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[1]->percentage == 100) bg-success @endif @if ($t[1]->percentage < 50) bg-danger @endif" style="width: {{ $t[1]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[1]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[1]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[1]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[1]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• مستوى الموائمة والترابط مع الخطة الوطنية للتحول الرقمي</td>
                <td>
                    <input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[2]->percentage == 100) bg-success @endif @if ($t[2]->percentage < 50) bg-danger @endif" style="width: {{ $t[2]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[2]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[2]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[2]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[2]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• إدارة وإدامة البنية التحتية الرقمية</td>
                <td>
                    <input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[3]->percentage == 100) bg-success @endif @if ($t[3]->percentage < 50) bg-danger @endif" style="width: {{ $t[3]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[3]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[3]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[3]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[3]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• تقييم مستوى الجاهزية لدى الجهات الحكومية لتبني التكنولوجيا المتقدمة (البلوكتشين، الذكاء الاصطناعي،
                    البيانات الضخمة، ....)</td>
                <td>
                    <input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[4]->percentage == 100) bg-success @endif @if ($t[4]->percentage < 50) bg-danger @endif" style="width: {{ $t[4]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[4]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[4]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[4]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[4]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• جهود وزارة الشباب في المشاركة الرقمية والبيانات والمفتوحة</td>
                <td>
                    <input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[5]->percentage == 100) bg-success @endif @if ($t[5]->percentage < 50) bg-danger @endif" style="width: {{ $t[5]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[5]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[5]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[5]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[5]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• تطوير الموقع الالكتروني والالتزام بالمعايير الدولية لها</td>
                <td>
                    <input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[6]->percentage == 100) bg-success @endif @if ($t[6]->percentage < 50) bg-danger @endif" style="width: {{ $t[6]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[6]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[6]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[6]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[6]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• تطوير وتطبيق سياسات وخطط الأمن السيبراني ومستوى التنسيق مع الجهات ذات العلاقة</td>
                <td>
                    <input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[7]->percentage == 100) bg-success @endif @if ($t[7]->percentage < 50) bg-danger @endif" style="width: {{ $t[7]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[7]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[7]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[7]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[7]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td rowspan="6">نتائج البنية التحتية الرقمية</td>
                <td rowspan="6">نتائج الاداء</td>
                <td>• خطة التحول الرقمي في وزارة الشباب</td>
                <td>
                    <input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[8]->percentage == 100) bg-success @endif @if ($t[8]->percentage < 50) bg-danger @endif" style="width: {{ $t[8]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[8]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[8]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[8]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[8]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• الموقع الإلكتروني</td>
                <td>
                    <input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[9]->percentage == 100) bg-success @endif @if ($t[9]->percentage < 50) bg-danger @endif" style="width: {{ $t[9]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[9]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[9]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[9]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[9]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• البنية التحتية الرقمية</td>
                <td>
                    <input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[10]->percentage == 100) bg-success @endif @if ($t[10]->percentage < 50) bg-danger @endif" style="width: {{ $t[10]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[10]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[10]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[10]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[10]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• الأمن السيبراني</td>
                <td>
                    <input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[11]->percentage == 100) bg-success @endif @if ($t[11]->percentage < 50) bg-danger @endif" style="width: {{ $t[11]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[11]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[11]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[11]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[11]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• الترابط مع الخطة الوطنية للتحول الرقمي</td>
                <td>
                    <input onchange="change({{ $t[12]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[12]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[12]->percentage == 100) bg-success @endif @if ($t[12]->percentage < 50) bg-danger @endif" style="width: {{ $t[12]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[12]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[12]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[12]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[12]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• تبني التكنولوجيا المتقدمة</td>
                <td>
                    <input onchange="change({{ $t[13]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[13]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[13]->percentage == 100) bg-success @endif @if ($t[13]->percentage < 50) bg-danger @endif" style="width: {{ $t[13]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[13]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[13]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[13]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[13]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <th rowspan="14">الخدمات الرقمية</th>
                <td rowspan="5">قدرات الخدمات الرقمية</td>
                <td rowspan="5"></td>
                <td>• إعداد خطة الخدمات الحكومة الرقمية في وزارة الشباب</td>
                <td>
                    <input onchange="change({{ $t[14]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[14]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[14]->percentage == 100) bg-success @endif @if ($t[14]->percentage < 50) bg-danger @endif" style="width: {{ $t[14]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[14]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[14]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[14]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[14]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• تكامل الخدمات الرقمية والأنظمة الإلكترونية والتطبيقات مع مشاريع التحول الرقمي الوطنية (الرابط
                    الحكومي للخدمات، التوقيع الرقمي، السحابة الحكومية) بالإضافة الى التكامل مع الجهات الحكومية الأخرى
                </td>
                <td>
                    <input onchange="change({{ $t[15]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[15]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[15]->percentage == 100) bg-success @endif @if ($t[15]->percentage < 50) bg-danger @endif" style="width: {{ $t[15]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[15]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[15]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[15]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[15]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• خطة التوعية والاستخدام للخدمات الرقمية</td>
                <td>
                    <input onchange="change({{ $t[16]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[16]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[16]->percentage == 100) bg-success @endif @if ($t[16]->percentage < 50) bg-danger @endif" style="width: {{ $t[16]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[16]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[16]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[16]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[16]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• تطبيق المعايير العالمية والممارسات الفضلى في تقديم الخدمات الرقمية</td>
                <td>
                    <input onchange="change({{ $t[17]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[17]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[17]->percentage == 100) bg-success @endif @if ($t[17]->percentage < 50) bg-danger @endif" style="width: {{ $t[17]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[17]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[17]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[17]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[17]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• استخدام الحلول الذكية والتقنيات الحديثة المبتكرة بما يتفق مع احتياجات المعنيين</td>
                <td>
                    <input onchange="change({{ $t[18]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[18]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[18]->percentage == 100) bg-success @endif @if ($t[18]->percentage < 50) bg-danger @endif" style="width: {{ $t[18]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[18]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[18]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[18]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[18]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td rowspan="9">نتائج الخدمات الرقمية</td>
                <td rowspan="4">نتائج الاداء</td>
                <td>• خطة الخدمات الرقمية</td>
                <td>
                    <input onchange="change({{ $t[19]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[19]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[19]->percentage == 100) bg-success @endif @if ($t[19]->percentage < 50) bg-danger @endif" style="width: {{ $t[19]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[19]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[19]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[19]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[19]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• التكامل الرقمي فيما يتعلق بتقديم الخدمات الرقمية</td>
                <td>
                    <input onchange="change({{ $t[20]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[20]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[20]->percentage == 100) bg-success @endif @if ($t[20]->percentage < 50) bg-danger @endif" style="width: {{ $t[20]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[20]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[20]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[20]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[20]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• أثر الخدمات المقدمة على الأعمال والأنشطة الرئيسية للوزارة</td>
                <td>
                    <input onchange="change({{ $t[21]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[21]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[21]->percentage == 100) bg-success @endif @if ($t[21]->percentage < 50) bg-danger @endif" style="width: {{ $t[21]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[21]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[21]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[21]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[21]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• خطة التوعية الرقمية</td>
                <td>
                    <input onchange="change({{ $t[22]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[22]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[22]->percentage == 100) bg-success @endif @if ($t[22]->percentage < 50) bg-danger @endif" style="width: {{ $t[22]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[22]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[22]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[22]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[22]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td rowspan="5">مقاييس الرأي</td>
                <td>• انطباعات متلقي الخدمة والشركاء والمعنيين عن: الخدمات الرقمية المقدمة من وزارة الشباب</td>
                <td>
                    <input onchange="change({{ $t[23]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[23]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[23]->percentage == 100) bg-success @endif @if ($t[23]->percentage < 50) bg-danger @endif" style="width: {{ $t[23]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[23]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[23]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[23]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[23]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• مستوى الوعي بالخدمات الرقمية المقدمة</td>
                <td>
                    <input onchange="change({{ $t[24]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[24]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[24]->percentage == 100) bg-success @endif @if ($t[24]->percentage < 50) bg-danger @endif" style="width: {{ $t[24]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[24]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[24]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[24]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[24]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• مستوى الثقة بالتعامل مع الخدمات الرقمية</td>
                <td>
                    <input onchange="change({{ $t[25]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[25]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[25]->percentage == 100) bg-success @endif @if ($t[25]->percentage < 50) bg-danger @endif" style="width: {{ $t[25]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[25]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[25]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[25]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[25]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• نسب متابعة الشكاوى على الخدمات الرقمية</td>
                <td>
                    <input onchange="change({{ $t[26]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[26]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[26]->percentage == 100) bg-success @endif @if ($t[26]->percentage < 50) bg-danger @endif" style="width: {{ $t[26]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[26]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[26]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[26]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[26]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
            <tr>
                <td>• الموقع الالكتروني.</td>
                <td>
                    <input onchange="change({{ $t[27]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[27]->percentage }}%">
                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar @if ($t[27]->percentage == 100) bg-success @endif @if ($t[27]->percentage < 50) bg-danger @endif" style="width: {{ $t[27]->percentage }}%"></div>
                    </div>
                </td>
                <td>
                    <a class="btn @if (count($t[27]->notes)) btn-success @else btn-primary @endif" href="{{ route('notes.index', ['task' => $t[27]->id]) }}">ملاحظات</a>
                </td>
                <td>
                    <a class="btn @if (count($t[27]->attachments)) btn-success @else btn-primary @endif" href="{{ route('attachments.index', ['task' => $t[27]->id]) }}">
                        <i class="fa-solid fa-paperclip"></i>    
                    </a>
                </td>
            </tr>
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
