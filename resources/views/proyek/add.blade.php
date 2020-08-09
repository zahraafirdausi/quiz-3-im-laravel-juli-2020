   @extends('layouts.master')

   @section('content')
        <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">

                                        <div class="form-group">
                                            <label>Nama Proyek</label>
                                            <input class="form-control" name="nama" placeholder="Nama Proyek">
                                        </div>

                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" name="desk" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Mulai</label>
                                            <input class="form-control" placeholder="dd/mm/yyyy" name="tgl_mulai">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Deadline</label>
                                            <input class="form-control" placeholder="dd/mm/yyyy" name="tgl_deadline">
                                        </div>

                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option>On Going</option>
                                                <option>Done</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit Button</button>
                                        <button type="reset" class="btn btn-reset">Reset Button</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
       @endsection

