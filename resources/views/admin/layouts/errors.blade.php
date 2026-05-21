
@section('errors')
<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach()
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
