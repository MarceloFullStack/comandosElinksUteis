<template>
  <header>
      <nav class="navbar">
        <!-- MARCA -->
        <div class="branding">
          <h2><a href="#" class="branding-logo">Gepeto</a></h2>
        </div>
        <!-- MARCA -->
        <!-- HAMBURGUER -->
        <label for="input-hamburger" class="hamburger "></label>
        <input type="checkbox" id="input-hamburger" hidden>
        <!-- HAMBURGUER -->
        <ul class="menu">
          <!-- PESSOAS -->
          <li class="has-dropdown">

            <a href="#" class="menu-link">Pessoas
              <span class="arrow"></span>
            </a>
                <ul class="submenu">
                  <li><a href="#" class="menu-link">menuPessoa1</a></li>
                  <li><a href="#" class="menu-link">menuPessoa2</a></li>
                </ul>
          </li>
          <!-- PESSOAS -->
            <!-- MENU-UNICO -->
          <!-- <li><a href="#" class="menu-link">Menu único</a></li> -->
            <!-- MENU-UNICO -->

          <!-- <li class="has-dropdown">
            <a href="#" class="menu-link">Relatórios
              <span class="arrow"></span>
            </a>
            <ul class="submenu">
              <li><a href="#" class="menu-link">único</a></li>
              <li><a href="#" class="menu-link">Web Development</a></li>
              <li class="has-dropdown">
                <a href="#" class="menu-link">Full Stack Development
                  <span class="arrow"></span>
                </a>
                <ul class="submenu">
                  <li><a href="#" class="menu-link">Wordpress Development</a></li>
                  <li><a href="#" class="menu-link">Front End Development</a></li>
                  <li class="has-dropdown">
                    <a href="#" class="menu-link">MEAN Stack Development
                      <span class="arrow"></span>
                    </a>
                    <ul class="submenu">
                      <li><a href="#" class="menu-link">MongoDb</a></li>
                      <li><a href="#" class="menu-link">ExpressJS</a></li>
                      <li><a href="#" class="menu-link">AngularJS</a></li>
                      <li><a href="#" class="menu-link">NodeJS</a></li>
                    </ul>
                  </li>
                  <li><a href="#" class="menu-link">Back End Development</a></li>
                </ul>
              </li>
              <li><a href="#" class="menu-link">UI/UX Design</a></li>
            </ul>
          </li> -->
          <li class="has-dropdown">
            <a href="#" class="menu-link">Relatórios
              <span class="arrow"></span>
            </a>
            <ul class="submenu">

              <li class="has-dropdown">
                <a href="#" class="menu-link">Relatórios1
                  <span class="arrow"></span>
                </a>
                <ul class="submenu">
                  <li><a href="#" class="menu-link">AAA</a></li>
                  <li><a href="#" class="menu-link">BBB</a></li>
                  <li class="has-dropdown">
                    <a href="#" class="menu-link">MEAN Stack Development
                      <span class="arrow"></span>
                    </a>
                    <ul class="submenu">
                      <li><a href="#" class="menu-link">MongoDb</a></li>
                      <li><a href="#" class="menu-link">ExpressJS</a></li>
                      <li><a href="#" class="menu-link">AngularJS</a></li>
                      <li><a href="#" class="menu-link">NodeJS</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#" class="menu-link">UI/UX Design</a></li>
            </ul>
          </li>
          <li><a href="#" class="menu-link">Sair</a></li>
        </ul>

      </nav>
    </header>
</template>

<script>

export default {
  name: 'Navbar',
  mounted () {
    const hamburger = document.querySelector('.hamburger')
    hamburger.addEventListener('click', function () {
      this.classList.toggle('close')
    })
  }
}
</script>

<style language="scss">
:root {
  box-sizing: border-box;

  --primary: #20814f;
  --hover-color: #fdd052;
  --dark: #135734;
  --light: #fff;

  --header-bg: var(--primary);
}
*,
*::after,
*::before {
  box-sizing: inherit;
  margin: 0;
  padding: 0;
}
body {
  font-family: "josefin sans", "helvetica", sans-serif;
  font-size: 1rem;
}

header {
  background: var(--header-bg);
  padding-left: 2.5em;
  position: sticky;
  top: 0;
}
.branding-logo {
  color: var(--light);
  font-size: calc(0.8rem + 1vw);
  text-decoration: none;
}
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
}
.menu {
  display: flex;
  flex-direction: row;
}
.menu li {
  list-style: none;
}
.menu li a {
  display: block;
  text-decoration: none;
  color: var(--light);
  padding: 1em 1.5em;
  font-size: 1rem;
}

/* Styling submenu */
.has-dropdown {
  position: relative;
}
.submenu {
  position: absolute;
  left: 0;
  background-color: var(--dark);
  white-space: nowrap;
  padding: 1.5em 0;
  min-width: 16em;

  /* hide submenus */
  opacity: 0;
  transform: scaleY(0);
  transform-origin: top center;
}
.submenu > li > a {
  padding: 0.8em 1.5em;
}
.submenu .submenu {
  left: -100%;
  top: 0;
}
.submenu .submenu .submenu {
  left: -100%;
  top: 0;
}

.menu > li:hover > a,
.submenu > li:hover > a {
  background-color: hsla(0, 0%, 100%, 0.05);
  color: var(--hover-color);
}
.menu > li:hover > a {
  background-color: hsla(0, 0%, 0%, 0.95);
}

/* Arrows */

.arrow {
  width: 0.5em;
  height: 0.5em;
  display: inline-block;
  vertical-align: middle;
  border-left: 0.15em solid currentColor;
  border-bottom: 0.15em solid currentColor;
  transform: rotate(-45deg);
  margin-top: -0.25em;
  transition: transform 100ms ease-in-out;
}

/* Reveal  */
.menu > li:hover > a + .submenu,
.submenu > li:hover > a + .submenu {
  opacity: 1;
  transform: scale(1);
}

/* ANIMATE aRROWS */
.menu > li:hover > a > .arrow,
.submenu > li:hover > a > .arrow {
  transform: rotate(225deg);
}

@media only screen and (max-width: 78.75em) {
  .submenu .submenu .submenu {
    left: -100%;
    top: 0.5em;
  }
  .submenu {
    min-width: 16em;
  }
}
@media only screen and (max-width: 58.75em) {
  .menu li a {
    font-size: 1rem;
  }
}

@media only screen and (max-width: 50em) {
  header {
/*     position: relative; */
    padding: 1.5em 2em;
  }
  .menu {
    flex-flow: column;
    position: absolute;
    background: var(--light);
    top: 4.55em;
    left: 0;
    right: 0;
    height: 100vh;

    opacity: 0;
    transform: scaleY(0);
    transform-origin: top center;
    transition: 200ms transform cubic-bezier(0.36, 0.4, 0.42, 1.48) 100ms,
      100ms opacity ease-in-out;

    overflow-y: scroll;
  }
  .menu > li > a {
    font-size: 1rem;
    color: var(--dark);
  }
  .submenu > li > a {
    font-size: 1rem;
  }

  .submenu {
    top: 0;
    padding-left: 1.5em;
    border-left: 0.12em dotted hsla(342, 99%, 45%, 0.95);
  }
  .submenu .submenu {
    left: 0;
    top: 0;
  }
  .submenu .submenu .submenu {
    left: 0;
    top: 0;
  }

  .menu > li:hover > a + .submenu,
  .submenu > li:hover > a + .submenu {
    position: relative;
  }

  .hamburger {
    width: 2em;
    height: 0.25em;
    display: block;
    background: var(--light);
    position: relative;
    cursor: pointer;
    transition: 0.2s transform ease-in-out;
  }
  .hamburger::after,
  .hamburger::before {
    content: "";
    position: absolute;
    left: 0;
    background: inherit;
    width: inherit;
    height: inherit;

    transition: 0.2s transform ease-in-out;
  }

  .hamburger::after {
    top: 0.65em;
  }
  .hamburger::before {
    bottom: 0.65em;
  }

  .close::after,
  .close::before {
    top: 0;
    transition: 0.2s transform ease-in-out;
  }
  .close::before {
    display: none;
  }
  .close {
    transform: rotate(45deg);
    transition: 0.2s transform ease-in-out;
  }
  .close::after {
    transform: rotate(-90deg);
  }

  /* reveal menu */
  input[type="checkbox"]:checked + .menu {
    position: absolute;
    opacity: 1;
    transform: scaleY(1);
  }
}

main {
/* just to make scrollable vertically to see sticky navbar    */
  height: 200vh;
}
</style>
