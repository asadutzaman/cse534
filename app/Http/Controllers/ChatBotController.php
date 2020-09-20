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
        $rules = array(
            'label'    =>  'required',
            'answer'     =>  'required',
            'next_action'         =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(
            'label'        =>  $request->label,
            'answer'         =>  $request->answer,
            'next_action'             =>  $new_name
        );

        ChatBot::create($form_data);

        return response()->json(['success' => 'Data Added successfully.']);
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

    public function manualdiv(){
        // $result = "<div id='hidden_div'>This is a hidden div</div>";
        // <input type='hidden' name='_method' value='POST'>
        $result =   "
                    
            <form id='node'>
            
            <input type='hidden' name='_token' id='csrf-token' value='csrf_token() ' />
            
            <fieldset>
            <div class='form-group'>
                <label for='media'>Image</label>
                <input type='text' id='image' name='image[]' class='form-control' readonly>
                <i class='fa fa-plus' onClick='media(this.id)'  id='addImg' aria-hidden='true'></i>
            </div>

            <div class='form-group'>
                <label for='title'>Title</label>
                <input type='text' id='title' name='title[]' class='form-control'>
            </div>

            <div class='form-group'>
                <label for='subtitle'>Subtitle</label>
                <input type='text' id='subtitle' name='subtitle[]' class='form-control'>
            </div>

            <div class='form-group'>
                <label for='url'>Default URL</label>
                <input type='text' id='url' name='url[]' class='form-control'>
            </div>

            <div id='media'></div>

                <fieldset>
                <div class='form-group'>
                    <label for='btntype'>Type</label>
                    <select id='type' name='type[]' class='form-control'>
                    <option value='postback'>POST BACK</option>
                    <option value='web_url' selected>WEB URL</option>
                    </select>
                </div>

                <div class='form-group'>
                    <label for='title'>Title</label>
                    <input type='text' id='title2' name='title[]' class='form-control'>
                </div>

                <div class='form-group'>
                    <label for='url'>URL</label>
                    <input type='text' id='url' name='url[]' class='form-control'>
                </div>

                <div class='form-group' hidden>
                    <label for='btntype'>Next Action</label>
                    <select id='action' name='action[]' class='form-control'>
                    <option value=''>No action</option>
                    <option value='Node1'>Node 1</option>
                    </select>
                </div>
                </fieldset>
                
            </fieldset>
            <div id='div1'></div>
            <i class='fa fa-plus-circle' onClick='addform(this.id)' id='addBtn' aria-hidden='true'></i>
            <input type='submit' onClick='saveform(this.id)' name='action_button' id='action_button' class='btn btn-warning' value='Add' />
            </form>
                    ";
        return $result;
    }

    public function addform(){
        // $result = "<div id='hidden_div'>This is a hidden div</div>";
        $result =   "
                    
        <fieldset>
        <div class='form-group'>
            <label for='media'>Image</label>
            <input type='text' id='image' name='image[]' class='form-control' readonly>
            <i class='fa fa-plus' id='addImg' aria-hidden='true'></i>
        </div>

        <div class='form-group'>
            <label for='title'>Title</label>
            <input type='text' id='title4' name='title[]' class='form-control'>
        </div>

        <div class='form-group'>
            <label for='subtitle'>Subtitle</label>
            <input type='text' id='title5' name='subtitle[]' class='form-control'>
        </div>

        <div class='form-group'>
            <label for='url'>Default URL</label>
            <input type='text' id='defaulturl' name='url[]' class='form-control'>
        </div>

            <fieldset>
            <div class='form-group'>
                <label for='btntype'>Type</label>
                <select id='type3' name='type[]' class='form-control'>
                <option value='postback'>POST BACK</option>
                <option value='web_url' selected>WEB URL</option>
                </select>
            </div>

            <div class='form-group'>
                <label for='title'>Title</label>
                <input type='text' id='title2' name='title[]' class='form-control'>
            </div>

            <div class='form-group'>
                <label for='url'>URL</label>
                <input type='text' id='url' name='url[]' class='form-control'>
            </div>

            <div class='form-group' hidden>
                <label for='btntype'>Next Action</label>
                <select id='action' name='action[]' class='form-control'>
                <option value=''>No action</option>
                <option value='Node1'>Node 1</option>
                </select>
            </div>
            </fieldset>
            
        </fieldset>
                    ";
        return $result;
    }

    public function media(){
        // $result = "<div id='hidden_div'>This is a hidden div</div>";
        $result =   "
                    
        <div class='form-group'>
    <label for='media'>Image</label>
    <input type='text' id='image' name='image' class='form-control' readonly>
    <i class='fa fa-plus' id='addImg' aria-hidden='true'></i>
  </div>

  <fieldset>
    <div class='form-group'>
      <label for='btntype'>Type</label>
      <select id='type' name='type[]' class='form-control'>
        <option value='postback'>POST BACK</option>
        <option value='web_url' selected>WEB URL</option>
      </select>
    </div>

    <div class='form-group'>
      <label for='title'>Title</label>
      <input type='text' id='title' name='title[]' class='form-control'>
    </div>

    <div class='form-group'>
      <label for='url'>URL</label>
      <input type='text' id='url' name='url[]' class='form-control'>
    </div>

    <div class='form-group' hidden>
      <label for='btntype'>Next Action</label>
      <select id='action' name='action[]' class='form-control'>
        <option value=''>No action</option>
        <option value='Node1'>Node 1</option>
      </select>
    </div>
  </fieldset>
                    ";
        return $result;
    }

    public function formsave(Request $request){
        // return "ok";
        dd($request);
    }
}
