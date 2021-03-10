 <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="" alt="Admin image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
               @foreach(App\Models\Admin::orderBy('id','asc')->get() as $admin)
                <p class="name">{{$admin->name}}</p>
               @endforeach
                <p class="designation">Manager</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>

    



         <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slidercategory-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Slider Category</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="slidercategory-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.slidercategory')}}">Manage Slider Category</a></li>
                
              </ul>
            </div>

            <div class="collapse" id="slidercategory-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.slidercategory.create')}}">Add New Slider Ctegory</a></li> </ul>
            </div>

          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Slider</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="slider-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.slider')}}">Manage Slider</a></li>
                
              </ul>
            </div>

            <div class="collapse" id="slider-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.slider.create')}}">Add New Slider</a></li> </ul>
            </div>

          </li>

           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#gallery-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Gallery</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="gallery-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.gallery')}}">Manage Gallery</a></li>
                
              </ul>
            </div>

            <div class="collapse" id="gallery-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.gallery.create')}}">Add New Gallery</a></li> </ul>
            </div>

          </li>


          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ourproduct-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Our Products</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.architecture')}}">Manage Regnum Architecture</a></li>
                
              </ul>
            </div>

            <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.architecture.create')}}">Add Regnum Architecture</a></li> </ul>
            </div>

             <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.architectureportfolio')}}">Manage Architecture Portfolio</a></li>
                
              </ul>
            </div>

            <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.architectureportfolio.create')}}">Add Architecture Portfolio </a></li> </ul>
            </div>

             <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.itservice')}}">Manage RegnumIT Service</a></li>
                
              </ul>
            </div>

            <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.itservice.create')}}">Add RegnumIT Service</a></li> </ul>
            </div>

             <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.itportfolio')}}">Manage RegnumIT Portfolio</a></li>
                
              </ul>
            </div>

             <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.itportfolio.create')}}">Add RegnumIT Portfolio</a></li> </ul>
            </div>

            <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.testomonial')}}">Manage RegnumIT Testomonial</a></li> </ul>
            </div>


            <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.testomonial.create')}}">Add RegnumIT Testomonial</a></li> </ul>
            </div>

             <div class="collapse" id="ourproduct-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.itcontactus')}}">Manage RegnumIT ContactUs</a></li> </ul>
            </div>

          </li>


            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ourproject-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Our Projects</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="ourproject-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.ourproject')}}">Manage Our Project</a></li>
                
              </ul>
            </div>

            <div class="collapse" id="ourproject-pages">
              <ul class="nav flex-column sub-menu">
             <li class="nav-item"> <a class="nav-link" href="{{route('admin.ourproject.create')}}">Add New Our Project</a></li> </ul>
            </div>

          </li>



            <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contactus-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Contact Us</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="contactus-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.contactus')}}">Manage ContactUS</a></li>
                
              </ul>
            </div>

          </li>




          <li class="nav-item">
            <a class="nav-link" href="#logout-pages">           
              <form class="form-inline" action=""method="post">
                @csrf

                <input type="submit" value="Logout Now" class="btn btn-danger">
                

              </form>

            </a>
            
          </li>
          
          
          


        </ul>
      </nav>
   
      <!-- partial -->
