<x-layout>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-7">
                
                
                <form method="POST" action="{{route('register')}}">
                    
                    @csrf
                    
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input name="name" class="form-control" id="name">
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" class="form-control" id="email">
                    
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" class="form-control" id="password">
                </div>
                
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Conferma Password</label>
                <input name="password_confirmation" class="form-control" id="password_confirmation">
            </div>
            
            <button type="submit" class="btn btn-primary">Registrati</button>
        </form>
    </div>
</div>
</div>
</x-layout>