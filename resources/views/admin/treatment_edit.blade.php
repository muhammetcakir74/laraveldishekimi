@extends('layouts.admin')

@section('title','Add Treatment')

@section('content')
        <section class="content" style="margin-top: -3rem;margin-right: 3rem;margin-left: 3rem;margin-bottom: 2rem">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Treatment Add
                    </h3>
                </div>

                <div class="card-body">

                    <form action="{{route('admin_treatment_store')}}">
                        @csrf
                        <div class="form-group">
                            <label><b>Parent</b></label>
                            <select name="parent_id" class="form-control">
                                <option value="0" selected>Main Treatment</option>
                                @foreach($datalist as $rs)
                                <option value="{{$rs->id}}">{{$rs->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label><b>Title</b></label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <label><b>Keywords</b></label>
                            <input type="text" class="form-control" id="keywords"  name="keywords">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Description</b></label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                        </div>
                        <div class="form-group">
                            <label><b>Status</b></label>
                            <select id="status"  name="status" class="form-control">
                                <option selected>False</option>
                                <option>True</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Detail</b></label>
                                <input type="text" class="form-control" id="detail" name="detail">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label><b>Price</b></label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Treatment</button>
                    </form>

                </div>

                <div class="card-footer">
                    Footer
                </div>
            </div>
        </section>
@endsection
