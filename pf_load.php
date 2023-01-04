<?php
 
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simple to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use

// ssp.class.php 파일에서 `$table` 부분 백틱없애기 -> $table
// 테이블 join  
$table = <<<EOT
 (
    SELECT 
      a.file, a.seq,
      b.*
    FROM pf_img a
    LEFT JOIN pf_list b ON b.no = a.mno
    WHERE a.seq=1
    GROUP BY b.title

 ) temp
EOT;
 
 
// Table's primary key
$primaryKey = 'no'; 
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
 		array( 'db' => 'no', 'dt' => 0 ),
	  array( 
			  'db' => 'file',
			  'dt' => 1,
			  'formatter' => function( $d, $row ) {
			      return "<img src=./$d style='height:80px;width:120px;'/>";
			  }       	
	  ),  
    array( 'db' => 'title', 'dt' => 2 ),
    array( 'db' => 'kind',  'dt' => 3 ),
    array( 'db' => 'location',   'dt' => 4 ),
    array( 'db' => 'area',     'dt' => 5 ),
    array( 'db' => 'cont',     'dt' => 6 ),
    array(
        'db'        => 'reg_date',
        'dt'        => 7,
        'formatter' => function( $d, $row ) {
            return date( 'Y/m/d  H:i:s', strtotime($d));
        }
    )
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'mulzoo1',
    'pass' => 'mulzoo@#34',
    'db'   => 'web_1',
    'host' => '43.201.87.32'
);
 
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);