
<body id="fullbkg">

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?>">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo $SITE->shortname; ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                    <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">
<?php require_once(dirname(__FILE__).'/alerts.php'); ?>
<div class="wrap">
		<div class="avatar">
      <img src="<?php echo $OUTPUT->pix_url('avatar', 'theme'); ?>" alt="Login" />
		</div>
<form action="<?php echo new moodle_url('/login/index.php'); ?>" method="post" id="login"  >
		<input type="text" name="username" placeholder="username" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" name="password" placeholder="password" required>
<a href="<?php echo new moodle_url('/login/index.php'); ?>" class="forgot_link">forgot ?</a>
		<button>Log In</button>
</form>
	</div>

    <header id="page-header" class="clearfix" style="display:none;">
           <div id="page-navbar" class="clearfix">
            <div class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></div>
            <nav class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></nav>
        </div>
        <?php echo $html->heading; ?>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>

    <div id="page-content" class="row-fluid" style="display:none;">
       
        <?php
if (!$left) { ?>
    <section id="region-main" class="span9 pull-left">
<?php } else { ?>
    <section id="region-main" class="span9">
<?php } ?>

        <?php
        echo $OUTPUT->course_content_header();
        echo $OUTPUT->main_content();
        echo $OUTPUT->course_content_footer();
        ?>
    </section>
        <?php echo $OUTPUT->blocks('side-pre', 'span3'); ?>
        <?php echo $OUTPUT->blocks('side-post', 'span3 pull-right'); ?>
    </div>

