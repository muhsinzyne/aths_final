<div class="d-flex align-items-center">
    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
        <a href="{{route('students.show', $student->Student_ID)}}">
            <div class="symbol-label">
                <img src="{{theme()->getStudentImage($student->Student_ID)}}" alt="{{$student->Student_Name}}" class="w-100">
            </div>
        </a>
    </div>
    {{$student->Student_Name }} <br> {{$student->Student_Name_AR}}
</div>

