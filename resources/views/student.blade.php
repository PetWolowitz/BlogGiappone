<x-layout>
    
    <x-header title="Dettaglio Guide"/>
    <div class="container mt-5">
        <div class="row justify-content-center ">
            @foreach ($students as $student) 
            <div class="col-12 col-md-6  justify-content-center">
                
                
                <x-cards
                name="{{$student ['name']}}"
                surname="{{$student ['surname']}}"
                age="{{$student ['age']}}"
                link="{{route ('student.detail' ,  ['name'=>$student['name']])}}"
                
                />
            </div>
            @endforeach
            
        </div>
        
    </div>
</x-layout>