<nav class="navbar navbar-expand-lg bg-body-tertiary bg-success">
    <div class="container">
        <!-- Brand or Logo -->
        <a class="navbar-brand" href="{{ route('home') }}">YourLogo</a>

        <!-- Toggler button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible navbar content -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">मुख्य पृष्ठ</a>
                </li>
                @php
                    // Initialize collections for first 7 items and remaining items
                    $first_Totals = $categories->take(7);
                    $others = $categories->skip(7);
                @endphp
                <!-- Loop through the first 7 categories -->
                @foreach ($first_Totals as $item)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cate', $item->slug) }}">{{ $item->name }}</a>
                    </li>
                @endforeach
                <!-- Dropdown for other categories -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        अन्‍य
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($others as $item)
                            <li>
                                <a class="dropdown-item" href="{{ route('cate', $item->slug) }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
