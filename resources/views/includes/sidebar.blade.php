<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a href="" class="nav-link">
          <div class="nav-profile-image">
            <img src="" alt="image">
            <span class="login-status online"></span>
            <!--change to offline or busy as needed-->
          </div>
          <div class="nav-profile-text d-flex flex-column">
            <span class="font-weight-bold mb-2"></span>
            <span class="text-secondary text-small"></span>
          </div>
          <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{route("projects.index")}}">
          <span class="menu-title">Projects</span>
          <i class="mdi mdi-vector-combine menu-icon"></i>
          
        </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route("categories.index")}}">
          <span class="menu-title">Categories</span>
          <i class="mdi mdi-vector-combine menu-icon"></i>
          
        </a> 
      </li>


      
     

     

      
      
     
    </ul>
  </nav>