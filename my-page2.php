<?php
/**
 * Template Name: шаблон типичных страниц Услуг 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!--left side-->
		<section class="vc_section"></section>
		<div class="vc_row wpb_row vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-3">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
							</div>
						</div>
						<div id="bokprav">
						</div>
						<div class="vc_empty_space" style="height: 60px">
							<span class="vc_empty_space_inner"></span>
						</div>
		<?php 
        $args = array (
          
	'theme_location'  => '',
	'menu'            => 'left-menu', 
	'container'       => 'div', 
	'container_class' => 'sidebar-left-accordion__menu', 
	'container_id'    => '',
	'menu_class'      => 'sidebar-left-accordion__menu__items', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
) );
		 );
        
        wp_nav_menu( $args );?>	
<!--menu
<div style="width: 280px;"  class="sidebar-left-accordion__menu">
  <ul class="sidebar-left-accordion__menu__items">
      <li class="sidebar-left-accordion__menu__item">
          <div class="sidebar-left-accordion__menu__item__link sidebar-left-accordion--active">Юридические консультации
              <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
          <ul class="sidebar-left-accordion__submenu__items ">
              <li class="sidebar-left-accordion__submenu__item sidebar-left-accordion--active"><a href="#">1drfgdbdfbd rt rd dr</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">2</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">3</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">4</a></li>
          </ul>
      </li>
      <li class="sidebar-left-accordion__menu__item">
          <div class="sidebar-left-accordion__menu__item__link">Суд с банком
              <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
          <ul class="sidebar-left-accordion__submenu__items hide__item">
              <li class="sidebar-left-accordion__submenu__item"><a href="#">1</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">2</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">3</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">4</a></li>
          </ul>
      </li>
      <li class="sidebar-left-accordion__menu__item">
          <div class="sidebar-left-accordion__menu__item__link">Семейные споры
              <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
          <ul class="sidebar-left-accordion__submenu__items hide__item">
              <li class="sidebar-left-accordion__submenu__item"><a href="#">1</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">2</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">3</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">4</a></li>
          </ul>
      </li>
      <li class="sidebar-left-accordion__menu__item">
          <div class="sidebar-left-accordion__menu__item__link">Недвижимость
              <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
          <ul class="sidebar-left-accordion__submenu__items hide__item">
              <li class="sidebar-left-accordion__submenu__item"><a href="#">1</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">2</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">3</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">4</a></li>
          </ul>
      </li>
      <li class="sidebar-left-accordion__menu__item">
          <div class="sidebar-left-accordion__menu__item__link">Трудовые споры
              <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
          <ul class="sidebar-left-accordion__submenu__items hide__item">
              <li class="sidebar-left-accordion__submenu__item"><a href="#">1</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">2</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">3</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">4</a></li>
          </ul>
      </li>
      <li class="sidebar-left-accordion__menu__item">
          <div class="sidebar-left-accordion__menu__item__link">Иностранцам
              <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
          <ul class="sidebar-left-accordion__submenu__items">
              <li class="sidebar-left-accordion__submenu__item"><a href="#">1</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">2</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">3</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">4</a></li>
          </ul>
      </li>
      <li class="sidebar-left-accordion__menu__item">
          <div class="sidebar-left-accordion__menu__item__link">Прочие услуги
              <i class="fa fa-chevron-down" aria-hidden="true"></i></div>
          <ul class="sidebar-left-accordion__submenu__items">
              <li class="sidebar-left-accordion__submenu__item"><a href="#">1</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">2</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">3</a></li>
              <li class="sidebar-left-accordion__submenu__item"><a href="#">4</a></li>
          </ul>
      </li>
  </ul> 
</div>
end menu-->
						<!--Форма обратной связи-->
						<div style="width: 280px;" class="service__sidebar__form" id="service__sidebar__form">
							<h2 class="service__sidebar__form-title">Заказать консультацию</h2>
							<p>Оставьте нам заявку, и мы предоставим Вам консультацию</p>
							<div id="messegeResult3"></div>
							<form method="post">
							<!-- Hidden Required Fields -->
							<input type="hidden" name="project_name" value="ArteLaw">
							<input type="hidden" name="admin_email" value="liaforweb@gmail.com">
							<input type="hidden" name="form_subject" value="ArteLaw-заказать консультацию">
							<!-- END Hidden Required Fields -->
							<div class="fieldset-wrapper">
								<input type="text" name="Имя" placeholder="Имя" required>
								<input type="text" class="phone-mask" name="Телефон" placeholder="Телефон*" required>
								<textarea placeholder="Суть обращения" name="content" rows="5"></textarea>
								<p class="more__email">Предпочитаете общаться по E-mail?</p>
								<p class="more__email-click">Тогда нажмите здесь</p>
								<input class="service__sidebar__form-email hide__item" type="email" placeholder="Email" name="email">
							</div>
							
							<div class="send-wrapper">
								<button class="service__sidebar__form__btn">Отправить</button>
							</div>
							</form>
						</div>
						<!-- Modal -->
						<div class="service__sidebar__form-overlay hide__item"></div>
						<div class="service__sidebar__form-popup hide__item">
							<a href="#" class="service__sidebar__form-popup__close-button"></a>
							<h2 class="service__sidebar__form-popup__title">
								Спасибо!
							</h2>
							<div class="service__sidebar__form-popup__desc">Ваша заявка принята. <br>
								В ближайшее время мы свяжемся с Вами.
							</div>
							<div class="service__sidebar__form__btn">
								<a href="https://foderent.ru/" >
									Вернуться на главную
								</a>
							</div>
						</div>
						<!-- End Modal -->
						<!-- Social -->
						<div style="width: 280px;" class="sidebar-social-box">
							<div class="sidebar-social-box__title">Мы в социальных сетях</div>
							<div>
								<a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								<a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								<a href="https://www.youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</div>
						</div>
					<!-- End Social -->


					<div class="vc_tta-container" data-vc-action="collapse">
						<div class="vc_general vc_tta vc_tta-accordion vc_tta-color-grey vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left">
							<div class="vc_tta-panels-container">
								<div class="vc_tta-panels"><br>
								<section class="vc_section"></section><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-9">
		<div class="vc_column-inner vc_custom_1515768553946">
			<div class="wpb_wrapper">
				<div class="wpb_text_column wpb_content_element ">
					<div class="wpb_wrapper">
						<div class="vc_row wpb_row vc_row-fluid">

						</div>
						<div class="wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner ">
								<div class="wpb_wrapper"></div>
							</div>
						</div>
						<div class="wpb_text_column wpb_content_element ">
							<div class="wpb_wrapper">
							</div>
						</div>

	текст странички<p></p>
<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end left side-->
			

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
