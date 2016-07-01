<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Http\Requests;

use Request;

use App\Statement;

class StatementController extends Controller
{
    //

    public function index()
    {
        echo "Sagar here";
        return view('statement/statement');
    }

    public function saveStatement(Request $request)
    {
        /*echo "sagar munot gggg ";
        print_r($input);
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        print_r($obj);
        exit;*/
        //echo "sagar here after submit";
        $statementData = json_decode($request::get('statement'));
        print_r($statementData->actor->mbox);
        $input['statement']['actor']['mbox'] =  $statementData->actor->mbox;
        $input['statement']['actor']['name']    =   $statementData->actor->name;
        $input['statement']['actor']['objectType']  =   $statementData->actor->objectType;

        $input['statement']['verb']['id']  =   $statementData->verb->id;
        $input['statement']['verb']['display']['en-US']  =   $statementData->verb->display->en-US;

        $input['statement']['object']['id']     =   $statementData->object->id;
        $input['statement']['object']['definition']['name'] =   $statementData->object->definition->name;


        //$input = array($input['statement']);
        print_r($statementData);
        exit;
        $statement = new Statement($input);
        $statement->save();
        //$statement  =   array($request->all())
        /*print_r($input);
        $json = file_get_contents('php://input');
        $obj = json_decode($json);
        print_r($obj);
        exit;*/
    }
}
