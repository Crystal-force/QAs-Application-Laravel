
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                  <ul aria-expanded="false" class="collapse">
                      {{-- <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li> --}}
                      <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
              </li>
              <li> <a class="waves-effect waves-dark" href="{{route('select-category')}}" aria-expanded="false"><i class="icon-speedometer"></i>Dashboard</a></li>
              <li> <a class="waves-effect waves-dark" href="{{route('solution-subject')}}" aria-expanded="false"><i class="fas fa-list-ul"></i>Subject</a></li>
              <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-question"></i><span class="hide-menu">Question/Answer Management</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('allquestions')}}">My Questions/Answers</a></li>
                </ul>
              </li>
              <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-cogs"></i><span class="hide-menu">Setting</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('account-setting')}}">Account setting</a></li>
                </ul>
              </li>
          </ul>
      </nav>
  </div>
</aside>