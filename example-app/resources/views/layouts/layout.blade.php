<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        #todo-table-con table { padding: 10px 8px; }
        #todo-table-con tbody .tr-overay { position: relative; }
        #todo-table-con tbody .tr-overay:hover { cursor: pointer; background-color: #1a202c; transition: all ease 0.35s; }
        #todo-table-con tr:last-child td { border-bottom: 0; }
        #todo-table-con td { padding: 8px; color: #c7bebe; border-bottom: 1px solid #6b6969; text-align: center; }
        .search-con { text-align: center; }
        .form__group { position: relative; display: inline-block; padding: 15px 0 0; margin-top: 10px; width: 300px; min-height: 32px; }
        .form__field { font-family: inherit; width: 100%; min-height: 32px; padding: 5px; border: 0; outline: 0; font-size: 1rem; color: #fff; background: #2d3748; transition: border-color 0.2s; }
        .form__field::placeholder { color: transparent; }
        .form__field:placeholder-shown ~ .form__label { cursor: text; top: 15px; color: gray; }
        .form__label { position: absolute; top: -15px; padding: 5px; height: 32px; display: block; transition: 0.2s; font-size: 1rem; color: #fff; }
        .form__field:focus .form__label { position: absolute; top: 0; display: block; transition: 0.2s; font-size: 1rem; color: red; font-weight:700; padding-bottom: 6px; font-weight: 700; border-width: 3px; border-radius: 0; }

        /* reset input */
        .form__field,
        .form__field:required,
        .form__field:invalid { box-shadow:none; }
        .search-btn { width: 80px; padding: 8px; color: #fff; font-weight: 500; transition: all ease 0.35s; }
        .search-btn:hover { cursor: pointer; }

        #insert-form { padding: 13px 5px!important; }
        #todo-insert-con form { padding-bottom: 15px; }
        #insert-form tbody tr:hover { background: unset; cursor: unset; }
        #insert-form .form__group { padding: 0; margin: 0; width: auto; }
        #insert-form .form__group input { background: #222936; }
        #insert-form .form__label { top: -28px; }
        #insert-form .form__field:placeholder-shown ~ .form__label { top: -1px; }
        .insert-btn { float: right; margin-right: 8px; margin-bottom: 15px; transition: all ease 0.35s; }
        .search-btn:hover,
        .insert-btn:hover { background: #bb2d2d!important; }

        .edit-btn { background: #222936; font-size: 10px; padding: 5px; border-radius: 0.3rem; transition: all ease 0.35s; }
        .edit-btn:hover { background: #bb2d2d; cursor: pointer}
        .edit-btn > button:hover { cursor: pointer }

        .w-50 { width: 50px; }
        .w-70 { width: 70px; }
        .w-150 { width: 150px; }
        .w-180 { width: 180px; }
        .w-350 { width: 350px; }
        .border-red-200 { border: 1px solid #b77272; }

        .nav { position: fixed; top: 0; left: 0; width: 100%; z-index: 10; color: #fff; text-align: right; }
        .nav .navbar-nav { list-style: none; }
        .nav .navbar-nav .nav-item { display: flex; justify-content: flex-end; }
        .nav .navbar-nav .nav-item > a { margin-right: 10px; }
    </style>
    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
    <nav class="nav max-w-6xl mx-auto sm:px-6 lg:px-8">
        <ul>
            <li><a href="/todo">Todo</a></li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>

    @yield('content')
</body>
</html>
