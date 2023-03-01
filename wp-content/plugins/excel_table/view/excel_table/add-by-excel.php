<?php
    if (isset($_POST['upload_excel'])) {
        // \Logger\Log('is upload_excel');
        $result = wp_upload_bits($_FILES['excel']['name'], null, file_get_contents($_FILES['excel']['tmp_name']));
        // \Logger\Log($_FILES['excel']['name']);
        // \Logger\Log($_FILES['excel']['tmp_name']);

        if($result['error']== false){
            $excel_data = \EXCEL_TABLE\IMEI_ReadExcelFile($result['file']);

            global $wpdb;
            $tablename = $wpdb->prefix.'excel_table';

            //truncate table
            $wpdb->query("TRUNCATE $tablename");

            foreach ($excel_data as $key => $row) {
                // \Logger\Log(print_r($row,true));

                
                $col1 = trim($row['col1']);
                $col2 = trim($row['col2']);
                $col3 = trim($row['col3']);
                $col4 = trim($row['col4']);
                $col5 = trim($row['col5']);
                $col6 = trim($row['col6']);
                $col7 = trim($row['col7']);

                if(empty($col1) && empty($col2) && empty($col3) &&
                   empty($col4) && empty($col5) && empty($col6) &&
                   empty($col7)){
                    continue;
                }

                    $wpdb->insert( $tablename, array(
                        'col1' => $col1, 
                        'col2' => $col2, 
                        'col3' => $col3, 
                        'col4' => $col4, 
                        'col5' => $col5, 
                        'col6' => $col6, 
                        'col7' => $col7
                    ));
            }
        }

    }
?>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <h1>ثبت محصولات با اکسل</h1>
                </div>

                <form action="" enctype="multipart/form-data" method="post">
                <input type="hidden" value="upload_excel" name="upload_excel">
                    <div class="row">

                        <div class="col-4">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="file" accept=".xlsx" class="btn btn-info" id="btn-upload" name="excel">
                                </div>
                                <label class="control-label col-sm-2" for="excel">آپلود اکسل :</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="mb-3 mt-2">
                                <button type="submit" class="btn btn-success">ثبت</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>