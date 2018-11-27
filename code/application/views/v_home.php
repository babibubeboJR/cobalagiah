<div class="page-content">
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Penting
			</h3>
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<i class="fa fa-home"></i>
					<a href="<?php base_url()?>">
						Beranda
					</a>
				</li>
			</ul>
		</div>
		<!-- line1 -->
		<div class="col-xs-12">
			<div class="row">
				<!-- group1 -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="dashboard-stat red-thunderbird bg-1">
						<div class="visual">
							<i class="fa fa-search-plus" style="opacity: 0.3;"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo ($total_data_belum_survey_TR+$total_data_belum_survey_TM+$total_data_belum_survey_KOLEKTIF); ?>
							</div>
							<div class="desc">
								Belum Survey
							</div>
						</div>
						<div>
							<button class="btn btn-sm btn-block more" type="button" onclick="openBelumSurvey()">Menu<i class="fa fa-angle-down rotate"></i></button>
						</div>
						<div class="dasbord-collapse collapse" id="collapseExample1">
							<a class="more" href="<?php base_url()?>pelanggan_TR/belumSurvey/">Pelanggan TR
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_survey_TR ?></span>
							</a>
							<a class="more" href="<?php base_url()?>kolektif/belumSurvey/">Pelanggan Kolektif
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_survey_KOLEKTIF ?></span>
							</a>
							<a class="more" href="<?php base_url()?>pelanggan_TM/belumSurvey/">Pelanggan TM
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_survey_TM ?></span>
							</a>
						</div>
					</div>
				</div>
				<!-- end of group -->
				<!-- group2 -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="dashboard-stat yellow-gold bg-2">
						<div class="visual">
							<i class="fa fa-money" style="opacity: 0.3;"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo ($total_data_belum_bayar_TR+$total_data_belum_bayar_TM+$total_data_belum_bayar_KOLEKTIF); ?>
							</div>
							<div class="desc">
								Belum Bayar
							</div>
						</div>
						<div>
							<button class="btn btn-sm btn-block more" type="button" onclick="openBelumBayar()">Menu<i class="fa fa-angle-down"></i></button>
						</div>
						<div class="dasbord-collapse collapse" id="collapseExample2">
							<a class="purple-studio more" href="<?php base_url()?>pelanggan_TR/belumBayar/">Pelanggan TR
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_bayar_TR ?></span>
							</a>
							<a class="more" href="<?php base_url()?>kolektif/belumBayar/">Pelanggan Kolektif
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_bayar_KOLEKTIF ?></span>
							</a>
							<a class="more" href="<?php base_url()?>pelanggan_TM/belumBayar/">Pelanggan TM
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_bayar_TM ?></span>
							</a>
						</div>
					</div>
				</div>
				<!-- end of group -->
				<!-- group3 -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="dashboard-stat yellow-crusta bg-3">
						<div class="visual">
							<i class="fa fa-gavel" style="opacity: 0.3;"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo ($total_data_belum_rab_TR+$total_data_belum_rab_TM+$total_data_belum_rab_KOLEKTIF); ?>
							</div>
							<div class="desc">
								Belum RAB & WO TIANG
							</div>
						</div>
						<div>
							<button class="btn btn-sm btn-block more" type="button" onclick="openBelumRAB()">Menu<i class="fa fa-angle-down"></i></button>
						</div>
						<div class="dasbord-collapse collapse" id="collapseExample3">
							<a class="more" href="<?php base_url()?>pelanggan_TR/belumRAB/">Pelanggan TR
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_rab_TR ?></span>
							</a>
							<a class="more" href="<?php base_url()?>kolektif/belumRAB/">Pelanggan Kolektif
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_rab_KOLEKTIF ?></span>
							</a>
							<a class="more" href="<?php base_url()?>pelanggan_TM/belumRAB/">Pelanggan TM
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_rab_TM ?></span>
							</a>
						</div>
					</div>
				</div>
				<!-- end of group -->
			</div>
		</div>
		<div class="col-xs-12">
			<div class="row">
				<!-- group4 -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="dashboard-stat blue-soft bg-4">
						<div class="visual">
							<i class="fa fa-wrench" style="opacity: 0.3;"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo ($total_data_belum_pelaksanaan_TR+$total_data_belum_pelaksanaan_TM+$total_data_belum_pelaksanaan_KOLEKTIF); ?>
							</div>
							<div class="desc">
								Belum Pelaksanaan
							</div>
						</div>
						<div>
							<button class="btn btn-sm btn-block more" type="button" onclick="openBelumPelaksanaan()">Menu<i class="fa fa-angle-down"></i></button>
						</div>
						<div class="dasbord-collapse collapse" id="collapseExample4">
							<a class="more" href="<?php base_url()?>pelanggan_TR/belumPelaksanaan/">Pelanggan TR
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_pelaksanaan_TR ?></span>
							</a>
							<a class="more" href="<?php base_url()?>kolektif/belumPelaksanaan/">Pelanggan Kolektif
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_pelaksanaan_KOLEKTIF ?></span>
							</a>
							<a class="more" href="<?php base_url()?>pelanggan_TM/belumPelaksanaan/">Pelanggan TM
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_pelaksanaan_TM ?></span>
							</a>
						</div>
					</div>
				</div>
				<!-- end of group -->
				<!-- group5 -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="dashboard-stat green-jungle bg-5">
						<div class="visual">
							<i class="fa fa-plug" style="opacity: 0.3;"></i>
						</div>
						<div class="details">
							<div class="number">
								<?php echo ($total_data_belum_nyala_TR+$total_data_belum_nyala_TM+$total_data_belum_nyala_KOLEKTIF); ?>
							</div>
							<div class="desc">
								Belum Nyala
							</div>
						</div>
						<div>
							<button class="btn btn-sm btn-block more" type="button" onclick="openBelumNyala()">Menu<i class="fa fa-angle-down"></i></button>
						</div>
						<div class="dasbord-collapse collapse" id="collapseExample5">
							<a class="more" href="<?php base_url()?>pelanggan_TR/belumNyala/">Pelanggan TR
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_nyala_TR ?></span>
							</a>
							<a class="more" href="<?php base_url()?>kolektif/belumNyala/">Pelanggan Kolektif
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_nyala_KOLEKTIF ?></span>
							</a>
							<a class="more" href="<?php base_url()?>pelanggan_TM/belumNyala/">Pelanggan TM
								<span class="badge badge-danger pull-right"><?php echo $total_data_belum_nyala_TM ?></span>
							</a>
						</div>
					</div>
				</div>
				<!-- end of group -->
			</div>
		</div>

		<!-- line3 -->
		<div class="col-xs-12">
			<div class="clearfix margin-top-10">
				<span class="label label-danger">NOTE! </span>
				<span>&nbsp; Guna mengoptimalkan kinerja aplikasi mohon gunakan browser terbaru Mozilla Firefox , Chrome , Opera , Safari atau Internet Explorer 10 </span>
			</div>
			<br>
			<!-- BEGIN PORTLET-->
			<!-- <div class="portlet paddingless" id="grafik">
				<div class="portlet-title line">
					<div class="caption">
						<i class="fa fa-bar-chart"></i>Tampilan Grafik
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse"></a>
						<a href="javascript:;" class="reload" id="reload"></a>
						<a href="javascript:;" class="fullscreen"></a>
						<a href="" class="remove"></a>
					</div>
				</div>
				<div class="portlet-body" id="HPL_Grafik">
					<div id="container"></div>
				</div>
			</div> -->
			<!-- END PORTLET-->
			<!-- BEGIN PORTLET-->
			<div class="portlet paddingless">
				<div class="portlet-title line">
					<div class="caption">
						<i class="fa fa-bell-o"></i>Alur Pelanggan
					</div>
					<div class="tools">
						<a href="javascript:;" class="expand">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<!--BEGIN TABS-->
					<div class="tabbable tabbable-custom">
						<ul class="nav nav-tabs">
							<li class="active">
								<a href="#tab_1_1" data-toggle="tab">
								Pelanggan TR </a>
							</li>
							<li>
								<a href="#tab_1_2" data-toggle="tab">
								Kolektif </a>
							</li>
							<li>
								<a href="#tab_1_3" data-toggle="tab">
								Pelanggan TM </a>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1_1">
								<img src="<?php base_url()?>assets/img/dashboard/2015-05-21_145310.png">
							</div>
							<div class="tab-pane" id="tab_1_2">
								<img src="<?php base_url()?>assets/img/dashboard/2015-05-21_145413.png">
							</div>
							<div class="tab-pane" id="tab_1_3">
								<img src="<?php base_url()?>assets/img/dashboard/2015-05-21_145435.png">
							</div>
						</div>
					</div>
					<!--END TABS-->
				</div>
				<!-- END PORTLET-->	     
			</div>
		</div>
	</div>
</div>
