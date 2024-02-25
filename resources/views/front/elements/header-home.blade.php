<header>
    <div class="user">
        <img src="{{ asset('administrator/images/' . $home->image) }}" alt="">
        <h3 class="name">{{ $home->nick_name }}</h3>
        <p class="post">{{ $home->job }}</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>
</header>

<div id="menu" class="fas fa-bars"></div>
