@extends('mgma.layouts.app')

@section('content')
<div class="container pt-2">
    <div class="col-md-12">

        <div class="card">
            <section class="content-header ptb-10">
                <div class=" row">

                    <div class="col-md-12">
                        <div class="card card-primary">
                            <!-- <div class="card-header">
                                <h3 class="card-title"><span class="mandatory">*</span> Fields are required.</h3>
                            </div> -->

                            <form method="post" action="">
                                @method('PATCH')
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-1 mandatory-field">
                                            <span class="mandatory">*</span>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" name="name" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-1 mandatory-field">
                                            <span class="mandatory">*</span>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                                        <div class="col-sm-1 mandatory-field">
                                            <span class="mandatory">*</span>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 select2-hidden-accessible" style="width:100%" id="role" name="type" tabindex="-1" aria-hidden="true">
                                                <option data-select2-id="1" value="1">MGMA</option>
                                                <option data-select2-id="2" value="2">Moc</option>
                                                <option data-select2-id="3" value="3">RMGPP</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="status" class="col-sm-2 col-form-label">Add Role</label>
                                        <div class="col-sm-1 mandatory-field">
                                            <span class="mandatory">*</span>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="status[]" value="1">
                                                <label for="customCheckbox1" class="form-check-label app">App Checking</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="status[]" value="2">
                                                <label for="customCheckbox1" class="form-check-label app">App Endors</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="status[]" value="3">
                                                <label for="customCheckbox1" class="form-check-label factory">ID/ED Check</label>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button id="check" type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
@endsection