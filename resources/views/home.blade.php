<x-app>

    <x-slot:title>Home</x-slot:title>

    <div class="container">

        <div class="row mb-5">

            <div class="col-2">

                <img src="{{ url('images/jo.gif') }}" alt="Jordan" width="100">

            </div>

            <div class="col-8 d-flex justify-content-center align-items-center">

                <h3>ملف متابعة الانجاز لملف جائزة الملك عبدالله الثاني للتميز</h3>

            </div>

            <div class="col-2">
                <img src="{{ url('images/moy.png') }}" alt="Moy" width="131.117" style="margin-top: 13px;">
            </div>

        </div>

        <div class="my-5" style="margin-top: 100px !important;">

            <div class="d-flex justify-content-around">

                <div class="dropdown">
                    <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      محور التخطيط
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('1') }}">1 - التوجهات الوطنية والقطاعية</a></li>
                      <li><a class="dropdown-item" href="{{ route('2') }}">2 - الدور القيادي</a></li>
                      <li><a class="dropdown-item" href="{{ route('3') }}">3 - الاستراتيجية المؤسسية</a></li>
                    </ul>
                  </div>

                  <div class="dropdown">
                    <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      محور التنفيذ
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('4') }}">4 - ادارة الموارد الحكومية</a></li>
                      <li><a class="dropdown-item" href="{{ route('5') }}">5 - المهام الحكومية</a></li>
                      <li><a class="dropdown-item" href="{{ route('6') }}">6 - التحول الرقمي</a></li>
                    </ul>
                  </div>

                  <div class="dropdown">
                    <button class="btn btn-lg btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      محور التحول
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('7') }}">7 - التحسين والتطوير</a></li>
                    </ul>
                  </div>

                  <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    <h4>لوحة المعلومات</h4>
                </a>

            </div>

        </div>

</x-app>
