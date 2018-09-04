
		
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">User Profile</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
					
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								User Profile Page
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									3 styles with inline editable feature
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
                                <!-- เริ่ม content-->
                                <div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">jQuery dataTables</h3>

										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										<div class="table-header">
											Results for "Latest Registered Domains"
										</div>

										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
											<table id="person_list" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
															<span class='action-buttons'><a class='red'  href='#'><i class='ace-icon fa fa-plus bigger-130'></i></a></span>
																<span class="lbl"></span>
															</label>
														</th>
														<th>บัตรประชาชน</th>
														<th>ชื่อ-สกุล</th>
														<th class="hidden-480">อายุราชการ</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															ปีที่เกษียณ
														</th>
														<th class="hidden-480">ตำแหน่ง</th>
                                                        <th>ชื่อเรียก</th>
                                                        <th>วันเดือนปีเกิด</th>
                                                        <th>อายุ</th>
                                                    
                                                        <th>เบอร์โทรศัพท์</th>
                                                        <th>หน่วยงาน</th>
                                                        <th>กลุ่มงาน</th>
                                                        <th>ประเภทวิชาชีพ </th>
														<th></th>
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
        var t = $('#person_list').DataTable({
            "ajax":{ 
                   "url": "data/person_list_data.php",
                    "type":"post",
                    "data":{
                        req:'req'}
				},
				
				"aoColumns": [
    {null:null},
    { "data": "cid" },
    { "data": function (data, type, dataToSet) {
        return data.prename_name + data.fname + "<br/>" + data.lname;
    },
	
	},
	{"data":null},
	{"data":null},
	{"data":"position_name"},
	{"data":"nickname"},
	{"data":"birthday"},
	{"data":"age_y"},
	{"data":"phone_number"},
	{"data":"department_name"},
	{"data":"department_sub_name"},
	{"data":null},
	{"data":null}
],

            "columnDefs": [
				{
                    "targets":13,
                    "data": null,
                    "defaultContent":"<span class='action-buttons'><a class='blue'  href='#'><i class='ace-icon fa fa-search-plus bigger-130'></i></a></span><span class='action-buttons'><a class='green'  href='#'><i class='ace-icon fa fa-trash-o bigger-130'></i></a></span>",								
														
                    'bSortable': false
                },

              

                {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                }

            ],
		
       
            "order": [[1, 'asc']]
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
								