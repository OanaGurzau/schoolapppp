<div class="content">
  <nav class="sidebar">
    <ul class="side-nav">
        <li class="side-nav__item">
          <a href="/classes" class="side-nav__link">
            <svg class="side-nav__icon">
              <use xlink:href="img/sprite.svg#icon-key"></use>
            </svg>
            <span>cLASE</span>
         </a>
        </li>

      <li class="side-nav__item side-nav__item--active">
        <a href="/students" class="side-nav__link">
          <svg class="side-nav__icon">
            <use xlink:href="img/sprite.svg#icon-home"></use>
          </svg>
          <span>Elevi</span>
       </a>
      </li>
      <li class="side-nav__item">
        <a href="/users" class="side-nav__link">
          <svg class="side-nav__icon">
            <use xlink:href="img/sprite.svg#icon-key"></use>
          </svg>
          <span>Profesori</span>
       </a>
      </li>
      <li class="side-nav__item">
        <a href="/subjects" class="side-nav__link">
          <svg class="side-nav__icon">
            <use xlink:href="img/sprite.svg#icon-key"></use>
          </svg>
          <span>Materii</span>
       </a>
      </li>
    </ul>

    <div class="legal">
      &copy; 2018
    </div>

  </nav>
  <main class="content-view">
    @yield('content')
  </main>
</div>
