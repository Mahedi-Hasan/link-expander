@extends('dashboard')
@section('content')
<div class="container">
    <h3>New Job</h3>
    <form action="">
        <div class="form-group">
            <label for="csvInput">Please Select CSV file</label>
            <input name="csvInput" type="file" id="droppable" class="form-field">
            
        </div>
        <button type="submit" class="btn btn-sm btn-success">Save</button>
    </form>
</div>
@endsection