<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Task; // 追加

class TasksController extends Controller
{

    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'status' => 'required|max:10',
        ]);

        $request->user()->tasks()->create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
        ]);
    
        return redirect('/');
    }

    public function show($id)
    {
        $task = Task::find($id);

        if (\Auth::user()->id === $task->user_id) {
            return view('users.show', [
                'task' => $task,
            ]);
        }
        
        return redirect('/');
    }

    public function edit($id)
    {
        $task = Task::find($id);

        if (\Auth::user()->id === $task->user_id) {
            return view('users.edit', [
                'task' => $task,
            ]);
        }
        
        return redirect('/');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required|max:255',
            'status' => 'required|max:10',
        ]);

        $task = Task::find($id);
        $task->title = $request->title;
        $task->content = $request->content;
        $task->status = $request->status;
        $task->save();
        
        return redirect('/');
    }

    public function destroy($id)
    {
        $task = \App\Task::find($id);
        if (\Auth::user()->id === $task->user_id) {
            $task->delete();
        }

        return redirect()->back();
    }
}
