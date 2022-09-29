@extends('layouts/layout')

@section('title')
    edit
@endsection

@section('content')
    <style>
        body { background-color: #1a202c; }
        .edit-wrap { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); min-width: 1000px; }
        .edit-wrap form { width: 100%; }
    </style>
    <div class="edit-wrap">
        <form action="/todo/{{ $edit->id }}" method="POST">
            @method('PUT')
            @csrf
            <table style="width: 100%; position: relative;">
                <thead style="color: #fff; font-size: 1rem">
                <th>번호</th>
                <th>이름</th>
                <th>휴대폰</th>
                <th>이메일</th>
                <th>프로젝트</th>
                <th>기간</th>
                </thead>
                <tbody>
                    <tr class="tr-overay" >
                        <td><input type="text" name="id" value="{{ $edit->id }}"></td>
                        <td><input type="text" name="name" value="{{ $edit->name }}"></td>
                        <td><input type="text" name="phone" value="{{ $edit->phone }}"></td>
                        <td><input type="text" name="email" value="{{ $edit->email }}"></td>
                        <td style="text-align: left;"><input type="text" name="project" value="{{ $edit->project }}"></td>
                        <td><input type="text" name="period" value="{{ $edit->period }}"></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" style="margin: 10px 0 0 0; padding: 10px 50px; float: right;">Edit</button>
        </form>
    </div>
@endsection
