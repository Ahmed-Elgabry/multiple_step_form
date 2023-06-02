<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\step_two;
use App\Models\step_three;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class OptionController extends Controller
{

    public function index()
    {
        $datacenter = Option::all();

        $dataArray = [];
        foreach ($datacenter as $myModel) {
            $dataArray[] = [
                'time_center' => $myModel->time_center,
                'price_center' => $myModel->price_center,
                'days_center' => $myModel->days_center,
            ];
        }



        return view('show', compact('datacenter', 'dataArray'));
    }

    public function home()
    {
        return view('home');
    }

    public function show($id)
    {
        $datacenter = Option::where('id', $id)->get();
        $dataperson = step_two::where('option_id', $id)->get();
        $datapank = step_three::where('option_id', $id)->get();

        $dataArray = [];
        foreach ($datacenter as $myModel) {
            $dataArray[] = [
                'time_center' => $myModel->time_center,
                'price_center' => $myModel->price_center,
                'days_center' => $myModel->days_center,
            ];
        }

        $dataArrayPerso = [];

        foreach ($dataperson as $myModel) {
            $dataArrayPerso[] = [
                'time_work' => $myModel->time_work,
                'price_center' => $myModel->price_center,
                'paidServeStepTwo' => $myModel->paidServeStepTwo,
                'days_center' => $myModel->days_center,
            ];
        }

        return view('table', compact('datacenter', 'dataperson', 'datapank', 'dataArray', 'dataArrayPerso'));
    }

    public function deleteStepTwo($id)
    {
        $steptwo = step_two::find($id);
        if ($steptwo) {
            $steptwo->delete();
            return response()->json([
                'success' => true,
                'message' => 'Record deleted successfully'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Record not found'
            ]);
        }
    }

    public function store(Request $request)
    {
        // step one
            $option = new Option;
            $option->name_center = $request->name_center;
            $option->city = $request->city;
            $option->district = $request->district;
            $option->location = $request->location;
            $option->gender = $request->gender;
            $option->type = $request->type;
            $option->select = mb_convert_encoding($request->input('select'),'UTF-8', 'auto');
            $option->count_home = $request->count_home;
            $option->select_center = mb_convert_encoding($request->input('select_center'),'UTF-8', 'auto');
            $option->time_center = mb_convert_encoding($request->input('time_center'),'UTF-8', 'auto');
            $option->free_center = mb_convert_encoding($request->input('free_center'),'UTF-8', 'auto');
            $option->price_center = mb_convert_encoding($request->input('price_center'),'UTF-8', 'auto');
            $option->days_center = mb_convert_encoding($request->input('days_center'),'UTF-8', 'auto');
            $option->maneger_person = $request->maneger_person;
            $option->phone_maneger = $request->phone_maneger;
            $option->email_maneger = $request->email_maneger;
            $option->phone_work = $request->phone_work;
            $option->phone_mony = $request->phone_mony;
            $option->about_center = $request->about_center;
            $option->save();

            $cookie = cookie('option_id', $option->id);

            return response()->json([
                'success' => true,
                'message' => 'Data stored successfully',
                'option_id' => $option->id,
            ])->withCookie($cookie);

    }

    public function store_two(Request $request)
    {
        // step two
        $steptwo = new step_two;
        $optionId = request()->cookie('option_id');
        $steptwo->option_id = $optionId;
        $steptwo->fname = $request->input('fname');
        $steptwo->lname = $request->input('lname');
        $steptwo->nationality = $request->nationality;
        $steptwo->age = $request->age;
        $steptwo->freeServeStepTwo = mb_convert_encoding($request->input('freeServeStepTwo'),'UTF-8', 'auto');
        $steptwo->paidServeStepTwo = mb_convert_encoding($request->input('paidServeStepTwo'),'UTF-8', 'auto');
        $steptwo->type_msg = mb_convert_encoding($request->input('type_msg'),'UTF-8', 'auto');
        $steptwo->service_msg = mb_convert_encoding($request->input('service_msg'),'UTF-8', 'auto');
        $steptwo->time_work = mb_convert_encoding($request->input('time_work'),'UTF-8', 'auto');
        $steptwo->days_work = mb_convert_encoding($request->input('daysswork'),'UTF-8', 'auto');
        $steptwo->goto = $request->goto;
        $steptwo->experince = $request->experinse;

        if($request->hasFile('pic')){
            $image = $request->file('pic');
            if ($image) {
                $file_name = $image->getClientOriginalName();
                $steptwo->pic = $file_name;

                try {
                    // move pic
                    $imageName = $request->pic->getClientOriginalName();
                    $request->pic->move(public_path('images/'), $imageName);
                } catch (\Exception $e) {
                    // handle the exception
                    return response()->json(['error' => 'Failed to upload file'], 500);
                }
            }
        }
        $steptwo->save();


        return response()->json([
            'success' => true,
            'message' => 'Data stored successfully',
            'id' => $steptwo->id,
        ]);
    }

    public function store_three(Request $request)
    {
        // step three
        $stepthree = new step_three;

        $validatedData = $request->validate([
            'upload_formal' => 'required',
            'upload_center' => 'required',
            'name_bank' => 'required',
            'ipan' => 'required',
        ], [
            'upload_formal.required' => 'The formal upload field is required.',
            'upload_center.required' => 'The center upload field is required.',
            'name_bank.required' => 'The bank name field is required.',
            'ipan.required' => 'The IPAN field is required.',
        ]);

        $optionId = request()->cookie('option_id');
        $stepthree->option_id = $optionId;

        if($request->hasFile('upload_formal')){
            $image = $request->file('upload_formal');
            if ($image) {
                $file_name = $image->getClientOriginalName();
                $stepthree->img_formal = $file_name;

                try {
                    // move pic
                    $imageName = $request->upload_formal->getClientOriginalName();
                    $request->upload_formal->move(public_path('images/'), $imageName);
                } catch (\Exception $e) {
                    // handle the exception
                    return response()->json(['error' => 'Failed to upload file'], 500);
                }
            }
        } else {
            return redirect()->back()->withErrors(['upload_formal' => 'The formal upload field is required.']);
        }

        if($request->hasFile('upload_center')){
            $image = $request->file('upload_center');
            if ($image) {
                $file_name = $image->getClientOriginalName();
                $stepthree->img_center = $file_name;

                try {
                    // move pic
                    $imageName = $request->upload_center->getClientOriginalName();
                    $request->upload_center->move(public_path('images/'), $imageName);
                } catch (\Exception $e) {
                    // handle the exception
                    return response()->json(['error' => 'Failed to upload file'], 500);
                }
            }

        } else {
            return redirect()->back()->withErrors(['upload_center' => 'The center upload field is required.']);
        }

        $stepthree->name_bank = $request->name_bank;
        $stepthree->ipan = $request->ipan;
        $stepthree->save();

        return redirect()->back();
    }


    public function destroy($img)
    {
        try {
            $file = step_three::findOrFail($img);
            Storage::disk('public')->delete('images/' . $file->img_center);
            Storage::disk('public')->delete('images/' . $file->img_formal);
            Storage::disk('public')->delete('images/' . $file->pic);
            $file->delete();

            return redirect()->back()->with('delete', 'تم حذف المرفق بنجاح');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting the file.');
        }
    }

    public function get_file($img)
    {
        $st="images";
        $pathToFile = public_path($st.'/'.$img);
        return response()->download($pathToFile);
    }

    public function open_file($img)
    {
        $st="images";
        $pathToFile = public_path($st.'/'.$img);
        return response()->file($pathToFile);
    }

    public function delete($id)
    {
        try {
            $file = Option::findOrFail($id);
            $file->delete();

            return redirect()->route('show-details')->with('delete', 'تم حذف الجدول بنجاح');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting the file.');
        }
    }

    public function destroyperson($id)
    {
        try {

            $file_step = step_two::findOrFail($id);
            $file_step->delete();

            return redirect()->back()->with('delete', 'تم حذف المرفق بنجاح');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while deleting the file.');
        }
    }
}
