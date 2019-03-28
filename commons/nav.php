<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<section id="navigation">
		<nav class="nav">
			<div class="container">
				<div class="menu-toggle">
					<div class="d-flex align-items-center justify-content-end">
							<span class="val">MENU</span>
						<button type="button" id="menu-btn">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				</div>
				<ul id="navMenu" class="ace-responsive-menu" data-menu-style="horizontal">
					<?php if($menu_atas) : ?>
						<?php foreach($menu_atas as $data) : ?>
							<?php if(count($data['submenu']) > 0) : ?>
								<li class="<?php nested_array_search(current_url(), $data['submenu']) and print('active') ?>"><a href="#!"><?= strtoupper($data['nama']) ?></a>
									<ul>
										<?php foreach($data['submenu'] as $submenu) : ?>
											<li class="<?= current_url() == $submenu['link'] ?>">
												<a href="<?= $submenu['link'] ?>"><?= strtoupper($submenu['nama']) ?></a>
											</li>
										<?php endforeach ?>
									</ul>
								</li>
								<?php else : ?>
								<li class="<?php current_url() == $data['link'] and print('active')  ?>">
									<a href="<?= $data['link'] ?>"><?= strtoupper($data['nama']) ?></a>
								</li>
							<?php endif ?>
						<?php endforeach ?>
					<?php endif ?>
				</ul>
			</div>
		</nav>
	</section>