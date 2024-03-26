<x-layout>
    
    <x-header title="Qualche info sulle nostre guide" />
    
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center ">
            <div class="col-6 ">
                <img src="https://picsum.photos/200" alt="...">
                <h2>{{ $student['name'] }}</h2>
                <h2>{{ $student['surname'] }}</h2>
                <h2>{{ $student['age'] }}</h2>
                <a href="{{ route('homepage') }}" class="btn btn-info"> Torna alla Home</a>
            </div>
            
        </div>
        
    </div>
    
</x-layout>
