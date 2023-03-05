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

        <div class="row my-5" style="margin-top: 100px !important;">

            <div class="col-12 d-flex justify-content-around">


                <a href="{{ url('1') }}" class="btn btn-lg btn-secondary">
                    <h4>التوجهات الوطنية والقطاعية</h4>
                </a>

                <a href="{{ url('2') }}" class="btn btn-lg btn-secondary">
                    <h4>الدور القيادي</h4>
                </a>

                <a href="{{ url('3') }}" class="btn btn-lg btn-secondary">
                    <h4>الاستراتيجية المؤسسية</h4>
                </a>

                <a href="{{ url('4') }}" class="btn btn-lg btn-secondary">
                    <h4>ادارة الموارد الحكومية</h4>
                </a>

            </div>

        </div>

        <div class="row my-5">

            <div class="col-12 d-flex justify-content-around">

                <a href="{{ url('5') }}" class="btn btn-lg btn-secondary">
                    <h4>المهام الحكومية</h4>
                </a>

                <a href="{{ url('6') }}" class="btn btn-lg btn-secondary">
                    <h4>التحول الرقمي</h4>
                </a>

                <a href="{{ url('7') }}" class="btn btn-lg btn-secondary">
                    <h4>التحسين والتطوير</h4>
                </a>

                <a href="#" class="btn btn-lg btn-secondary">
                    <h4>لوحة المعلومات</h4>
                </a>

            </div>

        </div>

    </div>

</x-app>
