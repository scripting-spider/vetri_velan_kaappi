<?php
// session_start();
include("config/db.php");

// Check login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Topbar</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* ---------- Topbar ---------- */
:root{
  --gap: 24px;
  --break: 992px;
}

*{box-sizing:border-box}
body{margin:0;font-family:Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;}

/* Topbar */
.topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 14px 22px;
    background: linear-gradient(180deg, #E70000, #9A0000);
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 1200;
    box-shadow: 0 6px 20px rgba(0,0,0,0.25);
    animation: fadeDown .6s ease;
}

/* Left section (logo + hamburger) */
.left-section{
  display:flex;
  align-items:center;
  gap:14px;
}
.logo{
    font-size:20px;
    font-weight:700;
    display:flex;
    align-items:center;
    gap:10px;
    text-shadow:0 2px 6px rgba(0,0,0,0.35);
}

/* Hamburger (button) */
.hamburger {
    display: none; /* visible on small screens via media */
    font-size: 22px;
    cursor: pointer;
    color: #fff;
    background: rgba(255,255,255,0.06);
    border: 1px solid transparent;
    padding:8px 10px;
    border-radius:10px;
    transition: transform .25s ease, background .2s;
    align-items:center;
}
.hamburger:active,
.hamburger.open{ transform: rotate(90deg); background: rgba(0,0,0,0.14); }

/* Main menu (desktop) */
.menu {
    display: flex;
    gap: 24px;
    list-style: none;
    margin: 0;
    padding: 0;
    align-items:center;
    transition: transform .25s ease;
}

.menu li a {
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    padding: 10px 14px;
    border-radius: 10px;
    transition: all .28s ease;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    white-space: nowrap;
}

.menu li a i{ transition: transform .2s ease; }
.menu li a:hover i{ transform: scale(1.18); }

.menu li a:hover,
.menu li a.active {
    background: rgba(255,255,255,0.17);
    backdrop-filter: blur(6px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.25);
}

/* Logout highlight */
.logout {
    background: rgba(255,255,255,0.28) !important;
    font-weight:600;
    border: 1px solid rgba(255,255,255,0.18);
}

/* Admin name */
.admin {
    margin-left: 12px;
    font-weight: 700;
    display:flex;
    align-items:center;
    gap:8px;
    font-size:14px;
}

/* ---------- Mobile/Tablet styles ---------- */
@media (max-width: 992px) {

  .topbar {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  
  }
  .hamburger { display:flex; }

  /* hide desktop layout: menu becomes collapsible block */
  .menu {
    position: fixed;
    top: 88px;            /* sits below topbar */
    right: 0;
    left: 0;
    margin: 0 auto;
    width: 100%;
    max-width: 980px;
    background: linear-gradient(180deg, #E70000, #9A0000);
    flex-direction: column;
    gap: 12px;
    padding: 18px;
    padding-bottom: 26px;
    list-style:none;
    border-radius: 0 0 14px 14px;
    box-shadow: 0 18px 40px rgba(0,0,0,0.35);
    overflow: hidden;

    /* animation using max-height for smooth open/close */
    max-height: 0;
    transition: max-height .38s cubic-bezier(.2,.98,.3,1), opacity .25s ease;
    opacity: 0;
    pointer-events: none;
  }

  /* when open */
  .menu.open {
    max-height: 420px; /* should be larger than content height */
    opacity: 1;
    pointer-events: auto;
  }

  .menu li a {
    width:100%;
    padding:12px 14px;
    font-size:16px;
    border-radius:10px;
  }

  /* overlay behind menu to close when tapped */
  .menu-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.45);
    opacity: 0;
    pointer-events: none;
    transition: opacity .28s ease;
    z-index: 110;
  }
  .menu-overlay.visible {
    opacity: 1;
    pointer-events: auto;
  }

  /* ensure admin name sits to right and visible (keeps topbar layout) */
  .admin { font-size:14px; }
}

/* ---------- Animations ---------- */
@keyframes fadeDown {
    from { opacity: 0; transform: translateY(-14px); }
    to { opacity: 1; transform: translateY(0); }
}

/* small polish */
.menu li a .fa-fw { width:18px; display:inline-block; text-align:center; }
</style>
</head>
<body>

<div class="topbar" role="navigation" aria-label="Main navigation">
    <div class="left-section">
        <!-- hamburger is a button for accessibility -->
        <button id="hamburgerBtn" class="hamburger" aria-expanded="false" aria-controls="topMenu" title="Toggle menu">
            <i class="fa-solid fa-bars" id="hamburgerIcon" aria-hidden="true"></i>
        </button>

        <h2 class="logo"><i class="fa-solid fa-mug-saucer" aria-hidden="true"></i> Vetri Velan Kaappi</h2>
    </div>

    <ul class="menu" id="topMenu">
        <li>
            <a href="dashboard.php" class="<?= basename($_SERVER['PHP_SELF'])=='dashboard.php'?'active':'' ?>">
                <i class="fa-solid fa-chart-line fa-fw"></i> Dashboard
            </a>
        </li>

        <li>
            <a href="category-view.php" class="<?= basename($_SERVER['PHP_SELF'])=='category-view.php'?'active':'' ?>">
                <i class="fa-solid fa-layer-group fa-fw"></i> Categories
            </a>
        </li>

        <li>
            <a href="product-view.php" class="<?= basename($_SERVER['PHP_SELF'])=='product-view.php'?'active':'' ?>">
                <i class="fa-solid fa-box-open fa-fw"></i> Products
            </a>
        </li>

        <li>
            <a href="testimonial-view.php" class="<?= basename($_SERVER['PHP_SELF'])=='testimonial-view.php'?'active':'' ?>">
                <i class="fa-solid fa-comments fa-fw"></i> Testimonials
            </a>
        </li>

        <li>
            <a href="logout.php" class="logout"><i class="fa-solid fa-right-from-bracket fa-fw"></i> Logout</a>
        </li>
    </ul>

    <p class="admin"><i class="fa-solid fa-user-shield" aria-hidden="true"></i> <?= $_SESSION['admin'] ?></p>
</div>

<!-- overlay (for closing menu on mobile) -->
<div id="menuOverlay" class="menu-overlay" aria-hidden="true"></div>

<script>
/* ---------- Robust menu toggle script ---------- */
(function(){
  const breakpoint = 992; // must match CSS media query
  const hamburgerBtn = document.getElementById('hamburgerBtn');
  const hamburgerIcon = document.getElementById('hamburgerIcon');
  const menu = document.getElementById('topMenu');
  const overlay = document.getElementById('menuOverlay');
  const menuLinks = menu.querySelectorAll('a');

  function isMobileView(){
    return window.innerWidth <= breakpoint;
  }

  function openMenu(){
    menu.classList.add('open');
    overlay.classList.add('visible');
    hamburgerBtn.classList.add('open');
    hamburgerBtn.setAttribute('aria-expanded','true');
    hamburgerIcon.classList.remove('fa-bars');
    hamburgerIcon.classList.add('fa-xmark');
    // prevent body scroll while menu open
    document.documentElement.style.overflow = 'hidden';
    document.body.style.overflow = 'hidden';
  }

  function closeMenu(){
    menu.classList.remove('open');
    overlay.classList.remove('visible');
    hamburgerBtn.classList.remove('open');
    hamburgerBtn.setAttribute('aria-expanded','false');
    hamburgerIcon.classList.remove('fa-xmark');
    hamburgerIcon.classList.add('fa-bars');
    document.documentElement.style.overflow = '';
    document.body.style.overflow = '';
  }

  function toggleMenu(){
    if(menu.classList.contains('open')) closeMenu();
    else openMenu();
  }

  // click hamburger
  hamburgerBtn.addEventListener('click', function(e){
    e.stopPropagation();
    // only toggle in mobile/tablet view; on desktop keep it inert
    if(isMobileView()) toggleMenu();
  });

  // close when clicking overlay
  overlay.addEventListener('click', function(){ closeMenu(); });

  // close when clicking a menu link (mobile)
  menuLinks.forEach(link => {
    link.addEventListener('click', function(){
      if(isMobileView()) closeMenu();
    });
  });

  // close menu if user resizes to desktop width
  let resizeTimer;
  window.addEventListener('resize', function(){
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(()=> {
      if(!isMobileView()){
        // ensure menu is visible in original desktop layout
        menu.classList.remove('open'); // remove mobile open state
        overlay.classList.remove('visible');
        hamburgerBtn.setAttribute('aria-expanded','false');
        hamburgerIcon.classList.remove('fa-xmark');
        hamburgerIcon.classList.add('fa-bars');
        document.documentElement.style.overflow = '';
        document.body.style.overflow = '';
      }
    }, 120);
  });

  // close when escape pressed
  document.addEventListener('keydown', (e)=>{
    if(e.key === 'Escape' && menu.classList.contains('open')) closeMenu();
  });

  // optional: close if clicking outside the menu + topbar (desktop won't be affected)
  document.addEventListener('click', (e)=>{
    if(isMobileView() && menu.classList.contains('open')) {
      const withinMenu = menu.contains(e.target);
      const withinHamburger = hamburgerBtn.contains(e.target);
      if(!withinMenu && !withinHamburger){
        closeMenu();
      }
    }
  });

})();
</script>
</body>
</html>
