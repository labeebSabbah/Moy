@php
    
    $t = \App\Models\Task::where('standard', 2)->get();

    $s = \App\Models\Standard::where('name', 2)->first();

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
                    <th colspan="3" style="background: blue; color: white; font-weight: 900;">الدور القيادي</th>
                    <th>{{ $standard->percentage }}%</th>
                    <th style="width: 20%">نسبة الانجاز</th>
                    <th style="width: 10%;">الملاحظات</th>
                    <th>الوسائط</th>
                </tr>
                <tr>
                    <th rowspan="17">الثقافة المؤسسية</th>
                    <td rowspan="5">قدرات الثقافة المؤسسية</td>
                    <td rowspan="5"></td>
                    <td>• تحديد الرؤية والرسالة وحشد الجهود ومواءمة التوجهات الاستراتيجية لتحقيقهما وتحديد الأولويات من
                        الاحتياجات من الموارد الحكومية اللازمة لتحقيق التوجهات المؤسسية</td>
                    <td><input onchange="change({{ $t[0]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[0]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[0]->percentage == 100) bg-success @endif @if ($t[0]->percentage < 50) bg-danger @endif" style="width: {{ $t[0]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[0]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[0]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تحديد القيم المؤسسية ونشر ثقافة التميّز بما يعبر عن قيم التميز، والإنجاز، والعمل بروح
                        الفريق،وتكافؤ الفرص والعدالة في النوع الاجتماعي والتركيز على متلقي الخدمة ونشرها وتعزيز التزام
                        الموظفين بتطبيقها</td>
                    <td><input onchange="change({{ $t[1]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[1]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[1]->percentage == 100) bg-success @endif @if ($t[1]->percentage < 50) bg-danger @endif" style="width: {{ $t[1]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[1]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[1]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق برامج ومبادرات لترسيخ الثقافة المؤسسية بين الموظفين ودعم الصورة الإيجابية للموظفين</td>
                    <td><input onchange="change({{ $t[2]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[2]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[2]->percentage == 100) bg-success @endif @if ($t[2]->percentage < 50) bg-danger @endif" style="width: {{ $t[2]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[2]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[2]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نشر وتعزيز ثقافة إدارة التغيير والابتكار وإدارة المعرفة والتعلم المؤسسي</td>
                    <td><input onchange="change({{ $t[3]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[3]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[3]->percentage == 100) bg-success @endif @if ($t[3]->percentage < 50) bg-danger @endif" style="width: {{ $t[3]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[3]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[3]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق برامج ومبادرات لتمكين وتأهيل الموظفين للمواقع القيادية وبناء نماذج قيادية تكون قدوة
                        للموظفين في الالتزام بالقيم المؤسسية</td>
                    <td><input onchange="change({{ $t[4]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[4]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[4]->percentage == 100) bg-success @endif @if ($t[4]->percentage < 50) bg-danger @endif" style="width: {{ $t[4]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[4]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[4]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="12">نتائج الثقافة المؤسسية</td>
                    <td rowspan="6">نتائج الاداء</td>
                    <td>• مؤشرات أداء القيادة في مجال التوجه المؤسسي</td>
                    <td><input onchange="change({{ $t[5]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[5]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[5]->percentage == 100) bg-success @endif @if ($t[5]->percentage < 50) bg-danger @endif" style="width: {{ $t[5]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[5]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[5]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات ترسيخ الثقافة المؤسسية</td>
                    <td><input onchange="change({{ $t[6]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[6]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[6]->percentage == 100) bg-success @endif @if ($t[6]->percentage < 50) bg-danger @endif" style="width: {{ $t[6]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[6]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[6]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مستوى التزام الموظفين بالقيم المؤسسية</td>
                    <td><input onchange="change({{ $t[7]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[7]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[7]->percentage == 100) bg-success @endif @if ($t[7]->percentage < 50) bg-danger @endif" style="width: {{ $t[7]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[7]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[7]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات تأهيل الموظفين للمواقع القيادية</td>
                    <td><input onchange="change({{ $t[8]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[8]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[8]->percentage == 100) bg-success @endif @if ($t[8]->percentage < 50) bg-danger @endif" style="width: {{ $t[8]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[8]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[8]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات عن مستوى دمج النوع الاجتماعي</td>
                    <td><input onchange="change({{ $t[9]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[9]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[9]->percentage == 100) bg-success @endif @if ($t[9]->percentage < 50) bg-danger @endif" style="width: {{ $t[9]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[9]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[9]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات توفير بيئة ممكنة في العمل</td>
                    <td><input onchange="change({{ $t[10]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[10]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[10]->percentage == 100) bg-success @endif @if ($t[10]->percentage < 50) bg-danger @endif" style="width: {{ $t[10]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[10]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[10]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="6">مقاييس الرأي</td>
                    <td>• دور القيادة في مجال التوجه المؤسسي</td>
                    <td><input onchange="change({{ $t[11]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[11]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[11]->percentage == 100) bg-success @endif @if ($t[11]->percentage < 50) bg-danger @endif" style="width: {{ $t[11]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[11]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[11]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• ترسيخ الثقافة المؤسسية</td>
                    <td><input onchange="change({{ $t[12]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[12]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[12]->percentage == 100) bg-success @endif @if ($t[12]->percentage < 50) bg-danger @endif" style="width: {{ $t[12]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[12]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[12]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى التزام القيادة في وزارة الشباب بالقيم المؤسسية</td>
                    <td><input onchange="change({{ $t[13]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[13]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[13]->percentage == 100) bg-success @endif @if ($t[13]->percentage < 50) bg-danger @endif" style="width: {{ $t[13]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[13]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[13]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى التزام الموظفين بالقيم المؤسسية</td>
                    <td><input onchange="change({{ $t[14]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[14]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[14]->percentage == 100) bg-success @endif @if ($t[14]->percentage < 50) bg-danger @endif" style="width: {{ $t[14]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[14]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[14]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مستوى أداء الفريق القيادي وتأهيل الصف الثاني</td>
                    <td><input onchange="change({{ $t[15]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[15]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[15]->percentage == 100) bg-success @endif @if ($t[15]->percentage < 50) bg-danger @endif" style="width: {{ $t[15]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[15]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[15]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى توفير بيئة ممكنة في العمل</td>
                    <td><input onchange="change({{ $t[16]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[16]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[16]->percentage == 100) bg-success @endif @if ($t[16]->percentage < 50) bg-danger @endif" style="width: {{ $t[16]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[16]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[16]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="16">الاتصال واشراك المعنيين</th>
                    <td rowspan="6">قدرات الاتصال واشراك المعنيين</td>
                    <td rowspan="6"></td>
                    <td>• تحديد جميع المعنيين وإحتياجاتهم وكيفية تلبيتها والاستجابة لها في الخطة الاستراتيجية لوزارة
                        الشباب</td>
                    <td><input onchange="change({{ $t[17]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[17]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[17]->percentage == 100) bg-success @endif @if ($t[17]->percentage < 50) bg-danger @endif" style="width: {{ $t[17]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[17]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[17]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إيجاد وتفعيل قنوات إتصال حديثة وفعالة ومباشرة ومنتظمة ممتنوعة مع جميع المعنيين</td>
                    <td><input onchange="change({{ $t[18]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[18]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[18]->percentage == 100) bg-success @endif @if ($t[18]->percentage < 50) bg-danger @endif" style="width: {{ $t[18]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[18]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[18]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير خطة الإتصال المؤسسي وخطة الاتصال في الطوارئ والأزمات</td>
                    <td><input onchange="change({{ $t[19]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[19]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[19]->percentage == 100) bg-success @endif @if ($t[19]->percentage < 50) bg-danger @endif" style="width: {{ $t[19]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[19]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[19]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نشر الروح الايجابية بتطوير خطة لترويج الانجازات على مستوى وزارة الشباب</td>
                    <td><input onchange="change({{ $t[20]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[20]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[20]->percentage == 100) bg-success @endif @if ($t[20]->percentage < 50) bg-danger @endif" style="width: {{ $t[20]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[20]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[20]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطوير قنوات لتقديم الشكاوى والإقتراحات من قبل المعنيين</td>
                    <td><input onchange="change({{ $t[21]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[21]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[21]->percentage == 100) bg-success @endif @if ($t[21]->percentage < 50) bg-danger @endif" style="width: {{ $t[21]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[21]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[21]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• إستخدام مواقع التواصل الاجتماعي في وزارة الشباب</td>
                    <td><input onchange="change({{ $t[22]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[22]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[22]->percentage == 100) bg-success @endif @if ($t[22]->percentage < 50) bg-danger @endif" style="width: {{ $t[22]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[22]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[22]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="10">نتائج الاتصال واشراك المعنيين</td>
                    <td rowspan="6">نتائج الاداء</td>
                    <td>• مؤشرات خطة الاتصال المؤسسي</td>
                    <td><input onchange="change({{ $t[23]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[23]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[23]->percentage == 100) bg-success @endif @if ($t[23]->percentage < 50) bg-danger @endif" style="width: {{ $t[23]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[23]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[23]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات أدوات الإتصال الداخلية والخارجية</td>
                    <td><input onchange="change({{ $t[24]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[24]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[24]->percentage == 100) bg-success @endif @if ($t[24]->percentage < 50) bg-danger @endif" style="width: {{ $t[24]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[24]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[24]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات الترويج الفعال لإنجازات الجهات</td>
                    <td><input onchange="change({{ $t[25]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[25]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[25]->percentage == 100) bg-success @endif @if ($t[25]->percentage < 50) bg-danger @endif" style="width: {{ $t[25]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[25]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[25]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات التواصل مع كافة المعنيين</td>
                    <td><input onchange="change({{ $t[26]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[26]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[26]->percentage == 100) bg-success @endif @if ($t[26]->percentage < 50) bg-danger @endif" style="width: {{ $t[26]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[26]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[26]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مؤشرات تفاعل وزارة الشباب مع المواطنين</td>
                    <td><input onchange="change({{ $t[27]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[27]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[27]->percentage == 100) bg-success @endif @if ($t[27]->percentage < 50) bg-danger @endif" style="width: {{ $t[27]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[27]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[27]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• استخدام قنوات التواصل الاجتماعي</td>
                    <td><input onchange="change({{ $t[28]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[28]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[28]->percentage == 100) bg-success @endif @if ($t[28]->percentage < 50) bg-danger @endif" style="width: {{ $t[28]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[28]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[28]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="4">مقاييس الرأي</td>
                    <td>• مستوى رضا المعنيين عن أداء الاتصال والمشاركة للجهة</td>
                    <td><input onchange="change({{ $t[29]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[29]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[29]->percentage == 100) bg-success @endif @if ($t[29]->percentage < 50) bg-danger @endif" style="width: {{ $t[29]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[29]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[29]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• قياس رأي المعنيين على الشكاوى والإقتراحات المقدمة</td>
                    <td><input onchange="change({{ $t[30]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[30]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[30]->percentage == 100) bg-success @endif @if ($t[30]->percentage < 50) bg-danger @endif" style="width: {{ $t[30]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[30]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[30]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• فعّالية التواصل الداخلي والخارجي</td>
                    <td><input onchange="change({{ $t[31]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[31]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[31]->percentage == 100) bg-success @endif @if ($t[31]->percentage < 50) bg-danger @endif" style="width: {{ $t[31]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[31]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[31]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• جدوى استخدام قنوات التواصل الاجتماعي</td>
                    <td><input onchange="change({{ $t[32]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[32]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[32]->percentage == 100) bg-success @endif @if ($t[32]->percentage < 50) bg-danger @endif" style="width: {{ $t[32]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[32]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[32]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <th rowspan="21">الحوكمة وادارة الأداء</th>
                    <td rowspan="10">قدرات الحوكمة وادارة الأداء</td>
                    <td rowspan="10"></td>
                    <td>• تبني وتطبيق سياسات فعالة وكفؤة ونظم متكاملة لتطبيق مباديء الحوكمة</td>
                    <td><input onchange="change({{ $t[33]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[33]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[33]->percentage == 100) bg-success @endif @if ($t[33]->percentage < 50) bg-danger @endif" style="width: {{ $t[33]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[33]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[33]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق معايير النزاهة الوطنية والشفافية في القطاع العام وفق الدليل الوطني المعتمد للحوكمة</td>
                    <td><input onchange="change({{ $t[34]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[34]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[34]->percentage == 100) bg-success @endif @if ($t[34]->percentage < 50) bg-danger @endif" style="width: {{ $t[34]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[34]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[34]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• الالتزام بمتطلبات أجهزة المتابعة والرقابة الإدارية والمالية الحكومية</td>
                    <td><input onchange="change({{ $t[35]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[35]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[35]->percentage == 100) bg-success @endif @if ($t[35]->percentage < 50) bg-danger @endif" style="width: {{ $t[35]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[35]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[35]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• استخدام الانظمة التقنية في حوكمة اجراءات وزارة الشباب</td>
                    <td><input onchange="change({{ $t[36]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[36]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[36]->percentage == 100) bg-success @endif @if ($t[36]->percentage < 50) bg-danger @endif" style="width: {{ $t[36]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[36]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[36]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق مدونة السلوك الوظيفي الحكومي ومعايير اخلاقيات العمل المهني</td>
                    <td><input onchange="change({{ $t[37]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[37]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[37]->percentage == 100) bg-success @endif @if ($t[37]->percentage < 50) bg-danger @endif" style="width: {{ $t[37]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[37]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[37]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تطبيق نظام إدارة الأداء المؤسسي وتحديد المسؤوليات والصلاحيات لتطبيقه</td>
                    <td><input onchange="change({{ $t[38]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[38]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[38]->percentage == 100) bg-success @endif @if ($t[38]->percentage < 50) bg-danger @endif" style="width: {{ $t[38]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[38]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[38]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• تصميم آليات وأنظمة لجمع وتحليل والتدقيق على بيانات الأداء ورفع التقارير للمعنيين بدورية منتظمة
                    </td>
                    <td><input onchange="change({{ $t[39]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[39]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[39]->percentage == 100) bg-success @endif @if ($t[39]->percentage < 50) bg-danger @endif" style="width: {{ $t[39]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[39]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[39]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• متابعة جمع بيانات مؤشرات الأداء التي يتم على أساسها قياس أداء وزارة الشباب</td>
                    <td><input onchange="change({{ $t[40]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[40]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[40]->percentage == 100) bg-success @endif @if ($t[40]->percentage < 50) bg-danger @endif" style="width: {{ $t[40]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[40]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[40]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• استخدام تقارير نظام إدارة الأداء المؤسسي في المراجعة الدورية للاستراتيجيات والمؤشرات</td>
                    <td><input onchange="change({{ $t[41]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[41]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[41]->percentage == 100) bg-success @endif @if ($t[41]->percentage < 50) bg-danger @endif" style="width: {{ $t[41]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[41]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[41]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• التنسيق مع رئاسة الوزراء بخصوص رصد الأداء المؤسسي ومشاركة المعلومات اللازمة مع الجهات المعنية
                    </td>
                    <td><input onchange="change({{ $t[42]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[42]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[42]->percentage == 100) bg-success @endif @if ($t[42]->percentage < 50) bg-danger @endif" style="width: {{ $t[42]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[42]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[42]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="11">نتائج الحوكمة وادارة الأداء</td>
                    <td rowspan="9">نتائج الاداء</td>
                    <td>• نتائج الملاحظات الواردة في تقارير الجهات الرقابية ذات العلاقة وفاعلية الإتصال معها</td>
                    <td><input onchange="change({{ $t[43]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[43]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[43]->percentage == 100) bg-success @endif @if ($t[43]->percentage < 50) bg-danger @endif" style="width: {{ $t[43]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[43]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[43]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج تطبيق نظام الحوكمة</td>
                    <td><input onchange="change({{ $t[44]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[44]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[44]->percentage == 100) bg-success @endif @if ($t[44]->percentage < 50) bg-danger @endif" style="width: {{ $t[44]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[44]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[44]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج نشاطات التوعية والتعاميم حول الحوكمة</td>
                    <td><input onchange="change({{ $t[45]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[45]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[45]->percentage == 100) bg-success @endif @if ($t[45]->percentage < 50) bg-danger @endif" style="width: {{ $t[45]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[45]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[45]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نسبة الالتزام بمدونة قواعد السلوك الوظيفي وأخلاقيات الوظيفة العامة</td>
                    <td><input onchange="change({{ $t[46]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[46]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[46]->percentage == 100) bg-success @endif @if ($t[46]->percentage < 50) bg-danger @endif" style="width: {{ $t[46]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[46]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[46]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• فعالية المساءلة والمحاسبة</td>
                    <td><input onchange="change({{ $t[47]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[47]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[47]->percentage == 100) bg-success @endif @if ($t[47]->percentage < 50) bg-danger @endif" style="width: {{ $t[47]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[47]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[47]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج كفاءة وفعالية نظام إدارة الأداء المؤسسي (دقة جمع وتحليل والتدقيق على بيانات الأداء ورفع
                        التقارير للمعنيين بدورية منتظمة)</td>
                    <td><input onchange="change({{ $t[48]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[48]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[48]->percentage == 100) bg-success @endif @if ($t[48]->percentage < 50) bg-danger @endif" style="width: {{ $t[48]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[48]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[48]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج استخدام تقارير نظام إدارة الأداء المؤسسي في التطوير والتحسين</td>
                    <td><input onchange="change({{ $t[49]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[49]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[49]->percentage == 100) bg-success @endif @if ($t[49]->percentage < 50) bg-danger @endif" style="width: {{ $t[49]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[49]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[49]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مستوى التنسيق مع رئاسة الوزراء بخصوص إدارة الأداء المؤسسي</td>
                    <td><input onchange="change({{ $t[50]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[50]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[50]->percentage == 100) bg-success @endif @if ($t[50]->percentage < 50) bg-danger @endif" style="width: {{ $t[50]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[50]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[50]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• نتائج الاستفادة من تقارير المشاركة بجوائز التميز</td>
                    <td><input onchange="change({{ $t[51]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[51]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[51]->percentage == 100) bg-success @endif @if ($t[51]->percentage < 50) bg-danger @endif" style="width: {{ $t[51]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[51]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[51]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td rowspan="2">مقاييس الرأي</td>
                    <td>• نتائج الشفافية والنزاهة وتكافؤ الفرص والعدالة في النوع الاجتماعي</td>
                    <td><input onchange="change({{ $t[52]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[52]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[52]->percentage == 100) bg-success @endif @if ($t[52]->percentage < 50) bg-danger @endif" style="width: {{ $t[52]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[52]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[52]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
                </tr>
                <tr>
                    <td>• مدى توفير وزارة الشباب ومشاركتها للمعلومات اللازمة حول الأداء المؤسسي (منهم رئاسة الوزراء)
                    </td>
                    <td><input onchange="change({{ $t[53]->id }}, this.value)" onclick="this.select()" type="text" name="" class="form-control form-control-sm mb-1" value="{{ $t[53]->percentage }}%"><div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar @if ($t[53]->percentage == 100) bg-success @endif @if ($t[53]->percentage < 50) bg-danger @endif" style="width: {{ $t[53]->percentage }}%"></div>
                        </div>
                    </td>
                    <td><a class="btn btn-success" href="{{ route('notes.index', ['task' => $t[53]->id]) }}">مشاهدة</a></td>
                    <td><a class="btn btn-success" href="{{ route('attachments.index', ['task' => $t[53]->id]) }}"><i class="fa-solid fa-paperclip"></i></a></td>
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
