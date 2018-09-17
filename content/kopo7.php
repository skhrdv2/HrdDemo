
		
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="?page=dashboard">Home</a>
							</li>

							<li class="active">ข้อมูลบุคลากร</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
					
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
							ข้อมูล กพ.7
							
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
                                <!-- เริ่ม content-->
                                <div class="row">
									<div class="col-xs-12">
										

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
<!--<div class="table-header">
										
										</div>-->

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="kopo7" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
															<span class="lbl"></span>
															</label>
														</th>
														<th width="8%">วันที่ปรับตำแหน่ง</th>
														<th width="12%">ตำแหน่ง</th>
														<th width="7%">เลขที่ตำแหน่ง</th>
														<th width="15%">ประเภท</th>
                                                        <th width="7%">ขั้นที่่ปรับ</th>
                                                        <th width="8%">อัตราเงินเดือน</th>
                                                        <th width="20%">รายละเอียดตำแหน่ง</th>
                                                        <th width="10%">สังกัดกลุ่มงาน</th>
                                                        <th width="10%">แผนก</th>
													</tr>
												</thead>

												<tbody>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>

                                <!-- จบ content-->
							

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
			

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

	


							
                                        <script type="text/javascript">
	
    $(document).ready(function () {
		var pid='<?php echo  $_SESSION['person_id']?>';
	//	alert(pid);
        var t = $('#kopo7').DataTable({
            "ajax":{ 
                   "url": "data/kopo7_data.php",
                    "type":"post",
                    "data":{
                        req:'req',person_id:pid}
				}, fixedColumns:   {
            leftColumns: 0,
            rightColumns: 1
        },
				
				"aoColumns": [
    {null:null},
    {"data":"position_date","sClass": "center" },
	{"data":"position_name"},
	{"data":"position_number","sClass": "center"},
	{"data":"level_type_name"},
	{"data":"position_advance","sClass": "center"},
	{"data":"position_salary","sClass": "center"},
	{"data":"position_detail"},
	{"data":"department_name"},
	{"data":"department_sub_name"}
	
],
columnDefs: [
    {
        targets: 2,
        className: 'dt-body-right'
    }
  ],
            "order": [[2, 'desc']]
        });
        t.on('order.dt search.dt', function () {
            t.column(0).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;

            });
        }).draw(); //เรียกใช้งาน datatable
		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons(t, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					 
					
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
					
						autoPrint: false,
						message: 'คุณสามารถปริ้นได้เลย'
					  }		  
					]
				} );
				t.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = t.button(1).action();
				t.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
			
				var defaultColvisAction = t.button(0).action();
				t.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
    });
          </script>						
								