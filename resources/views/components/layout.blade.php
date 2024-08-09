<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    {{-- bootstrap css internal --}}
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.css">
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- box icons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/category.css">
    {{-- flaticon --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body>
    <div class="container-dashboard container-fluid d-flex" style="padding: 0; margin: 0;">
        {{-- sidebar --}}
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor"
                    class="bi bi-book-half" viewBox="0 0 16 16">
                    <path
                        d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                </svg>
                <span class="fs-5">Epilogue Emporium</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="link-sidebar">
                    <a href="/dashboard" class="nav-link text-white">
                        <i class="bx bx-home"></i> Home
                    </a>
                </li>
                <li class="link-sidebar">
                    <a href="/category" class="nav-link text-white">
                        <i class="bx bx-category"></i> Category
                    </a>
                </li>
                <li class="link-sidebar">
                    <a href="#" class="nav-link text-white">
                        <i class="fi fi-rs-truck-side"></i> Orders
                    </a>
                </li>
                <li class="link-sidebar">
                    <a href="#" class="nav-link text-white">
                        <i class="bx bx-cart-alt"></i> Products
                    </a>
                </li>
                <li class="link-sidebar">
                    <a href="#" class="nav-link text-white">
                        <i class="fi fi-rr-settings"></i> Settings
                    </a>
                </li>
            </ul>
            <hr>
            <div class="logout-nav mb-3">
              <a href="/sessions/logout" class="nav-link text-white" >
                <i class="bx bx-log-out"></i>
                Logout
              </a>
            </div>
        </div>
        {{-- sidebar end --}}

        {{-- main --}}
        <main>
          {{-- header --}}
          <div class="header">
              <header class="py-3 mb-3 border-bottom">
                  <div class="container-fluid d-grid gap-3 d-flex justify-content-between align-items-center" style="grid-template-columns: 1fr 2fr;">
                      <div class="logo">
                          <h2>Dashboard</h2>
                      </div>
  
                      <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 dropdown">
                              <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                  <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                      class="rounded-circle">
                              </a>
                              <ul class="dropdown-menu text-small shadow">
                                  <li><a class="dropdown-item" href="#">New project...</a></li>
                                  <li><a class="dropdown-item" href="#">Settings</a></li>
                                  <li><a class="dropdown-item" href="#">Profile</a></li>
                                  <li>
                                      <hr class="dropdown-divider">
                                  </li>
                                  <li><a class="dropdown-item" href="#">Sign out</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </header>
          </div>
          {{-- header end --}}

          {{-- main dashboard --}}
          <div class="main-dashboard">
            {{ $slot }}
          </div>
          {{-- main dashboard end --}}
        </main>
        {{-- main end --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
