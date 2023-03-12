<x-app>

    <x-slot:title>Attachments</x-slot:title>

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

            .btn-close {

                margin: 0 !important;

            }
        </style>

    </x-slot:styles>

    <a href="{{ route($task->standard) }}" class="btn btn-primary" style="position: fixed; top: 10px; right: 10px;"><i class="fa-solid fa-arrow-right"></i></a>

    <table class="table table-responsive text-center align-middle">

        <thead>

            <tr>

                <th colspan="3" class="text-start"><button class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#add">اضافة</button></th>

            </tr>

            <tr>

                <th>الاسم</th>

                <th style="width: 20%">تاريخ النشر</th>

                <th style="width: 10%">تحميل</th>

            </tr>

        </thead>

        <tbody>

            @foreach ($attachments as $attachment)
                <tr>

                    <td>{{ $attachment->name }}</td>

                    <td>{{ $attachment->created_at }}</td>

                    <td>

                        <a href="{{ url($attachment->path) }}" class="btn btn-primary" download><i
                                class="fa-solid fa-download"></i></a>

                    </td>

                </tr>
            @endforeach

        </tbody>

    </table>

    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addLabel">اضافة</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('attachments.store') }}" class="form" method="POST" enctype="multipart/form-data">
                    
                        @csrf

                        <input type="hidden" name="task_id" value="{{ $task->id }}">
                        <input type="hidden" name="standard" value="{{ $task->standard }}">

                        <div class="form-group mb-3">
                            <label for="name">الاسم</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="file">الملف</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>
                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <button type="button" onclick="$('form').submit()" class="btn btn-primary">رفع</button>
                </div>
            </div>
        </div>
    </div>

</x-app>
