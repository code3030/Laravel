<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Todos;

class TodoController extends Controller
{
    public function todoControllerList()
    {
//        $todos = DB::table('todos')->get();
        $model_todos = DB::table('Todos')->orderByDesc('id')->get();
//        dd($todos);

        return view('todo', [
            'todo' => $model_todos
        ]);
    }

    public function store()
    {
        // 폼에 공백(기입하지 않을 경우) 에러 화면 제거
        request()->validate([
            'id' => 'required',
        ]);

//        $values = request(['title', 'body']);
//
//        // 지금 로그인한 사람의 ID를 알려준다.
//        $values['user_id'] = auth()->id();

        Todos::create([
            'id' => request('id'),
            'user_id'=> request('user_id'),
            'name' => request('name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'project' => request('project'),
            'period' => request('period'),
        ]);

        return redirect('todo');
    }

    public function show(Todos $number)
    {

        // 내 글이 아닐경우 403 page view
//        if(auth()->id() != $number->user_id) {
//            abort(403);
//        }
//        abort_if( auth()->id() != $number->user_id, 403);
        // User Model owns 만들어 사용
//        abort_unless(auth()->user()->owns($number), 403);
        // auth()->user() == User::Class
        // find(id)
//        User::find(1);

        return view('show', [
            'number' => $number
        ]);
    }

    public function edit(Todos $number)
    {
        return view('edit', [
            'edit' => $number
        ]);
    }

    public function update(Todos $number)
    {

//        abort_unless(auth()->user()->owns($number), 403);

        $number->update([
            'id' => request('id'),
            'user_id' => request('user_id'),
            'name' => request('name'),
            'phone' => request('phone'),
            'email' => request('email'),
            'project' => request('project'),
            'period' => request('period'),
        ]);
        return redirect('todo');
    }

    public function destroy(Todos $number)
    {
//        abort_unless(auth()->user()->owns($number), 403);

        $number->delete();

        return redirect('todo');
    }
}
