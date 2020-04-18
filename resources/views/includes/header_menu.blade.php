<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{ route('home')  }}">Lazrel</a> </h5>
    <nav class="my-2 my-md-0 mr-md-3">
        @if (Auth::check())
            <a class="p-2 text-dark" href="/admin">Admin</a>
        @endif
        <a class="p-2 text-dark" href="/">Home</a>
        <a class="p-2 text-dark" href="/category">Category</a>
        <a class="p-2 text-dark" href="/category?category_id=1">Category -> Notepad</a>
        <a class="p-2 text-dark" href="/contact">Contact</a>

    </nav>
    @if (Auth::check())
        <a class="btn btn-outline-primary" href="/logout">Logout</a>
    @else
        <a class="btn btn-outline-primary" href="/login">Sign up</a>
    @endif

</div>
