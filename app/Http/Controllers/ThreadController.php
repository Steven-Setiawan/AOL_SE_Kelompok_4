<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
     /**
     * Menampilkan semua thread.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $threads = Thread::latest()->get();
        return view('threads.index', compact('threads'));
    }

    /**
     * Menampilkan form untuk membuat thread baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Menyimpan thread baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        Thread::create($validatedData);

        return redirect()->route('threads.index')->with('success', 'Thread created successfully.');
    }

    /**
     * Menampilkan detail dari sebuah thread.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\View\View
     */
    public function show(Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }

    /**
     * Menampilkan form untuk mengedit sebuah thread.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\View\View
     */
    public function edit(Thread $thread)
    {
        return view('threads.edit', compact('thread'));
    }

    /**
     * Menyimpan perubahan dari sebuah thread yang sudah diedit ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Thread $thread)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $thread->update($validatedData);

        return redirect()->route('threads.index')->with('success', 'Thread updated successfully.');
    }

    /**
     * Menghapus sebuah thread dari database.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Thread $thread)
    {
        $thread->delete();

        return redirect()->route('threads.index')->with('success', 'Thread deleted successfully.');
    }
}
