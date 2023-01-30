<div style="display: flex ; justify-content: space-between">
    <a class="btn btn-primary btn-sm" style="width: 60px ; height: 30px" href="{{route('companies.edit' , $model->id)}}">Edit</a>
    <a  class="btn btn-danger btn-sm delete-btn" style="width: 75px ; height: 30px" href="{{route('companies.delete' , $model->id)}}">Delete</a>
</div>
