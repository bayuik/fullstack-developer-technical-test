@extends('layout.app')

@section('content')
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Data Karyawan</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama </label>
                                <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                    placeholder="Enter Your Name" name="name" value={{$employee->name}}>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">NIP </label>
                                <input type="text" class="form-control" id="nip" aria-describedby="nipHelp"
                                    name="nip" placeholder="Enter Your NIP" value={{$employee->nip}} >
                            </div>
                            <div class="form-group" id="date_birth">
                                <label for="tangal_lahir">Tanggal Lahir</label>
                                <div class="input-group date">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" class="form-control" id="tangal_lahir"
                                        name="date_of_birth" value={{$employee->date_of_birth}} >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea class="form-control" id="address" name="address" rows="3">{{$employee->address}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="phone">No. Telepon </label>
                                <input type="text" class="form-control" id="phone" aria-describedby="nameHelp"
                                    name="phone" placeholder="Enter your phone number" value={{$employee->phone}}>
                            </div>
                            <div class="form-group">
                                <label for="department">Department </label>
                                <input type="text" class="form-control" id="department" aria-describedby="nameHelp"
                                    name="department" name="department" placeholder="Enter your Department" value={{$employee->department}} >
                            </div>
                            <div class="form-group">
                                <label for="religion">Agama</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="islam" name="religion" value="islam"
                                        class="custom-control-input" @if($employee->religion == 'islam') checked @endif >
                                    <label class="custom-control-label" for="islam">Islam</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="kristen" name="religion" value="kristen"
                                        class="custom-control-input" @if($employee->religion == 'kristen') checked @endif >
                                    <label class="custom-control-label" for="kristen">Kristen</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="buddha" name="religion" value="buddha"
                                        class="custom-control-input" @if($employee->religion == 'buddha') checked @endif >
                                    <label class="custom-control-label" for="buddha">Buddha</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" checked id="fullstack" name="position" value="1"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="fullstack">fullstack</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="HRD" name="position" value="2"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="HRD">HRD</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="Mobile" name="position" value="3"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="Mobile">Mobile Dev</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status Karyawan</label>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="status" name="status"
                                        value={{$employee->status}} @if($employee->status) checked @endif >
                                    <label class="custom-control-label" for="status">Is Active</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="images">Upload KTP</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="images" name="image" value="uploads/images{{$employee->image}}" >
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
