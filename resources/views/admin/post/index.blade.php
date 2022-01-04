@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Posts list</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                                       role="grid" aria-describedby="example1_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Title
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr class="odd">
                                            <td class="dtr-control" tabindex="0">{{ $post->title }}</td>
                                            <td class="dtr-control" tabindex="0">
                                                <div class="row justify-content-around">

                                                <a style="width: 40px;" type="button" class="btn btn-primary"
                                                   href="{{ route('post.edit', $post->id) }}"><i
                                                        class="far fa-edit"></i></a>

                                                <form action="{{ route('post.delete', $post->id) }}" method="post" class="">
                                                    @csrf
                                                    @method('delete')
                                                    <label style="margin-bottom: 0;" class="btn btn-danger">

                                                    <i class="far fa-trash-alt"></i>
                                                    <input type="submit" hidden value="Delete"
                                                           class="btn btn-block btn-danger">
                                                    </label>
                                                </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing
                                    1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                {{ $posts->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
