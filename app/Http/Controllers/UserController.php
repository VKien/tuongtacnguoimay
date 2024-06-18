<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use App\Models\Schedule;
use App\Models\Service;
use App\Models\User;
use App\Models\UserRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function employee()
    {
        return view('employees.home');
    }

    public function doctor()
    {
        return view('doctors.home');

    }

    public function manager()
    {
        return view('managers.home');
    }

    public function createEmployee()
    {
        return view('managers.create-employee');
    }


    public function PostCreateEmployee
    (Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'rule' => 'in:1,2,3',
            'sex' => 'in:0,1',
            'password' => 'required|min:6',
        ], [
            'email.required' => 'Email là bắt buộc',
            'email.email' => 'Email phải là một địa chỉ email hợp lệ',
            'name.required' => 'Tên là bắt buộc',
            'rule.in' => 'Quy tắc phải là một trong các giá trị: 1, 2, 3',
            'sex.in' => 'Giới tính phải là một trong các giá trị: 0, 1',
            'password.required' => 'Mật khẩu là bắt buộc',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
        ]);
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->sex = $request->input('sex');
        $user->created_by = Session::get("loginId");
        $user->updated_by = Session::get("loginId");
        $user->password = Hash::make($request->input('password'));
        if ($user->save()) {
            // Handle user roles
            $roles = $request->only(['ruleEmployee', 'ruleDoctor', 'ruleManager']);
            foreach ($roles as $role => $value) {
                if ($value) {
                    UserRule::create([
                        'user_id' => $user->id,
                        'rule_id' => $value,
                    ]);
                    echo $value;
                }
            }

            return back()->with('success', 'Bạn đã đăng ký thành công.');
        } else {
            // Return failure response
            return back()->with('fail', 'Đã xảy ra lỗi, vui lòng thử lại.');
        }
    }

    public
    function DeleteEmployee($id)
    {
        // Find the user by ID and delete them
        $user = User::findOrFail($id);
        $user->delete();

        // Redirect back with a success message
        return back()->with('success', 'Người dùng đã được xóa thành công.');
    }

    public
    function ListEmployee()
    {
        $data = User::with('userRules.rule')->get();
        $data->transform(function ($user) {
            // Format the created_at attribute
            $user->formatted_created_at = date('d/m/Y', strtotime($user->created_at));

            return $user;
        });
        // Pass the data to the view
        return view('managers.accounts', compact('data'));
    }


    public
    function EditEmployee($id)
    {
        // Find the user by ID and eager load the related userRules and rules
        $user = User::with('userRules.rule')->where('id', $id)->first();

        // Check if the user was found
        if (!$user) {
            return redirect()->back()->withErrors('User not found');
        }
        echo $user;
        return view('managers.edit-employee', compact('user'));
    }


    public
    function UpdateEmployee(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('managers.employees')->with('error', 'Employee not found.');
        }

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'sex' => 'required|in:0,1',
            'password' => 'nullable|string|min:6',
        ]);

        // Update the user's information
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->sex = $request->input('sex');

        // Check if the password is being updated
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $roles = $request->only(['ruleEmployee', 'ruleDoctor', 'ruleManager']);

        foreach ($roles as $role => $value) {
            if ($value) {
                // Cập nhật hoặc tạo mới quy tắc
                UserRule::updateOrCreate(
                    ['user_id' => $user->id, 'rule_id' => $value],
                    ['user_id' => $user->id, 'rule_id' => $value]
                );
            }
        }
        UserRule::where('user_id', $user->id)->whereNotIn('rule_id', array_values($roles))->delete();
        print_r($request->all());
        $user->save();

        return redirect('managers/accounts')->with('success', 'Employee updated ' . $user->name . ' successfully.');
    }

    public function search(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $rule = $request->input('rule') == "null" ? null : $request->input('rule');

        // Thực hiện truy vấn với các điều kiện lọc và phân trang
        $data = User::with('userRules.rule')
            ->when($id, function ($query, $id) {
                return $query->orWhere('users.id', '=', $id);
            })
            ->when($name, function ($query, $name) {
                return $query->orWhere('users.name', 'LIKE', "%{$name}%");
            })
            ->when($rule, function ($query, $rule) {
                return $query->orWhereHas('userRules.rule', function ($query) use ($rule) {
                    $query->where('rules.id', 'LIKE', "%{$rule}%");
                });
            })
            ->paginate(2); // Adjust the number to the desired items per page

        $data->getCollection()->transform(function ($user) {
            // Format the created_at and birthday attributes
            $user->formatted_created_at = date('d/m/Y', strtotime($user->created_at));
            $user->formatted_birthday = date('d/m/Y', strtotime($user->birthday));

            return $user;
        });

        $rules = Rule::all();

        // Trả về view với dữ liệu
        return view('managers.search', compact('data', 'rules'));
    }

    public function CreateBuild()
    {
        $services = Service::all();
        return view('customers.create-build', compact('services'));
    }

    public function StoreBuild(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'date' => 'required|date|after:today',
            'service' => 'required|numeric',
        ], [
            'name.required' => 'Không được bỏ trống.',
            'phone.required' => 'Không được bỏ trống.',
            'phone.numeric' => 'Số điện thoại phải là số.',
            'date.required' => 'Không được bỏ trống.',
            'date.date' => 'Ngày phải là một ngày hợp lệ.',
            'date.after' => 'Ngày phải ở trong tương lai.',
            'service.required' => 'Không được bỏ trống.',
            'service.numeric' => 'Dịch vụ phải là số.',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        if ($user->save()) {
            UserRule::create([
                'user_id' => $user->id,
                'rule_id' => 4,
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ]);
            Schedule::create([
                'date' => $request->input('date'),
                'service_id' => $request->input('service'),
                'doctor_id' => 4,
                'customer_id' => $user->id,
                'created_by' => $user->id,
                'updated_by' => $user->id,
            ]);
            return back()->with('success', 'Bạn đã đăng ký thành công.');
        } else {
            return back()->with('fail', 'Đã xảy ra lỗi, vui lòng thử lại.');

        }
    }

    public function getCfBuild(Request $request)
    {
        $status = $request->input('status');
        if ($status === null) {
            // Fetch users with schedules having status 0
            $users = User::whereHas('schedulesAsCustomer', function ($query) {
                $query->where('status', '=', 0);
            })->with(['schedulesAsCustomer' => function ($query) {
                $query->where('status', '=', 0);
            }])->get();
        } else {
            // Fetcuh users with schedules having the specified status
            $users = User::whereHas('schedulesAsCustomer', function ($query) use ($status) {
                $query->where('status', '=', $status);
            })->with(['schedulesAsCustomer' => function ($query) use ($status) {
                $query->where('status', '=', $status);
            }])->get();
        }
        $statusCounts = Schedule::select('status', \DB::raw('COUNT(*) as status_count'))
            ->groupBy('status')
            ->get();
        echo $users;
        return view('employees.cfBuildCustomer', compact('users', 'status', 'statusCounts'));
    }

}
