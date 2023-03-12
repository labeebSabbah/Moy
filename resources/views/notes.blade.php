<x-app>

    <x-slot:title>Notes</x-slot:title>

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

                <th colspan="4" class="text-start"><button class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#add">اضافة</button></th>

            </tr>

            <tr>

                <th style="width: 5%;">حذف</th>

                <th>الملاحظة</th>

                <th style="width: 20%">تاريخ النشر</th>

                <th style="width: 5%;">تعديل</th>


            </tr>

        </thead>

        <tbody>

            @foreach ($notes as $note)
                <tr>

                    <td><button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete" onclick="remove({{ $note->id }})"><i class="fa-solid fa-trash"></i></button></td>

                    <td>{{ $note->message }}</td>

                    <td>{{ $note->created_at }}</td>

                    <td><button class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#update" onclick="fill({{ $note->id }}, '{{ $note->message }}')"><i class="fa-solid fa-pencil"></i></button></td>

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
                    <form action="{{ route('notes.store') }}" class="form" method="POST">
                    
                        @csrf

                        <input type="hidden" name="task_id" value="{{ $task->id }}">
                        <input type="hidden" name="standard" value="{{ $task->standard }}">

                        <div class="form-group mb-3">
                            <label for="message">الملاحظة</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <button type="button" onclick="$('#add form').submit()" class="btn btn-primary">رفع</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addLabel">تعديل</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('notes.update') }}" class="form" method="POST">
                    
                        @csrf

                        @method('PUT')

                        <input type="hidden" id="id" name="id" value="">

                        <div class="form-group mb-3">
                            <label for="message">الملاحظة</label>
                            <textarea name="message" id="up_message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <button type="button" onclick="$('#update form').submit()" class="btn btn-primary">رفع</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addLabel">حذف</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2>
                        هل انت متأكد من رغبتك بالحذف ؟ 
                    </h2>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
                    <a id="remove" href="" class="btn btn-danger">حذف</a>
                </div>
            </div>
        </div>
    </div>

    <x-slot:scripts>

    <script>

        function fill(id, message) {

            $('#id').val(id);
            $('#up_message').html(message);

        }

        function remove(id)
        {

            $('#remove').attr('href', "@php echo url('note') @endphp" + `/${id}/destroy`);

        }

    </script>

    </x-slot:scripts>

</x-app>
