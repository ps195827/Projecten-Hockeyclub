      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">HCAS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">HCAS</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class=active><a class="nav-link" href="{{ url('home') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li class="menu-header">Oefeningen</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Onderdelen</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('domein.index') }}">Domein lijst</a></li>
                <li><a class="nav-link" href="{{ route('sector.index') }}">Sectoren</a></li>
                <li><a class="nav-link" href="{{ route('subsector.index') }}">Subsectoren</a></li>
                <li><a class="nav-link" href="{{ route('leerfase.index') }}">Leerfases</a></li>
                <li><a class="nav-link" href="{{ route('spelfase.index') }}">Spelfases</a></li>
                <li><a class="nav-link" href="{{ route('trainingsonderdeel.index') }}">Trainingsonderdelen</a></li>
                <li><a class="nav-link" href="{{ route('moeilijkheidsgraad.index') }}">Moeilijkheidsgraad</a></li>
                <li><hr></li>
                <li><a class="nav-link" href="{{ route('tag.index') }}">Tags</a></li>
                <li><a class="nav-link" href="{{ route('category.index') }}">Category lijst</a></li>
              </ul>
            </li>
            <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dumbbell"></i> <span>Oefeningen</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('oefening.index') }}">Oefeningen lijst</a></li>
                <li><a class="nav-link" href="">Verwijderde oefeningen</a></li>
              </ul>
            </li>
            <li class="menu-header">Trainingen</li>
            <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-running"></i> <span>Trainingen</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Trainingen lijst</a></li>
              </ul>
            </li>
            <li class="menu-header">Personen</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Gebruikers</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="">administrator lijst</a></li>
                <li><a class="nav-link" href="">Auteur lijst</a></li>
                <li><a class="nav-link" href="">Coach lijst</a></li>
                <li><a class="nav-link" href="">Speler lijst</a></li>
                <li><a class="nav-link" href="">Verwijderde spelers</a></li>
              </ul>
            </li>
            <li class="menu-header">Onderwerpen</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Teams</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('doelgroep.index') }}">Doelgroepen</a></li>
                <li><a class="nav-link" href="{{ route('team.index') }}">Teams</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span>Meldingen</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Bericht verzenden trainer</a></li>
                <li><a class="nav-link" href="">Bericht verzenden speler</a></li>
                <li><a class="nav-link" href="">Lijst meldingen trainers</a></li>
                <li><a class="nav-link" href="">Lijst meldingen spelers</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="{{ route('media.index') }}"><i class="fas fa-file-image"></i> <span>Media</span></a></li>
            <li><a class="nav-link" href="{{ route('website.index') }}"><i class="fab fa-html5"></i> <span>Website</span></a></li>
        </aside>
      </div>