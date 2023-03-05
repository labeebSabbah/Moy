<x-app>

    <x-slot:title>Home</x-slot:title>

    <div class="row">

        <div class="d-flex justify-content-around align-items-center">

            <img src="{{ url('images/moy.png') }}" alt="Moy" height="100">

            <img src="{{ url('images/reward.jpg') }}" alt="Reward" width="200">

        </div>

    </div>

    <div class="d-flex justify-content-center align-items-center text-center flex-column gap-5">

        <div style="width: 70%;">

            <h1>ملف متابعة انجاز وزارة الشباب للمشاركة في جائزة الملك عبدالله الثاني لتميز الاداء الحكومي والشفافية</h1>

        </div>

        <a href="{{ route('login') }}" class="btn btn-lg btn-primary">دخول</a>

    </div>

</x-app>