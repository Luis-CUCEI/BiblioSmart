<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

    <div class="sidebar-header">
        <div class="sidebar-title">
            Navegacion
        </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html"
             data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-active">
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span>Inicio</span>
                        </a>
                    </li>

                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-group" aria-hidden="true"></i>
                            <span>Estudiantes</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{ route('students.index')  }}">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Ver
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('students.create') }}">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Agregar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <span>Divisiones</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{ route('divisions.index')}}">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Ver
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('divisions.create') }}">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Agregar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <span>Carreras</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{ route('degrees.index')  }}">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Ver
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('degrees.create') }}">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Agregar
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('degrees.trash') }}">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    Basura
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a>
                            <i class="fa fa-book" aria-hidden="true"></i>
                            <span>Libros</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a href="{{ route('books.index')  }}">
                                    <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    Ver
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('books.create') }}">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                    Agregar
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </nav>

            <hr class="separator"/>

            <div class="sidebar-widget widget-tasks">

            </div>

            <hr class="separator"/>

            <div class="sidebar-widget widget-stats">

            </div>
        </div>

    </div>

</aside>
<!-- end: sidebar -->