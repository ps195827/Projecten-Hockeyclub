      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('home') }}">HCAS</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home') }}">HCAS</a>
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
                <li><a class="nav-link" href="{{ route('werkvorm.index') }}">Werkvorm</a></li>
                <li><hr></li>
                <li><a class="nav-link" href="{{ route('tag.index') }}">Tags</a></li>
              </ul>
            </li>
            <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-dumbbell"></i> <span>Oefeningen</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('oefening.index') }}">Oefeningen lijst</a></li>
                <li><a class="nav-link" href="{{route('oefening.index_delete')}}">Verwijderde oefeningen</a></li>
              </ul>
            </li>
            <li class="menu-header">Trainingen</li>
            <li class="dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-running"></i> <span>Trainingen</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('training.index') }}">Trainingen lijst</a></li>
              </ul>
            </li>
            <li class="menu-header">Personen</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>Gebruikers</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('admin.index') }}">Administrator lijst</a></li>
                <li><a class="nav-link" href="{{ route('auteur.index') }}">Auteur lijst</a></li>
                <li><a class="nav-link" href="{{ route('trainer.index') }}">Trainer lijst</a></li>
                <li><a class="nav-link" href="{{ route('speler.index') }}">Speler lijst</a></li>
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
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-envelope"></i> <span>Mededelingen</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('mededeling.index') }}">Mededelingen doen</a></li>
                <li><a class="nav-link" href="{{ route('melding.index') }}">Meldingen</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Bibliotheek</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('media.index') }}">Media</a></li>
                <li><a class="nav-link" href="{{ route('category.index') }}">Category lijst</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="{{ route('website.index') }}"><i class="fas fa-info"></i> <span>Informatie</span></a></li>
        </aside>
      </div>