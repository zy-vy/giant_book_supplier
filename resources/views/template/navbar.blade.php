<nav class="navbar navbar-expand-lg navbar-light bg-light ">


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    @php
                         $categories = App\Models\category::all()
                    @endphp
                    @foreach ($categories as $category)
                    <a class="dropdown-item" href="/category/{{$category->name}}">{{$category->name}}</a>

                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/publisher">Publisher</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
        </ul>

    </div>
</nav>
