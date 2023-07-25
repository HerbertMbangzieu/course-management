@extends('lecturerLayout')

@section('title')
    Roll Call
@endsection

@section('page')
    Roll call - {{$logbook->course->title}} - {{$logbook->course->specialty->code}}
@endsection

@section('content')

<h2 class="font-semibold text-center m-2">Click on the status to change</h2>
<p class="my-3 text-md text-center"> Click on save after the call </p>
<hr>
<div class="px-3 py-2 flex justify-center mt-5">
    <div class=" border-[1px] border-red-900 w-5/12 ">
        <div class="flex p-2 w-full bg-red-900 text-white">
            <div class="font-semibold px-3 w-2/3"> Student Name</div>
            <div class="font-semibold px-3 w-1/3"> Student Status</div>
        </div><hr class="text-red-900">
        <?php foreach($logbook->course->specialty->students as $student):?>
            <div class="flex p-2 w-full">
                <div class="px-3 w-2/3"> {{$student->name}}</div>
                <div class="px-3 w-1/3">
                    <?php
                        $absence = count(App\Models\Absence::where(['student_id'=>$student->id, 'logbook_id'=>$logbook->id])->get());
                        if($absence > 0){
                            echo '<a href="/absences/unstore/'.$student->id.'/'.$logbook->id.'" class="text-red-700 absence-status"> Absent </a>';
                        }
                        else{
                            echo '<a href="/absences/store/'.$student->id.'/'.$logbook->id.'" class="text-green-700 absence-status"> Present </a>';
                        }
                    ?>
                </div>
            </div><hr class="text-red-900">
        <?php endforeach;?>
        
    <div class="px-12"><button href="/absences/store/0/1" id="save" class="py-2 my-2 w-full bg-red-900 hover:bg-red-950 text-white">Save</button></div>
    </div>
</div>

@endsection