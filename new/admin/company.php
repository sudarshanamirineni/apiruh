<!DOCTYPE html>
<html>
  
<?php
      $page_name_emp = "Company";
      require_once('../includes/header.php');
      require_once('functions.php');
      $emp = get_comp_details();

  ?>
  <link href="../../../vendors/dataTables/datatables.min.css" rel="stylesheet"/>
   <link href="../assets/css/pages/ecommerce.css" rel="stylesheet"/>
   <style type="text/css">
     .product-price{
      font-size: 12px;
     }
   </style>

  <body class="fixed-navbar">
    <div class="page-wrapper">
     <?php require_once('../includes/nav_bar.php'); ?>

      <div class="wrapper content-wrapper">
        
        <!-- START PAGE CONTENT-->
        <div class="page-heading">
          <h1 class="page-title">Company</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Company</li>
          </ol>
        </div>
        <div class="page-content fade-in-up">
          <div class="alert" style="padding-left: 0px; margin-bottom: 0px">
            <a class="btn btn-info" href="add_company"><i class="fa fa-plus"></i> Add Company</a></p>
          </div>
          <div class="page-content fade-in-up" style="padding-top: 0px; margin-top: 0px">
          <div class="row products-board">
            <?php
                foreach ($emp as $key){
              ?>
            <div class="col-lg-3 col-sm-6">
              
              <div class="card"><img src="<?= $key->pic; ?>"/>
                <div class="card-body"><a class="product-name" href="../admin/employee_profile?id=<?=$key->emp_id?>"><?= $key->client_name; ?></a><br>
                  <div class="m-t-10 d-flex justify-content-between align-items-center">
                    <a href="../admin/employee_profile?id=<?=$key->emp_id?>"><button class="btn btn-outline-info btn-rounded"><i class="fa fa-eye font-16"></i> View Profile</button></a>
                  </div>
                </div>
              </div>
              
            </div>
            <?php 
                }
              ?>
          </div>
        </div>
        </div>
       
                <?php require_once('../includes/footer.php'); ?>

      </div>
    </div>

    <!-- START SEARCH PANEL-->
    <form class="search-top-bar" action="search.html">
      <input class="search-input" type="text" placeholder="Search...">
      <button class="reset input-search-icon"><i class="fa fa-search"></i></button>
      <button class="reset input-search-close" type="button"><i class="ti-close"></i></button>
    </form>
    
    </div>
    <!-- End Session-timeout modal-->
    <!-- CORE PLUGINS-->
        <?php require_once('../includes/scripts.php'); ?>
        <script src="../../../vendors/dataTables/datatables.min.js" type="text/javascript"></script>
        <script type="text/javascript">
          $(document).ready(function(){
           $('#date_1 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
           $('#date_4 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
           $('#date_3 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
           $('#date_2 .input-group.date').datepicker({
              todayBtn: "linked",
              keyboardNavigation: false,
              forceParse: false,
              calendarWeeks: true,
              autoclose: true
            });
          });
        </script>
        <script type="text/javascript">
      $(function(){
          $('#example-table').DataTable({
              pageLength: 10,
              fixedHeader: true,
              responsive: true,
              dom: '<"html5buttons"B>lTfgitp',
              buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'print',
                'colvis'
              ],
              language: {
                buttons: {
                  colvis: '<i class="ti-view-grid"></i>'
                }
              }
          });
      });
    </script>

  </body>
</html>