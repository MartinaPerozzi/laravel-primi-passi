    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel Hello World</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!-- Inserire il link a una rotta -->
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop')}}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>