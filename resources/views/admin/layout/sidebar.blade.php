<div class="sidebar-brand">
    <a href="index.html"> <img alt="image" src="{{ asset('backend/assets/img/logo.png') }}" class="header-logo" /> <span
            class="logo-name">Admin</span>
    </a>
</div>
<ul class="sidebar-menu">
    <li class="menu-header">Main</li>
    <li class="dropdown ">
        <a href="{{ route('admin-dashboard') }}" class="nav-link"><i
                data-feather="monitor"></i><span>Dashboard</span></a>
    </li>
    <li><a class="nav-link" href="{{ route('company.index') }}">Company</a></li>
    <li><a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
    <li class="dropdown">
    <li><a class="nav-link" href="{{ route('articles.index') }}">Articles</a></li>
    <li><a class="nav-link" href="portfolio.html">Portfolio</a></li>
    <li><a class="nav-link" href="blog.html">Blog</a></li>
    </li>
</ul>
