<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <!-- offcanvas trigger -->
        <button class="navbar-toggler me-2 custom-toggler" 
            type="button" 
            data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasScrolling" 
            aria-controls="offcanvasScrolling"> 
            <span class="navbar-toggler-icon" 
                data-bs-target="#offcanvasScrolling">
            </span>
        </button>
        <!-- offcanvas trigger -->
        <a class="navbar-brand me-auto" href="#">Navbar</a>
        <ul class="navbar-nav mb-2 mb-lg-0"> 
            <form class="d-flex ms-auto ms-2">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </ul>
    </div>
</nav>


<div class="offcanvas offcanvas-start sidebar-nav" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    {{-- <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Colored with scrolling</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div> --}}
    <div class="offcanvas-body">
       <nav class="navbar-dark">
           @can('superadmin')   
           <ul class="navbar-nav">
               <li>
                   <a href="" class="nav-link px-3 active">
                        <span>
                            <i class="bi bi-house-door-fill"></i>
                        </span>
                        <span>
                            Dashboard
                        </span>     
                   </a>
               </li>
               <li class="my-4">
                   <hr class="dropdown-divider text-white" />
               </li>
           </ul>
            <ul class="navbar-nav">
                <li class="pt-2">
                    <a href="" class="nav-link px-3">
                        <span>
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <span>
                            Admin
                        </span>     
                    </a>
                </li>
                <li class="pt-2">
                    <a href="" class="nav-link px-3">
                        <span>
                            <i class="bi bi-people-fill"></i>
                        </span>
                        <span>
                            Data Siswa
                        </span>     
                    </a>
                </li>
                <li class="pt-2">
                    <a href="" class="nav-link px-3">
                        <span>
                            <i class="bi bi-clipboard-data-fill"></i>
                        </span>
                        <span>
                            Data Kesehatan Siswa
                        </span>     
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider text-white" />
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="pt-2">
                    <a href="" class="nav-link px-3">
                        <span>
                            <i class="bi bi-table"></i>
                        </span>
                        <span>
                            Laporan
                        </span>     
                    </a>
                </li>
                <li class="my-4">
                    <hr class="dropdown-divider text-white" />
                </li>
            </ul>
            @endcan

            
            <ul>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            </ul>
           
        </nav>
    </div>
</div>
