<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Request;

use App\Statement;

use App\ilrsCore\IlrsCoreStatement;

use Illuminate\Pagination\Paginator;

class StatementController extends Controller
{
    //

    public function index()
    {
        $perPage = 5;
        $page = 1;
        if(isset($_GET['page']))
        {
            $page = ($_GET['page']*$perPage)-($perPage-1);
        }
        $statements   = Statement::paginate($perPage);
       /* echo "<pre>";
        print_r($statements);
        exit;*/
        return view('statement.index', compact('statements', 'page'));
    }

    public function saveStatement(Request $request)
    {
        $IlrsObj = new IlrsCoreStatement();

        $data = $IlrsObj->getStatementInputs($request);

        if(isset($data['actor']))
        {
            $input['statement']['actor']['mbox']        =   $data['actor']['mbox'];
            $input['statement']['actor']['name']        =   $data['actor']['name'];
            $input['statement']['actor']['objectType']  =   $data['actor']['objectType'];
        }

        if(isset($data['verb']))
        {
            $input['statement']['verb']['id']               =   $data['verb']['id'];
            $input['statement']['verb']['display']['en-US'] =   $data['verb']['display']['en-US'];
        }

        if(isset($data['object']))
        {
            $input['statement']['object']['id']     =  $data['object']['id'];
            $input['statement']['object']['objectType']     =   $data['object']['objectType'];
            $input['statement']['object']['definition']['name']['en-US'] = $data['object']['definition']['name']['en-US'];
            $input['statement']['object']['definition']['description']['en-US'] = $data['object']['definition']['description']['en-US'];
        }

        if(isset($data['authority']))
        {
            $input['statement']['authority']['objectType']     =   $data['authority']['objectType'];
            $input['statement']['authority']['name']     =   $data['authority']['name'];
            $input['statement']['authority']['mbox']     =   $data['authority']['mbox'];
        }

        $statement = new Statement($input);
        $statement->save();
    }
}
