<div class="row">
	<div class="col-xs-12">
		<div class="location-form">

		<form id="location-form" action="/location" method="post">
			<div class="form-group field-locationform-location required">
				<label class="control-label" for="locationform-location">Location</label>
				<select id="locationform-location" class="form-control" name="LocationForm[location]">
					<option value="">Select...</option>
					<?php foreach($locations as $loc): ?>
					<option value="<?php echo $loc['id']; ?>"><?php echo $loc['location']; ?></option>
					<?php endforeach; ?>
				</select>
				<div class="help-block"></div>
			</div>
			<div class="form-group field-locationform-location required">
				<label class="control-label" for="locationform-location">Index</label>
				<select id="locationform-index" class="form-control" name="LocationForm[location]">
					<option value="">Select...</option>
				</select>
				<div class="help-block"></div>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Go</button>
				<span id="locationform-loader"></span>
			</div>
		</form>
			</div>
	</div>
	</div>

	<div class="row">
	<div class="col-xs-12">
		<div class="share-index">
	    
	    <p>
	        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Create Share</button>
	        <button class="btn btn-success" data-toggle="modal" data-target="#myModal-upload">Upload</button>
	        <a class="btn btn-danger" href="#" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete all the data in the current view?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span> Clear all</a>

	    </p>

	    <p></p>

	    <div id="w1" class="grid-view">
			<table class="table table-striped table-bordered" id="shares-tbl">
				<thead>
					<tr><th><a href="/share/index?sort=order" data-sort="order">Insert to row number</a></th><th><a href="/share/index?sort=share_name" data-sort="share_name">Share Name</a></th><th><a href="/share/index?sort=symbol" data-sort="symbol">Symbol</a></th><th><a href="/share/index?sort=price_initiated" data-sort="price_initiated">Price Initiated</a></th><th><a href="/share/index?sort=recommendation" data-sort="recommendation">recommendation</a></th><th class="action-column">&nbsp;</th></tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>


<!-- models -->

<!-- Create Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Share</h4>
      </div>
      <div class="modal-body">
          <div class="share-create">
			<div class="share-form">

				<form id="createshare-form" action="/test" method="post">
					<input type="hidden" name="_csrf" value="OTZDek5qeFh6ZXc.NiAxFgByCBUnJCErQ0UPEQQIPyFhRQ0NCyECEA==">
					    <div class="form-group field-share-share_name">
					<label class="control-label" for="share-share_name">Share Name</label>
					<input type="text" id="createshare-name" class="form-control" name="Share[share_name]" maxlength="100">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-symbol">
					<label class="control-label" for="share-symbol">Symbol</label>
					<input type="text" id="createshare-symbol" class="form-control" name="Share[symbol]" maxlength="32">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-price_initiated">
					<label class="control-label" for="share-price_initiated">Price Initiated</label>
					<input type="text" id="createshare-price_initiated" class="form-control" name="Share[price_initiated]">

					<div class="help-block"></div>
					</div>
					<div class="form-group field-share-recommendation">
					<label class="control-label" for="share-recommendation">Recommendation</label>
					<select id="createshare-recommendation" class="form-control" name="Share[recommendation]">
					<option value="">Select...</option>
					<option value="0">BUY</option>
					<option value="1">SELL</option>
					<option value="2">EXIT</option>
					</select>

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-order">
					<label class="control-label" for="share-order">Insert to row number</label>
					<input type="text" id="createshare-order" class="form-control" name="Share[order]">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-location_id">

					<div class="help-block"></div>
					</div>
					    <div class="form-group field-share-index">

					<div class="help-block"></div>
					</div>    

				    <div class="form-group">
				        <button type="submit" class="btn btn-success">Create</button>    
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				    </div>

				</form>
			</div>
		</div>
      </div>
    </div>
  </div>
</div>

<!-- upload Modal -->
<div id="myModal-upload" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload file</h4>
      </div>
      <div class="modal-body">
      	<form id="w0" action="/share" method="post" enctype="multipart/form-data">
	        <div class="form-group field-exceluploadform-excelfile">
				<label class="control-label" for="exceluploadform-excelfile">Data</label>
				<input type="hidden" name="ExcelUploadForm[excelFile]" value=""><input type="file" id="exceluploadform-excelfile" name="ExcelUploadForm[excelFile]">

				<div class="help-block"></div>
			</div>
	        <button class="btn btn-success">Upload</button>
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>

	    </form>
      </div>
    </div>
  </div>
</div>