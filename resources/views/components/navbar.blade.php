<nav class="navbar navbar-expand-lg bg-fourthCus shadow navbarCus">
    <div class="container-fluid">
        <a class="navbar-brand  " href="#" id="logoViola">
            <img class="myLogo" src="../../media/logojap2.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fs-2" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-2 " href="{{ route('student') }}">Guide</a>
                </li>


            </ul>

        </div>
    </div>
</nav>
