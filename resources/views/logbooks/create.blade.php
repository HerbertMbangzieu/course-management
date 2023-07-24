@extends('lecturerLayout')

@section('title')
    {{$course->code}}
@endsection

@section('page')
    {{$course->title}} - {{$course->specialty->code}}
@endsection

@section('content')

<div class="px-3 py-2">
<form action="/logbooks/store/{{$course->id}}" method="post">
@csrf
@method('POST')
<div class="input-group px-3">
        <label for="contenu" class="text-lg font-bold">Details of the Session</label>
        <textarea name="contenu" id="contenu" cols="30" rows="10" class="mytextarea rounded w-full"></textarea>
    </div>
    <div class="input-group mt-2 px-3">
        <button class="py-2 px-20 md:px-28 lg:px-36 text-white bg-red-900 rounded hover:bg-red-950 active:scale(90)">Save</button>
    </div>
</div>

</form>

@endsection