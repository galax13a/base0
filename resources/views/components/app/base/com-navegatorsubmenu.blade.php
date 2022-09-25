<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <li class="dropdown"><a href="#"><span>
        {{ strtoupper(session('locate')) }} <!-- valor del lenguaje ES/EN -->    
    </span> <i class="bi bi-chevron-down"></i></a>
        <ul>
            <li><a href="/apps">#Apps</a></li>
            <li> <a class=" shadow-md" href="versions/pro">
                Version Pro
            </a>
        </li>
            <li><a class="" href="{{ url('/gift')}}">Gift Send</a></li>
            <li><a href="{{ url('/register-enterprise')}}">Enterprase</a></li>
            <li class="dropdown"><a href="#"><span>Lenguage</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="{{ url('locate/es')}}">Español</a></li>
                    <li><a href="{{ url('locate/en')}}">English</a></li>
                </ul>
            </li>
        </ul>
</div>