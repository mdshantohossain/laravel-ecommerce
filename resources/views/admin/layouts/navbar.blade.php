<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html" key="t-default">Default</a></li>
                        <li><a href="dashboard-saas.html" key="t-saas">Saas</a></li>
                        <li><a href="dashboard-crypto.html" key="t-crypto">Crypto</a></li>
                        <li><a href="dashboard-blog.html" key="t-blog">Blog</a></li>
                        <li><a href="dashboard-job.html"><span class="badge rounded-pill text-bg-success float-end" key="t-new">New</span> <span key="t-jobs">Jobs</span></a></li>
                    </ul>
                </li>
                <li>
                    <a href="chat.html" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat">Chat</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects">Product module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('category.index') }}" key="t-p-grid">Category</a></li>
                        <li><a href="{{ route('sub-category.index') }}" key="t-p-list">Sub category</a></li>
                        <li><a href="{{ route('brand.index') }}" key="t-p-overview">Brand</a></li>
                        <li><a href="{{ route('unit.index') }}" key="t-create-new">Unit</a></li>
                        <li><a href="{{ route('product.index') }}" key="t-create-new">Product</a></li>
                    </ul>
                </li>




                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email">Email</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox.html" key="t-inbox">Inbox</a></li>
                        <li><a href="email-read.html" key="t-read-email">Read Email</a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span key="t-email-templates">Templates</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic.html" key="t-basic-action">Basic Action</a></li>
                                <li><a href="email-template-alert.html" key="t-alert-email">Alert Email</a></li>
                                <li><a href="email-template-billing.html" key="t-bill-email">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list.html" key="t-invoice-list">Invoice List</a></li>
                        <li><a href="invoices-detail.html" key="t-invoice-detail">Invoice Detail</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks">Order module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('all.orders') }}" key="t-task-list">All orders</a></li>
                        <li><a href="tasks-kanban.html" key="t-kanban-board">Pending orders</a></li>
                        <li><a href="tasks-create.html" key="t-create-task">Processing orders</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts">Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid.html" key="t-user-grid">Users Grid</a></li>
                        <li><a href="contacts-list.html" key="t-user-list">Users List</a></li>
                        <li><a href="contacts-profile.html" key="t-profile">Profile</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-detail"></i>
                        <span key="t-blog">Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog-list.html" key="t-blog-list">Blog List</a></li>
                        <li><a href="blog-grid.html" key="t-blog-grid">Blog Grid</a></li>
                        <li><a href="blog-details.html" key="t-blog-details">Blog Details</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end" key="t-new">New</span>
                        <i class="bx bx-briefcase-alt"></i>
                        <span key="t-jobs">Jobs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="job-list.html" key="t-job-list">Job List</a></li>
                        <li><a href="job-grid.html" key="t-job-grid">Job Grid</a></li>
                        <li><a href="job-apply.html" key="t-apply-job">Apply Job</a></li>
                        <li><a href="job-details.html" key="t-job-details">Job Details</a></li>
                        <li><a href="job-categories.html" key="t-Jobs-categories">Jobs Categories</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow" key="t-candidate">Candidate</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="candidate-list.html" key="t-list">List</a></li>
                                <li><a href="candidate-overview.html" key="t-overview">Overview</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication">User module</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html" key="t-login">Add user</a></li>
                        <li><a href="auth-login-2.html" key="t-login-2">Manage user</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-cog bx-spin"></i>
                        <span key="t-utility">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" key="t-starter-page">Starter Page</a></li>
                        <li><a href="pages-maintenance.html" key="t-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon.html" key="t-coming-soon">Coming Soon</a></li>
                        <li><a href="pages-timeline.html" key="t-timeline">Timeline</a></li>
                        <li><a href="pages-faqs.html" key="t-faqs">FAQs</a></li>
                        <li><a href="pages-pricing.html" key="t-pricing">Pricing</a></li>
                        <li><a href="pages-404.html" key="t-error-404">Error 404</a></li>
                        <li><a href="pages-500.html" key="t-error-500">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span key="t-ui-elements">UI Elements</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.html" key="t-alerts">Alerts</a></li>
                        <li><a href="ui-buttons.html" key="t-buttons">Buttons</a></li>
                        <li><a href="ui-cards.html" key="t-cards">Cards</a></li>
                        <li><a href="ui-carousel.html" key="t-carousel">Carousel</a></li>
                        <li><a href="ui-dropdowns.html" key="t-dropdowns">Dropdowns</a></li>
                        <li><a href="ui-grid.html" key="t-grid">Grid</a></li>
                        <li><a href="ui-images.html" key="t-images">Images</a></li>
                        <li><a href="ui-lightbox.html" key="t-lightbox">Lightbox</a></li>
                        <li><a href="ui-modals.html" key="t-modals">Modals</a></li>
                        <li><a href="ui-offcanvas.html" key="t-offcanvas">Offcanvas</a></li>
                        <li><a href="ui-rangeslider.html" key="t-range-slider">Range Slider</a></li>
                        <li><a href="ui-session-timeout.html" key="t-session-timeout">Session Timeout</a></li>
                        <li><a href="ui-progressbars.html" key="t-progress-bars">Progress Bars</a></li>
                        <li><a href="ui-placeholders.html" key="t-placeholders">Placeholders</a></li>
                        <li><a href="ui-sweet-alert.html" key="t-sweet-alert">Sweet-Alert</a></li>
                        <li><a href="ui-tabs-accordions.html" key="t-tabs-accordions">Tabs & Accordions</a></li>
                        <li><a href="ui-typography.html" key="t-typography">Typography</a></li>
                        <li><a href="ui-toasts.html" key="t-toasts">Toasts</a></li>
                        <li><a href="ui-video.html" key="t-video">Video</a></li>
                        <li><a href="ui-general.html" key="t-general">General</a></li>
                        <li><a href="ui-colors.html" key="t-colors">Colors</a></li>
                        <li><a href="ui-rating.html" key="t-rating">Rating</a></li>
                        <li><a href="ui-notifications.html" key="t-notifications">Notifications</a></li>
                        <li><a href="ui-utilities.html"><span key="t-utilities">Utilities</span> <span class="badge rounded-pill bg-success float-end" key="t-new">New</span></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge rounded-pill bg-danger float-end">10</span>
                        <span key="t-forms">Forms</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements.html" key="t-form-elements">Form Elements</a></li>
                        <li><a href="form-layouts.html" key="t-form-layouts">Form Layouts</a></li>
                        <li><a href="form-validation.html" key="t-form-validation">Form Validation</a></li>
                        <li><a href="form-advanced.html" key="t-form-advanced">Form Advanced</a></li>
                        <li><a href="form-editors.html" key="t-form-editors">Form Editors</a></li>
                        <li><a href="form-uploads.html" key="t-form-upload">Form File Upload</a></li>
                        <li><a href="form-xeditable.html" key="t-form-xeditable">Form Xeditable</a></li>
                        <li><a href="form-repeater.html" key="t-form-repeater">Form Repeater</a></li>
                        <li><a href="form-wizard.html" key="t-form-wizard">Form Wizard</a></li>
                        <li><a href="form-mask.html" key="t-form-mask">Form Mask</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables">Role & Permission</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic.html" key="t-basic-tables">Role</a></li>
                        <li><a href="tables-datatable.html" key="t-data-tables">Permission</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-charts">Charts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex.html" key="t-apex-charts">Apex Charts</a></li>
                        <li><a href="charts-echart.html" key="t-e-charts">E Charts</a></li>
                        <li><a href="charts-chartjs.html" key="t-chartjs-charts">Chartjs Charts</a></li>
                        <li><a href="charts-flot.html" key="t-flot-charts">Flot Charts</a></li>
                        <li><a href="charts-tui.html" key="t-ui-charts">Toast UI Charts</a></li>
                        <li><a href="charts-knob.html" key="t-knob-charts">Jquery Knob Charts</a></li>
                        <li><a href="charts-sparkline.html" key="t-sparkline-charts">Sparkline Charts</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
