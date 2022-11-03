<x-header />
<div class="container">
<div class="table-container">
<div class="row">
    <div class="col"> <div class="alert alert-warning" role="alert">
        <b> very Important !</b>  open Xampp start Mysqli And Apache  then Create database <b>Database Name</b> open .env file add <b>Database Name</b>          <br>
        <strong>Important !</strong> use  This Command   <strong>php artisan migrate</strong> <br>  
        <b> Focus !</b> this command  create table in your database    
       <b> Focus !</b>    no need to make model because i am already make it ,

    </div>
    <div class="alert alert-success role="alert">
        <p>best of luck  press button of star in github </p>
    </div>
</div>
    <div class="col-2"></div>
</div>

<div class="row">
    <div class="col-8"></div>
    <div class="col-2"> <button class="btn btn-outline-info btn-sm mb-3 mt-2 mx-auto" data-bs-toggle="modal" data-bs-target="#productAdd"> Add Record</button>

</div>
</div>
<table class="table table-responsive-md ">
    <thead class=" table-success">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Product Name</th>
            <th> prize</th>
            <th> Action</th>
        <tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td>{{$item->ID}}</td>
            <td> <img src="images/{{$item->pImage}}" width="50px" alt="{{$item->pImage}}"> </td>
            <td>{{$item->pName}}</td>
            <td>{{$item->pPrize}}</td>
            
            <td><a href="DelProduct/{{$item->ID}}"  class="btn btn-danger btn-sm ml-2">Delete</a> <a href="EditProduct/P_id={{$item->ID}}" class="btn btn-info btn-sm">Edit</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</div>
<div class="modal fade" id="productAdd" tabindex="-1" aria-labelledby="Label" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Label"> Add Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <form action="addProduct" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 row">
                        <label for="inputName" class="col-4 col-form-label">Name</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputName" class="col-4 col-form-label">Prize</label>
                        <div class="col-8">
                            <input type="text" class="form-control" name="inputPrize" id="inputPrize" placeholder="prize">
                        </div>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">Choose Image</label>
                      <input type="file" class="form-control" name="inputImg" id="inputImg" place1holder="" aria-describedby="fileHelpId">
                      
                    </div>
                    
                    
                    <div class="mb-3 row">
                        <div class="offset-sm-4 col-sm-8">
                            <button type="submit" class="btn btn-primary"> save</button>
                        </div>
                    </div>
                </form>
              </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLose</button>
                
            </div>
        </div>
    </div>
</div>

<x-footer/>