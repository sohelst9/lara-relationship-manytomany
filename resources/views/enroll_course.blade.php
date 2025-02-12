@extends('web')

@section('content')
    <h2>Enroll in a Course</h2>
    <form action="{{ route('enroll_store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="student_id">Select Student</label>
            <select name="student_id" class="form-control">
                <option value="">-select-</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
            @error('student_id')
            <div class="mt-3 text-danger">{{ $message }}</div>
            @enderror
         
        </div>
        <div class="form-group mb-3">
            <label for="course_id">Select Course</label>
            <select name="course_id" class="form-control">
                <option value="">-select-</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
            @error('course_id')
            <div class="mt-3 text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Enroll</button>
    </form>
@endsection
