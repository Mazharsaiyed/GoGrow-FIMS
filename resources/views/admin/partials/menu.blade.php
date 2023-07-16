<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            {{--@can('category_access')
                <li class="nav-item">
                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-tags nav-icon">

                        </i>
                        {{ trans('cruds.category.title') }}
                    </a>
                </li>
            @endcan--}}
            @can('crop_access')
                <li class="nav-item">
                    <a href="{{ route("admin.crops.index") }}" class="nav-link {{ request()->is('admin/crops') || request()->is('admin/crops/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-tree nav-icon">

                        </i>
                        Crops
                    </a>
                </li>
            @endcan
            @can('seeds_access')
                <li class="nav-item">
                    <a href="{{ route("admin.seeds.index") }}" class="nav-link {{ request()->is('admin/seeds') || request()->is('admin/seeds/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-seedling nav-icon">

                        </i>
                        Seeds
                    </a>
                </li>
            @endcan
            @can('fertilizers_access')
                <li class="nav-item">
                    <a href="{{ route("admin.fertilizers.index") }}" class="nav-link {{ request()->is('admin/fertilizers') || request()->is('admin/fertilizers/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-air-freshener nav-icon">

                        </i>
                        Fertilizers
                    </a>
                </li>
            @endcan
            @can('pesticides_access')
                <li class="nav-item">
                    <a href="{{ route("admin.pesticides.index") }}" class="nav-link {{ request()->is('admin/pesticides') || request()->is('admin/pesticides/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-leaf nav-icon">

                        </i>
                        Pesticides
                    </a>
                </li>
            @endcan
            {{--@can('land_access')
                <li class="nav-item">
                    <a href="{{ route("admin.land.index") }}" class="nav-link {{ request()->is('admin/land') || request()->is('admin/land/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-industry nav-icon">

                        </i>
                        Land
                    </a>
                </li>
            @endcan
            @can('soil_access')
                <li class="nav-item">
                    <a href="{{ route("admin.soil.index") }}" class="nav-link {{ request()->is('admin/soil') || request()->is('admin/soil/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-fire nav-icon">

                        </i>
                        Soil
                    </a>
                </li>
            @endcan--}}
            @can('useful_links_access')
                <li class="nav-item">
                    <a href="{{ route("admin.useful-links.index") }}" class="nav-link {{ request()->is('admin/useful-links') || request()->is('admin/useful-links/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-link nav-icon">

                        </i>
                        Useful Links
                    </a>
                </li>
            @endcan
            <li class="nav-item">
                <a href="{{ route("admin.feedback.index") }}" class="nav-link {{ request()->is('admin/feedback') || request()->is('admin/feedback/*') ? 'active' : '' }}">
                    <i class="fa-fw fa fa-comments-o nav-icon"></i>Feedbacks
                </a>
            </li>
            {{--@can('tag_access')
                <li class="nav-item">
                    <a href="{{ route("admin.tags.index") }}" class="nav-link {{ request()->is('admin/tags') || request()->is('admin/tags/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-tags nav-icon">

                        </i>
                        {{ trans('cruds.tag.title') }}
                    </a>
                </li>
            @endcan--}}
            {{--@can('article_access')
                <li class="nav-item">
                    <a href="{{ route("admin.articles.index") }}" class="nav-link {{ request()->is('admin/articles') || request()->is('admin/articles/*') ? 'active' : '' }}">
                        <i class="fa-fw far fa-newspaper nav-icon">

                        </i>
                        {{ trans('cruds.article.title') }}
                    </a>
                </li>
            @endcan--}}
            @can('faq_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-question nav-icon">

                        </i>
                        {{ trans('cruds.faqManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('faq_category_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.faq-categories.index") }}" class="nav-link {{ request()->is('admin/faq-categories') || request()->is('admin/faq-categories/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.faqCategory.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('faq_question_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.faq-questions.index") }}" class="nav-link {{ request()->is('admin/faq-questions') || request()->is('admin/faq-questions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-question nav-icon">

                                    </i>
                                    {{ trans('cruds.faqQuestion.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>