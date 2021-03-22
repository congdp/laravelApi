@extends('layouts.app')
@section('content')
    <h3>List Posts</h3>
    <table class="table table-bordered">
        <thead class="">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Mô tả ngắn</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Tác vụ</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($posts as  $item)
               <tr>
                <th scope="row">{{ $item-> id }}</th>
                <td> {{ $item-> title }}</td>
                <td>{{ $item-> description }}</td>
                <td>{{ $item-> content }}</td>
                <td>{{ $item-> status == 0 ? "Public" : "Private" }}</td>
                <td>
                    <a href="" class="btn btn-success btn-sm rounded-0 text-white d-block"
                        type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>

                    <a href=""
                        onclick="return confirm('Bạn có muốn xóa người dùng này?') "
                        class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip"
                        data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
           @endforeach

        </tbody>
    </table>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Add Post</h1>
            <div class="form-area">
                <form role="form">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Title" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                            required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile"
                            placeholder="Mobile Number" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message"
                            maxlength="140" rows="7"></textarea>
                        <span class="help-block">
                            <p id="characterLeft" class="help-block ">You have reached the limit</p>
                        </span>
                    </div>

                    <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit
                        Form</button>
                </form>
            </div>
        </div>
    </div><!-- end row -->
@endsection
