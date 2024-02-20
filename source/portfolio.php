<?php

$contador = 1;
$grupos = array(
	'clase' => 'Clase de Licenciatura de Medicina 2011',
	'medalla' => 'Imposición de Medalla de la UCM 2010',
	'dpto' => 'Departamento de Biología Celular',
	'cajal' => 'Grabados de Cajal',
	'equipo' => 'Staff del Equipo de Investigación',
	);
function photo($grupo, $imagen_thumb, $imagen_completa, $titulo, $descripcion, $enlace_interno, $enlace_externo) {
	global $contador, $grupos;
?>
				<li data-id="id-<?= $contador ?>" class="<?= $grupo ?>">
					
					<img title="<?= $titulo ?>" alt="<?= $titulo ?>" src="img/<?= $grupo ?>/<?= $imagen_thumb ?>">
					<span class="portfolio-overlay"></span>
					
					<div class="info">
						<p class="info-title"><?= $titulo ?></p>
						<p class="info-desc"><?= $descripcion ?></p>
						<div class="read-more"><a href="<?= $enlace_interno ?>" title="Leer más"></a></div>
						<div class="enlarge"><a href="img/<?= $grupo ?>/<?= $imagen_completa ?>" title="Aumentar imagen" rel="prettyPhoto[mixed]"></a></div>
					</div>				
				
				</li>
<?php
	$contador += 1;
}

$page_title = 'Galería';
$current = 'portfolio';
require_once 'header.php';

?>
			
			<ul class="portfolio-nav clearfix">
				<li class="segment-1 selected-1"><a href="#" data-value="all">Todas</a></li>
<?php 
	$i = 0;
	$numItems = count($grupos);
	$contador = 1;
	foreach ($grupos as $clave=>$valor):
		$is_last = ($contador == $numItems);
?>
				<li class="segment-<?= $i ?><?php if ($is_last):?> last<?php endif; ?>"><a href="#" data-value="<?= $clave ?>"><span><?= str_pad($contador, 2, '0', STR_PAD_LEFT) ?></span><?= $valor ?></a></li>
<?php
		if ($i == 0) {
			$i = 2;
		}
		else {
			$i += 1;
		}
		$contador += 1;
	endforeach; ?>
			</ul>
			
			<ul id="list" class="portfolio clearfix">
			
				<?php photo('clase', 'Clase01s.jpg', 'Clase01.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase02s.jpg', 'Clase02.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase03s.jpg', 'Clase03.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase04s.jpg', 'Clase04.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase05s.jpg', 'Clase05.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase07s.jpg', 'Clase07.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase08s.jpg', 'Clase08.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase09s.jpg', 'Clase09.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase10s.jpg', 'Clase10.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('clase', 'Clase11s.jpg', 'Clase11.jpg', 'Medicina UCM 2010-2011', 'Clase de Terminaciones nerviosas sensitivas. Medicina 2º curso', '#', ''); ?>
				<?php photo('medalla', 'medalla01s.jpg', 'medalla01.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('medalla', 'medalla02s.jpg', 'medalla02.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('medalla', 'medalla04s.jpg', 'medalla04.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('medalla', 'medalla05s.jpg', 'medalla05.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('medalla', 'medalla14s.jpg', 'medalla14.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('medalla', 'medalla15s.jpg', 'medalla15.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('medalla', 'medalla16s.jpg', 'medalla16.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('medalla', 'medalla17s.jpg', 'medalla17.jpg', 'Medalla UCM 2010', 'Imposicion de la Medalla Complutense 2010', 'medalla.php', ''); ?>
				<?php photo('dpto', 'DSC_0683s.jpg', 'DSC_0683.jpg', 'Departamento de Biología Celular', 'Microscopio digital', '#', ''); ?>
				<?php photo('dpto', 'DSC_0684s.jpg', 'DSC_0684.jpg', 'Departamento de Biología Celular', 'Microscopio digital', '#', ''); ?>
				<?php photo('dpto', 'DSC_0692s.jpg', 'DSC_0692.jpg', 'Departamento de Biología Celular', 'Microscopio electronico', '#', ''); ?>
				<?php photo('dpto', 'DSC_0696s.jpg', 'DSC_0696.jpg', 'Departamento de Biología Celular', 'Microscopio electronico', '#', ''); ?>
				<?php photo('dpto', 'DSC_0718s.jpg', 'DSC_0718.jpg', 'Departamento de Biología Celular', 'Microscopio electronico', '#', ''); ?>
				<?php photo('dpto', 'DSC_0725s.jpg', 'DSC_0725.jpg', 'Departamento de Biología Celular', 'Microscopio electronico', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0741s.jpg', 'DSC_0741.jpg', 'Departamento de Biología Celular', 'Ultramicrotomo LKB', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0744s.jpg', 'DSC_0744.jpg', 'Departamento de Biología Celular', 'Ultramicrotomo LKB', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0753s.jpg', 'DSC_0753.jpg', 'Departamento de Biología Celular', 'Laboratorio de M/O', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0758s.jpg', 'DSC_0758.jpg', 'Departamento de Biología Celular', 'Despachos de Profesores', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0800s.jpg', 'DSC_0800.jpg', 'Departamento de Biología Celular', 'Sala de prácticas', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0802s.jpg', 'DSC_0802.jpg', 'Departamento de Biología Celular', 'Sala de prácticas', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0811s.jpg', 'DSC_0811.jpg', 'Departamento de Biología Celular', 'Sala de prácticas', '#', ''); ?>	
				<?php photo('dpto', 'DSC_0825s.jpg', 'DSC_0825.jpg', 'Departamento de Biología Celular', 'Aula de Seminarios', '#', ''); ?>	
				<?php photo('cajal', 'DSC_0765s.jpg', 'DSC_0765.jpg', 'Grabados de Cajal', 'Grabados de la Sala de Reuniones', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0772s.jpg', 'DSC_0772.jpg', 'Grabados de Cajal', 'Grabados de la Sala de Reuniones', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0769s.jpg', 'DSC_0769.jpg', 'Grabados de Cajal', 'Grabados de la Sala de Reuniones', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0778s.jpg', 'DSC_0778.jpg', 'Grabados de Cajal', 'Médula espinal', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0781s.jpg', 'DSC_0781.jpg', 'Grabados de Cajal', 'Corteza cerebral', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0785s.jpg', 'DSC_0785.jpg', 'Grabados de Cajal', 'Corteza cerebelosa', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0786s.jpg', 'DSC_0786.jpg', 'Grabados de Cajal', 'Corteza cerebelosa', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0835s.jpg', 'DSC_0835.jpg', 'Grabados de Cajal', 'Órgano de Corti', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0836s.jpg', 'DSC_0836.jpg', 'Grabados de Cajal', 'Órgano de Corti', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0791s.jpg', 'DSC_0791.jpg', 'Grabados de Cajal', 'Microtomos para cortes de celoidina', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0795s.jpg', 'DSC_0795.jpg', 'Grabados de Cajal', 'Retrato de Cajal', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0830s.jpg', 'DSC_0830.jpg', 'Grabados de Cajal', 'La meiosis. Diseño de Flemming', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0831s.jpg', 'DSC_0831.jpg', 'Grabados de Cajal', 'La meiosis. Diseño de Flemming', 'cajal.php', ''); ?>	
				<?php photo('cajal', 'DSC_0829s.jpg', 'DSC_0829.jpg', 'Grabados de Cajal', 'La meiosis. Diseño de Flemming', 'cajal.php', ''); ?>	
				<?php photo('equipo', 'DSC_0751s.jpg', 'DSC_0751.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño, D. Sanchez y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				<?php photo('equipo', 'DSC_0755s.jpg', 'DSC_0755.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño, D. Sanchez y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				<?php photo('equipo', 'DSC_0732s.jpg', 'DSC_0732.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				<?php photo('equipo', 'DSC_0814s.jpg', 'DSC_0814.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				<?php photo('equipo', 'DSC_0820s.jpg', 'DSC_0820.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				<?php photo('equipo', 'DSC_0822s.jpg', 'DSC_0822.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				<?php photo('equipo', 'DSC_0832s.jpg', 'DSC_0832.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				<?php photo('equipo', 'DSC_0833s.jpg', 'DSC_0833.jpg', 'Staff del Equipo', 'Con J.E Garcia-Mauriño y A. Lopez Carbonell', 'equipo.php', ''); ?>	
				
			</ul><!-- portfolio end -->
			
			<ul id="prev-next" class="clearfix">
				<li class="next"><a href="#"></a></li>
				<li class="prev"><a href="#"></a></li>
			</ul>
		
<?php

require_once 'footer.php';