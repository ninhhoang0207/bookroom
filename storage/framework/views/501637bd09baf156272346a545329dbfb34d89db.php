<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo e(Gravatar::src(Auth::user()->email)); ?>" alt="Avatar of <?php echo e(Auth::user()->name); ?>">
                        <?php echo e(Auth::user()->name); ?>

                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="<?php echo e(route('userEdit',Auth::getUser()->id)); ?>"> <i class="fa fa-user pull-right"></i>  <?php echo app('translator')->getFromJson('auth/general.thongtinnguoidung'); ?></a></li>
                        <li><a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-sign-out pull-right"></i> <?php echo app('translator')->getFromJson('auth/general.dangxuat'); ?></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->