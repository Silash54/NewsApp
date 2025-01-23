@extends('frontend.layout.app')
@section('content')
    {{--  section 1 :Top 4 Articles  --}}
    <section>
        <div class="container-fluid mt-5">
            <div class="row ">
                <div class="col-12 col-md-8 col-lg-9 my-5">
                    @foreach ($article as $item)
                        <div class="card">
                            <div class="card-body">
                                <!-- Title Link -->
                                <a href="{{ route('articles', $item->id) }}" style="text-decoration: none">
                                    <h1>{{ $item->title }}</h1>
                                </a>
                                <!-- Responsive Image -->
                                <div class="text-center">
                                    <img src="{{ asset($item->image) }}" class="img-fluid card-img-custom" alt="img">
                                </div>
                                <!-- Description -->
                                <p>{!! $item->description !!}</p>
                                <!-- Created At -->
                                <h5>{{ $item->created_at->diffForHumans() }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-12 col-md-4 col-lg-3 mt-5">
                    <div class="border-trending p-3">
                        <h3 class="text-primary">रुचाइएको</h3>
                    </div>
                    <ul class="list-unstyled ms-4">
                        @foreach ($trending as $data)
                        <li class="d-flex align-items-center mb-3">
                            <!-- Image with fixed size -->
                            <img class="img-fluid trending-image me-2"
                                src="{{ asset($data->image) }}"
                                alt="Image">
                            <!-- Content to the right -->
                            <a href="" class="text-decoration-none text-dark">{{ $data->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>
    </section>

    {{--  Section 2: politics  --}}
    <section>
        <div class="container">
            <div class="row">
                {{-- left side 1 news --}}
                <div class="col-md-8">
                    <div class="row">
                        <div class="card">
                            <div class="card-header">
                                <h3>Society</h3>
                            </div>
                            @isset($society)
                                <div class="card-body">
                                    <h2>{{ $society->title }}</h2>
                                    <img src="{{ asset('$society->image') }}" alt="img">
                                    <p>{!! $society->description !!}</p>
                                    <h5>{{ $society->created_at->diffForHumans() }}</h5>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
                {{-- right side 3 news --}}
                <div class="col-md-4">
                    <div class="row ">
                        @foreach ($sport as $item)
                            <div class="card">
                                <h2>{{ $item->title }}</h2>
                                <p>{{ $item->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
