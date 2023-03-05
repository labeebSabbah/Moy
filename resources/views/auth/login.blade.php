<x-app>

    <x-slot:title>Login</x-slot:title>

    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 100vh">

        <form action="{{ route('login') }}" method="POST" class="form text-center w-25">
        
            @csrf

            <div class="form-group">

                <img src="{{ url('images/moy.png') }}" alt="Moy" width="100">

            </div>

            <div class="form-group mb-3">

                <label for="username" class="form-label">اسم المستخدم</label>

                <input type="text" name="username" id="username" class="form-control">

            </div>

            <div class="form-group mb-3">

                <label for="password" class="form-label">كلمة المرور</label>

                <input type="password" name="password" id="password" class="form-control">

            </div>

            <div class="form-group">

                <button type="submit" class="btn btn-primary">دخول</button>

            </div>

        </form>

    </div>

</x-app>