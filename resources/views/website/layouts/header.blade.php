<!-- ======= Header ======= -->
<nav class="navbar navbar-expand-lg navbar-dark">

   <div class="container">
      <a class="navbar-brand" href="{{ route('homepage') }}">
         <img src="{{ get_company_logo() }}" alt="{{ get_company_name() }}" class="d-inline-block align-text-top"></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
         aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse float-left" id="navbarNavDropdown">
         <ul class="navbar-nav mx-auto">
            <li class="nav-item">
               <a class="nav-link" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('about_page')}}">About Us</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('service_page')}}">Services</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{route('contact_page')}}">Contact Us</a>
            </li>
            <li class="nav-item">
               <a class="btn btn-sm mt-1" href="{{route('login')}}">Write my Paper</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- End Header -->