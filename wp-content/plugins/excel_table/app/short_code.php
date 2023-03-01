<?php

add_shortcode( "excel_table_search", "excel_table_search" );

function excel_table_search() {
	global $wpdb;

	$table = $wpdb->prefix . 'excel_table';

	$list = $wpdb->get_results( $wpdb->prepare(
		"SELECT  * FROM $table e
        
        "
	) );
	?>


    <div class="container">
        <div class="row">

                <div class="row">
                    <div class="col-12">
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#filter1"
                                aria-expanded="false" aria-controls="filter1">
                            فیلتر ستون ۱ و ۲
                        </button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#filter2"
                                aria-expanded="false" aria-controls="filter2">
                            فیلتر ستون ۳ و ۴
                        </button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#filter3"
                                aria-expanded="false" aria-controls="filter3">
                            فیلتر ستون ۵ و ۶
                        </button>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#filter4"
                                aria-expanded="false" aria-controls="filter4">
                            فیلتر ستون ۷
                        </button>
                    </div>

                </div>

                <div class="row">

                    <div class="collapse" id="filter1">
                        <div class="card card-body">

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="col1">ستون ۱</label>
                                        <div class="input-group">
                                            <input type="text" id="col1" name="col1" class="form-control"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="col2">ستون ۲</label>
                                        <div class="input-group has-validation">
                                            <input type="text" id="col2" name="col2" class="form-control"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="collapse" id="filter2">
                        <div class="card card-body">

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="col3">ستون ۳</label>
                                        <div class="input-group has-validation">
                                            <input type="text" id="col3" name="col3" class="form-control"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="col4">ستون ۴</label>
                                        <div class="input-group has-validation">
                                            <input type="text" id="col4" name="col4" class="form-control"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="collapse" id="filter3">
                        <div class="card card-body">

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="col5">ستون ۵</label>
                                        <div class="input-group has-validation">
                                            <input type="text" id="col5" name="col5" class="form-control"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="col6">ستون ۶</label>
                                        <div class="input-group has-validation">
                                            <input type="text" id="col6" name="col6" class="form-control"
                                                   autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="collapse" id="filter4">
                        <div class="card card-body">
                            <div class="row">

                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="col7">ستون ۷</label>
                                    <div class="input-group has-validation">
                                        <input type="text" id="col7" name="col7" class="form-control" autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 mt-2">
                            <button id="search_in_excel" type="button" class="btn btn-success">جست و جو</button>
                        </div>
                    </div>
                </div>



        </div>
        <div class="row">

            <!-- <list -->

            <div class="row ma-imei_table">

				<?php if ( count( $list ) > 0 ) { ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="excel_table">

                        <tbody>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Col1</th>
                            <th scope="col">Col2</th>
                            <th scope="col">Col3</th>
                            <th scope="col">Col4</th>
                            <th scope="col">Col5</th>
                            <th scope="col">Col6</th>
                            <th scope="col">Col7</th>
                        </tr>
						<?php
						$number = 1;
						foreach ( $list as $key => $value ) {
							?>
                            <tr class="excel-row">
                                <td scope="row"><?php echo $number ++; ?></td>
                                <td class="excel-col1"><?php echo $value->col1; ?></td>
                                <td class="excel-col2"><?php echo $value->col2; ?></td>
                                <td class="excel-col3"><?php echo $value->col3; ?></td>
                                <td class="excel-col4"><?php echo $value->col4; ?></td>
                                <td class="excel-col5"><?php echo $value->col5; ?></td>
                                <td class="excel-col6"><?php echo $value->col6; ?></td>
                                <td class="excel-col7"><?php echo $value->col7; ?></td>
                            </tr>
							<?php
						}
						?>
                        </tbody>

                    </table>
                </div>

				<?php } else { ?>
                    <p>
                        در حال حاضر هیچ محصولی نیست
                    </p>
				<?php } ?>

            </div>

            <!-- </list -->


        </div>
    </div>

	<?php
}