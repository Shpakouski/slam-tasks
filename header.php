<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Slam Tasks</title>
    <style>
        body {
            display: flex;
            flex-wrap: nowrap;
            height: 100vh;
            overflow-x: auto;
        }

        body > * {
            flex-shrink: 0;
        }

        ::-webkit-scrollbar {
            width: .7rem;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, .85);
            border-radius: 1.6rem;
            box-shadow: inset .2rem .2rem .2rem hsla(0, 0%, 100%, .25), inset -.2rem -.2rem .2rem rgba(0, 0, 0, .25);
        }

        ::-webkit-scrollbar-track {
            background: #f3f3f3;
        }

        .btn-toggle {
            display: inline-flex;
            align-items: center;
            padding: .25rem .5rem;
            font-weight: 600;
            color: rgba(0, 0, 0, .65);
            background-color: transparent;
            border: 0;
        }

        .btn-toggle:hover,
        .btn-toggle:focus {
            color: rgba(0, 0, 0, .85);
            background-color: #d2f4ea;
        }

        .btn-toggle::before {
            width: 1.25em;
            line-height: 0;
            content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
            transition: transform .35s ease;
            transform-origin: .5em 50%;
        }

        .btn-toggle[aria-expanded="true"] {
            color: rgba(0, 0, 0, .85);
        }

        .btn-toggle[aria-expanded="true"]::before {
            transform: rotate(90deg);
        }

        .btn-toggle-nav a {
            display: inline-flex;
            padding: .1875rem .5rem;
            margin-top: .125rem;
            margin-left: 1.25rem;
            text-decoration: none;
        }

        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
            background-color: #d2f4ea;
        }

        .fw-semibold {
            font-weight: 600;
        }

    </style>

</head>
<body class="d-flex flex-column h-100">

<div class="container">
    <header class="py-3 mt-3">
        <div class="row">
            <div class="col-3">
                <a href="/"><img src="img/avatar.png" class="rounded-circle mx-auto d-block" alt="photo"></a>
            </div>
            <div class="col-9"></div>
        </div>
    </header>
    <main>
        <div class="row">
            <div class="col-3">
                <div class="p-3 bg-white">
                    <a href="/"
                       class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <span class="fs-5 fw-semibold" style="margin-left: 25px">Задачи</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#task-one" aria-expanded="true">
                                Задача 1
                            </button>
                            <div class="collapse show" id="task-one">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="task-one-description.php" class="link-dark rounded">Описание</a></li>
                                    <li><a href="task-one.php" class="link-dark rounded">Решение</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#task-two" aria-expanded="true">
                                Задача 2
                            </button>
                            <div class="collapse show" id="task-two">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="task-two-description.php" class="link-dark rounded">Описание</a></li>
                                    <li><a href="task-two.php" class="link-dark rounded">Решение</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#task-one" aria-expanded="true">
                                Задача 3
                            </button>
                            <div class="collapse show" id="task-one">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="task-three-description.php" class="link-dark rounded">Описание</a></li>
                                    <li><a href="task-three.php" class="link-dark rounded">Решение</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="border-top my-3"></li>
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="p-5 mt-5">
