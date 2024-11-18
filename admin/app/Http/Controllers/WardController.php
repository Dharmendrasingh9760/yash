<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use Illuminate\Http\Request;
use Auth, Blade, Config, Cache, Cookie, Hash, Input, Response, URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class WardController extends Controller
{

    public $modelName        =   'wards';
    public $sectionName      =   'Ward';
    public $pluralName       =   'Ward';
    public function __construct(Request $request)
    {
        View()->share('modelName', $this->modelName);
        View()->share('sectionName', $this->sectionName);
        View()->share('pluralName', $this->pluralName);
    }

    public function index(Request $request)
    {
        $DB        =    Ward::query();
        $searchVariable = array();
        $inputGet = $request->all();
        if ($request->all()) {
            $searchData = $request->all();
            $searchData = $request->except(['display', '_token', 'order', 'sortBy', 'page']);

            foreach ($searchData as $fieldName => $fieldValue) {
                if ($fieldValue != "") {
                    if ($fieldName == "name") {
                        $DB->where("wards.name", 'like', '%' . $fieldValue . '%');
                    }
                    if ($fieldName == "word_number") {
                        $DB->where("wards.word_number", 'like', '%' . $fieldValue . '%');
                    }
                }
                $searchVariable = array_merge($searchVariable, array($fieldName => $fieldValue));
            }
        }
        // $DB->where('is_deleted', 0);
        $sortBy = ($request->input('sortBy')) ? $request->input('sortBy') : 'created_at';
        $order = ($request->input('order')) ? $request->input('order') : 'DESC';
        $records_per_page = ($request->input('per_page')) ? $request->input('per_page') : 10;

        $results = $DB->orderBy($sortBy, $order)->paginate($records_per_page);
        $complete_string = $request->query();
        unset($complete_string["sortBy"], $complete_string["order"]);
        $query_string = http_build_query($complete_string);
        $results->appends($inputGet)->render();
        return  View::make($this->modelName.'.index', compact('results', 'searchVariable', 'sortBy', 'order', 'query_string'));
    }


    public function create()
    {
        return  View::make($this->modelName.'.add');
    }


    function store(Request $request)
    {
        $thisData                    =    $request->all();
        if (!empty($thisData)) {
            $validator = Validator::make(
                $request->all(),
                array(
                    'name'                      => 'required|string',
                    'word_number'               => 'required|numeric|unique:wards',
                    'on_road_feet'              => 'required',
                    'house_type'                => 'required',
                    'condition_regarding_land'  => 'required',
                ),
                array(
                    "name.required"                =>    trans("The name field is required."),
                    "word_number.required"         =>    trans("The word number field is required."),
                )
            );
            if ($validator->fails()) {

                return Redirect::back()->withErrors($validator)->withInput();
            } else {
                DB::beginTransaction();
                $obj                           =  new Ward;
                $obj->name                     = $request->input('name');
                $obj->word_number              = $request->input('word_number');
                $obj->on_road_feet             = $request->input('on_road_feet');
                $obj->house_type               = $request->input('house_type');
                $obj->condition_regarding_land = $request->input('condition_regarding_land');

                // if ($request->hasFile('og_image')) {
                //     $extension               =    $request->file('og_image')->getClientOriginalExtension();
                //     $fileName                =    time() . '-og_image.' . $extension;
                //     $folderName              =     strtoupper(date('M') . date('Y')) . "/";
                //     $folderPath              =    Config('constants.SEO_PAGE_IMAGE_ROOT_PATH') . $folderName;
                //     if (!File::exists($folderPath)) {
                //         File::makeDirectory($folderPath, $mode = 0777, true);
                //     }
                //     if ($request->file('og_image')->move($folderPath, $fileName)) {
                //         $obj->og_image                    =    $folderName . $fileName;
                //     }
                // }
                $responseSave    = $obj->save();

                if (!$responseSave) {
                    DB::rollback();
                    Session::flash('error', trans("Something went wrong."));
                    return Redirect::back()->withInput();
                }
                DB::commit();
                Session::flash('success', trans("Ward has been added successfully"));
                return redirect()->route($this->modelName . '.index');
            }
        }
    }


    public function edit($Id)
    {
        // $modelId             = base64_decode($Id);
        $modelId             = $Id;
        $modelDetail         =  Ward::where('id', $modelId)->first();
        if (empty($modelDetail)) {
            return back();
        }
        return  View::make($this->modelName.'.edit', compact('modelDetail'));
    }

    function update($Id, Request $request)
    {
        $formData                =    $request->all();
        $modelDetail             =    Ward::find($Id);
        if (empty($modelDetail)) {
            return back();
        }
        $validator = Validator::make(
            $formData,
            array(
               'name'              => 'required|string', 
               'word_number'       => 'required|numeric|unique:wards,word_number,' . $modelDetail->id
            ),
            array(
               "name.required"                =>    trans("The name field is required."),
               "word_number.required"         =>    trans("The word number field is required."),
            )
        );
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        } else {
            DB::beginTransaction();
                $obj                     =  $modelDetail;
                $obj->name               = $request->input('name');
                $obj->word_number        = $request->input('word_number');
                // $obj->title              = $request->input('title');
                // if ($request->hasFile('og_image')) {
                //     $extension               =    $request->file('og_image')->getClientOriginalExtension();
                //     $fileName                =    time() . '-og_image.' . $extension;
                //     $folderName              =     strtoupper(date('M') . date('Y')) . "/";
                //     $folderPath              =    Config('constants.SEO_PAGE_IMAGE_ROOT_PATH') . $folderName;
                //     if (!File::exists($folderPath)) {
                //         File::makeDirectory($folderPath, $mode = 0777, true);
                //     }
                //     if ($request->file('og_image')->move($folderPath, $fileName)) {
                //         $obj->og_image                    =    $folderName . $fileName;
                //     }
                // }
               $responseSave    = $obj->save();

            if (!$responseSave) {
                DB::rollback();
                Session::flash('error', trans("Something went wrong."));
                return back();
            }
            DB::commit();
            Session::flash('success',  trans("Ward has been updated successfully"));
            return redirect()->route($this->modelName . '.index');
        }
    }
    public function changeStatus($modelId = 0, $status = 0)
    {
        if ($status == 1) {
            $statusMessage   =   "Ward has been deactivated successfully";
        } else {
            $statusMessage   =   "Ward has been activated successfully";
        }
        $user = Ward::find($modelId);
        if ($user) {
            $currentStatus = $user->is_active;
            if (isset($currentStatus) && $currentStatus == 0) {
                $NewStatus = 1;
            } else {
                $NewStatus = 0;
            }
            $user->is_active = $NewStatus;
            $ResponseStatus = $user->save();
        }
        Session()->flash('flash_notice', $statusMessage);
        return back();
    }

    public function delete($modelId, Request $request)
    {
        // $ids    = base64_decode($modelId);
        $ids    = $modelId;
        $delete_item = Ward::where('id', $ids)->delete();
        Session::flash('success', trans("Ward has been removed successfully"));
        return redirect()->back();
    }
}
