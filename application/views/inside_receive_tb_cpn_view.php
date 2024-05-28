
    <!-- style_Tables -->
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets_inside/css/style_tb.css"> -->

<style>
/* Your custom styles here */




/* Media queries เพื่อปรับขนาดของกล่อง modal เมื่อหน้าจอเล็กขึ้น */
@media only screen and (max-width: 992px) {
  .modal-dialog {
        width: 90%;
        max-width: 90%;
    }

  
}


</style>

<?php
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		// $strHour= date("H",strtotime($strDate));
		// $strMinute= date("i",strtotime($strDate));
		// $strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
		// return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}

	// $strDate = "2008-08-14 13:42:44";
	// echo "ThaiCreate.Com Time now : ".DateThai($strDate);
?>

<div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body" >

              <!-- <div class="row">
                <div class="col-4">
                
                    <div class="dropdown" style="margin-bottom: 10px;">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            จำนวนแถว
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#" onclick="setItemsPerPage(5)">5</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setItemsPerPage(15)">15</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setItemsPerPage(30)">30</a></li>
                            <li><a class="dropdown-item" href="#" onclick="setItemsPerPage(50)">50</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-5">
                
                </div>
                <div class="col-3">
                
                    <div> 
                        <input  type="text" id="searchInput" placeholder="ค้นหา...">
                    </div>

                </div>
              </div> -->

                    <!-- <div   style="overflow-x:auto;"> -->

                    <table id="myTable_cpn" class="table table-hover myTable_DATA" >
                    <thead class="table-light">
                      <tr>
                          <th class="col-1">#</th>
                          <th class="col-3">ชื่อบริษัท</th>
                          <th class="col-3">ชื่อ-นามสกุล</th>
                          <th class="col-2">หมายเลขโทรศัพท์</th>
                          <th class="col-1">วันที่ยื่น</th>
                          <th class="col-1">สถานะ</th>
                          <th class="col-1"></th>
                          <th class="col-1"></th>
                          <!-- <th></th> -->
                      
                      </tr>
                    </thead>

<?php

$i=1;
foreach ($table_submit_company as $rs_1){

?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $rs_1->company_name; ?></td>
                        <td><?php echo $rs_1->title_name_company  . '' . $rs_1->firstname_company  . '&nbsp;' . $rs_1->lastname_company; ?> </td>
                        <td><?php echo $rs_1->phone_user_company; ?></td>
                        <td><?php echo DateThai($rs_1->date_submit_company); ?></td>
                        <td><?php if ($rs_1->status_submit_company == "1"){
                          echo '<span style="font-weight: bold; color: #FFD700;">รอรับเรื่อง</span>'; 
                        } ?></td>
    
                        <td><a class="btn btn-outline-danger btn-sm">ลบ</a></td>
                        <td><a class="btn btn-outline-secondary btn-sm" onclick="table_list_sub('<?php echo $rs_1->company_id; ?>')" data-bs-toggle="modal" data-bs-target="#modal_receive_tb_cpn" ><i data-feather="search"  class="icon_search"></i></a></td>
                      
                    </tr>

<?php


    $i++;

}

?>

                   
                    </table>
                    <!-- </div> -->
                    <!-- <div id="chart"></div> -->
                    
                    <div id="pagination-info"></div> <!-- This will display pagination information -->
              </div>
            </div>
          </div>
        </div>
      
         
</div>



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="modal_receive_tb_cpn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " style=" font-weight: bold;" id="exampleModalLabel">เอกสาร</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

    <!-- ดึกเอาข้อมูลมาแสดง -->
      <div id="showdata_list_sub"></div>


      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button> -->
        <button type="button" class="btn btn-outline-danger">ไม่รับเรื่อง</button>
        <button type="button" class="btn btn-outline-primary">รับเรื่อง</button>
      </div>
    </div>
  </div>
</div>




<script>




$(document).ready(function() {
            pdfMake.fonts = {
                  THSarabunNew: {
                    normal: 'THSarabunNew.ttf',
                    bold: 'THSarabunNew-Bold.ttf',
                    italics: 'THSarabunNew-Italic.ttf',
                    bolditalics: 'THSarabunNew-BoldItalic.ttf'
                }
            };

            $('#myTable_cpn').DataTable({
                "language": {
                    "url": "<?php echo site_url('assets_inside/Tables_function/thai_json/Thai.json'); ?>"
                },
                "dom": 'lBfrtip',
                "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
                "buttons": [
                    {
                        extend: 'copy',
                        text: 'คัดลอกข้อมูล',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'ไฟล์ PDF',
                        title: 'รายชื่อขอตรวจการใช้ประโยชน์ที่ดิน', // กำหนดชื่อไฟล์
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        },
                        customize: function(doc) {
                            doc.defaultStyle.font = 'THSarabunNew';
                            doc.defaultStyle.fontSize = 16; // เพิ่มขนาดฟอนต์เริ่มต้น
                            

                             // ปรับแต่งหัวตาราง
                            doc.content.splice(0, 1, {
                                text: 'รายชื่อขอตรวจการใช้ประโยชน์ที่ดิน',
                                fontSize: 18,
                                bold: true,
                                margin: [0, 0, 0, 12], // ล่าง 12 เพื่อให้มีช่องว่างหลังหัวข้อ
                                alignment: 'center' // จัดหัวข้อให้อยู่ตรงกลาง
                            });

                            

                              // ปรับแต่งหัวคอลัมน์
                              doc.styles.tableHeader = {
                                fontSize: 16,
                                bold: true,
                                alignment: 'center',
                                //margin: [0, 5, 0, 5] // เพิ่มช่องว่าง
                            };
                            

                             // ปรับแต่งตาราง
                             var objLayout = {};
                            objLayout['hLineWidth'] = function(i) { return 0.5; };
                            objLayout['vLineWidth'] = function(i) { return 0.5; };
                            objLayout['hLineColor'] = function(i) { return '#aaa'; };
                            objLayout['vLineColor'] = function(i) { return '#aaa'; };
                            objLayout['paddingLeft'] = function(i) { return 4; };
                            objLayout['paddingRight'] = function(i) { return 4; };
                            doc.content[1].layout = objLayout;

                            // จัดตำแหน่งข้อความให้อยู่ตรงกลาง
                            doc.content[1].alignment = 'center';
                            

                             // ปรับขนาดคอลัมน์
                             doc.content[1].table.widths = [ '5%', '35%', '25%', '20%', '15%' ];


                            // ปรับแต่งส่วนท้าย
                            doc['footer'] = (function(page, pages) {
                                return {
                                    columns: [
                                        {
                                            fontSize: 14,
                                            alignment: 'left',
                                            text: ['สร้างเมื่อ: ', { text: new Date().toLocaleString() }]
                                        },
                                        {

                                            fontSize: 14,
                                            alignment: 'right',
                                            text: ['หน้า ', { text: page.toString() }, ' จาก ', { text: pages.toString() }]
                                        }
                                    ],
                                    margin: [10, 0]
                                };
                            });
                            
                            
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'ไฟล์ Excel',
                        title: 'รายชื่อขอตรวจการใช้ประโยชน์ที่ดิน', // กำหนดชื่อไฟล์
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        },
                        modifier: {
                            search: '^(?!Modernize Free$).*',
                            regex: true
                        }
                    },
                    {
                        extend: 'print',
                        text: 'พิมพ์',
                        customize: function (win) {
                            $(win.document.body).find('h1').text('ชื่อของคุณ');
                            $(win.document.body).find('h1').after('<p>รายละเอียดเพิ่มเติม สำหรับการพิมพ์</p>');
                        },
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4]
                        }
                    }
                ]
            });
        });









function table_list_sub(cpn_id)
{

  $.ajax({
      url: "<?php echo base_url('admin/get_wait_receive/'); ?>",
      method: "POST",
      data: {
        cpn_id : cpn_id,
        
      },
      
      success: function(data){
        // alert(data);
        console.log(data);
   
        $("#showdata_list_sub").html(data);

      }
  });

}




</script>



    <!-- data-table ทำเอง -->
    <!-- <script defer src="<?php echo site_url('assets_inside/js/data-table.js'); ?>"></script> -->

