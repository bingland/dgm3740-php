<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./scss/main.css">
    <title><?php echo($ptitle) ?></title>
</head>
<body>
    <nav class="mobileNav">
        <div class="open">
            <svg class='menu' viewBox='0 0 512 512'><title>Menu</title><path fill='none' stroke='currentColor' stroke-linecap='round' stroke-miterlimit='10' stroke-width='48' d='M88 152h336M88 256h336M88 360h336'/></svg>
            <h3>OPEN</h3>
        </div>
        <div class="navSearch">
            <input type="search" class="searchBar">
            <button>
                <svg width="20" height="20" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg>
            </button>
        </div>
    </nav>
    <div class="hiddenNav">
        <div class="ul">
            <div class="li"><a href="#">Home</a></div>
            <div class="li"><a href="#">Cruises</a></div>
            <div class="li"><a href="#">Agents</a></div>
            <div class="subNav">
                <div class="li"><a href="#">Item 1</a></div>
                <div class="li"><a href="#">Item 2</a></div>
            </div>
            <div class="li"><a href="#">Book</a></div>
        </div>
    </div>
    <header>
        <div class="wrapper1200">
            <!-- <img src="https://via.placeholder.com/150"> -->
            <figure class="logo">
                <img src="./images/logo/logo@2x.png" alt="logo"
                srcset="/images/logo/logo@1x.png 1x, /images/logo/logo@2x.png 2x, /images/logo/logo@3x.png 3x">
            </figure>
            <div class="phone"><a href="tel:123-456-7890">1-123-456-7890</a></div>
        </div>
    </header>
    <nav class="normalNav">
        <div class="wrapper1200">
            <div class="ul">
                <div class="li"><a href="#">Home</a></div>
                <div class="li"><a href="#">Cruises</a></div>
                
                <div class="dropdown">
                    <div class="li"><a href="#">Agents</a></div>
                    <div class="subNav">
                        <div class="li"><a href="#">Item 1</a></div>
                        <div class="li"><a href="#">Item 2</a></div>
                    </div>
                </div>
                <div class="li"><a href="#">Book</a></div>
            </div>
            <div class="navSearch">
                <input type="search" class="searchBar">
                <button>
                    <svg width="20" height="20" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg>
                </button>
            </div>
        </div>
    </nav>