<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" >
        <div class="sidebar-header">
            <img src="/images/logo.png" class="col-md-12">

        </div>
        <div class="userImage text-center">
            <img src="<?php

            use auth\Permissions;

            echo(Session::get('user')['user_image']) ?>" class="rounded-circle" width="30">
        </div>
        <ul class="list-unstyled components">
            <?php if (Permissions::getInstaince()->hasPermision('admin_index') == true) { ?>
                <li >
                    <a href="/admin/index">
                        <i class="fas fa-home a2"></i>
                        <label class="text">  الصفحة الرئيسية</label>
                    </a>
                </li>
            <?php } ?>

            <?php if (Permissions::getInstaince()->hasPermision('category_index') == true) { ?>
                <li>
                    <a href="/admin/categories/index">
                        <i class="fas fa-list"></i>
                        <label class="text">   الاقسام</label>

                    </a>
                </li>
            <?php } ?>
            <?php if (Permissions::getInstaince()->hasPermision('course_index') == true) { ?>
                <li>
                    <a href="/admin/courses/index">
                        <i class="fas fa-book"></i>
                        <label class="text">   الكورسات</label>
                    </a>
                </li>
            <?php } ?>
            <?php if (Permissions::getInstaince()->hasPermision('university_index') == true
                or Permissions::getInstaince()->hasPermision('teacher_index') == true

            ) { ?>

                <li  id="accordionExample">
                    <a  class="nav-link collapsed" href="#" data-target="#collapseExample1" data-toggle="collapse" aria-expanded="true" aria-controls="collapseExample1">
                        <i class="fa fa-users-cog "></i>
                        <label class="text">   الحسابات</label>
                        <i class="ion ion-chevron-down mt-10" style="float:left"></i>
                    </a>
                    <ul class="collapse  list-unstyled" id="collapseExample1" class="collapse" aria-labelledby="headingTwo"  data-parent="#accordionExample">


                        <li>
                            <a href="#"><i class="fa fa-users-cog "></i>
                                <label class="text">   المدراء الفرعين</label>                                    </a>
                        </li>
                        <?php if (Permissions::getInstaince()->hasPermision('university_index') == true) { ?>
                            <li>
                                <a href="/admin/universities/index"><i class="ion ion-university  "></i>       <label class="text">   الجامعات</label>
                                </a>
                            </li>
                        <?php } ?>
                        <?php if (Permissions::getInstaince()->hasPermision('teacher_index') == true) { ?>

                            <li>
                                <a href="/admin/teachers/index"><i class="fa fa-chalkboard-teacher "></i>  <label class="text">   المدرسين</label>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>
            <?php if (Permissions::getInstaince()->hasPermision('teacher_index') == true
                or Permissions::getInstaince()->hasPermision('permission_index') == true
                or Permissions::getInstaince()->hasPermision('role_index') == true
            ) { ?>
                <li  id="accordionExampleOne">
                    <a href="#" data-target="#collapseExample" data-toggle="collapse" aria-expanded="true" aria-controls="collapseExample">
                        <i class="fa fa-cogs "></i>
                        <label class="text">
                            الادراة
                        </label>
                        <i class="ion ion-chevron-down mt-10" style="float:left"></i>
                    </a>
                    <ul class="collapse  list-unstyled" id="collapseExample" aria-labelledby="headingOne" data-parent="#accordionExampleOne">
                        <?php if (Permissions::getInstaince()->hasPermision('role_index') == true) { ?>
                            <li>
                                <a href="/admin/role/index"><i class="fa fa-users-cog "></i>  <label class="text">   الادوار</label>

                                </a>
                            </li>
                        <?php } ?>
                        <?php if (Permissions::getInstaince()->hasPermision('permission_index') == true) { ?>

                            <li>
                                <a href="/admin/permision/index"><i class="fa fa-cogs "></i>    <label class="text">   الصلاحيات</label></a>
                            </li>
                        <?php } ?>
                        <?php if (Permissions::getInstaince()->hasPermision('teacher_index') == true) { ?>
                            <li>
                                <a href="/admin/teachers/index"><i class="fa fa-chalkboard-teacher "></i>    <label class="text">   المدرسين</label>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>

        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-7 p-md-7">

        <nav class="navbar navbar-expand-sm  bg-dark navbar-dark ">
            <div class="container-fluid">
                <div class="col-6 text-right">

                    <a class="text-white" href="#" id="tog"><span class="fas fa-list"></span></a>
                </div>
                <div class="col-6 text-left">


<ul class="navbar-nav">
    <li class="nav-item dropdown  ">
        <a href="#" class="nav-link" data-toggle="dropdown">


            <span class="ion ion-android-notifications font-size-24"></span>
        </a>
        <ul class="dropdown-menu animated flipOutX">
            <!-- User image -->
            <li class="header"   data-overlay="5">
                <div class="bg-light p-20">
                    <div class="d-flex justify-content-center">

                            <h4 class="ml-xl-80" style="  ">Notifications</h4>
                        <a href="#" class="">Clear All</a>

                    </div>

                </div>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
                <a class="dropdown-item" href="javascript:void(0)"> <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit </a>
                <a class="dropdown-item" href="javascript:void(0)"> <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.</a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
            <li class="footer">
                <a href="#" class="bg-light">View all</a>
            </li>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown  ">
        <a href="#" class="nav-link" data-toggle="dropdown">


            <img src=" <?php echo (Session::get('user')['user_image']); ?>" class="user-image rounded-circle" alt="User Image" width="30px" height="26px">
        </a>
        <ul class="dropdown-menu animated flipInX">
            <!-- User image -->
            <li class="user-header bg-img" id="imgae" style="" data-overlay="5">
                <div class="flexbox align-self-center">
                    <img src="<?php echo (Session::get('user')['user_image']); ?>" class="float-left rounded-circle" alt="User Image"  width="30px" height="30px">
                    <h4 class="user-name align-self-center text-white">
                        <span><?php echo (Session::get('user')['user_name']); ?></span>

                    </h4>
                </div>
            </li>
            <!-- Menu Body -->
            <li class="user-body">
                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> تعديل الملف الشخصي</a>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> الإيميل</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i>إعدادات الحساب </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/admin/logout"><i class="ion-log-out"></i> تسجيل الخروج</a>
                <div class="dropdown-divider"></div>
                <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
            </li>
        </ul>
    </li>

</ul>
                 </div>
                <!-- Notifications -->

            </div>
        </nav>



            <!-- End navBar -->
