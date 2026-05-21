@section('page-title')
    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>Search: {{ $s }}</h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Search</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->
@endsection

@section('content')

<div class="page-wrapper">
    <div class="blog-custom-build">
        @if($posts->count())
            @foreach($posts as $post)
                <div class="post-item">
                    <h3><a href="{{ route('posts.single', $post->slug) }}">{{ $post->title }}</a></h3>
                    <p>{{ Str::limit($post->content, 150) }}</p>
                    <small>{{ $post->getPostDate() }} • Просмотров: {{ $post->views }}</small>
                </div>
            @endforeach
        @else
            По вашему запросу ничего не найдено...
        @endif
    </div>
</div>

<hr class="invis">

<div class="row">
    <div class="col-md-12">
        <nav aria-label="Page navigation">
            {{ $posts->appends(['s' => request()->$s])->links() }}
        </nav>
    </div><!-- end col -->
</div><!-- end row -->

@endsection