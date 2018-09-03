
		<div class="main-container ace-save-state" id="main-container">
			<div class="main-content">
				<div class="main-content-inner">
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
																<input type="checkbox" class="ace" />
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
                                                        <th>บัตรประชาชน</th>
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
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

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
                },"columns": [
                    {
                        "data":null
                    },
    { "data": "cid" },
    { "data": 'fname' },
    {"data":"nickname"},
    {"data":"position_id"},
    {},
    {}
    
   
  ],
            "columnDefs": [

                {
                    "targets": -1,
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
    });
          </script>						
								