<!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Teachers</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{url('tform')}}">Add</a>
                        </li>
                        <li>
                            <a href="{{url('tshow')}}">Show</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Students</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="{{url('show')}}">Show</a>
                        </li>
                        <li>
                            <a href="{{url('form')}}">Add</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Portfolio</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="{{url('Portfolio.teachers')}}">Teachers</a>
                        </li>
                        <li>
                            <a href="{{url('Portfolio.students')}}">Students</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            
        </nav>
