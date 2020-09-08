<?php

namespace App\Http\Controllers;

use App\ChatBot;
use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd($request);
        //'label', 'answer', 'next_action'
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ChatBot  $chatBot
     * @return \Illuminate\Http\Response
     */
    public function show(ChatBot $chatBot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChatBot  $chatBot
     * @return \Illuminate\Http\Response
     */
    public function edit(ChatBot $chatBot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChatBot  $chatBot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatBot $chatBot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChatBot  $chatBot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChatBot $chatBot)
    {
        //
    }
}
