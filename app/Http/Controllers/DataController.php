<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    public function Data()
    {
        // Gửi yêu cầu HTTP GET đến API và lấy dữ liệu về
        $response = Http::get('http://127.0.0.1:8000/api/get-product');

        // Kiểm tra xem yêu cầu đã thành công hay không
        if ($response->successful()) {
            $data = $response->json();
            // Xử lý dữ liệu tại đây, ví dụ: trả về view hiển thị dữ liệu
            return view('data.index', compact('data'));
        } else {
            // Xử lý khi yêu cầu thất bại
            return "Lỗi trong quá trình gọi API";
        }
    }
}
