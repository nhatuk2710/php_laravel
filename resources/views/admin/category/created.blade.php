@extends('admin.layout')
<div id="page-wrapper" class="col-lg-6">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Them Danh Muc</h4></div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url("admin/category/brandcreate")}}">Dashboard</a></li>
                </ol>
            </div>
            <form action="{{url("admin/category/store")}}" method="post">
            @csrf
            <div class="form-group has-success">
                <label for="cc-name" class="control-label"><p>Tên danh mục</p></label>
                <input id="cc-name" name="category_name" type="text" value="{{old("category_name")}}"
                       class="form-control cc-name @if($errors->has("category_name"))is-invalid @endif">
                <span class="help-block field-validation-valid"></span>
                @if($errors->has("category_name"))
                    <p style="color:red">{{$errors->first("category_name")}}</p>
                @endif
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-lock fa-lg"></i>&nbsp;
                    <span id="payment-button-amount">Gửi đi</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </div>
            </form>
        </div>
    </div>
</div>

