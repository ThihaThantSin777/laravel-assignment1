@extends('layout.temp')

@section('contact')
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Carrier Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">
                  <thead>
                    <tr>
                      <th>Schedule ID</th>
                      <th>Schedule Name</th>
                      <th>Start</th>
                      <th>To</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Flutter Time</td>
                      <td>9:00 AM</td>
                      <td>11:00 AM</td>
                      <td>
                        <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                        <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                      </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Laravel Time</td>
                        <td>1:00 PM</td>
                        <td>3:00 PM</td>
                        <td>
                          <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>React Time</td>
                        <td>5:00 PM</td>
                        <td>7:00 PM</td>
                        <td>
                          <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Javafx Time</td>
                        <td>8:00 PM</td>
                        <td>9:00 PM</td>
                        <td>
                          <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button>
                          <button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button>
                        </td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
