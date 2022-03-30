<div class="d-flex align-items-center">
    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
        <a href="{{route('schools.show', $model->id)}}">
            {{-- <div class="symbol-label">
                <img src="{{theme()->getStudentImage($student->Student_ID)}}" alt="{{$student->Student_Name}}" class="w-100">
            </div> --}}
        </a>
    </div>
    {{$model->EnglishName }} <br> {{$model->ArabicName}}
</div>

