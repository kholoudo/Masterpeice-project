@extends('admin.layout')
@section('content')
<div class="container mt-4">
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" method="post" action="{{route('admin.services.store')}}">


                            @csrf

                            <div class="controls ">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name"> Name </label> <input id="form_name" type="text" name="service_name"    class="form-control" placeholder="Enter Service Name " required="required" data-error="Firstname is required."> </div>
                                        <div class="form-group"> <label for="form_name"> Description </label> <input id="form_name" type="text" name="service_description"    class="form-control" placeholder="Enter Service Description" required="required" data-error="Firstname is required."> </div>
                                        <div class="form-group"> <label for="form_name"> Price </label> <input id="form_name" type="text" name="service_price"    class="form-control" placeholder="Enter Price " required="required" data-error="Firstname is required."> </div>
                                        <div class="form-group"> <label for="form_name"> Category </label> <input id="form_name" type="text" name="category_id"    class="form-control" placeholder="Enter Price " required="required" data-error="Firstname is required."> </div>

                                    </div>

                                </div>
        </div>
    </div>
                                <div class="col-md-12 mt-3"> <input style="width: 10em" type="submit" class="btn btn-success btn-send pt-2 mt-2 btn-block " value="submit"> </div>

                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
@endsection
