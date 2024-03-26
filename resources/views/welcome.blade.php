<x-layout>
    <x-header title="日本文化 - Cultura Giapponese" />
    @if (session('message'))
        <div class="alert alert-success">
        {{ session('message') }}
        </div>
    @endif
    @if (session('errorMessage'))
        <div class="alert alert-danger">
        {{ session('errorMessage') }}
        </div>
    @endif
    <div class="container mt-5  ">
        <div class="row justifiy-content-center flex-column align-content-center  ">
            <div class="col-8 border shadow">
                <h3 class="my-3 fs-1 d-flex justify-content-center ">Iscriviti alla nostra news letter:</h3>
                
                <form class="mt-5 mb-5" method="POST" action="{{route('contattaci.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="mail" >
                        
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Perchè vuoi partecipare?</label>
                        <textarea name="word" id="" cols="30" rows="10" class="form-control" ></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
    
    
</x-layout>
