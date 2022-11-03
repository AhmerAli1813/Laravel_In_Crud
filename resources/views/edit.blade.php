<x-header/>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            <h1>Update record Form</h1> <br>
<form action="{{url('modifyData')}}" method="POST" enctype="multipart/form-data" >
@csrf 
<div class="mb-3">
  <label for="" class="form-label">Product Name</label>
<input type="hidden" name="p_id" value="{{$data->ID}}">
  <input type="text" class="form-control" name="PName" id="PName"  placeholder="Name" value="{{$data->pName}}">
  <small id="PNameHelpId" class="form-text text-muted">Help text</small>
</div>
<div class="mb-3">
  <label for="" class="form-label">Prize</label>
  <input type="text" name="PPrize" id="" value="{{$data->pPrize}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Choose image</label>
  <input type="file" class="form-control" name="PImage" id="" placeholder="Img" value="{{$data->pImage}}" aria-describedby="fileHelpId">
  <div id="fileHelpId" class="form-text">Help text</div>
</div>
<div class="col-12">
    <button class="btn btn-primary" type="submit"> update </button>
  </div>
</form>
        </div>
    </div>
</div>
<x-footer/>