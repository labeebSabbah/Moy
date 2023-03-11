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

    <table class="table table-responsive text-center align-middle">

        <thead>

            <tr>

                <th colspan="3" class="text-start"><button class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#add">اضافة</button></th>

            </tr>

            <tr>

                <th>الملاحظة</th>

                <th style="width: 20%">تاريخ النشر</th>


            </tr>

        </thead>

        <tbody>

            @foreach ($notes as $note)
                <tr>

                    <td>{{ $note->message }}</td>

                    <td>{{ $note->created_at }}</td>

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
                    <button type="button" onclick="$('form').submit()" class="btn btn-primary">رفع</button>
                </div>
            </div>
        </div>
    </div>

</x-app>
