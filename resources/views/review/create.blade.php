@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Write</div>

                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="subject" placeholder="제목을 입력하세요">
                    </div>
                    <div class="form-group" id="editSection">
                    </div>
                    <button type="submit" class="btn btn-default">제출</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var editor = new tui.Editor({
    el: document.querySelector('#editSection'),
    initialEditType: 'markdown',
    previewStyle: 'vertical',
    height: '300px'
    });
</script>
@endsection
